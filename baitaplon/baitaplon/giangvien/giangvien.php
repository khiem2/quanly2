<?php 
session_start();
if(!isset($_SESSION['iduser'])&&!isset($_SESSION['username'])){
    header('Location:../login.php?role=3');
    exit();
}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Giảng Viên</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="./giangvien.css">
	<script src="../jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>
<div class="container-fluid">
	<!-- phần header -->
	<div class="row" style="background-color: #AFB0A0">
	  <div class="col-sm-8"><h1>Giảng Viên</h1></div>
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
			      <a class="nav-link" href="./giangvien.php">Lịch trình giảng dạy của giảng viên <?php echo $_SESSION['username']; ?></a>
			    </li>
  			</ul>
		</div>
		<!-- Nội dung từng mục -->
  		<div class="col-sm-10" style="background-color: #f1f1f1;overflow-y: scroll;">
  			<form class="search" action="./giangvien.php" method="GET" style="display: flex;justify-content: space-around">
  				<div>
	  			<span>Giai Đoạn:</span>
	  			<select name="giaidoan">
	  				<option >Giai Đoạn 1</option>
	  				<option >Giai Đoạn 2</option>
	  			</select>
	  			</div>
	  			<div>
	  			<span>Học Kỳ:</span>
	  			<select name="hocky">
	  				<option >Học Kỳ 1</option>
	  				<option >Học Kỳ 2</option>
	  			</select>
	  			</div>
	  			<div>
	  			<span>Năm học:</span>
	  			<select name="namhoc">
	  				<option >2019-2020</option>
	  				<option >2020-2021</option>
	  				<option >2021-2022</option>
	  				<option >2022-2023</option>
	  			</select>
	  			</div>
	  			<button type="submit" class="btn btn-success">Tìm Kiếm</button>
			</form>
  			<table class="table" style="margin-top: 50px;">
			    <thead>
			      <tr>
			      	<th>Lớp học</th>
			        <th>Thời gian bắt đầu</th>
			        <th>Thời gian kết thúc</th>
			        <th>Địa điểm</th>
			        <th>Giảng Viên</th>
			        <th>Môn học</th>
			        <th>Giai Đoạn</th>
			        <th>Học kỳ</th>
			        <th>Năm học</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php 
			    if(!isset($_GET['giaidoan'])&&!isset($_GET['hocky'])&&!isset($_GET['namhoc'])){
			    include('../connect.php');
			    $tengv=$_SESSION['username'];
		    	$b = "SELECT * FROM tb_lophocphan where giangvien='$tengv'";
                $resultb = $conn->prepare($b);
                $resultb->execute();
            	foreach ($resultb as $row) {
			      echo'<tr>
			        <td>'.$row['lophoc'].'</td>
			        <td>'.$row['thoigianbatdau'].'</td>
			        <td>'.$row['thoigianketthuc'].'</td>
			        <td>'.$row['diadiem'].'</td>
			        <td>'.$row['giangvien'].'</td>
			        <td>'.$row['monhoc'].'</td>
			        <td>'.$row['giaidoan'].'</td>
			        <td>'.$row['hocky'].'</td>
			        <td>'.$row['namhoc'].'</td>
			      </tr>';}}
			      if(isset($_GET['giaidoan'])&&isset($_GET['hocky'])&&isset($_GET['namhoc'])){
			      	include('../connect.php');
			      	$giaidoan=$_GET['giaidoan'];
			      	$hocky=$_GET['hocky'];
			      	$namhoc=$_GET['namhoc'];
				    $tengv=$_SESSION['username'];
			    	$b = "SELECT * FROM tb_lophocphan where giangvien='$tengv' and giaidoan='$giaidoan' and hocky='$hocky' and namhoc='$namhoc'";
	                $resultb = $conn->prepare($b);
	                $resultb->execute();
	            	foreach ($resultb as $row) {
				      echo'<tr>
				        <td>'.$row['lophoc'].'</td>
				        <td>'.$row['thoigianbatdau'].'</td>
				        <td>'.$row['thoigianketthuc'].'</td>
				        <td>'.$row['diadiem'].'</td>
				        <td>'.$row['giangvien'].'</td>
				        <td>'.$row['monhoc'].'</td>
				        <td>'.$row['giaidoan'].'</td>
				        <td>'.$row['hocky'].'</td>
				        <td>'.$row['namhoc'].'</td>
				      </tr>';}
			      }
			      ?>
			    </tbody>
 			</table>
  		</div>
	</div>
</div>

</body>
</html>