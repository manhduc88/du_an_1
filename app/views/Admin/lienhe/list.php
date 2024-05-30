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
                <h3 class="card-title">Danh sách liên hệ</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Mã KH</th>
                    <th>Họ Tên</th>
                    <th>Địa chỉ email</th>
                    <th>SDT</th>
                    <th>Nội dung</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                       foreach ($listlienhe as $lienhe){
                        extract($lienhe);
                        echo '
                          <tr>
                            <td>'.$id_user.'</td>
                            <td>'.$ten.'</td>
                            <td>'.$email.'</td>
                            <td>'.$sdt.'</td>
                            <td>'.$noi_dung.'</td>
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
