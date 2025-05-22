<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Memberbook</title>
</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" 
style="background-color: #FFB55D;">
    Member Book
</nav>

<div class="container">
    <div class="text-center mb-4">
        <h1>ข้อมูลสมาชิก</h1>
    </div>
    <div>
        <h3><a href="index.php" class="btn btn-warning mb-3">กลับหน้าแรก</a></h3>
    </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 mx-auto">
                    <div class="card justify-content-center border-secondary">
                    <div class="card-body ">
                        <h3 class="card-title">ข้อมูลสมาชิก </h3>
                        <?php
                            include('connection.php');
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM contact WHERE id=$id";
                            $result = $conn->query($sql);
                            if($result->num_rows){
                            while($row = $result->fetch_assoc()){
                        ?>
                            <div class="row" style="margin: 5px;">
                                <div class="col-4" style=" display: flex; justify-content: center;">
                                <img width="200px" src="<?php echo $row['image']?>" alt="รุปภาพ">
                                </div>
                                <div class="col-8">
                                    <div class="row" style="margin: 5px;">
                                        <div class="col-4">ชื่อจริง:</div>
                                        <div class="col-8">
                                        <?php echo $row['firstName']?></div>
                                    </div>
                                    <div class="row" style="margin: 5px;">
                                        <div class="col-4">นามสกุล:</div>
                                        <div class="col-8">
                                        <?php echo $row['lastName']?></div>
                                    </div>
                                    <div class="row" style="margin: 5px;">
                                        <div class="col-4">ชื่อเล่น:</div>
                                        <div class="col-8">
                                        <?php echo $row['nickName']?></div>
                                    </div>
                                    <div class="row" style="margin: 5px;">
                                        <div class="col-4">อีเมล:</div>
                                        <div class="col-8">
                                        <?php echo $row['email']?></div>
                                    </div>
                                    <div class="row" style="margin: 5px;">
                                        <div class="col-4">โทรศัพท์:</div>
                                        <div class="col-8">
                                        <?php echo $row['phone']?></div>
                                    </div>
                                    <div class="row" align="right" style="margin: 10px;">
                                        <div class="col"><a href="index.php">ย้อนกลับ↩</a></div>
                                    </div>
                                </div>
                            </div>   
                        <?php
                            }
                        }
                        ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>