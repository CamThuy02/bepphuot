<?php
            $row = new UserModel();
            $result = $row->leftPostCate();
            $resultm = $row->neMenu();
            foreach ($result as $item) 
            {   foreach ($resultm as $itemm)
                {
                    if ($item['CategoryId'] == $itemm['CategoryId'])
                    {    echo "<div class='col-lg-12 col-md-6 col-sm-12'>
                        <div class='media media-none--md mb-30'>
                            <div class='position-relative width-40'>
                            <a href='single.html' class='img-opacity-hover'>
                                <img src='".$item['Img']."'alt='news' class='img-fluid'> </a>
                            </div>
                            <div class='media-body p-mb-none-child media-margin30'>
                                <div class='post-date-dark'>
                                    <ul>
                                        <li>
                                        <span>
                                        <i class='fa fa-calendar' aria-hidden='true'></i>
                                        </span> ".$item['DatePost']."
                                        </li>
                                    </ul>
                                </div>
                                <h3 class='title-semibold-dark size-lg mb-15'>
                                    <a href='single.html'>".$item['Title']."</a>
                                </h3>
                                <p>" .$item['Summary']. "...</p>
                            </div>
                        </div>
                    </div>";
                    }
                }
            }
            