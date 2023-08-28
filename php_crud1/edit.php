<?php 
  $db=  new mysqli("localhost", "root", "", "wdpf55_idb_bisew");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit Student Entry</h2>
    <?php 
        // UPdate data using submission
        if(isset($_POST['update'])){
            extract($_POST);
            $newhobbies = implode("," ,$hobby); // array to string
            $sql = "UPDATE students SET Name='$name', Gender='$gender', DOB='$dob', Email='$email', Batch='$batch', Address='$address', Hobbies='$newhobbies' WHERE ID='$id'";
            $db->query($sql);
            if($db->affected_rows>0){
                header("Location:index.php");
            }
        }   
        
        // Data showing in the form
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM students WHERE ID= '$id'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        $hobbies = $row['Hobbies']; // string
        $hobbies = explode(",", $hobbies); // array
        $hobilist = array("cricket", "football", "hockey", "badminton", "tenis");
        //$namefield  = "hobby";
    
    
    ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter name" value="<?php echo $row['Name']; ?>"><br>
        Gender <br>
        Male <input type="radio" name="gender" value="male" <?php echo ($row['Gender']=='Male') ? "checked": '';?>>
        Female <input type="radio" name="gender" value="female" <?php echo ($row['Gender']=='Female') ? "checked": '';?>><br>
        <input type="date" name="dob" value="<?php echo $row['DOB']; ?>"><br>
        <input type="email" name="email" placeholder="Enter email" value="<?php echo $row['Email']; ?>"><br>
        Batch Name: <br>
        <select name="batch">
            <option value="">Select one</option>
            <option value="WDPF-55" <?php echo ($row['Batch']=='WDPF-55') ? "selected": ''; ?> >WDPF-55</option>
            <option value="WDPF-52" <?php echo ($row['Batch']=='WDPF-52') ? "selected": ''; ?> >WDPF-52</option>
            <option value="WDPF-53" <?php echo ($row['Batch']=='WDPF-53') ? "selected": ''; ?> >WDPF-53</option>
            <option value="WDPF-54" <?php echo ($row['Batch']=='WDPF-54') ? "selected": ''; ?> >WDPF-54</option>
        </select><br>
        Address: <br>
        <textarea name="address" cols="30" rows="10"><?php echo $row['Address']; ?></textarea><br>
        Hobbies: <br>
        <?php 
            foreach($hobilist as $val){ ?>
            <label for=""><?php echo $val; ?></label> <input type="checkbox" name="hobby[]" value="<?php echo $val; ?>" <?php echo in_array($val , $hobbies)? "checked":"";?>>
        <?php    }
        ?><br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="update" value="UPDATE">
    </form>
</body>
</html>