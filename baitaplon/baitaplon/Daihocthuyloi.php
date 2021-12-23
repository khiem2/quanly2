<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đại học thủy lợi</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./Daihocthuyloi.css">
	<script src="./jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Daihocthuyloi.js"></script>
</head>
<body>
	<!-- phần header -->
<div class="container-fluid" id="header">
  <img src="./img/logo.png">
  <div class="button_header">
	  <button type="button" class="btn btn-secondary" id="login">Login</button>
	  <!-- <button type="button" class="btn btn-secondary">Register</button> -->
  </div>
</div>
<div class="container-fluid">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="menu" >
	  <ul class="navbar-nav">
	  	<li class="nav-item">
	      <a class="nav-link" style="margin-top: -2px;" href="./Daihocthuyloi.php">
	      	<svg height="50px" version="1.1" viewBox="0 0 20 19" width="51px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><defs/><g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1"><g fill="#000000" id="Core" transform="translate(-506.000000, -255.000000)"><g id="home" transform="translate(506.000000, 255.500000)"><path d="M8,17 L8,11 L12,11 L12,17 L17,17 L17,9 L20,9 L10,0 L0,9 L3,9 L3,17 L8,17 Z" id="Shape"/></g></g></g></svg>

	      </a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">TIN TỨC</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">TUYỂN SINH</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">LIÊN HỆ</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">GIỚI THIỆU</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">ĐÀO TẠO</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">SINH VIÊN</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">ĐỐI NGOẠI</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="./kehoachgiangday.php">KẾ HOẠCH GIẢNG DẠY</a>
	    </li>
	  </ul>
	</nav>
</div>
<!-- phần slide show -->
<div class="container-fluid">
	<div id="demo" class="carousel slide" data-ride="carousel">

	  <!-- Indicators -->
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>
	  
	  <!-- The slideshow -->
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="./img/dai-hoc-thuy-loi.jpg"  width="1100" height="400">
	    </div>
	    <div class="carousel-item">
	      <img src="./img/IMG_1144.JPG"  width="1100" height="400">
	    </div>
	    <div class="carousel-item">
	      <img src="./img/nhanco.png"  width="1100" height="400">
	    </div>
	  </div>
	  
	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>
	</div>
</div>
<!-- Phần nội dung -->
<div class="container" id="content">
	<div class="incontent">
		<h4 class="title_content">TUYỂN SINH</h4>
		<div class="row">
		  <div class="col-sm-3">
		  	<img  " src="./img/lichthi.jpg">
		  	<a href="#">Lịch thi tuyển sinh đào tạo trình độ thạc sỹ năm 2019</a>
		  </div>
		  <div class="col-sm-3">
		  	<img  " src="./img/lichhoc.jpg">
		  	<a href="#">Lịch học ôn thi tuyển sinh thạc sỹ năm 2019</a>
		  </div>
		  <div class="col-sm-3">
		  	<img  " src="./img/danh_muc.jpg" style="height: 170px;">
		  	<a href="#">Thông báo các môn thi trong tuyển sinh đào tạo.</a>
		  </div>
		  <div class="col-sm-3">
		  	<ul style="margin-top: 20px;">
		  		<li><a href="#">Lịch học chuyển đổi thi tuyển sinh cao học năm...</a></li>
		  		<li><a href="#">Thông báo tuyển sinh liên thông trình độ đại học...</a></li>
		  		<li><a href="#">Quyết định điểm chuẩn tuyển sinh năm học 2019 cơ sơ mở rộng...</a></li>
		  		<li><a href="#">Quyết định điểm chuẩn tuyển sinh năm học 2019 Trương Đại Học Thủy Lợi...</a></li>
		  	</ul>
		  </div>
		</div>
	</div>
	<div class="incontent">
		<h4 class="title_content">ĐÀO TẠO</h4>
		<div class="row">
		  <div class="col-sm-3">
		  	<img  " src="./img/danh_muc.jpg" style="height:170px;">
		  	<a href="#">Thông báo về kế hoạch học kỳ 2 năm học 2019-2020...</a>
		  </div>
		  <div class="col-sm-3">
		  	<img  " src="./img/danh_muc.jpg" style="height: 170px;">
		  	<a href="#">Thông báo về kế hoạch học kỳ 2 năm học 2019-2020...</a>
		  </div>
		  <div class="col-sm-3">
		  	<img  " src="./img/lichthi.jpg">
		  	<a href="#">Thông báo các thi chuẩn đầu ra Tiếng Anh A2...</a>
		  </div>
		  <div class="col-sm-3">
		  	<ul style="margin-top: 20px;">
		  		<li><a href="#">Lễ tốt nghiệp và trao bằng tiến sĩ, thạc sĩ đợt 2...</a></li>
		  		<li><a href="#">Thông báo về kế hoạch học kỳ 2 năm học 2019-2020</a></li>
		  		<li><a href="#">Thông tin thời gian bảo vệ luận án tiến sĩ cấp...</a></li>
		  		<li><a href="#">Thông tin thời gian bảo vệ luận án tiến sĩ cấp...</a></li>
		  	</ul>
		  </div>
		</div>
	</div>
	<div class="incontent">
		<h4 class="title_content">ĐỐI NGOẠI</h4>
		<div class="row">
		  <div class="col-sm-3">
		  	<img  " src="./img/image006.jpg" style="height:170px;">
		  	<a href="#">Thông báo về kế hoạch học kỳ 2 năm học 2019-2020...</a>
		  </div>
		  <div class="col-sm-3">
		  	<img  " src="./img/dai-hoc-quang-tay-nam-ninh.jpg" style="height: 170px;">
		  	<a href="#">Thông báo về kế hoạch học kỳ 2 năm học 2019-2020...</a>
		  </div>
		  <div class="col-sm-3">
		  	<img  " src="./img/image006.jpg" style="height: 170px;">
		  	<a href="#">Thông báo các thi chuẩn đầu ra Tiếng Anh A2...</a>
		  </div>
		  <div class="col-sm-3">
		  	<ul style="margin-top: 20px;">
		  		<li><a href="#">Trường Đại học Thủy lợi mở rộng hợp tác đào tạo...</a></li>
		  		<li><a href="#">Hợp tác phát triển Phòng Thí Nghiệm Công Nghiệp...</a></li>
		  		<li><a href="#">Đẩy mạnh hợp tác với các doanh nghiệp Nhật Bản</a></li>
		  		<li><a href="#">Thông báo học bổng ITEC Ấn Độ năm 2019-2020</a></li>
		  	</ul>
		  </div>
		</div>
	</div>
