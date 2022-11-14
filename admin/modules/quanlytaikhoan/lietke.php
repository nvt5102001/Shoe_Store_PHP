<?php
	$sql_lietke_tk = "SELECT * FROM tbltaikhoan ORDER BY Gmail DESC";
	$query_lietke_tk = mysqli_query($mysqli,$sql_lietke_tk);
?>


<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Danh sách tài khoản</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                        <th>Gmail</th>
                        <th>Tên tài khoản</th>
                        <th>Loại tài khoản</th>
                        <th>SĐT</th>
                        <th>Địa chỉ</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                    $i = 0;
                    while($row = mysqli_fetch_array($query_lietke_tk)){
                      $i++;
                    ?>
                        <tr>
                        <td><?php echo $row['Gmail'] ?></td>
                        <td><?php echo $row['TenTK'] ?></td>
                        <td><?php echo $row['LoaiTK'] ?></td>
                        <td><?php echo "0".$row['SDT'] ?></td>
                        <td><?php echo $row['DiaChi'] ?></td>
                        
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

