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

<h2>Edit Student Entry</h2>

<?php
//Update data using submission
if(isset($_POST['update'])){
    extract ($_POST);
    echo "UPDATE students SET Name='$name', Gender='$gender', Dob='$dob', Email='$email',Batch='$batch',Address='$address' WHERE ID='$id'";
    $sql = "UPDATE students SET Name='$name', Gender='$gender', Dob='$dob', Email='$email',Batch='$batch',Address='$address' WHERE ID='$id'";
    $db->query($sql);
    if($db->affected_rows>0){
        header("Location:index.php");
    }
    }



//Data showing in the form
$id = $_REQUEST['id'];
$sql = "SELECT * FROM students WHERE ID='$id'";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$hobbies = $row['Hobbies'];//string
$hobbies = explode(",",$hobbies);//array
$hobilist = array("cricket","football","hockey","badminton","tenis");
$namefield = "hobby"
?>

<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $row['ID'];?>">
        <input type="text" name="name" placeholder="Enter name" value="<?php echo $row['Name'];?>"><br>
        Gender <br>
       Male <input type="radio" name="gender" value="male" <?php ($row ['Gender']=='Male')? "checked" :'';?>>
       Female <input type="radio" name="gender" value="female" <?php ($row ['Gender']=='Female')? "checked" :'';?>><br>
        <input type="data" name="dob"><br>
        <input type="text" name="email" placeholder="Enter email"value="<?php echo $row['Email'];?>"><br>
        Batch Name: <br>
        <select name="batch">
            <option value="">Select one </option>
            <option value="WDPF-55" <?php ($row ['Batch']=='WDPF-55')? "checked" :'';?>>WDPF-55</option>
            <option value="WDPF-54" <?php ($row ['Batch']=='WDPF-54')? "checked" :'';?>>WDPF-54</option>
            <option value="WDPF-53" <?php ($row ['Batch']=='WDPF-53')? "checked" :'';?>>WDPF-53</option>
     </select><br>
     Address: <br>
    <textarea name="address" id="" cols="30" rows="10"><?php echo $row['Address'];?></textarea><br>
    Hobbies: <br>
    
    <?php
    foreach($hobilist as $val){ ?>
    <label for=""><?php echo $val;?></label><input type="checkbox" name="<?php echo $namefield.'[]';?>" value="<?php echo $val;?>"
    <?php echo in_array($val,$hobbies)?"checked":"";?>>

    <?php } 
    ?><br>
    
   


     <!-- Cricket: <input type="checkbox" name="cricket" value="cricket">
    Football: <input type="checkbox" name="football" value="football">
     Hockey: <input type="checkbox" name="hockey" value="hockey"><br>
     Tenis: <input type="checkbox" name="tenis" value="tenis">
    Badminton: <input type="badminton" name="cricket" value="badminton"><br> -->
    <input type="submit" name="update" value="UPDATE">
    </form>




</form>
    
</body>
</html>