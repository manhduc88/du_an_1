<form action="../controllers/AdminController.php?act=addsize" method="post" style=" margin: 20px;"  >
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm size</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Thêm size</li>
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
                <label for="inputClientCompany">Tên size</label>
                <input type="text" id="inputClientCompany" class="form-control" name="tensize">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">

          <input type="submit" value="Thêm size" class="btn btn-success float-left" name="themsize">
          <p style="margin-top: 8px ; padding-left: 100px; " >                    
            <?php if(isset($thongbao)&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>