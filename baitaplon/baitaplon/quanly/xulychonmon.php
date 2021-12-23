<?php 
include('../connect.php');
$idgiaovien=$_GET['id'];
$tengv=$_GET['tengv'];
if (isset($_POST['monhoc'])) {
	foreach ($_POST['monhoc'] as $value) {
		$a1 = "SELECT count(*) FROM tb_giaovien_monhoc where idmonhoc='$value'and idgiaovien='$idgiaovien'";
		$result1 = $conn->prepare($a1);
		$result1->execute();
		$number_of_rows = $result1->fetchColumn(); 
		//echo $number_of_rows;
		if($number_of_rows>0)
		{
			header('Location:./chon_mon.php?idgiaovien='.$idgiaovien.'&status=1'.'&tengv='.$tengv);
		}
		else{
		$a="INSERT INTO tb_giaovien_monhoc(idmonhoc,idgiaovien) VALUES ('$value','$idgiaovien')";
		$result=$conn->prepare($a);
		$result->execute();
		header('Location:./chon_mon.php?idgiaovien='.$idgiaovien.'&tengv='.$tengv);}
	}
}
else{
header('Location:./quanly_dsgv_ql.php');}
$conn=null;
 ?>