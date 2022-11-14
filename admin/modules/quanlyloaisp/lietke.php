<?php
	$sql_lietke_loaisp = "SELECT * FROM tblloaisp ORDER BY IdLoaiSP DESC";
	$query_lietke_loaisp = mysqli_query($mysqli,$sql_lietke_loaisp);
?>


<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Danh sách loại sản phẩm</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                        <th>Id</th>
                        <th>Tên loại</th>
                        <th>Quản lý</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                    $i = 0;
                    while($row = mysqli_fetch_array($query_lietke_loaisp)){
                      $i++;
                    ?>
                        <tr>
                        <td><?php echo $i ?></td>
    <td><?php echo $row['TenLoai'] ?></td>
   	<td>
   		<a href="modules/quanlyloaisp/xuly.php?IdLoaiSP=<?php echo $row['IdLoaiSP'] ?>" onClick="return confirm('Bạn có muốn xoá loại sản phẩm này không?')">Xoá</a> | <a href="?action=quanlyloaisp&query=sua&IdLoaiSP=<?php echo $row['IdLoaiSP'] ?>">Sửa</a> 
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

