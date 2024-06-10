<?php 
// thêm sản phẩm
function issert_sanpham($tenloai,$giasp,$hinh,$mota,$iddm){
    $sql = "insert into sanpham(name,price,img,mota,iddm) values('$tenloai', '$giasp', '$hinh',  '$mota', '$iddm' )";
    pdo_execute($sql);
}

// xóa sản phẩm
function delete_sanpham($id){
    $sql = "delete from sanpham where id=".$id;
                pdo_execute($sql);
}

// load all sản phẩm top10
function loadall_sanpham_top10() {
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
            $listsanpham = pdo_query($sql);
            return $listsanpham;
}

// load all sản phẩm cho trang chủ
function loadall_sanpham_home() {
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
            $listsanpham = pdo_query($sql);
            return $listsanpham;
}

// load toàn bộ list sản phẩm
function loadall_sanpham($kyw, $iddm=0) {
    $sql = "select * from sanpham where 1 ";
    if ($kyw!="") {
        $sql.=" and name like '%".$kyw."%'";
    }
    if ($iddm > 0) {
        $sql.=" and iddm = '".$iddm."'";
    }
    $sql .=" order by name";
            $listsanpham = pdo_query($sql);
            return $listsanpham;
}

// load tên danh mục
function load_ten_dm($iddm) {
    // nếu dm > 0 thì thực hiện câu lệnh, ngược lại rỗng
    if($iddm>0){
        $sql = "select * from danhmuc where id=".$iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $name;
    } else {
        return "";
    }
    
}

// sửa 1 danh mục
function loadone_sanpham($id) {
    $sql = "select * from sanpham where id=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}

// sản phẩm cùng loại
function load_sanpham_cungloai($id, $iddm) {
    $sql = "select * from sanpham where iddm=".$iddm." AND id <>".$id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}














































// cập nhật
function update_sanpham($id,$iddm, $tensp, $giasp, $mota, $hinh ) {
    if($hinh!="")
    $sql = "update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
    else
    $sql = "update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."',mota='".$mota."' where id=".$id;
                pdo_execute($sql);
}
?>