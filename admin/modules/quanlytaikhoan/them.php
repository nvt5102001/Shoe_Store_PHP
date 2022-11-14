
<div class="main-panel" >
        <div class="content-wrapper" >
          <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Thêm tài khoản</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-light" >
                      <form method="POST" action="modules/quanlytaikhoan/xuly.php">
                        <tr>
                          <td>Gmail</td>
                          <td><input type="text" name="Gmail"></td>
                        </tr>
                        <tr>
                          <td>Tên tài khoản</td>
                          <td><input type="text" name="TenTK"></td>
                        </tr>
                        <tr>
                          <td>Mật khẩu</td>
                          <td><input type="text" name="MatKhau"></td>
                        </tr>
                        <tr>
                          <td>Loại tài khoản</td>
                          <td>
                          <select name="LoaiTK">
                              <option value="user">User</option>
                              <option value="admin">Admin</option>
                              <option value="employee">Employee</option>
                              <option value="supplier">Supplier</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>SĐT</td>
                          <td><input type="text" name="SDT"></td>
                        </tr>
                        <tr>
                          <td>Địa chỉ</td>
                          <td><input type="text" name="DiaChi"></td>
                        </tr>
                        <tr>
                          <td colspan="2">
                            <button type="submit" name="themtk" class="btn btn-outline-dark btn-icon-text">
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



