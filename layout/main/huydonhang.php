<?php
    include('../../admin/config/config.php');
	if(isset($_GET['code'])){
		$code_cart = $_GET['code'];
		$sql_update ="UPDATE tbldondat SET TrangThai=2 WHERE IdDD='".$code_cart."'";
		$query = mysqli_query($mysqli,$sql_update);

        header('Location:../../index.php?page=orderHistory');
	}     
?>