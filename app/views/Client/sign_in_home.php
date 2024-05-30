

        <!-- breadcrumb area start here  -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">Đăng Nhập</h2>
                    <ul class="breadcrumb-pages">
                        <li class="page-item"><a class="page-item-link" href="index.php">Trang chủ</a></li>
                        <li class="page-item">Đăng Nhập</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end here  -->

        <!-- about us area start here  -->
        <div class="sign-in-page section">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-5">
                        <div class="login-wrap">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="far fa-user"></span>
                            </div>
                            <h1 class="text-center mb-4">Đăng Nhập</h1>
                            <form class="login-form"  action="index.php?act=dangnhap" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-left" placeholder="Tên đăng nhập" required="" name="tendangnhap">
                                </div>
                                <div class="form-group d-flex">
                                    <input type="password" class="form-control rounded-left" placeholder="Mật khẩu" required="" name="pass">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="dangnhap" id="" class="form-control btn btn-primary rounded submit px-3 primary-btn" value="Đăng Nhập">
                                </div>
                                <div class="remember-box form-group d-md-flex justify-content-between mb-0">
                                    <div>
                                        <label class="checkbox-wrap">Nhớ tôi
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                          </label>
                                    </div>
                                    <div class="text-md-end text-lg-end">
                                        <a href="javascript:void(0)" class="forget-password-link">Quên mật khẩu?</a>
                                    </div>
                                </div>
                                
                                <div class="already-have-account">
                                Bạn chưa có tài khoản?<a href="index.php?act=dangki" class="forget-password-link">Đăng kí</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
