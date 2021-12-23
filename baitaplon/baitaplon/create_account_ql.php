<?php 
include('connect.php');
if(isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['name'])&&isset($_POST['ma_ql'])){
$email=$_POST['email'];
$password=$_POST['password'];
$name=$_POST['name'];
$ma_ql=$_POST['ma_ql'];
}
$password_hash=password_hash("$password", PASSWORD_DEFAULT);
//Kiểm tra tài khoản đã tồn tại chưa
$result = $conn->prepare("SELECT * FROM tb_quanly where email='$email'");
$result->execute();
$number_of_rows = $result->fetchColumn();
//Mã hóa mật khẩu

if($number_of_rows>0){
	header('Location:./admin/admin_quanly.php?status=1');
}
elseif($email!=null&&$password!=null&&$name!=null&&$ma_ql!=null){
	$result = $conn->prepare("INSERT INTO tb_quanly(name,maql,email,password) VALUES ('$name','$ma_ql','$email','$password_hash')");

	$result->execute();
	// $_SESSION['email']=$email;
	header('Location:./admin/admin_quanly.php?status=2');
}
else{header('Location:./admin/admin_quanly.php?status=1');}
$conn=null;
 ?>