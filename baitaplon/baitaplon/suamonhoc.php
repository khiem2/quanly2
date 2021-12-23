<?php 
include('./connect.php');
$idmonhoc=$_GET['idmonhoc'];
$idnganh=$_GET['idnganh'];
$ma_mon=$_POST['ma_mon'];
$name=$_POST['name_mon'];
$sotinchi=$_POST['sotinchi'];
if($ma_mon!=null&&$name!=null&&$sotinchi!=null){
$update="UPDATE tb_monhoc SET Mamon='$ma_mon' , name='$name',sotinchi='$sotinchi'  where id='$idmonhoc'";
$result_update=$conn->prepare($update);
$result_update->execute();}
header('Location:./quanly/quanly_taonganhhoc.php?idnganh='.$idnganh);
$conn=null;
 ?>