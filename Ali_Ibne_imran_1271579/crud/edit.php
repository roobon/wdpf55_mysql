<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <h2>Student Entry</h2>
        <!-- -----show data from database ------>
            <?php 
            require_once("connection.php");
            $id = $_REQUEST["id"];
            $sql = "SELECT * FROM students WHERE st_id='$id'";
            $result = $db->query($sql);
            $row = $result->fetch_assoc();
            
            $hobby = $row["Hobbies"]; //string
            $hobbies = explode(",", $hobby); //array
            $hobbilist = array("Cricket","Football","Batminton");
            

        //<!-- -----update data from Form ------>
        
            if(isset($_POST["update"])){
                extract($_POST);
                $hobbies = implode(",", $hobby); //array to string 
                
                $sql = "UPDATE students SET Name='$name', Gender='$gender', Batch='$batch', Address='$address', Hobbies='$hobbies', Dob='$dob', Email='$email' WHERE st_id='$id'";
                $db->query($sql);
    
                header("Location: index.php");
    
                if($db->affected_rows){
                    echo "Updated Successfully";
                }   
            }
                
            ?>
   
        <form action="" method="post">
        <input type="hidden"  name="id" value="<?php echo $row['st_id']?>">
            <div class="form-group mb-3 mt-3">
            <label>Name :</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['Name']?>">
            </div>
            <div class="form-group mb-3 mt-3">
            <label>Gender :</label><br>
            <input type="radio" name="gender" value="Male"<?php if($row['Gender']=='Male')echo 'checked';?>> Male
            <input type="radio" name="gender" value="Female"<?php if($row['Gender']=='Female')echo 'checked';?>> Female
            </div>
            <div class="form-group mb-3 mt-3">
            <label>DOB :</label>
            <input type="date" class="form-control" name="dob" value="<?php echo $row['Dob']?>">
            </div>
            <div class="form-group mb-3 mt-3">
            <label>Email :</label>
            <input type="email" class="form-control" name="email" value="<?php echo $row['Email']?>">
            </div>
            <div class="form-group mb-3 mt-3">
            <label>Address :</label>
            <textarea class="form-control" name="address"><?php echo $row['Address']?></textarea>
            </div>
            <div class="form-group mb-3 mt-3">
            <label>Batch :</label>
            <select name="batch">
                    <option value="">Select one</option>
                    <option value="Round 56" <?php if($row["Batch"]=="Round 56")echo "selected";?>>Round 56</option>
                    <option value="Round 55" <?php if($row["Batch"]=="Round 55")echo "selected";?>>Round 55</option>
                    <option value="Round 54" <?php if($row["Batch"]=="Round 54")echo "selected";?>>Round 54</option>
                </select><br>
            </div>
            
            <div class="form-group mb-3 mt-3">
            <label>Hobbies :</label><br>
                <?php 
                  foreach($hobbilist as $val){?>
                    <label><?php echo $val;?></label><input type="checkbox" name="hobby[]" value="<?php echo $val;?>" <?php echo in_array($val,$hobbies)?"checked":"";?>>
                <?php }?>
                
            </div>
            
            <button type="submit" class="btn btn-success" name="update">Entry</button>
        </form>

    </div>
</body>
</html>