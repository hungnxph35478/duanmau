<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/cart.php";
include "./view/header.php";
include "global.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

// biến $spnew sẽ chứa toàn bộ sản phẩm sẽ view ở foler view file home.php
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            // nếu tồn tại và khác rỗng
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                // gán kyw=Post 
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            // ktra iddm tồn tại hay không và lớn hơn không
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
            // ----------
        case 'sanphamct':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cungloai = load_sanpham_cungloai($id, $iddm);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }

            break;
            // =========

        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                issert_taikhoan($email, $user, $pass);
                $thongbao = "Đăng ký thành công";
            }
            include "view/taikhoan/dangky.php";
            break;
            // ======= 

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    // $thongbao="Đăng nhập thành công";
                    header('Location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại";
                }
            }
            include "view/taikhoan/dangky.php";
            break;
            // ======= 

        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                header('Location: index.php?act=edit_taikhoan');
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
            // ======= 

        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else {
                    $thongbao = "Email không tồn tại";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;

            // =================
        case "addtocart":
            // add thông tin sp từ cái form add to cart đến session
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "view/cart/viewcart.php";
            break;

        case 'delcart':
            if (isset($_GET['idcart'])) {
                // xóa từng cái
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                // xóa tât cả giỏ hàng
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?act=addtocart');
            break;

        case 'bill':
            include "view/cart/bill.php";
            break;

        case 'billcomfirm':
            // tạo bill
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['$address'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $ngaydathang=date('h:i:sa d/m/Y');
                $tongdonhang=tongdonhang();

               $idbill= insert_bill($name, $email,$adress,$tel,$pttt,$ngaydathang,$tongdonhang);
            //    ======================
            foreach ($session['mycart'] as $cart) {
                insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
            }
            }
            $listbill=loadone_bill($idbill);
            $billct=loadone_cart($idbill);
            include "view/cart/billcomfirm.php";
            break;

        case 'mybill':
            include "view/cart/mybill.php";
            break;





            // ===============
        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;
            // =======

        case 'gioithieu':
            include "view/gioithieu.php";
            break;
            // =======
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'hoidap':
            include "view/hoidap.php";
            break;
        case 'gopy':
            include "view/gopy.php";
            break;
        default:
            include "./view/home.php";
            break;
    }
} else {
    include "./view/home.php";
}
include "./view/footer.php";
