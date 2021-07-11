        <!-- start of news feed area -->
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
                                    <a
                                        href="?controller=singlePost&PostId=<?php echo $slidetoprel['PostId']?>"><?php echo $slidetoprel['Title'] ?></a>
                                </li>
                                <?php }?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of news feed area  -->
        <!-- Breadcrumb Area Start Here -->
        <section class="breadcrumbs-area"
            style="background-image:url('https://s3.ap-south-1.amazonaws.com/booko-events/vendor/images/CocktailBanner_02.jpg');">
            <div class="container">
                <div class="breadcrumbs-content">
                    <h1>Giới thiệu & Liên hệ</h1>
                    <ul>
                        <li>
                            <a href="./">Trang chủ</a> -
                        </li>
                        <li>Giới thiệu & Liên hệ</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Area End Here -->
        <!-- Contact Page Area Start Here -->
        <section class="bg-body section-space-less30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 mb-30">
                        <div class="topic-border color-cinnabar mb-30">
                            <div class="topic-box-lg color-cinnabar">Về chúng tôi</div>
                        </div>
                        <h2 class="title-semibold-dark size-xl">Dịch vụ của chúng tôi!</h2>
                        <p class="size-lg mb-40">Trang Web cung cấp đầy đủ các thông tin bổ ích: cẩm nang, công thức,
                            mẹo hay và các thông tin khác liên quan tới ẩm thực, gia đình nhằm cải thiện công việc bếp
                            núc của chị em phụ nữ cũng như các nhà nội trợ.
                        </p>

                        <h2 class="title-semibold-dark size-xl">Bạn nên chọn chúng tôi!</h2>
                        <p class="size-lg mb-40"> Kênh Ẩm thực Bếp Phượt cung cấp tất cả những thông tin hữu ích và hấp
                            dẫn liên quan tới ẩm thực của các vùng miền trên đất nước hình chữ S.
                            <br><br>Ngoài ra, qua những bài viết hay, ấn tượng về văn hóa ẩm thực, sẽ là nhịp cầu nối giúp
                            bạn đọc có thêm vốn tri
                            thức, hiểu biết và cảm nhận rõ hơn về văn hóa ẩm thực Việt.
                            <br><br>Qua Website Bếp Phượt, chúng tôi mong muốn được góp phần làm cho cuộc sống của chúng
                            ta thêm phần phong phú và nhiều màu sắc hơn.
                            <br><br>Hy vọng với những thông tin này, "Bếp Phượt" sẽ
                            là người bạn đồng hành của không chỉ các bà nội trợ mà còn là của những ai yêu mến ẩm thực,
                            món ngon của nhiều vùng miền trên tổ quốc.

                        </p>
                        <div class="google-map-area mb-50">
                            <div id="googleMap" style="width:100%; height:400px;"><iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4924.802664146637!2d106.80176273487078!3d10.869539453369185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2sUniversity%20of%20Information%20Technology%20VNU-HCM!5e0!3m2!1sen!2s!4v1625717365293!5m2!1sen!2s"
                                    width="720" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe></div>
                        </div>
                        <br>
                        <div class="topic-border color-cinnabar mb-30">
                            <div class="topic-box-lg color-cinnabar">Thông tin vị trí</div>
                        </div>
                        <ul class="address-info">
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>Đại học Công nghệ Thông tin, DHQG
                                TPHCM, Khu phố
                                6, Phường Linh Trung, Thành phố Thủ Đức.
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>0999999999
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>1952xxxx@gm.uit.edu.vn
                            </li>
                            <li>
                                <i class="fa fa-fax" aria-hidden="true"></i>0999999990
                            </li>
                        </ul>

                    </div>
                    <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                        <div class="sidebar-box">
                            <div class="ne-banner-layout1 text-center">
                                <a href="#">
                                    <br><br><br>
                                    <img src="Public/client/img/banner/banner.jpg" alt="ad" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="sidebar-box">
                            <div class="topic-border color-cod-gray mb-30">
                                <div class="topic-box-lg color-cod-gray">Gửi Thư</div>
                            </div>
                            <div class="newsletter-area bg-primary">
                                <h2 class="title-medium-light size-xl pl-30 pr-30">Bạn còn thắc mắc về chúng tôi!</h2>
                                <p>Gửi email để được hỗ trợ ngay</p>
                                <div class="input-group stylish-input-group">
                                    <input type="text" placeholder="1952xxxx@gm.uit.edu.vn" class="form-control">
                                    <span class="input-group-addon">
                                        <button type="submit">
                                            <a class="fa fa-angle-right" style="color:white;" aria-hidden="true"
                                                onClick="javascript:window.open('mailto:1952xxxx@gm.uit.edu.vn', 'my-window');event.preventDefault()"
                                                href="mailto:1952xxxx@gm.uit.edu.vn"></a>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Page Area End Here -->