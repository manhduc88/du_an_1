      
<?php if(is_array($donhang)){
    extract($donhang);
  }
  ?>
        <!-- breadcrumb area start here  -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">Thủ Tục Thanh Toán</h2>
                    <ul class="breadcrumb-pages">
                        <li class="page-item"><a class="page-item-link" href="index.php">Trang chủ</a></li>
                        <li class="page-item">Thủ Tục Thanh Toán</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end here  -->

        <!-- checkout page area start here  -->
        <section class="page-content section">
            <div class="checkout">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="checkout-form">
                                <form>
                                    <div class="row">
                                    <div class="col-lg-12">
                                            <h2 class="checkout-title">Thông Tin Người Nhận</h2>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" name="hoten" placeholder="Họ tên người nhận"  value="<?=$hoten_nn?>" disabled/>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"  value="<?=$email_nn?>" disabled/>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="street-address" name="diachi" placeholder="Địa chỉ nơi nhận" value="<?=$diachi_nn?>" disabled/>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="street-address" name="sdt" placeholder="Số điện thoại"value="<?=$sdt_nn?>"  disabled/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h2 class="checkout-title">Phương Thức Thanh Toán</h2>
                                            </div>
                                            <div class="col-lg-12">                            
                                                <div class="form-group">
                                                    <div class="form-check card-check">
                                                    <?php if($pttt==2){
                                                            echo'<label class="form-check-label" for="paypal">Thanh toán khí nhận hàng</label>
                                                            <div class="input-icon">
                                                            <img src="public/assets_client/images/vnpay.png" alt="vnpay" width="130px" height="30px"  />
                                                        </div>
                                                            ';

                                                        }else{
                                                            echo'<label class="form-check-label" for="paypal">Thanh toán bằng VNPAY</label>
                                                            <div class="input-icon">
                                                            <img src="public/assets_client/images/vnpay.png" alt="vnpay" width="130px" height="30px"  />
                                                        </div>
                                                            ';

                                                        } 
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-check terms-agree">
                                                    <input type="checkbox" class="form-check-input" id="agree" />
                                                    <label class="form-check-label" for="agree">Bằng cách nhấp vào nút, bạn đồng ý với <a href="term-conditions.html">Điều khoản & Điều kiện của chúng tôi</a></label>
                                                </div>
                                                <a href="index.php"> <button type="button" class="checkout-btn form-btn">Đặt Hàng</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="cart-summary">
                            <?php
                                        $tongphu=0;
                                        $phiship=0;
                                        foreach ($donhangct as $cart){
                                            
                                            extract($cart);
                                            $tongphu+=$thanhtien;
                                            echo '
                                            <li class="single-cart-product d-flex justify-content-between">
                                                <div class="product-info">
                                                    <h3>'.$soluong.' x '.$ten_sp.'</h3>
                                                    <p>Size: '.$ten_size.', Color: '.$ten_mau.'</p>
                                                </div>
                                                <div class="price-area">
                                                    <h3 class="price">'.number_format($thanhtien,0,",",".").'<u>đ</u></h3>
                                                </div>
                                            </li>
                                            ';

                                        }
                                    ?>
                                    <ul class="summary-list">
                                    <li>Tổng phụ <span><?=number_format($tongphu,0,",",".")?><u>đ</u></span></li>
                                    <li>Phí vận chuyển <span><?=number_format($phiship,0,",",".")?><u>đ</u></span></li>        
                                    <?php if(!isset($phantram_km)){$tien_giam=0;}else{
                                        $tien_giam=$tongphu*($phantram_km/100);
                                        } ?>
                                    <li>Mã giảm giá <span><?=number_format($tien_giam,0,",",".")?><u>đ</u></span></li>    
                       
                                    </ul>
                                    <div class="total-amount">
                                    <h3>Tổng cộng <span class="float-right"><?=number_format($donhang['tong_tien'],0,",",".")?><u>đ</u></span></h3>
                                     </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- checkout page area end here  -->