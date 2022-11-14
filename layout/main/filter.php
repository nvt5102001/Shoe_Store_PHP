<?php

	$sql_loaisp = "SELECT * FROM tblloaisp ORDER BY IdLoaiSP DESC";
	$query_loaisp = mysqli_query($mysqli,$sql_loaisp); 
    
    $sql_thuonghieu = "SELECT * FROM tblthuonghieu ORDER BY IdTH DESC";
	$query_thuonghieu = mysqli_query($mysqli,$sql_thuonghieu);

    $sql_sp = "SELECT * FROM tblsanpham ORDER BY IdSP DESC";
	$query_sp = mysqli_query($mysqli,$sql_sp); 
    
?>
<div class="col-md-3">
    <div class="wishlist-left-area">
        <div class="category">
            <h4>Loại sản phẩm</h4>
            <div class="category-list">
                <ul>
                    <li style="font-size: 16px;">
                    <?php 
                    while($row_loaisp = mysqli_fetch_array($query_loaisp)){
                    ?>
                    <a href="index.php?page=loaisp&IdLoaiSP=<?php echo $row_loaisp['IdLoaiSP'] ?>"><i class="fa fa-angle-double-right"></i><?php echo $row_loaisp['TenLoai'] ?></a>
                    <?php
                    } 
                    ?>
                    </li>
                </ul>
            </div>
        
        </div>
        <div class="popular-tag">
            <h4>Thương hiệu</h4>
            <ul>
            <li>
                <?php 
                while($row_thuonghieu = mysqli_fetch_array($query_thuonghieu)){
                ?>
                <a href="index.php?page=thuonghieu&IdTH=<?php echo $row_thuonghieu['IdTH'] ?>"><?php echo $row_thuonghieu['TenTH'] ?></a>
                <?php
                } 
                ?>
            </li>
            </ul>
        </div>
    </div>
</div>