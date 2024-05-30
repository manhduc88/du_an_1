

       

        <!-- breadcrumb area start here  -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">Giỏ hàng</h2>
                    <ul class="breadcrumb-pages">
                        <li class="page-item"><a class="page-item-link" href="index.php">Trang chủ</a></li>
                        <li class="page-item">Giỏ hàng</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end here  -->

        <!-- wish-list area start here  -->
        <div class="wish-list-area cart-page-area section">
            <div class="container">

                <div class="row">
                    <div class="col-12 wish-list-table">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Tên Sản Phẩm</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Số Lượng</th>
                                        <th scope="col">Thành Tiền</th>
                                        <th scope="col">Xóa</th>
                                    </tr>
                                </thead>

                                <tbody>
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
                                    $xoasp='<a href="index.php?act=xoagiohang&id_giohang='.$i.'"><button class="delet-btn" ><img src="public/assets_client/images/close.svg" alt="close" /></button></a>';
                                    echo '
                                    <tr class="cart-page-item">
                                            <td>
                                                <div class="single-grid-product m-0">
                                                    <div class="product-top">
                                                        <a href="single-product.html"><img class="product-thumbnal" src="'.$hinh.'" alt="cart"></a>
                                                    </div>
                                                    <div class="product-info text-center">
                                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                                        <h3 class="product-name"><a class="product-link" href="single-product.html">'.$cart[1].' </a></h3>
                                                        <ul class="product-review">
                                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                                        </ul>
                                                    <div class="">
                                                    <div >
                                                        <p>'.$cart[5].','.$cart[4].'</p>
                                                    </div>

                                                    </div>
                                                   </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-price text-center">
                                                    <h4 class="regular-price">'.number_format($gia_goc,0,",",".").'<u>đ</u></h4>
                                                    <h3 class="price">'.number_format($cart[2],0,",",".").'<u>đ</u></h3>
                                                </div>
                                            </td>


                                            <td>
                                                <div class="">
                                                    <p>'.$cart[6].'</p>

                                                </div>
                                            </td>


                                            <td>
                                                <h1 class="cart-table-item-total">'.number_format($thanhtien,0,",",".").'<u>đ</u></h1>
                                            </td>
                                            <td>'.$xoasp.'</td>
                                        </tr>
                                    ';
                            }
                                
                                ?>
                                    
    
                                    
    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Cart Page Bottom box area Start -->
                <div class="row cart-page-bottom-box-wrap" >             
                    <!-- Cart page bottom box -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">

                    </div>
                    <!-- Cart page bottom box -->

                    <!-- Cart page bottom box -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="cart-page-bottom-box">
                            <h2 class="bottom-box-title">Mã giảm giá</h2>                         
                            <form action="index.php?act=giohang" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="ma_km" placeholder="Nhập mã phiếu giảm giá của bạn" />
                                </div>
                                
                                <div class="form-button text-center">
                                    <input type="submit" value="Áp Dụng" class="form-btn" name="apdung">
                                </div>
                                <p style="margin: 10px auto; width: 180px; height: 20px; color: red; font-size: 18px; "><?=$thongbao?></p>
                            </form>
                        </div>
                    </div>
                    <!-- Cart page bottom box -->

                    <!-- Cart page bottom box -->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="cart-page-bottom-box cart-page-sub-total-box">
                            
                            <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                                <h2 class="bottom-box-title m-0">Tổng phụ :</h2>
                                <h2 class="bottom-box-title m-0"><?=number_format($tongphu,0,",",".")?><u>đ</u></h2>
                            </div>

                            <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                                <div class="cart-inner-shipping-title">
                                    <span>Phí vận chuyển</span>
                                </div>
                                <h2 class="bottom-box-title m-0"><?=number_format($phiship,0,",",".")?><u>đ</u></h2>
                            </div>
                            <?php if(!isset($phantram_km)){$tien_giam=0;}else{
                                $tien_giam=$tongphu*($phantram_km/100);
                                $tong=$tongphu+$phiship-$tien_giam;
                            } ?>
                            <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                                <div class="cart-inner-shipping-title">
                                    <span>Mã giảm giá</span>
                                </div>
                                <h2 class="bottom-box-title m-0"><?=number_format($tien_giam,0,",",".")?><u>đ</u></h2>
                            </div>
                            <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                                <h2 class="bottom-box-title m-0">Tổng cộng</h2>
                                <h2 class="bottom-box-title cart-page-final-total m-0"><?=number_format($tong,0,",",".")?><u>đ</u></h2>
                            </div>
                                
                            <div class="form-button text-center">
                                <?php // kiểm tra có tồn tai id_km không
                                    if(isset($id_km)){
                                        $dd="&id_km=".$km['id_km']."";
                                        
                                    }
                                    if($tong==0){
                                        $tkt='index.php?act=giohang';

                                    }else{
                                        $tkt='index.php?act=donhang'.$dd.'';
                                    }
                                ?>
                                <a href="<?=$tkt?>" class="form-btn proceed-to-checkout-btn">Tiến Hàng Thanh Toán</a>
                            </div>
                        </div>
                    </div>
                    <!-- Cart page bottom box -->

                </div>
                <!-- Cart Page Bottom box area End -->

            </div>
        </div>
        <!-- wish-list area end here  -->