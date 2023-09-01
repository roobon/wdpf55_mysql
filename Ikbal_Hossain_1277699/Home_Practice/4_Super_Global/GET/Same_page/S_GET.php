<?php 
    if(isset($_GET["ename"])){
        echo $_GET["ename"];
    }
?>

<!-- by default form method is GET -->

<form action="#">
    <input type="text" name="ename" placeholder="Enter Name"> <br> <br>
    <input type="submit" name="sub" value="SUBMIT">
</form>