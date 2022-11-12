<?php
$ten = $_POST['ten'];
$dongia = $_POST['dongia'];
$dvt = $_POST['dvt'];
$danhmuc = $_POST['danhmuc'];
$soluong = $_POST['soluong'];
$id = $_POST['id'];
require_once 'ketnoi.php';
$updatesql = "update medicine set ten = '$ten', dongia = '$dongia', dvt = '$dvt', danhmuc = '$danhmuc', soluong = '$soluong' where id=$id";
//echo $updatesql; exit;
if (mysqli_query($conn, $updatesql)) {
    header("Location: list.php");
} 


?>