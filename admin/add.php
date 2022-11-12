<?php
$ten = $_POST['ten'];
$dongia = $_POST['dongia'];
$dvt = $_POST['dvt'];
$danhmuc = $_POST['danhmuc'];
$soluong = $_POST['soluong'];
require_once 'ketnoi.php';
$themsql = "Insert into medicine (ten, dongia, dvt, danhmuc, soluong) values ('$ten', '$dongia', '$dvt', '$danhmuc', '$soluong')";

if (mysqli_query($conn, $themsql)) {
    echo "<h1>Thêm sản phẩm thành công</h1>";
    header("Location: list.php");
} 


?>