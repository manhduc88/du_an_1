<form action="../controllers/AdminController.php?act=addhethong" method="post"  style=" margin: 20px;"  enctype="multipart/form-data">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm hệ thống</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Thêm hệ thống</li>
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
              <label for="inputName">Tên cửa hàng</label>
                <input type="text" name="ten_cuahang" id="inputName" class="form-control">
                <label for="inputName">Số điện thoại</label>
                <input type="text" name="sdt" id="inputName" class="form-control">
                <label for="inputName">Email</label>
                <input type="text" name="email" id="inputName" class="form-control">
                <label for="inputName">Địa chỉ</label>
                <input type="text" name="diachi" id="inputName" class="form-control">

                <label for="inputClientCompany">Logo</label> <br>
                <input type="file"  name="logo">
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
            <?php if(isset($thongbao)&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>