<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle"><?= $name ?></div>
            <div class="row boxcontent">
                <?php
                $img = $img_path . $img;
                echo '<div class="row mb spct"> <img src="' . $img . '"></div>';
                echo $mota;
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                    $("#binhluan").load("view/binhluan/binhluanform.php", {
                        idpro: <?=$id?>
                    });
            });
        </script>
        <div class="row" id="binhluan">
            <!-- <div class="boxtitle">Bình Luận</div>
            <div class="row boxcontent"> 

            </div>-->
        </div>
        <div class="row mb">
            <div class="boxtitle">Sản Phẩm Cùng Loại</div>
            <div class="row boxcontent">
                <?php
                foreach ($sp_cungloai as $sp_cungloai) {
                    extract($sp_cungloai);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
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