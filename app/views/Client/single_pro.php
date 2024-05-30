<?php if(is_array($sanpham)){
    extract($sanpham);
    $view=$luotxem+1;
    update_luotxem_sanpham($id_sanpham,$view);
  } 
  if(isset($_SESSION['user'])){
    $ddtgh="themgiohang";
    $ddmn="muangay";

  }else{
    $ddtgh="dangnhap";
    $ddmn="dangnhap";
  } 
?>

        <!-- breadcrumb area start here  -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">Trang Đơn Sản Phẩm </h2>
                    <ul class="breadcrumb-pages">
                        <li class="page-item"><a class="page-item-link" href="index.php">Trang Chủ</a></li>
                        <li class="page-item">Trang Đơn Sản Phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end here  -->

        <!-- product-single-area start here  -->
        <div class="product-single-area section-top">
            <div class="container">
                <div class="product-single-details">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-single-left">
                                <div class="product-thumbnail-image">
                                    <ul class="product-thumb-silide slider slider-nav">
                                    <?php
                                           foreach ($listanhmota as $anhmota){
                                            extract($anhmota);
                                            echo '
                                            <li class="single-item"><img class="single-item-image" src="uploads/'.$hinh_sanpham.'" alt="product" /></li>
                                            ';
                                           }
                                        ?>
                                        

                                    </ul>
                                </div>
                                <div class="product-slier-big-image">
                                    <div class="product-priview-slide slider slider-for">
                                        <?php
                                           foreach ($listanhmota as $anhmota){
                                            extract($anhmota);
                                            echo '
                                            <div class="single-slide" >
                                            <img class="slide-image" src="uploads/'.$hinh_sanpham.'" alt="product"   />
                                            </div>
                                            ';
                                           }
                                        ?>


                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" >
                            <div class="product-single-right">
                                <form action="index.php?act=addgiohang" method="post">
                                <div class="product-info">
                                    <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                    <h3 class="product-name" style="font-size: 25px;" ><?=$ten_sanpham?></h3>
                                    <ul class="product-review">

                                        <li class="review-item active"><i class="flaticon-star"></i></li>
                                        <li class="review-item active"><i class="flaticon-star"></i></li>
                                        <li class="review-item active"><i class="flaticon-star"></i></li>
                                        <li class="review-item"><i class="flaticon-star"></i></li>
                                        <li class="review-item"><i class="flaticon-star"></i></li>
                                    </ul>

                                    <div class="product-price">

                                        <span class="regular-price"><?php                     
                                        $gia_thuong=$gia-$gia*0.15;
                                        $gia_goc=$gia-$gia_thuong+$gia; echo number_format($gia_goc,0,",",".")?>
                                        <u>đ</u></span>
                                        <span class="price"><?=number_format($gia,0,",",".")?><u>đ</u></span>
                                    </div>

                                    <p class="note-text">Xin lưu ý: Chúng tôi có sản phẩm này tại kho hàng Hoa Kỳ. Nếu điểm đến có nghĩa là bạn có thể nhận được bưu kiện nhanh hơn và sớm hơn dự kiến.</p>
                                    
                                    <div class="product-color-area">
                                        <h4 class="color-title">COLOR</h4>
                                            <div class="variable-single-item color-switch">
                                        <div class="product-variable-color">
                                        <?php
                                            foreach ($listmau1sp as $mau){
                                                extract($mau);
                                                echo '
                                                <label>
                                                <input name="mau" class="color-select" type="radio" value="'.$id_mau.'">
                                                <span class="product-color" style="background-color: '.$mau['ma_mau'].';" ></span>
                                                <p style="margin-top: 10px;">'.$ten_mau.'</p>
                                                </label>
                                                ';
                                        
                                                }
                                        ?>

                                        
                                        
                                       </div>
                                    </div>
                                    </div>

                                    <div class="product-color-area">
                                        <h4 class="color-title">SIZE</h4>
                                            <div class="variable-single-item color-switch">
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
                                    </div>
                                    </div>

                                    <div class="prdouct-btn-wrapper d-flex align-items-center">
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton btn">-</div>
                                            <input class="cart-plus-minus-box" type="number" name="soluong" value="1"  max="<?php foreach ($soluongsp as $sl){extract($sl); echo $soluongsp;} ?>" min="1" />
                                            <div class="inc qtybutton btn">+</div>
                                        </div>
                                        <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                        <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </div>
                                    <div class="product-bottom-button d-flex">
                                        <input type="hidden" name="id_sanpham" value="<?=$id_sanpham ?>">
                                        <input type="hidden" name="id_nhom_sp" value="<?=$id_nhom_sp ?>">

                                        <input type="submit" name="<?=$ddmn?>" id="" class="primary-btn" value="Mua Ngay">
                                        <input type="submit" name="<?=$ddtgh?>" id="" title="Add to cart" class="add-cart" value="Thêm Giỏ Hàng">
                                    </div>
                                    
                                </div>
                                </form>
                                <div class="product-right-bottom">
                                    <ul class="features">
                                        <li class="single-feature"><strong class="feature-title">số lượng:</strong><span ><?=$soluongsp?></span></li>
                                        <li class="single-feature"><strong class="feature-title">Lượt xem:</strong><span ><?=$luotxem?></span></li>
                                        <li class="single-feature"><strong class="feature-title">Lượt bán:</strong><span ><?=$luotban?></span></li>
                                        <li class="single-feature"><img class="icon" src="public/assets_client/images/delivery-van-icon.svg" alt="icon" /><strong class="feature-title">Dự Kiến ​​Giao Hàng:</strong><span class="feature-text">13 tháng 9 - 17 tháng 9</span></li>
                                        <li class="single-feature"><img class="icon" src="public/assets_client/images/shipping-return.svg" alt="icon" /><strong class="feature-title">Miễn Phí Vận Chuyển Và Trả Lại:</strong><span class="feature-text">Với tất cả các đơn hàng trên 50.000 đ</span></li>
                                    </ul>
                                    <div class="guarantee-checkout-area">
                                        <h3 class="guarantee-title">Đảm Bảo Thanh Toán An Toàn Và Bảo Mật</h3>
                                        <img src="public/assets_client/images/payment-method-image.png" alt="payment-method-image" />
                                    </div>
                                    <div class="share-area mt-30">
                                        <h3 class="share-title">Chia Sẻ:</h3>
                                        <ul class="social-media">
                                            <li class="media-item"><a class="media-link facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="media-item"><a class="media-link twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                            <li class="media-item"><a class="media-link linkedin" href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="media-item"><a class="media-link pinterest" href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-bottom-info mt-50">
                    <div class="nav-tabs-menu">
                        <ul class="nav nav-tabs" id="ProductTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="Description-tab" data-bs-toggle="tab" data-bs-target="#Description" type="button" role="tab" aria-controls="Description" aria-selected="true">Mô Tả</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="Reviews-tab" data-bs-toggle="tab" data-bs-target="#Reviews" type="button" role="tab" aria-controls="Reviews" aria-selected="false">Bình luận</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="Shipping-Return-tab" data-bs-toggle="tab" data-bs-target="#Shipping-Return" type="button" role="tab" aria-controls="Shipping-Return" aria-selected="false">Vân Chuyển & Trả Lại</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="Additional-Information-tab" data-bs-toggle="tab" data-bs-target="#Additional-Information" type="button" role="tab" aria-controls="Additional-Information" aria-selected="false">Thông Tin Thêm</button>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="ProductTabContent">

                        <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                            <div class="product-description">
                                <p class="description-text"><?=$mota?></p>
                            </div>
                        </div>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

                        <script>
                         $(document).ready(function(){
                         $("#Reviews").load("app/views/Client/binhluanform.php", {id_sanpham: <?=$id_sanpham?>});
                         });
                        </script>
                        <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                            
                        </div>
                        <div class="tab-pane fade" id="Shipping-Return" role="tabpanel" aria-labelledby="Shipping-Return-tab">
                            <div class="shipping-return-area">
                                <div class="single-return-policy">
                                    <h3 class="return-title">CHÍNH SÁCH TRẢ LẠI</h3>
                                    <p class="return-text">Khách hàng rất quan trọng, khách hàng sẽ được khách hàng theo đuổi. Nụ cười làm dịu đi bệnh tật. Cho đến khi mềm mại và đất và trang điểm. Và khi loài Orc được sinh ra, những ngọn núi sẽ sinh ra những chiếc lông vũ và những chiếc cựa lớn, và một con chuột lố bịch sẽ được sinh ra. Là kết quả của hương vị nguyên chất của sô cô la. Maurice và Chúa trước đây. Đã đến lúc bọn trẻ phải làm bài tập về nhà. Cho đến khi các thành viên trong nồi protein, nhưng người ta đã nói. Để giao việc nhà miễn phí, có người từ một cánh cổng nào đó.</p>
                                    <p class="return-text">Cho đến khi cơ thể lớn lên, sự lên men của sự sống là yếu tố cơ bản. Đôi khi cơn đói được mong đợi và trước đó nó là thứ đầu tiên chảy vào cổ họng.</p>
                                    <p class="return-text">Tro chuyện vơi tôi. Trong gói chính nó. Thỉnh thoảng trang điểm một chút. Bây giờ không có Maecenas, anh ấy đầu tư vào eleifend, phim hoạt hình etos sem. Vì sợ mũi tên của hồ, phẩm giá tâng bốc euismod vĩ đại. Anh ấy gây ấn tượng với người hâm mộ. Trình độ phát triển cần được nâng cao. Những đứa con của sự sống của Chúa ở lacinia, nó thật độc hại, hãy để nó như vậy, đó là một niềm hạnh phúc. Không ai quan trọng cả, kể cả với tôi.</p>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="Additional-Information" role="tabpanel" aria-labelledby="Additional-Information-tab">
                            <div class="additional-information-area">
                                <p class="additional-information-text">Mọi người đều muốn ngoại trừ giá ở mức lacinia cho yếu tố đó. Trẻ em bước vào ngay cửa phòng khám. Mauris tâng bốc giới thượng lưu, cần sự tin cậy nibh pulvinar a. Hãy sống công bằng tuyệt vời, Lacinia cần phải được tuân theo, nhưng thung lũng và khu vực. Lớp học nịnh nọt để dâng lên Chúa. Đó là một khối khôn ngoan, thung lũng thậm chí không dành cho trẻ em, nó chỉ cần thiết. Cho đến khi sự quan tâm của nhân viên được mong đợi. Không có thứ gọi là feugiat nam miễn phí. Không có thứ gọi là feugiat nam miễn phí. Ngày mai cổng nghe nói nhỏ mà lớn. Mauris tâng bốc giới thượng lưu, cần sự tin cậy nibh pulvinar a. Nhưng hãng hàng không đã chọn giá. Mauris tâng bốc giới thượng lưu, cần sự tin cậy nibh pulvinar a. Không có thứ gọi là feugiat nam miễn phí. </p>
                                <ul class="additional-feature">
                                    <li class="single-feature">
                                        <h3 class="feature-title">Thoải Mái:</h3>
                                        <p class="feature-text">Thoải mái vào giữa đêm</p>
                                    </li>
                                    <li class="single-feature">
                                        <h3 class="feature-title">Người Đoạt Giải Mattis:</h3>
                                        <p class="feature-text">Sơ yếu lý lịch hay bình đựng mềm mattis laoreet.</p>
                                    </li>
                                    <li class="single-feature">
                                        <h3 class="feature-title">Ametos Divamus:</h3>
                                        <p class="feature-text">Hãy để nó trong sáng và thuần khiết</p>
                                    </li>
                                    <li class="single-feature">
                                        <h3 class="feature-title">Rắc Rối:</h3>
                                        <p class="feature-text">Ví dụ, bệnh nhân cần được đối xử bằng nụ cười</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-single-area end here  -->

        <!-- Featured Products area start here  -->
        <div class="featured-productss-area section-top pb-100">
            <div class="container">
                <div class="section-header-area">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="sub-title">Sản Phẩm Tương Tự</h3>
                            <h2 class="section-title">Những Sảm Phẩm Tương Tự</h2>
                        </div>
                        <div class="col-md-6 align-self-end text-md-end">
                            <a href="index.php?act=danhsachnhomsp&id_nhom_sp=<?=$id_nhom_sp?>" class="see-btn">Nhìn Thấy Tất Cả</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                <?php 
                  foreach ($listsptuongtu as $sanpham){
                    extract($sanpham);
                    $gia_thuong=$gia-$gia*0.15;
                    $gia_goc=$gia-$gia_thuong+$gia;
                    echo '
                    <div class="col-lg-3 col-md-4 col-sm-6"  >
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="index.php?act=chitietsp&id_sanpham='.$id_sanpham.'&id_nhom_sp='.$id_nhom_sp.'"><img class="product-thumbnal" src="uploads/'.$hinh_daidien.'" alt="product" /></a>
                            
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
                            <h3 class="product-name" style="height: 100px; font-size: 18px; "><a class="product-link" href="index.php?act=chitietsp&id_sanpham='.$id_sanpham.'&id_nhom_sp='.$id_nhom_sp.'" >'.$ten_sanpham.'</a></h3>
                            <ul class="product-review">
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                            <span class="regular-price">'.number_format($gia_goc,0,",",".").'<u>đ</u></span>
                            <span class="price">'.number_format($gia,0,",",".").'<u>đ</u></span>
                            </div>
                            <div class="variable-single-item color-switch">
                                <div class="product-variable-color">
                                    <label>
                                        <input name="modal-product-color"
                                            class="color-select" type="radio" checked="">
                                        <span class="product-color-black"></span>
                                    </label>
                                    <label>
                                        <input name="modal-product-color"
                                            class="color-select" type="radio">
                                        <span class="product-color-tomato"></span>
                                    </label>

                                    <label>
                                        <input name="modal-product-color"
                                            class="color-select" type="radio">
                                        <span class="product-color-gray"></span>
                                    </label>
                                </div>
                            </div>

                            <ul class="size-switch">
                                <li class="single-size active">XL</li>
                                <li class="single-size">LARGE</li>
                                <li class="single-size">SMALL</li>
                            </ul>
                            
                            <a href="cart.html" title="Thêm Giỏ Hàng" class="add-cart">Thêm Giỏ Hàng <i class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                    ';
                  }
                        ?>
                    </div>
                </div>
            </div>
        </div>