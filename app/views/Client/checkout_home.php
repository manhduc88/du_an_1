<?php
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
?>      

        <!-- breadcrumb area start here  -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">Checkout</h2>
                    <ul class="breadcrumb-pages">
                        <li class="page-item"><a class="page-item-link" href="index.html">Home</a></li>
                        <li class="page-item">Checkout</li>
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
                                <form action="index.php?act=billcomfirm" method="post" >
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="checkout-title">Thông Tin Người Nhận</h2>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control"  name="hoten" value="<?=$hoten_nn?>" placeholder="Họ tên người nhận" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="street-address" name="email" value="<?=$email_nn?>" placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="street-address" name="diachi" value="<?=$diachi_nn?>" placeholder="Địa chỉ nơi nhận" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="street-address" name="sdt" value="<?=$sdt_nn?>" placeholder="Số điện thoại" />
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
                                                        <input class="form-check-input" type="radio" name="pttt" id="vnpay" value="1"/>
                                                        <label class="form-check-label" for="vnpay">Thanh toán bằng VNPay</label>
                                                        <div class="input-icon">
                                                            <img src="public/assets_client/images/vnpay.png" alt="vnpay" width="130px" height="30px"  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check card-check">
                                                        <input class="form-check-input" type="radio" name="pttt" id="paypal" value="2"  checked="checked" />
                                                        <label class="form-check-label" for="paypal">Thanh toán khí nhận hàng</label>
                                                        <div class="input-icon">
                                                            <img src="public/assets_client/images/xe.png" alt="vnpay" width="80px" height="30px"  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-check terms-agree">
                                                    <input type="checkbox" class="form-check-input" id="agree" />
                                                    <label class="form-check-label" for="agree">Bằng cách nhấp vào nút, bạn đồng ý với <a href="term-conditions.html">Điều khoản & Điều kiện của chúng tôi</a></label>
                                                </div>
                                                <?php //kiểm tra có tồn tại id_km hay không
                                                   if(isset($km['id_km'])){
                                                        $idkm=$km['id_km'];
                                                   }else {
                                                        $idkm=0;
                                                   }
                                                ?>
                                                <input type="hidden" name="id_km" value="<?=$idkm?>">
                                                <input type="submit" name="dathang" id="" class="checkout-btn form-btn" value="Đặt Hàng">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="cart-summary">
                                <div class="summary-top d-flex">
                                    <h2>Giỏ Hàng</h2>
                                    <a class="edite-btn" href="cart.html">Sửa</a>
                                </div>
                                <ul class="cart-product-list">
                                    <?php
                                        $i=0;
                                        $tongphu=0;
                                        $phiship=0;
                                        $tong=0;
                                        if(isset($_SESSION['mycart'])){
                                            $arr_cart=$_SESSION['mycart'];
                                        }
                                        // echo print_r($_SESSION['muangay']);
                                        foreach ($arr_cart as $cart){
                                            $i++;
                                            $thanhtien=$cart[2]*$cart[6]; 
                                            $tongphu+=$thanhtien;
                                           
                                            $tong=$tongphu+$phiship;

                                            echo '
                                            <li class="single-cart-product d-flex justify-content-between">
                                                <div class="product-info">
                                                    <h3>'.$cart[6].' x '.$cart[1].'</h3>
                                                    <p>Size: '.$cart[5].', Color: '.$cart[4].'</p>
                                                </div>
                                                <div class="price-area">
                                                    <h3 class="price">'.number_format($thanhtien,0,",",".").'<u>đ</u></h3>
                                                </div>
                                            </li>
                                            ';

                                        }
                                    ?>
                                    
                                    
                                </ul>
                                <ul class="summary-list">
                                    <li>Tổng phụ <span><?=number_format($tongphu,0,",",".")?><u>đ</u></span></li>
                                    <li>Phí vận chuyển <span><?=number_format($phiship,0,",",".")?><u>đ</u></span></li>   
                                    <?php if(!isset($phantram_km)){$tien_giam=0;}else{
                                        $tien_giam=$tongphu*($phantram_km/100);
                                        $tong=$tongphu+$phiship-$tien_giam;
                                        } ?>
                                    <li>Mã giảm giá <span><?=number_format($tien_giam,0,",",".")?><u>đ</u></span></li>    

                                </ul>
                                <div class="total-amount">
                                    <h3>Tổng cộng <span class="float-right"><?=number_format($tong,0,",",".")?><u>đ</u></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- checkout page area end here  -->