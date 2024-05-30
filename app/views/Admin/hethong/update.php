<?php if(is_array($hethong)){
    extract($hethong);
  }
?>
<form action="../controllers/AdminController.php?act=updateht" method="post" style=" margin: 20px;" enctype="multipart/form-data" >
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cập nhật hệ thống</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cập nhật hệ thống</li>
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
                <input type="text" id="inputName" class="form-control" name="ten_cuahang" value=" <?=$ten_cuahang?> " >
              </div>
              <div class="form-group">
                <label for="inputName">Số điện thoại</label>
                <input type="text" id="inputName" class="form-control" name="sdt" value=" <?=$sdt?> " >
              </div>
              <div class="form-group">
                <label for="inputDescription">Email</label>
                <input type="text" id="inputName" class="form-control" name="email" value=" <?=$email?> " >
              </div>
              <div class="form-group">
                <label for="inputDescription">Địa chỉ</label>
                <input type="text" id="inputName" class="form-control" name="diachi" value=" <?=$diachi?> " >
              </div>
              
              <div class="form-group">
                <input type="hidden" name="id_hethong" value="<?php echo $id_hethong; ?>">
                <input type="hidden" name="logo" value="<?php echo $logo; ?>">
                <label for="inputClientCompany">Logo</label> <br>
                <img src="../../uploads/<?=$logo?>" alt="" width="60px" height="60px" style="margin-bottom: 10px;" > <br> 
                <input type="file"  name="logo" >

              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">

          <input type="submit" value="Cập nhật" class="btn btn-success float-left" name="capnhatht">
          <p style="margin-top: 8px ; padding-left: 100px; " >                    
            <?php if(isset(($thongbao))&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>