<?php
    $conn = mysqli_connect('localhost:3308', 'root', '', 'product-management');
    if(!$conn){
        die("Connection failed");
    }
?>