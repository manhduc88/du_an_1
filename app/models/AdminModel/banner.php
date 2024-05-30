<?php
// hiển thị bảng banner
function loadAll_ds_banner(){
    $sql ="SELECT * FROM banner";
    $list_ds_banner = pdo_query($sql);
    return $list_ds_banner;
}
// Xóa banner
function delete_banner($id_banner){
    $sql = "DELETE FROM banner WHERE id_banner=".$id_banner;
    pdo_execute($sql);
}
// THÊM BANNER  
function insert_banner($tieude,$tieudephu,$hinh,$mota,$link){
    $sql = "INSERT INTO `banner` ( `tieude`, `tieudephu`, `hinh`, `mota`, `link`) VALUES ('{$tieude}', '{$tieudephu}', '{$hinh}', '{$mota}' , '{$link}')";
    pdo_execute($sql);
}
// HIỂN THỊ 1 BANNER THEO ID
function loadOne_banenr($id){
    $sql = "SELECT * FROM banner WHERE id_banner=".$id;
    $result = pdo_query_one($sql);
    return $result;
}
// SỬA BANNER
function update_banner($id_banner,$tieude,$tieudephu,$hinh,$mota , $link){
    // $sql = "UPDATE banner SET `tieude`={$tieude} , `noidung`={$noidung}, `hinh`={$hinh} , `mota`={$mota} WHERE id_banner=".$id_banner;
    $sql = "UPDATE `banner` SET `tieude` = '{$tieude}', `tieudephu` = '{$tieudephu}', `hinh` = '{$hinh}', `mota` = '{$mota}', `link`= '{$link}' WHERE `banner`.`id_banner` =".$id_banner;
    // $sql = "UPDATE `banner` SET `tieude` = '$tieude', `tieudephu` = ' dfgdg e ', `hinh` = 'banner_coll_3.weebp', `mota` = 'gfdgfdge', `link` = 'ê' WHERE `banner`.`id_banner` = 12";
    pdo_execute($sql);
}
?>