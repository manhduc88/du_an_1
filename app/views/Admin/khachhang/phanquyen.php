<?php if(is_array($user)){
    extract($user);
  }
?>
<form action="../controllers/AdminController.php?act=updatepq" method="post" style=" margin: 20px;" enctype="multipart/form-data" >
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Phân quyền</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Phân quyền</li>
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
                <label for="inputClientCompany">Tên tài khoản</label>
                <input type="text" id="inputClientCompany" class="form-control" value="<?=$ten_dang_nhap?>" name="ten_dang_nhap" disabled>
              </div>
              <div class="form-group">
                <label for="inputStatus">Vai trò</label>
                <select id="inputStatus" class="form-control custom-select" name="id_vaitro">
                  <?php
                            $idvaitro=$id_vaitro;
                            
                            foreach ($listvaitro as $vaitro){
                              extract($vaitro);
                            if($idvaitro==$id_vaitro){
                            echo '<option value="'.$id_vaitro.'" selected >'.$vaitro.'</option>';}
                            else {
                              echo '<option value="'.$id_vaitro.'" >'.$vaitro.'</option>';

                            }
                          } ?>
                </select>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
            <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
            <input type="submit" value="Phân quyền" class="btn btn-success float-left" name="phanquyen">
            <p style="margin-top: 8px ; padding-left: 100px; " >                    
            <?php if(isset(($thongbao))&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>