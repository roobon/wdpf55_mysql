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
$email = "john@example.com";
$
$
$
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$
$
$
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$
$
$
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
