    <!-- // $row = new UserModel();
    // $result = $row->leftPostCate();
    // $resultm = $row->neMenu();
    // foreach ($result as $item)
    // { foreach ($resultm as $itemm)
    // {
    // if ($item['CategoryId'] == $itemm['CategoryId'])
    // { echo "<div class='col-lg-12 col-md-6 col-sm-12'>
        // <div class='media media-none--md mb-30'>
            // <div class='position-relative width-40'>
                // <a href='single.html' class='img-opacity-hover'>
                    // <img src='".$item[' Img']."'alt='news' class='img-fluid'> </a>
                // </div>
            // <div class='media-body p-mb-none-child media-margin30'>
                // <div class='post-date-dark'>
                    // <ul>
                        // <li>
                            // <span>
                                // <i class='fa fa-calendar' aria-hidden='true'></i>
                                // </span> ".$item['DatePost']."
                            // </li>
                        // </ul>
                    // </div>
                // <h3 class='title-semibold-dark size-lg mb-15'>
                    // <a href='single.html'>".$item['Title']."</a>
                    // </h3>
                // <p>" .$item['Summary']. "...</p>
                // </div>
            // </div>
        // </div>";
    // }
    // }
    // } -->

    <div class="col-xl-8 col-lg-12 mb-30">
        <div class="item-box-light-md-less30 ie-full-width scrollbar" id="scroll-style">
            <div class="row">
                <?php 
                foreach ($postCategory as $rel){
            ?>
                <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="media media-none--md mb-30">
                        <div class="position-relative width-40">
                            <a href="single.html" class="img-opacity-hover">
                                <img src="<?php echo $rel['Img'] ?>" alt="news" class="img-fluid">
                            </a>
                        </div>
                        <div class="media-body p-mb-none-child media-margin30">
                            <div class="post-date-dark">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>04 tháng 5, 2021
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title-semibold-dark size-lg mb-15">
                                <a href="single.html">Cách Làm Macchiato Thơm Ngon Béo Ngậy.</a>
                            </h3>
                            <p>Dù đã xuất hiện khá lâu nhưng chúng ta có thể dễ dàng nhận thấy là các thức uống
                                Macchiato vẫn chưa có dấu hiệu “hạ nhiệt” trên thị trường thức uống hiện nay..
                            </p>
                        </div>
                    </div>

                </div>
                <?php } ?>
                <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="media media-none--md mb-30">
                        <div class="position-relative width-40">
                            <a href="single.html" class="img-opacity-hover">
                                <img src="https://cdn.dayphache.edu.vn/wp-content/uploads/2020/07/cac-mon-do-uong-cho-be.jpg"
                                    alt="news" class="img-fluid">
                            </a>
                        </div>
                        <div class="media-body p-mb-none-child media-margin30">
                            <div class="post-date-dark">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>04 tháng 5, 2021
                                    </li>
                                </ul>
                            </div>
                            <h3 class="title-semibold-dark size-lg mb-15">
                                <a href="single.html">Cách Làm Mocktail Nổi Tiếng Dành Cho Trẻ Em.</a>
                            </h3>
                            <p>Lựa chọn đồ uống cho trẻ em thì không phải là một điều dễ dàng. Giờ bạn không
                                phải lo lắng, vì hôm nay chúng tôi sẽ giới thiệu một số mocktail cho trẻ em.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--seemore -->
            <center>
                <button id="btnSeeMore" class="btn btn-lg btn-danger">Xem thêm</button>
            </center>
        </div>
    </div>