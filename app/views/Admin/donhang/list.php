    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../controllers/AdminController.php">Home</a></li>
              <li class="breadcrumb-item active">Danh sách</li>
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
                <h3 class="card-title">Danh sách đơn hàng</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Mã đơn hàng</th>
                    <th>Mã KH</th>
                    <th>PTTT</th>
                    <th>Tổng Tiền</th>
                    <th>Số lượng hàng hóa</th>
                    <th>Ngày đặt hàng</th>
                    <th>Trạng thái</th>
                    <th>Chi tiết</th>
                    <th>Xóa</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                       foreach ($listdonhang as $donhang){
                        extract($donhang);
                        $count=loadAll_giohang_count($id_donhang);
                        $ttdh=get_ttdh($trang_thai);
                        $pt=get_pttt($pttt);
                        if($trang_thai==4){
                          $tt="";
                          $nut='style="background-color: burlywood;"';
                        }
                        elseif($trang_thai==5){
                          $tt="";
                          $nut='style="background-color: rgba(220, 20, 60, 0.46);"';
                        }else {
                          $tt="../controllers/AdminController.php?act=suatt&id_donhang=".$id_donhang;
                          $nut='';
                        }
                        echo '
                          <tr>
                            <td>'.$id_donhang.'</td>
                            <td>'.$id_user.'</td>                      
                            <td>'.$pt.'</td>
                            <td>'.number_format($tong_tien,0,",",".").' <u>đ</u></td>
                            <td>'.$count.'</td>                  
                            <td>'.$ngay_dat_hang.'</td>
                            <td><a href="'.$tt.'"><input type="button" value="'.$ttdh.'" class="btn btn-success float-left" '.$nut.' ></a></td>
                            <td><a href="../controllers/AdminController.php?act=chitietdh&id_donhang='.$id_donhang.'" ><i class="fa-solid fa-eye" style="color: black;"></i></a></td>
                            <td><a href="../controllers/AdminController.php?act=xoadh&id_donhang='.$id_donhang.'"><i class="fa-solid fa-trash"  style="color: black;"></i></a></td>
                          </tr>
                        ';
                       }
                    ?>
                  
 
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    <!-- /.content -->
    </section>
