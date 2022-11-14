
<?php
	$sql_lietke_dh = "SELECT * FROM tbldondat,tbltaikhoan WHERE tbldondat.GmailKH=tbltaikhoan.Gmail ORDER BY tbldondat.IdDD DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Danh sách đơn hàng</h4>
                  <div class="search-container">
                    <form action="index.php?action=quanlydonhang&query=timkiemHD" method="POST" >
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
                        <th>Mã đơn đặt</th>
                        <th>Tên khách hàng</th>
                        <th>Ngày đặt</th>
                        <th>Trạng thái</th>
                        <th>Quản lý</th>
                        <th>In</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $i = 0;
                        while($row = mysqli_fetch_array($query_lietke_dh)){
                          $i++;
                        ?>
                        <tr>
                            <td><?php echo $i ?></td>
                          <td><?php echo $row['IdDD'] ?></td>
                          <td><?php echo $row['TenTK'] ?></td>
                          <td><?php echo $row['ThoiGian'] ?></td>
                          <td>
                            <?php if($row['TrangThai']==1){
                              echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['IdDD'].'">Đơn hàng mới</a>';
                            }
                            elseif($row['TrangThai']==2){
                              echo 'Đã huỷ';
                            }
                            else{
                              echo 'Đã xem';
                            }
                            ?>
                          </td> 
                          <td>
                            <a style="color:#fff;text-decoration:none;" href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['IdDD'] ?>">Xem đơn hàng</a> 
                          </td>
                          <td>
                            <a style="color:#fff;text-decoration:none;" href="modules/quanlydonhang/indonhang.php?code=<?php echo $row['IdDD'] ?>">In Đơn hàng</a> 
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




