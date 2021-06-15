<?php
session_start();
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "ecom_assignment";

    $conn = mysqli_connect($server, $username , $password, $database);
    if((!($conn))){
        die("Error".mysqli_connect_error());
    }

?>