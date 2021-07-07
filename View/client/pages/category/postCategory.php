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
                    foreach ($slideTopCategory as $slrel){
                    ?>
                        <li>
                            <a href="single.html"><?php echo $slrel['Title']?></a>
                        </li>
                    <?php }?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of news feed area  -->
<!-- start of section bannere -->
<section class="breadcrumbs-area"
    style="background-image: url('https://s3.ap-south-1.amazonaws.com/booko-events/vendor/images/CocktailBanner_02.jpg');">
    <div class="container">
        <div class="breadcrumbs-content">
        <?php 
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
        <?php } ?>
        </div>
    </div>
</section>
<!-- end of section banner -->
<br>
<!-- start of section chuyen muc top -->
<section class="section-space-bottom-less30">
    <div class="container">
        <div class="row">
            <div class="container item-box-light-lg mb-30">
                <div class="topic-border color-cinnabar mb-30">
                    <div class="topic-box-lg color-cinnabar">Bài viết HOT</div>
                </div>
                <div class="ne-carousel nav-control-top2 color-cod-gray" data-loop="true" data-items="3"
                    data-margin="15" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000"
                    data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1"
                    data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true"
                    data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false"
                    data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-Large="3"
                    data-r-Large-nav="true" data-r-Large-dots="false">

                    <?php 
                    foreach ($topPostCategory as $toprel){
                    ?>
                    <div class="position-relative">
                        <div class="img-scale-animate mb-20">
                            <img src="Public/admin/assets/img/<?php echo $toprel['Img'] ?>" alt="news" class="img-fluid width-100">
                            <!-- <div class="topic-box-top-xs">
                                <div class="topic-box-sm color-cod-gray mb-20">Món mặn</div>
                            </div> -->
                        </div>
                        <div class="bg-body">
                            <div class="post-date-dark">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span><?php echo $toprel['DatePost'] ?>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title-medium-dark size-sm mb-none">
                                <a href="single.html"><?php echo $toprel['Title'] ?></a>
                            </h3>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12 mb-30">
                <div class="item-box-light-md-less30 ie-full-width scrollbar" id="scroll-style">
                    <div class="row">
                        <?php 
                foreach ($leftPostCategory as $leftrel){
            ?>
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="media media-none--md mb-30">
                                <div class="position-relative width-40">
                                    <a href="single.html" class="img-opacity-hover">
                                        <img src="Public/admin/assets/img/<?php echo $leftrel['Img'] ?>" alt="news" class="img-fluid">
                                    </a>
                                </div>
                                <div class="media-body p-mb-none-child media-margin30">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span><?php echo $leftrel['DatePost'] ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="title-semibold-dark size-lg mb-15">
                                        <a href="single.html"><?php echo $leftrel['Title'] ?></a>
                                    </h3>
                                    <p><?php echo $leftrel['Summary'] ?>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <?php } ?>
                    </div>
                    <!--seemore -->
                    <center>
                        <button id="btnSeeMore" class="btn btn-lg btn-danger">Xem thêm</button>
                    </center>
                </div>
            </div>
            <div class="ne-sidebar sidebar-break-lg col-xl-4 col-lg-12 scrollbar" id="scroll-style">
                <div class="sidebar-box item-box-light-md">
                    <a href="/bepphuot" > <img src="Public/client/img/logo1.png"></a>                    
                </div>
                <div class="sidebar-box item-box-light-md-less30">
                    <div class="topic-border color-cinnabar mb-30">
                        <div class="topic-box-lg color-cinnabar" style:{color="black" }>Bài viết khác</div>
                    </div>                    
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active show" id="recent">
                            <div class="row">
                                <?php 
                                    foreach ($rightPostCategory as $rightrel){
                                ?>
                                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 col-6 mb-25">
                                    <div class="position-relative">
                                        <a href="single.html" class="img-opacity-hover">
                                            <img src="Public/admin/assets/img/<?php echo $rightrel['Img'] ?>" alt="news"
                                                class="img-fluid width-100 mb-10">
                                        </a>
                                        <h3 class="title-medium-dark size-sm mb-none">
                                            <a href="single.html"><?php echo $rightrel['Title'] ?></a>
                                        </h3>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- start of section chuyen muc top -->