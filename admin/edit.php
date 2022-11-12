<?php
$id = $_GET['id'];
require_once 'ketnoi.php';
$edit_sql = "select * from medicine where id = $id";
$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Form thêm sản phẩm</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>" id = "">
            <div class="form-group">
                <label for="ten">Tên sản phẩm</label>
                <input type="text" id="ten" class="form-control" name="ten" value="<?php echo $row['ten']?>">
            </div>
            <div class="form-group">
                <label for="dongia">Đơn giá</label>
                <input type="text" id="dongia" name="dongia" value="<?php echo $row['dongia']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="dvt">Đơn vị tính</label>
                <input type="text" id="dvt" class="form-control" name="dvt" value="<?php echo $row['dvt']?>">
            </div>
            <div class="form-group">
                <label for="danhmuc">Danh mục</label>
                <input type="text" id="danhmuc" class="form-control" name="danhmuc" value="<?php echo $row['danhmuc']?>">
            </div>
            <div class="form-group">
                <label for="soluong">Số lượng</label>
                <input type="text" id="soluong" class="form-control" name="soluong" value="<?php echo $row['soluong']?>">
            </div>
            <button class="btn btn-success">Cập nhật thông tin</button>
        </form>
    </div>
</body>
</html>