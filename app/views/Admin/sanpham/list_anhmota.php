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
                <h3 class="card-title">Danh sách sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Mã SP</th>
                    <th>Hinh Sản phẩm</th>
                    <th>Xóa</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    foreach ($anhmota as $amt){
                      extract($amt);
                      echo'
                      <tr>
                      <td>'.$id_sanpham.'</td>
                      <td><img src="../../uploads/'.$hinh_sanpham.'" alt="" width="50px" height="50px"></td>
                      <td><a href="../controllers/AdminController.php?act=xoatvasp&id_tvasp='.$id_thuvien_sp.'&id_sanpham='.$id_sanpham.'"><i class="fa-solid fa-trash" style="color: black;"></i></a></td>
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
     <a href="../controllers/AdminController.php?act=themanhmota&id_sanpham=<?=$id_sanpham?>"><input type="button" value="Thêm mới" class="btn btn-success float-left" ></a>

    </section>
