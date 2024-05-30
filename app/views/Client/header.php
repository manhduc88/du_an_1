<?php if(is_array($hethong)){
    extract($hethong);
  }

?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from zairito-html.zainiktheme.com/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2023 10:18:08 GMT -->
<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?=$ten_cuahang?></title>
        <meta name="description" content="Zairito - eCommerce HTML Template" />
        <meta name="keywords" content="business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive" />
        <meta name="author" content="Zairito" />

        <!-- fonts file -->
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Allison&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Marcellus&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


        <!-- css file  -->
        <link rel="stylesheet" href="public/assets_client/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/assets_client/css/plugins.css">
        <link rel="stylesheet" href="public/assets_client/css/style.css">
        <link rel="stylesheet" href="public/assets_client/css/responsive.css">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="public/assets_client/images/favicon.png" type="image/x-icon">

    </head>
    <body>
        <!-- Preloader Area Start -->
        <div id="preloader">
            <div id="status">
                <img src="uploads/<?=$logo?>" alt="img" />
            </div>
        </div>
        <!-- Preloader Area End -->

        <!-- header area start here  -->
        <header class="header-area d-none d-lg-block">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="header-top-left">
                            <p class="contact-info"><i class="icon flaticon-phone"></i> Gọi cho chúng tôi: <?=$sdt?> (MIỄN PHÍ)</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="header-top-right">
                            <div class="top-bar-menu">
                                <ul class="menu-list">
                                    <li class="menu-item"><a class="menu-link" href="index.php?act=about_us">Về Chúng Tôi</a></li>
                                    <li class="menu-item"><a class="menu-link" href="index.php?act=blog">Blog</a></li>
                                    <li class="menu-item"><a class="menu-link" href="index.php"> Làm Thê Nào Để Mua</a></li>
                                </ul>
                            </div>
                            <div class="switcher-lang-currency">
                            <!-- <?php if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                            if($vaitro=="Admin"){
                                echo '
                                <div class="" style="margin-right:10px;" >
                                <a class="account-btn" href="app/controllers/AdminController.php?ten_dang_nhap='.$ten_dang_nhap.'"><i class="user-icon flaticon-user"></i> Quản Trị Viên</a>
                                </div>
                                ';}
                            else {
                                echo '';
                            }}
                            ?> -->
                             
                                <div class="currency-switcher">
                                    <span class="flag"><i class="fas fa-dollar-sign"></i></span>
                                    <a href="#" class="currency">Usd <i class="fas fa-angle-down"></i></a>
                                    <ul class="currency-list">
                                        <li class="single-currency"><span class="flag"><i class="fas fa-rupee-sign"></i></span><a class="currency-text" href="#">Rupi</a></li>
                                    </ul>
                                </div>
                                <div class="lang-switcher">
                                </div>
                                <div class="lang-switcher">
                                    <span class="flag"><img src="public/assets_client/images/united-states.png" alt="united-states" /></span>
                                    <a href="#" class="lang">Eng <i class="fas fa-angle-down"></i></a>
                                    <ul class="lang-list">
                                        <li class="single-lang"><span class="flag"><img src="public/assets_client/images/united-states.png" alt="united-states" /></span><a class="lang-text" href="#">Eng</a></li>
                                        <li class="single-lang"><span class="flag"><img src="public/assets_client/images/india.png" alt="india"></span><a class="lang-text" href="#">Hin</a></li>
                                    </ul>
                                </div>
                            </div>
                            <?php if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                            ?>
                            <!-- <a class="account-btn" href="index.php?act=taikhoan"><i class="user-icon flaticon-user"></i><?=$ten_dang_nhap?> </a>  -->
                            <a class="account-btn" href="index.php?act=dangxuat" style="margin-left: 20px;"> <i class="fa-solid fa-right-to-bracket"></i></a>
                            <?php }else { ?>
                            <a class="account-btn" href="index.php?act=dangnhap"><i class="user-icon flaticon-user"></i> Tài Khoản Của Tôi</a>
                           <?php }
                            ?>

                        </div>
                    </div>
                    </div>
                </div>
            </div>
             <!-- Cart Offcanvas Sidebar Menu area Start here  -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvasSidebar" aria-labelledby="cartOffcanvasSidebarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="cartOffcanvasSidebarLabel">Giỏ Hàng</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <div class="cart-product-list">
                <?php 
                    $i=0;
                    $tongphu=0;
                    $phiship=0;
                    $tong=0;
                    foreach ($_SESSION['mycart'] as $cart){
                        $i++;
                        $thanhtien=$cart[2]*$cart[6]; 
                        $tongphu+=$thanhtien;
                        $tong=$tongphu+$phiship;
                        $gia_thuong=$cart[2]-$cart[2]*0.15;
                        $gia_goc=$cart[2]-$gia_thuong+$cart[2];
                        $hinh="uploads/".$cart[3];
                        echo '
                        <!-- Product item start -->
                        <div class="product-item cart-product-item">
                            <div class="single-grid-product">
                                <div class="product-top">
                                    <a href="index.php?act=chitietsp&id_sanpham='.$cart[0].'&id_nhom_sp='.$cart[9].'"><img class="product-thumbnal" src="'.$hinh.'" alt="cart"></a>
                                </div>
                                <div class="product-info">
                                    <div class="product-name-part">
                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                        <h3 class="product-name"><a class="product-link" href="index.php?act=chitietsp&id_sanpham='.$cart[0].'&id_nhom_sp='.$cart[9].'">'.$cart[1].'</a></h3>
    
                                        <div class="cart-quantity input-group">
                                           '.$cart[6].'x,'.$cart[4].','.$cart[5].'

                                        </div>
    
                                        <button class="cart-remove-btn">Remove</button>
                                    </div>
                                    <div class="product-price">
                                        <span class="regular-price">'.number_format($gia_goc,0,",",".").'<u>đ</u></span>
                                        <span class="price">'.number_format($cart[2],0,",",".").'<u>đ</u></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product item end -->
                        ';}
                        ?>

                   
                   
                  
                </div>

                <div class="total-bottom-part">
                    <div class="total-count d-flex">
                        <h3>Tổng Cộng</h3>
                        <h4><?=number_format($tongphu,0,",",".")?><u>đ</u></h4>
                    </div>
                    <a href="checkout.html" class="proceed-to-btn d-block text-center">
                        Tiến hàng kiểm tra
                    </a>
                    <div class="view-cart-go">
                        <a href="index.php?act=giohang">Xem giỏ hàng</a>
                    </div>
                </div>

            </div>
          </div>
        <!-- Cart Offcanvas Sidebar Menu area end here  -->
            <div class="header-middle">
                <div class="container">
                    <div class="header-middle-wrap">
                        <div class="brand-area">
                            <a class="brand-logo" href="index.php"><img class="brand-image" src="public/assets_client/images/zairito.png" alt="zairito" /></a>
                        </div>
                        <div class="search-area">
                            <form action="index.php?act=danhsachnhomsp" method="post">
                                <div class="search-wrap">
                                    <select class="form-select" name="id_nhomsp">
                                        <option selected>loại</option>
                                        <?php
                                            foreach ($listnhomsp as $nhomsp){
                                                extract($nhomsp);
                                                echo '<option value="'.$id_nhom_sp.'">'.$nhom_sp.'</option>';
                                            }
                                            
                                            ?>
                                        
                                    </select>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="search" name="kyw" placeholder="Tìm kiếm ở đây" />
                                        <button type="submit" class="search-btn" name="search" ><i class="flaticon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="header-right">
                            <div class="wishlist single-btn">
                                <a href="index.php?act=wish_list" class="wishlist-btn header-btn">
                                    <div class="btn-left">
                                        <i class="btn-icon flaticon-like"></i>
                                        <span class="count">0</span>
                                    </div>
                                    <div class="btn-right">
                                        <span class="btn-text">Danh Sách Yêu Thích</span>
                                        <span class="item-count">0 Món</span>
                                    </div>
                                </a>
                            </div>
                            <div class="compare single-btn">
                                <a href="index.php?act=compare" class="compare-btn header-btn">
                                    <div class="btn-left">
                                        <i class="btn-icon flaticon-bar-chart"></i>
                                        <span class="count">0</span>
                                    </div>
                                    <div class="btn-right">
                                        <span class="btn-text">So Sánh</span>
                                        <span class="item-count">0 Món</span>
                                    </div>
                                </a>
                            </div>
                            <div class="cart single-btn">
                                <a data-bs-toggle="offcanvas" href="#cartOffcanvasSidebar" role="button" aria-controls="cartOffcanvasSidebar" class="cart-btn header-btn">
                                    <div class="btn-left">
                                        <i class="btn-icon flaticon-shopping-bag"></i>
                                        <span class="count"><?=count($_SESSION['mycart'])?></span>
                                    </div>
                                    <div class="btn-right">
                                        <span class="btn-text">Giỏ hàng</span>
                                        <span class="price"><?=number_format($tong,0,",",".")?><u>đ</u></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <nav class="menu-area">
                    <ul class="main-menu">
                        <li class="menu-item menu-item-has-children active">
                            <a class="menu-link" href="index.php">Trang Chủ</a>
                        </li>
                    

                        <li class="menu-item"><a class="menu-link" href="index.php?act=about_us">Về Chúng Tôi</a></li>
                        <li class="menu-item menu-item-has-children">
                            <a class="menu-link" href="index.php?act=baiviet">Blog</i></a>
        
                        </li>
                        <li class="menu-item"><a class="menu-link" href="index.php?act=lienhe">Liên Hệ</a></li>
                        <?php
                            foreach ($listgioitinh as $gioitinh){
                            extract($gioitinh);
                            echo '
                            <li class="menu-item"><a class="menu-link" href="index.php?act=danhsachgioitinhsp&id_gioitinh='.$id_gioitinh_sp.'">'.$gioitinh.'</a></li>
                            ';
    
                            }
                        ?>
                        <li class="menu-item menu-item-has-children ">
                            <a class="menu-link" href="index.php?act=mydh">Đơn Hàng</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- header area end here  -->