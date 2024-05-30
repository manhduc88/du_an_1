<?php
// thêm mới 1 nhóm sản phẩm
function insert_nhom_sanpham($ten_nhomsp){
    $sql = "INSERT INTO nhom_sanpham(nhom_sp) VALUES ('$ten_nhomsp') ";
    pdo_execute($sql);
}
// hiện thị danh sách nhóm sản phẩm
function loadAll_nhom_sanpham(){
    $sql = " SELECT * FROM nhom_sanpham order by id_nhom_sp desc";
    $listnhomsp = pdo_query($sql);
    return $listnhomsp;
} 
// hiển thị nhóm sản phẩm cần sửa
function loadOne_nhom_sanpham($id_nhom_sp){
    $sql = "select * from nhom_sanpham where id_nhom_sp=".$id_nhom_sp;
    $nhomsp = pdo_query_one($sql);
    return $nhomsp;
}

// cập nhập nhóm sản phẩm
function update_nhom_sanpham($id_nhom_sp,$ten_nhomsp){

    $sql = "update nhom_sanpham set nhom_sp='".$ten_nhomsp."' where id_nhom_sp=".$id_nhom_sp;
    pdo_execute($sql);
}
// xóa nhóm sản phẩm
function delete_nhom_sanpham($id_nhom_sp){
    $sql = "DELETE   FROM nhom_sanpham  WHERE id_nhom_sp=".$id_nhom_sp;
    pdo_execute($sql);  
}
?>