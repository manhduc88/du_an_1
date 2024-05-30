<?php
   // Thêm vai trò
   function insert_vai_tro($vaitro){
    $sql = "INSERT INTO vai_tro(vaitro) VALUES ('$vaitro') ";
    pdo_execute($sql);
}
// //Danh sách vai trò
function loadall_vaitro(){
    $sql=" SELECT * FROM `vai_tro` ";
        $listvaitro = pdo_query($sql);
        return $listvaitro;
}
//Xóa vai trò
function delete_vaitro($id){
    $sql="DELETE from vai_tro where id_vaitro=".$id;
    pdo_execute($sql);
}
//Sửa vai trò
function loadone_vaitro(){
    $sql="SELECT * from vai_tro where id_vaitro=".$_GET['id'];

           $vaitro=pdo_query_one($sql);

    return $vaitro;
}
// update vai trò
function update_vaitro($id_vaitro,$vaitro){
    $sql="UPDATE vai_tro set vaitro='".$vaitro."' where id_vaitro=".$id_vaitro;
            pdo_execute($sql);
}
?>