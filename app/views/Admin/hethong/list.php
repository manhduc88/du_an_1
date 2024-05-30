    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách hệ thống</h1>
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
                <h3 class="card-title">Danh sách hệ thống</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Mã hệ thống</th>
                    <th>Tên cửa hàng</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Logo</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                            foreach ($listhethong as $hethong){
                              extract($hethong);
                    $suaht = "AdminController.php?act=suaht&id_hethong=".$id_hethong;
                    $xoaht = "AdminController.php?act=xoaht&id_hethong=".$id_hethong;
                    echo '
                    <tr>
                        
                        <td>'.$id_hethong.'</td>
                        <td>'.$ten_cuahang.'</td>
                        <td>'.$sdt.'</td>
                        <td>'.$email.'</td>
                        <td>'.$diachi.'</td>
                        <td><img src="../../uploads/'.$logo.'" alt="" width="50px" height="50px"></td>
                        <td><a href="'.$suaht.'"><i class="fa-solid fa-pen-to-square" style="color: black;"></i></a></td>
                        <td><a href="'.$xoaht.'"><i class="fa-solid fa-trash" style="color: black;"></i></a></td>
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
