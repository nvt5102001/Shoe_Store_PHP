<?php
	require('../../../tfpdf/tfpdf.php');
	require('../../config/config.php');

	$pdf = new tFPDF();
	$pdf->AddPage("0");
	$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
	$pdf->SetFont('DejaVu','',16);
	
	$pdf->SetFillColor(193,229,252);

	$code = $_GET['code'];
	$sql_lietke_dh = "SELECT * FROM tblchitietdd,tblsanpham WHERE tblchitietdd.IdSP=tblsanpham.IdSP AND tblchitietdd.IdDD='".$code."' ORDER BY tblchitietdd.IdCTDD DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);

	$sql_lietke_kh = "SELECT * FROM tbldondat,tbltaikhoan WHERE tbldondat.GmailKH=tbltaikhoan.Gmail AND tbldondat.IdDD = '".$code."' ORDER BY tbldondat.IdDD DESC";
	$query_lietke_kh = mysqli_query($mysqli,$sql_lietke_kh);
	$row_data = mysqli_fetch_array($query_lietke_kh);



	$pdf->Image('../../images/logo.png',10,5);
	$pdf->Cell(0,0,'HOÁ ĐƠN KHÁCH HÀNG',0,0,'C');
	$pdf->Ln(20);

	$pdf->Write(10,"Mã hoá đơn: ".$row_data['IdDD']."");
	$pdf->Ln(10);
	$pdf->Write(10,"Ngày đặt: ".$row_data['ThoiGian']."");
	$pdf->Ln(20);

	$pdf->Write(10,"Tên khách hàng: ".$row_data['TenTK']."");
	$pdf->Ln(10);

	$pdf->Write(10,"Gmail: ".$row_data['Gmail']."");
	$pdf->Ln(10);

	$pdf->Write(10,"Số điện thoại: 0".$row_data['SDT']."");
	$pdf->Ln(10);

	$pdf->Write(10,"Địa chỉ: ".$row_data['DiaChi']."");
	$pdf->Ln(20);

	$width_cell=array(20,35,80,50,50,40);

	$pdf->Cell($width_cell[0],10,'ID',1,0,'C',true);
	$pdf->Cell($width_cell[1],10,'Mã hàng',1,0,'C',true);
	$pdf->Cell($width_cell[2],10,'Tên sản phẩm',1,0,'C',true);
	$pdf->Cell($width_cell[3],10,'Số lượng',1,0,'C',true); 
	$pdf->Cell($width_cell[4],10,'Giá',1,0,'C',true);
	$pdf->Cell($width_cell[5],10,'Tổng tiền',1,1,'C',true); 
	$pdf->SetFillColor(235,236,236); 
	$fill=false;
	$i = 0;
	$tongtien = 0;
	while($row = mysqli_fetch_array($query_lietke_dh)){
		$i++;
		$tongtien += ($row['SoLuong']*$row['GiaBan']);
	$pdf->Cell($width_cell[0],10,$i,1,0,'C',$fill);
	$pdf->Cell($width_cell[1],10,$row['IdDD'],1,0,'C',$fill);
	$pdf->Cell($width_cell[2],10,$row['TenSP'],1,0,'C',$fill);
	$pdf->Cell($width_cell[3],10,$row['SoLuong'],1,0,'C',$fill);
	$pdf->Cell($width_cell[4],10,number_format($row['GiaBan']),1,0,'C',$fill);
	$pdf->Cell($width_cell[5],10,number_format($row['SoLuong']*$row['GiaBan']),1,1,'C',$fill);
	$fill = !$fill;
		
	}
	$pdf->Ln(10);
	$pdf->Write(10,"Tổng tiền: ".$tongtien." VNĐ");
	$pdf->Ln(10);
	$pdf->Write(10,'Cảm ơn bạn đã đặt hàng tại website của chúng tôi.');
	$pdf->Ln(10);

	$pdf->Output(); 
?>