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
        <h1>ข้อมูลสมาชิก</h1>
    </div>

    <form action="search.php">
        <div class="row justify-content-md-center">
        <div class="col-6">
        <div class="input-group mb-3" >
            <input type="text" name="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search'];}?>"
            class="form-control" placeholder="ค้นหาจากชื่อ นามสกุล ชื่อเล่น เบอร์โทร">
            <button class="btn btn-primary" type="submit">ค้นหา</button>
        </div>
        </div>
        </div>
    </form>
    <div >
        <h3><a href="add.php" class="btn btn-success mb-3">เพิ่มข้อมูล</a></h3>
    </div>
        
        <?php 
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
    <?php
    include('connection.php');
    
    $sql = "SELECT * FROM contact ";
    $result = $conn->query($sql);
    ?>
    <table class="table text-center">
        <thead class="table-dark">
        <tr>
            <th scope="col"><div>ลำดับที่<div></th>
            <th scope="col"><div>รูปภาพ</div></th>
            <th scope="col"><div>ชื่อ</div></th>
            <th scope="col"><div>นามสกุล</div></th>
            <th scope="col"><div>ชื่อเล่น</div></th>
            <th scope="col"><div>จัดการข้อมูล</div></th>
        </tr>
        </thead>
    <?php
    if($result->num_rows){
        $count = 0 ;
        while($row = $result->fetch_assoc()){
            $count = $count+1;
    ?>
        <tr>
            <td  onclick="location.href='show.php?id=<?php echo $row['id']?>'"><div><?php echo $count?></div></td>
            <td  onclick="location.href='show.php?id=<?php echo $row['id']?>'"><div><img width="100px" src="<?php echo $row['image']?>" alt=""></div></td>
            <td  onclick="location.href='show.php?id=<?php echo $row['id']?>'"><div><?php echo $row['firstName']?></div></td>
            <td  onclick="location.href='show.php?id=<?php echo $row['id']?>'"><div><?php echo $row['lastName']?></div></td>
            <td  onclick="location.href='show.php?id=<?php echo $row['id']?>'"><div ><?php echo $row['nickName']?></div></td>
            <td>
                <a onclick="return confirm('ยืนยันการแก้ไขข้อมูลของ <?php echo $row['firstName']?>?')"href="update.php?id=<?php echo $row['id']?>"><img src="edit.png" alt="" width="50px"></a>
                <a onclick="return confirm('ยืนยันการลบข้อมูลของ <?php echo $row['firstName']?>?')"href="delete.php?id=<?php echo $row['id']?>"><img src="delete.png" alt="" width="50px"></a>
            <td>
        </tr>
    <?php
        }
      }
    ?>
    </table>
    <?php
    $conn->close();
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.
js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p
" crossorigin="anonymous"></script>
    </body>
</html>