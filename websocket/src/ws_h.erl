-module(ws_h).

-export([init/2]).
-export([websocket_init/1]).
-export([websocket_handle/2]).
-export([websocket_info/2]).

init(Req, Opts) ->
  io:format("Init websocket...~n"),
  {cowboy_websocket, Req, Opts}.

websocket_init(_State) ->
  % erlang:start_timer(10000, self(), <<"[heartbeat]">>),
  {ok, C} = epgsql:connect(#{
      host     => "localhost",
      username => "postgres",
      password => "password",
      database => "sp_chat_dev",
      timeout  => 0
  }),
  % ok = epgsql:close(C), % if I don't close this, when does Erlang/Cowboy?
  {[], [0, C]}.


%
% 2025-09-30-Tuesday
% Very soon, NewState = [Count + 1, DBL] = State.
%

websocket_handle({text, Msg}, State = [0, DBLink]) ->
  io:format("~n~nI am here!~n~n"),
  case string:str(binary_to_list(Msg), "/identify") of
    1 ->
      ClientSeqId = validate_session_key(binary_to_list(Msg), DBLink);
    Error -> 
      % disconnect
      ClientSeqId = error
  end,
  NewState = [1, DBLink, ClientSeqId],
  {[{text, <<"Connected to server.">>}], NewState};


websocket_handle({text, <<"/keep-alive">>}, State) ->
  {ok, State};

websocket_handle({text, <<"/quit">>}, State) ->
  io:format("websocket client quit~n"),
  {stop, State};

websocket_handle({text, Msg}, State = [SeqCount, DBLink, ClientSeqId]) ->
  io:format("ClientSeqId passed to Postgres: ~p~n~n", [ClientSeqId]),
  Relation = epgsql:equery(DBLink, "SELECT chatroom_broadcast($1, $2);", [ClientSeqId, pid_to_list(self())]),
  % Relation a 3-tuple like:
  % {ok,[{column,<<"chatroom_broadcast">>,jsonb,3802,-1,-1,1,0,0}],
  %   [{<<"[\"<0.233.0>\", \"<0.236.0>\", \"<0.240.0>\"]">>}]}

  % new format: [pid, name]
  io:format("Raw relation:~n~p~n~n", [Relation]),
  {_, _, [{Data}]} = Relation,
  Pids = jsx:decode(Data),
  % io:format("~n~Data:~n~p~n~n", [Pids]),
  % io:format("~nMy Pid: ~p~n~n", [self()]),
  [list_to_pid(binary_to_list(Pid)) ! {broadcast, Msg, Name} || [Pid, Name] <- Pids],
  % io:format("~n~n~p~n~n", [Relation]),
  {ok, State};
  % {[{text, << "You said: ", Msg/binary >>}], State};

websocket_handle(_Data, State) ->
  {[], State}.

websocket_info({timeout, _Ref, Msg}, State) ->
  % erlang:start_timer(10000, self(), <<"[heartbeat]">>),
  {[{text, Msg}], State};

websocket_info({broadcast, Message, Name}, State) ->
  {[{text, <<Name/binary, ": ", Message/binary>>}], State};




websocket_info({broadcast, <<"bomb">>, Name}, State) ->
  io:format("~nbomb-1~n"),
  {close, State};
websocket_info({broadcast, "bomb", Name}, State) ->
  io:format("~nbomb-2~n"),
  {close, State};
websocket_info({broadcast, <<"bomb">>, Name}, State) ->
  io:format("~nbomb-3~n"),
  {stop, State};
websocket_info({broadcast, "bomb", Name}, State) ->
  io:format("~nbomb-4~n"),
  {stop, State};

websocket_info(_Info, State) ->
  {[], State}.


terminate(stop, PartialReq, State = [SeqCount, DBLink, ClientSeqId]) ->
  io:format("~nwtf?!~n~n"),
  epgsql:equery(DBLink, "INSERT INTO testola (x) VALUES (DEFAULT);"),
  ok;

terminate(Reason, PartialReq, State = [SeqCount, DBLink, ClientSeqId]) ->
  io:format("~nSWEET! Inside terminate!!!~n~n"),
  epgsql:equery(DBLink, "INSERT INTO testola (x) VALUES (DEFAULT);"),
  ok;

terminate(A, B, C) ->
  io:format("~nSWEET! Inside terminated adasddadad!!!~n~n"),
  % epgsql:equery(DBLink, "INSERT INTO testola (x) VALUES (DEFAULT);"),
  ok.



%% 'private' functions

validate_session_key(Message, DBLink) ->
  io:format("~nInside private function!~n"),
  [_, SocketToken] = string:tokens(Message, " "),
  Relation = epgsql:equery(DBLink, "SELECT client_socket_token_validate($1, $2);", [SocketToken, pid_to_list(self())]),
  {_, _, [{Data}]} = Relation,
  X = jsx:decode(Data),
  % Data like:
  % #{<<"client_seq_id">> => 78,<<"status">> => <<"pass">>}
  io:format("~nDATA:~n~p~n~n", [X]),
  [_, ClientSeqId] = X,
  ClientSeqId.