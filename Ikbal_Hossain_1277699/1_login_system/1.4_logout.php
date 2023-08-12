<?php 
    session_start();  // step: 05

    session_destroy();

    header("Location:1_index.php");
?>