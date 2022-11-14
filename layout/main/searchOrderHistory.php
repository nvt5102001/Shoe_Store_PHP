<div class="main-panel" style="margin:50px;">
        <div class="content-wrapper">
          <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Lịch sử mua hàng</h2>
                  <div class="search-container" >
                    <form action="index.php?page=searchOrderHistory" method="POST" >
                      <input type="text" placeholder="Enter YYYY-MM-DD" name="tukhoaHD">
                      <button name="timkiemHD" type="submit">
                        <i class="mdi mdi-magnify"></i>Tìm kiếm
                      </button>
                      </form>
                  </div>
                  <div class="table-responsive pt-3" style="margin-top:20px;background-color:#333; color:#fff;border-radius:20px;padding:10px;">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                        <th>Id</th>
                        <th>Mã đơn đặt</th>
                        <th>Tên khách hàng</th>
                        <th>Ngày đặt</th>
                        <th>Quản lý</th>
                        <th>In</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php

                        // Tìm kiếm lịch sủ mua hàng
                        $id_khachhang = $_SESSION['Gmail'];
                        if(isset($_POST['timkiemHD'])){
                            $tukhoa = $_POST['tukhoaHD'];
                        }
                        if($tukhoa != " ")
                        {
                            $sql_lietke_dh = "SELECT * FROM tbldondat,tbltaikhoan WHERE tbldondat.GmailKH=tbltaikhoan.Gmail AND tbldondat.GmailKH='$id_khachhang' AND  tbldondat.ThoiGian LIKE '%".$tukhoa."%' ORDER BY tbldondat.IdDD DESC";
                            $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
                            $count = mysqli_num_rows($query_lietke_dh);
                            if($count <= 0) 
                            {
                                echo "<tr>
                                <td colspan='8' style='text-align:center;'>Không tìm thấy lịch sử mua hàng!</td>
                            </tr>";
                            }
                        }
                        else 
                        {
                            $sql_lietke_dh = "SELECT * FROM tbldondat,tbltaikhoan WHERE tbldondat.GmailKH=tbltaikhoan.Gmail AND tbldondat.GmailKH='$id_khachhang'  ORDER BY tbldondat.IdDD DESC";
                            $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
                        }
                         
                        
                        // Hiển thị đơn hàng đã mua
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
                            <a  href="index.php?page=xemctdh&code=<?php echo $row['IdDD'] ?>">Xem đơn hàng</a> 
                          </td>
                          <td>
                            <a href="modules/quanlydonhang/indonhang.php?code=<?php echo $row['IdDD'] ?>">In Đơn hàng</a> 
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

