<?php 
// load all tài khoản
function loadall_taikhoan() {
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
// thêm tài khoản
function issert_taikhoan($email,$user,$pass){
    $sql = "insert into taikhoan(email,user,pass) values('$email', '$user', '$pass')";
    pdo_execute($sql);
}
// kiểm tra sự tồn tại của 1 tài khoản
function checkuser($user, $pass) {
    $sql = "select * from taikhoan where user='".$user."' AND pass='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
// kiểm tra sự tồn tại của 1 email
function checkemail($email) {
    $sql = "select * from taikhoan where email='".$email."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
// cập nhật tk
function update_taikhoan($id,$user, $pass, $email, $address, $tel ) {
    $sql = "update taikhoan set user='".$user."', pass='".$pass."', email='".$email."',address='".$address."',tel='".$tel."' where id=".$id;
                pdo_execute($sql);
}


?>