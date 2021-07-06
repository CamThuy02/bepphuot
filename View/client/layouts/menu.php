<div class="col-lg-8 d-none d-lg-block position-static min-height-none">
                                <div class="ne-main-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li class="active">
                                                <a href="/bepphuot">Trang chủ</a>
                                            </li>
                                            <?php
                                                $row = new UserModel();
                                                $result = $row->menu();
                                                $resultc = $row->neMenu();
                                                foreach ($result as $item) {
                                            ?>
                                            <li>
                                                <a href="#"><?php echo $item['ParentName']; ?></a>
                                                <ul class="ne-dropdown-menu">
                                                <?php
                                                    foreach ($resultc as $itemc)
                                                    {
                                                        if ($item['ParentId'] == $itemc['ParentId'])
                                                        {
                                                            echo "<li><a href='?controller=postCategory&CategoryId=". $itemc['CategoryId']."'>".$itemc['CategoryName']."</a></li>";
                                                           
                                                        }
                                                    }
                                                ?>
                                                </ul>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>