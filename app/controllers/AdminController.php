<?php
   session_start();
   include "../views/Admin/menuleft.php";
   include "../models/pdo.php";
   include "../models/AdminModel/bienthesp.php";
   include "../models/AdminModel/user.php";
   include "../models/AdminModel/hethong.php";
   include "../models/AdminModel/baiviet.php";
   include "../models/AdminModel/banner.php";
   include "../models/AdminModel/donhang.php";
   include "../models/AdminModel/lienhe.php";
   include "../models/AdminModel/binhluan.php";
   include "../models/AdminModel/banner_con.php";
   include "../models/AdminModel/khuyenmai.php";
   include "../models/AdminModel/nhomsp.php";
   include "../models/AdminModel/sanpham.php";
   include "../models/AdminModel/vaitro.php";
   include "../models/AdminModel/gioitinh_sp.php";
   include "../models/AdminModel/mausp.php";
   include "../models/AdminModel/size.php";
   include "../models/AdminModel/thongke.php";




   if(isset($_GET['act'])){
    $act=$_GET['act'];

    switch ($act){
      case 'danhsachsanpham':
        $listsanpham = loadAll_sanpham();
        include "../views/Admin/sanpham/list.php";
        break;   
    // danh sách biến thể sản phẩm
    case 'danhsachbienthesp':

        if(isset($_GET['id_sanpham']) &&(($_GET['id_sanpham'])>0)){
            $bienthesp=loadOne_biethe_sp($_GET['id_sanpham']);
            }
            include "../views/Admin/bienthe_sanpham/list.php";
            break; 
    // thêm biến thể sản phẩm
    case 'addbienthesp':
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            $id_sanpham=$_POST['id_sanpham'];
            $gia=$_POST['gia'];
            $id_mau=$_POST['id_mau'];
            $id_size=$_POST['id_size'];
            $soluong=$_POST['soluong'];
            insert_bienthe_sp($id_sanpham,$gia,$id_mau,$id_size,$soluong);
            $thongbao="Thêm thành công ";
        }
        $listsanpham = loadAll_sanpham();
        $listbienthemau = loadAll_bienthe_mau(); 
        $list_size = Load_all_size();
        include "../views/Admin/bienthe_sanpham/add.php";
        break;
    // xóa biến thể sản phẩm 
        
    case 'xoabtsp':
        if(isset($_GET['id_bienthe_sp']) &&(($_GET['id_bienthe_sp'])>0)){
            $id_sp = delete_bienthe_sp($_GET['id_bienthe_sp'],$_GET['id_sanpham']);
            
        }
        $bienthesp=loadAll_bienthe_sp($id_sp) ;   
        include "../views/Admin/bienthe_sanpham/list.php";
        break;
    // sửa biến thể sản phẩm
    case 'suabtsp':
        if(isset($_GET['id_bienthe_sp'])&&($_GET['id_bienthe_sp']>0)){
            $bienthesp=loadOne_bienthe_sp($_GET['id_bienthe_sp']);   
        }
        $listbienthemau = loadAll_bienthe_mau(); 
        $list_size = Load_all_size();
        include "../views/Admin/bienthe_sanpham/update.php";
        break;
    // update biến thể sản phẩm
    case 'updatebtsp':
        if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
            $id_sanpham=$_POST['id_sanpham'];
            $id_bienthe_sp=$_POST['id_bienthe_sp'];
            $gia=$_POST['gia'];
            $id_mau=$_POST['id_mau'];
            $id_size=$_POST['id_size'];
            $soluong=$_POST['soluong'];
            $id_sp=update_bienthe_sp($id_sanpham,$id_bienthe_sp,$gia,$id_mau,$id_size,$soluong);
        }
        $bienthesp=loadAll_bienthe_sp($id_sp);

        include "../views/Admin/bienthe_sanpham/list.php";
        break;
    // danh sách ảnh mô tả sản phẩm
    case 'anhmota':

    if(isset($_GET['id_sanpham']) &&(($_GET['id_sanpham'])>0)){
        $anhmota=loadAll_anh_mota($_GET['id_sanpham']);
        }
        include "../views/Admin/sanpham/list_anhmota.php";
        break; 
        case 'themanhmota':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                if(isset($_FILES['hinh_mota'])){
                    $files=$_FILES['hinh_mota'];
                    $file_names=$files['name'];
                    foreach ($file_names as $key => $value){
                        move_uploaded_file($files['tmp_name'][$key],'../../uploads/'.$value);
                    }
                }
                $id_sp=$_POST['id_sanpham'];
                foreach ($file_names as $key => $value){
                insert_anh_mota($id_sp,$value);
                }
            }
            include "../views/Admin/sanpham/add_anhmota.php";
            break;   
    // xóa ảnh mota san phẩm
    case 'xoatvasp':
        if(isset($_GET['id_tvasp']) &&(($_GET['id_tvasp'])>0)){
            $id_sp = delete_thuvien_anhsp($_GET['id_tvasp'],$_GET['id_sanpham']);
            
        }
        $anhmota=loadAll_anh_mota($id_sp) ;   
        include "../views/Admin/sanpham/list_anhmota.php";
        break;
    // xóa sản phẩm

    case 'xoasp':
        if(isset($_GET['id_sanpham']) &&(($_GET['id_sanpham'])>0)){
            delete_sanpham($_GET['id_sanpham']);
            delete_all_tva_sanpham($_GET['id_sanpham']);
            delete_all_bienthe_sanpham($_GET['id_sanpham']);
        }
        $listsanpham = loadAll_sanpham();
        include "../views/Admin/sanpham/list.php";
        break;

    // Sửa sản phẩm
    case 'suasp':
        if(isset($_GET['id_sanpham']) &&(($_GET['id_sanpham'])>0)){
            $sanpham=loadOne_sanpham($_GET['id_sanpham']);
        }
        $listnhomsp = loadAll_nhom_sanpham();
        $listgioitinhsp = loadAll_gioitinh_sp();
        include "../views/Admin/sanpham/update.php";
        break;
    // cập nhấp sản phẩm
    case 'updatesp':
        if(isset($_POST['capnhapsp'])&&($_POST['capnhapsp'])){
            $id_sanpham=$_POST['id_sanpham'];
            $ten=$_POST['tensp'];
            $gia=$_POST['gia'];
            $mota=$_POST['mota'];
            $id_nhom_sp=$_POST['id_nhomsp'];
            $id_gioitinh_sp=$_POST['id_gioitinhsp'];

            if(isset($_FILES['hinh_daidien']['name'])&&($_FILES['hinh_daidien']['name']!="")){
                $hinh_daidien=$_FILES['hinh_daidien']['name'];
                $dir="../../uploads/";
                $upload=$dir.basename($_FILES['hinh_daidien']['name']);
                if(move_uploaded_file($_FILES['hinh_daidien']['tmp_name'],$upload)){

                }
                else {
                    
                }
            }
            else{
                $hinh_daidien=$_POST['tenhinh'];
            }
            update_sanpham($id_sanpham,$ten,$gia,$mota,$id_nhom_sp,$id_gioitinh_sp,$hinh_daidien);
            $thongbao="cập nhập thành công";
        }
        $listnhomsp = loadAll_nhom_sanpham();
        $listgioitinhsp = loadAll_gioitinh_sp();
        $listsanpham = loadAll_sanpham();
        include "../views/Admin/sanpham/list.php";
        break;
    //thêm mới sản phẩm    
    case 'addsanpham':
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            $ten=$_POST['tensp'];
            $gia=$_POST['gia'];
            $mota=$_POST['mota'];
            $id_nhom_sp=$_POST['id_nhomsp'];
            $id_gioitinh_sp=$_POST['id_gioitinhsp'];
            $hinh_daidien=$_FILES['hinh_daidien']['name'];
            $dir="../../uploads/";
            $upload=$dir.basename($_FILES['hinh_daidien']['name']);
            if(move_uploaded_file($_FILES['hinh_daidien']['tmp_name'],$upload)){

            }
            if(isset($_FILES['hinh_daidiens'])){
                $files=$_FILES['hinh_daidiens'];
                $file_names=$files['name'];
                foreach ($file_names as $key => $value){
                    move_uploaded_file($files['tmp_name'][$key],'../../uploads/'.$value);
                }
            }
            $id_sp=insert_sanpham($ten,$gia,$mota,$id_nhom_sp,$id_gioitinh_sp,$hinh_daidien);
            foreach ($file_names as $key => $value){
            insert_anh_mota($id_sp,$value);
            }
            $thongbao="Thêm thành công ";
        }
        $listnhomsp = loadAll_nhom_sanpham();
        $listgioitinhsp = loadAll_gioitinh_sp();
        include "../views/Admin/sanpham/add.php";
        break;
        
    // hiển thị danh sách nhóm sản phẩm 
    case 'dachsachnhomsp':
        $listnhomsp = loadAll_nhom_sanpham();
        include "../views/Admin/nhom_sanpham/list.php";
        break;
    case 'xoanhomsp':
        if(isset($_GET['id_nhom_sp']) &&(($_GET['id_nhom_sp'])>0)){
            delete_nhom_sanpham($_GET['id_nhom_sp']);
        }
        $listnhomsp = loadAll_nhom_sanpham();
        include "../views/Admin/nhom_sanpham/list.php";

        break;
    // thêm nhóm sản phẩm mới
    case 'addnhomsanpham':
        if(isset($_POST['themmoi_nhomsp'])&&($_POST['themmoi_nhomsp'])){
            $ten_nhomsp=$_POST['ten_nhomsp'];
            insert_nhom_sanpham($ten_nhomsp);
            $thongbao="Thêm thành công";
        }
        include "../views/Admin/nhom_sanpham/add.php";
        break;
    case 'suanhomsp':
        if(isset($_GET['id_nhom_sp']) &&(($_GET['id_nhom_sp'])>0)){
            $nhomsp=loadOne_nhom_sanpham($_GET['id_nhom_sp']);
        }
        $listnhomsp = loadAll_nhom_sanpham();
        include "../views/Admin/nhom_sanpham/update.php";
        break;
    case 'updatenhomsp':
        if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
            $id_nhom_sp=$_POST['id_nhom_sp'];
            $ten_nhomsp=$_POST['ten_nhomsp'];
            update_nhom_sanpham($id_nhom_sp,$ten_nhomsp);
            $thongbao="Cập nhập thành công";
            }
        $listnhomsp = loadAll_nhom_sanpham();
        include "../views/Admin/nhom_sanpham/list.php";
        break;
    // hiện thị danh sách các màu 
    case 'dachsachmausp':
        $listbienthemau = loadAll_bienthe_mau();
        include "../views/Admin/mau_sac/list.php";
        break;
    // thêm mới màu sản phẩm
    case 'addmau':
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            $ten_mau=$_POST['ten_mau'];
            insert_bienthe_mau($ten_mau);
            $thongbao="Thêm thành công";
        }
        $listsanpham = loadAll_id_sanpham();
        include "../views/Admin/mau_sac/add.php";
        break;
    // xóa màu
    case 'xoamau':
        if(isset($_GET['id_mau']) &&(($_GET['id_mau'])>0)){
            delete_bienthe_mau($_GET['id_mau']);
        }
        $listbienthemau = loadAll_bienthe_mau(); 
        include "../views/Admin/mau_sac/list.php";

            break;
    // list giới tính sản phẩm
    case "danhsachgioitinhsp":
        $danhsachgioitinhsp = loadAll_gioitinh_sp();
        include "../views/Admin/gioitinh_sanpham/list.php";
        break;
    // thêm giới tính sản phẩm
    case 'addgioitinhsanpham':
        if(isset($_POST['themgtsp']) && ($_POST['themgtsp']!="")){
            $ten_gtsp = $_POST['tengtsp'];
            insert_gtsp($ten_gtsp);
            $thongbao = "Thêm thành công";
        }
        include "../views/Admin/gioitinh_sanpham/add.php";
        break;
    // xóa giới tính sản phẩm
    case "xoagtsp":
        if(isset($_GET['id_gtsp']) && ($_GET['id_gtsp']!="")){
            delete_gtsp($_GET['id_gtsp']);
        }
        $danhsachgioitinhsp = loadAll_gioitinh_sp();
        include "../views/Admin/gioitinh_sanpham/list.php";
        break;
    // sửa giới tính sản phảm
    case 'suagtsp':
        if(isset($_GET['id_gtsp']) && ($_GET['id_gtsp']!="")){
            $gtsp =loadOne_gtsp($_GET['id_gtsp']);
        }
        $danhsachgioitinhsp = loadAll_gioitinh_sp();
        include "../views/Admin/gioitinh_sanpham/update.php";
        break;

    // cập nhật giới tính sản phẩm
    case "updategtsp":
        if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
            $id_gtsp = $_POST['id_gtsp'];
            $gtsp = $_POST['ten_gtsp'];
            update_gtsp($id_gtsp,$gtsp);
            $thongbao="Cập nhập thành công";
        }
        $danhsachgioitinhsp = loadAll_gioitinh_sp();
        include "../views/Admin/gioitinh_sanpham/list.php";
        break;
    // list size
    case 'danhsachsize':
        $list_size = Load_all_size();
        include "../views/Admin/size/list.php";
        break;
    // xóa size
    case "xoasize":
        if(isset($_GET['idsize']) && ($_GET['idsize']>0)){
            delete_size($_GET['idsize']);
        }
        $list_size = Load_all_size();
        include "../views/Admin/size/list.php";
        break;
    // thêm size
    case "addsize":
        if(isset($_POST['themsize'])&&($_POST['themsize'])!=""){
            $tensize=$_POST['tensize'];
            insert_size($tensize);
            $thongbao = "Thêm thành công";
        }
        include "../views/Admin/size/add.php";
        break;
    // sửa size
    case 'suasize':
        if(isset($_GET['idsize']) && ($_GET['idsize']!="")){
            $size = loadOne_size($_GET['idsize']);
        }
        $list_size = Load_all_size();
        include "../views/Admin/size/update.php";
        break; 


    // cập nhật size
    case 'updatesize':
        if(isset($_POST['capnhap']) && ($_POST['capnhap'])){
            $id_size =$_POST['id_size'];
            $ten_size =$_POST['ten_size'];
            update_size($id_size,$ten_size);
            $thongbao = "Cập nhật thành công";
        }
        $list_size = Load_all_size();
        include "../views/Admin/size/list.php";
        break;
    case 'dachsachdonhang':
        $listdonhang=loadAll_donhang();
        include "../views/Admin/donhang/list.php";
        break;



    // hiển thị danh đơn hàng
    case 'dachsachdonhang':
        $listdonhang=loadAll_donhang();
        include "../views/Admin/donhang/list.php";
        break;
    // xóa donhang
    case 'xoadh':
        if(isset($_GET['id_donhang'])&&($_GET['id_donhang']>0)){
        delete_donhang($_GET['id_donhang']);
        delete_giohang($_GET['id_donhang']);
    }
    $listdonhang=loadAll_donhang();
    include "../views/Admin/donhang/list.php";
    break;
    // chi tiết đơn hàng
    case 'chitietdh':
    if(isset($_GET['id_donhang'])&&($_GET['id_donhang']>0)){
        $listctdh=loadAll_chitietdh($_GET['id_donhang']);
        $donhang=loadOne_donhang($_GET['id_donhang']);
        extract($donhang);
        }

    include "../views/Admin/donhang/listctdh.php";
    break;
    // sửa trạng thái
    case 'suatt';
        if(isset($_GET['id_donhang'])&&($_GET['id_donhang']>0)){
        $donhang=loadOne_donhang($_GET['id_donhang']);
        }
        include "../views/Admin/donhang/update.php";
        break;
    //cập nhập trạng thái
    case 'updatett':
        if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
            $id_donhang=$_POST['id_donhang'];
            $trang_thai=$_POST['trang_thai'];
            update_ttdh($id_donhang,$trang_thai);
            }
            $listdonhang=loadAll_donhang();
        include "../views/Admin/donhang/list.php";
        break;  



    // bình luận
    case 'binhluansp':
        if(isset($_GET['id_sanpham'])&&($_GET['id_sanpham']>0)){
        $listbinhluan=loadAll_binhluan($_GET['id_sanpham']);
        }
        include "../views/Admin/binhluan/list.php";
        break;
    case 'xoabl':
        if(isset($_GET['id_binhluan'])&&($_GET['id_binhluan']>0)){
        delete_binhluan($_GET['id_binhluan']);
        }
        $listbinhluan=loadAll_binhluan($_GET['id_sanpham']);
        include "../views/Admin/binhluan/list.php";
        break;





     
    // danh sach người dùng
    case 'danhsachkhachhang':
        $listuser = loadAll_user();
        include "../views/Admin/khachhang/list.php";
        break;
    // thêm tài khoản người dùng
    case 'addtk':
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            $ten_dang_nhap=$_POST['ten_dang_nhap'];
            $pass=$_POST['pass'];
            $hoten=$_POST['hoten'];
            $email=$_POST['email'];
            $sdt=$_POST['sdt'];
            $diachi=$_POST['diachi'];
            insert_user($ten_dang_nhap,$pass,$hoten,$email,$sdt,$diachi);
            $thongbao='Thêm thành công';
        }
        include "../views/Admin/khachhang/add.php";
        break;
    // sửa người dùng
    case 'suatk';
        if(isset($_GET['id_user'])&&($_GET['id_user']>0)){
        $user=loadOne_user($_GET['id_user']);
        }
        include "../views/Admin/khachhang/update.php";
        break;
        // cập nhập người dùng
        
        case 'updatetk':
            if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                $id_user=$_POST['id_user'];
                $ten_dang_nhap=$_POST['ten_dang_nhap'];
                $pass=$_POST['pass'];
                $hoten=$_POST['hoten'];
                $email=$_POST['email'];
                $sdt=$_POST['sdt'];
                $diachi=$_POST['diachi'];
                update_user($id_user,$ten_dang_nhap,$pass,$hoten,$email,$sdt,$diachi);
                $thongbao="Cập nhập thành công";
                }
            $listuser = loadAll_user(); 
            include "../views/Admin/khachhang/list.php";
            break;  
        // xóa tài khoản
        case 'xoatk':
            if(isset($_GET['id_user'])&&($_GET['id_user']>0)){
            delete_user($_GET['id_user']);
        }
        $listuser = loadAll_user();
        include "../views/Admin/khachhang/list.php";
        break;
        case 'phanquyentk':
            if(isset($_GET['id_user']) &&(($_GET['id_user'])>0)){
                $user=loadOne_user($_GET['id_user']);
                }
                $listvaitro=loadall_vaitro();
            include "../views/Admin/khachhang/phanquyen.php";
            break;  
        // cập nhập phân quyền
        case 'updatepq':
            if(isset($_POST['phanquyen'])&&($_POST['phanquyen'])){
                $id_user=$_POST['id_user'];
                $id_vaitro=$_POST['id_vaitro'];
                update_phanquyen($id_user,$id_vaitro);
                $thongbao="Cập nhập thành công";
                }
            $listuser = loadAll_user(); 
            include "../views/Admin/khachhang/list.php";
            break;     
        case 'dachsachvaitro':
            $listvaitro=loadall_vaitro();
            include "../views/Admin/vaitro/list.php";
            break;
        case 'addvaitro':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $vaitro=$_POST['vaitro'];
                    insert_vai_tro($vaitro);
                    $thongbao='Thêm thành công';
        }
                    include "../views/Admin/vaitro/add.php";
                    break;
                case 'xoavt':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_vaitro($_GET['id']);
                }
                    $listvaitro=loadall_vaitro();
                    include "../views/Admin/vaitro/list.php";
                    break;
                case 'suavt';
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $vaitro=loadone_vaitro($_GET['id']);
                    }
                    include "../views/Admin/vaitro/update.php";
                    break;
                    
                case 'updatevt':
                        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $vaitro=$_POST['vaitro'];
                        $id_vaitro=$_POST['id_vaitro'];
                        
                        update_vaitro($id_vaitro,$vaitro);
                        $thongbao='Cập nhật thành công';
                        }
                        $listvaitro=loadall_vaitro();
                include "../views/Admin/vaitro/list.php";
                        break;      







    //danh sách hệ thống
    case 'danhsachhethong':
        $listhethong=loadall_hethong();
        include "../views/Admin/hethong/list.php";
        break;  

        case 'addhethong':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $ten_cuahang=$_POST['ten_cuahang'];
                $sdt=$_POST['sdt'];
                $email=$_POST['email'];
                $diachi=$_POST['diachi'];
                $logo=$_FILES['logo']['name'];
                $target_dir = "../../uploads/";
                $target_file = $target_dir . basename($_FILES["logo"]["name"]);
            if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
            }else {
            }
                insert_hethong($ten_cuahang, $sdt, $email, $diachi, $logo);
                $thongbao='Thêm thành công';
    }
                include "../views/Admin/hethong/add.php";
                break;
            // xóa hệ thống
            case 'xoaht':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_hethong($_GET['id']);
            }
                $listhethong=loadall_hethong();
                include "../views/Admin/hethong/list.php";
                break;
            // sửa hệ thống
                case 'suaht':
                    if(isset($_GET['id_hethong']) &&(($_GET['id_hethong'])>0)){
                        $hethong=loadOne_hethong($_GET['id_hethong']);
                    }
                    include "../views/Admin/hethong/update.php";
                    break;
            // cập nhật hệ thống
    case 'updateht':
        if(isset($_POST['capnhatht'])&&($_POST['capnhatht'])){
            $id_hethong=$_POST['id_hethong'];
            $ten_cuahang=$_POST['ten_cuahang'];
            $sdt=$_POST['sdt'];
            $email=$_POST['email'];
            $diachi=$_POST['diachi'];

            if(isset($_FILES['logo']['name'])&&($_FILES['logo']['name']!="")){
                $logo=$_FILES['logo']['name'];
                $dir="../../uploads/";
                $upload=$dir.basename($_FILES['logo']['name']);
                if(move_uploaded_file($_FILES['logo']['tmp_name'],$upload)){
                }
                else {
                }
            }
            else{
                $logo=$_POST['logo'];
            }
            update_hethong($id_hethong, $ten_cuahang, $sdt, $email, $diachi, $logo);
            $thongbao="Cập nhập thành công";
        }
        $listhethong=loadall_hethong();
        include "../views/Admin/hethong/list.php";
        break;    






