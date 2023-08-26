<?php 
    $db = new mysqli("localhost", "root", "", "idb_bisew");
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
    $id = $_REQUEST['id'];
    
    if(isset($_POST['submit'])){
        extract($_POST);
        //print_r($hobby);
        $hobbies = implode(',', $hobby);
        $sql = "UPDATE students SET Name='$name', Gender='$gender', DOB='$dob', Email='$email', Batch='$batch', Address='$address', Hobbies='$hobbies'  WHERE ID='$id'";
        $db->query($sql);
        if($db->affected_rows>0){
            header("Location:index.php");
        }
    }

        $result = $db->query("SELECT * FROM persons WHERE ID='$id'");
        $row = $result->fetch_assoc();

    ?>
    <form action="" method="post">
        <label for="">Name: </label><br>
        <input type="text" name="name" placeholder="Enter your name" value="<?php echo $row['Name']?>"><br>

        <label for="">Gender: </label><br>
        <label for="">Male</label>
        <input type="radio" name="gender" value="male" <?php if($row['gender'] == 'male') echo "selected";?>>
        <label for="">Female</label>
        <input type="radio" name="gender" value="female" value="male" <?php if($row['gender'] == 'female') echo "selected";?>><br>

        <label for="">Date of Birth</label><br>
        <input type="date" name="dob" value="<?php echo $row['DOB']?>"><br>

        <label for="">Email Address</label><br>
        <input type="email" name="email" placeholder="Enter your email"><br>

        <label for="">Batch</label><br>
        <select name="batch">
            <option value="">Select one</option>
            <option value="WDPF-55"  <?php if($row['batch'] == 'WDPF-55') echo "selected";?>>WDPF-55</option>
            <option value=".NET-53" <?php if($row['batch'] == '.NET-53') echo "selected";?>>.NET-53</option>
            <option value="JAVA-52" <?php if($row['batch'] == 'JAVA-52') echo "selected";?>>JAVA-52</option>
            <option value="GAVE-54" <?php if($row['batch'] == 'GAVE-54') echo "selected";?>>GAVE-54</option>
        </select><br>

        <label for="">Address</label><br>
        <textarea name="address" id="" cols="30" rows="10"><?php echo $row['Address']?></textarea><br>

        <label for="">Hobbies</label><br>
        <label for="">Cricket</label>
        <input type="checkbox" name="hobby[]" value="cricket">
        <label for="">Footbal</label>
        <input type="checkbox" name="hobby[]" value="footbal">
        <label for="">Hockey</label>
        <input type="checkbox" name="hobby[]" value="hockey">
        <label for="">Tenis</label>
        <input type="checkbox" name="hobby[]" value="tenis">
        <label for="">Badminton</label>
        <input type="checkbox" name="hobby[]" value="badminton"><br>
        

        <input type="submit" name="submit" value="SUBMIT">


        
    </form>
</body>
</html>