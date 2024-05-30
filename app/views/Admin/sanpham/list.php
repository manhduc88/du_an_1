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
                    <th>Tên SP</th>
                    <th>Hinh đại diện</th>
                    <th>Thư viên ảnh</th>
                    <th>Biến thể</th>
                    <th>Binh luận</th>
                    <th>Mô tả</th>
                    <th>Lượt xem</th>
                    <th>Lượt bán</th>
                    <th>Nhóm SP</th>
                    <th>Giới tính SP</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    foreach ($listsanpham as $sanpham){
                      extract($sanpham);
                      echo'
                      <tr>
                      <td>'.$id_sanpham.'</td>
                      <td>'.$ten_sanpham.'</td>
                      <td><img src="../../uploads/'.$hinh_daidien.'" alt="" width="50px" height="50px"></td>
                      <td><a href="../controllers/AdminController.php?act=anhmota&id_sanpham='.$id_sanpham.'" ><i class="fa-solid fa-photo-film" style="color: black;"></i></a></td>
                      <td><a href="../controllers/AdminController.php?act=danhsachbienthesp&id_sanpham='.$id_sanpham.'" ><i class="fa-solid fa-eye" style="color: black;"></i></a></td>
                      <td><a href="../controllers/AdminController.php?act=binhluansp&id_sanpham='.$id_sanpham.'"> <i class="fa-regular fa-comment" style="color: black;"></i></a></td>
                      <td>'.$mota.'</td>
                      <td>'.$luotxem.'</td>
                      <td>'.$luotban.'</td>
                      <td>'.$nhom_sp.'</td>
                      <td>'.$gioitinh.'</td>
                      <td><a href="../controllers/AdminController.php?act=suasp&id_sanpham='.$id_sanpham.'"><i class="fa-solid fa-pen-to-square" style="color: black;"></i></a></td>
                      <td><a href="../controllers/AdminController.php?act=xoasp&id_sanpham='.$id_sanpham.'"><i class="fa-solid fa-trash" style="color: black;"></i></a></td>
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
