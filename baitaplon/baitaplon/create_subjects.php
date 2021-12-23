<?php 
include('connect.php');
if(isset($_POST['ma_mon'])&&isset($_POST['name_mon'])&&isset($_POST['sotinchi'])){
$ma_mon=$_POST['ma_mon'];
$name=$_POST['name_mon'];
$sotinchi=$_POST['sotinchi'];
}
$idnganh=$_GET['idnganh'];
echo $ma_mon;
if($ma_mon!=null&&$name!=null&&$sotinchi!=null){
$result = $conn->prepare("INSERT INTO tb_monhoc(Mamon,name,sotinchi,idNganhhoc) VALUES ('$ma_mon','$name','$sotinchi','$idnganh')");
$result->execute();
}
header('Location:./quanly/quanly_taonganhhoc.php?idnganh='.$idnganh);
$conn=null;
 ?>