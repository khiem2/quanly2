<?php 
session_start();
if(!isset($_SESSION['iduser'])&&!isset($_SESSION['username'])){
    header('Location:../login.php?role=2');
    exit();
}
if(isset($_GET['status'])&&$_GET['status']==1){
echo "<script>alert('Tạo tài khoản bị lỗi ,vui lòng kiểm tra lại thông tin')</script>";
}
if(isset($_GET['status'])&&$_GET['status']==2){
echo "<script>alert('Tạo tài khoản thành công')</script>";
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
  			<form class="teacher" action="../create_account_ql.php" method="POST">
  				<div class="row">
  					<div class="col-sm-2">Tên Quản Lý</div>
	  				<div class="col-sm-2"><input type="text" name="name"></div>
	  				<div class="col-sm-2">Mã QL</div>
	  				<div class="col-sm-2"><input type="text" name="ma_ql"></div>
  				</div><br>
  				<div class="row">
	  				<div class="col-sm-2">Email</div>
	  				<div class="col-sm-2"><input type="text" name="email"></div>
	  				<div class="col-sm-2">Password</div>
	  				<div class="col-sm-2"><input type="password" name="password"></div>
  				</div><br>
  				<button type="submit" class="btn btn-primary">ADD</button>
  			</form>
  			<form class="import" action="add_file_ql.php" method="POST" enctype="multipart/form-data">
  				<input type="file" name="addfile">
  				<button type="submit" class="btn btn-primary">IMPORT</button>
  			</form>
  			<form class="search" action="./admin_quanly.php" method="GET">
	  			<div class="input-group mb-3">
				  <input type="text" class="form-control" name="maql" placeholder="Nhập Mã Quản Lý">
				  <div class="input-group-append">
				    <button class="btn btn-success" type="submit">Search</button> 
				  </div>
				</div>
			</form>
  			<table class="table" style="margin-top: 50px;">
			    <thead>
			      <tr>
			      	<th>Mã Quản Lý</th>
			        <th>Tên Quản Lý</th>
			        <th>Email</th>
			        <th>Password</th>
			        <th>Sửa</th>
			        <th>Xóa</th>

			      </tr>
			    </thead>
			    <tbody>
			    <?php
			    if (!isset($_GET['maql'])) {
			   	include('../connect.php');
			   	$b = "SELECT * FROM tb_quanly";
	            $resultb = $conn->prepare($b);
	            $resultb->execute();
	            foreach ($resultb as $row){
			     echo '<tr>
			        <td>'.$row['maql'].'</td>
			        <td>'.$row['name'].'</td>
			        <td>'.$row['email'].'</td>
			        <td>'.$row['password'].'</td>
			        <td class="change"><a href="./admin_quanly.php?idql='.$row['id'].'"><svg enable-background="new 0 0 50 50" height="30px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><polyline fill="none" points="  42.948,12.532 10.489,44.99 3,47 5.009,39.511 37.468,7.052 " stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="M45.749,11.134c-0.005,0.004,0.824-0.825,0.824-0.825c1.901-1.901,1.901-4.983,0.002-6.883c-1.903-1.902-4.984-1.9-6.885,0  c0,0-0.83,0.83-0.825,0.825L45.749,11.134z"/><polygon points="5.191,39.328 10.672,44.809 3.474,46.526 "/></svg></a>
			        </td>

			        <td><a href="./delete_quanly.php?idquanly='.$row['id'].'"><svg id="Layer_1" style="enable-background:new 0 0 64 64;width: 30px" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
						.st0{fill:#134563;}
					</style><g><g id="Icon-Trash" transform="translate(232.000000, 228.000000)"><polygon class="st0" id="Fill-6" points="-207.5,-205.1 -204.5,-205.1 -204.5,-181.1 -207.5,-181.1    "/><polygon class="st0" id="Fill-7" points="-201.5,-205.1 -198.5,-205.1 -198.5,-181.1 -201.5,-181.1    "/><polygon class="st0" id="Fill-8" points="-195.5,-205.1 -192.5,-205.1 -192.5,-181.1 -195.5,-181.1    "/><polygon class="st0" id="Fill-9" points="-219.5,-214.1 -180.5,-214.1 -180.5,-211.1 -219.5,-211.1    "/><path class="st0" d="M-192.6-212.6h-2.8v-3c0-0.9-0.7-1.6-1.6-1.6h-6c-0.9,0-1.6,0.7-1.6,1.6v3h-2.8v-3     c0-2.4,2-4.4,4.4-4.4h6c2.4,0,4.4,2,4.4,4.4V-212.6" id="Fill-10"/><path class="st0" d="M-191-172.1h-18c-2.4,0-4.5-2-4.7-4.4l-2.8-36l3-0.2l2.8,36c0.1,0.9,0.9,1.6,1.7,1.6h18     c0.9,0,1.7-0.8,1.7-1.6l2.8-36l3,0.2l-2.8,36C-186.5-174-188.6-172.1-191-172.1" id="Fill-11"/></g></g></svg></a>
					</td>
			      </tr>';}}
			    if (isset($_GET['maql'])) {
			    $maql=$_GET['maql'];
			   	include('../connect.php');
			   	$b = "SELECT * FROM tb_quanly WHERE maql='$maql'";
	            $resultb = $conn->prepare($b);
	            $resultb->execute();
	            foreach ($resultb as $row){
			     echo '<tr>
			        <td>'.$row['maql'].'</td>
			        <td>'.$row['name'].'</td>
			        <td>'.$row['email'].'</td>
			        <td>'.$row['password'].'</td>
			        <td class="change"><a href="./admin_quanly.php?idql='.$row['id'].'"><svg enable-background="new 0 0 50 50" height="30px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><polyline fill="none" points="  42.948,12.532 10.489,44.99 3,47 5.009,39.511 37.468,7.052 " stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="M45.749,11.134c-0.005,0.004,0.824-0.825,0.824-0.825c1.901-1.901,1.901-4.983,0.002-6.883c-1.903-1.902-4.984-1.9-6.885,0  c0,0-0.83,0.83-0.825,0.825L45.749,11.134z"/><polygon points="5.191,39.328 10.672,44.809 3.474,46.526 "/></svg></a>
			        </td>

			        <td><a href="./delete_quanly.php?idquanly='.$row['id'].'"><svg id="Layer_1" style="enable-background:new 0 0 64 64;width: 30px" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
						.st0{fill:#134563;}
					</style><g><g id="Icon-Trash" transform="translate(232.000000, 228.000000)"><polygon class="st0" id="Fill-6" points="-207.5,-205.1 -204.5,-205.1 -204.5,-181.1 -207.5,-181.1    "/><polygon class="st0" id="Fill-7" points="-201.5,-205.1 -198.5,-205.1 -198.5,-181.1 -201.5,-181.1    "/><polygon class="st0" id="Fill-8" points="-195.5,-205.1 -192.5,-205.1 -192.5,-181.1 -195.5,-181.1    "/><polygon class="st0" id="Fill-9" points="-219.5,-214.1 -180.5,-214.1 -180.5,-211.1 -219.5,-211.1    "/><path class="st0" d="M-192.6-212.6h-2.8v-3c0-0.9-0.7-1.6-1.6-1.6h-6c-0.9,0-1.6,0.7-1.6,1.6v3h-2.8v-3     c0-2.4,2-4.4,4.4-4.4h6c2.4,0,4.4,2,4.4,4.4V-212.6" id="Fill-10"/><path class="st0" d="M-191-172.1h-18c-2.4,0-4.5-2-4.7-4.4l-2.8-36l3-0.2l2.8,36c0.1,0.9,0.9,1.6,1.7,1.6h18     c0.9,0,1.7-0.8,1.7-1.6l2.8-36l3,0.2l-2.8,36C-186.5-174-188.6-172.1-191-172.1" id="Fill-11"/></g></g></svg></a>
					</td>
			      </tr>';}}
			      ?>
			    </tbody>
 			</table>
  		</div>
	</div>
	<?php
	if(isset($_GET['idql'])){
	echo'
	<div id="black">
	</div>
	<div class="change_teacher">
		<form action="./change_ql.php?idql='.$_GET['idql'].'" method="POST">
			<div class="row">
  					<div class="col-sm-3">Tên Quản Lý</div>
	  				<div class="col-sm-3"><input type="text" name="name"></div><br>
	  				<div class="col-sm-3">Mã Quản Lý</div>
	  				<div class="col-sm-3"><input type="text" name="ma_ql"></div>
	  		</div>
	  	    <br>
	  		<div class="row">
	  				<div class="col-sm-3">Email</div>
	  				<div class="col-sm-3"><input type="text" name="email"></div>
	  				<div class="col-sm-3">Password</div>
	  				<div class="col-sm-3"><input type="password" name="password"></div>
  			</div><br>
  				<button type="submit" class="btn btn-primary">Change</button>
  				<div id="cancel"  class="btn btn-primary">Cancel</div>
		</form>
	</div>';}
	?>
</div>

</body>
</html>