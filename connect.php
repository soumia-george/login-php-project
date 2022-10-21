<?php 
    $servername = "localhost";
    $username = "dooth12";
    $password = "Welcome#123";
    $database = "Login";

    $conn = mysqli_connect($servername,$username,$password,$database);
     if (!$conn){
        die("connection failed".mysqli_connect_error());
     }
?>