<div class="row mb">
  <div class="boxtrai mr">
    <!-- banner -->
    <div class="row">
      <div class="banner">
        <div class="slideshow-container">

          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <!-- <div class="numbertext">1 / 3</div> -->
            <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/02/banner/socss-tgdd-720-220-720x220-1.png" style="width:100%; height: 260px;">
          </div>

          <div class="mySlides fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/01/banner/aseri-720-220-720x220.png" style="width:100%; height: 260px;">
          </div>

          <div class="mySlides fade">
            <!-- <div class="numbertext">3 / 3</div> -->
            <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/02/banner/PK-Khai-xuan-720-220-720x220-1.png" style="width:100%; height: 260px;">
          </div>

          <!-- Next and previous buttons -->
          <a class="prev left" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
      </div>
      <!-- product -->
      <div class="row">
        <?php
        $i = 0;
        foreach ($spnew as $sp) {
          extract($sp);
          $linksp = "index.php?act=sanphamct&idsp=" . $id;
          $hinh = $img_path . $img;
          if (($i == 2) || ($i == 5) || ($i == 8)) {
            $mr = "";
          } else {
            $mr = "mr";
          }
          echo '<div class="boxsp ' . $mr . '">
          <div class="row img image-product">
          <a href="' . $linksp . '" ><img src="' . $hinh . '" alt="" /></a>
          <p class="price-product">' . $price . '</p> 
          <a href="' . $linksp . '" class="info-product">' . $name . '</a>
          </div>
          <div class=" row boxprice">
            <form action="index.php?act=addtocart" method="POST">
              <input type="hidden" name="id" value="' . $id . '">
              <input type="hidden" name="name" value="' . $name . '">
              <input type="hidden" name="img" value="' . $img . '">
              <input type="hidden" name="price" value="' . $price . '">
              <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" class="addtocart">
            </form>
          </div>
        </div>';
          $i += 1;
        }
        ?>
      </div>
    </div>
  </div>
  <div class="boxphai">
    <?php
    include "boxright.php";
    ?>
  </div>
</div>