<?php
    include('connection.php');
    $id = $_GET["id"]; 

    $sql = "DELETE FROM contact WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:index.php?msg=delete record created successfully');
    }else{
        echo "Failed: ". mysqli_error($conn);
    }
    $conn->close(); 
?>