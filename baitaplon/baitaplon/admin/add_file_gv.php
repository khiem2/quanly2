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
       
        $ma_gv=$sheetData[$row]['A'];
        $ten_gv=$sheetData[$row]['B'];
        $sodt=$sheetData[$row]['C'];
        $tuoi=$sheetData[$row]['D'];
        $email=$sheetData[$row]['E'];
        $password=$sheetData[$row]['F'];
        $password_hash=password_hash($password, PASSWORD_DEFAULT);
        // echo $password_hash;
        $sql="INSERT INTO tb_giaovien (maGV,name,sodt,tuoi,email,password)
        VALUES('$ma_gv','$ten_gv','$sodt','$tuoi','$email','$password_hash')";
        $result=$conn->prepare($sql);
		$result->execute();
     }}
header('Location:./admin_qlgiangvien.php');
$conn=null;

 ?>