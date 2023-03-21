<div class="row">
        <div class="row frmtitle"><h1>Danh sách loại hàng hóa</h1></div>
        <div class="row frmcontent">
          <form action="#" method="post">
            <div class="row mb10 frmdsloai">
              <table>
                <tr>
                  <th>Chọn</th>
                  <th>Mã Loại</th>
                  <th>Tên Loại</th>
                  <th>Thao tác</th>
                </tr>
                <?php 
                // do danh mục là mảng nên ta đọc dữ liệu là foreach
                foreach ($listdanhmuc as $danhmuc) {
                    // show dữ liệu ra
                    extract($danhmuc);
                    // sửa danh mục
                    $suadm='index.php?act=suadm&id='.$id;
                    $xoadm='index.php?act=xoadm&id='.$id;

                    echo '<tr>
                  <td><input type="checkbox" name="" id="" /></td>
                  <td>'.$id.'</td>
                  <td>'.$name.'</td>
                  <td>
                   <a href="'.$suadm.'"><input type="button" value="&#9997;"/></a> 
                   <a href="'.$xoadm.'"> <input type="button" value="&#10006;"/></a>
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