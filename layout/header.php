<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['Gmail']);
        unset($_SESSION['dangky']);
        unset($_SESSION['dangnhap']);
	} 
?>

<section class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-msg pull-left">
                    <h6>FREE SHIPPING ON OVER $100</h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-login pull-right">
                    <div class="languages-block-top curency pull-left">
                        <div class="current">
                            <span>LANGUAGE</span>
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <ul class="first-languages toggle-content">
                            <li><a href="#">ENGLISH</a></li>
                            <li><a href="#">BANGLA</a></li>
                            <li><a href="#">ARABIC</a></li>
                        </ul>
                    </div>
                    <div class="curency pull-left">
                        <div class="current">
                            <span><a href="index.php?dangxuat=1">LOG OUT</a></span>
                        </div>
                    </div>
                    <div class="curency pull-left">
                        <div class="current">
                            <span><a href="index.php?page=login">LOG IN</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HEADER TOP AREA END -->
<!-- MENU AREA START -->
<div class="menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <div class="logo-area">
                    <a href="index.html"><img src="img/home-1/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="col-md-7 col-sm-7">
                <div class="main-menu">
                    <ul class="list-inline">
                        <li ><a href="index.php">HOME</a></li>
                        <li><a href="index.php?page=shop">SHOP</a></li>
                        <li><a href="index.php?page=about">ABOUT</a></li>
                        <li><a href="index.php?page=contact">CONTACT</a></li>
                        <li><a href="index.php?page=giohang">CART</a></li>
                    </ul>
                    
                </div>
            </div>
            <div class="search-input col-md-1 col-sm-1 " style="padding:0px;">
                    <form action="index.php?page=timkiem" method="POST" style="padding:0px;display:flex;align-items:center;margin-top:22px;">
                    <input type="text" placeholder="Enter your keyword..." name="tukhoa">
                    <button class="search-button" name="timkiem" type="submit" style="position:relative;border:1px solid #fff;">SEARCH</button>
                    </form>
            </div>
        </div>
    </div>
</div>