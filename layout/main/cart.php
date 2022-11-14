<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);  
?>


<section class="bannerhead-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-heading">
							<h1>SHOPPING CART</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- BANNER AREA END -->
		<!-- SHOPING CART AREA START -->
		<section class="shoping-cart-area">
			<div class="container">
				<div class="row">

				<h4 style="margin:0 0 20px 20px;">
				<?php
					if(isset($_SESSION['dangky'])){ echo 'Xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';} 
				?>
				</h4>

				


					<div class="col-md-12">
						<div class="wishlist-table-area table-responsive">
							<table>
								<thead>
									<tr>
										<th class="product-remove">Remove</th>
										<th class="product-image">Image</th>
										<th class="product-name">Product Name</th>
										<th class="product-unit-price">Unit Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Subtotal</th>
									</tr>
								</thead>
								<tbody>
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
										<td class="product-remove">
											<a href="layout/main/addCart.php?xoa=<?php echo $cart_item['id'] ?>"><i class="fa fa-trash-o"></i></a>
										</td>
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
											<a href="layout/main/addCart.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true" style="color:#333;margin:0 20px;"></i></a>
											<?php echo $cart_item['SoLuongSP']; ?>
											<a href="layout/main/addCart.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true" style="color:#333;margin:0 20px;"></i></a>

										</td>
										<td class="product-quantity">
											<p><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></p>
										</td>
									</tr>
									<?php
									}
								?>

								<?php	
								}else{
									$block_DH= 1;
								?>
								<tr>
									<td colspan="8" style="height:50px;">Hiện tại giỏ hàng trống</td>
								
								</tr>
								<?php
								} 
								?>

								</tbody>
							</table>
						</div>

						

						<?php
				if(isset($_SESSION['Gmail'])){
				?>

				<!-- <div class="shopingcart-bottom-area">
					<a href="#" class="bottoma">CONTINUE SHOPPING</a>
					<div class="bottom-button">
						
						<a href="#" class="bottomb">UPDATE SHOPPING CART</a>
					</div>
				</div> -->

				<div class="shopingcart-bottom-area" style="margin:50px 0;">
					<a href="index.php?page=orderHistory" >LỊCH SỬ MUA HÀNG</a>
					<a href="layout/main/addCart.php?xoatatca=1" class="bottomb">XOÁ TẤT CẢ</a>
					
					<div class="bottom-button">
					<?php
						if($block_DH == 1)
						{
							echo "";
						}
						else 
						{
							echo "<a href='index.php?page=checkout' class='bottomb'>TIẾP TỤC ĐẶT HÀNG</a>";
						}
					?>
					</div>
					
				</div>
				<?php
				} 
				else 
				{
					echo '<h4>Bạn cần đăng nhập để có thể đặt hàng!</h4>';
				}
				?>

					</div>
				</div>
			</div>
		</section>
		<!-- SHOPING CART AREA END -->
		<!-- DISCOUNT SUBTOTAL AREA STRAT -->
		<section class="discount-area">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="subtotal-main-area">
							<div class="subtotal-area">
								<h2>Tổng tiền<span><?php 
										echo number_format($tongtien,0,',','.').'vnđ';
								?></span></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- DISCOUNT SUBTOTAL AREA END -->
		<!-- OUR BRAND AREA START -->
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