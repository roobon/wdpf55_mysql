<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
   

<div class="container">
  <h2>List of all persons</h2>
  <?php 
    if(isset($_POST['submit'])){
        extract($_POST);
        require_once("db_config.php");
      
       
        
        $sql = "INSERT INTO persons VALUES ($pid, '$Lastname', '$FirstName', '$address', '$city', '$phone', '$dob')";
        $db->query($sql);

        if($db->affected_rows){
            echo "Inserted";
        }
        // 






    }
  
  ?>
      
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        PersonID : <input type="number" name="pid">
        Last Name: <input type="text" name="LastName" placeholder="Enter Last Name"><br><br>
        First Name: <input type="text" name="FirstName" placeholder="Enter First Name"><br><br><br>
        Address: <textarea name="address" id="" cols="30" rows="4"></textarea><br><br>
        City_Name: <select name="city" id="">
            <option value="">Select One</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Khulna">Khulna</option>
            <option value="Rajshahi">Rajshahi</option>
        </select><br><br>
        Phone Number: <input type="number" name="phone"><br><br>
        Date of Birth: <input type="date" name="dob"><br><br>
         
        
            Submit : <input type="submit" name="submit">
        
    </form>
</div>

</body>
</html>

PersonID</th>
        <th>Lastname</th>
        <th>FirstName</th>
        <th>Address</th>
        <th>city_name</th>
        <th>phone</th>
        <th>dob</th>
        <th>Action