# 2025-09-24-Wednesday
#


CREATE TABLE client (
    client_seq_id BIGSERIAL NOT NULL
  , client_created_at TIMESTAMPTZ NOT NULL DEFAULT NOW()
  , client_name TEXT NOT NULL
  , client_password TEXT NOT NULL
  
  , PRIMARY KEY (client_seq_id)

  , CONSTRAINT client_name_length
    CHECK ((LENGTH(client_name) >= 1) AND (LENGTH(client_name) <= 32))

  , UNIQUE (client_name)
);

CREATE SEQUENCE client_socket_salt;

-- Each client can have at most 1 active connection.
--
CREATE TABLE client_socket (
    client_seq_id BIGINT NOT NULL
  , client_socket_created_at TIMESTAMPTZ NOT NULL DEFAULT NOW()
  , client_socket_token TEXT NOT NULL DEFAULT NEXTVAL('client_socket_salt')::TEXT || MD5(RANDOM()::TEXT)

  , PRIMARY KEY (client_seq_id)

  , FOREIGN KEY (client_seq_id)
    REFERENCES client (client_seq_id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT

  , UNIQUE (client_socket_token)
);

-- Consider making use of Pg's ability to store additional data in an index.
--
CREATE TABLE client_socket_pid (
    csp_created_at TIMESTAMPTZ NOT NULL DEFAULT NOW()
  , client_seq_id BIGINT NOT NULL
  , client_socket_pid TEXT NOT NULL

  , PRIMARY KEY (client_seq_id)

  , FOREIGN KEY (client_seq_id)
    REFERENCES client_socket (client_seq_id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);




CREATE TABLE client_socket_activity (
    csa_created_at TIMESTAMPTZ NOT NULL DEFAULT NOW()
  , client_socket_token TEXT NOT NULL

  , PRIMARY KEY (client_socket_token, csa_created_at)

  , FOREIGN KEY (client_socket_token)
    REFERENCES client_socket (client_socket_token)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);

























CREATE TABLE chatroom (
    chatroom_seq_id BIGSERIAL NOT NULL
  , chatroom_name TEXT NOT NULL

  , PRIMARY KEY (chatroom_seq_id)
);


CREATE TABLE participant (
    chatroom_seq_id BIGINT NOT NULL
  , client_socket_token BIGINT NOT NULL

  , PRIMARY KEY (chatroom_seq_id, client_socket_token)

  , FOREIGN KEY (chatroom_seq_id)
    REFERENCES chatroom (chatroom_seq_id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT

  , FOREIGN KEY (client_socket_token)
    REFERENCES client_socket (client_socket_token)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);