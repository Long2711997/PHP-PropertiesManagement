<?php
require './libs/Business.php';
 
// Nếu người dùng submit form
if (!empty($_POST['submit']))
{
    // echo 'đã vào';
    // Lay data
    
    $data['name']        = isset($_POST['name']) ? $_POST['name'] : '';
    $data['phone']        = isset($_POST['phone']) ? $_POST['phone'] : '';
    $data['address']         = isset($_POST['address']) ? $_POST['address'] : '';
   
    $data['city']    = isset($_POST['city']) ? $_POST['city'] : '';
    $data['square']          = isset($_POST['square']) ? $_POST['square'] : '';
    $data['price']          = isset($_POST['price']) ? $_POST['price'] : '';
    
    $target_dir = "image/";
  
    $data['Target_file'] = $target_dir . basename($_FILES["fileUpload"]["name"]);
 
    // echo $data['Masv']   ;
    // Validate thong tin
    $errors = array();
    if (empty($data['name'])){
        $errors['name'] = 'Chưa nhập tên';
    }
  
    if (empty($data['phone'])){
        $errors['phone'] = 'Chưa nhập số điện thoại';
    }
    if (empty($data['address'])){
        $errors['address'] = 'Chưa nhập địa chỉ';
    }
    if (empty($data['city'])){
        $errors['city'] = 'Chưa nhập thành phố';
    }
    if (empty($data['square'])){
        $errors['square'] = 'Chưa nhập diện tích';
    }
    if (empty($data['price'])){
        $errors['price'] = 'Chưa nhập giá bán';
    }
    if (empty($data['Target_file'])){
        $errors['Image'] = 'Chưa nhập chọn đường dẫn';
    }
   
    // Neu ko co loi thi insert
    if (!$errors){
        echo 'Gọi hàm';
        UploadFile( $data['Target_file']);
        add_business( $data['name'],$data['phone'], $data['address'], $data['city'],$data['square'],$data['price'], $data['Target_file']);
        // Trở về trang danh sách
        header("location: houses.php");
    }
}
 
disconnect_db();
?>


<!doctype html>
<html lang="en">

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
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">
                        Trang chủ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./houses.php">
                        Dự án
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./business.php">
                        Bán
                    </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="">
                    Login
                </button>
            </form>
        </div>
    </nav>
    <form class="container" action="business.php" method="post" enctype="multipart/form-data">
        <h2>Bạn muốn bán nhà?</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="name" name="name" placeholder="Họ và Tên" />
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại" />
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ nhà muốn bán" />
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <input type="text" class="form-control" id="city" name="city" placeholder="Thành phố" />
            </div>
            <div class="form-group col-4">
                <input type="text" class="form-control" id="square" name="square" placeholder="Diện tích" />
            </div>
            <div class="form-group col-4">
                <input type="text" class="form-control" id="price" name="price" placeholder="Giá bán" />
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Hình ảnh</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">
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