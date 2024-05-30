<?php if(is_array($bienthesp)){
    extract($bienthesp);
  }
  ?>
<form action="../controllers/AdminController.php?act=updatebtsp" method="post" style=" margin: 20px;" enctype="multipart/form-data" >
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm biến thể sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Thêm biến thể sản phẩm</li>
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
                <label for="inputClientCompany">Mã sản phẩm</label>
                <input type="number" id="inputClientCompany" class="form-control" name="id_sanpham" value="<?=$id_sanpham?>" disabled>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Giá</label>
                <input type="number" id="inputClientCompany" class="form-control" name="gia" value="<?=$gia_sanpham?>" >
              </div>
 
              <div class="form-group">
                <label for="inputStatus" >Màu sản phẩm</label>
                <select id="inputStatus" class="form-control custom-select" name="id_mau">
                  <option selected disabled>Chọn màu sản phẩm</option>

                                    <?php
                          $id_bienthemau=$id_bienthe_mau;
                          foreach ($listbienthemau as $mau){
                            extract($mau);
                            if($id_bienthemau==$id_bienthe_mau){
                            echo '<option value="'.$id_bienthe_mau.'" selected >'.$ten_mau.'</option>';}
                            else {
                            echo '<option value="'.$id_bienthe_mau.'">'.$ten_mau.'</option>';}
                          } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Size sản phẩm</label>
                <select id="inputStatus" class="form-control custom-select" name="id_size">
                  <option selected disabled>Chọn Size</option>
                  <?php
                          $idsize=$id_size;
                          foreach ($list_size as $size){
                            extract($size);
                            if($idsize==$id_size){
                            echo '<option value="'.$id_size.'" selected >'.$ten_size.'</option>';}
                            else {
                            echo '<option value="'.$id_size.'">'.$ten_size.'</option>';}
                          } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Số lượng</label>
                <input type="number" id="inputClientCompany" class="form-control" name="soluong" value="<?=$soluong?>">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          <input type="hidden" name="id_sanpham" value="<?=$id_sanpham?>">
          <input type="hidden" name="id_bienthe_sp" value="<?php echo $id_bienthe_sp; ?>">
          <input type="submit" value="Cập Nhập" class="btn btn-success float-left" name="capnhap">
          <p style="margin-top: 8px ; padding-left: 100px; " >                    
            <?php if(isset(($thongbao))&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>