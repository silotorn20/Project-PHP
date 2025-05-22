<?php
    error_reporting(0);
    include('connection.php');
    $id = $_GET['id'];
   
    if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $nickName = $_POST['nickName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $image = $_POST['image'];

    $sql = "UPDATE contact SET firstName=?,lastName=?,nickName=?,email=?,phone=?,image=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi",$firstName,$lastName,$nickName,$email,$phone,$image,$id);
    $stmt->execute();
    

    if( $stmt->execute()){
        header('location:index.php?msg=New record created successfully');
    }else{
        echo "Error: " . $conn->error;
    }
    $stmt->close();
}
?>