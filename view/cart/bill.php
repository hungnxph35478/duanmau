<div class="row mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billcomfirm" method="post">
            <div class="row mb">
                <div class="boxtitle">Thông tin đặt hàng</div>
                <div class="row boxcontent billform">
                    <table>
                        <?php 
                        if(isset($_SESSION['user'])) {
                            $name=$_SESSION['user']['user'];
                            $address=$_SESSION['user']['address'];
                            $email=$_SESSION['user']['email'];
                            $tel=$_SESSION['user']['tel'];
                        } else {
                            $name="";
                            $address="";
                            $email="";
                            $tel="";
                        }
                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="name" id="" value="<?=$name?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" id="" value="<?=$address?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" id="" value="<?=$email?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="tel" id="" value="<?=$tel?>"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">Phương thức thanh toán</div>
                <div class="row boxcontent">
                    <table>
                        <tr>
                            <td><input type="radio" value="1" name="pttt"  checked id="">Thanh Toán Khi nhận hàng</td>
                            <td><input type="radio" value="2" name="pttt" id="">Chuyển khoản qua ATM</td>
                            <td><input type="radio" value="3" name="pttt" id="">Thanh toán online</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">Thông tin giỏ hàng</div>
                <div class="row boxcontent cart frmdsloai">
                    <table>
                        <!-- <tr>
                        <th>STT</th>
                        <th>Hình</th>
                        <th>Sản phầm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr> -->
                    <?php viewcart(0); ?>
                    </table>
                </div>
            </div>
            <div class="row mb bill">
                <input type="submit" value="Đồng ý đặt hàng" name="dongydathang">
            </div>
        </form>

    </div>
    <div class="boxphai">
        <?php include"view/boxright.php"; ?>
    </div>
</div>