
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
              <li class="breadcrumb-item active">Danh sách banner</li>
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
                <h3 class="card-title">Danh sách banner</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tiêu Đề</th>
                        <th>Tiêu Đề Phụ</th>
                        <th>Hình</th>
                        <th>Mô Tả</th>
                        <th>Link</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                  foreach ($ds_banner as $banner){
                      extract($banner);
                      echo '
                      <tr>
                        <td>'.$id_banner.'</td>
                        <td>'.$tieude.'</td>
                        <td>'.$tieudephu.'</td>
                        <td><img src="../../uploads/'.$hinh.' " alt="" width="50px" ></td>
                        <td>'.$mota.'</td>
                        <td>'.$link.'</td>
                        <td><a href="../controllers/AdminController.php?act=sua_banner&id_banner='.$id_banner.'"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href="../controllers/AdminController.php?act=xoa_banner&id_banner='.$id_banner.'"><i class="fa-solid fa-trash"></i></a></td>
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
