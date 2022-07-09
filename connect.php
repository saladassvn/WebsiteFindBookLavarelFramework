<?php
    $conn = mysqli_connect("localhost:3306","root","","shopit");
    if($conn==false){
        die('db error:'.mysqli_connect_error());
    }
?>