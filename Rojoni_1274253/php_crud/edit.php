<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Person Edit Form</h3>

<?php 
  require_once("db_config.php");
$id = $_REQUEST['id'];
// echo $id;
if(isset($_POST['update'])){
    extract($_POST);
    // echo "UPDATE persons SET LastName='$lname', FirstName='$fname', Address='$address', City='$city',email_address='$email', dob='$dob' WHERE PersonID='$id')";
  
    $sql = "UPDATE persons SET LastName='$lname', FirstName='$fname', Address='$address', City='$city',email_address='$email', dob='$dob' WHERE PersonID='$id'";
    $db->query($sql);

   if($db->affected_rows){
    echo "Updated Successfully";
   }
}
$result = $db->query("SELECT * FROM persons WHERE PersonID = '$id'");
$row = $result->fetch_assoc();

?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="fname" placeholder="Enter your First Name" value="<?php echo $row['FirstName']?>"><br>
    <input type="text" name="lname" placeholder="Enter your Last Name" value="<?php echo $row['LastName']?>"><br>
    <textarea name="address"  cols="30" rows="10"> <?php echo $row['Address']?></textarea><br>
    <select name="city" >
        <option value="">Select one</option>
        <option value="Dhaka" <?php if($row['City']=='Dhaka')echo "Selected"?>>Dhaka</option>
        <option value="Khulna" <?php if($row['City']=='Khulna')echo "Selected"?>>Khulna</option>
        <option value="Rajshahi" <?php if($row['City']=='Rajshahi')echo "Selected"?>>Rajshahi</option>
        <option value="Noakhali" <?php if($row['City']=='Noakhali')echo "Selected"?>>Noakhali</option>
     </select><br>
        <input type="text" name="email" placeholder="Enter email address " value="<?php echo $row['email_address']?>"><br>
        <input type="date" name="dob" placeholder="Enter date " value="<?php echo $row['dob']?>"><br>
        <input type="submit" name="update" value="UPDATE">
        <input type="hidden" name="id" value="<?php echo $row['PersonID']?>">


    </form>
    
</body>
</html>