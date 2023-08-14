<?php
require_once("db_config.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, email, address, password, phone) VALUES ('$name', '$email', '$address', '$password', '$phone')";
    $result = $db->query($sql);

    if ($result) {
        header("Location: read_users.php");
        exit();
    } else {
        echo "Error: " . $db->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Create User</title>
</head>

<body>
    <h1>Create User</h1>
    <form method="POST" action="create_user.php">
        <label>Name: <input type="text" name="name" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Address: <input type="text" name="address" required></label><br>
        <label>Password: <input type="password" name="password" required></label><br>
        <label>Phone: <input type="text" name="phone" required></label><br>
        <input type="submit" name="submit" value="Create User">
    </form>
    <a href="read_users.php">Back to Users</a>
</body>

</html>