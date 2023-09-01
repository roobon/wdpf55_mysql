<?php 
    if(isset($_GET["ename"])){
        echo $_GET["ename"]; 
    }
    // [which value you want to access] if you want to access any particular control into PHP, you must provide a name attribute to that particular control

    // http://localhost/wdpf55_mysql/Ikbal_Hossain_1277699/Home_Practice/4_Super_Global/$_GET.php?ename=Ikbal+Hossain&sub=SUBMIT#
?>

<!-- by default form method is GET -->

<form action="#">
    <input type="text" name="ename" placeholder="Enter Name"> <br> <br>
    <input type="submit" name="sub" value="SUBMIT">
</form> 