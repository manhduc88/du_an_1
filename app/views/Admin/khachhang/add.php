<form action="../controllers/AdminController.php?act=addtk" method="post" style=" margin: 20px;" enctype="multipart/form-data" >
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm người dùng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Thêm người dùng</li>
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
                <input type="text" id="inputClientCompany" class="form-control" name="ten_dang_nhap">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Mật khẩu</label>
                <input type="text" id="inputClientCompany" class="form-control" name="pass">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Họ tên</label>
                <input type="text" id="inputClientCompany" class="form-control" name="hoten">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Email</label>
                <input type="text" id="inputClientCompany" class="form-control" name="email">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Số điện thoại</label>
                <input type="text" id="inputClientCompany" class="form-control" name="sdt">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Địa chỉ</label>
                <input type="text" id="inputClientCompany" class="form-control" name="diachi">
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">

          <input type="submit" value="Thêm mới" class="btn btn-success float-left" name="themmoi">
          <p style="margin-top: 8px ; padding-left: 100px; " >                    
            <?php if(isset(($thongbao))&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>