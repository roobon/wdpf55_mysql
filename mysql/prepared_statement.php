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
$stmt = $conn->prepare("INSERT INTO students (Name, Gender, DOB, Email, Batch, Address) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssis", $name, $gender, $dob, $email, $batch, $address);

// set parameters and execute
$name = "John";
$gender = "Male";
$dob = "2010-06-01";
$email =  "john@gmail.com";
$batch = '2';
$address = "Dhanmondi";
$stmt->execute();

$name = "Masum";
$gender = "Male";
$dob = "2012-06-01";
$email =  "masum@gmail.com";
$batch = '1';
$address = "Dhanmondi";
$stmt->execute();

$name = "Mijan";
$gender = "Male";
$dob = "2010-06-01";
$email =  "mijan@gmail.com";
$batch = '2';
$address = "Mirpur";

$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>