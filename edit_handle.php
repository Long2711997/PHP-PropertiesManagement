<?php
 
require './libs/Business.php';

// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
// echo $_POST['id'];
// var_dump($_POST);
if ($id){
    $data = get_houses($id);
}
 
// Nếu không có dữ liệu tức không tìm thấy house cần sửa
if (!$data){
   
   header("location: edit_template.php");
}
 
// Nếu người dùng submit form
if (!empty($_POST['edit']))
{
   
    $data['name']        = isset($_POST['name']) ? $_POST['name'] : '';
    $data['phone']        = isset($_POST['phone']) ? $_POST['phone'] : '';
    $data['address']         = isset($_POST['address']) ? $_POST['address'] : '';
   
    $data['city']    = isset($_POST['city']) ? $_POST['city'] : '';
    $data['square']          = isset($_POST['square']) ? $_POST['square'] : '';
    $data['price']          = isset($_POST['price']) ? $_POST['price'] : '';
    
    $target_dir = "image/";
  
    $data['Target_file'] = $target_dir . basename($_FILES["fileUpload"]["name"]);
 
    
     
 
    echo $data['']   ;
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
       echo 'không có lỗi';
        UploadFile( $data['Target_file']);
        edit_house($data['id'], $data['name'], $data['phone'], $data['address'], $data['city'],$data['square'], $data['price'], $data['target_file']);
        // Trở về trang danh sách
       header("location: houses.php");
    }
} else {
       header("location: index.php");

}
 
disconnect_db();
?>