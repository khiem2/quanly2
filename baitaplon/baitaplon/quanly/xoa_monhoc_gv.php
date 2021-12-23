<?php include('../connect.php');
$idmonhoc=$_GET['idmonhoc'];
$idgv=$_GET['idgv'];
$tengv=$_GET['tengv'];
$a="DELETE FROM tb_giaovien_monhoc WHERE idgiaovien='$idgv' and idmonhoc='$idmonhoc'";
$result=$conn->prepare($a);
$result->execute();
$conn=null;
header('Location:./chon_mon.php?idgiaovien='.$idgv.'&tengv='.$tengv); 
?>