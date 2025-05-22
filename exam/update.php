<?php
        error_reporting(0);
        include('connection.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM `contact` WHERE id=$id";
        // $stmt = $conn->prepare($sql);
        // $stmt->bind_param("i",$id);
        // $stmt->execute();
        // $result = $stmt->get_result();
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $nickName = $row['nickName'];
        $email = $row['email'];
        $phone = $row['phone'];
        $image = $row['image'];
    
        if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $nickName = $_POST['nickName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $image = $_POST['image'];
    
        $sql = "UPDATE `contact` SET id=$id,firstName='$firstName',lastName='$lastName',nickName='$nickName',email='$email',phone='$phone',image='$image' WHERE id=$id";
        $result = mysqli_query($conn,$sql);
        if($result){
            header('location:index.php?msg=New record created successfully');
        }else{
            die(mysqli_error($conn));
        }
        // $stmt = $conn->prepare($sql);
        // $stmt->bind_param("ssssssi",$firstName,$lastName,$nickName,$email,$phone,$image,$id);
        // $stmt->execute();
        
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.
    css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==
    " crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Memberbook</title>
</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" 
style="background-color: #FFB55D;">
    Member Book
</nav>

<div class="container">
    <div class="text-center mb-4">
        <h1>แก้ไขข้อมูลสมาชิก</h1>
    </div>
    <div>
        <h3><a href="index.php" class="btn btn-warning  mb-3">กลับหน้าแรก</a></h3>
    </div>
            <div class="container d-flex justify-centent-center">
                <form action="" method="post" style="width:150vw; min-width:300px;">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">ชื่อจริง</label>
                                <input class="form-control" type="text" name="firstName" 
                                value="<?php echo $firstName;?>">
                            </div>
                            <div class="col-6">
                                <label class="form-label">นามสกุล</label>
                                <input class="form-control" type="text" name="lastName" 
                                value="<?php echo $lastName;?>">
                            </div>
                            <div class="col-6">
                                <label class="form-label">ชื่อเล่น</label>
                                <input class="form-control" type="text" name="nickName" 
                                value="<?php echo $nickName;?>">
                            </div>
                            <div class="col-6">
                                <label class="form-label">อีเมล</label>
                                <input class="form-control" type="text" name="email" 
                                value="<?php echo $email;?>">
                            </div>
                            <div class="col-9">
                                <label class="form-label">โทรศัพท์</label>
                                <input class="form-control" type="text" name="phone" 
                                value="<?php echo $phone;?>">
                            </div>
                            <div class="col-9">
                                <label class="form-label">รูปภาพ</label>
                                <input class="form-control" type="text" name="image" 
                                value="<?php echo $image;?>">
                            </div>
                        </div>
                        <div align="right">
                            <button type="submit" class="btn btn-success" name="submit">บันทึกข้อมูล</button>
                        </div>
                </form>
            </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.
    js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p
    " crossorigin="anonymous"></script>
</body>
</html>