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
    <h2>edit Student info</h2>
    <?php 
    $id = $_REQUEST['id'];
    $result = $db->query("SELECT * FROM students WHERE ID='$id'");
    $row = $result->fetch_assoc();
    $hobbies = $row['Hobbies']; //string
    $hobbies = explode(",", $hobbies); //array
    $hobilist = array("cricket", "football", "hockey", "tenis", "badminton");
    $namefield = "hobby";
    
    
    if(isset($_POST['update'])){
        extract($_POST);
        $Newhobbies = implode(",", $hobby);
        $sql = "UPDATE students SET Name='$name', Gender='$gender', DOB='$dob', Email='$email', Batch='$batch', Address='$address', Hobbies='$Newhobbies' WHERE ID='$id'";
        $db->query($sql);
        if($db->affected_rows>0){
            header("Location:index.php");
        }
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="">Name: </label><br>
        <input type="text" name="name" placeholder="Enter your name" value="<?php echo $row['Name']; ?>"><br>

        <label for="">Gender: </label><br>
        <label for="">Male</label>
        <input type="radio" name="gender" value="Male" <?php echo ($row['Gender']=='Male') ? "checked": ''; ?>>
        <label for="">Female</label>
        <input type="radio" name="gender" value="Female" <?php echo ($row['Gender']=='Female') ? "checked":''?>><br>

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
            <option value="GAVE-54" <?php if($row['Batch']=='GAVE-54') echo "selected"; ?>>GAVE-54</option>
        </select><br>

        <label for="">Address</label><br>
        <textarea name="address" id="" cols="30" rows="10"><?php echo $row['Address']; ?></textarea><br>

        <label for="">Hobbies</label><br>
        <?php 
            foreach($hobilist as $val){  ?>
                <label> <?php echo $val; ?> </label>
                <input type="checkbox" name="<?php echo $namefield.'[]'; ?>" value="<?php echo $val; ?>" <?php echo in_array($val, $hobbies)? "checked" :""?>>
                
            <?php } ?><br>
        
       
        <!-- <label for="">Cricket</label>
        <input type="checkbox" name="cricket" value="cricket">
        <label for="">Footbal</label>
        <input type="checkbox" name="football" value="football">
        <label for="">Hockey</label>
        <input type="checkbox" name="hockey" value="hockey">
        <label for="">Tenis</label>
        <input type="checkbox" name="tenis" value="tenis">
        <label for="">Badminton</label>
        <input type="checkbox" name="badminton" value="badminton"><br> -->
        

        <input type="submit" name="update" value="UPDATE">

        <input type="hidden" name="id" value="<?php echo $row['ID'] ?>">

    </form>
</body>
</html>