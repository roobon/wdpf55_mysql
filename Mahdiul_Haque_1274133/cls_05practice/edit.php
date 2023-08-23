<?php 
  $db = new mysqli("localhost", "root", "", "idb");
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
      if(isset($_POST['update'])){
        extract($_POST);
        $sql = "UPDATE students SET name='$name', gender='$gender', dob='$dob', email='$email', batch='$batch', address='$address' WHERE ID='$id'";
        $db->query($sql);
        if($db->affected_rows>0){
            header("Location:index.php");
        }
      }
    
    
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM students WHERE ID = '$id'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
    
    
    
    
    
    ?>



<form action="" method="post">
        Name : <input type="text" name="name" placeholder="Enter Name" value="<?php echo $row['name']?>"><br>
        Gender : <br>
        Male : <input type="radio" name="gender" value="male"<?php if($row['gender']=='male') echo "checked";?>>
        Female : <input type="radio" name="gender" value="female"<?php if($row['gender']=='female') echo "checked";?>><br>
         <input type="date" name="dob" value="<?php echo $row['dob']?>"><br>
        <input type="text" name="email" placeholder="Enter Your Email" value="<?php echo $row['email']?>">
        Batch Name: <br>
        <select name="batch">
            <option value="">Select One</option>
            <option value="WDPF_55"<?php if($row['batch']=='WDPF_55') echo "selected";?>>WDPF_55</option>
            <option value="WDPF_52"<?php if($row['batch']=='WDPF_52') echo "selected";?>>WDPF_52</option>
            <option value="WDPF_53"<?php if($row['batch']=='WDPF_53') echo "selected";?>>WDPF_53</option>
            <option value="WDPF_54"<?php if($row['batch']=='WDPF_54') echo "selected";?>>WDPF_54</option>
        </select><br>
        Address : <textarea name="address" id="" cols="30" rows="10"><?php echo $row['address']?></textarea><br>
        Cricket : <input type="checkbox" name="hobby[]" value="cricket">
        Football : <input type="checkbox" name="hobby[]" value="football">
        Hockey : <input type="checkbox" name="hobby[]" value="hockey">
        Tennis : <input type="checkbox" name="hobby[]" value="tennis">
        Badminton : <input type="checkbox" name="hobby[]" value="badminton">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <input type="submit" name="update" value="UPDATE">
        



    </form>
</body>
</html>