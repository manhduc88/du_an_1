

       <?php
       $ttdh=get_ttdh($trang_thai);
       $pttt=get_pttt($pttt);
       $count=loadAll_giohang_count($id_donhang);
       ?>

        <!-- breadcrumb area start here  -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">Chi tiết đơn hàng</h2>
                    <ul class="breadcrumb-pages">
                        <li class="page-item"><a class="page-item-link" href="index.html">Trang chủ</a></li>
                        <li class="page-item">Chi tiết đơn hàng</li>
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
                        <table class="table table-bordered"  style="margin-top: 20px;">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã đơn hàng</th>
                                        <th scope="col">Ngày đặt hàng </th>
                                        <th scope="col">Số lượng hàng hóa</th>
                                        <th scope="col">Trạng thái</th>
                                    </tr>
                                </thead>

                                <tbody>


                                    <tr class="cart-page-item">
                                            <td>
                                                <?=$id_donhang?>
                                            </td>
                                            <td>
                                            <?=$ngay_dat_hang?>
                                            </td>
                                            <td>
                                            <?=$count?>
                                            </td>
                                            <td>
                                            <?=$ttdh?>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered"  style="margin-top: 20px;">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="3">Địa chỉ nhận hàng</th>
                                    </tr>
                                </thead>

                                <tbody>


                                    <tr class="cart-page-item">
                                        <td>
                                        <p style="float: right; height: 20px; font-size: 18px;margin-right: 20px;"> Tên người nhận </p>
                                        </td>
                                        <td><p style="height: 20px; font-size: 18px; margin-left: 20px;"> <?=$hoten_nn?> </p></td>
                                    
                                        
                                    </tr>
                                    <tr class="cart-page-item">
                                        <td>
                                        <p style="float: right; height: 20px; font-size: 18px; margin-right: 20px;"> SDT người nhận </p>
                                        </td>
                                        <td><p style="height: 20px; font-size: 18px; margin-left: 20px;"> <?=$sdt_nn?> </p></td>
                                    
                                        
                                    </tr>
                                    <tr class="cart-page-item">
                                        <td>
                                        <p style="float: right; height: 20px; font-size: 18px; margin-right: 20px;"> Email người nhận </p>
                                        </td>
                                        
                                        <td><p style="height: 20px; font-size: 18px; margin-left: 20px;"><?=$email_nn?></p></td>

                                    </tr>
                                    <tr class="cart-page-item">
                                        <td>
                                        <p style="float: right; height: 20px; font-size: 18px; margin-right: 20px;"> Địa chỉ người nhận </p>
                                        </td>
                                        <td><p style="height: 20px; font-size: 18px; margin-left: 20px;"> <?=$diachi_nn?> </p></td>
                                            
                                            
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered"  style="margin-top: 20px;">
                                <thead>
                                    <tr>
                                        <th scope="col">Sản Phẩm</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Thành Tiền</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php 
                                $tongphu=0;
                                foreach ($listctdh as $ctdh){
                                    $tongphu+=$ctdh['thanhtien'];
                                    extract($ctdh);
                                    $gia_thuong=$gia-$gia*0.15;
                                    $gia_goc=$gia-$gia_thuong+$gia;
                                    $bienthesp=loadOne_idsp($ctdh['id_bienthe_sp']);
                                    extract($bienthesp);
                                    
                                    echo '
                                    <tr class="cart-page-item">
                                            <td>
                                                <div class="single-grid-product m-0">
                                                    <div class="product-top">
                                                        <a href="index.php?act=chitietsp&id_sanpham='.$bienthesp['id_sanpham'].'&id_nhom_sp='.$id_nhom_sp.'"><img class="product-thumbnal" src="uploads/'.$hinh.'" alt="cart"></a>
                                                    </div>
                                                    <div class="product-info text-center">
                                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>

                                                        <h3 class="product-name"><a class="product-link" href="index.php?act=chitietsp&id_sanpham='.$bienthesp['id_sanpham'].'&id_nhom_sp='.$id_nhom_sp.'">'.$ten_sp.' </a></h3>
                                                        <ul class="product-review">
                                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                                        </ul>
                                                    <div class="">
                                                    <div >
                                                        <p>'.$soluong.'x '.$ten_mau.', '.$ten_size.'</p>
                                                    </div>

                                                    </div>
                                                   </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-price text-center">
                                                    <h4 class="regular-price">'.number_format($gia_goc,0,",",".").'<u>đ</u></h4>
                                                    <h3 class="price">'.number_format($gia,0,",",".").'<u>đ</u></h3>
                                                </div>
                                            </td>
                                            <td>
                                                <h1 class="cart-table-item-total">'.number_format($thanhtien,0,",",".").'<u>đ</u></h1>
                                            </td>
                                           
                                        </tr>
                                    ';
                            }
                                
                                ?>
                                    
                       <tr class="cart-page-item">
                              
                            <td colspan="2" >
                            <p style="float: right; height: 20px; font-size: 18px;">Tổng tiền hàng</p>                             
                            </td>
                            <td>
                            <h1 class="cart-table-item-total"><?=number_format($tongphu,0,",",".")?><u>đ</u></h1>
                            </td>
                      </tr>
                      <tr class="cart-page-item">
                            <?php if(!isset($phantram_km)){$tien_giam=0;}else{
                                $tien_giam=$tongphu*($phantram_km/100);
                            } ?>
                              <td colspan="2">
                              <p style="float: right; height: 20px; font-size: 18px;"> Giảm giá áp mã</p>     
                                
                              </td>
                              <td>
                              <h1 class="cart-table-item-total"><?=number_format($tien_giam,0,",",".")?><u>đ</u></h1> 
                              </td>
                      </tr>
                      <tr class="cart-page-item">
                       
                              <td colspan="2">
                              <p style="float: right; height: 20px; font-size: 18px;"> Thành tiền</p>     
                                
                              </td>
                              <td>

                              <div class="product-price text-center">
                                    <h3 class="price"><?=number_format($tong_tien,0,",",".")?><u>đ</u></h3>
                                </div>
                              </td>
                      </tr>
                                    
                      <tr class="cart-page-item">
                          
                          <td colspan="2">
                          <p style="float: right; height: 20px; font-size: 18px;"><i class="fa-solid fa-receipt" style="color:red;"></i> Phương thức thanh toán</p>     
                            
                          </td>
                          <td>
                          <p style=" height: 20px; font-size: 18px;"> <?=$pttt?></p>   
                          </td>
                      </tr>
                                </tbody>
                            </table>
                        
                        </div>
                    </div>
                </div>

              

            </div>
        </div>
        <!-- wish-list area end here  -->