<?php 
session_start();
include('../connect.php');
$password_old=$_POST['password_old'];
$password_new=$_POST['password_new'];
$password_new_hash=password_hash($password_new, PASSWORD_DEFAULT);
// echo $_SESSION['password'];
if(password_verify($password_old,$_SESSION['password'])){
	$update="UPDATE tb_quantrivien SET password='$password_new_hash'";
	$result_update=$conn->prepare($update);
	$result_update->execute();
	header('Location:./password.php?status=1');
}
else{
	header('Location:./password.php?status=2');
}
$conn=null;

 ?>