<?php 
include('../connect.php');
$idql=$_GET['idql'];
$name=$_POST['name'];
$ma_ql=$_POST['ma_ql'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_hash=password_hash($password, PASSWORD_DEFAULT);
if($ma_ql!=null&&$name!=null&&$email!=null&&$password!=null){
$update="UPDATE tb_quanly SET name='$name' , maql='$ma_ql',email='$email',password='$password_hash'  where id='$idql'";
$result_update=$conn->prepare($update);
$result_update->execute();}
header('Location:./admin_quanly.php');
$conn=null;

 ?>