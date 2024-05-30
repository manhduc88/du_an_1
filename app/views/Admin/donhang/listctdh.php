    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chi tiết đơn hàng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../controllers/AdminController.php">Home</a></li>
              <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Chi tiết đơn hàng</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example2" class="table table-bordered table-hover" style="margin-top: 20px;">
                  <?php                         
                      $count=loadAll_giohang_count($id_donhang);
                      $ttdh=get_ttdh($trang_thai);
                      $pt=get_pttt($pttt); ?>
                  <thead>
                  <tr>
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Số lượng hàng hóa</th>
                    <th>Trạng thái</th>
                  </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td><?=$id_donhang?></td>
                      <td><?=$ngay_dat_hang?></td>
                      <td><?=$count?></td>
                      <td><?=$ttdh?></td>
                    </tr>
                  </tbody>

                </table>
                <table id="example2" class="table table-bordered table-hover" style="margin-top: 20px;">
                  <thead>
                  <tr>
                    <th colspan="2">Địa chỉ nhận hàng</th>
                  </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>Tên người nhận</td>
                      <td><?=$hoten_nn?></td>
                    </tr>
                    <tr>
                      <td>SDT người nhận</td>
                      <td><?=$sdt_nn?></td>
                    </tr>
                    <tr>
                      <td>Email người nhận</td>
                      <td><?=$email_nn?></td>
                    </tr>
                    <tr>
                      <td>Địa chỉ người nhận</td>
                      <td><?=$diachi_nn?></td>
                    </tr>
                  </tbody>

                </table>
                <table id="example2" class="table table-bordered table-hover" style="margin-top: 20px;">
                  <thead>
                  <tr>
                    <th>Sản Phẩm</th>
                    <th>giá</th>
                    <th>Thành tiền</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                       foreach ($listctdh as $ctdh){
                        extract($ctdh);

                        echo '
                          <tr>
                            
                            <td>
                              <div style="width: 400px; height: 150px; display: flex; justify-content: space-between;">
                                    <div  style="width: 35%; height: 100%;">
                                        <a href="" style="text-decoration: none;"><img  style="width: 100%; height: 100%;"  src="../../uploads/'.$hinh.'" alt="cart"></a>
                                    </div>
                                    <div style="width: 45%; height: 100%; display: flex; flex-direction: column; justify-content: space-around; ">
                                        <h4 style="width: 100%; height: 20px; font-size: 19px;">ELLA - HALOTHEMES</h4>
                                        <h3 style="width: 100%; height: 50px; font-size: 19px;">'.$ten_sp.'</h3>
                                    <div >
                                        <p>'.$soluong.' x '.$ten_mau.' , '.$ten_size.'</p>
                                    </div>
                              </div>
                            </td>
                            <td>'.number_format($gia,0,",",".").' <u>đ</u></td>
                            <td>'.number_format($thanhtien,0,",",".").' <u>đ</u></td>

                          </tr>
                        ';
                       }
                    ?>
                     <tr >
                              
                              <td colspan="2" >
                              <p style="float: right; height: 20px; font-size: 18px;">Tổng tiền hàng</p>                             
                              </td>
                              <td>
                              <p style=" height: 20px; font-size: 15px;"> <?=number_format($tong_tien,0,",",".")?></p> 
                              </td>
                        </tr>
                        <tr >
                            
                                <td colspan="2">
                                <p style="float: right; height: 20px; font-size: 18px;"> Giảm giá áp mã</p>     
                                  
                                </td>
                                <td>
                                <p style=" height: 20px; font-size: 15px;"> <?=number_format(0,0,",",".")?></p>                                 
                                </td>
                        </tr>
                        <tr >
                         
                                <td colspan="2">
                                <p style="float: right; height: 20px; font-size: 18px;"> Thành tiền</p>     
                                  
                                </td>
                                <td>
                                <p style=" height: 20px; font-size: 15px;"><?=number_format($tong_tien,0,",",".")?> </p> 
                                </td>
                        </tr>
                                      
                        <tr >
                            
                            <td colspan="2">
                            <p style="float: right; height: 20px; font-size: 18px;"><i class="fa-solid fa-receipt" style="color:red;"></i> Phương thức thanh toán</p>     
                              
                            </td>
                            <td>
                            <p style=" height: 20px; font-size: 15px;"> <?=$pt?></p>   
                            </td>
                        </tr>
                  
 
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    <!-- /.content -->
    </section>
