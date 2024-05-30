<form action="../controllers/AdminController.php?act=addsanpham" method="post" style=" margin: 20px;" enctype="multipart/form-data" >
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
                <input type="text" id="inputName" class="form-control" name="tensp">
              </div>
              <div class="form-group">
                <label for="inputName">Giá</label>
                <input type="text" id="inputName" class="form-control" name="gia">
              </div>
              <div class="form-group">
                <label for="inputDescription">Mô Tả</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="mota"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus" >Nhóm sản phẩm</label>
                <select id="inputStatus" class="form-control custom-select" name="id_nhomsp">
                  <option selected disabled>Chọn nhóm sản phẩm</option>

                                    <?php
                          foreach ($listnhomsp as $nhomsp){
                            extract($nhomsp);
                            echo '<option value="'.$id_nhom_sp.'">'.$nhom_sp.'</option>';
                          } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Giới tính sản phẩm</label>
                <select id="inputStatus" class="form-control custom-select" name="id_gioitinhsp">
                  <option selected disabled>Chọn giới tính</option>
                  <?php
                          foreach ($listgioitinhsp as $gioitinh){
                            extract($gioitinh);
                            echo '<option value="'.$id_gioitinh_sp.'">'.$gioitinh.'</option>';
                          } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Hình đại diện</label> <br>
                <input type="file"  name="hinh_daidien" >
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Ảnh mô tả</label> <br>
                <input type="file"  name="hinh_daidiens[]" multiple="multiple">
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
            <?php if(isset(($thongbao))&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>