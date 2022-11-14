
<?php
	$sql_lietke_pnk = "SELECT * FROM tblphieunk,tbltaikhoan WHERE tblphieunk.GmailNCC=tbltaikhoan.Gmail ORDER BY tblphieunk.IdPNK DESC";
	$query_lietke_pnk = mysqli_query($mysqli,$sql_lietke_pnk);
?>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Danh sách đơn hàng</h4>
                  <div class="search-container">
                    <form action="index.php?action=quanlynhapkho&query=timkiemHD" method="POST" >
                      <input type="text" placeholder="Enter YYYY-MM-DD" name="tukhoaHD">
                      <button name="timkiemHD" type="submit">
                        <i class="mdi mdi-magnify"></i>
                      </button>
                      </form>
                  </div>
                  <div class="table-responsive pt-3">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                        <th>Id</th>
                        <th>Mã nhập kho</th>
                        <th>Tên nhà cung cấp</th>
                        <th>Ngày đặt</th>
                        <th>Quản lý</th>
                        <th>In</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $i = 0;
                        while($row = mysqli_fetch_array($query_lietke_pnk)){
                          $i++;
                        ?>
                        <tr>
                            <td><?php echo $i ?></td>
                          <td><?php echo $row['IdPNK'] ?></td>
                          <td><?php echo $row['TenTK'] ?></td>
                          <td><?php echo $row['ThoiGian'] ?></td>
                          <td>
                            <a style="color:#fff;text-decoration:none;" href="index.php?action=quanlynhapkho&query=xemdonhang&code=<?php echo $row['IdPNK'] ?>">Xem đơn hàng</a> 
                          </td>
                          <td>
                            <a style="color:#fff;text-decoration:none;" href="modules/quanlynhapkho/indonhang.php?code=<?php echo $row['IdPNK'] ?>">In Đơn hàng</a> 
                          </td>
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




