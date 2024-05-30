

       

        <!-- breadcrumb area start here  -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">Đơn Hàng Của Bạn</h2>
                    <ul class="breadcrumb-pages">
                        <li class="page-item"><a class="page-item-link" href="index.html">Trang Chủ</a></li>
                        <li class="page-item">Đơn Hàng</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end here  -->

        <!-- wish-list area start here  -->
        <div class="wish-list-area cart-page-area section" >
            <div class="container">

                <div class="row" >
                    <div class="col-12 wish-list-table">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                <th scope="col">MÃ ĐƠN HÀNG</th>
                                <th scope="col">NGÀY ĐẶT HÀNG</th>
                                <th scope="col">SỐ LƯỢNG HÀNG HÓA</th>
                                <th scope="col">TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                                <th scope="col">TRẠNG THÁI ĐƠN HÀNG</th>
                                <th scope="col">THAO TÁC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                if(is_array($listdonhang)){
                                foreach ($listdonhang as $donhang){
                                    $count=loadAll_giohang_count($donhang['id_donhang']);
                                    $ttdh=get_ttdh($donhang['trang_thai']);
                                    extract($donhang);
                                    if($donhang['trang_thai']==1||$donhang['trang_thai']==2){
                                        $huydh="index.php?act=huydh&id_donhang=".$id_donhang."";
                                        $nut="button";
                                    }else {
                                        $huydh="";
                                        $nut="hidden";
                                    }
                                    echo '
                                    <tr class="cart-page-item">
                                            <td>
                                                <div class="single-grid-product m-0">
                                                <p>'.$donhang['id_donhang'].'</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-price text-center">
                                                <p>'.$donhang['ngay_dat_hang'].'</p>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-price text-center">
                                                <p>'.$count.'</p>
                                                </div>
                                            </td>


                                            <td>
                                                <div class="product-price text-center">
                                                    <p>'.number_format($donhang['tong_tien'],0,",",".").'<u>đ</u></p>

                                                </div>
                                            </td>
                                            <td>
                                            <div class="product-price text-center">
                                                <p>'.$ttdh.'</p>

                                            </div>
                                            </td>
                                            <td>
                                                <div class="product-price text-center">
                                                <p>
                                                <a href="index.php?act=chitietdh&id_donhang='.$id_donhang.'" ><input type="button" value="Chi Tiết Đơn Hàng" style="padding: 6px; margin-right: 10px; padding-left: 10px; padding-right: 10px; border: 1px solid; border-radius: 10px; background-color: white;"></a>
                                                <a href="'.$huydh.'"><input type="'.$nut.'" value="Hủy Đơn Hàng" style="padding: 6px; margin-right: 10px; padding-left: 10px; padding-right: 10px; border: 1px solid #ccc; border-radius: 10px; background-color: rgba(255, 0, 0, 0.614); color:white ; " ></a>
                                                </p>
                                                </div>
                                            </td>

                                            <td>
                                            </td>
                                        </tr>
                                    ';
                            } }
                                
                                ?>
                                    
    
                                    
    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

               


        </div>
        <!-- wish-list area end here  -->