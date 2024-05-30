<?php
  if(is_array($donhang)){
    extract($donhang);
  } 
?>
<form action="../controllers/AdminController.php?act=updatett" method="post" style=" margin: 20px;" enctype="multipart/form-data" >
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cập nhập Trạng Thái</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cập nhập Trạng Thái</li>
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
                <label for="inputStatus">Trạng thái đơn hàng</label>
                <select id="inputStatus" class="form-control custom-select" name="trang_thai">
                  <?php
                            if($trang_thai==1){
                            echo '
                                <option value="1" selected >Chờ xác nhận</option> 
                                <option value="2"  >Đã xác nhận</option> 
                                <option value="3"  >Đang giao hàng</option> 
                                <option value="4" >Hoàn tất</option> 
                            ';
                            }
                            elseif($trang_thai==2){
                                echo '
                                    <option value="2" selected >Đã xác nhận</option> 
                                    <option value="3"  >Đang giao hàng</option> 
                                    <option value="4" >Hoàn tất</option> 
                                ';
                                }
                            elseif($trang_thai==3){
                                echo '
                                    <option value="3" selected >Đang giao hàng</option> 
                                    <option value="4" >Hoàn tất</option> 
                                ';
                                }
                            elseif($trang_thai==4){
                                echo '
                                    <option value="4" selected>Hoàn tất</option> 
                                ';
                                }
                          ?>
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
          <input type="hidden" name="id_donhang" value="<?php echo $id_donhang; ?>">
          <input type="submit" value="Cập Nhập" class="btn btn-success float-left" name="capnhap">
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>