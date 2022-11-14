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
						<?php
							if(isset($_POST['dangnhap'])){
								$Gmail = $_POST['Gmail'];
								$MatKhau = md5($_POST['MatKhau']);
								$sql = "SELECT * FROM tbltaikhoan WHERE Gmail='".$Gmail."' AND MatKhau='".$MatKhau."' LIMIT 1";
								$row = mysqli_query($mysqli,$sql);
								$count = mysqli_num_rows($row);

								if($count>0){
									$row_data = mysqli_fetch_array($row);
									$_SESSION['dangky'] = $row_data['TenTK'];
									$_SESSION['Gmail'] = $row_data['Gmail'];
									echo "<script> window.location.href='index.php?page=giohang';</script>";
								}else{
									echo "<script>alert('Mật khẩu hoặc Email sai ,vui lòng nhập lại.');</script>";
								}
							} 
							?>
							<h1 class="heading-title">Nếu chưa có tài khoản</h1>
							<div class="submit">					
								<button name="submitcreate" id="submitcreate" class="">
									<span>
									<a href="index.php?page=signup" style="color: #fff;">
										<i class="fa fa-user left"></i>
										Đăng ký tại đây
									</a>
									</span>
								</button>
							</div>		
						
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
                            <form action="" autocomplete="off" method="POST">
								<h1 class="heading-title">Already registered?</h1>
								<p class="form-row">
									<label>Email address</label>
									<input type="email" name="Gmail">
								</p>
								<p class="form-row">
									<label>Password</label>
									<input type="password" name="MatKhau">
								</p>
								<p class="lost-password form-group"><a rel="nofollow" href="#">Forgot your password?</a></p>
								<p class="submit">				
									<button class="" name="dangnhap" id="submitlogin" type="submit">
										<span><i class="fa fa-lock"></i>Sign In</span>
									</button>
								</p>
							</form>
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
	