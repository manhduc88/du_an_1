
    
        <!-- breadcrumb area start here  -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">Bộ sửu tập</h2>
                    <ul class="breadcrumb-pages">
                        <li class="page-item"><a class="page-item-link" href="index.php">Trang chủ</a></li>
                        <li class="page-item">Bộ sửu tập</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end here  -->

        <!-- Product Area Start -->
        <div class="product-area section">
            <div class="container">
                <div class="row">
                <div class="col-xl-3 col-lg-4">
                <form action="index.php?act=danhsachsp" method="post">
                        <div class="sidebar-widget-area mobile-sidebar">
                            <div class="sidebar-widget-header d-block d-lg-none">
                                <div class="widget-header-wrap">
                                    <h5 class="offcanvas-title">Filter</h5>
                                    <button type="button" class="btn-close text-reset sidebar-close"></button>
                                </div>
                            </div>

                            <div class="single-widget search-widget">
                                <h3 class="widget-title">Tìm kiếm</h3>
                                <form action="index.php?act=danhsachnhomsp" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="searchwidget" name="kyw" placeholder="Cửa hàng sản phẩm" />
                                        <button type="submit" class="search-btn"><i class="flaticon-search"></i></button>
                                    </div>
                                </form>
                            </div>

                            <div class="single-widget categories-widget">
                                <h3 class="widget-title">Thể loại</h3>
                                <div class="categories-list">
                                <?php 
                                    foreach ($listnhomsp as $nhomsp){
                                        extract($nhomsp);
                                        echo '
                                        <div class="single-categorie" style="margin-top:10px ;">
                                            <div class="categorie-left">
                                                <input class="form-check-input" type="checkbox" id="'.$id_nhom_sp.'" name="id_nhomsp" value="'.$id_nhom_sp.'">
                                                <label class="form-check-label" for="'.$id_nhom_sp.'">'.$nhom_sp.'</label>
                                            </div>
                                        </div>
                                        ';
 
                                       }
                                ?>

                                </div>
                            </div>

                            <div class="single-widget price-widget">
                                <h3 class="widget-title">Giá</h3>
                                    <div class="price-wrap">
                                        <div class="price-wrap-left">
                                            <div class="single-price">
                                                <input type="number" class="form-control" id="minprice" name="mingia" placeholder="$ Min" />
                                            </div>
                                            <div class="single-price">
                                                <input type="number" class="form-control" id="maxprice" name="maxgia" placeholder="$ Max" />
                                            </div>
                                        </div>
                                        <button type="submit" class="price-submit"><i class="fas fa-play"></i></button>
                                    </div>
                            </div>
                            <div class="single-widget brand-widget">
                                <h3 class="widget-title">Màu sắc</h3>
                                <div class="brand-list">
                                <?php 
                                    foreach ( $listmau as $mau){
                                        extract($mau);
                                        echo '
                                        <div class="single-brand">
                                            <div class="brand-left">
                                                <input class="form-check-input" type="checkbox" id="Renuar" value="'.$id_mau.'">
                                                <label class="form-check-label" for="Renuar">'.$ten_mau.'</label>
                                            </div>
                                        </div>
                                
                                        ';
 
                                       }
                                ?>
                                    
                                    
                                </div>
                            </div>
                            <div class="single-widget size-widget">
                                <h3 class="widget-title">Size</h3>
                                <div class="size-list">
                                    <?php foreach($listsize as $size){
                                        extract($size);
                                        echo '
                                        <div class="single-size">
                                            <input class="form-check-input" type="checkbox" name="size" id="'.$ten_size.'">
                                            <label class="form-check-label" for="'.$ten_size.'">'.$ten_size.'</label>
                                        </div>
                                        ';

                                    } ?>
                                   
                      
                                </div>
                            </div>

                            <div class="single-widget rating-widget">
                                <h3 class="widget-title">Đánh giá</h3>
                                <ul class="rating-list">
                                    <li class="rating-item">
                                        <a class="rating-link" href="#">
                                            <i class="flaticon-star active"></i>
                                            <i class="flaticon-star active"></i>
                                            <i class="flaticon-star active"></i>
                                            <i class="flaticon-star active"></i>
                                            <i class="flaticon-star active"></i>
                                        </a>
                                    </li>
                                    <li class="rating-item">
                                        <a class="rating-link" href="#">
                                            <i class="flaticon-star active"></i>
                                            <i class="flaticon-star active"></i>
                                            <i class="flaticon-star active"></i>
                                            <i class="flaticon-star active"></i>
                                            <i class="flaticon-star"></i>
                                            <span class="and-up-text">Và lên</span>
                                        </a>
                                    </li>
                                    <li class="rating-item">
                                        <a class="rating-link" href="#">
                                            <i class="flaticon-star active"></i>
                                            <i class="flaticon-star active"></i>
                                            <i class="flaticon-star active"></i>
                                            <i class="flaticon-star"></i>
                                            <i class="flaticon-star"></i>
                                            <span class="and-up-text">Và lên</span>
                                        </a>
                                    </li>
                                    <li class="rating-item">
                                        <a class="rating-link" href="#">
                                            <i class="flaticon-star active"></i>
                                            <i class="flaticon-star active"></i>
                                            <i class="flaticon-star"></i>
                                            <i class="flaticon-star"></i>
                                            <i class="flaticon-star"></i>
                                            <span class="and-up-text">Và lên</span>
                                        </a>
                                    </li>
                                    <li class="rating-item">
                                        <a class="rating-link" href="#">
                                            <i class="flaticon-star active"></i>
                                            <i class="flaticon-star"></i>
                                            <i class="flaticon-star"></i>
                                            <i class="flaticon-star"></i>
                                            <i class="flaticon-star"></i>
                                            <span class="and-up-text">Và lên</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-8">
                        <div class="product-section-top">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="product-section-top-left">
                                        <button class="sidebar-filter d-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                            Filter <img src="public/assets_client/images/angle-down.svg" alt="angle-down" />
                                        </button>
                                        <div class="list-grid-view">
                                            <a href="shop-list-left-sidebar.html" class="view-btn list-view"><img class="view-icon" src="public/assets_client/images/view-list.svg" alt="view-list" /></a>
                                            <a href="shop-grid-left-sidebar.html" class="view-btn grid-view active"><img class="view-icon" src="public/assets_client/images/view-grid.svg" alt="view-grid" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="product-filter">
                                        <p class="shoing-result">Showing 1 - 9 of 9 result</p>
                                        <form>
                                            <select class="form-select">
                                                <option selected>Default Sorting</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-list">
                            <div class="row">
                            <?php
                        foreach ($results as $row){
                            extract($row);
                            $gia_thuong=$gia-$gia*0.15;
                            $gia_goc=$gia-$gia_thuong+$gia;
                            if(isset($_SESSION['user'])){
                                $dd="index.php?act=home_addgiohang";
                            }else{
                                $dd="index.php?act=dangnhap";
                            }
                            ?>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                            <form action="<?=$dd?>" method="post">
                            <div class="single-grid-product">
                                <div class="product-top">
                                    <a href="index.php?act=chitietsp&id_sanpham=<?=$row['id_sanpham']?>&id_nhom_sp=<?=$row['id_nhom_sp']?>"><img class="product-thumbnal" src="uploads/<?=$row['hinh_daidien']?>" alt="product" /></a>
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
                                    <h3 class="product-name" style="height: 100px; font-size: 18px; "><a class="product-link" href="index.php?act=chitietsp&id_sanpham=<?=$row['id_sanpham']?>&id_nhom_sp=<?=$row['id_nhom_sp']?>"><?=$row['ten_sanpham']?></a></h3>
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
                                                $listmau1sp=loadAll_mau_1sp($row['id_sanpham']) ;
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
                                        $listsize1sp=loadAll_size_1sp($row['id_sanpham']);                         
                                        foreach($listsize1sp as $size){
                                        extract($size);
                                        echo '
                                        <li class="single-size " style="padding: 0px;" ><label for="size_'.$size['id_size'].'_'.$row['id_sanpham'].'" style=" padding: 6px; padding-left: 20px;padding-right: 20px; "><input type="radio" name="size" id="size_'.$size['id_size'].'_'.$row['id_sanpham'].'" value="'.$size['id_size'].'" style="display: none;" >'.$size['ten_size'].'</label></li>
                                        ';
                                        }
                                    ?>
                                    </ul>
                                    <input type="hidden" name="id_sanpham" value="<?=$row['id_sanpham'] ?>">
                                    <input type="hidden" name="id_nhom_sp" value="<?=$row['id_nhom_sp'] ?>">
                                    <button type="submit" name="themgiohang" class="add-cart">Thêm Giỏ Hàng <i class="icon fas fa-plus-circle"></i></button>
                                </div>
                                </form>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                                
                            </div>

                            <div class="pagination-area mt-30">
                                <ul class="paginations text-center">
                                    <li class="pagination-page"><a href="#" class="pagination-link"><i class="fas fa-angle-double-left"></i></a></li>
                                    <?php 
                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                if($page==$i){
                                                    $color=" active ";
                                                }
                                                else {
                                                    $color="";
                                                }
                                                echo '<li class="pagination-page '.$color.'"><a href="index.php?act=danhsachnhomsp&page='.$i.'" class="pagination-link">'.$i.'</a></li>';
                                               }
                                    ?>
                                    <li class="pagination-page"><a href="#" class="pagination-link"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- For Mobile Filter Sidebar Start -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filter</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="sidebar-widget-area">
                    <div class="single-widget search-widget p-0 bg-transparent">
                        <h3 class="widget-title">Search Here</h3>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" class="form-control bg-color" id="searchwidget1" name="searchwidget1" placeholder="Product Store" />
                                <button type="submit" class="search-btn"><i class="flaticon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="single-widget categories-widget p-0 bg-transparent">
                        <h3 class="widget-title">Categories</h3>
                        <div class="categories-list">
                            <div class="single-categorie">
                                <div class="categorie-left">
                                    <input class="form-check-input" type="checkbox" id="Tshirts1">
                                    <label class="form-check-label" for="Tshirts1">T-shirts & shirts</label>
                                </div>
                                <span class="categories-count">16</span>
                            </div>
                            <div class="single-categorie">
                                <div class="categorie-left">
                                    <input class="form-check-input" type="checkbox" id="Jackets1">
                                    <label class="form-check-label" for="Jackets1">Jackets</label>
                                </div>
                                <span class="categories-count">6</span>
                            </div>
                            <div class="single-categorie">
                                <div class="categorie-left">
                                    <input class="form-check-input" type="checkbox" id="Sports1">
                                    <label class="form-check-label" for="Sports1">Sports & Active Wear</label>
                                </div>
                                <span class="categories-count">8</span>
                            </div>
                            <div class="single-categorie">
                                <div class="categorie-left">
                                    <input class="form-check-input" type="checkbox" id="Blazers1">
                                    <label class="form-check-label" for="Blazers1">Blazers & Coats</label>
                                </div>
                                <span class="categories-count">10</span>
                            </div>
                            <div class="single-categorie">
                                <div class="categorie-left">
                                    <input class="form-check-input" type="checkbox" id="Overshirts1">
                                    <label class="form-check-label" for="Overshirts1">Overshirts</label>
                                </div>
                                <span class="categories-count">3</span>
                            </div>
                            <div class="single-categorie">
                                <div class="categorie-left">
                                    <input class="form-check-input" type="checkbox" id="Coats1">
                                    <label class="form-check-label" for="Coats1">Coats & Jackets</label>
                                </div>
                                <span class="categories-count"></span>
                            </div>
                        </div>
                    </div>
                    <div class="single-widget price-widget p-0 bg-transparent">
                        <h3 class="widget-title">Price</h3>
                        <form action="#">
                            <div class="price-wrap">
                                <div class="price-wrap-left">
                                    <div class="single-price">
                                        <input type="number" class="form-control" id="minprice1" name="minprice1" placeholder="$ Min" />
                                    </div>
                                    <div class="single-price">
                                        <input type="number" class="form-control" id="maxprice1" name="maxprice1" placeholder="$ Max" />
                                    </div>
                                </div>
                                <button type="submit" class="price-submit"><i class="fas fa-play"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="single-widget colors-widget p-0 bg-transparent">
                        <h3 class="widget-title">Colors</h3>
                        <div class="colors-list">
                            <div class="single-colors">
                                <div class="colors-left">
                                    <input class="form-check-input green" type="checkbox" id="Jungle1">
                                    <label class="form-check-label" for="Jungle1">Jungle Green</label>
                                </div>
                                <span class="colors-count">15</span>
                            </div>
                            <div class="single-colors">
                                <div class="colors-left">
                                    <input class="form-check-input cerise" type="checkbox" id="Cerise1">
                                    <label class="form-check-label" for="Cerise1">Cerise</label>
                                </div>
                                <span class="colors-count">18</span>
                            </div>
                            <div class="single-colors">
                                <div class="colors-left">
                                    <input class="form-check-input magi-mint" type="checkbox" id="MagicMint1">
                                    <label class="form-check-label" for="MagicMint1">Magic Mint</label>
                                </div>
                                <span class="colors-count">9</span>
                            </div>
                            <div class="single-colors">
                                <div class="colors-left">
                                    <input class="form-check-input pink-sherbet" type="checkbox" id="PinkSherbet1">
                                    <label class="form-check-label" for="PinkSherbet1">Pink Sherbet</label>
                                </div>
                                <span class="colors-count">26</span>
                            </div>
                            <div class="single-colors">
                                <div class="colors-left">
                                    <input class="form-check-input vivid-tangerine" type="checkbox" id="VividTangerine1">
                                    <label class="form-check-label" for="VividTangerine1">Vivid Tangerine</label>
                                </div>
                                <span class="colors-count">6</span>
                            </div>
                            <div class="single-colors">
                                <div class="colors-left">
                                    <input class="form-check-input hot-magenta" type="checkbox" id="HotMagenta1">
                                    <label class="form-check-label" for="HotMagenta1">Hot Magenta</label>
                                </div>
                                <span class="colors-count">11</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-widget size-widget p-0 bg-transparent">
                        <h3 class="widget-title">Size</h3>
                        <div class="size-list">
                            <div class="single-size">
                                <input class="form-check-input" type="checkbox" id="SMALL1">
                                <label class="form-check-label" for="SMALL1">SMALL</label>
                            </div>
                            <div class="single-size">
                                <input class="form-check-input" type="checkbox" id="MEDIUM1">
                                <label class="form-check-label" for="MEDIUM1">MEDIUM</label>
                            </div>
                            <div class="single-size">
                                <input class="form-check-input" type="checkbox" id="LARGE1">
                                <label class="form-check-label" for="LARGE1">LARGE</label>
                            </div>
                            <div class="single-size">
                                <input class="form-check-input" type="checkbox" id="XL1">
                                <label class="form-check-label" for="XL1">XL</label>
                            </div>
                            <div class="single-size">
                                <input class="form-check-input" type="checkbox" id="XXL1">
                                <label class="form-check-label" for="XXL1">XXL</label>
                            </div>
                            <div class="single-size">
                                <input class="form-check-input" type="checkbox" id="XXXL1">
                                <label class="form-check-label" for="XXXL1">XXXL</label>
                            </div>
                        </div>
                    </div>
                    <div class="single-widget brand-widget p-0 bg-transparent">
                        <h3 class="widget-title">Brand</h3>
                        <div class="brand-list">
                            <div class="single-brand">
                                <div class="brand-left">
                                    <input class="form-check-input" type="checkbox" id="Renuar1">
                                    <label class="form-check-label" for="Renuar1">Renuar</label>
                                </div>
                                <span class="brand-count"></span>
                            </div>
                            <div class="single-brand">
                                <div class="brand-left">
                                    <input class="form-check-input" type="checkbox" id="Zara1">
                                    <label class="form-check-label" for="Zara1">Zara</label>
                                </div>
                                <span class="brand-count">64</span>
                            </div>
                            <div class="single-brand">
                                <div class="brand-left">
                                    <input class="form-check-input" type="checkbox" id="Bershka1">
                                    <label class="form-check-label" for="Bershka1">Bershka</label>
                                </div>
                                <span class="brand-count">81</span>
                            </div>
                            <div class="single-brand">
                                <div class="brand-left">
                                    <input class="form-check-input" type="checkbox" id="HM1">
                                    <label class="form-check-label" for="HM1">H&M</label>
                                </div>
                                <span class="brand-count">77</span>
                            </div>
                            <div class="single-brand">
                                <div class="brand-left">
                                    <input class="form-check-input" type="checkbox" id="Stradivarius1">
                                    <label class="form-check-label" for="Stradivarius1">Stradivarius</label>
                                </div>
                                <span class="brand-count">75</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-widget tags-widget p-0 bg-transparent">
                        <h3 class="widget-title">Tags</h3>
                        <ul class="tags-list">
                            <li class="tag-item"><a class="tag-link active" href="shop-grid-left-sidebar.html">Fashion</a></li>
                            <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Hats</a></li>
                            <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Vagabond</a></li>
                            <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Sandal</a></li>
                            <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Beachwear</a></li>
                            <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Sunglasses</a></li>
                            <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Denim</a></li>
                            <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Magenta</a></li>
                            <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">leather</a></li>
                            <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Vagabond</a></li>
                        </ul>
                    </div>
                    <div class="single-widget rating-widget p-0 bg-transparent">
                        <h3 class="widget-title">Đánh giá</h3>
                        <ul class="rating-list">
                            <li class="rating-item">
                                <a class="rating-link" href="#">
                                    <i class="flaticon-star active"></i>
                                    <i class="flaticon-star active"></i>
                                    <i class="flaticon-star active"></i>
                                    <i class="flaticon-star active"></i>
                                    <i class="flaticon-star active"></i>
                                </a>
                            </li>
                            <li class="rating-item">
                                <a class="rating-link" href="#">
                                    <i class="flaticon-star active"></i>
                                    <i class="flaticon-star active"></i>
                                    <i class="flaticon-star active"></i>
                                    <i class="flaticon-star active"></i>
                                    <i class="flaticon-star"></i>
                                    <span class="and-up-text">Và lên</span>
                                </a>
                            </li>
                            <li class="rating-item">
                                <a class="rating-link" href="#">
                                    <i class="flaticon-star active"></i>
                                    <i class="flaticon-star active"></i>
                                    <i class="flaticon-star active"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <span class="and-up-text">Và lên</span>
                                </a>
                            </li>
                            <li class="rating-item">
                                <a class="rating-link" href="#">
                                    <i class="flaticon-star active"></i>
                                    <i class="flaticon-star active"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <span class="and-up-text">Và lên</span>
                                </a>
                            </li>
                            <li class="rating-item">
                                <a class="rating-link" href="#">
                                    <i class="flaticon-star active"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <i class="flaticon-star"></i>
                                    <span class="and-up-text">Và lên</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- For Mobile Filter Sidebar End -->
