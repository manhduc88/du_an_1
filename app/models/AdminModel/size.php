<?php
// hiển thị danh sách size
function Load_all_size(){
    $sql = "SELECT * FROM size ";
    $listsize = pdo_query($sql);
    return $listsize;
}
// xóa size
function delete_size($idsize){
    $sql = "DELETE FROM size WHERE id_size= ".$idsize;
    pdo_execute($sql);
}
// thêm size

function insert_size($size){
    $sql = "INSERT INTO size(ten_size) VALUES ('$size') ";
    pdo_execute($sql);
}
// hiển thị size theo id size
function loadOne_size($id_size){
    $sql = "select * from size where id_size=".$id_size;
    $size = pdo_query_one($sql);
    return $size;
}

// cập nhật size
function update_size($id_size,$ten_size){
    $sql = "UPDATE `size` SET `ten_size` = '{$ten_size}' WHERE `size`.`id_size` = '{$id_size}'";
    pdo_execute($sql);
}

?>