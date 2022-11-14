

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<style type="text/css">
  body {
  background: #ABCDEF;
  font-family: Assistant, sans-serif;
  display: flex;
  min-height: 90vh;
}
.login {
  color: white;
  background: #136a8a;
  background: 
    -webkit-linear-gradient(to right, #267871, #136a8a);
  background: 
    linear-gradient(to right, #267871, #136a8a);
  margin: auto;
  box-shadow: 
    0px 2px 10px rgba(0,0,0,0.2), 
    0px 10px 20px rgba(0,0,0,0.3), 
    0px 30px 60px 1px rgba(0,0,0,0.5);
  border-radius: 8px;
  padding: 50px;
}
.login .head {
  display: flex;
  align-items: center;
  justify-content: center;
}
.login .head .company {
  font-size: 2.2em;
}
.login .msg {
  text-align: center;
}
.login .form input[type=email].text {
  border: none;
  background: none;
  box-shadow: 0px 2px 0px 0px white;
  width: 100%;
  color: white;
  font-size: 1em;
  outline: none;
}
.login .form .text::placeholder {
  color: #D3D3D3;
}
.login .form input[type=password].password {
  border: none;
  background: none;
  box-shadow: 0px 2px 0px 0px white;
  width: 100%;
  color: white;
  font-size: 1em;
  outline: none;
  margin-bottom: 20px;
  margin-top: 20px;
}
.login .form .password::placeholder {
  color: #D3D3D3;
}
.login .form .btn-login {
  background: none;
  text-decoration: none;
  color: white;
  box-shadow: 0px 0px 0px 2px white;
  border-radius: 3px;
  padding: 5px 2em;
  transition: 0.5s;
  border: none;
  cursor: pointer;
}
.btn 
{
  display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
	
}
.login .form .btn-login:hover {
  background: white;
  color: dimgray;
  transition: 0.5s;
}
.login .forgot {
  text-decoration: none;
  color: white;
  float: right;
}
footer {
  position: absolute;
  color: #136a8a;
  bottom: 10px;
  padding-left: 20px;
}
footer p {
  display: inline;
}
footer a {
  color: green;
  text-decoration: none;
}
footer a:hover {
  text-decoration: underline;
}
footer .heart {
  color: #B22222;
  font-size: 1.5em
}
</style>

<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$Gmail = $_POST['Gmail'];
		$MatKhau = md5($_POST['MatKhau']);
		$sql = "SELECT * FROM tbltaikhoan WHERE Gmail='".$Gmail."' AND MatKhau='".$MatKhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
      $row_data = mysqli_fetch_array($row);
      if($row_data['LoaiTK'] == 'admin')
      {
          $_SESSION['TenTK'] = $row_data['TenTK'];
          $_SESSION['dangnhap'] = $Gmail;
			    header("Location:index.php");
      }
      else{
          echo "<script>alert('Mật khẩu hoặc Email sai ,vui lòng nhập lại.');</script>";
          header("Location:login.php");
      }
		  
		}else{
      echo "<script>alert('Mật khẩu hoặc Email sai ,vui lòng nhập lại.');</script>";
			header("Location:login.php");
		}
	} 
?>


<!-- partial:index.partial.html -->
<section class='login' id='login'>
  <p class='msg'>LOGIN ADMIN</p>
  <div class='form'>
    <form action="" autocomplete="off" method="POST">
      <input type="email" name="Gmail" placeholder='Gmail' class='text' id='username' required><br>
      <input type="password" name="MatKhau" placeholder='••••••••••••••' class='password'><br>
      <div class="btn">
        <button  name="dangnhap" type="submit" class='btn-login' id='do-login'>Login</button>
      </div>
    </form>
  </div>
</section>

<!-- all js here -->
		<!-- jquery latest version -->
    <script src="../js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="../js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="../js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="../js/jquery.meanmenu.js"></script>
        <!-- Nivo slider js  --> 		
		<script src="../lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="../lib/home.js" type="text/javascript"></script>
		<!-- count down js  -->
		<script src="../js/jquery.countdown.js"></script>
		<!-- jquery-ui js -->
        <script src="../js/jquery-ui.min.js"></script>
		<!-- wow js -->
        <script src="../js/wow.min.js"></script>
		<!-- plugins js -->
        <script src="../js/plugins.js"></script>
		<!-- main js -->
        <script src="../js/main.js"></script>

</body>
</html>
