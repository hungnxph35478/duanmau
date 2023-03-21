<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart frmdsloai">
                <table>
                    <!-- <tr>
                        <th>Hình</th>
                        <th>Sản Phẩm</th>
                        <th>Đơn Giá</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        <th>Thao Tác</th>
                    </tr> -->

                    <?php
                    viewcart(1);
                    ?>
                   
                </table>
            </div>
        </div>

        <div class="row mb bill">
        <a href="index.php?act=bill" class="ttdathang"> <input type="button" value="Tiếp tục đặt hàng"> </a>
        <a href="index.php?act=delcart" class="ttdathang"><input type="button" value="Xóa giỏ hàng"></a>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>