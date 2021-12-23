<?php 
include('../connect.php');
$idgiaovien=$_GET['id'];
$a="DELETE FROM tb_giaovien WHERE id='$idgiaovien'";
$result=$conn->prepare($a);
$result->execute();
$conn=null;
header('Location:./admin_qlgiangvien.php');

 ?>