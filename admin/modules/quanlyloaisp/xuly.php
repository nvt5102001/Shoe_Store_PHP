<?php
include('../../config/config.php');

$TenLoai = $_POST['TenLoai'];
if(isset($_POST['themloai'])){
	//them
	$sql_them = "INSERT INTO tblloaisp(TenLoai) VALUE('".$TenLoai."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlyloaisp&query=them');
}elseif(isset($_POST['sualoai'])){
	//sua
	$sql_update = "UPDATE tblloaisp SET TenLoai='".$TenLoai."' WHERE IdLoaiSP='$_GET[IdLoaiSP]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlyloaisp&query=them');
}else{

	$id=$_GET['IdLoaiSP'];
	$sql_xoa = "DELETE FROM tblloaisp WHERE IdLoaiSP='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlyloaisp&query=them');
}

?>