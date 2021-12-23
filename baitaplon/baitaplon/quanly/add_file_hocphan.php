<?php 
include('../connect.php');
include('../Classes/PHPExcel.php');
$monhoc1=$_GET['monhoc'];
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
       
        $tenlop=$sheetData[$row]['A'];
        $time_start=$sheetData[$row]['B'];
        $time_end=$sheetData[$row]['C'];
        $diadiem=$sheetData[$row]['D'];
        $giangvien=$sheetData[$row]['E'];
        $monhoc=$sheetData[$row]['F'];
        $giaidoan=$sheetData[$row]['G'];
        $hocky=$sheetData[$row]['H'];
        $namhoc=$sheetData[$row]['I'];
        $sql="INSERT INTO tb_lophocphan(lophoc,thoigianbatdau,thoigianketthuc,diadiem,giangvien,monhoc,giaidoan,hocky,namhoc) VALUES ('$tenlop','$time_start','$time_end','$diadiem','$giangvien','$monhoc','$giaidoan','$hocky','$namhoc')";
        $result=$conn->prepare($sql);
		$result->execute();
     }}
header('Location:./quanly_taohocphan.php?monhoc='.$monhoc1);
$conn=null;

 ?>