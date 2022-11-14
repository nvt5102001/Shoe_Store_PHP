
<?php
	session_start();
	include('../../admin/config/config.php');
	require('../../mail/sendmail.php');
	require('../../carbon/autoload.php');
	use Carbon\Carbon;
    use Carbon\CarbonInterval;
    
	$now = Carbon::now('Asia/Ho_Chi_Minh');
    $tongtien =  $_SESSION['tongtien'];
	$id_khachhang = $_SESSION['Gmail'];
    
	$insert_cart = "INSERT INTO tbldondat(ThoiGian,GmailNV,GmailKH,TrangThai,TongTien) VALUE('".$now."','thuynguyen@gmail.com','".$id_khachhang."',1,'".$tongtien."')";
	$cart_query = mysqli_query($mysqli,$insert_cart);
	$IdDD = mysqli_insert_id($mysqli);
	$_SESSION['MaDD'] = $IdDD;
	if($cart_query){
		//them gio hang chi tiet
		foreach($_SESSION['cart'] as $key => $value){
			$id_sanpham = $value['id'];
			$soluong = $value['SoLuongSP'];
			$insert_order_details = "INSERT INTO tblchitietdd(IdSP,IdDD,SoLuong) VALUE('".$id_sanpham."','".$IdDD."','".$soluong."')";
			mysqli_query($mysqli,$insert_order_details);

			// Giảm số lượng sản phẩm theo đơn đặt
			$lietke_soluong_sp = "SELECT * FROM tblsanpham,tblchitietdd WHERE tblsanpham.IdSP = '$id_sanpham' AND tblchitietdd.IdSP = '$id_sanpham' AND tblsanpham.IdSP = tblchitietdd.IdSP ";
			$row = mysqli_query($mysqli,$lietke_soluong_sp);
			$row_data = mysqli_fetch_array($row);

			$soluongNew = $row_data['SoLuongSP'] - $soluong;

			$sql_update_slsp = "UPDATE tblsanpham SET SoLuongSP = '$soluongNew' WHERE IdSP = '$id_sanpham'";
			mysqli_query($mysqli,$sql_update_slsp);
		}

		$sql_lietke_kh = "SELECT * FROM tbldondat,tbltaikhoan WHERE tbldondat.GmailKH=tbltaikhoan.Gmail AND tbldondat.IdDD = '".$IdDD."' ORDER BY tbldondat.IdDD DESC";
		$row = mysqli_query($mysqli,$sql_lietke_kh);
		$count = mysqli_num_rows($row);

		
		$row_data = mysqli_fetch_array($row);
		$DiaChiKH = $row_data['DiaChi'];
		$SDT = $row_data['SDT'];
		$tongtien =  $_SESSION['tongtien'];
		$tenKH = $_SESSION['dangky'];

		$tieude = "Đặt hàng website fowler thành công!";
		$noidung = "<div >
			<hr>
			<h1 >
				Mã đơn đặt: #".$IdDD."
			</h1>
			<div>
			<hr>
			<div style='margin:10px 0;'>
				<p>Tên khách hàng: ".$tenKH."</p>
				<p>Địa chỉ: ".$DiaChiKH."</p>
				<p>Số điện thoại: 0".$SDT."</p>
			</div>
			<hr>

			<div style='display:flex;justify-content:space-between;'>
			<div style='margin-right:30px;width:200px;margin-bottom:10px;'>Tên sản phẩm</div>
			<div  style='margin-right:30px;width:200px;margin-bottom:10px;' >Số lượng</div>
			<div  style='margin-right:30px;width:200px;margin-bottom:10px;'>Giá bán</div>
			</div>
			<hr>
				"
				;

		foreach($_SESSION['cart'] as $key => $val){
			$tensp = $val['TenSP'];
			$soluong = $val['SoLuongSP'];
			$giaban = $val['GiaBan'];
			$noidung.= "<div style='display:flex;justify-content:space-between;'>
					<div style='margin-right:30px;width:200px;margin-bottom:10px;'>".$tensp."</div>
					<div  style='margin-right:30px;width:200px;margin-bottom:10px;' >".$soluong."</div>
					<div  style='margin-right:30px;width:200px;margin-bottom:10px;'>".number_format($giaban,0,',','.')."đ</div>
			</div>
			<hr>
			";
		};

		$noidung.="<div style='margin-top:20px;'> <span>Tổng tiền: ".number_format($tongtien,0,',','.')."đ</span>
					</div>
		";


		$maildathang = $_SESSION['Gmail'];
		$mail = new Mailer();
		$mail->dathangmail($tieude,$noidung,$maildathang);
	}
	unset($_SESSION['cart']);
	header('Location:../../index.php?page=camon');


?>