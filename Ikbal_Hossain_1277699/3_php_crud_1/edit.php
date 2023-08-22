<?php 
// update data 
// step: last
if(isset($_POST['update'])){
    extract($_POST);
    // Name = according to form name
    $sql = "UPDATE students SET Name = '$name', Gender = '$gender', Dob = '$dob', Email = '$email', Batch = '$batch', Address = '$address', WHERE id = '$id'";

    $db -> query($sql);

    if($db -> affected_rows >0){
        header("Location: index.php");
    }
}





// data showing in the form
    // step: 01
    require_once("db_config.php");

    // step: 02
    $id = $_GET['id'];

    $sql = "SELECT * FROM students WHERE id = '$id'";
    $result = $db -> query($sql);
    $row = $result -> fetch_assoc();

    // step: 03 for hobbies check box

    // string to array
    $hobbies = $row['Hobbies']; // string
    $hobbies = explode(",", $hobbies); // array
    $hobilist = array("cricket" => "cricket", "football" => "football", "hockey" => "hockey", "badminton" => "badminton", "tennis" => "tennis");
?>

<!-- here step: 01 and 02  and form value to show data in form when click edit any id -->

<form action="">
    <!-- here you have to set value at first after completing step: 01 and 2 from above to show data in edit form  -->

        Name: <input type="text" name="name" value="<?php echo $row['Name'] ?>" placeholder="Enter Name"> <br>
        <!-- here $row[according to database] -->

        Gender: <br>
        Male <input type="radio" name = "gender" value="male" <?php echo ($row['gender'] == 'Male') ? "checked": ""; ?>>

        Female <input type="radio" name = "gender" value="female" <?php echo ($row['gender'] == "Female") ? "checked" : ""; ?> > <br>

        Dob: <input type="date" name = "dob"> <br>

        Batch: <input type="text" name="">

        Hobbies: <br>
        <?php  // static checkbox comment a rakhle dynamic korte subida hobe.
            foreach ($hobilist as $key => $val){ ?>
            <!-- level pore add kore nibo -->

            <label for = ""> <?php echo $key; ?> </label> <input type = "checkbox" name = "<?php echo $key; ?>" value= "<?php echo $val; ?>" <?php echo in_array($val, $hobbies) ? "checked" : ""; ?>>

            <?php } ?> 
    

        Address: <br> <textarea name="address" id="" cols="30" rows="10"><?php echo $row['Address'] ?></textarea> <br>

        City: <select name="city" id="">
            <option value="">Select one</option>
            <option value="Dhaka" <?php if($row['City'] == 'Dhaka') echo "selected"; ?> > Dhaka </option>
            <option value="Khulna" <?php if($row['City'] == 'Khulna') echo "selected"; ?> > Khulna </option>
            <option value="Lakshmipur" <?php if($row['City'] == 'Lakshmipur') echo "selected"; ?> > Lakshmipur 
        </option>
        </select> <br>

        email_address: <input type="email" name="email" value="<?php echo $row['email_address'] ?>" placeholder="Enter email"> <br>

        dob: <input type="date" name="dob" value="<?php echo $row['dob'] ?>" placeholder="Enter date"> <br>

        <input type="submit" name="update" value = "UPDATE"> <br>

        <input type= "hidden" value = " <?php echo $row['id']    ?>" name = "id" >

    </form>