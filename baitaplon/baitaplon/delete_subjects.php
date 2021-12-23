<?php 
include('./connect.php');
$idsubjects=$_GET['idmonhoc'];
$idnganh=$_GET['idnganh'];
$a="DELETE FROM tb_monhoc WHERE id='$idsubjects'";
$result=$conn->prepare($a);
$result->execute();
$conn=null;
header('Location:./quanly/quanly_taonganhhoc.php?idnganh='.$idnganh);

 ?>