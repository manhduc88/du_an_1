
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
                <h3 class="card-title">Danh sách giới tính sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>STT</th>
                        <th>Loại giới tính sản phẩm</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                  foreach ($danhsachgioitinhsp as $gtsp){
                      extract($gtsp);
                      echo '
                      <tr>
                        <td>'.$id_gioitinh_sp.'</td>
                        <td>'.$gioitinh.'</td>
                        <td><a href="../controllers/AdminController.php?act=suagtsp&id_gtsp='.$id_gioitinh_sp.'"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href="../controllers/AdminController.php?act=xoagtsp&id_gtsp='.$id_gioitinh_sp.'"><i class="fa-solid fa-trash"></i></a></td>
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
