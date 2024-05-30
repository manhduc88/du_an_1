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
                <h3 class="card-title">Danh sách bình luận</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Mã bình luận</th>
                    <th>Mã SP</th>
                    <th>Tên tài khoản</th>
                    <th>Nội dung</th>
                    <th>Ngày bình luận</th>
                    <th>Xóa</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($listbinhluan as $binhluan){
                      extract($binhluan);
                      echo '
                        <tr>
                          <td>'.$id_binhluan.'</td>
                          <td>'.$id_sanpham.'</td>
                          <td>'.$ten_dang_nhap.'</td>
                          <td>'.$noi_dung.'</td>
                          <td>'.$ngay_binhluan.'</td>
                          <td><a href="AdminController.php?act=xoabl&id_binhluan='.$id_binhluan.'&id_sanpham='.$id_sanpham.'"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                      ';
                    } ?>
                  
 
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    <!-- /.content -->
    </section>
