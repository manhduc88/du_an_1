<?php
// danh sách Khuyến mãi
function loadAll_khuyenmai(){
    $sql = "SELECT * FROM khuyenmai ";
    $listkm = pdo_query($sql);
    return $listkm;
}
// Thêm khuyến mãi
function insert_khuyenmai($ma_km,$phantram_km,$ngay_batdau,$ngay_ketthuc){
    $sql = "INSERT INTO `khuyenmai` (`ma_km`, `phantram_km`, `ngay_batdau`, `ngay_ketthuc`) VALUES ('$ma_km', '$phantram_km', '$ngay_batdau', '$ngay_ketthuc')";
    pdo_execute($sql);
}
//Xóa khuyến mãi
function delete_khuyenmai($id_km){
    $sql="DELETE from khuyenmai where id_km=".$id_km;
    pdo_execute($sql);
}
//Sửa khuyến mãi
function LoadOne_khuyenmai($id_km){
    $sql = "select * from khuyenmai where id_km=".$id_km;
    $km = pdo_query_one($sql);
    return $km;
}
//cập nhập Khuyến mãi
function update_khuyenmai($id_km,$ma_km,$phantram_km,$ngay_batdau,$ngay_ketthuc){

    $sql = "update khuyenmai set ma_km='".$ma_km."',phantram_km='".$phantram_km."',ngay_batdau='".$ngay_batdau."',ngay_ketthuc='".$ngay_ketthuc."' where id_km=".$id_km;
    pdo_execute($sql);
}
?>