</div>
<!-- phần footder -->
<div class="footder">
	<div class="footder-title">
		<span>&copy 2019-TRƯỜNG ĐẠI HỌC THỦY LỢI</span>
		<div class="icon">
			<img src="./img/fb-icon.png">
			<img src="./img/ytb-icon.png">
			<img src="./img/twitter-icon.png">
		</div>
	</div>
	<div class="footder_content">
		<div class="row">
		    <div class="col-sm-4" style="background-color: #001373;">
		   		<img class="img-responesive" src="./img/TLU-map.png">
		    </div>
		    <div  class="col-sm-4" style="background-color: #001373;">
		    	<h6>TRƯỜNG ĐẠI HOC THỦY LỢI</h6>
				<p>Địa chỉ :175 Tây Sơn,Đống Đa,Hà Nội.<br>
				Điện thoại:(024) 3852 2201-Fax:(024) 3563 3351<br>
				Email:phonghcth@tlu.edu.vn
				</p>
				<hr style="border: 1px solid gray;">
				<h6>TRƯỜNG ĐẠI HOC THỦY LỢI-CƠ SỞ 2</h6>
				<p>Địa chỉ :Số 2 Đường Tương Sa-P.17-Q.Bình Thạch-TP.HCM.<br>
				Điện thoại:(84) 028.38 400 532-Fax:(84) 028.38 400542<br>
				Email:cs2@tlu.edu.vn</p>
		    </div>
		    <div  class="col-sm-4" style="background-color: #001373;;">
		    	<h6>TRƯỜNG ĐẠI HOC THỦY LỢI- CƠ SỞ 2</h6>
				<p>Phường An Thạch-TX Thuận An-Tỉnh Bình Dương<br>
				Điện thoại:(024) 650.3748 620<br>
				Fax:(84).650.3833 489
				</p>
				<hr style="border: 1px solid gray;">
				<h6>VIỆN ĐÀO TẠO KHOA HỌC ỨNG DỤNG MIỀN TRUNG</h6>
				<p>Địa chỉ :Số 155 Trần Phú-P.17-TP.Phan Rang-Tỉnh Ninh Thuận.<br>
				Điện thoại:02593.823,02593.823 028<br>
				Email:trungtamdh2@tlu.edu.vn</p>
		    </div>
  		</div>
	</div>
</div>
<!-- cửa sổ nền đen -->
<div id="black">
</div>
<!-- phần cửa sổ chọn đăng nhập vs tư cách nào -->
<div class="choose_acount">
    <center><h4>Bạn chọn đăng nhập với tư cách nào ?</h4></center><br>
    <div style="display: flex;flex-direction: column;align-items: center;">
	    <button type="button" id="manager" style="width:140px; margin-top: 5px;" class="btn btn-secondary">Người Quản Trị</button>
	    <button type="button" id="manager_one" style="width:140px;margin-top: 5px;" class="btn btn-secondary">Người Quản Lý</button>
	    <button type="button" id="teacher" style="width:140px;margin-top: 5px;" class="btn btn-secondary">Giảng Viên</button>
	</div>
	<div id="cancel"><center>CANCEL</center></div>
</div>

</body>
</html>