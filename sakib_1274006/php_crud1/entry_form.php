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
    
    if(isset($_POST['submit'])){
        extract($_POST);
        $hobbyes = implode(", ", $hobby);

        // echo $sql = "INSERT INTO idb_bisew_wdpf55 VALUE (NULL, '$Name', '$Gender', '$DOB', '$Email', '$Batch', '$Address', '$Hobbies' )"; //sql string
        $sql = "INSERT INTO idb_bisew_wdpf55 VALUE (NULL, '$name', '$gender', '$dob', '$email', '$batch', '$address', '$hobbyes' )";
        $db->query($sql);

        if($db->affected_rows>0){
            header("Location:index.php");
        }
    }
    //ID	Name	Gender	DOB	Email	Batch	Address	Hobbies	

    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Name: <br>
    <input type="text" name="name" placeholder="Enter name"> <br>
    Gender:
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female" >Female <br>
    Date of Birth:<br>
    <input type="date" name="dob"><br>
    Email Address:<br>
    <input type="email" name="email"><br>
    Batch:
    <select name="batch" id="">
        <option value="">Select</option>
        <option value="wdpf-53">wdpf-53</option>
        <option value="wdpf-54">wdpf-54</option>
        <option value="wdpf-55">wdpf-55</option>
        <option value="wdpf-56">wdpf-56</option>       
    </select> <br>
    
    Address:<br>
    <textarea name="address" id="" cols="20" rows="5"></textarea><br>
    Hobbies:
    <input type="checkbox" name="hobby[]" value="Programing">Programing
    <input type="checkbox" name="hobby[]" value="Game">Game
    <input type="checkbox" name="hobby[]" value="Traveling">Traveling
    <input type="checkbox" name="hobby[]" value="Reading">Reading<br>
    
    
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>