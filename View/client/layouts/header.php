
<!doctype html>
<html class="no-js" lang="">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bếp Phượt</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="iPublic\client\img\logo_circle.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="Public\client\css\normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="Public\client\css\main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Public\client\css\bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="Public\client\css\animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="Public\client\css\font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="Public\client\vendor\OwlCarousel\owl.carousel.min.css">
    <link rel="stylesheet" href="Public\client\vendor\OwlCarousel\owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="Public\client\css\meanmenu.min.css">
    <!-- Nivo Slider CSS-->
    <link rel="stylesheet" href="Public\client\vendor\slider\css\nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="Public\client\vendor\slider\css\preview.css" type="text/css" media="screen" />
    <!-- Magnific CSS -->
    <link rel="stylesheet" type="text/css" href="Public\client\css\magnific-popup.css">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="Public\client\css\hover-min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="Public\client\style.css">
    <!-- For IE -->
    <link rel="stylesheet" type="text/css" href="Public\client\css\ie-only.css" />
    <!-- Modernizr Js -->
    <script src="Public\client\js\modernizr-2.8.3.min.jss"></script>

</head>

<body>
    <!-- start of content -->
    <!-- start of preloader -->
    <div id="preloader"></div>
    <?php  
            if (isset($error['username'])) {?>
                <div class="alert alert-danger" style="top: 155px; position: absolute; z-index: 5; width: auto; right: 0px;" role="alert">
                    <?php echo $error['username']?>
                </div>
            <?php } else if (isset($error['password'])) {?>
                <div class="alert alert-danger" style="top: 155px; position: absolute; z-index: 5; width: auto; right: 0px;" role="alert">
                    <?=$error['password']?>
                </div>
            <?php } else if (isset($error['username_exist'])) {?>
                <div class="alert alert-danger" style="top: 155px; position: absolute; z-index: 5; width: auto; right: 0px;" role="alert">
                    <?=$error['username_exist']?>
                </div>
            <?php }
        ?>
    <!-- end of preloader  -->
    <div id="wrapper">
        <!-- start of header area -->
        <header>
            <div id="header-layout1" class="header-style1">
                <div class="header-top-bar">
                    <div class="top-bar-top bg-primarytextcolor border-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-12">
                                    <ul class="news-info-list text-center--md">
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>Việt Nam
                                        </li>
                                        <li>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <script language="" type="text/javascript">
                                                // Array ofmonth Names

                                                var monthNames = new Array("một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín", "mười", "mười một", "mười hai");

                                                var monthNames = new Array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");

                                                var dayNames = new Array("Chủ nhật,", "Thứ Hai,", "Thứ Ba,", "Thứ tư,", "Thứ Năm,", "Thứ Sáu,", "Thứ Bảy,")

                                                var now = new Date();

                                                thisYear = now.getYear();

                                                thisDay = dayNames[now.getDay()];

                                                if (thisYear < 1900) {
                                                    thisYear += 1900
                                                }; // corrections if Y2K display problem

                                                document.write(thisDay + " " + "ngày" + " " + now.getDate() + " tháng " + monthNames[now.getMonth()] + " năm " + thisYear);
                                            </script>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu-area bg-body border-bottom" id="sticker">
                    <div class="container">
                        <div class="row no-gutters d-flex align-items-center">
                            <div class="col-lg-2 col-md-2 d-none d-lg-block">
                                <div class="logo-area">
                                    <a href="./" class="img-fluid">
                                        <img src="Public\client\img\logo.png" alt="logo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <?php @include ('menu.php')?>
                            <!-- <div class="col-lg-8 d-none d-lg-block position-static min-height-none">
                                <div class="ne-main-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li class="active">
                                                <a href="bepphuot.html">Trang chủ</a>
                                            </li>
                                            <li>
                                                <a href="#">công thức</a>
                                                <ul class="ne-dropdown-menu">
                                                    <li>
                                                        <a href="chuyenmuc.html">Thức uống</a>
                                                    </li>
                                                    <li>
                                                        <a href="single.html">Khai vị</a>
                                                    </li>
                                                    <li>
                                                        <a href="single.html">Món mặn</a>
                                                    </li>
                                                    <li>
                                                        <a href="single.html">Tráng miệng</a>
                                                    </li>
                                                    <li>
                                                        <a href="single.html">Đồ ăn vặt</a>
                                                    </li>
                                                    <li>
                                                        <a href="single.html">Nước chấm</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Ẩm thực</a>
                                                <ul class="ne-dropdown-menu">
                                                    <li>
                                                        <a href="single.html">Ẩm thực ba miền</a>
                                                    </li>
                                                    <li>
                                                        <a href="single.html">Món ngon ngày tết</a>
                                                    </li>
                                                    <li>
                                                        <a href="single.html">Mâm cơm gia đình</a>
                                                    </li>
                                                    <li>
                                                        <a href="single.html">Tráng miệng</a>
                                                    </li>
                                                    <li>
                                                        <a href="single.html">Thức uống</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">cẩm nang nhà bếp</a>
                                                <ul class="ne-dropdown-menu">
                                                    <li>
                                                        <a href="single.html">Khéo tay hay làm</a>
                                                    </li>
                                                    <li>
                                                        <a href="single.html">Mẹo vặt nhà bếp</a>
                                                    </li>
                                                    <li>
                                                        <a href="single.html">Sức khỏe gia đình</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="404.html">Quán ngon</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> -->
                            <div class="col-lg-2 col-md-2 col-sm-2 text-right position-static">
                                <div class="header-action-item on-mobile-fixed">
                                    <ul>
                                        <li>
                                            <form id="top-search-form" class="header-search-light">
                                                <input type="text" class="search-input" placeholder="Search...." required="" style="display: none;">
                                                <button class="search-button">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </li>
                                        <?php
                                                if (!empty($_SESSION['user'])) {?>
                                                    <li class="d-none d-sm-block d-md-block d-lg-inline-block">
                                                        <button type="button" class="login-btn" data-toggle="modal" data-target="#Logout">
                                                            <i class="fa fa-user" aria-hidden="true"></i><?=$_SESSION['user']['tendn']?>
                                                        </button>
                                                    </li>
                                                    <!-- <li class="d-none d-sm-block d-md-block d-lg-inline-block">
                                                        <button type="button" class="login-btn">
                                                            <i class="fa fa-user" aria-hidden="true"></i>
                                                            <a href="?controller=logout" style="color: #e53935">
                                                                Đăng xuất
                                                            </a>
                                                        </button>
                                                    </li> -->
                                                <?php } else {?>
                                                    <li class="d-none d-sm-block d-md-block d-lg-inline-block">
                                                        <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                                                            <i class="fa fa-user" aria-hidden="true"></i>Đăng nhập
                                                        </button>
                                                    </li>
                                                <?php }
                                            ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Modal for sign in Start-->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="title-login-form">Đăng nhập</div>
                    </div>
                    <div class="modal-body">
                        <div class="login-form">
                            <form method="post">
                                <label>Tài khoản hoặc địa chỉ email *</label>
                                <input type="text" name="username" placeholder="Tên đăng nhập hoặc email" />
                                <label>Mật khẩu *</label>
                                <input type="password" name="password" placeholder="Mật khẩu" />
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox" type="checkbox" checked>
                                    <label for="checkbox">Nhớ tôi</label>
                                </div>
                                <button type="submit" name="login" value="Login" >Đăng nhập</button>
                                <button class="form-cancel" type="submit" value="">Hủy</button>
                                <label class="lost-password">
                                            <a href="#">Quên mật khẩu?</a>
                                </label>
                                <li class="d-none d-sm-block d-md-block d-lg-inline-block">Bạn chưa có tài khoản
                                    <a href="" data-toggle="modal" data-target="#signup" style="color: red">Đăng kí ngay</a>
                                </li>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Sign in End-->

        <!-- Modal for Register start -->
        <div class="modal fade" id="signup" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="title-login-form">Đăng Ký</div>
                    </div>
                    <div class="modal-body">
                        <div class="login-form">
                            <form method="post">
                                <label>Tài khoản hoặc địa chỉ email *</label>
                                <input type="text" name="username" placeholder="Tên đăng nhập hoặc email" />
                                <label>Mật khẩu *</label>
                                <input type="password" name="password" placeholder="Mật khẩu" />
                                <!-- <label>Nhập lại Mật khẩu *</label>
                                <input type="password" name= "password2" placeholder="Mật khẩu" /> -->
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox" type="checkbox" checked>
                                    <label for="checkbox">Nhớ tôi</label>
                                </div>
                                <button type="submit" value="Login" name="signup">Đăng ký</button>
                                <button class="form-cancel" type="submit" value="">Hủy</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Register end -->

        <div class="modal fade" id="Logout" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="title-login-form">Tài khoản</div>
                    </div>
                    <div class="modal-body">
                        <div class="login-form">
                            <label>Tài khoản: <?=$_SESSION['user']['tendn']?></label>
                            <label class="lost-password" style="text-align:center">
                                <a href="?controller=logout">Đăng xuất</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Sign in End-->
