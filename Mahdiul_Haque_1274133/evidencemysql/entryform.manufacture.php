<?php 
         $db = new mysqli("localhost", "root", "", "evidence");
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <h2>New Student Entry</h2>
    <?php 
    if(isset($_POST['submit'])){
        extract($_REQUEST);


        $sql = "CALL insert_company_info('$company_name', '$address', '$contact_no')";
        // $sql = "INSERT INTO manufacturer VALUES(NULL, '$company_name', '$address', '$contact_no')";
        $db->query($sql);
        if($db->affected_rows>0){
            echo "Success";
            header("Location:company_list.php");
        }
    }
    
    ?>
    <a href="company_list.php">Company and Product List</a>
    <form action="" method="post">
        Company Name : <input type="text" name="company_name" placeholder="Enter Company Name"><br><br>
        Address : <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
        Contact No: <input type="number" name="contact_no" value="female"><br><br>
        
      
        <input type="submit" name="submit" value="SUBMIT">
        



    </form>
    </body>
    </html>


