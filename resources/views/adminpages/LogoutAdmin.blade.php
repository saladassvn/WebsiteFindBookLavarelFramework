<?php
    session_start();
    unset($_SESSION['admin']);
    header("location: ../user/Index.php");
?>