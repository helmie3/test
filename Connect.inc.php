<?php
  $host = "localhost";
  $user = "root";
  $pwd = "";
  $database = "personen";
  
  $con = @mysql_connect ($host, $user, $pwd);
  if ( !$con )
    die ("Verbindung zum DBMS gescheitert !!!");
    
  $db = @mysql_select_db ($database, $con);
  if ( !$db )
    die ("keine Verbindung zur DB $database m&ouml;glich !!!");
?>