<?php 
include('../connect.php');
$monhoc1=$_GET['monhoc'];
$tenlop=$_POST['name_class'];
$time_start=$_POST['time_start'];
$time_end=$_POST['time_end'];
$diadiem=$_POST['where'];
$giangvien=$_POST['giangvien'];
$monhoc=$_POST['monhoc'];
$giaidoan=$_POST['giaidoan'];
$hocky=$_POST['hocky'];
$namhoc=$_POST['namhoc'];

if($tenlop!=null&&$time_start!=null&&$time_end!=null&&$diadiem!=null&&$giangvien!=null&&$monhoc!=null&&$giaidoan!=null&&$hocky!=null&&$namhoc!=null){
	$a="INSERT INTO tb_lophocphan(lophoc,thoigianbatdau,thoigianketthuc,diadiem,giangvien,monhoc,giaidoan,hocky,namhoc) VALUES ('$tenlop','$time_start','$time_end','$diadiem','$giangvien','$monhoc','$giaidoan','$hocky','$namhoc')";
	$result = $conn->prepare($a);
	$result->execute();
	header('Location:./quanly_taohocphan.php?status=2'.'&monhoc='.$monhoc1);
}

else{header('Location:./quanly_taohocphan.php?status=1'.'&monhoc='.$monhoc1);}
$conn=null;

 ?>