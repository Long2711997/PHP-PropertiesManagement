<?php
// echo "hhhh";
require './libs/Business.php';
// var_dump($_POST);
if(!empty($_POST["register"])){
// echo $_POST["register"];
$data['user']        = isset($_POST['user']) ? $_POST['user'] : '';
$data['pass']        = isset($_POST['pass']) ? $_POST['pass'] : '';
$data['passConfirm']        = isset($_POST['passConfirm']) ? $_POST['passConfirm'] : '';
$data['acc']        = isset($_POST['acc']) ? $_POST['acc'] : '';

$errors = array();
if (empty($data['user'])){
        $errors['user'] = 'Chưa nhập userName';
    }
if (empty($data['pass'])){
        $errors['pass'] = 'Chưa nhập password';
    }
if (empty($data['passConfirm'])){
        $errors['passConfirm'] = 'Chưa nhập confirm password';
    }
if ($data['passConfirm'] != $data['pass']){
        $errors['passConfirm'] = 'Password và Confirm Password không giống nhau';
        $errors['pass'] = 'Password và Confirm Password không giống nhau';
    }
if (empty($data['acc'])){
        $errors['acc'] = 'Chưa nhập tên';
    }

if ($errors){
   setcookie("error", "Đăng ký không thành công!", time()+1, "/","", 0); 
}

// var_dump($errors);
if (!$errors) {
    register($data['user'], $data['pass'], $data['acc']);
    setcookie("success", "Đăng ký thành công!", time()+1, "/","", 0);
    // header("location: index.php");
}
}

disconnect_db();
?>