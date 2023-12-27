<?php
  $con=mysqli_connect('localhost','root','','doan2');
  if (!$con){
    die("Connection failed: ".mysqli_connect_error());
  }
    session_start();
?>