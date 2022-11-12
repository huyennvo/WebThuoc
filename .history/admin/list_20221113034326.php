<!-- php -S localhost:8888 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thuốc nhà Võ</title>
    <script src="https://kit.fontawesome.com/1b99fd25e4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="icon" href="../imgs/logo.png" type="image/x-icon">    

<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');

 * {
    margin: 0; 
    padding: 0; 
    border: 0;
}
html{
    font-family:Helvetica, Tahoma, Arial, sans-serif;
    font-size:16px;
}
:root{
    --maincolor: #072D94;
}
  

.header {
    background: #072D94;
    color: #fff;
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    display: flex;
    justify-content: flex-end;
    height: 35px;
    padding: 3px 60px 0px 0px;
}

.header ul {
    display: flex;
    flex-direction: row;
    list-style: none;
}

.header ul li {
    margin-left: 18px;
}

.header ul li i {
    height: 18px;
    margin-right: 7px;
}
@media (min-width: 1200px){
    .container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 1350px;
}
  }
  .table td {
    vertical-align: center !important;
  }
  
  h1,th, td {
    text-align: center;
  }
  #btn-add {
  position: absolute;
  right: 200px;
}
 .action {
  display: flex;
  flex-wrap: nowrap;
 }
 a:hover, a:visited, a:link, a:active
{
    text-decoration: none;
    color: white;
}
 /* a {
  text-decoration: none;
  color: white;
 } */
</style>
</head>
<body>
<div class="header">
    <ul>
      <li>
        <a href="../home/home.html">
          <i class="fa-regular fa-circle-left"></i>
          Về trang chủ
        </a>
      </li>
      
      <li>
        <i class="fa-solid fa-user"></i>
        Admin
      </li>
      <li>
        
      </li>
    </ul>
  </div>
    <div class="container">
      <h1>Danh sách các sản phẩm</h1>
      <button type="button" class="btn btn-success" id="btn-add" data-toggle="modal" data-target="#myModal">
  Thêm sản phẩm mới
</button>
<br>
<br>
    <table class="table table-bordered">
    <thead class="thead-light">
      <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Đơn giá</th>
        <th>Đơn vị tính</th>
        <th>Danh mục</th>
        <th>Số lượng</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
    <?php 
require_once 'ketnoi.php';
$list_sql = "Select * from medicine";
$result = mysqli_query($conn, $list_sql);
while ($r = mysqli_fetch_assoc($result)){
  ?>

    <tr>
      <td><?php echo $r['id']; ?></td>
      <td><?php echo $r['ten']; ?></td>
      <td><?php echo $r['dongia']; ?></td>
      <td><?php echo $r['dvt']; ?></td>
      <td><?php echo $r['danhmuc']; ?></td>
      <td><?php echo $r['soluong']; ?></td>
      <td >
        <div class="action">
          <a  href="edit.php?id=<?php echo $r['id'];?>" class="btn btn-primary edit">Sửa</a>
          &nbsp;
          <a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');" href="delete.php?id=<?php echo $r['id'];?>" class="btn btn-danger delete">Xóa</a>
        </div>
      </td>
    </tr>
  <?php
    
}
?>
   </tbody>
  </table>

    </div>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thêm sản phẩm mới</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="add.php" method="post">
            <div class="form-group">
                <label for="ten">Tên sản phẩm</label>
                <input type="text" id="ten" class="form-control" name="ten">
            </div>
            <div class="form-group">
                <label for="dongia">Đơn giá</label>
                <input type="text" id="dongia" name="dongia" class="form-control">
            </div>
            <div class="form-group">
                <label for="dvt">Đơn vị tính</label>
                <input type="text" id="dvt" class="form-control" name="dvt">
            </div>
            <div class="form-group">
                <label for="danhmuc">Danh mục</label>
                <input type="text" id="danhmuc" class="form-control" name="danhmuc">
            </div>
            <div class="form-group">
                <label for="soluong">Số lượng</label>
                <input type="text" id="soluong" class="form-control" name="soluong">
            </div>
            <button class="btn btn-success">Thêm sản phẩm</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</body>
</html>
