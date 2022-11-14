<?php
	$sql_lietke_thuonghieu = "SELECT * FROM tblthuonghieu ORDER BY TenTH DESC";
	$query_lietke_thuonghieu = mysqli_query($mysqli,$sql_lietke_thuonghieu);
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
    <th>Tên thương hiệu</th>
  	<th>Quản lý</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_thuonghieu)){
  	$i++;
  ?>
                        <tr>
                        <td><?php echo $i ?></td>
    <td><?php echo $row['TenTH'] ?></td>
   	<td>
   		<a href="modules/quanlythuonghieu/xuly.php?IdTH=<?php echo $row['IdTH'] ?>" onClick="return confirm('Bạn có muốn xoá thương hiệu này không?')">Xoá</a> | <a href="?action=quanlythuonghieu&query=sua&IdTH=<?php echo $row['IdTH'] ?>">Sửa</a> 
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