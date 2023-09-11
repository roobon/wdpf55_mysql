<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "idb_bisew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO students (studentname, gender, batch, phone, email) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssiss", $studentname, $gender, $batch, $phone, $email);

// set parameters and execute
$studentname = "Mon";
$gender = "Male";
$batch = 55;
$phone = "654 321 7890";
$email = "john@example.com";
$stmt->execute();


$studentname = "Non";
$gender = "Male";
$batch = 55;
$phone = "654 321 7890";
$email = "john@example.com";
$stmt->execute();

$studentname = "Kon";
$gender = "Male";
$batch = 55;
$phone = "654 321 7890";
$email = "john@example.com";
$stmt->execute();


echo "New records created successfully";

$stmt->close();
$conn->close();
?>