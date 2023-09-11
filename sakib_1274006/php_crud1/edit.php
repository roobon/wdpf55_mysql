<?php 
$host = "localhost";
$user = "root";
$pass = "";
$database = "wdpf55";


$db = new mysqli($host, $user, $pass, $database);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    //update data
    if(isset($_POST['fuck_off'])){
        extract($_POST);
        $newhobbies = implode(", " , $hobby);
        $sql = "UPDATE idb_bisew_wdpf55 SET Name='$name', Gender='$gender', DOB='$dob',
        Email='$email', Batch='$batch', Address='$address' WHERE ID='$id'";
        $db->query($sql);
        header("Location:index.php");
        if($db->affected_rows){
            echo "Update Successfully";
            
        }
    }


//data showing
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM idb_bisew_wdpf55 WHERE ID='$id'";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    $hobbies = $row['Hobbies'];//string
    $hobbies = explode(", ", $hobbies); //array
    $hobilist = array("Programing", "Game", "Traveling", "Reading");
    $namefield = "hobby";

    //ID	Name	Gender	DOB	Email	Batch	Address	Hobbies	$hobbyes = implode(", ", $hobby);

    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Name: <br>
    <input type="text" name="name" placeholder="Enter name" value="<?php echo $row['Name']?>"> <br>
    Gender:
    <input type="radio" name="gender" value="male" <?php echo ($row['Gender']=='Male')?"checked": '';?>>Male
    <input type="radio" name="gender" value="Female" <?php echo ($row['Gender']=='Female')?"checked": '';?> >Female <br>
    Date of Birth:<br>
    <input type="date" name="dob" value="<?php echo $row['DOB']?>"><br>
    Email Address:<br>
    <input type="email" name="email" value="<?php echo $row['Email']?>"><br>
    Batch:
    <select name="batch" id="">
        <option value="">Select</option>
        <option value="wdpf-53" <?php if($row['Batch']=="wdpf-53") echo "selected";?>>wdpf-53</option>
        <option value="wdpf-54"<?php if($row['Batch']=="wdpf-54") echo "selected";?>>wdpf-54</option>
        <option value="wdpf-55"<?php if($row['Batch']=="wdpf-55") echo "selected";?>>wdpf-55</option>
        <option value="wdpf-56"<?php if($row['Batch']=="wdpf-56") echo "selected";?>>wdpf-56</option>       
    </select> <br>
    
    Address:<br>
    <textarea name="address" id="" cols="20" rows="5"><?php echo $row['Address']?></textarea><br>
    Hobbies:
    <!-- <?php 
    foreach($hobilist as $val){?>
    <?php echo $val;?> <input type="checkbox" name="<?php echo $namefield.'[]';?>"
    value="<?php echo $val;?>" <?php echo in_array($val , $hobbies)? "checked":"";?>>

    <?php } ?>
    <br> -->



    <?php 
            foreach($hobilist as $val){ ?>
            <?php echo $val; ?> <input type="checkbox" name="<?php echo $namefield.'[]'; ?>
            " value="<?php echo $val; ?>" <?php echo in_array($val , $hobbies)? "checked":"";?>>
        <?php    }
        ?><br>

    <!-- <input type="checkbox" name="hobby[]" value="Programing">Programing
    <input type="checkbox" name="hobby[]" value="Game">Game
    <input type="checkbox" name="hobby[]" value="Traveling">Traveling
    <input type="checkbox" name="hobby[]" value="Reading">Reading<br> -->
    
    <input type="hidden" name="id" value="<?php echo $row['ID']?>">

    
        <input type="submit" name="fuck_off" value="UPDATE">
    </form>
</body>
</html>