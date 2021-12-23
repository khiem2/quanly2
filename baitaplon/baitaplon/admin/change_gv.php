<?php 
include('../connect.php');
$idgv=$_GET['idgv'];
$name=$_POST['name'];
$ma_gv=$_POST['ma_gv'];
$sodt=$_POST['sodt'];
$tuoi=$_POST['tuoi'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_hash=password_hash($password, PASSWORD_DEFAULT);
if($ma_gv!=null&&$name!=null&&$sodt!=null&&$tuoi!=null&&$email!=null&&$password!=null){
$update="UPDATE tb_giaovien SET name='$name' , maGV='$ma_gv',sodt='$sodt',tuoi='$tuoi',email='$email',password='$password_hash'  where id='$idgv'";
$result_update=$conn->prepare($update);
$result_update->execute();}
header('Location:./admin_qlgiangvien.php');
$conn=null;

 ?>