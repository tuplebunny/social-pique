<?php

  /*

    Return to browser a structure like:

    ...
    
  */

  $pg  = pg_connect("host=localhost port=5432 user=postgres password=password dbname=sp_chat_dev");
  $q   = "SELECT chatroom_party();";
  $rel = pg_query($pg, $q);
  $tup = pg_fetch_row($rel);
  
  header("Content-Type: application/json");
  echo $tup[0];
  
?>