<?php
require_once("db_config.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "UPDATE users SET name='$name', email='$email', address='$address', phone='$phone' WHERE id=$id";
    $result = $db->query($sql);

    if ($result) {
        header("Location: read_users.php");
        exit();
    } else {
        echo "Error: " . $db->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT id, name, email, address, phone FROM users WHERE id=$id";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update User</title>
</head>

<body>
    <h1>Update User</h1>
    <form method="POST" action="update_user.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required></label><br>
        <label>Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required></label><br>
        <label>Address: <input type="text" name="address" value="<?php echo $row['address']; ?>" required></label><br>
        <label>Phone: <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required></label><br>
        <input type="submit" name="submit" value="Update User">
    </form>
    <a href="read_users.php">Back to Users</a>
</body>

</html>