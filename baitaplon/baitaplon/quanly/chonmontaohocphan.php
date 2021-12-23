<?php 
session_start();
if(!isset($_SESSION['iduser'])&&!isset($_SESSION['username'])){
    header('Location:../login.php?role=2');
    exit();
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quan Lý</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="./quanly.css">
	<script src="../jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="admin_gv.js"></script>
</head>
<body>
<div class="container-fluid">
	<!-- phần header -->
	<div class="row" style="background-color: #AFB0A0">
	  <div class="col-sm-8"><h1>Người Quản Lý</h1></div>
	  <div class="col-sm-4" id="user">
	  	<div class="nameuser">
		  <span><?php echo $_SESSION['username']; ?></span>
		  <svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M22.417,14.836c-1.209,2.763-3.846,5.074-6.403,5.074c-3.122,0-5.39-2.284-6.599-5.046   c-7.031,3.642-6.145,12.859-6.145,12.859c0,1.262,0.994,1.445,2.162,1.445h10.581h10.565c1.17,0,2.167-0.184,2.167-1.445   C28.746,27.723,29.447,18.479,22.417,14.836z" fill="#515151"/><path d="M16.013,18.412c3.521,0,6.32-5.04,6.32-9.204c0-4.165-2.854-7.541-6.375-7.541   c-3.521,0-6.376,3.376-6.376,7.541C9.582,13.373,12.491,18.412,16.013,18.412z" fill="#515151"/></g></svg><br>
		</div>
		  <a href="../xulylogout.php">Logout</a>
	  </div>
	</div>
	<!-- phần content -->
	<div class="row" id="content" style="display: flex">
		<div class="col-sm-2" style="background-color: #ccc">
			<ul class="nav flex-column">
			    <li class="nav-item">
			      <a class="nav-link" href="./quanly_taonganhhoc.php">Tạo Ngành Học</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="./chonmontaohocphan.php">Tạo Lớp Học Phần Mới</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="./quanly_dsgv_ql.php">Gán Giảng Viên Với Môn Học</a>
			    </li>
  			</ul>
		</div>
		<!-- Nội dung từng mục -->
		<div style="background-color: #FFFFFF;flex-grow: 1">

			<form action="quanly_taohocphan.php" method="get" style="margin-top: 50px;margin-left: 50px;">
				<h6>Hãy chọn 1 môn học để tạo học phần:</h6><br>
				<select name="monhoc">
				<?php
				include('../connect.php');
                $a = "SELECT * FROM tb_monhoc";
                $result = $conn->prepare($a);
                $result->execute();
                foreach ($result as $row) {
				echo'<option value="'.$row['id'].'">'.$row['name'].'</option>';}
				?>
				</select>
				<button type="submit" class="btn btn-primary">Chọn</button>
			</form>
		</div>
  	</div>
</div>

</body>
</html>