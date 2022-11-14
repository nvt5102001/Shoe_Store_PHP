<?php
include('../../config/config.php');

$TenTH = $_POST['TenTH'];
if(isset($_POST['themthuonghieu'])){
	//them
	$sql_them = "INSERT INTO tblthuonghieu(TenTH) VALUE('".$TenTH."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlythuonghieu&query=them');
}elseif(isset($_POST['suathuonghieu'])){
	//sua
	$sql_update = "UPDATE tblthuonghieu SET TenTH ='".$TenTH."' WHERE IdTH='$_GET[IdTH]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlythuonghieu&query=them');
}else{

	$id=$_GET['IdTH'];
	$sql_xoa = "DELETE FROM tblthuonghieu WHERE IdTH='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlythuonghieu&query=them');
}

?>