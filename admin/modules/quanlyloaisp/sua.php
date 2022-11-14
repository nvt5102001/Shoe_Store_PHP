<?php
	$sql_sua_loaisp = "SELECT * FROM tblloaisp WHERE IdLoaiSP='$_GET[IdLoaiSP]' LIMIT 1";
	$query_sua_loaisp = mysqli_query($mysqli,$sql_sua_loaisp);
?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
				<div class="card-body-header">
                    <h4 class="card-title">Cập nhật loại sản phẩm</h4>
                      <button class="btn btn-outline-dark btn-icon-text">
							<i class="mdi mdi-arrow-left"></i>  
					  		<a href="index.php?action=quanlyloaisp&query=them">Quay lại</a>                      
                      </button>
                  </div>
                  <div class="table-responsive pt-3">
                    <table class="table table-light">
					<form method="POST" action="modules/quanlyloaisp/xuly.php?IdLoaiSP=<?php echo $_GET['IdLoaiSP'] ?>">
						<?php
						while($dong = mysqli_fetch_array($query_sua_loaisp)) {
						?>
						<tr>
							<td class='table-title'>Tên loại sản phẩm</td>
							<td><input type="text" value="<?php echo $dong['TenLoai'] ?>" name="TenLoai"></td>
						</tr>
						<tr>
							<td colspan="2">
								<button type="submit" name="sualoai" class="btn btn-outline-dark btn-icon-text">
									Sửa
									<i class="ti-file btn-icon-append"></i>                          
								</button>
							</td>
						</tr>
						<?php
						} 
						?>

					</form>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


