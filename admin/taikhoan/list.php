<div class="row">
        <div class="row frmtitle"><h1>Danh sách khách  hàng</h1></div>
        <div class="row frmcontent">
          <form action="#" method="post">
            <div class="row mb10 frmdsloai">
              <table>
                <tr>
                  <th>Chọn</th>
                  <th>Mã Tài Khoản</th>
                  <th>Tên Đăng Nhập</th>
                  <th>Mật Khẩu</th>
                  <th>Email</th>
                  <th>Địa Chỉ</th>
                  <th>Điện Thoại</th>
                  <th>Vai Trò</th>
                  <th>Thao tác</th>
                </tr>
                <?php 
                // do danh mục là mảng nên ta đọc dữ liệu là foreach
                foreach ($listtaikhoan as $taikhoan) {
                    // show dữ liệu ra
                    extract($taikhoan);
                    // sửa danh mục
                    $suatk='index.php?act=suatk&id='.$id;
                    $xoatk='index.php?act=xoatk&id='.$id;

                    echo '<tr>
                  <td><input type="checkbox" name="" id="" /></td>
                  <td>'.$id.'</td>
                  <td>'.$user.'</td>
                  <td>'.$pass.'</td>
                  <td>'.$email.'</td>
                  <td>'.$address.'</td>
                  <td>'.$tel.'</td>
                  <td>'.$role.'</td>
                  <td>
                   <a href="'.$suatk.'"><input type="button" value="&#9997;"/></a> 
                   <a href="'.$xoatk.'"> <input type="button" value="&#10006;"/></a>
                  </td>
                </tr>';
                }
                ?>
                
                
              </table>
            </div>
            <div class="row mb10">
              <input type="button" value="Chọn tất cả" />
              <input type="button" value="Bỏ chọn tất cả" />
              <input type="button" value="Xóa các mục đã chọn" />
              <!-- index.php?act=adddm để nhập thêm thêm -->
              <a href="index.php?act=adddm"><input type="button" value="Nhập thêm" /></a>
            </div>
          </form>
        </div>
      </div>