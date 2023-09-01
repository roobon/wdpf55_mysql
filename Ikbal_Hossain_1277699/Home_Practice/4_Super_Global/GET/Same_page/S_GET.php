<?php 
    if(isset($_GET["ename"])){
        echo $_GET["ename"];
    }
?>

<!-- by default form method is GET -->

<form action="2.1_action.php" method="get">
    <input type="text" name="ename" placeholder="Enter Name"> <br> <br>
    <input type="submit" name="sub" value="SUBMIT">
</form> 