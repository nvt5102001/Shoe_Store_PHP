<?php
	$sql_sua_sp = "SELECT * FROM tblsanpham WHERE IdSP ='$_GET[IdSP]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
				<div class="card-body-header">
                    <h4 class="card-title">Cập nhật sản phẩm</h4>
                      <button class="btn btn-outline-dark btn-icon-text">
							<i class="mdi mdi-arrow-left"></i>  
					  		<a href="index.php?action=quanlysp&query=lietke">Quay lại</a>                      
                      </button>
                  </div>
                  <div class="table-responsive pt-3">
                    <table class="table table-light">
					
					<?php
							while($row = mysqli_fetch_array($query_sua_sp)) {
							?>
							<form method="POST" action="modules/quanlysp/xuly.php?IdSP=<?php echo $row['IdSP'] ?>" enctype="multipart/form-data">
						<tr>
	  	<td>Tên sản phẩm</td>
	  	<td><input type="text" value="<?php echo $row['TenSP'] ?>" name="TenSP"></td>
	  </tr>
	  <tr>
	    <td>Loại sản phẩm</td>
	    <td>
	    	<select name="loaisp">
	    		<?php
	    		$sql_loaisp = "SELECT * FROM tblloaisp ORDER BY IdLoaiSP DESC";
	    		$query_loaisp = mysqli_query($mysqli,$sql_loaisp);
	    		while($row_loaisp = mysqli_fetch_array($query_loaisp)){
	    			if($row_loaisp['IdLoaiSP']==$row['IdLoaiSP']){
	    		?>
	    		<option selected value="<?php echo $row_loaisp['IdLoaiSP'] ?>"><?php echo $row_loaisp['TenLoai'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_loaisp['IdLoaiSP'] ?>"><?php echo $row_loaisp['TenLoai'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>

	  <tr>
	    <td>Thương hiệu sản phẩm</td>
	    <td>
	    	<select name="thuonghieu">
	    		<?php
	    		$sql_thuonghieu = "SELECT * FROM tblthuonghieu ORDER BY IdTH DESC";
	    		$query_thuonghieu = mysqli_query($mysqli,$sql_thuonghieu);
	    		while($row_thuonghieu = mysqli_fetch_array($query_thuonghieu)){
	    			if($row_thuonghieu['IdTH']==$row['IdTH']){
	    		?>
	    		<option selected value="<?php echo $row_thuonghieu['IdTH'] ?>"><?php echo $row_thuonghieu['TenTH'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_thuonghieu['IdTH'] ?>"><?php echo $row_thuonghieu['TenTH'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	  <tr>
	  	<td>Màu</td>
	  	<td><input type="text" value="<?php echo $row['Mau'] ?>" name="Mau"></td>
	  </tr>
	  <tr>
	  	<td>Size</td>
	  	<td><input type="text" value="<?php echo $row['Size'] ?>" name="Size"></td>
	  </tr>
	  <tr>
	  	<td>Số lượng</td>
	  	<td><input type="text" value="<?php echo $row['SoLuongSP'] ?>" name="SoLuongSP"></td>
	  </tr>
	  <tr>
	  	<td>Giá mua</td>
	  	<td><input type="text" value="<?php echo $row['GiaMua'] ?>" name="GiaMua"></td>
	  </tr>
	  <tr>
	  	<td>Giá bán</td>
	  	<td><input type="text" value="<?php echo $row['GiaBan'] ?>" name="GiaBan"></td>
	  </tr>
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td>
		    <input type="file" name="HinhAnh">
	  		<img src="modules/quanlysp/uploads/<?php echo $row['HinhAnh'] ?>" width="150px">
	  	</td>

	  </tr>
	  <tr>
	  	<td>Mô tả</td>
	  	<td><textarea rows="10"  name="Mota" style="resize: none"><?php echo $row['Mota'] ?></textarea></td>
	  </tr>
	  
	   <tr>
	    <td colspan="2"><button type="submit" name="suasanpham" class="btn btn-outline-dark btn-icon-text">
									Sửa
									<i class="ti-file btn-icon-append"></i>                          
								</button></td>
	  </tr>
						

					</form>
					<?php
						} 
						?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


