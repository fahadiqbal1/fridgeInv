<?php

include('config.php');

$con=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL Database: " . mysqli_connect_error();
  }
?> 