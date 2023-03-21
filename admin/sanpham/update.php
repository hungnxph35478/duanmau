<?php
if (is_array($sanpham)) {
  extract($sanpham);
}
$hinhanhpath = "../upload/" . $img;
if (is_file($hinhanhpath)) {
  $hinh = "<img src='" . $hinhanhpath . "' height='80'>";
} else {
  $hinh = "no photo";
}
?>

<div class="row">
  <div class="row frmtitle">
    <h1>Cập nhật loại hàng hóa</h1>
  </div>
  <div class="row frmcontent">
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
      <div class="row mb10">
      <select name="iddm" id="">
          <option value="0" selected>Tất cả</option>
          <?php
          foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            
            if($iddm==$id)
            echo '<option value="' . $id . '" selected>' . $name . '</option>';
            else echo '<option value="' . $id . '">' . $name . '</option>';
          }
          ?>
        </select>
      </div>
      <div class="row mb10">
        Tên sản phẩm <br>
        <input type="text" name="tensp" value="<?=$name?>">
      </div>
      <div class="row mb10">
        Giá sản phẩm <br>
        <input type="text" name="giasp" value="<?=$price?>">
      </div>
      <div class="row mb10">
        Hình sản phẩm <br>
        <input type="file" name="hinh" id="" />
        <?= $hinh ?>
      </div>
      <div class="row mb10">
        Mô tả sản phẩm <br>
        <textarea name="mota" id="" cols="30" rows="10"><?=$mota?>
            </textarea>
      </div>
      <div class="row mb10">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" name="capnhat" value="Cập nhật" />
        <input type="reset" value="Nhập lại" />
        <a href="index.php?act=listsp"><input type="button" value="Danh sách" /></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
      ?>
    </form>
  </div>
</div>
</div>