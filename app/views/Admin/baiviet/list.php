    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách bài viết</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../controllers/AdminController.php">Home</a></li>
              <li class="breadcrumb-item active">Danh sách bài viết</li>
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
                <h3 class="card-title">Danh sách bài viết</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Mã bài viết</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Ngày đăng</th>
                    <th>Hinh đại diện</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                            foreach ($listbaiviet as $baiviet){
                              extract($baiviet);
                    $xoabv = "AdminController.php?act=xoabv&id_baiviet=".$id_baiviet;
                    $suabv = "AdminController.php?act=suabv&id_baiviet=".$id_baiviet;

                    echo '
                    <tr>
                        <td>'.$id_baiviet.'</td>
                        <td>'.$tieude.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$mota.'</td>
                        <td>'.$ngaydang.'</td>
                        <td><img src="../../uploads/'.$hinh.'" alt="" width="50px" height="50px"></td>
                        <td><a href="'.$suabv.'"><i class="fa-solid fa-pen-to-square" style="color: black;"></i></a></td>
                        <td><a href="'.$xoabv.'"><i class="fa-solid fa-trash" style="color: black;"></i></a></td>
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
