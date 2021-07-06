<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Danh Sách Bài Viết</h1>
            <ol class="breadcrumb mb-g4">
                <li class="breadcrumb-item active"><a href="index.html">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="list-post.html">Bài Viết</a></li>
                <li class="breadcrumb-item">Danh sách</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Danh sách bài viết
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Ảnh</th>
                                    <th>Tiêu đề</th>
                                    <th>Chuyên mục</th>
                                    <th>View</th>
                                    <th>Người tạo</th>
                                    <th>Ngày đăng</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $stt = 0;
                                foreach ($posts as $post) {?>
                                    <tr>
                                        <td><?=++$stt?></td>
                                        <td>
                                            <img width="100" src="../../Public/admin/assets/img/<?=$post['Img']?>">
                                        </td>
                                        <td>
                                            <?=$post['Title']?>
                                        </td>
                                        <td>
                                            <?=$post['CategoryId']?>
                                        </td>
                                        <td>
                                            <?=$post['ViewNumber']?>
                                        </td>
                                        <td>
                                            <?=$post['UserId']?>
                                        </td>
                                        <td>
                                            <?=$post['DatePost']?>
                                        </td>
                                        <td style="text-align: center;">
                                            <span class="badge bg-primary">
                                                <a style="color:white" href="?controller=editPost&postId=<?=$post['PostId']?>">Sửa
                                                    <ion-icon name="create-outline"></ion-icon>
                                                </a>
                                            </span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span class="badge bg-danger">
                                                <a style="color:white" href="?controller=deletePost&postId=<?=$post['PostId']?>">Xóa
                                                    <ion-icon name="trash-outline"></ion-icon>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                <?php }
                            ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </main>