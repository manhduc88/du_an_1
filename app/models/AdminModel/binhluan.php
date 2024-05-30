<?php 
    // thêm bình luận
    function insert_binhluan($id_user,$id_sanpham,$noi_dung,$ngay_binhluan){
        $sql = "INSERT INTO binh_luan(id_user,id_sanpham,noi_dung,ngay_binhluan) VALUES ('$id_user','$id_sanpham','$noi_dung','$ngay_binhluan') ";
        pdo_execute($sql);
    };
    // hiển thị bình luận theo sản phẩm
    function loadAll_binhluan($id_sanpham){
         $sql = "select * from binh_luan as a inner join user as b ON a.id_user=b.id_user where a.id_sanpham =".$id_sanpham." order by a.id_binhluan desc" ;
        $listbinhluan = pdo_query($sql);
        return $listbinhluan;
    }
    // xóa bình luận
    function delete_binhluan($id_binhluan){
        $sql = "DELETE   FROM binh_luan  WHERE id_binhluan =".$id_binhluan;
        pdo_execute($sql);  
    }

?>