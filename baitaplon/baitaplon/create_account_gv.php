<?php 
include('connect.php');
$email=$_POST['email'];
$password=$_POST['password'];
$name=$_POST['name'];
$ma_gv=$_POST['ma_gv'];
$sodt=$_POST['sodt'];
$tuoi=$_POST['tuoi'];
$password_hash=password_hash("$password", PASSWORD_DEFAULT);
//Kiểm tra tài khoản đã tồn tại chưa
$result = $conn->prepare("SELECT * FROM tb_giaovien where email='$email'");
$result->execute();
$number_of_rows = $result->fetchColumn();
echo $name;
if($number_of_rows>0){
	header('Location:./admin/admin_qlgiangvien.php?status=1');
}
elseif($email!=null&&$password!=null&&$name!=null&&$ma_gv!=null&&$sodt!=null&&$tuoi!=null){
	$result = $conn->prepare("INSERT INTO tb_giaovien(name,maGV,email,password,sodt,tuoi) VALUES ('$name','$ma_gv','$email','$password_hash','$sodt','$tuoi')");
	$result->execute();
	header('Location:./admin/admin_qlgiangvien.php?status=2');
}

else{header('Location:./admin/admin_qlgiangvien.php?status=1');}
$conn=null;



 ?>