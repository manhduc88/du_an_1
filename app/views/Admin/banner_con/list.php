
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
              <li class="breadcrumb-item active">Danh sách banner con</li>
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
                <h3 class="card-title">Danh sách Banner con</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>Mã banner con</th>
                        <th>Ảnh banner con</th>
                        <th>link</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                  foreach ($list_banner_con as $banner){
                      extract($banner);
                      echo '
                      <tr>
                        <td>'.$id_banner_con.'</td>
                        <td><img src="../../uploads/'.$hinh.' " alt="" width="50px" ></td>
                        <td>'.$link.'</td>
                        <td><a href="../controllers/AdminController.php?act=suabanner_con&idbanner_con='.$id_banner_con.'"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href="../controllers/AdminController.php?act=xoabanner_con&idbanner_con='.$id_banner_con.'"><i class="fa-solid fa-trash"></i></a></td>
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

    <?php 
// if(is_array($ds_banner)){
//     extract($ds_banner);
//   }


//   echo "<pre>";
//     print_r($ds_banner);
//   echo "<pre>";

//   echo "<pre>";
//     print_r($list_banner_con);
//   echo "<pre>";



?>