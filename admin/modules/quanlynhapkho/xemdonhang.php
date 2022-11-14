
<?php
	$code = $_GET['code'];
	$sql_lietke_pnk = "SELECT * FROM tblchitietpnk,tblsanpham WHERE tblchitietpnk.IdSP=tblsanpham.IdSP AND tblchitietpnk.IdPNK='".$code."' ORDER BY tblchitietpnk.IdCTPNK DESC";
	$query_lietke_pnk = mysqli_query($mysqli,$sql_lietke_pnk);

  $sql_lietke_nv = "SELECT * FROM tblphieunk,tbltaikhoan WHERE tblphieunk.GmailNV=tbltaikhoan.Gmail AND tblphieunk.IdPNK = '".$code."'  ORDER BY tblphieunk.IdPNK DESC";
	$query_lietke_nv = mysqli_query($mysqli,$sql_lietke_nv);

  $sql_lietke_ncc = "SELECT * FROM tblphieunk,tbltaikhoan WHERE tblphieunk.GmailNCC=tbltaikhoan.Gmail AND tblphieunk.IdPNK = '".$code."' ORDER BY tblphieunk.IdPNK DESC";
	$query_lietke_ncc = mysqli_query($mysqli,$sql_lietke_ncc);

  
?>

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Chi tiết đơn hàng</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                        <th>Id</th>
                        <th>Mã đơn hàng</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $i = 0;
                        $tongtien = 0;
                        while($row = mysqli_fetch_array($query_lietke_pnk)){
                          $i++;
                          $thanhtien = $row['GiaBan']*$row['SoLuongNhap'];
                          $tongtien += $thanhtien ;
                        ?>
                        <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['IdPNK'] ?></td>
                        <td><?php echo $row['TenSP'] ?></td>
                        <td><?php echo $row['SoLuongNhap'] ?></td>
                        <td><?php echo number_format($row['GiaBan'],0,',','.').'vnđ' ?></td>
                        <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
                        </tr>
                        <?php
                        } 
                        ?>
                        <tr>
                        <td colspan="6">
                          <p>Tổng tiền : <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p>
                        </td>
                  
                  </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<div class="table-child">

      <div class="main-panel" >
        <div class="content-wrapper" >
          <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Nhân viên</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                        <th>Gmail</th>
                        <th>Tên tài khoản</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                       
                        while($row = mysqli_fetch_array($query_lietke_nv)){
                         
                        ?>
                        <tr>
                        <td><?php echo $row['Gmail'] ?></td>
                        <td><?php echo $row['TenTK'] ?></td>
                        <td><?php echo "0".$row['SDT'] ?></td>
                        <td><?php echo $row['DiaChi'] ?></td>
                        <?php
                        } 
                        ?>
                  </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main-panel">
        <div class="content-wrapper" >
          <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Nhà cung cấp</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                        <th>Gmail</th>
                        <th>Tên tài khoản</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                       
                        while($row = mysqli_fetch_array($query_lietke_ncc)){
                         
                        ?>
                        <tr>
                        <td><?php echo $row['Gmail'] ?></td>
                        <td><?php echo $row['TenTK'] ?></td>
                        <td><?php echo "0".$row['SDT'] ?></td>
                        <td><?php echo $row['DiaChi'] ?></td>
                        <?php
                        } 
                        ?>
                  </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>