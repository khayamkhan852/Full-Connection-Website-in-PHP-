<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "assignment_four";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName,"3308");

if (!$conn) {    //if connection is failed conn will be unpopulated
  die("Connection Failed : " .mysqli_connect_error()); //will throw out the specific error 
}
