<?php
 if(isset($_GET['id_sanpham'])){
    $id_sanpham=$_GET['id_sanpham'];
 }
 else {
    $id_sanpham=0;
 }
?>
<form action="../controllers/AdminController.php?act=themanhmota&id_sanpham=<?=$id_sanpham?>" method="post"  style=" margin: 20px;" enctype="multipart/form-data">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm ảnh mô tả sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Thêm ảnh mô tả sản phẩm</li>
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
                <label for="inputProjectLeader">Hình mô tả</label> <br>
                <input type="file" name="hinh_mota[]" multiple="multiple" >
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          <input type="hidden" name="id_sanpham" value="<?php echo $id_sanpham; ?>">
          <input type="submit" value="Thêm mới" class="btn btn-success float-left" name="themmoi" >
          <a href="../controllers/AdminController.php?act=anhmota&id_sanpham=<?=$id_sanpham?>"><input type="buton" value="Danh sách" class="btn btn-success float-left" style="width: 100px; margin-left: 10px;"></a>

        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>