<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h3> Manufacturer Entry </h3>

    <?php 
        if(isset($_POST['submit'])){
            extract($_POST);

            // $sql = "INSERT INTO manufacturer VALUES(NULL , '$company_name', '$address', '$contact_no')";
            $sql = "INSERT INTO manufacturer VALUES(NULL , '$company', '$address', '$phone')"; // database er name use kori nai keno
            $db -> query($sql);

            if($db -> affected_rows > 0){
                echo "Entry Success";
            }
        }
    ?>

    <a href="company_product_list.php" class="btn btn-success"> Company & Product List </a> <br> <br>


    <form action="">
        <input type="text" name="company" placeholder="Enter Company Name"> <br>
        <input type="text" name="address" placeholder="Enter Company Address"> <br>
        <input type="text" name="phone" placeholder="Enter Phone Number"> <br> <br>

        <input type="submit"class="btn btn-success" name = "submit" value="SUBMIT">
    </form>











    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>