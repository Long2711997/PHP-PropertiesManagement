<!doctype html>
<html lang="en">
<?php
require './business.v2add.php';
session_start();
?>

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
        <a class="navbar-brand" href="#">
            <img src="./image/logo.jpg" alt="" width="100px" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">
                        Trang chủ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./houses.php">
                        Dự án
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./business.v2.php">
                        Bán
                    </a>
                </li>
            </ul>
            <button class="btn btn-primary"><?php
            if ($_SESSION["loged"] = "true") {
                echo  'Hello ' . $_SESSION["username"] .'';
            }?></button>
            <button class="btn btn-danger" onclick="location.href='init.php'">Đăng xuất</button>
        </div>
    </nav>
    <form class="container" action="business.v2.php" method="post" enctype="multipart/form-data">
        <h2>Bạn muốn bán nhà?</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="name" name="name" placeholder="Họ và Tên" />
                <?php if (!empty($errors['name'])) echo $errors['name']; ?>
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại" />
                <?php if (!empty($errors['phone'])) echo $errors['phone']; ?>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ nhà muốn bán" />
            <?php if (!empty($errors['address'])) echo $errors['address']; ?>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <input type="text" class="form-control" id="city" name="city" placeholder="Thành phố" />
                <?php if (!empty($errors['city'])) echo $errors['city']; ?>
            </div>
            <div class="form-group col-4">
                <input type="text" class="form-control" id="square" name="square" placeholder="Diện tích" />
                <?php if (!empty($errors['square'])) echo $errors['square']; ?>
            </div>
            <div class="form-group col-4">
                <input type="text" class="form-control" id="price" name="price" placeholder="Giá bán" />
                <?php if (!empty($errors['price'])) echo $errors['price']; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Hình ảnh</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fileUpload">
            <?php if (!empty($errors['Image'])) echo $errors['Image']; ?>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="submit">
            Đăng thông tin
        </button>
    </form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>