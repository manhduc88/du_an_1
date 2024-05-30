<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../public/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../public/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../public/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../public/plugins/summernote/summernote-bs4.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../public/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- đăng xuất -->
      <li class="nav-item dropdown">
        <a href="index.php/../../../">
          <i class="fa-solid fa-right-to-bracket"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../controllers/AdminController.php" class="brand-link">
      <img src="../../public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin_Nhom10</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="AdminController.php?act=thongke" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Thống kê
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Người dùng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="AdminController.php?act=danhsachkhachhang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="AdminController.php?act=addtk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm người dùng</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                  <p>
                    Vai trò
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="AdminController.php?act=dachsachvaitro" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="AdminController.php?act=addvaitro" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm vai trò</p>
                    </a>
                  </li>             
                </ul>
              </li>
          <!-- hệ thống -->
          <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                  <p>
                    Hệ thống
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview"> 
                  <li class="nav-item">
                    <a href="AdminController.php?act=danhsachhethong" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="AdminController.php?act=addhethong" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm hệ thống</p>
                    </a>
                  </li>             
                </ul>
              </li>
          <!--bài viết -->
          <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                  <p>
                    Bài viết
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview"> 
                  <li class="nav-item">
                    <a href="AdminController.php?act=danhsachbaiviet" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách bài viết</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="AdminController.php?act=addbaiviet" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm bài viết</p>
                    </a>
                  </li>             
                </ul>
             </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Sản Phẩm
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="AdminController.php?act=danhsachsanpham" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sách</p>
                </a>

              </li>
              <li class="nav-item">
                <a href="AdminController.php?act=addsanpham" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm sản phẩm</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="AdminController.php?act=addbienthesp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm biến thể sản phẩm</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                  <p>
                    Nhóm sản phẩm
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="AdminController.php?act=dachsachnhomsp" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="AdminController.php?act=addnhomsanpham" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm nhóm sản phẩm</p>
                    </a>
                  </li>             
                </ul>
              </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                  <p>
                    Màu sắc
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="AdminController.php?act=dachsachmausp" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="AdminController.php?act=addmau" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm màu</p>
                    </a>
                  </li>             
                </ul>
              </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                  <p>
                    Giới Tính
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="AdminController.php?act=danhsachgioitinhsp" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="AdminController.php?act=addgioitinhsanpham" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm giới tính</p>
                    </a>
                  </li>             
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                  <p>
                    Size
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="AdminController.php?act=danhsachsize" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="AdminController.php?act=addsize" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm size</p>
                    </a>
                  </li>             
                </ul>
              </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
              <p>
                Banner
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="AdminController.php?act=danhsachbanner" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="AdminController.php?act=addbanner" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm banner</p>
                </a>
              </li>             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
              <p>
                Banner con
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="AdminController.php?act=danhsachbanner_con" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách banner con</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="AdminController.php?act=addbanner_con" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm banner con</p>
                </a>
              </li>             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Đơn hàng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="AdminController.php?act=dachsachdonhang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách
                    
                  </p>
                </a>
              </li>           
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
              <p>
                Khuyến mãi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="AdminController.php?act=danhsachkm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách khuyến mãi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="AdminController.php?act=addkm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Khuyễn mãi</p>
                </a>
              </li>             
            </ul>
          </li> 
          <li class="nav-item">
            <a href="AdminController.php?act=dachsachlienhe" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                liên hệ
              </p>
            </a>
          </li>

            </ul>
          </li>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
   <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">