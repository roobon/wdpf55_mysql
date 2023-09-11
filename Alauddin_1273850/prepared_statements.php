<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO students (Firstname, Lastname, Email, Gender, DOB, Batch, Address) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssis", $firstname, $lastname, $email, $gender, $dob, $batch, $address);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$gender = "Male";
$dob = "2000/7/25";
$batch = "2";
$address = "USA";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$gender = "Female";
$dob = "2002/7/25";
$batch = "1";
$address = "UK";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$gender = "Male";
$dob = "1990/7/25";
$batch = "3";
$address = "UAE";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>