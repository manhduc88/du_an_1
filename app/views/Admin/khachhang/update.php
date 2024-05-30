<?php if(is_array($user)){
    extract($user);
  }
?>
<form action="../controllers/AdminController.php?act=updatetk" method="post" style=" margin: 20px;" enctype="multipart/form-data" >
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cập nhập thông tin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cập nhập thông tin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tổng quan</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputClientCompany">Tên đăng nhập</label>
                <input type="text" id="inputClientCompany" class="form-control" name="ten_dang_nhap" value="<?=$ten_dang_nhap?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Mật khẩu</label>
                <input type="text" id="inputClientCompany" class="form-control" name="pass" value="<?=$pass?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Họ tên</label>
                <input type="text" id="inputClientCompany" class="form-control" name="hoten" value="<?=$hoten?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Email</label>
                <input type="text" id="inputClientCompany" class="form-control" name="email" value="<?=$email?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Số điện thoại</label>
                <input type="text" id="inputClientCompany" class="form-control" name="sdt" value="<?=$sdt?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Địa chỉ</label>
                <input type="text" id="inputClientCompany" class="form-control" name="diachi" value="<?=$diachi?>">
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
          <input type="submit" value="Cập Nhập" class="btn btn-success float-left" name="capnhap">
          <p style="margin-top: 8px ; padding-left: 100px; " >                    
            <?php if(isset(($thongbao))&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>