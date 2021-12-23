<?php 
include('connect.php');
if(isset($_POST['ma_nganh'])&&isset($_POST['name'])){
$ma_nganh=$_POST['ma_nganh'];
$name=$_POST['name'];
}
if ($ma_nganh!=null&&$name!=null) 
{
	$result = $conn->prepare("INSERT INTO tb_nganhhoc(MaNganh,name) VALUES ('$ma_nganh','$name')");
	$result->execute();
}
header('Location:./quanly/quanly_taonganhhoc.php');

$conn=null;
