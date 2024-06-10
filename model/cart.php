<?php 
function viewcart($del) {
    global $img_path;
    $tong = 0;
                    $i=0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $hinh = $img_path . $cart[2];
                        $ttien = $cart[3] * $cart[4];
                        $tong += $ttien;
                            if($del==1) {
                                $xoasp_th='<th>Thao Tác</th>';
                            $xoasp_td='<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a></td>';
                            } else {
                                $xoasp_th='';
                                $xoasp_td='';
                            }
                        echo '
                            <tr>
                                <th>Hình</th>
                                <th>Sản Phẩm</th>
                                <th>Đơn Giá</th>
                                <th>Số Lượng</th>
                                <th>Thành Tiền</th>
                                '.$xoasp_th.'
                            </tr>
                            <tr>
                                <td><img src="' . $hinh . '" alt="" height="80px"></td>
                                <td>' . $cart[1] . '</td>
                                <td>' . $cart[3] . '</td>
                                <td>' . $cart[4] . '</td>
                                <td>' . $ttien . '</td>
                                '.$xoasp_td.'
                            </tr>';
                        $i+=1;
                    }
                    echo '<tr>
                            <td colspan="4">Tổng đơn hàng</td>
                            <td>' . $tong . '</td>
                            <td></td>
                        </tr>';
}

function tongdonhang() {
    $tong = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $ttien = $cart[3] * $cart[4];
                        $tong += $ttien;
                    }
                    return $tong;
}

function insert_bill($name, $email,$adress,$tel,$pttt,$ngaydathang,$tongdonhang){
    $sql = "insert into bill(bill_name,bill_email,bill_adress,bill_tel,bill_pttt,ngaydathang,total) values('$name', '$email','$adress','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_executereturn_lastInsertId($sql);
}

function insert_cart($iduser, $idpro,$img,$price,$soluong,$thanhtien,$idbill){
    $sql = "insert into cart(iduser,idpro,img,price,soluong,thanhtien,idbill) values('$iduser', '$idpro','$img','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id) {
    $sql="select * from bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}

function loadone_cart($idbill) {
    $sql="select * from cart where idbill=".$idbill;
    $bill=pdo_query_one($sql);
    return $bill;
}

function loadall_bill($kyw="",$iduser=0) {
    $sql="select * from bill where 1";
    if($iduser>0) $sql.=" AND iduser=".$iduser;
    if($kyw!="") $sql.=" AND id like '%".$kyw."%'";
    $sql.=" order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}

function loadall_thongke() {
    // lấy về danh mục theo tên sp, đếm xem bao nhiêu sp, giá lớn, giá bé, giá tb
    $sql="select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    // liên kết  
    $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    // danh mục nào nhập sau thì lên trên
    $sql.=" group by danhmuc.id order by danhmuc.id desc";
    $listtk=pdo_query($sql);
    return $listtk;
}
?>