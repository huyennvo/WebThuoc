<?php
$id = $_GET['id'];
require_once 'ketnoi.php';
$delete_sql = "delete from medicine where  id = $id";
mysqli_query($conn, $delete_sql);
header("Location: list.php");
?>