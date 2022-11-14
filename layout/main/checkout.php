<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);  
	$sql_lietke_kh = "SELECT * FROM tbltaikhoan WHERE tbltaikhoan.TenTK = '".$_SESSION['dangky']."' ";
	$row = mysqli_query($mysqli,$sql_lietke_kh);
	$row_data = mysqli_fetch_array($row);
?>
<section class="shoping-cart-area">
			<div class="container">
				<div class="row" style="margin-bottom:20px;">
					<div class="col-md-12">
						<h2>Thông tin khách hàng</h2>
						<h4><?php echo "<b>Tên khách hàng:</b> ".$row_data['TenTK'].""; ?></h4>
						<h4><?php echo "<b>Số điện thoại:</b> 0".$row_data['SDT'].""; ?></h4>
						<h4><?php echo "<b>Địa chỉ:</b> ".$row_data['DiaChi'].""; ?></h4>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="wishlist-table-area table-responsive">
							<table>
								<thead>
									<tr>
										<th class="product-image">Image</th>
										<th class="product-name">Product Name</th>
										<th class="product-unit-price">Unit Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Subtotal</th>
										
									</tr>
								</thead>
								<?php
								if(isset($_SESSION['cart'])){
									$i = 0;
									$tongtien = 0;
									foreach($_SESSION['cart'] as $cart_item){
										$thanhtien = $cart_item['SoLuongSP']*$cart_item['GiaBan'];
										$tongtien+=$thanhtien;
										$_SESSION['tongtien'] = $tongtien;
										$i++;
								?>
									<tr>
										<td class="product-image">
											<img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['HinhAnh']; ?>" width="150px;">
										</td>
										<td class="product-name">
											<h4><?php echo $cart_item['TenSP']; ?></h4>
										</td>
										<td class="product-unit-price">
											<p><?php echo number_format($cart_item['GiaBan'],0,',','.').'vnđ'; ?></p>
										</td>
										<td class="product-quantity product-cart-details">	
											<?php echo $cart_item['SoLuongSP']; ?>	
										</td>
										<td class="product-quantity">
											<p><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></p>
										</td>
									</tr>
									<?php
									}
								?>
								<?php
								} 
								?>
								<tr>
									<td colspan="8" style="height:100px;">
										
										<h4>
											Tổng tiền
											<?php 
												echo number_format($tongtien,0,',','.').'vnđ';
											?>
										</h4>
									</td>
								</tr>

								</tbody>
							</table>
						</div>
						<div class="shopingcart-bottom-area">
							<a href="index.php?page=giohang" class="bottoma">QUAY LẠi GIỎ HÀNG</a>
							<div class="bottom-button">
								<a href="layout/main/pay.php" class="bottomb">ĐẶT HÀNG</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="our-brand-area">
			<div class="container">
				<div class="text-center">
					<div class="section-titel">
						<h3>OUR BRANDS</h3>
					</div>
				</div>
				<div class="row blog-area">
					<div id="ourbrand-owl">
						<div class="col-md-12"><img src="img/other-pg/brand-logo-1.jpg" alt="" /></div>
						<div class="col-md-12"><img src="img/other-pg/brand-logo-2.jpg" alt="" /></div>
						<div class="col-md-12"><img src="img/other-pg/brand-logo-3.jpg" alt="" /></div>
						<div class="col-md-12"><img src="img/other-pg/brand-logo-4.jpg" alt="" /></div>
						<div class="col-md-12"><img src="img/other-pg/brand-logo-5.jpg" alt="" /></div>
						<div class="col-md-12"><img src="img/other-pg/brand-logo-3.jpg" alt="" /></div>
						<div class="col-md-12"><img src="img/other-pg/brand-logo-1.jpg" alt="" /></div>
						<div class="col-md-12"><img src="img/other-pg/brand-logo-2.jpg" alt="" /></div>
					</div>
				</div>
			</div>
		</section>