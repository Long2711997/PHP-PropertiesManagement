<?php
// Thực hiện xóa
$id = isset($_POST['id']) ? (int)$_POST['id'] : '';

if ($id){
    delete_houses($id);
}

?>