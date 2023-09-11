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
$stmt = $conn->prepare("INSERT INTO  students (NULL,                                  Name, Gender, DOB, Email, Batch, Address) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $gender, $dob, $email, $batch, $address);

// set parameters and execute
$name = "John";
$gender = "Male";
$dob = "2010-06-01";
$email = "john@example.com";
$batch = '2';
$address = "Dhanmondi";
$stmt->execute();

$name = "Masum";
$gender = "Male";
$dob = "2010-06-01";
$email = "masum@example.com";
$batch = '1';
$address = "Dhanmondi";
$stmt->execute();

$name = "Mizan";
$gender = "Male";
$dob = "2010-06-01";
$email = "mizan@example.com";
$batch = '';
$address = "Dhanmondi";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>