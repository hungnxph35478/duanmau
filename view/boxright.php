<div class="row mb">
  <div class="boxtitle">Tài Khoản</div>
  <div class="boxcontent formtaikhoan">
    <?php
    if (isset($_SESSION['user'])) {
      extract($_SESSION['user']);
    ?>

      <div class="row mb10">
        Xin chào <strong><?= $user ?></strong>
        
      </div>
      <div class="row mb10">
        <li>
          <a href="index.php?act=quenmk">Quên mật khẩu</a>
        </li>
        <li>
          <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
        </li>
        <?php if ($role == 1) { ?>
          <li>
            <a href="admin/index.php">Đăng nhập Admin</a>
          </li>
        <?php } ?>
        <li>
          <a href="index.php?act=thoat">Thoát</a>
        </li>
      </div>
    <?php

    } else {
    ?>
      <form action="index.php?act=dangnhap" method="post">
        <div class="row mb10">
          Tên đăng nhập <br>
          <input type="text" name="user" id="">
        </div>
        <div class="row mb10">
          Mật khẩu <br>
          <input type="password" name="pass" id="">
        </div>
        <div class="row mb10">
          <input type="checkbox" name="" id=""> Ghi nhớ tài khoản?
        </div>
        <div class="row mb10">
          <input type="submit" value="Đăng nhập" name="dangnhap">
        </div>
      </form>
      <li>
        <a href="index.php?act=quenmk.php">Quên mật khẩu</a>
      </li>
      <li>
        <a href="index.php?act=dangky">Đăng kí tài khoản</a>
      </li>
    <?php
    }
    ?>
  </div>
</div>

<div class="row mb">
  <div class="boxtitle">Danh Mục</div>
  <div class="boxcontent2 menudoc">
    <ul>
      <?php
      foreach ($dsdm as $dm) {
        extract($dm);
        $linkdm = "index.php?act=sanpham&iddm=" . $id;
        echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
      }
      ?>
    </ul>
  </div>
  <div class="boxfooter searbox">
    <!-- chuyển hướng sang trang sản phẩm để show dữ liệu -->
    <form action="index.php?act=sanpham" method="post">
      <input type="text" name="kyw" id="" placeholder="Từ khóa tìm kiếm">
      <div class="inpsearch">
        <input type="submit" name="timkiem" value="Tìm kiếm">
      </div>
    </form>
  </div>
</div>

<div class="row">
  <div class="boxtitle">Top 10 Yêu Thích</div>
  <div class="row boxcontent">
    <?php
    foreach ($dstop10 as $sp) {
      extract($sp);
      $linksp = "index.php?act=sanphamct&idsp=" . $id;
      $img = $img_path . $img;
      echo '<div class="row mb10 top10">
                    <img src="' . $img . '" alt="">
                    <a href="' . $linksp . '">' . $name . '</a>
                    </div>';
    }
    ?>
  </div>
</div>