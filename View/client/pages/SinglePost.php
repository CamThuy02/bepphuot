
        <section class="container">
            <div class="bg-body-color ml-15 pr-15 mb-10 mt-10">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-5">
                        <div class="topic-box">Bài viết Nổi bật</div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-8 col-7">
                        <div class="feeding-text-light2">
                            <ol id="sample" class="ticker">
                            <?php 
                                $row= new UserModel();
                                $slideTopHome = $row->slideTopHome();
                                foreach ($slideTopHome as $slidetoprel){
                            ?>                        
                                <li>
                                    <a href="?controller=singlePost"><?php echo $slidetoprel['Title'] ?></a>
                                </li>   
                                <?php }?>                    
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News Feed Area End Here -->
        <!-- Breadcrumb Area Start Here -->
        <section class="breadcrumbs-area" style="background-image: url('img/banner/breadcrumbs-banner.jpg');">
            <div class="container">
                <div class="breadcrumbs-content">
                <!-- <?php 
                    foreach ($tagPostCategory as $tagrel){
                    ?>
                        <h1><?php echo $tagrel['ParentName']?></h1>
                        <ul>
                            <li>
                                <a href="bepphuot.html">Trang chủ</a> -
                            </li>
                            <li>
                                <a href="#"><?php echo $tagrel['ParentName']?></a> -
                            </li>
                            <li><?php echo $tagrel['CategoryName']?></li>
                        </ul>
                    <?php } ?> -->
                </div>
            </div>
        </section>
        <!-- Breadcrumb Area End Here -->
        <!-- News Details Page Area Start Here -->
        <section class="bg-accent section-space-less30">
            <div class="news-details-layout2">
                <div class="container">
                    <div class="row mb-50-r">
                        <div class="col-12">
                            <div class="position-relative img-overlay-70">
                                <img src="Public/admin/assets/img/page1.jpg" alt="" class="img-fluid">
                                <div class="topic-box-top-sm">
                                    <div class="topic-box-sm color-cinnabar mb-20">Món mặn</div>
                                </div>
                                <div class="mask-content-lg hidden-xs">
                                    <ul class="post-info-light mb-10">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>18 tháng 5, 2021</a>
                                        </li>
                                    </ul>
                                    <h2 style="color: white" class="title-semibold-light size-c34 mb-40">7 thực đơn bữa sáng vừa nhanh gọn, vừa healthy cho ngày cuối tuần</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="scrollbar col-xl-8 col-lg-7 col-md-12 mb-30" id="scroll-style">
                            <div class="item-box-light-lg mb-30">
                                <p>
                                <!-- summary -->
                                </p>
                                <hr>
                                <p>
                                <!-- Content -->
                                </p>
                                <ul class="blog-tags item-inline">
                                    <li>Thẻ</li>
                                    <li>
                                        <a href="#">#congthuc</a>
                                    </li>
                                    <li>
                                        <a href="#">#ansang</a>
                                    </li>
                                    <li>
                                        <a href="#">#dongian</a>
                                    </li>
                                </ul>
                                <div class="post-share-area item-shadow-1">
                                    <p>Chia sẻ bài viết với!</p>
                                    <ul class="social-default item-inline">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="pinterest">
                                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row item-box-light-lg no-gutters divider">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <a href="single.html" class="prev-article">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>Bài viết trước đó</a>
                                    <h3 class="title-medium-dark pr-50"><b>
                                    <!-- pre post -->
                                    </b></h3>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                                    <a href="single.html" class="next-article">Bài viết tiếp theo
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    <h3 class="title-medium-dark pl-50"><b>
                                    <!-- next post -->
                                    </b></h3>
                                </div>
                            </div>
                        </div>
                        <div class="ne-sidebar scrollbar sidebar-break-md col-xl-4 col-lg-5 col-md-12" id="scroll-style">
                            <div class="sidebar-box">
                                <div class="item-box-light-md">
                                    <div class="topic-border color-cod-gray mb-30">
                                        <div class="topic-box-lg color-cod-gray">Kết nối</div>
                                    </div>
                                    <ul class="stay-connected-color overflow-hidden">
                                        <li class="facebook">
                                            <a href="#">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                                <div class="connection-quantity">50.2 k</div>
                                                <p>Thích</p>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                                <div class="connection-quantity">10.3 k</div>
                                                <p>Theo dõi</p>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#">
                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                <div class="connection-quantity">25.4 k</div>
                                                <p>Thích</p>
                                            </a>
                                        </li>
                                        <li class="rss">
                                            <a href="#">
                                                <i class="fa fa-rss" aria-hidden="true"></i>
                                                <div class="connection-quantity">20.8 k</div>
                                                <p>Đăng kí</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="item-box-light-md">
                                    <div class="topic-border color-cod-gray mb-30">
                                        <div class="topic-box-lg color-cod-gray">Phổ biến</div>
                                    </div>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active show" id="recent">

                                            <div class="position-relative mb30-list">
                                                <div class="media">
                                                    <a class="img-opacity-hover width50-md width50-mb" href="single-news-1.html">
                                                        <img src="img/news/7td4.jpg" alt="news" class="img-fluid">
                                                    </a>
                                                    <div class="media-body">
                                                        <div class="post-date-dark">
                                                            <ul>
                                                                <li>
                                                                    <span>
                                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                        </span>04 tháng 5, 2021</li>
                                                            </ul>
                                                        </div>
                                                        <h3 class="title-semibold-dark size-md mb-none">
                                                            <a href="single-news-2.html">15 mẹo nấu ăn ngon áp dụng ngay lập tức</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="item-box-light-md">
                                    <div class="topic-border color-cod-gray mb-25">
                                        <div class="topic-box-lg color-cod-gray">Thẻ</div>
                                    </div>
                                    <ul class="sidebar-tags2">
                                        <li>
                                            <a href="#">Sức khỏe</a>
                                        </li>
                                        <li>
                                            <a href="#">Ẩm thực vùng miền</a>
                                        </li>
                                        <li>
                                            <a href="#">Công thức</a>
                                        </li>
                                        <li>
                                            <a href="#">Món ngon ngày tết</a>
                                        </li>
                                        <li>
                                            <a href="#">Món mặn</a>
                                        </li>
                                        <li>
                                            <a href="#">Thức uống</a>
                                        </li>
                                        <li>
                                            <a href="#">Khai vị</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="container item-box-light-lg mb-30">
                            <h4>Đánh giá bài viết:</h4>
                            <form action="" method="">
                                <div id="cate-rating" class="cate-rating">
                                    <div class="stars">
                                        <a id="star-1" class="star"><span class="glyphicon glyphicon-star"></span></a>
                                        <a id="star-2" class="star"><span class="glyphicon glyphicon-star"></span></a>
                                        <a id="star-3" class="star"><span class="glyphicon glyphicon-star"></span></a>
                                        <a id="star-4" class="star"><span class="glyphicon glyphicon-star"></span></a>
                                        <a id="star-5" class="star"><span class="glyphicon glyphicon-star"></span></a>
                                        <p id="vote-desc">Mời bạn cho điểm!</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <input type="text" class="container item-box-light-lg mb-30" name="comment" placeholder="Nhập đánh giá của bạn tại đây...">
                                <br>
                                <button style="background-color:red;border:red;color:white" type="submit" value="">Gửi đi</button>
                            </form>
                        </div>


                        <div class="container item-box-light-lg mb-30">
                            <div class="topic-border color-cod-gray mb-30 width-100">
                                <div class="topic-box-lg color-cod-gray">Bài viết liên quan</div>
                            </div>
                            <div class="ne-carousel nav-control-top2 color-cod-gray" data-loop="true" data-items="3" data-margin="15" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1"
                                data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="true"
                                data-r-medium-dots="false" data-r-Large="3" data-r-Large-nav="true" data-r-Large-dots="false">
            
                              
                                <div class="position-relative">
                                    <div class="img-scale-animate mb-20">
                                        <img src="img/news/news33.jpg" alt="news" class="img-fluid width-100">
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cod-gray mb-20">mẹo vặt</div>
                                        </div>
                                    </div>
                                    <div class="bg-body">
                                        <div class="post-date-dark">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>12 tháng 5, 2021</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-dark size-sm mb-none">
                                            <a href="single.html"> 5 công thức làm nước giải nhiệt</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>