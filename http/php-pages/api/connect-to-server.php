<?php

  /*

    Return to browser a structure like:

    {
      "status": "pass",
      "client_socket_key": "...",
      "chatroom_seq_id": 1
    }
    
  */

  $pg  = pg_connect("host=localhost port=5432 user=postgres password=password dbname=sp_chat_dev");
  $q   = "SELECT client_create($1, $2);";
  $qa  = array($_POST["client_name"], $_POST["client_password"]);
  $rel = pg_query_params($pg, $q, $qa);
  $tup = pg_fetch_row($rel);
  
  header("Content-Type: application/json");
  echo $tup[0];
  
?>