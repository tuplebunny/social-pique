CREATE OR REPLACE FUNCTION client_socket_token_validate (
    _client_socket_token TEXT
  , _client_socket_pid   TEXT
) RETURNS JSONB LANGUAGE PLPGSQL AS $$
DECLARE
  __client_seq_id BIGINT := 0;
BEGIN

  SELECT client_seq_id
  INTO __client_seq_id
  FROM client_socket
  WHERE client_socket_token = _client_socket_token
  ;

  IF NOT FOUND THEN
    RETURN JSOB_BUILD_ARRAY(
      'fail', 'Invalid websocket token'
    );
  END IF;

  DELETE FROM client_socket_pid
  WHERE client_socket_pid = _client_socket_pid
  ;

  -- Later: Wrap this in exception.
  INSERT INTO client_socket_pid
    (client_seq_id, client_socket_pid)
  VALUES
    (__client_seq_id, _client_socket_pid)
  ;

  RETURN JSONB_BUILD_ARRAY(
    'pass', __client_seq_id
  );

END;
$$;