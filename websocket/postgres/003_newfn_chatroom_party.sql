CREATE OR REPLACE FUNCTION chatroom_party ()
RETURNS JSONB LANGUAGE SQL AS $$
  
  SELECT
    JSONB_AGG(c.client_name ORDER BY c.client_name ASC)
  FROM
    client_socket_pid AS csp
  LEFT JOIN
    client AS c
  USING
    (client_seq_id)
  ;


$$;