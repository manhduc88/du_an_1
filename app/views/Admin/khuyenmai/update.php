<?php if(is_array($km)){
    extract($km);
  }
?>
<form action="../controllers/AdminController.php?act=updatekm" method="post" style=" margin: 20px;" enctype="multipart/form-data" >
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cập nhập khuyến mãi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cập nhập khuyến mãi</li>
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
                <label for="inputClientCompany">Mã khuyến mãi</label>
                <input type="text" id="inputClientCompany" class="form-control" name="ma_km" value="<?=$ma_km?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Phần trăm khuyến mãi</label>
                <input type="number" id="inputClientCompany" class="form-control" name="phantram_km" value="<?=$phantram_km?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Ngày bắt đầu</label>
                <input type="date" id="inputClientCompany" class="form-control" name="ngay_batdau" value="<?=$ngay_batdau?>">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Ngày kết thúc</label>
                <input type="date" id="inputClientCompany" class="form-control" name="ngay_ketthuc" value="<?=$ngay_ketthuc?>">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          <input type="hidden" name="id_km" value="<?php echo $id_km; ?>">
          <input type="submit" value="Cập nhập" class="btn btn-success float-left" name="capnhap">
          <p style="margin-top: 8px ; padding-left: 100px; " >                    
            <?php if(isset(($thongbao))&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>