//danh sách bài viết
    case 'danhsachbaiviet':
        $listbaiviet=loadall_baiviet();
        include "../views/Admin/baiviet/list.php";
        break;
    //thêm bài viết 
    case 'addbaiviet':
        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            $tieude=$_POST['tieude'];
            $noidung=$_POST['noidung'];
            $mota=$_POST['mota'];
            $hinh=$_FILES['hinh']['name'];
            $dir="../../uploads/";
            $upload=$dir.basename($_FILES['hinh']['name']);
            if(move_uploaded_file($_FILES['hinh']['tmp_name'],$upload)){

            }
            $ngaydang=date('h:i:sa d/m/Y');
            insert_baiviet($tieude, $noidung,$mota, $hinh,$ngaydang);
            $thongbao='Thêm thành công';
  } 
        include "../views/Admin/baiviet/add.php";
        break;
        // xóa bài viết
        case 'xoabv':
            if(isset($_GET['id_baiviet'])&&($_GET['id_baiviet']>0)){
            delete_baiviet($_GET['id_baiviet']);
        }
            $listbaiviet=loadall_baiviet();
            include "../views/Admin/baiviet/list.php";
            break;  
            // sửa bài viết
        case 'suabv':
            if(isset($_GET['id_baiviet']) &&(($_GET['id_baiviet'])>0)){
                $baiviet=loadOne_baiviet($_GET['id_baiviet']);
            }
            include "../views/Admin/baiviet/update.php";
            break;
    // cập nhật bài viết
        case 'updatebv':
            if(isset($_POST['capnhatbv'])&&($_POST['capnhatbv'])){
            $id_baiviet=$_POST['id_baiviet'];
            $tieude=$_POST['tieude'];
            $noidung=$_POST['noidung'];
            $mota=$_POST['mota'];
            $ngaydang=$_POST['ngaydang'];

            if(isset($_FILES['hinh']['name'])&&($_FILES['hinh']['name']!="")){
                $hinh=$_FILES['hinh']['name'];
            $dir="../../uploads/";
            $upload=$dir.basename($_FILES['hinh']['name']);
            if(move_uploaded_file($_FILES['hinh']['tmp_name'],$upload)){
            }
            else {
            }
        }
        else{
        $hinh=$_POST['hinh'];
        }
        update_baiviet($id_baiviet, $tieude, $noidung, $mota, $ngaydang, $hinh);
        $thongbao="Cập nhập thành công";
        }
        $listbaiviet=loadall_baiviet();
        include "../views/Admin/baiviet/list.php";
        break;     
       




        // danh sách liên hệ từ người dùng
        case 'dachsachlienhe':
            $listlienhe = loadall_lienhe();
            include "../views/Admin/lienhe/list.php";
            break;





        // banner
        case 'danhsachbanner':
            $ds_banner = loadAll_ds_banner();
            include "../views/Admin/banner/list.php";
            break;
            
        case 'xoa_banner':
            if(isset($_GET['id_banner']) && ($_GET['id_banner']>0)){
            delete_banner($_GET['id_banner']);
            }
            $ds_banner = loadAll_ds_banner();
            include "../views/Admin/banner/list.php";
            break;
        
        case 'addbanner':
            if(isset($_POST['them_banner']) && ($_POST['them_banner']!='')){
                // up load file ảnh
                $a = "../../uploads/";
                $b = basename($_FILES['anh']['name']);
                $upload = $a.$b;
                move_uploaded_file($_FILES['anh']['tmp_name'],$upload);


                $tieude = $_POST['tieude'];
                $tieudephu = $_POST['tieudephu'];
                $img =$_FILES['anh']['name'];
                $link = $_POST['link'];
                insert_banner($tieude,$tieudephu,$img,$link);
                $thongbao = "Thêm thành công";
            }
            include "../views/Admin/banner/add.php";
            break;
        
        case "sua_banner":
            if(isset($_GET['id_banner']) && ($_GET['id_banner']!='')){
                $id = $_GET['id_banner'];
                $one_banner = loadOne_banenr($id);
            }
            include "../views/Admin/banner/update.php";
            break;
        

        case'update_banner':
            if(isset($_POST['capnhap']) && ($_POST['capnhap']!='')){
                $id = $_POST['id_banner'];
                $tieude = $_POST['tieude'];
                $tieudephu = $_POST['tieudephu'];
                $mota = $_POST['mota'];
                $link = $_POST['link'];
                if(isset($_FILES['anh']['name'])&&($_FILES['anh']['name']!="")){
                    $hinh=$_FILES['anh']['name'];
                $dir="../../uploads/";
                $upload=$dir.basename($_FILES['anh']['name']);
                if(move_uploaded_file($_FILES['anh']['tmp_name'],$upload)){
                }
                else {
                }
            }
            else{
            $hinh=$_POST['anh'];
            }
                update_banner($id,$tieude,$tieudephu,$hinh,$mota,$link);
            }
            $ds_banner = loadAll_ds_banner();
            include "../views/Admin/banner/list.php";
            break;






            // banner con
            case "danhsachbanner_con":
                $list_banner_con = loadAll_banner_con();
                include "../views/Admin/banner_con/list.php";
                break;

            case 'xoabanner_con':
                if(isset($_GET['idbanner_con']) &&($_GET['idbanner_con']!="")){
                    delete_banner_con($_GET['idbanner_con']);
                }
                $list_banner_con = loadAll_banner_con();
                include "../views/Admin/banner_con/list.php";
                break;

            
            case "addbanner_con":
                if(isset($_POST['thembannerCon']) &&($_POST['thembannerCon']!='')){
                    $a ="../../uploads/";
                    $b = basename($_FILES['anh']['name']);
                    $upload = $a.$b;
                    move_uploaded_file($_FILES['anh']['tmp_name'],$upload);

                    $hinh=$_FILES['anh']['name'];
                    $link = $_POST['link'];
                    add_banner_con($hinh,$link);
                    $thongbao = "Thêm thành công";
                }
                include "../views/Admin/banner_con/add.php";
                break;

            case 'suabanner_con':
                if(isset($_GET['idbanner_con'])&&($_GET['idbanner_con']!="")){
                    $one_banner_con = LoadOnae_banner_con($_GET['idbanner_con']);
                }
                include "../views/Admin/banner_con/update.php";
                break;


            case'updatebanner_con':
                $list_banner_con = loadAll_banner_con();
                if(isset($_POST['capnhap']) && ($_POST['capnhap']!='')){

                    if(isset($_FILES['anh']['name'])&&($_FILES['anh']['name']!="")){
                        $hinh=$_FILES['anh']['name'];
                    $dir="../../uploads/";
                    $upload=$dir.basename($_FILES['anh']['name']);
                    if(move_uploaded_file($_FILES['anh']['tmp_name'],$upload)){
                    }
                    else {
                    }
                }
                else{
                $hinh=$_POST['anh'];
                }
                    $link = $_POST['link'];
                    $id = $_POST['id_banner_con'];
                    update_banner_con($hinh,$link,$id);
                }
                $list_banner_con = loadAll_banner_con();
                include "../views/Admin/banner_con/list.php";
                break;


            // khuyến mãi
            case "danhsachkm":
                $listkm = loadAll_khuyenmai();
                include "../views/Admin/khuyenmai/list.php";
                break;

            case 'xoakm':
                if(isset($_GET['id_km']) &&($_GET['id_km']!="")){
                    delete_khuyenmai($_GET['id_km']);
                }
                $listkm = loadAll_khuyenmai();
                include "../views/Admin/khuyenmai/list.php";
                break;

            
            case "addkm":
                if(isset($_POST['themmoi']) &&($_POST['themmoi']!='')){
                    $ma_km = $_POST['ma_km'];
                    $phantram_km = $_POST['phantram_km'];
                    $ngay_batdau = $_POST['ngay_batdau'];
                    $ngay_ketthuc = $_POST['ngay_ketthuc'];
                    insert_khuyenmai($ma_km,$phantram_km,$ngay_batdau,$ngay_ketthuc);
                    $thongbao = "Thêm thành công";
                }
                include "../views/Admin/khuyenmai/add.php";
                break;

            case 'suakm':
                if(isset($_GET['id_km'])&&($_GET['id_km']!="")){
                    $km = LoadOne_khuyenmai($_GET['id_km']);
                }
                include "../views/Admin/khuyenmai/update.php";
                break;


            case'updatekm':
                if(isset($_POST['capnhap']) && ($_POST['capnhap']!='')){
                    $id_km = $_POST['id_km'];
                    $ma_km = $_POST['ma_km'];
                    $phantram_km = $_POST['phantram_km'];
                    $ngay_batdau = $_POST['ngay_batdau'];
                    $ngay_ketthuc = $_POST['ngay_ketthuc'];
                    update_khuyenmai($id_km,$ma_km,$phantram_km,$ngay_batdau,$ngay_ketthuc);
                }
                $listkm = loadAll_khuyenmai();
                include "../views/Admin/khuyenmai/list.php";
                break;

         
        case'updatekm':
            if(isset($_POST['capnhap']) && ($_POST['capnhap']!='')){
                $id_km = $_POST['id_km'];
                $ma_km = $_POST['ma_km'];
                $phantram_km = $_POST['phantram_km'];
                $ngay_batdau = $_POST['ngay_batdau'];
                $ngay_ketthuc = $_POST['ngay_ketthuc'];
                update_khuyenmai($id_km,$ma_km,$phantram_km,$ngay_batdau,$ngay_ketthuc);
            }
            $listkm = loadAll_khuyenmai();
            include "../views/Admin/khuyenmai/list.php";
            break;   
        case'thongke':
            $tongdh=load_tongdh();
            extract($tongdh);
            $tongsp=load_tongsp();
            extract($tongsp);
            $tongnd=load_tongnd();
            extract($tongnd);
            include "../views/Admin/thongke.php";
            break;           
        default:
            include "../views/Admin/thongke.php";
        break;
        
    } }

    include "../views/Admin/footer.php";
    
?>