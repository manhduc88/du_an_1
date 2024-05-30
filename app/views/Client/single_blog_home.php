
<?php if(is_array($baiviet)){
    extract($baiviet);
  }
?>
        <!-- breadcrumb area start here  -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-wrap text-center">
                    <h2 class="page-title">Blog Đơn</h2>
                    <ul class="breadcrumb-pages">
                        <li class="page-item"><a class="page-item-link" href="index.html">Trang Chủ</a></li>
                        <li class="page-item">Blog Đơn</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end here  -->

        <!-- blog-single-area area start here  -->
        <div class="blog-single-area section-bottom">
            <div class="container">
                <div class="blog-single-top">
                    <div class="blog-thumbnail">
                        <img class="blog-image" src="public/assets_client/images/blog-single-image.png" alt="blog-single-image" />
                        <div class="blog-info">
                            <div class="blog-info-wrap">
                                <ul class="blog-meta">
                                    <li class="single-meta"><span class="blog-date"><?=$ngaydang?></span></li>
                                    <li class="single-meta"><span class="blog-category">DIGITAL PRODUCT</span></li>
                                </ul>
                                <h2 class="blog-title"><?=$tieude?></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="blog-meta-box">
                            <div class="post-author">
                                <img class="author-image" src="public/assets_client/images/post-author.png" alt="post-author" />
                                <div class="author-info">
                                    <h3 class="author-name">Andrew Simmons</h3>
                                    <p class="author-designation">Dr. William A. Abdu, M.D, M.S.</p>
                                </div>
                            </div>
                            <div class="social-media">
                                <ul class="media-lsit">
                                    <li class="medi-item"><a href="javascript:void(0)" class="media-link"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="medi-item"><a href="javascript:void(0)" class="media-link"><i class="fab fa-skype"></i></a></li>
                                    <li class="medi-item"><a href="javascript:void(0)" class="media-link"><i class="fab fa-twitter"></i></a></li>
                                    <li class="medi-item"><a href="javascript:void(0)" class="media-link"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="blog-content has-dropcap">
                            <?=$noidung?>
                        </p>

                        <!-- comments-area start here  -->
                        <div class="comments-area mb-40">
                            <h3 class="comments-title">4 COMMENTS</h3>
                            <ul class="comment-list">
                                <li class="single-comment">
                                    <div class="comment-meta">
                                        <img class="comments-author-image" src="public/assets_client/images/comments-author-1.png" alt="comments-author" />
                                        <div class="comment-meta-info">
                                            <h4 class="author-name">Mitchel Cummins</h4>
                                            <span class="comment-time">October 31, 2017</span>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p class="comment-text">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac</p>
                                    </div>
                                    <a href="javascript:void(0)" class="reply">Replay</a>
                                    <ul class="children">
                                        <li class="single-comment">
                                            <div class="comment-meta">
                                                <img class="comments-author-image" src="public/assets_client/images/comments-author-2.png" alt="comments-author" />
                                                <div class="comment-meta-info">
                                                    <h4 class="author-name">John Cummins</h4>
                                                    <span class="comment-time">October 31, 2017</span>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p class="comment-text">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac</p>
                                            </div>
                                            <a href="javascript:void(0)" class="reply">Replay</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="single-comment">
                                    <div class="comment-meta">
                                        <img class="comments-author-image" src="public/assets_client/images/comments-author-1.png" alt="comments-author" />
                                        <div class="comment-meta-info">
                                            <h4 class="author-name">James Doe</h4>
                                            <span class="comment-time">October 31, 2017</span>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p class="comment-text">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac</p>
                                    </div>
                                    <a href="javascript:void(0)" class="reply">Replay</a>
                                </li>
                            </ul>
                        </div>
                        <!-- comments-area start here  -->

                        <!-- comment-respond start here  -->
                        <div class="comment-respond">
                            <h3 class="reply-title text-center">Leave a comment</h3>
                            <div class="comemnt-form">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control message-box" id="message-box" name="message-box" rows="3" placeholder="Type Message Here..." ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Contact_Name" name="Contact_Name" placeholder="Contact Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="Emil_Address" name="Emil_Address" placeholder="Emil Address" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button class="submit-btn" type="button">Submit Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- comment-respond end here  -->

                    </div>
                </div>
            </div>
        </div>
