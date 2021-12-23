<?php 
session_start();
if(!isset($_SESSION['iduser'])&&!isset($_SESSION['username'])){
    header('Location:../login.php?role=2');
    exit();
}
if(isset($_GET['status'])&&$_GET['status']==1){
echo "<script>alert('Môn học này đã được gán cho giảng viên')</script>";
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
		<div style="background-color: #FFFFFF;width: 400px;overflow-y: scroll;">
				<center><h5>Gán Các Môn Học Cho Giảng Viên </h5></center>
			    <?php  
			    include('../connect.php');
                $a = "SELECT * FROM tb_monhoc";
                $result = $conn->prepare($a);
                $result->execute();
                echo '<form style="margin-left:50px;margin-top:50px;" action="./xulychonmon.php?id='.$_GET['idgiaovien'].'&tengv='.$_GET['tengv'].'" method="POST">';
                foreach ($result as $row) {
                	echo '<input type="checkbox" name="monhoc[]" value="'.$row['id'].'"><span>'.$row['name'].'</span><br><br>';
			    }
			    echo '<button type="submit" class="btn btn-primary">Chọn</button><br><br>';
			    echo '</form>';
			    ?>
		</div>
		<div style="background-color: #FFFFFF;flex-grow: 1;overflow-y: scroll;">
			<center><h5>Các môn học đã được phân công cho giảng viên <?php echo $_GET['tengv']; ?></h5></center>
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Mã Môn</th>
			        <th>Tên Môn Học</th>
			        <th>Số Tín Chỉ</th>
			        <th>Xóa</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php  
			    $idgv=$_GET['idgiaovien'];
			    $tengv=$_GET['tengv'];
                $b = "SELECT tb_monhoc.Mamon,tb_monhoc.name,tb_monhoc.sotinchi,tb_monhoc.id FROM tb_monhoc,tb_giaovien_monhoc
                WHERE tb_monhoc.id=tb_giaovien_monhoc.idmonhoc AND tb_giaovien_monhoc.idgiaovien='$idgv'";
                $resultb = $conn->prepare($b);
                $resultb->execute();
                // var_dump($resultb);
                foreach ($resultb as $row) {
			    echo'<tr>
			        <td>'.$row['Mamon'].'</td>
			        <td>'.$row['name'].'</td>
			        <td>'.$row['sotinchi'].'</td>
			        <td><a href="./xoa_monhoc_gv.php?idmonhoc='.$row['id'].'&idgv='.$idgv.'&tengv='.$tengv.'">Xóa</a></td>
			      </tr>';}
			    ?>
			    </tbody>
			</table>
		</div>
  	</div>
</div>

</body>
</html>
