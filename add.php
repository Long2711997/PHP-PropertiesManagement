<?php
require './libs/students.php';
 
// Nếu người dùng submit form
if (!empty($_POST['add_student']))
{
    echo 'đã vào';
    // Lay data
    
    $data['Masv']        = isset($_POST['Masv']) ? $_POST['Masv'] : '';
    $data['Hoten']        = isset($_POST['Hoten']) ? $_POST['Hoten'] : '';
    $data['Ngaysinh']         = isset($_POST['Ngaysinh']) ? $_POST['Ngaysinh'] : '';
   
    $data['Noisinh']    = isset($_POST['Noisinh']) ? $_POST['Noisinh'] : '';
    $data['Nganhhoc']          = isset($_POST['Nganhhoc']) ? $_POST['Nganhhoc'] : '';
    
    $target_dir = "image/";
  
    $data['Target_file'] = $target_dir . basename($_FILES["fileUpload"]["name"]);
 
    echo $data['Masv']   ;
    // Validate thong tin
    $errors = array();
    if (empty($data['Masv'])){
        $errors['Masv'] = 'Chưa nhập mã sinh viên';
    }
  
    if (empty($data['Hoten'])){
        $errors['Hoten'] = 'Chưa nhập họ tên sinh viên';
    }
    if (empty($data['Ngaysinh'])){
        $errors['Ngaysinh'] = 'Chưa nhập ngày sinh';
    }
    if (empty($data['Noisinh'])){
        $errors['Noisinh'] = 'Chưa nhập nơi sinh';
    }
    if (empty($data['Nganhhoc'])){
        $errors['Nganhhoc'] = 'Chưa nhập ngành học';
    }
    if (empty($data['Target_file'])){
        $errors['Image'] = 'Chưa nhập chọn đường dẫn';
    }
   
    // Neu ko co loi thi insert
    if (!$errors){
        echo 'Gọi hàm';
        UploadFile( $data['Target_file']);
        add_student( $data['Masv'],$data['Hoten'], $data['Ngaysinh'], $data['Noisinh'],$data['Nganhhoc'], $data['Target_file']);
        // Trở về trang danh sách
        header("location: index.php");
    }
}
 
disconnect_db();
?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nhập thông tin học viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="">FORM NHẬP THÔNG TIN SINH VIÊN </h1>
                <a href="index.php">Trở về</a> <br /> <br />
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-6  ">
                <form action="sinhvien_them.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Mã sinh viên</label>
                        <input type="text" class="form-control" name="Masv" placeholder="Mã sinh viên">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Họ tên học viên</label>
                        <input type="text" class="form-control" name="Hoten" placeholder="Họ tên">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ngày tháng năm sinh</label>
                        <input type="date" class="form-control" name="Ngaysinh" placeholder="Ngày sinh dd/mm/yy">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nơi sinh</label>
                        <input type="text" class="form-control" name="Noisinh" placeholder="Nơi sinh">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ngành học</label>
                        <input type="text" class="form-control" name="Nganhhoc" placeholder="Ngành học">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ảnh đại diện</label>
                        <input type="file" class="form-control" name="fileUpload" placeholder="File">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ảnh đại diện</label>
                        <input type="submit" class="form-control" value="Lưu" name="add_student">
                    </div>

                </form>
            </div>
        </div>



</body>

</html>