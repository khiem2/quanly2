<?php 
include('../connect.php');
$idhocphan=$_GET['id'];
$monhoc=$_GET['monhoc'];
$a="DELETE FROM tb_lophocphan WHERE id='$idhocphan'";
$result=$conn->prepare($a);
$result->execute();
$conn=null;
header('Location:./quanly_taohocphan.php?monhoc='.$monhoc);


 ?>