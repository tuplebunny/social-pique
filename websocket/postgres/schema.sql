/*

2025-09-21-Sunday

*/

CREATE TABLE chatroom (
    chatroom_seq_id BIGSERIAL NOT NULL
  , chatroom_name TEXT NOT NULL

  , PRIMARY KEY (chatroom_seq_id)
);

CREATE TABLE client (
    client_seq_id BIGSERIAL NOT NULL
  , client_created_at TIMESTAMPTZ NOT NULL DEFAULT NOW()
);

CREATE TABLE client_pid (
    client_seq_id BIGINT NOT NULL
  , client_pid TEXT NOT NULL
);



-- later
--
CREATE TABLE client_credential (
    client_seq_id BIGINT NOT NULL
  , cc_created_at TIMESTAMPTZ NOT NULL DEFAULT NOW()
  , client_password TEXT NOT NULL DEFAULT ''
);

CREATE TABLE client_profile (
    client_seq_id BIGINT NOT NULL
  , client_name TEXT NOT NULL
  , client_color_fg TEXT NOT NULL DEFAULT '#000'
  , client_color_bg TEXT NOT NULL DEFAULT '#FFF'
  , client_pref_timezone TEXT NOT NULL DEFAULT 'America/New_York'
  , client_pref_language TEXT NOT NULL DEFAULT 'English'
);

CREATE TABLE client_pid (

);

CREATE TABLE client_login (
    client_seq_id BIGINT NOT NULL
  , 
);

CREATE TABLE client (
    client_seq_id BIGSERIAL NOT NULL
  , client_created_at TIMESTAMPTZ NOT NULL DEFAULT NOW()
  , client_name TEXT NOT NULL
  

  , PRIMARY KEY (client_seq_id)

  , CONSTRAINT client_name_length
    CHECK ((LENGTH(client_name) > 0) AND (LENGTH(client_name) <= 32))
);

CREATE TABLE client_pid (
    client_seq_id BIGINT NOT NULL
  , client_pid TEXT NOT NULL
);

CREATE TABLE participant (
    chatroom_seq_id BIGINT NOT NULL
  , client_seq_id BIGINT NOT NULL

  , PRIMARY KEY (chatroom_seq_id, client_seq_id)

  , FOREIGN KEY (chatroom_seq_id)
    REFERENCES chatroom (chatroom_seq_id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT

  , FOREIGN KEY (client_seq_id)
    REFERENCES client (client_seq_id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);