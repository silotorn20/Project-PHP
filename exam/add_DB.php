<?php
    include('connection.php');

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $nickName = $_POST['nickName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $image = $_POST['image'];

    $sql = "INSERT INTO contact (id,firstName,lastName,nickName,email,phone,image) VALUES(NULL,'$firstName','$lastName','$nickName','$email','$phone','$image')";

    if($conn->query($sql)){
        header('location:index.php?msg=record created successfully');
    }else{
        echo "Error: ". $sql."<br>". $conn->error;
    }
$conn->close(); 
?>