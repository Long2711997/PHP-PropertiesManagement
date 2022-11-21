<?php
require './libs/Business.php';
 
// Nếu người dùng submit form
// var_dump($_POST);
// echo empty($_POST['submit']);
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
        // echo 'Gọi hàm';
        UploadFile( $data['Target_file']);
        add_business( $data['name'],$data['phone'], $data['address'], $data['city'],$data['square'],$data['price'], $data['Target_file']);
        // Trở về trang danh sách
        header("location: houses.php");
    }
}
 
disconnect_db();
?>