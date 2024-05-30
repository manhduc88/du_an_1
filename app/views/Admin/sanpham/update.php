<?php if(is_array($sanpham)){
    extract($sanpham);
  }
?>
<form action="../controllers/AdminController.php?act=updatesp" method="post" style=" margin: 20px;" enctype="multipart/form-data" >
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Thêm sản phẩm</li>
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
                <label for="inputName">Tên sản phẩm</label>
                <input type="text" id="inputName" class="form-control" name="tensp" value=" <?=$ten_sanpham?> " >
              </div>
              <div class="form-group">
                <label for="inputName">Giá</label>
                <input type="text" id="inputName" class="form-control" name="gia" value=" <?=$gia?> " >
              </div>
              <div class="form-group">
                <label for="inputDescription">Mô Tả</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="mota" ><?php echo $mota; ?></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus" >Nhóm sản phẩm</label>
                <select id="inputStatus" class="form-control custom-select" name="id_nhomsp">

                                                    <?php
                            $id_nhomsp=$id_nhom_sp;
                            
                          foreach ($listnhomsp as $nhomsp){
                            extract($nhomsp);
                            if($id_nhomsp==$id_nhom_sp){
                            echo '<option value="'.$id_nhom_sp.'" selected >'.$nhom_sp.'</option>';}
                            else {
                              echo '<option value="'.$id_nhom_sp.'" >'.$nhom_sp.'</option>';

                            }
                          } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Giới tính sản phẩm</label>
                <select id="inputStatus" class="form-control custom-select" name="id_gioitinhsp">
                          <?php
                            $id_gioitinhsp=$id_gioitinh_sp;
                            
                            foreach ($listgioitinhsp as $gioi_tinh){
                              extract($gioi_tinh);
                            if($id_gioitinhsp==$id_gioitinh_sp){
                            echo '<option value="'.$id_gioitinh_sp.'" selected >'.$gioitinh.'</option>';}
                            else {
                              echo '<option value="'.$id_gioitinh_sp.'" >'.$gioitinh.'</option>';

                            }
                          } ?>
                </select>
              </div>
              <div class="form-group">
                <input type="hidden" name="id_sanpham" value="<?php echo $id_sanpham; ?>">
                <input type="hidden" name="tenhinh" value="<?php echo $hinh_daidien; ?>">
                <label for="inputClientCompany">Hình đại diện</label> <br>
                <img src="../../uploads/<?=$hinh_daidien?>" alt="" width="60px" height="60px" style="margin-bottom: 10px;" > <br> 
                <input type="file"  name="hinh_daidien" >

              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">

          <input type="submit" value="Cập nhập" class="btn btn-success float-left" name="capnhapsp">
          <p style="margin-top: 8px ; padding-left: 100px; " >                    
            <?php if(isset($thongbao)&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>