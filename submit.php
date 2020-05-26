<?php
session_start();
$mysqli = new mysqli("localhost","root","","crypto");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT id FROM login where username=$username and password=$password";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  $_SESSION["id"]=$row["id"];
} else {
  echo "0 results";
}
$conn->close();
?>