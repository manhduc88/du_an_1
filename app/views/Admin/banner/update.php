<?php 
if(is_array($one_banner)){
    extract($one_banner);
  }

  // echo "<pre>";
  //   print_r($one_banner);
  // echo "<pre>";
?>
<form action="../controllers/AdminController.php?act=update_banner" method="post" style=" margin: 20px;" enctype="multipart/form-data">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cập nhập banner</li>
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
                <label for="inputName">Tiêu đề</label>
                <input type="text" id="inputName" class="form-control" name="tieude" value="<?php echo $tieude; ?>">

                <label for="inputName">Tiêu đề phụ</label>
                <textarea name="tieudephu" id="inputClientCompany" cols="30" rows="10" class="form-control"> <?php echo $tieudephu ?> </textarea>

                <div class="form-group">
                <label for="inputName">Ảnh</label> <br>
                <img src="../../uploads/<?=$hinh?>" alt="" width="60px" height="60px" style="margin-bottom: 10px;" > <br> 
                <input type="file"  name="hinh" >
                </div>

                <label for="inputName">Mô tả</label>
                <input type="text" id="inputName" class="form-control" name="mota" value="<?php echo $mota; ?>">

                <label for="inputClientCompany">Link</label>
                <input type="text" id="inputClientCompany" class="form-control" name="link" value="<?php echo $link; ?>">


              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          <input type="hidden" name="id_banner" value="<?php echo $id_banner; ?>">
          <input type="hidden" name="anh" value="<?php echo $hinh; ?>">
          <input type="submit" name="capnhap" value="Cập nhập" class="btn btn-success float-left">
          <p style="margin-top: 8px ; padding-left: 100px; " >                    
            <?php if(isset($thongbao)&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>