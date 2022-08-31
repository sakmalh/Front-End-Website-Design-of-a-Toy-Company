<?php
  //database connection code here
  $server   = "localhost";
  $username = "root"; //built in admin username
  $password = ""; //by default its blank
  $db_name  = "megatron";

  $mysqli = new mysqli($server,$username,$password,$db_name);

  if($mysqli->connect_error){
    echo "<pre>";
    echo $mysqls->connect_error;
    die("connection failed");
    echo "</pre>";
  }
   //echo "connection successfull";
?>
