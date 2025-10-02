/*

SELECT client_create('username', 'password');

*/

CREATE OR REPLACE FUNCTION client_create (
    _client_name TEXT
  , _client_password TEXT
) RETURNS JSONB LANGUAGE PLPGSQL AS $$
DECLARE
  __client_seq_id       BIGINT  := 0;
  __client_socket_token TEXT    := '';
  __chatroom_seq_id     INTEGER := 0;
BEGIN

  INSERT INTO client
    (client_name, client_password)
  VALUES
    (_client_name, CRYPT(_client_password, GEN_SALT('bf', 5)))
  RETURNING
    client_seq_id
  INTO
    __client_seq_id
  ;

  INSERT INTO client_socket
    (client_seq_id)
  VALUES
    (__client_seq_id)
  RETURNING
    client_socket_token
  INTO
    __client_socket_token
  ;

  SELECT
    chatroom_seq_id
  INTO
    __chatroom_seq_id
  FROM
    chatroom
  WHERE
    chatroom_name = 'Lobby'
  ;

  RETURN JSONB_BUILD_OBJECT(
    'status', 'pass',
    'client_socket_token', __client_socket_token,
    'chatroom_seq_id', __chatroom_seq_id
  );

END;
$$;