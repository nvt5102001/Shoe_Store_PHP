<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_sp = "SELECT * FROM tblsanpham,tblloaisp WHERE tblsanpham.IdLoaiSP=tblloaisp.IdLoaiSP AND tblsanpham.TenSP LIKE '%".$tukhoa."%'";
	$query_sp = mysqli_query($mysqli,$sql_sp);
?>
<div class="col-md-9">
    <div class="shop-right-area">
        <div class="shop-banner">
            <img src="img/other-pg/shop-1.jpg" alt="" />
        </div>
        <div class="shop-tab-area">
            <!--NAV PILL-->
            <div class="shop-tab-pill">
                <ul>
                    <li class="active" id="p-mar">
                        <a data-toggle="pill" href="#grid">
                            <i class="fa fa-th" aria-hidden="true"></i>
                            <span>Grid</span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="pill" href="#list">
                            <i class="fa fa-th-list" aria-hidden="true"></i>
                            <span>List</span>
                        </a>
                    </li>
                    <li class="product-size-deatils">
                        <div class="show-label">
                            <label>Show : </label>
                            <select>
                                <option value="10" selected="selected">10</option>
                                <option value="09">09</option>
                                <option value="08">08</option>
                                <option value="07">07</option>
                                <option value="06">06</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="sort-position">
                            <label><i class="fa fa-sort-amount-asc"></i>Sort by : </label>
                            <select>
                                <option value="position" selected="selected">Position</option>
                                <option value="Name">Name</option>
                                <option value="Price">Price</option>
                            </select>
                        </div>
                    </li>
                </ul>
            </div>
            <!--NAV PILL-->
            <div class="tab-content">
                <div class="row tab-pane active" id="grid">
                <?php
                while($row = mysqli_fetch_array($query_sp)){ 
                ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="single-product">
                            <div class="product-image">
                                <a class="product-img" href="index.php?page=sanpham&IdSP=<?php echo $row['IdSP'] ?>">
                                    <img class="primary-img" src="admin/modules/quanlysp/uploads/<?php echo $row['HinhAnh'] ?>" alt="" style="height:280px;" />
                                </a>
                            </div>
                            <span class="onsale">
                                <span class="sale-text">Sale</span>
                            </span>
                            <div class="product-action">
                                <h4><a href="#"><?php echo $row['TenSP'] ?></a></h4>
                                <ul class="pro-rating">
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <div style="display:flex;justify-content:space-between;">
                                <span class="price"><?php echo number_format($row['GiaBan'],0,',','.').'vnđ' ?></span>
                                <span ><?php 
                                        if($row['SoLuongSP'] <= 0) 
                                        {
                                            echo "Hết hàng";
                                        }
                                        else 
                                        {
                                            echo "Còn hàng";
                                        }
                                ?></span></div>
                            </div>
                            <div class="pro-action">
                                <ul>
                                    <li>
                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Shop Cart">
                                        <i class="fa fa-retweet" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Add Wishlist">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Compare">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                } 
                ?>	
                </div>
                <div id="list" class="tab-pane">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="shop-list-single shop-single-product-area">
                                <div class="shop-list-left">
                                    <a href="#"><img src="img/home-1/fp-1.jpg" alt="" /></a>
                                    <span class="shop-cart-icon">
                                        <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                    </span>
                                </div>
                                <div class="shop-list-right">
                                    <div class="product-content">
                                        <h2><a href="#">Boy’s Cloths</a></h2>
                                        <p><b>$ 80.00</b></p>
                                        <div class="rating">
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.Morbi ornare lectus quis justo gravida semper.</p>
                                        <p>Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="shop-list-single shop-single-product-area">
                                <div class="shop-list-left">
                                    <a href="#"><img src="img/home-1/fp-2.jpg" alt="" /></a>
                                    <span class="shop-cart-icon">
                                        <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                    </span>
                                </div>
                                <div class="shop-list-right">
                                    <div class="product-content">
                                        <h2><a href="#">Boy’s Cloths</a></h2>
                                        <p><b>$ 80.00</b></p>
                                        <div class="rating">
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.Morbi ornare lectus quis justo gravida semper.</p>
                                        <p>Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="shop-list-single shop-single-product-area">
                                <div class="shop-list-left">
                                    <a href="#"><img src="img/home-1/fp-3.jpg" alt="" /></a>
                                    <span class="shop-cart-icon">
                                        <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                    </span>
                                </div>
                                <div class="shop-list-right">
                                    <div class="product-content">
                                        <h2><a href="#">Boy’s Cloths</a></h2>
                                        <p><b>$ 80.00</b></p>
                                        <div class="rating">
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.Morbi ornare lectus quis justo gravida semper.</p>
                                        <p>Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="shop-list-single shop-single-product-area">
                                <div class="shop-list-left">
                                    <a href="#"><img src="img/home-1/fp-4.jpg" alt="" /></a>
                                    <span class="shop-cart-icon">
                                        <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                    </span>
                                </div>
                                <div class="shop-list-right">
                                    <div class="product-content">
                                        <h2><a href="#">Boy’s Cloths</a></h2>
                                        <p><b>$ 80.00</b></p>
                                        <div class="rating">
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.Morbi ornare lectus quis justo gravida semper.</p>
                                        <p>Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--NAV PILL-->
        </div>
    </div>
</div>