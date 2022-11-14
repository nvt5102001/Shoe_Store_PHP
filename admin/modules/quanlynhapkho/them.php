
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
				<div class="card-body-header">
                    <h4 class="card-title">Thêm sản phẩm</h4>
                      <button class="btn btn-outline-dark btn-icon-text">
							<i class="mdi mdi-arrow-left"></i>  
					  		<a href="index.php?action=quanlysp&query=lietke">Quay lại</a>                      
                      </button>
                  </div>
                  <div class="table-responsive pt-3">
                    <table class="table table-light" >
					<form method="POST" action="modules/quanlynhapkho/xuly.php" enctype="multipart/form-data">
                        <tr>
                            <td>Tài khoản nhà cung cấp</td>
                            <td>
                                <select name="tkncc">
                                    <?php
                                    $sql_ncc = "SELECT * FROM tbltaikhoan WHERE LoaiTK='supplier' ORDER BY Gmail DESC";
                                    $query_ncc = mysqli_query($mysqli,$sql_ncc);
                                    while($row_ncc = mysqli_fetch_array($query_ncc)){
                                    ?>
                                    <option value="<?php echo $row_ncc['Gmail'] ?>"><?php echo $row_ncc['TenTK'] ?></option>
                                    <?php
                                    } 
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Sản phẩm</td>
                            <td>
                                <select name="sp">
                                    <?php
                                    $sql_sp = "SELECT * FROM tblsanpham ORDER BY IdSP DESC";
                                    $query_sp = mysqli_query($mysqli,$sql_sp);
                                    while($row_sp = mysqli_fetch_array($query_sp)){
                                    ?>
                                    <option value="<?php echo $row_sp['IdSP'] ?>"><?php echo $row_sp['TenSP'] ?></option>
                                    <?php
                                    } 
                                    ?>
                                </select>
                            </td>
                        </tr>
	
                        <tr>
                            <td>Số lượng nhập</td>
                            <td><input type="text" name="SoLuongNhap"></td>
                        </tr>
	 
	
                        <tr>
                                <td colspan="2">
                                    <button type="submit" name="thempnk" class="btn btn-outline-dark btn-icon-text">
                                        Thêm
                                        <i class="ti-file btn-icon-append"></i>                          
                                    </button>
                                </td>
                            </tr>
                        </form>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


	  