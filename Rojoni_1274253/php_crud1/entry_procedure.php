<?php 
$db = new mysqli ("localhost","root","","idb_bisew_wdpf55");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Student Entry</h2>
    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);
        $sql = "CALL insert_studentinfo('$name','$gender','$dob','$email','$batch','$address','$hobbies')";
        // $sql = "INSERT INTO students VALUES(NULL,'$name','$gender','$dob','$email','$batch','$address','$hobbies')";
        $db->query($sql);
        if($db->affected_rows>0){
            header("Location:index.php");
        }
    }
    ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter name"><br>
        Gender <br>
       Male <input type="radio" name="gender" value="male">
       Female <input type="radio" name="gender" value="female"><br>
        <input type="data" name="dob" placeholder="Enter dob"><br>
        <input type="text" name="email" placeholder="Enter email"><br>
        Batch Name: <br>
        <select name="batch">
            <option value="">Select one </option>
            <option value="">WDPF-55</option>
            <option value="">WDPF-54</option>
            <option value="">WDPF-53</option>
     </select><br>
     Address: <br>
    <textarea name="address" id="" cols="30" rows="10"></textarea><br>
    Hobbies: <br>
     Cricket: <input type="checkbox" name="cricket" value="cricket">
    Football: <input type="checkbox" name="football" value="football">
     Hockey: <input type="checkbox" name="hockey" value="hockey"><br>
     Tenis: <input type="checkbox" name="tenis" value="tenis">
    Badminton: <input type="checkbox" name="badminton" value="badminton"><br>
    <input type="submit" name="submit" value="SUBMIT">
    </form>
    
</body>
</html>