<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wdpf55_batches";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (student_name, student_gender, student_dob, student_email, student_batch, student_address) VALUES (?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssss", $student_name, $student_gender, $student_dob, $student_email, $student_batch, $student_address);

// set parameters and execute
$student_name = "John"; 
$student_gender = "Doe";
$student_dob = "john@example.com";
$student_email =
$student_batch =
$student_address

$stmt->execute();

$student_name = "Mary";
$student_gender = "Moe";
$student_dob = "mary@example.com";
$student_email
$student_batch
$
$stmt->execute();

$student_name = "Julie";
$student_gender = "Dooley";
$student_dob = "julie@example.com";
$student_email
$
$
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
