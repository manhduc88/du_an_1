<?php if(is_array($baiviet)){
    extract($baiviet);
  }
?>
<form action="../controllers/AdminController.php?act=updatebv" method="post" style=" margin: 20px;" enctype="multipart/form-data">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cập nhật bài viết</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cập nhật bài viết</li>
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
                <label for="inputName">Tiêu đề</label>
                <input type="text" id="inputName" class="form-control" name="tieude" value=" <?=$tieude?> " >
              </div>
              <div class="form-group">
                <label for="inputName">Nội dung</label>
                <input type="text" id="inputName" class="form-control" name="noidung" value=" <?=$noidung?> " >
              </div>
              <div class="form-group">
                <label for="inputDescription">Mô tả</label>
                <input type="text" id="inputName" class="form-control" name="mota" value=" <?=$mota?> " >
              </div>
              <div class="form-group">
                <label for="inputDescription">Ngày đăng</label>
                <input type="text" id="inputName" class="form-control" name="ngaydang" value=" <?=$ngaydang?> " >
              </div>
              
              <div class="form-group">
                <input type="hidden" name="id_baiviet" value="<?php echo $id_baiviet; ?>">
                <input type="hidden" name="hinh" value="<?php echo $hinh; ?>">
                <label for="inputClientCompany">Hình ảnh</label> <br>
                <img src="../../uploads/<?=$hinh?>" alt="" width="60px" height="60px" style="margin-bottom: 10px;" > <br> 
                <input type="file"  name="hinh" >

              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">

          <input type="submit" value="Cập nhật" class="btn btn-success float-left" name="capnhatbv">
          <p style="margin-top: 8px ; padding-left: 100px; " >                    
            <?php if(isset(($thongbao))&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>