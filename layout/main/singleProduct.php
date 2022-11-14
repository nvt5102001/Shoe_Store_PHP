<?php
	$sql_chitiet = "SELECT * FROM tblsanpham,tblloaisp WHERE tblsanpham.IdLoaiSP=tblloaisp.IdLoaiSP AND tblsanpham.IdSP='$_GET[IdSP]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>

<div class="product-simple-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="single-product-image">
							<div class="single-product-tab">
							  <div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="home">
									<img width="100%" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['HinhAnh'] ?>">
								</div>
							  </div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<form method="POST" action="layout/main/addCart.php?IdSP=<?php echo $row_chitiet['IdSP'] ?>">
						<div class="single-product-info">
							<h1 class="product_title"><?php echo $row_chitiet['TenSP'] ?></h1>
							<div class="price-box">
								<span class="new-price"><?php echo number_format($row_chitiet['GiaBan'],0,',','.').'vnđ' ?></span>
							</div>
							<div class="pro-rating">
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
							</div>
							<div class="short-description">
								<p><?php echo $row_chitiet['Mota'] ?></p>						
							</div>
							<div class="stock-status">
								<label>Loại sản phẩm</label>: <strong><?php echo $row_chitiet['TenLoai'] ?></strong>
							</div>
							<form action="#">
								<div class="quantity">
									
									<button type="submit" name="addCart" >Add to cart</button>
								</div>
							</form>
							<div class="share_buttons">
								<a href="#"><img src="img/share-img.png" alt="" /></a>
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- PRODUCT TAB AREA START -->
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
<?php
} 
?>