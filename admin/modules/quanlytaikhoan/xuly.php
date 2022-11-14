<?php
include('../../config/config.php');

$Gmail = $_POST['Gmail'];
$TenTK = $_POST['TenTK'];
$MatKhau = md5($_POST['MatKhau']);
$LoaiTK = $_POST['LoaiTK'];
$SDT = $_POST['SDT'];
$DiaChi = $_POST['DiaChi'];
if(isset($_POST['themtk'])){
	//them
	$sql_them = "INSERT INTO tbltaikhoan(Gmail,TenTK,MatKhau,LoaiTK,SDT,DiaChi) VALUE('".$Gmail."','".$TenTK."','".$MatKhau."','".$LoaiTK."','".$SDT."','".$DiaChi."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlytaikhoan&query=them');
}

?>