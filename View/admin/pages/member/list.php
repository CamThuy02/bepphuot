
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Danh Sách Admin</h1>
            <ol class="breadcrumb mb-g4">
                <li class="breadcrumb-item active"><a href="./">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="">Thành viên</a></li>
                <li class="breadcrumb-item">DS Admin</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Danh sách người dùng
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã ID</th>
                                    <th>Tên Đăng Nhập</th>
                                    <th>Tên Đầy Đủ</th>
                                    <th>SĐT</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã ID</th>
                                    <th>Tên Đăng Nhập</th>
                                    <th>Tên Đầy Đủ</th>
                                    <th>SĐT</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>   
                            </tfoot>
                            <tbody>
                            <?php
                                $stt = 0;
                            foreach ($members as $member) {
                                    ?>
                                    <tr>
                                        <td><?=++$stt?></td>
                                        <td><?=$member['id']?></td>
                                        <td><?=$member['tendn']?></td>
                                        <td><?=$member['tendd']?></td>
                                        <td><?=$member['dienthoai']?></td>
                                        <td style="text-align: center;">
                                            <span class="badge bg-primary">
                                                <a style="color:white" href="?controller=editMember&Id=<?php echo $member['id'] ?>">Sửa
                                                    <ion-icon name="create-outline"></ion-icon>
                                                </a>
                                            </span>
                                        </td>
                                        <td style="text-align: center;">
                                            <span class="badge bg-danger">
                                                <a style="color:white" href="?controller=deleteAdmin&AdminId=<?=$member['id']?>">Xóa
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