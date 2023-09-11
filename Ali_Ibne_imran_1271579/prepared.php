<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "idb_bisew_wdpf55";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO students (Name, Gender, Batch,Address,Hobbies,Dob,Email	) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssissss", $name, $gender,$batch,$address,$hobby,$dob, $email);

// set parameters and execute
$name = "John";
$gender = "male";
$batch = "1";
$address = "mirpur";
$hobby = "php,ddd";
$dob = "2010-02-25";
$email = "john@example.com";
$stmt->execute();

$name = "stiven";
$gender = "male";
$batch = "1";
$address = "mirpur";
$hobby = "php,ddd";
$dob = "2010-02-25";
$email = "john@example.com";
$stmt->execute();



echo "New records created successfully";

$stmt->close();
$conn->close();
?>