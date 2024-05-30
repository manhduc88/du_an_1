<?php
// hiển thị bảng banner con
function loadAll_banner_con(){
    $sql ="SELECT * FROM `banner_con`";
    $banner_con = pdo_query($sql);
    return $banner_con;
}

// xóa banner con
function delete_banner_con($id){
    $sql = "DELETE  FROM banner_con WHERE id_banner_con=".$id;
    pdo_execute($sql);
}

// thêm banner con
function add_banner_con($hinh,$link){
    $sql = "INSERT INTO `banner_con` ( `hinh` ,`link`) VALUES ('$hinh' , '$link')";
    pdo_execute($sql);
}

// hiển thị 1 banner con theo id 
function LoadOnae_banner_con($id){
    $sql = "SELECT * FROM `banner_con` WHERE id_banner_con=".$id;
    $loadOne_banner_con= pdo_query_one($sql);
    return $loadOne_banner_con;
 }

   // cập nhật banner  con
   function update_banner_con($hinh,$link,$id){
    $sql ="UPDATE `banner_con` SET `hinh` = '{$hinh}' , `link` = '{$link}' WHERE `banner_con`.`id_banner_con`=".$id;
    pdo_execute($sql);
 }
?>