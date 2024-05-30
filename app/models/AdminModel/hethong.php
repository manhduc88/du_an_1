<?php
// danh sách hệ thống
function loadall_hethong(){
    $sql = "SELECT * FROM `hethong`";
        $listhethong = pdo_query($sql);
        return $listhethong;
}
// Thêm hệ thống
function insert_hethong($ten_cuahang, $sdt, $email, $diachi, $logo){
    $sql = "INSERT INTO hethong(ten_cuahang, sdt, email, diachi, logo) VALUES ('$ten_cuahang', '$sdt', '$email', '$diachi', '$logo') ";
    pdo_execute($sql);
}
//Xóa hệ thống
function delete_hethong($id){
    $sql="DELETE from hethong where id_hethong=".$id;
    pdo_execute($sql);
}
//Sửa hệ thống
function loadOne_hethong($id_hethong){
    $sql = "select * from hethong where id_hethong=".$id_hethong;
    $hethong = pdo_query_one($sql);
    return $hethong;
}
//cập nhập hệ thống
function update_hethong($id_hethong,$ten_cuahang,$sdt,$email,$diachi,$logo){

    $sql = "update hethong set ten_cuahang='".$ten_cuahang."',sdt='".$sdt."',email='".$email."',diachi='".$diachi."',logo='".$logo."' where id_hethong=".$id_hethong;
    pdo_execute($sql);
}
?>