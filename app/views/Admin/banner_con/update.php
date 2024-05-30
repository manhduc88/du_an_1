<?php 
if(is_array($one_banner_con)){
    extract($one_banner_con);
  }
?>
<form action="../controllers/AdminController.php?act=updatebanner_con" method="post" style=" margin: 20px;" enctype="multipart/form-data">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cập nhập banner con</li>
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
                <label for="inputClientCompany">Ảnh Banner con</label> <br>
                <img src="../../uploads/<?=$hinh?>" alt="" width="60px" height="50px" style="margin-bottom: 10px;" > <br> 
                <input type="file" name="anh" id="inputClientCompany" >

                <label for="inputClientCompany">Link</label>
                <input type="text" name="link" id="inputClientCompany" class="form-control" value=<?php echo $link?> >

              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          <input type="hidden" name="id_banner_con" value="<?php echo $id_banner_con; ?>">
          <input type="hidden" name="anh" value="<?php echo $hinh; ?>">

          <input type="submit" name="capnhap" value="Cập nhập" class="btn btn-success float-left">
          <p style="margin-top: 8px ; padding-left: 100px; " >                    
            <?php if(isset($thongbao)&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>

    <?php
        // echo "<pre>";
        //     print_r($list_banner_con);
        // echo "<pre>";
    ?>