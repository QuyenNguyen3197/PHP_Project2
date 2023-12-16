<?php
    include "connect.php";

    function createRow(){
        if(isset($_POST['insert'])){
            global $conn;
            $ID = $_POST['ID'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $image = $_POST['image'];
            $query = "INSERT INTO `products`(ID, name, description, price, image) VALUES ('$ID','$name','$description','$price','$image')";
            $result = mysqli_query($conn, $query);
            if(!$result){
                die("Query failed!".mysqli_error());
            }else{
                echo "Record create";
            }
            }
    }




?>