<?php
    $severname = "localhost";
    $username = "demo";
    $password = "abc123";
    $dbname = "test";
    //Connection
    $conn = new mysqli($severname,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection faild: ".$conn->connect_error);
    }
?>
