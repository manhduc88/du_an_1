<?php
    session_start();
    ob_start();
    include "app/models/pdo.php";
    include "app/models/ClientModel.php";
    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
    $listnhomsp= loadAll_nhom_sanpham();
    $listsanphammoi = loadAll_sanpham_moi();
    $listsanphamtop = loadAll_sanpham_top();
    $listsanphamnoibat = loadAll_sanpham_noibat();
    $listmau= loadAll_mau();
    $listsize=loadAll_size();
    $listbaiviet= loadAll_baiviet();
    $listgioitinh= loadAll_gioitinh();
    $hethong= loadOne_hethong();
    include "app/views/Client/header.php";

    if(isset($_GET['act'])){
        $act=$_GET['act'];

        switch($act){

            case "about_us":
                include "app/views/Client/home_about.php";
                
                break;

            case "baiviet":
                $listbv=loadAll_baiviet();
                include "app/views/Client/home_blog.php";
                
                break;




            case "compare":
                include "app/views/Client/compare_home.php";
                
                break;

            case "lienhe":
                if(isset($_SESSION['user'])){
                    $ttuser=loadOne_thongtin_user($_SESSION['user']['id_user']);
                    if(is_array($ttuser)){
                        extract($ttuser);
                     }
                }else {
                    $hoten="";
                    $email="";
                    $sdt="";
                    $id_user=0;
                    
                }
                if(isset($_POST['gui'])&&($_POST['gui'])){
                    $id_user=$_POST['id_user'];
                    $hoten=$_POST['hoten'];
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    $noidung=$_POST['noidung'];
                    insert_lienhe($id_user,$hoten,$email,$sdt,$noidung);
                }
                include "app/views/Client/contact_home.php";
                
                break;
            // xem thông tin tài khoản và có thể dổi thông tin 
            case "taikhoan":
                if(isset($_SESSION['user'])){
                    $user=loadOne_thongtin_user($_SESSION['user']['id_user']);
                    extract($user);
                }
                if(isset($_POST['luu'])&&($_POST['luu'])){
                    $id_user=$_POST['id_user'];
                    $hoten=$_POST['hoten'];
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    update_tt_user($id_user,$hoten,$email,$sdt);
                    $thongbao="Cập nhập thành công !";
                }
                include "app/views/Client/taikhoan.php";
                
                break;
            // đổi mật khẩu
            case "matkhau":
                if(isset($_SESSION['user'])){
                    $user=loadOne_thongtin_user($_SESSION['user']['id_user']);
                    extract($user);
                    
                }
                if(isset($_POST['luu'])&&($_POST['luu'])){
                    $id_user=$_POST['id_user'];
                    $mkcu=$_POST['mkcu'];
                    $mkmoi=$_POST['mkmoi'];
                    $mknl=$_POST['mknl'];
                    if($mkcu!=$pass){
                        $thongbao="Mật khẩu của bạn sai !";
                    }elseif($mkmoi==$mknl && $mkmoi!=$mkcu){
                        update_pass_user($id_user,$mkmoi);
                        $thongbao="Cập nhập thành công !";
                    }
                    elseif($mkmoi!=$mknl){
                        $thongbao="Nhập thông tin không đúng theo yêu cầu !";
                    }else {
                        $thongbao="Yêu cầu điền đầy đủ thông tin !";
                    }


                }
                include "app/views/Client/matkhau.php";
                
                break;
            // xem thông tin địa chỉ mới nhất của người đã đặt hàng 
            case "diachi":
                if(isset($_SESSION['user'])){
                    $ttnn=loadOne_ttnn($_SESSION['user']['id_user']);
                    if($ttnn==null){
                
                        $hoten_nn="";
                        $email_nn="";
                        $diachi_nn="";
                        $sdt_nn="";
                    }else{
                        extract($ttnn);
                    }             
                   }
                include "app/views/Client/diachi.php";
                
                break;
                // hiển thị những sản phẩm theo nhóm sản phẩm
            case "danhsachnhomsp":
                if (!isset($_GET['page'])) {
                    $page = 1;
                    } else {
                    $page = $_GET['page'];
                    }


                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                        $kyw= $_POST['kyw'];         
                }
                else{
                    $kyw="";
                }

                if(isset($_GET['id_nhom_sp'])&&($_GET['id_nhom_sp']>0)){
                    $id_nhom_sp= $_GET['id_nhom_sp'];         

                }
                if(isset($_POST['id_nhomsp'])){
                    $id_nhom_sp= $_POST['id_nhomsp'];         

                }
                    $results = sp1trang_1danhmuc($page,$id_nhom_sp,$kyw);
                    $total_pages = tongtrang_1danhmuc($id_nhom_sp,$kyw);

                    include "app/views/Client/shop_gird_left_all_1nhomsp.php";
                    break;
            // hiển thị tất cả sản phẩm
            case "danhsachsp":
                if (!isset($_GET['page'])) {
                    $page = 1;
                    } else {
                    $page = $_GET['page'];
                    }
                if(isset($_POST['id_nhomsp'])){
                    $id_nhom_sp= $_POST['id_nhomsp'];         

                }else{
                    $id_nhom_sp=0;
                }
                if(isset($_POST['maxgia'])){
                    $maxgia= $_POST['maxgia'];   

                }else {
                    $maxgia=0;
                }
                if(isset($_POST['mingia'])){
                    $mingia= $_POST['mingia'];   

                }else {
                    $mingia=0;
                }
                $results = sp1trang_danhmuc($page,$id_nhom_sp,$maxgia,$mingia);
                $total_pages = tongtrang_danhmuc($id_nhom_sp,$maxgia,$mingia);
                
                include "app/views/Client/shop_gird_left_all_sp.php";
                break;
            case "danhsachgioitinhsp":

                if (!isset($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }
                if(isset($_GET['id_gioitinh'])&&($_GET['id_gioitinh']>0)){
                    $id_gioitinh=$_GET['id_gioitinh'];
                }
                $results = sp1trang_spgt($page,$id_gioitinh);
                $total_pages = tongtrang_spgt($id_gioitinh);
                
                include "app/views/Client/shop_gird_left_all_spgt.php";
                break;
            // hiển thị tất cả sản phẩm mới
            case "danhsachspmoi":
                if (!isset($_GET['page'])) {
                    $page = 1;
                    } else {
                    $page = $_GET['page'];
                    }

                    $results = spmoi1trang($page);
                    $total_pages = tongtrang_sp();
                include "app/views/Client/shop_gird_home_spmoi.php";
                break;
    
            case "dangnhap":
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $user=$_POST['tendangnhap'];
                $pass=$_POST['pass'];
                $checkuser=loadOne_checkuser($user,$pass);
                extract($checkuser);
                if(is_array($checkuser)){   
                    $_SESSION['user']=$checkuser;                   
                    header('location: index.php'); 
                    exit();
                            
                }
                
            }

                include "app/views/Client/sign_in_home.php";
                break;

            case "dangki":
                if(isset($_POST['dangki'])&&($_POST['dangki'])){
                    $ten_dang_nhap=$_POST['tendangnhap'];
                    $pass=$_POST['pass'];
                    $hoten=$_POST['hoten'];
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    $diachi=$_POST['diachi'];
                    insert_user($ten_dang_nhap,$pass,$hoten,$email,$sdt,$diachi);
                    $thongbao='Thêm thành công';
                }
                include "app/views/Client/sign_up_home.php";
                break;
                case "dangxuat":
                    session_unset();
                    header('location: index.php'); 
                    exit();
                    break;
            case "chitietbaiviet":
                if(isset($_GET['id_baiviet'])&&($_GET['id_baiviet']>0)){
                    $id_baiviet=$_GET['id_baiviet'];
                }
                $baiviet=loadOne_baiviet($id_baiviet);
                include "app/views/Client/single_blog_home.php";
                break;

            case "chitietsp":

                if(isset($_GET['id_sanpham'])&&($_GET['id_sanpham']>0)){
                    $id_sanpham=$_GET['id_sanpham'];
                }
                if(isset($_GET['id_nhom_sp'])&&($_GET['id_nhom_sp']>0)){
                    $id_nhom_sp=$_GET['id_nhom_sp'];
                }


                

                $listsize1sp=loadAll_size_1sp($id_sanpham);
                $listmau1sp=loadAll_mau_1sp($id_sanpham);
                $listsptuongtu =loadAll_sanpham_tt($id_nhom_sp);
                $listanhmota=loadAll_anh_mota($id_sanpham);
                $sanpham=loadOne_sanpham($id_sanpham);
                $soluongsp =tong_soluong_sp($id_sanpham);


                include "app/views/Client/single_pro.php";

                break;
            case "addgiohang":
                if(isset($_POST['themgiohang'])&&($_POST['themgiohang'])){
                    $id_sanpham_chinh=$_POST['id_sanpham'];
                    $id_nhom_sp=$_POST['id_nhom_sp'];

                    $id_mau=$_POST['mau'];
                    $id_size=$_POST['size'];
                    $soluong_sp=$_POST['soluong'];
                    $bienthesp=loadOne_bienthe_sp($id_size,$id_mau,$id_sanpham_chinh);
                    extract($bienthesp);
                    $thanhtien=$gia_sanpham*$soluong_sp;
                    $spadd=[$id_sanpham,$ten_sanpham,$gia_sanpham,$hinh_daidien,$ten_mau,$ten_size,$soluong_sp,$thanhtien,$id_bienthe_sp,$id_nhom_sp];
                    array_push($_SESSION['mycart'],$spadd);        
                                            
                    header('location: index.php?act=chitietsp&id_sanpham='.$id_sanpham.'&id_nhom_sp='.$id_nhom_sp.'');   


                }
                if(isset($_POST['muangay'])&&($_POST['muangay'])){
                    $id_sanpham_chinh=$_POST['id_sanpham'];
                    $id_nhom_sp=$_POST['id_nhom_sp'];

                    $id_mau=$_POST['mau'];
                    $id_size=$_POST['size'];
                    $soluong_sp=$_POST['soluong'];
                    $bienthesp=loadOne_bienthe_sp($id_size,$id_mau,$id_sanpham_chinh);
                    extract($bienthesp);
                    $thanhtien=$gia_sanpham*$soluong_sp;
                    $spadd=[$id_sanpham,$ten_sanpham,$gia_sanpham,$hinh_daidien,$ten_mau,$ten_size,$soluong_sp,$thanhtien,$id_bienthe_sp,$id_nhom_sp];
                    array_push($_SESSION['muangay'],$spadd);

                    include "app/views/Client/checkout_home_mn.php";               
                }
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    include "app/views/Client/sign_in_home.php"; 
                }
                break;

            case "home_addgiohang":
                    $id_sanpham_chinh=$_POST['id_sanpham'];
                    $id_nhom_sp=$_POST['id_nhom_sp'];

                    $id_mau=$_POST['mau'];
                    $id_size=$_POST['size'];
                    $soluong_sp=1;
                    echo $id_sanpham_chinh.'-'.$id_nhom_sp.'-'.$id_mau.'-'.$id_size.'-'.$soluong_sp;
                    $bienthesp=loadOne_bienthe_sp($id_size,$id_mau,$id_sanpham_chinh);
                    extract($bienthesp);
                    $thanhtien=$gia_sanpham*$soluong_sp;
                    $spadd=[$id_sanpham,$ten_sanpham,$gia_sanpham,$hinh_daidien,$ten_mau,$ten_size,$soluong_sp,$thanhtien,$id_bienthe_sp,$id_nhom_sp];
                    array_push($_SESSION['mycart'],$spadd);    
                    header('location: index.php?act=giohang');
                    break;
                                            
            case 'xoagiohang':
    
                if(isset($_GET['id_giohang'])){
                    $phantu=$_GET['id_giohang']-1;
                    array_splice($_SESSION['mycart'],$phantu,1);
                }
                else {
                    $_SESSION['mycart']=[];
                }
                header('location: index.php?act=giohang');
                exit();
                break; 
            case 'giohang':
                if(isset($_POST['apdung'])&&($_POST['apdung'])){
                    $ma_km=$_POST['ma_km'];
                    $idkm=0;
                    $ngay_hientai=date("Y/m/d");
                    $km=loadOne_checkkm($ma_km,$idkm,$ngay_hientai);
                    if($km==null){
                        $thongbao="Mã giảm giá hết hạn !";
                        $dd="";
                    }else {
                        $thongbao="";
                        extract($km); 
                    }
                    

                }
                else {
                    $dd="";
                    $thongbao="";
                }
                
                include "app/views/Client/home_cart.php";
                break;                    
            case "donhang":
                if(isset($_GET['id_km'])){
                $ma_km="";
                $ngay_hientai=date("Y/m/d");
                $km=loadOne_checkkm($ma_km,$_GET['id_km'],$ngay_hientai);
                extract($km); 
                }
                include "app/views/Client/checkout_home.php";
                break;
            case 'billcomfirm':
                if(isset($_POST['dathang'])&&($_POST['dathang'])){
                    $hoten=$_POST['hoten'];
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    $pttt=$_POST['pttt'];
                    $diachi=$_POST['diachi'];
                    $ngaydathang=date('d/m/Y');
                    $id_km=$_POST['id_km'];
                    $ma_km="";
                    $ngay_hientai=date("Y/m/d");
                    $km=loadOne_checkkm($ma_km,$id_km,$ngay_hientai);
                    if($km==null){
                        $pt_km=0;
                        $id_km=0;
                    }else{
                        $pt_km=$km['phantram_km'];
                        extract($km); 
                    }
                    $tongdonhang=tongdonhang($pt_km);
                    if(isset($_SESSION['user'])){
                    $id_donhang=insert_bill($_SESSION['user']['id_user'],$hoten,$email,$sdt,$diachi,$pttt,$ngaydathang,$tongdonhang,$id_km);
                    }
                    foreach ( $_SESSION['mycart'] as $cart){
                        
                        if(isset($_SESSION['user'])){
                            $sanpham=loadOne_sanpham($cart[0]);
                            $bienthesp=loadOne_bienthesp($cart[8]);
                            extract($sanpham);
                            extract($bienthesp);
                            $lb=$luotban+1;
                            $sl=$soluong-$cart[6];
                            update_soluong_bienthesp($cart[8],$sl);
                            update_luotban_sanpham($cart[0],$lb);
                            
                            
                            
                            insert_giohang($_SESSION['user']['id_user'],$cart[8],$cart[3],$cart[1],$cart[4],$cart[5],$cart[2],$cart[6],$cart[7],$id_donhang);
                        }
                        
                    }
                    $_SESSION['mycart']=[];
                }
                    
                if(isset($_POST['pttt'])&&($_POST['pttt']==1)){                 
                    header("location: index.php?act=vnpay");         
                }

                if(isset($_GET['id_donhang'])){
                    $id_donhang=$_GET['id_donhang'];
                    $id_km=$_GET['id_km'];
                    $ma_km="";
                    $ngay_hientai=date("Y/m/d");
                    $km=loadOne_checkkm($ma_km,$id_km,$ngay_hientai);
                    if($km==null){
                        $id_km=0;
                    }else{
                        extract($km); 
                    }
                
                    

                }
                
                
                $donhang=loadOne_donhang($id_donhang);
                $donhangct=loadAll_giohang($id_donhang);
                include "app/views/Client/billcomfirm.php";
                break;
            case "vnpay":
                include "app/views/Client/vnpay.php";
                break;
            case "mydh":
                if(isset($_SESSION['user'])) $id_user=$_SESSION['user']['id_user'];
                else $id_user="";
                
                $listdonhang=loadAll_dsdonhang($id_user);
                include "app/views/Client/mydonhang.php";
                break;
            case "huydh":
                if(isset($_GET['id_donhang'])&&($_GET['id_donhang'])){
                update_huydonhang($_GET['id_donhang']);
                }
                if(isset($_SESSION['user'])) $id_user=$_SESSION['user']['id_user'];
                else $id_user="";
                
                $listdonhang=loadAll_dsdonhang($id_user);
                include "app/views/Client/mydonhang.php";
                break;
            case "chitietdh":
                if(isset($_GET['id_donhang'])&&($_GET['id_donhang'])){
                    $listctdh=loadAll_chitietdh($_GET['id_donhang']);
                    $donhang=loadOne_donhang($_GET['id_donhang']);
                    $ma_km="";
                    
                    $ngay_hientai=date("Y/m/d");
                    $km=loadOne_checkkm($ma_km,$donhang['id_km'],$ngay_hientai);
                    if($km==null){
                        
                    }else {
                        extract($km);
                    }

                    
                    extract($donhang);
                    }

                include "app/views/Client/chitietdh.php";
                break;
            default:
                include "app/views/Client/error_home.php";
                break;
                                
        }
    }
else {
 include "app/views/Client/home.php";
}
include "app/views/Client/bando_home.php";

    include "app/views/Client/footer.php";
    ob_end_flush();
?>