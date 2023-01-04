<?php
  $servername="localhost";
  $dbUsername="root";
  $dbPassword="Vedant@07hiwarkar";
  $dbName="loginsystemtut";
  $conn=mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
  if (! $conn){
    die("Connection Failed :".mysqli_connect_error());
  }
 ?>
