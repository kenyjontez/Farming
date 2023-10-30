<?php
$host="localhost";
$username = "root";
$password = "";
$db="avocado payroll";
// Create connection
$conn = mysqli_connect($host,$username,$password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully!!";

$sql = "INSERT INTO  `infodata`(`name`, `gender`, `contact`, `dob`, `identity`)
       VALUES ('[name]','[gender]','[contact]','[dob]','[identity]')"

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>