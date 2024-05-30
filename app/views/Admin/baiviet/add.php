<form action="../controllers/AdminController.php?act=addbaiviet" method="post"  style=" margin: 20px;" enctype="multipart/form-data" >
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm bài viết</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Thêm bài viết</li>
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
                <input type="text" name="tieude" id="inputName" class="form-control">
                <label for="inputName">Nội dung</label>
                <textarea id="inputDescription" class="form-control" rows="8" name="noidung"></textarea>
                <label for="inputName">Mô tả</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="mota"></textarea>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Hình đại diện</label> <br>
                <input type="file" name="hinh" id="inputName">
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
            <?php if(isset($thongbao)&&($thongbao!="")) {echo $thongbao;}?></p>
        </div>
      </div>
    </section>
    <!-- /.content -->
    </form>