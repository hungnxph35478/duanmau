<div class="row">
  <div class="row frmtitle mb">
    <h1>Danh sách loại hàng hóa</h1>
  </div>
  <form action="index.php?act=listsp" method="post">
    <div class="row mb10 frmdsloai">
      <!-- lọc sp -->
      <form action="" method="post">
        <input type="text" name="kyw">
        <select name="iddm" id="">
          <option value="0" selected>Tất cả</option>
          <?php
          foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            echo '<option value="' . $id . '">' . $name . '</option>';
          }
          ?>
        </select>
        <input type="submit" name="listok" value="Go">
      </form>
      <div class="row frmcontent">

        <!-- end lọc sp -->
        <table>
          <tr>
            <th>Chọn</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Mô tả</th>
            <th>Lượt xem sản phẩm</th>
            <th>Thao tác</th>
          </tr>
          <?php
          // do danh mục là mảng nên ta đọc dữ liệu là foreach
          foreach ($listsanpham as $sanpham) {
            // show dữ liệu ra
            extract($sanpham);
            // sửa danh mục
            $suasp = 'index.php?act=suasp&id=' . $id;
            $xoasp = 'index.php?act=xoasp&id=' . $id;
            // kiểm tra img phải là một file hay không
            $hinhanhpath = "../upload/" . $img;
            if (is_file($hinhanhpath)) {
              $hinh = "<img src='" . $hinhanhpath . "' height='80'>";
            } else {
              $hinh = "no photo";
            }

            echo '<tr>
                  <td><input type="checkbox" name="" id="" /></td>
                  <td>' . $id . '</td>
                  <td>' . $name . '</td>
                  <td>' . $hinh . '</td>
                  <td>' . $price . '</td>
                  <td>' . $mota . '</td>
                  <td>' . $luotxem . '</td>
                  <td>
                   <a href="' . $suasp . '"><input type="button" value="&#9997;"/></a> 
                   <a href="' . $xoasp . '"> <input type="button" value="&#10006;"/></a>
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
        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" /></a>
      </div>
  </form>
</div>
</div>