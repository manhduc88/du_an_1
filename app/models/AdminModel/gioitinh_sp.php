<?php
    
    // hiển thị danh sách giới tính sản phẩm
    function loadAll_gioitinh_sp(){
        $sql = " SELECT * FROM gioitinh_sanpham ";
        $listgtsp = pdo_query($sql);
        return $listgtsp;
    } 
    // thêm giới tính sản phẩm
    function insert_gtsp($gtsp){
        $sql = " INSERT INTO gioitinh_sanpham(gioitinh) VALUES ('$gtsp')";
        pdo_execute($sql);
    }
    // xóa giới tính sản phẩm
    function delete_gtsp($id_gioitinh_sp){
        $sql = "DELETE FROM gioitinh_sanpham WHERE id_gioitinh_sp=".$id_gioitinh_sp;
        pdo_execute($sql);
    }
    // hiển thị 1 sản phẩm theo id giới tính sản phẩm
    function loadOne_gtsp($id_gtsp){
        $sql = "select * from gioitinh_sanpham where id_gioitinh_sp=".$id_gtsp;
        $gtsp = pdo_query_one($sql);
        return $gtsp;
    }

    // cập nhật giới tính sản phẩm
    function update_gtsp($id_gtsp,$ten_gtsp){
        $sql = "update gioitinh_sanpham set gioitinh='".$ten_gtsp."' where id_gioitinh_sp=".$id_gtsp;
        pdo_execute($sql);
    }
?>