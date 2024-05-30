    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách khuyến mãi</h1>
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
                <h3 class="card-title">Danh sách khuyến mãi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Mã khuyến mãi</th>
                    <th>Phần trăm khuyến mã</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($listkm as $km){
                        extract($km);
                        $suakm = "AdminController.php?act=suakm&id_km=".$id_km;
                        $xoakm = "AdminController.php?act=xoakm&id_km=".$id_km;
                        echo '
                        <tr>
                            
                            <td>'.$ma_km.'</td>
                            <td>'.$phantram_km.' %</td>
                            <td>'.$ngay_batdau.'</td>
                            <td>'.$ngay_ketthuc.'</td>
                            <td><a href="'.$suakm.'"><i class="fa-solid fa-pen-to-square" style="color: black;"></i></a></td>
                            <td><a href="'.$xoakm.'"><i class="fa-solid fa-trash" style="color: black;"></i></a></td>
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
