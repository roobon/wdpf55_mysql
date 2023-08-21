<?php 
   $db = new mysqli("localhost", "root", "", "idb_bisew_wdpf55");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>New Student Entry</h2>
    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);
        // print_r($hobby);
        $hobbies = implode(',', $hobby);
        $sql = "INSERT INTO students VALUES(NULL, '$name', '$gender', '$dob', '$email', '$batch', '$address', '$hobbies')";
        $db->query($sql);
        if($db->affected_rows>0){
            header("Location:index.php");
        }
    }
    ?>
    <form action="" method="post">
        Name : <input type="text" name="name" placeholder="Enter Name"><br>
        Gender <br>
        Male : <input type="radio" name="gender" value="male">
        Female : <input type="radio" name="gender" value="female"><br>
        <input type="date" name="dob"><br>
        <input type="text" name="email" placeholder="Enter email"><br>
        Batch Name: <br>
        <select name="batch">
            <option value="">Select One</option>
            <option value="WDPF_55">WDPF_55</option>
            <option value="WDPF_52">WDPF_52</option>
            <option value="WDPF_53">WDPF_53</option>
            <option value="WDPF_54">WDPF_54</option>
        </select><br>
        Address : <textarea name="address" id="" cols="30" rows="10"></textarea><br>
        Cricket : <input type="checkbox" name="hobby[]" value="cricket">
        Football : <input type="checkbox" name="hobby[]" value="football">
        Hockey : <input type="checkbox" name="hobby[]" value="hockey"><br>
        Tennis : <input type="checkbox" name="hobby[]" value="tennis">
        Badminton : <input type="checkbox" name="hobby[]" value="badminton"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form> 
</body>
</html>