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
    
    if(isset($_POST['update'])){
        extract($_POST);
        //print_r($hobby);
        $hobbies = implode(',', $hobby);
        $sql = "UPDATE students SET Name='$name', Gender='$gender', DOB='$dob', Email='$email', Batch='$batch', Address='$address', Hobbies='$hobbies'  WHERE ID='$id'";
        $db->query($sql);
        if($db->affected_rows>0){
            header("Location:index.php");
        }
    }
        $result = $db->query("SELECT * FROM students WHERE ID='$id'");
        $row = $result->fetch_assoc();
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="">Name: </label><br>
        <input type="text" name="name" placeholder="Enter your name" value="<?php echo $row['Name']?>"><br>

        <label for="">Gender: </label><br>
        <label for="">Male</label>
        <input type="radio" name="gender" value="male" <?php if($row['Gender']=='male') echo "selected"?>>
        <label for="">Female</label>
        <input type="radio" name="gender" value="female" <?php if($row['Gender']=='male') echo "selected"?>><br>

        <label for="">Date of Birth</label><br>
        <input type="date" name="dob" value="<?php echo $row['DOB']?>"><br>

        <label for="">Email Address</label><br>
        <input type="email" name="email" placeholder="Enter your email" value="<?php echo $row['Email']?>"><br>

        <label for="">Batch</label><br>
        <select name="batch">
            <option value="">Select one</option>
            <option value="WDPF-55" <?php if($row['Batch']=='WDPF-55') echo "selected"?>>WDPF-55</option>
            <option value=".NET-53" <?php if($row['Batch']=='.NET-53') echo "selected"?>>.NET-53</option>
            <option value="JAVA-52" <?php if($row['Batch']=='JAVA-52') echo "selected"?>>JAVA-52</option>
            <option value="GAVE-54" <?php if($row['Batch']=='GAVE-54') echo "selected"?>>GAVE-54</option>
        </select><br>

        <label for="">Address</label><br>
        <textarea name="address" id="" cols="30" rows="10" value="<?php echo $row['Address']?>"></textarea><br>

        <label for="">Hobbies</label><br>
        <label for="">Cricket</label>
        <input type="checkbox" name="hobby[]" value="cricket"  <?php if($row['Hobbies']=='hobby[]') echo "selected"?>>
        <label for="">Footbal</label>
        <input type="checkbox" name="hobby[]" value="footbal"  <?php if($row['Hobbies']=='hobby[]') echo "selected"?>>
        <label for="">Hockey</label>
        <input type="checkbox" name="hobby[]" value="hockey" <?php if($row['Hobbies']=='hobby[]') echo "selected"?>>
        <label for="">Tenis</label>
        <input type="checkbox" name="hobby[]" value="tenis" <?php if($row['Hobbies']=='hobby[]') echo "selected"?>>
        <label for="">Badminton</label>
        <input type="checkbox" name="hobby[]" value="badminton" <?php if($row['Hobbies']=='hobby[]') echo "selected"?>><br>
        

        <input type="submit" name="update" value="UPDATE">

    </form>
</body>
</html>