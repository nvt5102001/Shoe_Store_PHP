
<?php
	if(isset($_POST['dangky'])) {
		$Gmail = $_POST['Gmail'];
		$TenTK = $_POST['TenTK'];
		$MatKhau = md5($_POST['MatKhau']);
		$SDT = $_POST['SDT'];
		$DiaChi = $_POST['DiaChi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbltaikhoan(Gmail,TenTK,MatKhau,LoaiTK,SDT,DiaChi) VALUE('".$Gmail."','".$TenTK."','".$MatKhau."','user','".$SDT."','".$DiaChi."')");
		if($sql_dangky){
			echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $TenTK;
			$_SESSION['Gmail'] = $Gmail;
			echo "<script> window.location.href='index.php?page=giohang';</script>";
		}
	}
?>

		<!-- MENU AREA END -->
		<!-- BANNER AREA STRAT -->
		<section class="bannerhead-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-heading">
							<h1>AUTHENTICATION</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- BANNER AREA END -->
		<!-- ACOOUNT FROM AREA START -->
		<section class="login-area">
			<div class="container">
				<div class="row">
					<div class="account-details">
						<div class="col-lg-6 col-md-6 col-sm-6 xs-res-mrbtm">
							<form class="create-account-form" method="POST" >
								<h1 class="heading-title">Đăng kí tài khoản</h1>
								<p class="form-row">
									<label>Email</label>
									<input type="email" name="Gmail" >
								</p>	
								<p class="form-row">
									<label>Tên tài khoản</label>
									<input type="text" name="TenTK">
								</p>
								<p class="form-row">
									<label>Mật khẩu</label>
									<input type="password" name="MatKhau">
								</p>
								<p class="form-row">
									<label>Số điện thoại</label>
									<input type="text" name="SDT">
								</p>
								<p class="form-row">
									<label>Địa chỉ</label>
									<input type="text" name="DiaChi">
								</p>
								<div class="submit">					
									<button name="dangky" id="submitcreate" type="submit" class="">
										<span>
											<i class="fa fa-user left"></i>
											Đăng ký
										</span>
									</button>
								</div>		
							</form>
						</div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        <h1 class="heading-title">Nếu bạn đã có tài khoản</h1>
							<div class="submit">					
								<button name="submitcreate" id="submitcreate" class="">
									<span>
									<a href="index.php?page=login" style="color: #fff;">
										<i class="fa fa-user left"></i>
										Đăng nhập tại đây
									</a>
									</span>
								</button>
							</div>		
						
					</div>
				</div>
			</div>
		</section>
		<!-- ACOOUNT FROM AREA END -->
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
		<!-- OUR BRAND AREA END -->
	