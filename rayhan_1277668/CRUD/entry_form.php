<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Form</title>
</head>
<body>

    <?php 
    require_once('db_config.php');

    if ( isset( $_POST['submit'] ) ){
        extract($_POST) ; // form er shob variable niye neya hoyeche

        
        // echo  " INSERT INTO persons  VALUES ( NULL, '$address', '$city', '$email',  '$number', '$date', '$name') ";

        $sql = " INSERT INTO persons  VALUES ( NULL, '$address', '$city', '$email',  '$number', '$date', '$name') ";
        $myDB->query($sql);

        if ( $myDB->affected_rows ) {
            echo " data inserted " ;
        }
    }

    ?>


        <h3> Input user data </h3>

    <form action="" method="post">
        <input type="text" name="name" placeholder="name"> <br>
        <textarea name="address" placeholder="Address" cols="20" rows="10"></textarea> <br>
         <select name="city">
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong">Chottogram</option>
            <option value="rajshahi">Rajshahi</option>
            <option value="khulna">Khulna</option>
            <option value="Barisal">Barisal</option>
            <option value="sylhet">Sylhet</option>
         </select>   <br>

         <input type="email" name="email" placeholder="email"> <br>

         <input type="date" name="date" placeholder="date"> <br>
         <input type="number" name="number" placeholder="number"> <br>

         <input  type="submit" name="submit" value="SUBMIT">

    </form>
</body>

</html>