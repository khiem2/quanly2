<?php 
session_start();
if(isset($_GET['status'])&&$_GET['status']==2){
echo "<script>alert('Đổi Mật Khẩu bị lỗi ,vui lòng kiểm tra lại thông tin')</script>";
}
if(isset($_GET['status'])&&$_GET['status']==1){
echo "<script>alert('Đổi Mật Khẩu thành công ')</script>";
}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="admin_home.css">
	<script src="../jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="admin_gv.js"></script>
</head>
<body>
<div class="container-fluid">
	<!-- phần header -->
	<div class="row" style="background-color: #AFB0A0">
	  <div class="col-sm-8"><h1>ADMIN</h1></div>
	  <div class="col-sm-4" id="user">
	  	<div class="nameuser">
		  <span><?php echo $_SESSION['username']; ?></span>
		  <svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M22.417,14.836c-1.209,2.763-3.846,5.074-6.403,5.074c-3.122,0-5.39-2.284-6.599-5.046   c-7.031,3.642-6.145,12.859-6.145,12.859c0,1.262,0.994,1.445,2.162,1.445h10.581h10.565c1.17,0,2.167-0.184,2.167-1.445   C28.746,27.723,29.447,18.479,22.417,14.836z" fill="#515151"/><path d="M16.013,18.412c3.521,0,6.32-5.04,6.32-9.204c0-4.165-2.854-7.541-6.375-7.541   c-3.521,0-6.376,3.376-6.376,7.541C9.582,13.373,12.491,18.412,16.013,18.412z" fill="#515151"/></g></svg><br>
		</div>
		  <a href="../xulylogout.php">Logout</a>
	  </div>
	</div>
	<!-- phần content -->
	<div class="row" id="content">
		<div class="col-sm-2" style="background-color: #ccc">
			<ul class="nav flex-column">
			    <li class="nav-item">
			      <a class="nav-link" href="./admin_qlgiangvien.php">Quản Lý Giảng Viên</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="./admin_quanly.php">Quản Lý Người Quản Lý</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="./password.php">Change Password</a>
			    </li>
  			</ul>
		</div>
		<!-- Nội dung từng mục -->
  		<div class="col-sm-10" style="background-color: #f1f1f1">
  			<form action="./doi_mk.php" method="POST">
  				<span>Nhập Mật Khẩu Cũ:</span><br>
  				<br>
  				<input type="password" name="password_old"><br>
  				<br>
  				<span>Nhập Mật Khẩu Mới:</span><br>
  				<br>
  				<input type="password" name="password_new"><br>
  				<br>
  				<button type="submit" class="btn btn-warning">Change</button>
  			</form>
  		</div>
	</div>