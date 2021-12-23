<?php 
include('../connect.php');
$idnganh=$_GET['id'];
$a="DELETE FROM tb_nganhhoc WHERE id='$idnganh'";
$result=$conn->prepare($a);
$result->execute();
$conn=null;
header('Location:./quanly_taonganhhoc.php');
 ?>