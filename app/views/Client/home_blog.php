

        <!-- breadcrumb area start here  -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">Blog</h2>
                    <ul class="breadcrumb-pages">
                        <li class="page-item"><a class="page-item-link" href="index.php">Trang chủ</a></li>
                        <li class="page-item">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end here  -->

        <!-- Blog Page area start here  -->
        <div class="blog-area blog-page-area section">
            <div class="container">
                <div class="row">

                    
                    <?php foreach ($listbv as $bv){
                        extract($bv);
                        echo '
                        <!-- Blog Item Start -->
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-grid-blog">
                                <div class="blog-thumbnail">
                                    <a href="single-blog.html"><img class="thumbnail-image" src="uploads/'.$hinh.'" alt="blog" /></a>
                                </div>
                                <div class="blog-info">
                                    <ul class="blog-category">
                                        <li class="single-category"><a class="category-text" href="single-blog.html"></a></li>
                                        <li class="single-category"><a class="category-text" href="single-blog.html"></a></li>
                                    </ul>
                                    <h3 class="blog-title"><a class="blog-link" href="index.php?act=chitietbaiviet&id_baiviet='.$id_baiviet.'">'.$tieude.'</a></h3>
                                    <p class="blog-content">'.$mota.'</p>
                                    <a class="blog-btn" href="index.php?act=chitietbaiviet&id_baiviet='.$id_baiviet.'">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Item End -->
                        ';

                    } ?>


                </div>

                <div class="row">
                    <div class="pagination-area mt-30">
                        <ul class="paginations text-center">
                            <li class="pagination-page"><a href="#" class="pagination-link"><i class="fas fa-angle-double-left"></i></a></li>
                            <li class="pagination-page active"><a href="#" class="pagination-link">1</a></li>
                            <li class="pagination-page"><a href="#" class="pagination-link">2</a></li>
                            <li class="pagination-page"><a href="#" class="pagination-link">3</a></li>
                            <li class="pagination-page"><a href="#" class="pagination-link"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>