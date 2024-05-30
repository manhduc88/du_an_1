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
                <h3 class="card-title">Danh sách vai trò</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Mã vai trò</th>
                    <th>Vai trò</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                            foreach ($listvaitro as $vaitro){
                              extract($vaitro);
                    $suavt = "AdminController.php?act=suavt&id=".$id_vaitro;
                    $xoavt = "AdminController.php?act=xoavt&id=".$id_vaitro;
                    echo '
                    <tr>
                        
                        <td>'.$id_vaitro.'</td>
                        <td>'.$vaitro.'</td>
                        <td><a href="'.$suavt.'"><i class="fa-solid fa-pen-to-square" style="color: black;"></i></a></td>
                        <td><a href="'.$xoavt.'"><i class="fa-solid fa-trash" style="color: black;"></i></a></td>
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
