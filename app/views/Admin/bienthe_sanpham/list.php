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
                    <th>Giá</th>
                    <th>Màu</th>
                    <th>Size</th>
                    <th>Số lượng</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    foreach ($bienthesp as $btsp){
                      extract($btsp);
                      echo'
                      <tr>
                      <td>'.$id_sanpham.'</td>
                      <td>'.number_format($gia_sanpham,0,",",".").' <u>đ</u></td>
                      <td>'.$ten_mau.'</td>
                      <td>'.$ten_size.'</td>
                      <td>'.$soluong.'</td>
                      <td><a href="../controllers/AdminController.php?act=suabtsp&id_bienthe_sp='.$id_bienthe_sp.'&id_sanpham='.$id_sanpham.'"><i class="fa-solid fa-pen-to-square" style="color: black;"></i></a></td>
                      <td><a href="../controllers/AdminController.php?act=xoabtsp&id_bienthe_sp='.$id_bienthe_sp.'&id_sanpham='.$id_sanpham.'"><i class="fa-solid fa-trash" style="color: black;"></i></a></td>
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
    <a href="../controllers/AdminController.php?act=addbienthesp"><input type="button" value="Thêm mới" class="btn btn-success float-left" ></a>
    </section>

