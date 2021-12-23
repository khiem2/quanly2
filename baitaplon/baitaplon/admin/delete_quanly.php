<?php 
include('../connect.php');
$idquanly=$_GET['idquanly'];
$a="DELETE FROM tb_quanly WHERE id='$idquanly'";
$result=$conn->prepare($a);
$result->execute();
$conn=null;
header('Location:./admin_quanly.php');

 ?>