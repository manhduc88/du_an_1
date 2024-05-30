<?php
//  danh sách bài viết
function loadall_baiviet(){
    $sql = "SELECT * FROM `baiviet`";
        $listbaiviet = pdo_query($sql);
        return $listbaiviet;
}
// Thêm bài viết
function insert_baiviet($tieude, $noidung, $mota,$hinh,$ngaydang){
    $sql = "INSERT INTO baiviet(tieude,noidung,mota,hinh,ngaydang) VALUES ('$tieude', '$noidung', '$mota', '$hinh', '$ngaydang') ";
    pdo_execute($sql);
}
//Xóa bài viết
function delete_baiviet($id_baiviet){
    $sql="DELETE from baiviet where id_baiviet=".$id_baiviet;
    pdo_execute($sql);
}
//Sửa bài viết
function loadOne_baiviet($id_baiviet){
    $sql = "select * from baiviet where id_baiviet=".$id_baiviet;
    $baiviet = pdo_query_one($sql);
    return $baiviet;
}
//cập nhập bài viết
function update_baiviet($id_baiviet, $tieude, $noidung, $mota, $ngaydang, $hinh){

    $sql = "update baiviet set tieude='".$tieude."',noidung='".$noidung."',mota='".$mota."',ngaydang='".$ngaydang."',hinh='".$hinh."' where id_baiviet=".$id_baiviet;
    pdo_execute($sql);
}
?>