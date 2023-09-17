<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_batches";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO students (Name, Gender, DOB, Email, Batch, Address) VALUES (?, ?, ? ,?, ?, ?)");
$stmt->bind_param("ssssis", $name, $gender, $dob, $email, $batch, $address  );

// set parameters and execute
$name = "Abol";
$gender = "male";
$dob = "2012-06-01";
$email = "john@example.com";
$batch = "2";
$address = "Mirpur";
$stmt->execute();


$name = "Kalam";
$gender = "male";
$dob = "2012-06-01";
$email = "john@example.com";
$batch = "3";
$address = "Mirpur";
$stmt->execute();


$name = "AZAD";
$gender = "male";
$dob = "2012-06-01";
$email = "john@example.com";
$batch = "4";
$address = "Mirpur";
$stmt->execute();



echo "New records created successfully";

$stmt->close();
$conn->close();
?>