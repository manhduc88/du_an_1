<?php
if(is_array($vaitro)){
    extract($vaitro);
}
?>
<form action="../controllers/AdminController.php?act=updatevt" method="post" style=" margin: 20px;">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa vai trò</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sửa vai trò</li>
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
                <label for="inputName">Vai trò</label>
                <input type="text" name="vaitro"id="inputName" class="form-control" value="<?php if(isset($vaitro)&&($vaitro!="")) echo $vaitro ;?>"id="">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <input type="hidden" name="id_vaitro" value="<?php if(isset($id_vaitro)&&($id_vaitro!="")) echo $id_vaitro ;?>">
      <input type="submit" name="capnhat" value="Cập nhật"  class="btn btn-success float-left">
    </section>
    <!-- /.content -->
    </form>
    <?php if(isset($thongbao)) {
      echo $thongbao;
    } ?>