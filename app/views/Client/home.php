
<?php
 if(isset($_SESSION['user'])){
    $dd="index.php?act=home_addgiohang";
 }else{
    $dd="index.php?act=dangnhap";
 }
?>
    <!-- hero-section area start here  -->
    <div class="hero-section">
        <div class="hero-slider">
            <div class="signle-slide" style="background-image: url('public/assets_client/images/hero-banner-bg.png');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">Summer Sale </h2>
                                <h1 class="slider-title">The Summer!!</h1>
                                <p class="slider-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed</p>
                                <div class="slider-btn">
                                    <a href="shop-grid-left-sidebar.html" class="primary-btn">Shop Now!</a>
                                    <a href="shop-list-left-sidebar.html" class="secondary-btn">See Colections <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-6">
                            <div class="hero-slider-image text-center">
                                <img class="hero-image img-fluid" src="public/assets_client/images/hero-banner-image-1.png" alt="hero-banner-image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="signle-slide" style="background-image: url('public/assets_client/images/hero-banner-bg-2.png');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">New Collection</h2>
                                <h1 class="slider-title">The Winter!!</h1>
                                <p class="slider-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed</p>
                                <div class="slider-btn">
                                    <a href="shop-list-left-sidebar.html" class="secondary-btn">See Colections <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-6">
                            <div class="hero-slider-image text-center">
                                <img class="hero-image img-fluid" src="public/assets_client/images/hero-banner-image-2.png" alt="hero-banner-image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="signle-slide" style="background-image: url('public/assets_client/images/hero-banner-bg-3.png');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">New Collection</h2>
                                <h1 class="slider-title">The New autmn</h1>
                                <p class="slider-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed</p>
                                <div class="slider-btn">
                                    <a href="shop-grid-left-sidebar.html" class="secondary-btn">See Colections <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-6">
                            <div class="hero-slider-image text-center">
                                <img class="hero-image img-fluid" src="public/assets_client/images/hero-banner-image-3.png" alt="hero-banner-image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-section area end here  -->

    <!-- brads area start here  -->
    <div class="brads-area">
        <div class="container">
            <div class="brads-slide">
                <div class="sigle-brad">
                    <img src="public/assets_client/images/treva.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="public/assets_client/images/zoo-tv.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="public/assets_client/images/circle.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="public/assets_client/images/code-lab.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="public/assets_client/images/hex-lab.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="public/assets_client/images/kanba.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="public/assets_client/images/circle.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="public/assets_client/images/zoo-tv.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="public/assets_client/images/circle.png" alt="brad image" />
                </div>
            </div>
        </div>
    </div>
    <!-- brads area start here  -->

    <!-- Popular Categories area start here  -->
    <div class="popular-categories-area section-bg section-top pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">Nhiều hàng hóa</h3>
                        <h2 class="section-title">Danh Mục Phổ Biến</h2>
                    </div>
                    <div class="col-md-6 align-self-end text-md-end">
                        <a href="index.php?act=danhsachsp" class="primary-btn">Xem Tất Cả Danh Mục </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                foreach ($listnhomsp as $nhomsp){
                    extract($nhomsp);
                    echo '
                    <div class="col-lg-4 col-md-6">
                    <a class="single-categorie" href="index.php?act=danhsachnhomsp&id_nhom_sp='.$id_nhom_sp.'">
                        <div class="categorie-wrap">
                            <div class="categorie-icon">
                                
                            </div>
                            <div class="categorie-info">
                                <h3 class="categorie-name">'.$nhom_sp.'</h3>
                                <h4 class="categorie-subtitle">Trang Phục Cho Nam Và Nữ</h4>
                            </div>
                        </div>
                        <i class="arrow flaticon-right-arrow"></i>
                    </a>
                    </div>
                    ';
 
                }
                ?>

                
            </div>
        </div>
    </div>
    <!-- Popular Categories area end here  -->

    <!-- Featured Products area start here  -->
    <div class="featured-productss-area section-top pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">Sản Phẩm Mới</h3>
                        <h2 class="section-title">Sản Phẩm Nổi Bật</h2>
                    </div>
                    <div class="col-md-6 align-self-end text-md-end">
                        <a href="index.php?act=danhsachspmoi" class="see-btn">Nhìn Thấy Tất Cả</a>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <?php 
                  foreach ($listsanphammoi as $sanpham){
                    extract($sanpham);
                    $gia_thuong=$gia-$gia*0.15;
                    $gia_goc=$gia-$gia_thuong+$gia;
                    
                    $listmau1sp=loadAll_mau_1sp($sanpham['id_sanpham']);
                    ?>
                    <?php ?>
                    <div class="col-lg-3 col-md-4 col-sm-6"  >
                        <form action="<?=$dd?>" method="post">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="index.php?act=chitietsp&id_sanpham=<?=$id_sanpham?>&id_nhom_sp=<?=$id_nhom_sp?>"><img class="product-thumbnal" src="uploads/<?=$hinh_daidien?>" alt="product" /></a>
                            
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-info text-center">
                            <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                            <h3 class="product-name" style="height: 100px; font-size: 18px; "><a class="product-link" href="index.php?act=chitietsp&id_sanpham=<?=$id_sanpham?>&id_nhom_sp=<?=$id_nhom_sp?>" ><?=$ten_sanpham?></a></h3>
                            <ul class="product-review">
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price"><?=number_format($gia_goc,0,",",".")?> <u>đ</u></span>
                                <span class="price"><?=number_format($gia,0,",",".")?> <u>đ</u></span>
                            </div>
                            <div class="variable-single-item color-switch">
                                <div class="product-variable-color">
                                    <?php
                                            foreach ($listmau1sp as $mau){
                                                extract($mau);
                                                echo '
                                                <label >
                                                    <input name="mau"
                                                        class="color-select" type="radio" value="'.$mau['id_mau'].'" >
                                                    <span style="background-color: '.$mau['ma_mau'].';"></span>
                                                </label>
                                                ';
                                        
                                                }
                                        ?>

                                </div>
                            </div>

                            <ul class="size-switch">
                                <?php      
                                    $listsize1sp=loadAll_size_1sp($sanpham['id_sanpham']);                         
                                     foreach($listsize1sp as $size){
                                        extract($size);
                                        echo '
                                        <li class="single-size " style="padding: 0px;" ><label for="size_'.$size['id_size'].'_'.$sanpham['id_sanpham'].'" style=" padding: 6px; padding-left: 20px;padding-right: 20px; "><input type="radio" name="size" id="size_'.$size['id_size'].'_'.$sanpham['id_sanpham'].'" value="'.$size['id_size'].'"  style="display: none;" >'.$size['ten_size'].'</label></li>
                                        ';
                                     }
                                   ?>
                              
                            </ul>
                            <input type="hidden" name="id_sanpham" value="<?=$sanpham['id_sanpham'] ?>">
                            <input type="hidden" name="id_nhom_sp" value="<?=$sanpham['id_nhom_sp'] ?>">
                            <button type="submit" name="themgiohang" class="add-cart">Thêm Giỏ Hàng <i class="icon fas fa-plus-circle"></i></button>
                           
                        </div>
                        </form>
                    </div>
                    
                </div>
               
                    <?php } ?>

               
               
                
                
            </div>
           
        </div>
    </div>
    <!-- Featured Products area end here  -->

    <!-- About Area start here  -->
    <div class="about-area section">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">Về Chúng Tôi</h3>
                        <h2 class="section-title">Câu Chuyện Về Sự Ra Đời Của<br />Shop Zairito</h2>
                    </div>
                    <div class="col-md-6 align-self-end text-md-end">
                        <a href="about-us.html" class="primary-btn">Biết thêm về chúng tôi</a>
                    </div>
                </div>
            </div>
            <div class="story-box-slide">
                <div class="single-story-box">
                    <h3 class="story-title">Câu chuyện của năm <span class="story-year">2016</span></h3>
                    <p class="story-content">Mọi người đều muốn tiết kiệm , giá phải ở mức việt nam , yếu tố đó . Không có hãng nào cả. Cho đến lúc đó , tôi cần phải làm bài .... </p>
                </div>
                <div class="single-story-box">
                    <h3 class="story-title">Câu chuyện của năm <span class="story-year">2017</span></h3>
                    <p class="story-content">Mọi người đều muốn tiết kiệm , giá phải ở mức việt nam , yếu tố đó . Không có hãng nào cả. Cho đến lúc đó , tôi cần phải làm bài .... </p>
                </div>
                <div class="single-story-box">
                    <h3 class="story-title">Câu chuyện của năm <span class="story-year">2018</span></h3>
                    <p class="story-content">Mọi người đều muốn tiết kiệm , giá phải ở mức việt nam , yếu tố đó . Không có hãng nào cả. Cho đến lúc đó , tôi cần phải làm bài .... </p>
                </div>
                <div class="single-story-box">
                    <h3 class="story-title">Câu chuyện của năm <span class="story-year">2019</span></h3>
                    <p class="story-content">Mọi người đều muốn tiết kiệm , giá phải ở mức việt nam , yếu tố đó . Không có hãng nào cả. Cho đến lúc đó , tôi cần phải làm bài .... </p>
                </div>
                <div class="single-story-box">
                    <h3 class="story-title">Câu chuyện của năm <span class="story-year">2020</span></h3>
                    <p class="story-content">Mọi người đều muốn tiết kiệm , giá phải ở mức việt nam , yếu tố đó . Không có hãng nào cả. Cho đến lúc đó , tôi cần phải làm bài .... </p>
                </div>
                <div class="single-story-box">
                    <h3 class="story-title">Câu chuyện của năm <span class="story-year">2021</span></h3>
                    <p class="story-content">Mọi người đều muốn tiết kiệm , giá phải ở mức việt nam , yếu tố đó . Không có hãng nào cả. Cho đến lúc đó , tôi cần phải làm bài .... </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area  end here  -->

    <!-- Trending Products area start here  -->
    <div class="trending-products-area section-top pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="sub-title">Sản Phẩm Phổ biến</h3>
                        <h2 class="section-title">Sản Phẩm Thịnh Hành</h2>
                    </div>
                    <div class="col-lg-6 align-self-end text-lg-end">
                        <div class="primary-tabs">
                            <ul class="nav nav-tabs" id="TrendingProducts" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="new-arrival-tab" data-bs-toggle="tab" data-bs-target="#new-arrival" type="button" role="tab" aria-controls="new-arrival" aria-selected="true">HÀNG MỚI VỀ</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="best-selling-tab" data-bs-toggle="tab" data-bs-target="#best-selling" type="button" role="tab" aria-controls="best-selling" aria-selected="false">BÁN CHẠY NHẤT</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="on-sell-tab" data-bs-toggle="tab" data-bs-target="#on-sell" type="button" role="tab" aria-controls="on-sell" aria-selected="false">ĐANG BÁN</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="featured-items-tab" data-bs-toggle="tab" data-bs-target="#featured-items" type="button" role="tab" aria-controls="featured-items" aria-selected="false">MẶT HÀNG NỔI BẬT</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="TrendingProductsContent">
                <!-- sản phẩm mới về  -->
                <div class="tab-pane fade show active" id="new-arrival" role="tabpanel" aria-labelledby="new-arrival-tab">
                    <div class="row">
                    <?php 
                  foreach ($listsanphammoi as $sanpham){
                    extract($sanpham);
                    $gia_thuong=$gia-$gia*0.15;
                    $gia_goc=$gia-$gia_thuong+$gia;
                    
                    $listmau1sp=loadAll_mau_1sp($sanpham['id_sanpham']);
                    ?>
                    <?php ?>
                    <div class="col-lg-3 col-md-4 col-sm-6"  >
                        <form action="<?=$dd?>" method="post">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="index.php?act=chitietsp&id_sanpham=<?=$id_sanpham?>&id_nhom_sp=<?=$id_nhom_sp?>"><img class="product-thumbnal" src="uploads/<?=$hinh_daidien?>" alt="product" /></a>
                            
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-info text-center">
                            <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                            <h3 class="product-name" style="height: 100px; font-size: 18px; "><a class="product-link" href="index.php?act=chitietsp&id_sanpham=<?=$id_sanpham?>&id_nhom_sp=<?=$id_nhom_sp?>" ><?=$ten_sanpham?></a></h3>
                            <ul class="product-review">
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price"><?=number_format($gia_goc,0,",",".")?> <u>đ</u></span>
                                <span class="price"><?=number_format($gia,0,",",".")?> <u>đ</u></span>
                            </div>
                            <div class="variable-single-item color-switch">
                                <div class="product-variable-color">
                                    <?php
                                            foreach ($listmau1sp as $mau){
                                                extract($mau);
                                                echo '
                                                <label >
                                                    <input name="mau"
                                                        class="color-select" type="radio" value="'.$mau['id_mau'].'" >
                                                    <span style="background-color: '.$mau['ma_mau'].';"></span>
                                                </label>
                                                ';
                                        
                                                }
                                        ?>

                                </div>
                            </div>

                            <ul class="size-switch">
                                <?php      
                                    $listsize1sp=loadAll_size_1sp($sanpham['id_sanpham']);                         
                                     foreach($listsize1sp as $size){
                                        extract($size);
                                        echo '
                                        <li class="single-size " style="padding: 0px;" ><label for="size_'.$size['id_size'].'_'.$sanpham['id_sanpham'].'_1" style=" padding: 6px; padding-left: 20px;padding-right: 20px; "><input type="radio" name="size" id="size_'.$size['id_size'].'_'.$sanpham['id_sanpham'].'_1" value="'.$size['id_size'].'" style="display: none;"  >'.$size['ten_size'].'</label></li>
                                        ';
                                     }
                                   ?>
                              
                            </ul>
                            <input type="hidden" name="id_sanpham" value="<?=$sanpham['id_sanpham'] ?>">
                            <input type="hidden" name="id_nhom_sp" value="<?=$sanpham['id_nhom_sp'] ?>">
                            <button type="submit" name="themgiohang" class="add-cart">Thêm Giỏ Hàng <i class="icon fas fa-plus-circle"></i></button>
                           
                        </div>
                        </form>
                    </div>
                    
                </div>
               
                    <?php } ?>
                    </div>
                </div>
                <!-- sản phẩm bán chạy -->
                <div class="tab-pane fade" id="best-selling" role="tabpanel" aria-labelledby="best-selling-tab">
                    <div class="row">
 
                       
                        
                        
                    <?php 
                  foreach ($listsanphamtop as $sanpham){
                    extract($sanpham);
                    $gia_thuong=$gia-$gia*0.15;
                    $gia_goc=$gia-$gia_thuong+$gia;
                    
                    $listmau1sp=loadAll_mau_1sp($sanpham['id_sanpham']);
                    ?>
                    <?php ?>
                    <div class="col-lg-3 col-md-4 col-sm-6"  >
                    <form action="<?=$dd?>" method="post">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="index.php?act=chitietsp&id_sanpham=<?=$id_sanpham?>&id_nhom_sp=<?=$id_nhom_sp?>"><img class="product-thumbnal" src="uploads/<?=$hinh_daidien?>" alt="product" /></a>
                            
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-info text-center">
                            <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                            <h3 class="product-name" style="height: 100px; font-size: 18px; "><a class="product-link" href="index.php?act=chitietsp&id_sanpham=<?=$id_sanpham?>&id_nhom_sp=<?=$id_nhom_sp?>" ><?=$ten_sanpham?></a></h3>
                            <ul class="product-review">
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price"><?=number_format($gia_goc,0,",",".")?> <u>đ</u></span>
                                <span class="price"><?=number_format($gia,0,",",".")?> <u>đ</u></span>
                            </div>
                            <div class="variable-single-item color-switch">
                                <div class="product-variable-color">
                                    <?php
                                            foreach ($listmau1sp as $mau){
                                                extract($mau);
                                                echo '
                                                <label >
                                                    <input name="mau"
                                                        class="color-select" type="radio" value="'.$mau['id_mau'].'" >
                                                    <span style="background-color: '.$mau['ma_mau'].';"></span>
                                                </label>
                                                ';
                                        
                                                }
                                        ?>

                                </div>
                            </div>

                            <ul class="size-switch">
                                <?php      
                                    $listsize1sp=loadAll_size_1sp($sanpham['id_sanpham']);                         
                                     foreach($listsize1sp as $size){
                                        extract($size);
                                        echo '
                                        <li class="single-size " style="padding: 0px;" ><label for="size_'.$size['id_size'].'_'.$sanpham['id_sanpham'].'_2" style=" padding: 6px; padding-left: 20px;padding-right: 20px; "><input type="radio" name="size" id="size_'.$size['id_size'].'_'.$sanpham['id_sanpham'].'_2" value="'.$size['id_size'].'" style="display: none;"  >'.$size['ten_size'].'</label></li>
                                        ';
                                     }
                                   ?>
                              
                            </ul>
                            <input type="hidden" name="id_sanpham" value="<?=$sanpham['id_sanpham'] ?>">
                            <input type="hidden" name="id_nhom_sp" value="<?=$sanpham['id_nhom_sp'] ?>">
                            <button type="submit" name="themgiohang" class="add-cart">Thêm Giỏ Hàng <i class="icon fas fa-plus-circle"></i></button>
                           
                        </div>
                        </form>
                    </div>
                    
                </div>
               
                    <?php } ?>
                       
                    </div>
                </div>
                <!-- sản phẩm đang bán -->
                <div class="tab-pane fade" id="on-sell" role="tabpanel" aria-labelledby="on-sell-tab">
                    <div class="row">
                    <?php 
                  foreach ($listsanphammoi as $sanpham){
                    extract($sanpham);
                    $gia_thuong=$gia-$gia*0.15;
                    $gia_goc=$gia-$gia_thuong+$gia;
                    
                    $listmau1sp=loadAll_mau_1sp($sanpham['id_sanpham']);
                    ?>
                    <?php ?>
                    <div class="col-lg-3 col-md-4 col-sm-6"  >
                        <form action="<?=$dd?>" method="post">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="index.php?act=chitietsp&id_sanpham=<?=$id_sanpham?>&id_nhom_sp=<?=$id_nhom_sp?>"><img class="product-thumbnal" src="uploads/<?=$hinh_daidien?>" alt="product" /></a>
                            
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-info text-center">
                            <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                            <h3 class="product-name" style="height: 100px; font-size: 18px; "><a class="product-link" href="index.php?act=chitietsp&id_sanpham=<?=$id_sanpham?>&id_nhom_sp=<?=$id_nhom_sp?>" ><?=$ten_sanpham?></a></h3>
                            <ul class="product-review">
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price"><?=number_format($gia_goc,0,",",".")?> <u>đ</u></span>
                                <span class="price"><?=number_format($gia,0,",",".")?> <u>đ</u></span>
                            </div>
                            <div class="variable-single-item color-switch">
                                <div class="product-variable-color">
                                    <?php
                                            foreach ($listmau1sp as $mau){
                                                extract($mau);
                                                echo '
                                                <label >
                                                    <input name="mau"
                                                        class="color-select" type="radio" value="'.$mau['id_mau'].'" >
                                                    <span style="background-color: '.$mau['ma_mau'].';"></span>
                                                </label>
                                                ';
                                        
                                                }
                                        ?>

                                </div>
                            </div>

                            <ul class="size-switch">
                                <?php      
                                    $listsize1sp=loadAll_size_1sp($sanpham['id_sanpham']);                         
                                     foreach($listsize1sp as $size){
                                        extract($size);
                                        echo '
                                        <li class="single-size " style="padding: 0px;" ><label for="size_'.$size['id_size'].'_'.$sanpham['id_sanpham'].'_3" style=" padding: 6px; padding-left: 20px;padding-right: 20px; "><input type="radio" name="size" id="size_'.$size['id_size'].'_'.$sanpham['id_sanpham'].'_3" value="'.$size['id_size'].'" style="display: none;" >'.$size['ten_size'].'</label></li>
                                        ';
                                     }
                                   ?>
                              
                            </ul>
                            <input type="hidden" name="id_sanpham" value="<?=$sanpham['id_sanpham'] ?>">
                            <input type="hidden" name="id_nhom_sp" value="<?=$sanpham['id_nhom_sp'] ?>">
                            <button type="submit" name="themgiohang" class="add-cart">Thêm Giỏ Hàng <i class="icon fas fa-plus-circle"></i></button>
                           
                        </div>
                        </form>
                    </div>
                    
                </div>
               
                    <?php } ?>
                       
                    </div>
                    
                </div>
                <!-- sản phẩm nổi bật -->
                <div class="tab-pane fade" id="featured-items" role="tabpanel" aria-labelledby="featured-items-tab">
                    <div class="row">
                            <?php 
                  foreach ($listsanphamnoibat as $sanpham){
                    extract($sanpham);
                    $gia_thuong=$gia-$gia*0.15;
                    $gia_goc=$gia-$gia_thuong+$gia;
                    
                    $listmau1sp=loadAll_mau_1sp($sanpham['id_sanpham']);
                    ?>
                    <?php ?>
                    <div class="col-lg-3 col-md-4 col-sm-6"  >
                        <form action="<?=$dd?>" method="post">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="index.php?act=chitietsp&id_sanpham=<?=$id_sanpham?>&id_nhom_sp=<?=$id_nhom_sp?>"><img class="product-thumbnal" src="uploads/<?=$hinh_daidien?>" alt="product" /></a>
                            
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-info text-center">
                            <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                            <h3 class="product-name" style="height: 100px; font-size: 18px; "><a class="product-link" href="index.php?act=chitietsp&id_sanpham=<?=$id_sanpham?>&id_nhom_sp=<?=$id_nhom_sp?>" ><?=$ten_sanpham?></a></h3>
                            <ul class="product-review">
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price"><?=number_format($gia_goc,0,",",".")?> <u>đ</u></span>
                                <span class="price"><?=number_format($gia,0,",",".")?> <u>đ</u></span>
                            </div>
                            <div class="variable-single-item color-switch">
                                <div class="product-variable-color">
                                    <?php
                                            foreach ($listmau1sp as $mau){
                                                extract($mau);
                                                echo '
                                                <label >
                                                    <input name="mau"
                                                        class="color-select" type="radio" value="'.$mau['id_mau'].'" >
                                                    <span style="background-color: '.$mau['ma_mau'].';"></span>
                                                </label>
                                                ';
                                        
                                                }
                                        ?>

                                </div>
                            </div>

                            <ul class="size-switch">
                                <?php      
                                    $listsize1sp=loadAll_size_1sp($sanpham['id_sanpham']);                         
                                     foreach($listsize1sp as $size){
                                        extract($size);
                                        echo '
                                        <li class="single-size " style="padding: 0px;" ><label for="size_'.$size['id_size'].'_'.$sanpham['id_sanpham'].'_4" style=" padding: 6px; padding-left: 20px;padding-right: 20px; "><input type="radio" name="size" id="size_'.$size['id_size'].'_'.$sanpham['id_sanpham'].'_4" value="'.$size['id_size'].'" style="display: none;" >'.$size['ten_size'].'</label></li>
                                        ';
                                     }
                                   ?>
                              
                            </ul>
                            <input type="hidden" name="id_sanpham" value="<?=$sanpham['id_sanpham'] ?>">
                            <input type="hidden" name="id_nhom_sp" value="<?=$sanpham['id_nhom_sp'] ?>">
                            <button type="submit" name="themgiohang" class="add-cart">Thêm Giỏ Hàng <i class="icon fas fa-plus-circle"></i></button>
                           
                        </div>
                        </form>
                    </div>
                    
                </div>
               
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Products area end here  -->

    <!-- product banenr area start here  -->
    <div class="product-banner pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <a href="shop-list.html" class="single-banner"><img class="banner-image" src="public/assets_client/images/product-banner-1.jpg" alt="product-banner" /></a>
                </div>
                <div class="col-md-7">
                    <a href="shop-list-left-sidebar.html" class="single-banner"><img class="banner-image" src="public/assets_client/images/product-banner-2.jpg" alt="product-banner" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- product banenr area end here  -->

    <!-- Blog area start here  -->
    <div class="blog-area section-top section-bg pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">Blogspot</h3>
                        <h2 class="section-title">Tin Tức Từ Blog Của Chúng Tôi</h2>
                    </div>
                    <div class="col-md-6 align-self-end text-md-end">
                        <a href="index.php?act=baiviet" class="see-btn">Nhìn Thấy Tất Cả</a>
                    </div>
                </div>
            </div>

            <div class="blog-slide">
                <?php foreach ($listbaiviet as $baiviet ){
                    extract($baiviet);
                    echo '
                    <!-- Blog Item Start -->
                    <div class="single-grid-blog">
                        <div class="blog-thumbnail">
                            <a href="index.php?act=chitietbaiviet&id_baiviet='.$id_baiviet.'"><img class="thumbnail-image" src="uploads/'.$hinh.'" alt="blog" /></a>
                        </div>
                        <div class="blog-info">

                            <h3 class="blog-title"><a class="blog-link" href="index.php?act=chitietbaiviet&id_baiviet='.$id_baiviet.'" style="font-size: 20px; height:60px;" >'.$tieude.'</a></h3>
                            <p class="blog-content" style="height:120px;">'.$mota.'</p>
                            <a class="blog-btn" href="index.php?act=chitietbaiviet&id_baiviet='.$id_baiviet.'"  >Xem Chi Tiết</a>
                        </div>
                    </div>
                    <!-- Blog Item End -->
                    ';

  
                } ?>


                
            </div>
        </div>
    </div>
    <!-- Blog area end here  -->

    <!-- Image Gallery area start here  -->
    <div class="image-gallery-area section-top pb-110">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4">
                    <div class="section-header-area">
                        <h3 class="sub-title">Thư Viện Hình Ảnh</h3>
                        <h2 class="section-title">Thư Viện Hình Ảnh Tới Zairito Để Mang Lại Trải Nghiệm Mua Sắm Trực Tuyến Tốt Hơn</h2>
                    </div>
                    
                    <div class="single-gallery">
                        <img class="gallery-image" src="public/assets_client/images/gallery-1.jpg" alt="gallery" />
                        <div class="popuo-overlay">
                            <a class="popup-image" href="public/assets_client/images/gallery-1.jpg"><i class="view-icon flaticon-view"></i></a>
                        </div>
                    </div>
                    <div class="single-gallery big-height">
                        <img class="gallery-image" src="public/assets_client/images/gallery-2.jpg" alt="gallery" />
                        <div class="popuo-overlay">
                            <a class="popup-image" href="public/assets_client/images/gallery-2.jpg"><i class="view-icon flaticon-view"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="single-gallery">
                        <img class="gallery-image" src="public/assets_client/images/gallery-3.jpg" alt="gallery" />
                        <div class="popuo-overlay">
                            <a class="popup-image" href="public/assets_client/images/gallery-3.jpg"><i class="view-icon flaticon-view"></i></a>
                        </div>
                    </div>
                    <div class="single-gallery">
                        <img class="gallery-image" src="public/assets_client/images/gallery-4.jpg" alt="gallery" />
                        <div class="popuo-overlay">
                            <a class="popup-image" href="public/assets_client/images/gallery-4.jpg"><i class="view-icon flaticon-view"></i></a>
                        </div>
                    </div>
                    <div class="single-gallery">
                        <img class="gallery-image" src="public/assets_client/images/gallery-5.jpg" alt="gallery" />
                        <div class="popuo-overlay">
                            <a class="popup-image" href="public/assets_client/images/gallery-5.jpg"><i class="view-icon flaticon-view"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="single-gallery">
                        <img class="gallery-image" src="public/assets_client/images/gallery-6.jpg" alt="gallery" />
                        <div class="popuo-overlay">
                            <a class="popup-image" href="public/assets_client/images/gallery-6.jpg"><i class="view-icon flaticon-view"></i></a>
                        </div>
                    </div>
                    <div class="single-gallery">
                        <img class="gallery-image" src="public/assets_client/images/gallery-7.jpg" alt="gallery" />
                        <div class="popuo-overlay">
                            <a class="popup-image" href="public/assets_client/images/gallery-7.jpg"><i class="view-icon flaticon-view"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Image Gallery area end here  -->

    <!-- Testimonial ara start here  -->
    <div class="testimonial-area section section-bg">
        <div class="container">
            <div class="section-header-area text-center">
                <h3 class="sub-title">Testimonial</h3>
                <h2 class="section-title">What People Are <br />Saying About Oursalve</h2>
                <p>Praesent sapien massa, convallis a pellentesque nec, egestas
                    Vivamus magna justo, lacinia eget consectetur sed</p>
            </div>

            <div class="testimonial-slide-top">

                <!-- Testimonial authors Float Images Start -->
                <img src="public/assets_client/images/testimonial-images/l-1.png" alt="img" class="testimonial-float-img testimonial-left-1 position-absolute">
                <img src="public/assets_client/images/testimonial-images/l-2.png" alt="img" class="testimonial-float-img testimonial-left-2 position-absolute">
                <img src="public/assets_client/images/testimonial-images/l-3.png" alt="img" class="testimonial-float-img testimonial-left-3 position-absolute">
                <img src="public/assets_client/images/testimonial-images/l-4.png" alt="img" class="testimonial-float-img testimonial-left-4 position-absolute">
                <img src="public/assets_client/images/testimonial-images/r-1.png" alt="img" class="testimonial-float-img testimonial-right-1 position-absolute">
                <img src="public/assets_client/images/testimonial-images/r-2.png" alt="img" class="testimonial-float-img testimonial-right-2 position-absolute">
                <img src="public/assets_client/images/testimonial-images/r-3.png" alt="img" class="testimonial-float-img testimonial-right-3 position-absolute">
                <img src="public/assets_client/images/testimonial-images/r-4.png" alt="img" class="testimonial-float-img testimonial-right-4 position-absolute">
                <!-- Testimonial authors Float Images End -->

                <img class="shape-image" src="public/assets_client/images/shape.png" alt="shape" />
                <div class="testimonial-image-slide">
                    <div class="signle-testimonial-image"><img class="testimonial-image" src="public/assets_client/images/testimonal-image-1.png" alt="testimonal-image" /></div>
                    <div class="signle-testimonial-image"><img class="testimonial-image" src="public/assets_client/images/testimonal-image-2.png" alt="testimonal-image" /></div>
                    <div class="signle-testimonial-image"><img class="testimonial-image" src="public/assets_client/images/testimonal-image-3.png" alt="testimonal-image" /></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="testimonail-slide">
                        <div class="single-testimonial">
                            <p class="testimonial-text">Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Proin eget tortor risus. Proin eget tortor risus. Curabitur arcu</p>
                            <h3 class="testimonial-title">Andrew Franklin Saimond</h3>
                            <ul class="review-area">
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                            </ul>
                        </div>
                        <div class="single-testimonial">
                            <p class="testimonial-text">Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Proin eget tortor risus. Proin eget tortor risus. Curabitur arcu</p>
                            <h3 class="testimonial-title">Bndrew Aranklin</h3>
                            <ul class="review-area">
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                            </ul>
                        </div>
                        <div class="single-testimonial">
                            <p class="testimonial-text">Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Proin eget tortor risus. Proin eget tortor risus. Curabitur arcu</p>
                            <h3 class="testimonial-title">Dndrew Jaimond</h3>
                            <ul class="review-area">
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Testimonial ara end here  -->
