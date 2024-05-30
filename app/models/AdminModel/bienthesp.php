<?php
function loadOne_biethe_sp($id_sp){
    $sql = "SELECT * FROM bienthe_sp as a INNER JOIN mau_sp as d  ON a.id_mau = d.id_mau INNER JOIN size as c ON a.id_size =c.id_size where id_sanpham=".$id_sp." ";
    $listbienthesp = pdo_query($sql);
    return $listbienthesp;

}
function insert_bienthe_sp($id_sanpham,$gia,$id_mau,$id_size,$soluong){
    $sql = " INSERT INTO bienthe_sp(id_sanpham,id_size,id_mau,gia_sanpham,soluong) VALUES ('$id_sanpham','$id_size','$id_mau','$gia','$soluong')";
    pdo_execute($sql);
}
function delete_bienthe_sp($id_btsp,$id_sp){
    $sql = "DELETE  FROM bienthe_sp  WHERE id_bienthe_sp=".$id_btsp;
    pdo_execute($sql);  
    return $id_sp;
}
function loadAll_bienthe_sp($id_sp){
    $sql = "select * from bienthe_sp  as a INNER JOIN mau_sp as d  ON a.id_mau = d.id_mau INNER JOIN size as c ON a.id_size =c.id_size where id_sanpham=".$id_sp;
    $bienthesp = pdo_query($sql);
    return $bienthesp;
}
    // hiện thị thông tin sản phẩm cần sửa
    function loadOne_bienthe_sp($id_bienthe_sp){
        $sql = "select * from bienthe_sp as a INNER JOIN mau_sp as b ON a.id_mau=b.id_mau INNER JOIN size as c On a.id_size=c.id_size where id_bienthe_sp=".$id_bienthe_sp;
        $sanpham = pdo_query_one($sql);
        return $sanpham;
    }
        //cập nhập biến thể sản phẩm
        function update_bienthe_sp($id_sanpham,$id_bienthe_sp,$gia,$id_mau,$id_size,$soluong){

            $sql = "update bienthe_sp set gia_sanpham='".$gia."',  id_mau='".$id_mau."', id_size='".$id_size."', soluong='".$soluong."' where id_bienthe_sp=".$id_bienthe_sp;
            pdo_execute($sql);
            return $id_sanpham;
        }

?>