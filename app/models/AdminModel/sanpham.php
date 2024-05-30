<?php
   // chọn sản phẩm 
   function loadAll_id_sanpham(){
    $sql = " SELECT * FROM san_pham ";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
    } 

    // hiện thị danh sách sản phẩm
    function loadAll_sanpham(){
        $sql = " SELECT * FROM san_pham as a INNER JOIN nhom_sanpham as b ON a.id_nhom_sp=b.id_nhom_sp INNER JOIN gioitinh_sanpham as c On a.id_gioitinh_sp=c.id_gioitinh_sp";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    } 
    // xóa sản phẩm
    function delete_sanpham($id_sanpham){
        $sql = "DELETE  FROM san_pham  WHERE id_sanpham=".$id_sanpham;
        pdo_execute($sql);  
    }
    function delete_all_tva_sanpham($id_sanpham){
        $sql = "DELETE  FROM thuvien_hinh_sanpham  WHERE id_sanpham=".$id_sanpham;
        pdo_execute($sql);  
    }

    // thêm mới sản phẩm 
    function  insert_sanpham($ten,$mota,$id_nhom_sp,$id_gioitinh_sp,$hinh_daidien){
        $sql = "INSERT INTO san_pham(ten_sanpham,mota,id_gioitinh_sp,id_nhom_sp,hinh_daidien) VALUES ('$ten','$mota','$id_gioitinh_sp','$id_nhom_sp','$hinh_daidien') ";
        return pdo_execute_return_lastInsertId($sql);
    }
    // ảnh mô tả sản phẩm
    function  insert_anh_mota($id_sp,$value){
        $sql = "INSERT INTO thuvien_hinh_sanpham(id_sanpham,hinh_sanpham) VALUES ('$id_sp','$value') ";
        pdo_execute($sql);
    }
    //hiển thị ảnh mô tả sản phẩm
    function loadAll_anh_mota($id_sp){
        $sql = "select * from thuvien_hinh_sanpham  where id_sanpham=".$id_sp;
        $anhmota = pdo_query($sql);
        return $anhmota;
    }
    // hiện thị thông tin sản phẩm cần sửa
    function loadOne_sanpham($id_sanpham){
        $sql = "select * from san_pham as a INNER JOIN nhom_sanpham as b ON a.id_nhom_sp=b.id_nhom_sp INNER JOIN gioitinh_sanpham as c On a.id_gioitinh_sp=c.id_gioitinh_sp where id_sanpham=".$id_sanpham;
        $sanpham = pdo_query_one($sql);
        return $sanpham;
    }
    //cập nhập sản phẩm
    function update_sanpham($id_sanpham,$ten,$mota,$id_nhom_sp,$id_gioitinh_sp,$hinh_daidien){

        $sql = "update san_pham set ten_sanpham='".$ten."',mota='".$mota."',id_nhom_sp='".$id_nhom_sp."',id_gioitinh_sp='".$id_gioitinh_sp."',hinh_daidien='".$hinh_daidien."' where id_sanpham=".$id_sanpham;
        pdo_execute($sql);
    }
    // xóa biến thể sản phẩm
    function delete_all_bienthe_sanpham($id_sanpham){
        $sql = "DELETE  FROM bienthe_sp  WHERE id_sanpham=".$id_sanpham;
        pdo_execute($sql);  
    }
    // xóa thư viện ảnh sản phẩm theo id san phẩm
    function delete_thuvien_anhsp($id_tvasp,$id_sp){
        $sql = "DELETE  FROM thuvien_hinh_sanpham  WHERE id_thuvien_sp=".$id_tvasp;
        pdo_execute($sql);  
        return $id_sp;
    }
?>