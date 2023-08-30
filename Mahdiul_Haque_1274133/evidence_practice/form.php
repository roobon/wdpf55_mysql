 <?php 
 $db = new mysqli("localhost", "root", "", "idb_bisew");
 $id = $s_name;
 $db->query("DELETE FROM student WHERE $s_name");
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <select name="s_name">
        <option value=""></option>
    </select>
    <input type="submit" name="delete">
    </form>
   
</body>
</html>