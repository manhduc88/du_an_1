
        <!-- breadcrumb area start here  -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">Liên Hệ Chúng Tôi</h2>
                    <ul class="breadcrumb-pages">
                        <li class="page-item"><a class="page-item-link" href="index.php">Trang Chủ</a></li>
                        <li class="page-item"> Liên Hệ Chúng Tôi</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end here  -->

        <!-- contact us area start here  -->
        <div class="contact-us-area section-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="contact-us-top">
                            <div class="row">

                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-contact-info border-0 text-center">
                                        <img class="contact-info-icon" src="public/assets_client/images/contact-info-1.png" alt="contact-info" />
                                        <h3 class="contact-info-title">Tin Nhắn</h3>
                                        <p class="contact-info-content">Gửi tin nhắn cho chúng tôi và đại sứ sẽ trả lời 1-814-251-9966</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-contact-info text-center">
                                        <img class="contact-info-icon" src="public/assets_client/images/contact-info-2.png" alt="contact-info" />
                                        <h3 class="contact-info-title">Địa Chỉ</h3>
                                        <p class="contact-info-content">461 Đường Valencia San Francisco, CA 94103 Manhattan NYC</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-contact-info text-center">
                                        <img class="contact-info-icon" src="public/assets_client/images/contact-info-3.png" alt="contact-info" />
                                        <h3 class="contact-info-title">Đa Mở</h3>
                                        <p class="contact-info-content">Cửa hàng chúng tôi mở cửa mua sắm, trao đổi hàng ngày từ 11h sáng đến 7h tối</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="contact-form-area">
                            <div class="contct-form-top text-center">
                                <h2 class="form-title">Bạn Có Câu Hỏi Nào Không?</h2>
                                <p class="form-subtitle">Sử dụng mẫu dưới đây để liên hệ với nhóm bán hàng</p>
                            </div>
                            <form action="index.php?act=lienhe" method="post">
                                <div class="row">
                                    <div class="col-md-6" style="width: 1000px;">
                                        <div class="form-group" >
                                            <input type="text" class="form-control" id="" name="hoten"  value="<?=$hoten?>" placeholder="Tên"  />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="" name="email" value="<?=$email?>" placeholder="Địa chỉ email" />
                                        </div>
                                    </div>
                                    <div class="col-md-6" >
                                        <div class="form-group" >
                                            <input type="text" class="form-control" id="" name="sdt" value="<?=$sdt?>" placeholder="Số liên lạc" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control message-box" id="" name="noidung" rows="3" placeholder="Nhập tin nhắn vào đây...."></textarea>
                                        </div>
                                        <div class="form-button text-center">
                                            <input type="hidden" name="id_user" value="<?=$id_user?>">
                                            <input type="submit" name="gui" id="" value="Gửi Tin Nhắn"  class="form-btn">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact us area end here  -->