<?php
    
    // hiện thị danh sách màu sản phẩm
    function loadAll_bienthe_mau(){
        $sql = " SELECT * FROM mau_sp";
        $listbienthemau = pdo_query($sql);
        return $listbienthemau;
            } 
    // thêm mới biến thể màu
    function insert_bienthe_mau($ten_mau){
        $sql = "INSERT INTO mau_sp(ten_mau) VALUES ('$ten_mau') ";
        pdo_execute($sql);
    }
    // xóa màu 
    function delete_bienthe_mau($id_mau){
        $sql = "DELETE   FROM mau_sp  WHERE id_mau=".$id_mau;
        pdo_execute($sql);  
    }
?>