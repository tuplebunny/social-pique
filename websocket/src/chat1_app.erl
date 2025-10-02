%%%-------------------------------------------------------------------
%% @doc chat1 public API
%% @end
%%%-------------------------------------------------------------------

-module(chat1_app).
-behaviour(application).

-export([start/2]).
-export([stop/1]).

start(_Type, _Args) ->
    Dispatch = cowboy_router:compile([
        {'_', [
            {"/",             cowboy_static, {priv_file, chat1, "index.html"}},
            {"/lobby",        cowboy_static, {priv_file, chat1, "lobby.html"}},
            {"/websocket",    ws_h, [0, postgres]},
            {"/ws",           cowboy_static, {priv_file, chat1, "websocket-1.html"}},
            {"/assets/[...]", cowboy_static, {priv_dir, chat1, "assets"}}

        ]}
    ]),
    {ok, _} = cowboy:start_clear(my_http_listener,
        [{port, 8080}],
        #{env => #{dispatch => Dispatch}}
    ),
    chat1_sup:start_link().

stop(_State) ->
    ok.

%% internal functions
