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
        <h1>เพิ่มข้อมูลสมาชิก</h1>
    </div>
    <div>
        <h3><a href="index.php" class="btn btn-warning  mb-3">กลับหน้าแรก</a></h3>
    </div>

            <div class="container d-flex justify-centent-center">
                <form action="add_DB.php" method="post" style="width:150vw; min-width:300px;">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">ชื่อจริง</label>
                                <input class="form-control" type="text" name="firstName">
                            </div>
                            <div class="col-6">
                                <label class="form-label">นามสกุล</label>
                                <input class="form-control" type="text" name="lastName">
                            </div>
                            <div class="col-6">
                                <label class="form-label">ชื่อเล่น</label>
                                <input class="form-control" type="text" name="nickName">
                            </div>
                            <div class="col-6">
                                <label class="form-label">อีเมล</label>
                                <input class="form-control" type="email" name="email">
                            </div>
                            <div class="col-9">
                                <label class="form-label">โทรศัพท์</label>
                                <input class="form-control" type="text" name="phone">
                            </div>
                            <div class="col-9">
                                <label class="form-label">รูปภาพ(URL)</label>
                                <input class="form-control" type="text" name="image">
                            </div>
                         </div>

                         <div align="right">
                            <button type="submit" class="btn btn-success" name="submit">ลงทะเบียน</button>
                         </div>
                </form>
            </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.
    js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p
    " crossorigin="anonymous"></script>
    </body>
</html>