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
                <h3 class="card-title">Danh sách khách hàng </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Mã KH</th>
                    <th>Họ và Tên</th>
                    <th>email</th>
                    <th>SDT</th>
                    <th>Địa chỉ</th>
                    <th>Tên Đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>Vai trò</th>
                    <th>Phân quyền</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    foreach ($listuser as $user){
                      extract($user);
                      echo'
                      <tr>
                      <td>'.$id_user.'</td>
                      <td>'.$hoten.'
                      </td>
                      <td>'.$email.'</td>
                      <td>'.$sdt.'</td>
                      <td>'.$diachi.'</td>
                      <td>'.$ten_dang_nhap.'</td>
                      <td>'.$pass.'</td>
                      <td>'.$vaitro.'</td>
                      <td><a href="../controllers/AdminController.php?act=phanquyentk&id_user='.$id_user.'"><i class="fa-solid fa-hammer"></i></a></td>
                      <td><a href="../controllers/AdminController.php?act=suatk&id_user='.$id_user.'"><i class="fa-solid fa-pen-to-square"></i></a></td>
                      <td><a href="../controllers/AdminController.php?act=xoatk&id_user='.$id_user.'"><i class="fa-solid fa-trash"></i></a></td>
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
