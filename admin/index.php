<!-- Tập trung 3 file header, home và footer -->
<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";
include "header.php";

// controller (click vào cái gì sẽ ra cái gì)

// LẤY YÊU CẦU
// + kiểm tra biếm trên đường dẫn có tồn tại hay không ta dùng isset
if (isset($_GET['act'])) {
    // nếu tồn tại nó sẽ làm gì
    $act = $_GET['act'];
    switch ($act) {
            // nếu ấn vào danh mục
        case 'adddm':
            // ktra người dùng có ấn vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                issert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            //    hiển thị danh mục
            include "danhmuc/add.php";
            break;
            // nếu ấn vào sản phẩm
        case "listdm":
            // load dữ liệu lên danh mục
            $listdanhmuc = loadall_danhmuc(); // show ở file list.php dòng 13
            // hiển thị sản phẩm
            include "danhmuc/list.php";
            break;

            // xóa danh mục
        case "xoadm":
            // ktra id có tồn ại hay khôngg
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }

            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
            
            //sửa danh mục
        case "suadm":
            // hiển thi chi tiết 1 danh mục nào đó
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case "updatedm":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                // $tenloai = $_POST['tenloai'];
                // $id = $_POST['id'];
                update_danhmuc($_POST); 
                $thongbao = "Cập nhật thành công";
            }

            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
            // end controler danh mục


            

            // CONTROLER SẢN PHẨM

            // nếu ấn vào danh mục
        case 'addsp':
            // ktra người dùng có ấn vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                // uploaad file lên thư mục upload
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                issert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            //    hiển thị sản phẩm
            include "sanpham/add.php";
            break;
            // nếu ấn vào sản phẩm
        case "listsp":
            // ktra post tồn tại không để lọc
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            // load dữ liệu lên danh mục
            $listsanpham = loadall_sanpham($kyw, $iddm); // show ở file list.php dòng 13
            // hiển thị sản phẩm
            include "sanpham/list.php";
            break;

            // xóa sản phẩm
        case "xoasp":

            // kiểm tra id có tồn ại hay khôngg
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }

            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;

        case "suasp":
            // hiển thi chi tiết 1 danh mục nào đó
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $sanpham = loadone_sanpham($_GET['id']);
            }
            
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
            
        case "updatesp":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                // uploaad file lên thư mục upload
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập nhật thành công";
            }
            // phải gọi list danh mục mới hiển thì được danh mục ở file update
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
            // end controler sản phẩm

        case "dskh":

            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        case "dsbl":

            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'thongke':
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listthongke = loadall_thongke();
            include "thongke/bieudo.php";
            break;
            // ======

            // Xóa bình luận
        case "xoabl":
            // ktra id có tồn ại hay khôngg
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

// include "home.php";

include "footer.php";
?>