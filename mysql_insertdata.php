<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DCT121C3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO HOCSINH (MSSV, HO, TEN, PHAI)
VALUES ('12345555', 'Da', 'Mi','NU')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>