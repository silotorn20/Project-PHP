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
style="background-color: #FFB55D">
    Member Book
</nav>

<div class="container">
<div>
        <h3><a href="index.php" class="btn btn-warning  mb-3">กลับหน้าแรก</a></h3>
    </div>

    <table class="table text-center">
        <thead class="table-dark">
        <tr>
            <th scope="col">ลำดับที่</th>
            <th scope="col"><div>รูปภาพ</div></th>
            <th scope="col"><div>ชื่อ</div></th>
            <th scope="col"><div>นามสกุล</div></th>
            <th scope="col"><div>ชื่อเล่น</div></th>
            <th scope="col"><div>จัดการข้อมูล</div></th>
        </tr>
        </thead>

<form action="">
<?php
    include('connection.php');

    if(isset($_GET['search'])){

    $filtervalues = $_GET['search'];
    $stmt = $conn->prepare("SELECT * FROM contact WHERE CONCAT(firstName,lastName,nickName,phone)LIKE ?");
    $param = "%" . $filtervalues . "%";
    $stmt->bind_param('s', $param);
    // $result = mysqli_query($conn, $sql);

    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows === 0) exit();
    $count = 0;
       
}
?> 
    <?php
        $count = 0 ;
        while($row = $result->fetch_assoc()){
            $count = $count+1;
    ?>
        <tr>
            <td  onclick="location.href='show.php?id=<?php echo $row['id']?>';"><div><?php echo $count?></div></td>
            <td  onclick="location.href='show.php?id=<?php echo $row['id']?>';"><div><img width="100px" src="<?php echo $row['image']?>" alt=""></div></td>
            <td  onclick="location.href='show.php?id=<?php echo $row['id']?>';"><div><?php echo $row['firstName']?></div></td>
            <td  onclick="location.href='show.php?id=<?php echo $row['id']?>';"><div><?php echo $row['lastName']?></div></td>
            <td  onclick="location.href='show.php?id=<?php echo $row['id']?>';"><div ><?php echo $row['nickName']?></div></td>
            <td>
                <a href="update.php?id=<?php echo $row['id']?>"><img src="edit.png" alt="" width="50px"></a>
                <a href="delete.php?id=<?php echo $row['id']?>"><img src="delete.png" alt="" width="50px"></a>
            <td>
        </tr>
    <?php
        }
    ?>
    </table>
</form>
</div>