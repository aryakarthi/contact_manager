<?php

  $db_server = "localhost";
  $db_username = "root";
  $db_password = "";
  $db_name = "crud";

  try {
    $connection = mysqli_connect($db_server,$db_username,$db_password,$db_name);
  } catch (mysqli_sql_exception) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
?>