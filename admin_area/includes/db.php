<?php 
// After uploading to online server, change this connection accordingly

// $con = mysqli_connect("localhost","root","","ecom");
$con = mysqli_connect("eu-cdbr-west-03.cleardb.net:3306","b78a198f7d2a64","2c0758f4","heroku_5a06a2225252fd9");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>