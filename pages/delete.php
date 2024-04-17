<?php

  include("../config/connect_db.php");

  $delete = $_GET['delete'];

  $sql = "DELETE FROM contacts WHERE id = '$delete'";

  $delete_contact = mysqli_query($connection,$sql);

  if($delete_contact){
    header("Location: /crud/");
  }
  else{
    echo "Something went wrong!";
  }
?>