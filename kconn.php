<?php
  $servername-"localhost";
  $username= "root";
  $password=" "
  $db_name="db1";
  $conn=new mysqli($servername,$usernmae,$password,$db_name,3307);
  if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
  }
  echo "  ";
  ?>
