CREATE OR REPLACE FUNCTION chatroom_broadcast (
    _client_seq_id BIGINT
  , _client_socket_pid TEXT
) RETURNS JSONB LANGUAGE SQL AS $$

  SELECT
      -- csp.client_seq_id
    -- , csp.csp_created_at
    JSONB_AGG(JSONB_BUILD_ARRAY(
      csp.client_socket_pid, c.client_name
    ))
  FROM
    client_socket_pid AS csp
  LEFT JOIN LATERAL
    (
      SELECT
          csp2.client_seq_id
        , csp2.csp_created_at
      FROM
        client_socket_pid AS csp2
      WHERE
        csp.client_seq_id = csp2.client_seq_id
      ORDER BY
        csp2.csp_created_at DESC
      LIMIT
        1
    ) AS r1
  ON
    csp.client_seq_id = r1.client_seq_id
  AND
    csp.csp_created_at = r1.csp_created_at
  LEFT JOIN
    client AS c
  ON
    c.client_seq_id = _client_seq_id
  ;


$$;