<?php if(is_array($gtsp)){
    extract($gtsp);
  }

  // echo "<pre>";
  //   print_r($gtsp);
  // echo "<pre>";

?>
<form action="../controllers/AdminController.php?act=updategtsp" method="post" style=" margin: 20px;">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cập nhập giới tính sản phẩm</li>
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
            <?php 
            ?>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Tên giới tính sản phẩm</label>
                <input type="text" id="inputName" class="form-control" name="ten_gtsp" value="<?php echo $gioitinh; ?>">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          <input type="hidden" name="id_gtsp" value="<?php echo $id_gioitinh_sp; ?>">
          <input type="submit" name="capnhap" value="Cập nhập" class="btn btn-success float-left">
          <p style="margin-top: 8px ; padding-left: 100px; " >                    
            <?php if(isset($thongbao)&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>