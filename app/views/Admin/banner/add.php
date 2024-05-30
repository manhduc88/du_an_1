<form action="../controllers/AdminController.php?act=addbanner" method="post" style=" margin: 20px;"  enctype="multipart/form-data">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm  Banner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Thêm Banner </li>
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

                <label for="inputClientCompany">Tiêu đề</label>
                <input type="text" name="tieude" id="inputClientCompany" class="form-control">

                <label for="inputClientCompany">Tiêu đề phụ </label>
                <textarea name="tieudephu" id="inputClientCompany" cols="30" rows="10" class="form-control"></textarea>

                <label for="inputClientCompany">Ảnh </label>
                <input type="file" id="inputClientCompany" class="form-control" name="anh">

                <label for="inputClientCompany">Mô tả </label>
                <input type="text" id="inputClientCompany" class="form-control" name="mota">

                <label for="inputClientCompany">Link</label>
                <input type="text" id="inputClientCompany" class="form-control" name="link">

                
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          <input type="submit" value="Thêm Banner" class="btn btn-success float-left" name="them_banner">
          <p style="margin-top: 8px ; padding-left: 100px; " >                    
            <?php if(isset($thongbao)&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>