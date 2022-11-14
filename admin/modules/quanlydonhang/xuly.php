<?php
	
    require('../../../carbon/autoload.php');
	include('../../config/config.php');
	use Carbon\Carbon;
    use Carbon\CarbonInterval;
    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
	if(isset($_GET['code'])){
		$code_cart = $_GET['code'];
		$sql_update ="UPDATE tbldondat SET TrangThai=0 WHERE IdDD='".$code_cart."'";
		$query = mysqli_query($mysqli,$sql_update);

		//thong ke doanh thu
        $sql_lietke_dh = "SELECT * FROM tblchitietdd,tblsanpham WHERE tblchitietdd.IdSP=tblsanpham.IdSP AND tblchitietdd.IdDD='$code_cart' ORDER BY tblchitietdd.IdCTDD DESC";
        $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);

        $sql_thongke = "SELECT * FROM tblthongke WHERE ngaydat='$now'"; 
        $query_thongke = mysqli_query($mysqli,$sql_thongke);

        $soluongmua = 0;
        $doanhthu = 0;
        while($row = mysqli_fetch_array($query_lietke_dh)){
              $soluongmua = $soluongmua +  $row['SoLuong'];
              $thanhtien = $row['GiaBan']*$row['SoLuong'];
              $doanhthu += $thanhtien;
        }

        if(mysqli_num_rows($query_thongke)==0){
                $soluongban = $soluongmua;
                $doanhthu = $doanhthu;
                $donhang = 1;
                $sql_update_thongke = mysqli_query($mysqli,"INSERT INTO tblthongke (ngaydat,soluongban,doanhthu,donhang) VALUE('$now','$soluongban','$doanhthu','$donhang')" );
        }else
        {
            while($row_tk = mysqli_fetch_array($query_thongke)){
                $soluongban = $row_tk['soluongban'] + $soluongmua;
                $doanhthu = $row_tk['doanhthu'] + $doanhthu;
                $donhang = $row_tk['donhang']+1;
                $sql_update_thongke = mysqli_query($mysqli,"UPDATE tblthongke SET soluongban='$soluongban',doanhthu='$doanhthu',donhang='$donhang' WHERE ngaydat='$now'" );
            }
        }
		header('Location:../../index.php?action=quanlydonhang&query=lietke');
	} 
?>