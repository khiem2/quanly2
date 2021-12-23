<?php 
include('../connect.php');
 include('../Classes/PHPExcel.php');
 $file=$_FILES['addfile']['tmp_name'];
 if (isset($file)&&$file!=null) {
    // tmp_name là tên tạm của file
    $objReader =PHPExcel_IOFactory::createReaderForFile($file);// tạo đối tượng reader
    $objReader->setLoadSheetsOnly('SinhVien');
    $objExcel=$objReader ->load($file);
    $sheetData=$objExcel->getActiveSheet()->toArray('null',true,true,true);
    // Lấy số dòng cao nhất trong Execl
    $highestRow=$objExcel->setActiveSheetIndex()->getHighestRow();
    // echo $highestRow;
    for($row=2; $row<$highestRow;$row++){
       
        $ma_ql=$sheetData[$row]['A'];
        $ten_ql=$sheetData[$row]['B'];
        $email=$sheetData[$row]['C'];
        $password=$sheetData[$row]['D'];
        $password_hash=password_hash($password, PASSWORD_DEFAULT);
        // echo $password_hash;
        $sql="INSERT INTO tb_quanly (maql,name,email,password)
        VALUES('$ma_ql','$ten_ql','$email','$password_hash')";
        $result=$conn->prepare($sql);
		$result->execute();
     }}
header('Location:./admin_quanly.php');
$conn=null;
 ?>