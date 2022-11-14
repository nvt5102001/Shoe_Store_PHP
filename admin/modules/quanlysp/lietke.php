<?php

	$sql_lietke_sp = "SELECT * FROM tblsanpham,tblthuonghieu,tblloaisp WHERE tblsanpham.IdTH = tblthuonghieu.IdTH and tblsanpham.IdLoaiSP = tblloaisp.IdLoaiSP ORDER BY IdSP DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="card-body-header">
                    <h4 class="card-title">Danh sách sản phẩm</h4>
                    <button class="btn btn-outline-dark btn-icon-text">
                      <i class="mdi mdi-plus"></i>
                        <a href="index.php?action=quanlysp&query=them">Thêm sản phẩm </a>                     
                    </button>
                  </div>
                  <div class="search-container">
                    <form action="index.php?action=quanlysp&query=timkiemSP" method="POST" >
                      <input type="text" placeholder="Enter your keyword..." name="tukhoaSP">
                      <button name="timkiemSP" type="submit">
                        <i class="mdi mdi-magnify"></i>
                      </button>
                      </form>
                  </div>
                  <div class="table-responsive pt-3">
                    <table class="table table-dark" style="width:100%;">
                      <thead>
                        <tr>
                        <th>Quản lý</th>
                        <th>Id</th>
                        <th>Tên sản phẩm</th>
                        <th>Thương hiệu</th>
                        <th>Loại sản phẩm</th>
                        <th>Màu </th>
                        <th>Size</th>
                        <th>Số lượng</th>
                        <th>Giá mua</th>
                        <th>Giá bán</th>
                        <th>Hình ảnh</th>
                        <th>Mô tả</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $i = 0;
                        while($row = mysqli_fetch_array($query_lietke_sp)){
                          $i++;
                        ?>
                        <tr>
                        <td >
                          <div style="display:flex;align-items:center;">
                            <a  href="modules/quanlysp/xuly.php?IdSP=<?php echo $row['IdSP'] ?>" onClick="return confirm('Bạn có muốn xoá sản phẩm này không?')">
                                <i class="mdi mdi-delete menu-icon" title="Xoá" style="font-size:20px;color:#fff;"></i>
                            </a>
                            <span style="margin: 0 10px 5px 10px;">|</span>
                            <a href="?action=quanlysp&query=sua&IdSP=<?php echo $row['IdSP'] ?>">
                                <i class="mdi mdi-pencil-box-outline menu-icon" title="Sửa" style="font-size:20px;color:#fff;"></i>
                            </a> 
                          </div>
                      </td>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['TenSP'] ?></td>
                        <td><?php echo $row['TenTH'] ?></td>
                        <td><?php echo $row['TenLoai'] ?></td>
                        <td><?php echo $row['Mau'] ?></td>
                        <td><?php echo $row['Size'] ?></td>
                        <td><?php echo $row['SoLuongSP'] ?></td>
                        <td><?php echo $row['GiaMua'] ?></td>
                        <td><?php echo $row['GiaBan'] ?></td>
                        <td><img src="modules/quanlysp/uploads/<?php echo $row['HinhAnh'] ?>" width="150px"></td>
                        <td><?php echo $row['Mota'] ?></td>
   
                        </tr>
                        

                        <?php
                        } 
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

     