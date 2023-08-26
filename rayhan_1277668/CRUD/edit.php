<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
</head>
<body>

    <?php 
    require_once('db_config.php');

    $id = $_GET['id'];  
    
    if ( isset( $_POST['submit'] ) ){
        extract($_POST) ; // form er shob variable niye neya hoyeche
        
        $sql = " UPDATE persons SET Address='$address', City='$city', email_address='$email',  phone='$number', DateOfBirth='$date', firstName='$name' WHERE PersonID = $id ";  // PersonID = $id -> hidden id
        
        $myDB->query($sql);
        if ( $myDB->affected_rows ) {
            echo " Update successfull " ;
        }
    }
    $result = $myDB->query("SELECT * FROM persons WHERE PersonID = '$id' ");
    $row = $result->fetch_assoc();
    
    ?>


        <h3> Edit user data </h3>

    <form action="" method="post">
        <input type="text" name="name" placeholder="name"  value="<?php echo $row['firstName'] ?>" > <br>
        <textarea name="address" placeholder="Enter Address"  cols="20" rows="5"> <?php echo $row['Address'] ?> </textarea> <br>
         <select name="city">
            <option value="Dhaka" <?php if ($row['City'] =='Dhaka') echo "selected" ; ?> >Dhaka</option>
            <option value="Chittagong" <?php if ($row['City'] =='Chittagong') echo "selected" ; ?>>Chottogram</option>
            <option value="rajshahi" <?php if ($row['City'] =='rajshahi') echo "selected" ; ?>>Rajshahi</option>
            <option value="khulna" <?php if ($row['City'] =='khulna') echo "selected" ; ?>>Khulna</option>
            <option value="Barisal" <?php if ($row['City'] =='Barisal') echo "selected" ; ?>>Barisal</option>
            <option value="sylhet" <?php if ($row['City'] =='sylhet') echo "selected" ; ?>>Sylhet</option>
         </select>   <br>

         <input type="email" name="email" placeholder="email" value="<?php echo $row['email_address'] ?>"> <br>

         <input type="date" name="date" placeholder="date" value="<?php echo $row['DateOfBirth'] ?>"> <br>
         <input type="number" name="number" placeholder="number" value="<?php echo $row['phone'] ?>"> <br>

         <input type="submit" name="submit" value="Update"> <br>
         
         <input type="hidden" value="<?php echo $row['PersonID'] ?>" name="id">



    </form>
</body>

<script>

</script>
</html>