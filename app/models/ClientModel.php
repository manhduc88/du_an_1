<?php
    function loadAll_nhom_sanpham(){
        $sql = " SELECT * FROM nhom_sanpham order by id_nhom_sp desc";
        $listnhomsp = pdo_query($sql);
        return $listnhomsp;
    }
    function loadAll_sanpham_moi(){
        $sql = " SELECT * FROM san_pham as a INNER JOIN nhom_sanpham as b ON a.id_nhom_sp=b.id_nhom_sp INNER JOIN gioitinh_sanpham as c On a.id_gioitinh_sp=c.id_gioitinh_sp order by id_sanpham desc limit 0,4 ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    } 
    function loadAll_mau(){
        $sql = " SELECT * FROM mau_sp ";
        $listmau = pdo_query($sql);
        return $listmau;
    } 
    function loadAll_size(){
        $sql = " SELECT * FROM size ";
        $listmau = pdo_query($sql);
        return $listmau;
    } 
    function loadAll_gioitinh(){
        $sql = " SELECT * FROM gioitinh_sanpham ";
        $listgioitinh = pdo_query($sql);
        return $listgioitinh;
    } 
    function loadAll_sanpham_top(){
        $sql = " SELECT * FROM san_pham as a INNER JOIN nhom_sanpham as b ON a.id_nhom_sp=b.id_nhom_sp INNER JOIN gioitinh_sanpham as c On a.id_gioitinh_sp=c.id_gioitinh_sp where 1 order by luotban desc limit 0,4 ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    } 
    function loadAll_sanpham_noibat(){
        $sql = " SELECT * FROM san_pham as a INNER JOIN nhom_sanpham as b ON a.id_nhom_sp=b.id_nhom_sp INNER JOIN gioitinh_sanpham as c On a.id_gioitinh_sp=c.id_gioitinh_sp where 1 order by luotxem desc limit 0,4 ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    } 
    function sp1trang($page){

        $sql = "SELECT * FROM san_pham as a INNER JOIN nhom_sanpham as b ON a.id_nhom_sp=b.id_nhom_sp INNER JOIN gioitinh_sanpham as c On a.id_gioitinh_sp=c.id_gioitinh_sp  LIMIT :offset, :results_per_page";
        return $results=pdo_execute_return_sosp1trang($sql,$page);
    }
    function spmoi1trang($page){

        $sql = "SELECT * FROM san_pham as a INNER JOIN nhom_sanpham as b ON a.id_nhom_sp=b.id_nhom_sp INNER JOIN gioitinh_sanpham as c On a.id_gioitinh_sp=c.id_gioitinh_sp order by a.id_sanpham desc  LIMIT :offset, :results_per_page ";
        return $results=pdo_execute_return_sosp1trang($sql,$page);
    }
    function tongtrang_sp(){
        $sql = "SELECT COUNT(*) as total FROM san_pham ";
        return $total_pages = pdo_execute_return_tongtrang($sql);
          
    }
    function sp1trang_1danhmuc($page,$id_nhom_sp,$kyw){

       
        if($kyw!=""){
            $sql=" SELECT * FROM  san_pham as a INNER JOIN nhom_sanpham as b ON a.id_nhom_sp=b.id_nhom_sp INNER JOIN gioitinh_sanpham as c On a.id_gioitinh_sp=c.id_gioitinh_sp where a.ten_sanpham like '%".$kyw."%' order by id_sanpham desc limit 0,9  ";
            return $results=pdo_query($sql);
        }
        if(isset($id_nhom_sp)&&($id_nhom_sp>0)){
            $sql=" SELECT * FROM  san_pham as a INNER JOIN nhom_sanpham as b ON a.id_nhom_sp=b.id_nhom_sp INNER JOIN gioitinh_sanpham as c On a.id_gioitinh_sp=c.id_gioitinh_sp where 1 and b.id_nhom_sp=".$id_nhom_sp."  LIMIT :offset, :results_per_page";
            return $results=pdo_execute_return_sosp1trang($sql,$page);

        }
    }
    function tongtrang_1danhmuc($id_nhom_sp,$kyw){
        $sql = "SELECT COUNT(*) as total FROM san_pham as a INNER JOIN nhom_sanpham as b ON a.id_nhom_sp=b.id_nhom_sp where b.id_nhom_sp=".$id_nhom_sp."  ";
        if($kyw!=""){
            return $total_pages=1;
        }
        if($id_nhom_sp>0){
            return $total_pages = pdo_execute_return_tongtrang($sql);}

        
          
    }
    // function sp1trang_1danhmuc($page,$id_nhom_sp){

    //     $sql = "SELECT * FROM  san_pham as a INNER JOIN nhom_sanpham as b ON a.id_nhom_sp=b.id_nhom_sp INNER JOIN gioitinh_sanpham as c On a.id_gioitinh_sp=c.id_gioitinh_sp where b.id_nhom_sp=".$id_nhom_sp."  LIMIT :offset, :results_per_page";
    //     return $results=pdo_execute_return_sosp1trang($sql,$page);
    // }
    // function tongtrang_1danhmuc($id_nhom_sp){
    //     $sql = "SELECT COUNT(*) as total FROM san_pham  where id_nhom_sp=".$id_nhom_sp." ";
    //     return $total_pages = pdo_execute_return_tongtrang($sql);
          
    // }
    // tất cả danh mục
    function sp1trang_danhmuc($page,$id_nhom_sp,$maxgia,$mingia){


        $sql = "SELECT * FROM  san_pham as a INNER JOIN nhom_sanpham as b ON a.id_nhom_sp=b.id_nhom_sp INNER JOIN gioitinh_sanpham as c On a.id_gioitinh_sp=c.id_gioitinh_sp where 1";
        if($id_nhom_sp>0){
            $sql.=" and  a.id_nhom_sp=".$id_nhom_sp."  ";
        }
        if($maxgia>0 && $mingia>0){
            $sql.=" and a.gia between ".$mingia." and ".$maxgia."";
        }
        if($id_nhom_sp>0 || $maxgia>0 || $mingia>0){
            $sql.=" order by a.id_sanpham limit 0,9";
            return $results=pdo_query($sql);}
        else {
            $sql.=" LIMIT :offset, :results_per_page";
            return $results=pdo_execute_return_sosp1trang($sql,$page);
        }
    }

    function tongtrang_danhmuc($id_nhom_sp,$maxgia,$mingia){
        $sql = "SELECT COUNT(*) as total  FROM san_pham as a  ";
        if($id_nhom_sp>0){
            $sql.=" where a.id_nhom_sp=".$id_nhom_sp."  ";
            
        }
        if($maxgia>0 && $mingia>0){
            $sql.=" where a.gia between ".$mingia." and ".$maxgia."";
        }
        if($id_nhom_sp>0 || $maxgia>0 || $mingia>0){
            return $total_pages = 1;
        }else{
            return $total_pages = pdo_execute_return_tongtrang($sql);
        }
        
    }
    function sp1trang_spgt($page,$id_gioitinh){

        $sql = "SELECT * FROM  san_pham as a INNER JOIN nhom_sanpham as b ON a.id_nhom_sp=b.id_nhom_sp INNER JOIN gioitinh_sanpham as c On a.id_gioitinh_sp=c.id_gioitinh_sp where a.id_gioitinh_sp=".$id_gioitinh."  LIMIT :offset, :results_per_page";
        return $results=pdo_execute_return_sosp1trang($sql,$page);
    }
    function tongtrang_spgt($id_gioitinh){
        $sql = "SELECT COUNT(*) as total FROM san_pham  where id_gioitinh_sp=".$id_gioitinh." ";
        return $total_pages = pdo_execute_return_tongtrang($sql);
          
    }
        // hiện thị thông tin sản phẩm cần sửa
        function loadOne_sanpham($id_sanpham){
            $sql = "select * from san_pham as a INNER JOIN nhom_sanpham as b ON a.id_nhom_sp=b.id_nhom_sp INNER JOIN gioitinh_sanpham as c On a.id_gioitinh_sp=c.id_gioitinh_sp  where id_sanpham=".$id_sanpham." ";
            $sanpham = pdo_query_one($sql);
            return $sanpham;
        }
        
        function loadAll_anh_mota($id_sp){
            $sql = "select * from thuvien_hinh_sanpham  where id_sanpham=".$id_sp;
            $anhmota = pdo_query($sql);
            return $anhmota;
        }
        function loadAll_sanpham_tt($id_nhom_sp){
            $sql = " SELECT * FROM san_pham as a INNER JOIN nhom_sanpham as b ON a.id_nhom_sp=b.id_nhom_sp INNER JOIN gioitinh_sanpham as c On a.id_gioitinh_sp=c.id_gioitinh_sp where a.id_nhom_sp=".$id_nhom_sp." order by a.id_nhom_sp desc limit 0,4 ";
            $listsanpham = pdo_query($sql);
            return $listsanpham;
        } 
        function loadOne_hethong(){
            $sql = "select * from hethong order by id_hethong limit 0,1 ";
            $hethong = pdo_query_one($sql);
            return $hethong;
        }
    // check tài khoản để đăng nhập
    function loadOne_checkuser($user,$pass){
        $sql = " SELECT * FROM user as a INNER JOIN vai_tro as b ON a.id_vaitro=b.id_vaitro WHERE ten_dang_nhap='".$user."' AND pass='".$pass."'";
        $checkuser = pdo_query_one($sql);
        return $checkuser;
    } 
    function loadAll_baiviet(){
        $sql = " SELECT * FROM baiviet ";
        $listbaiviet = pdo_query($sql);
        return $listbaiviet;
    } 
          // hiện thị thông tin sản phẩm cần sửa
          function loadOne_baiviet($id_baiviet){
            $sql = "select * from baiviet where id_baiviet=".$id_baiviet;
            $baiviet = pdo_query_one($sql);
            return $baiviet;
        }
        function insert_user($ten_dang_nhap,$pass,$hoten,$email,$sdt,$diachi){
            $sql = " INSERT INTO user(ten_dang_nhap,pass,hoten,email,sdt,diachi,id_vaitro) VALUES ('$ten_dang_nhap','$pass','$hoten','$email','$sdt','$diachi','2')";
            pdo_execute($sql);
          }
          function loadAll_mau_1sp($id_sanpham){
            $sql = "select * from bienthe_sp as a INNER JOIN mau_sp as b  ON a.id_mau = b.id_mau  where a.id_sanpham=".$id_sanpham." group by a.id_mau,ten_mau order by a.id_mau desc ";
            $bienthesp = pdo_query($sql);
            return $bienthesp;
        }
        function loadAll_size_1sp($id_sanpham){
            $sql = "select * from bienthe_sp as a INNER JOIN size as b  ON a.id_size = b.id_size where a.id_sanpham=".$id_sanpham." group by a.id_size order by a.id_size desc ";
            $bienthesp = pdo_query($sql);
            return $bienthesp;
        }
        function loadOne_bienthe_sp($id_size,$id_mau,$id_sanpham_chinh){
            $sql = "select * from bienthe_sp as a INNER JOIN size as b  ON a.id_size = b.id_size INNER JOIN mau_sp as c  ON a.id_mau = c.id_mau INNER JOIN san_pham as d  ON a.id_sanpham = d.id_sanpham where a.id_mau=".$id_mau." and a.id_size=".$id_size." and a.id_sanpham=".$id_sanpham_chinh."";
            $bienthesp = pdo_query_one($sql);
            return $bienthesp;
        }
        function tong_soluong_sp($id_sanpham){
            $sql = "select SUM(soluong) as soluongsp from bienthe_sp  where id_sanpham=".$id_sanpham."";
            $soluongsp = pdo_query($sql);
            return $soluongsp;
        }
        function tongdonhang($phantram_km){  
            $tong=0;
            $phiship=0;
            $tongphu=0;
            foreach ($_SESSION['mycart'] as $cart){
                $thanhtien=$cart[2]*$cart[6]; 
                $tongphu+=$thanhtien;
                
                $tong=$tongphu+$phiship-($tongphu*($phantram_km/100));
            }
            return $tong;
         
          }
          // thông tin người nhận gần nhất mới đặt 
          function loadOne_ttnn($id_user){
            $sql ="SELECT * FROM don_hang where id_user=".$id_user." order by id_donhang desc ";
            $ttnn = pdo_query_one($sql);
           
            
            if($ttnn==is_null($ttnn)){
                $ttnn1=null;

                return $ttnn1;
            }elseif($ttnn!=is_null($ttnn)){
                return $ttnn;
            }
            
        }
          function insert_bill($id_user,$hoten,$email,$sdt,$diachi,$pttt,$ngaydathang,$tongdonhang,$id_km){
            $sql = "INSERT INTO don_hang(id_user,hoten_nn,diachi_nn,email_nn,sdt_nn,ngay_dat_hang,tong_tien,pttt,id_km) VALUES ('$id_user','$hoten','$diachi','$email','$sdt','$ngaydathang','$tongdonhang','$pttt','$id_km') ";
            return pdo_execute_return_lastInsertId($sql);
         }

         function insert_giohang($id_user,$id_bienthe_sp,$hinh,$ten_sp,$ten_mau,$ten_size,$gia,$soluong_sp,$thanhtien,$id_donhang){
            $sql = " INSERT INTO `chitiet_donhang` (`id_user`, `id_bienthe_sp`, `hinh`, `ten_sp`, `ten_mau`, `ten_size`, `gia`, `soluong`, `thanhtien`, `id_donhang`) VALUES ('$id_user','$id_bienthe_sp','$hinh','$ten_sp','$ten_mau','$ten_size','$gia','$soluong_sp','$thanhtien','$id_donhang')";
            pdo_execute($sql);
          }
          function loadOne_donhang($id_donhang){
            $sql = "select * from don_hang where id_donhang=".$id_donhang;
            $donhang = pdo_query_one($sql);
            return $donhang;
        }
        function loadOne_donhang_moi(){
            $sql = "select * from don_hang where 1 order by id_donhang desc limit 0,1";
            $donhang = pdo_query_one($sql);
            return $donhang;
        }
        function loadAll_giohang($id_donhang){
            $sql = " SELECT * FROM chitiet_donhang where id_donhang=".$id_donhang;
            $donhangct = pdo_query($sql);
            return $donhangct;
        } 
            // tìm kiếm đơn hàng theo iduser
    function loadAll_dsdonhang($id_user){
         
        if($id_user>0){
            $sql = "SELECT * FROM don_hang ";
            $sql.=" where 1 and id_user ='".$id_user."'";
            $sql.=" order by id_donhang desc";
            return $listdonhang = pdo_query($sql);
        }
        if($id_user=""){
            
        }
        
        
  
    }
    function loadAll_giohang_count($id_donhang){
        $sql = "select * from chitiet_donhang where id_donhang=".$id_donhang;
        $giohang = pdo_query($sql);
        return sizeof($giohang);
    }
    // trạng thái đơn hàng
    function get_ttdh($n){
        switch ($n){
          case '1':
            $tt="Chờ xác nhận";
            break;
          case '2':
            $tt="Đã xác nhận";
            break;
          case '3':
            $tt="Đang giao hàng";
            break;      
          case '4':
            $tt="Hoàn tất";
            break;
        case '5':
            $tt="Đã hủy đơn";
            break;
          default:
            $tt="đơn chờ xác nhận";
            break;
        }
        return $tt;
      }
      //phương thức thanh toán
      function get_pttt($n){
        switch ($n){
          case '1':
            $pt="Thanh toán bằng VNPAY";
            break;
          case '2':
            $pt="Thanh toán khi nhận hàng";
            break;      
    
        }
        return $pt;
      }
          // hiện thị thông tin sản phẩm cần sửa
    function loadOne_bienthesp($id_bienthe_sp){
        $sql = "select * from bienthe_sp as a INNER JOIN mau_sp as b ON a.id_mau=b.id_mau INNER JOIN size as c On a.id_size=c.id_size where id_bienthe_sp=".$id_bienthe_sp;
        $sanpham = pdo_query_one($sql);
        return $sanpham;
    }
      //cập nhập lượt xem sản phẩm
    function update_luotxem_sanpham($id_sanpham,$view){
        $sql = "update san_pham set luotxem=".$view." where id_sanpham=".$id_sanpham;
        pdo_execute($sql);
    }
    // cập nhập lượt bán của sản phẩm
    function update_luotban_sanpham($id_sanpham,$luotban){
        $sql = "update san_pham set luotban=".$luotban." where id_sanpham=".$id_sanpham;
        pdo_execute($sql);
    }
    // cập nhập sô lượng biến thể sản phẩm ( giảo số lượng size khi người dùng mua hàng thành công)
    function update_soluong_bienthesp($id_bienthe_sp,$soluong){
        $sql = "update bienthe_sp set soluong=".$soluong." where id_bienthe_sp=".$id_bienthe_sp;
        pdo_execute($sql);
    }
    // hiển thị thông tin người dùng đã đãng nhập trong trang liên hệ
    function loadOne_thongtin_user($id_user){
        $sql = " SELECT * FROM user WHERE id_user=".$id_user;
        $user = pdo_query_one($sql);
        return $user;
    } 
    // gửi liên hệ từ người dùng
    function insert_lienhe($id_user,$hoten,$email,$sdt,$noidung){
        $sql = " INSERT INTO `lien_he` (`id_user`, `ten`, `email`, `sdt`, `noi_dung`) VALUES ('$id_user', '$hoten', '$email', '$sdt', '$noidung')";
        pdo_execute($sql);
      }
    // gửi yểu cầu hủy đơn hàng từ khách hàng
    function update_huydonhang($id_donhang){
        $sql = "update don_hang set trang_thai=5 where id_donhang=".$id_donhang;
        pdo_execute($sql);
    }
    //chi tiết đon hàng
    function loadAll_chitietdh($id_donhang){
        $sql ="SELECT * FROM chitiet_donhang where id_donhang=".$id_donhang;
        $listdhct = pdo_query($sql);
        return $listdhct;
    }
    //tìm id_sanpham từ id_bienthe_sp
    function loadOne_idsp($id_bienthe_sp){
        $sql = " SELECT * FROM bienthe_sp WHERE id_bienthe_sp=".$id_bienthe_sp;
        $bienthesp = pdo_query_one($sql);
        return $bienthesp;
    } 
    //cập nhập thông tin người dùng 
    function update_tt_user($id_user,$hoten,$email,$sdt){
        $sql = "update user set hoten='".$hoten."',email='".$email."',sdt='".$sdt."' where id_user=".$id_user;
        pdo_execute($sql);
    }
    //cập nhập mật khẩu người dùng 
    function update_pass_user($id_user,$mkmoi){
        $sql = "update user set pass=".$mkmoi." where id_user=".$id_user;
        pdo_execute($sql);
    }
    //kiểm tra có tồn tại mã khuyễn mã 
    function loadOne_checkkm($ma_km,$id_km,$ngay_hientai){
        if($ma_km!=""){
            $sql = " SELECT * FROM khuyenmai  WHERE ma_km='".$ma_km."' AND ngay_batdau<='".$ngay_hientai."' AND ngay_ketthuc>='".$ngay_hientai."' ";
            $checkkm = pdo_query_one($sql);
            if($checkkm==is_null($checkkm)){
                $checkkm=null;

                return $checkkm;
            }elseif($checkkm!=is_null($checkkm)){
                return $checkkm;
            }
            
        }
        if($id_km>0){
            $sql = " SELECT * FROM khuyenmai  WHERE id_km='".$id_km."' AND ngay_batdau<='".$ngay_hientai."' AND ngay_ketthuc>='".$ngay_hientai."' ";
            $checkkm = pdo_query_one($sql);
            return $checkkm;
        }
        if($ma_km="" || $id_km=0){
            $checkkm=null;

            return $checkkm;
        }
    } 

?>
