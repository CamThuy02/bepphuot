<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Danh Sách Thành Viên</h1>
            <ol class="breadcrumb mb-g4">
                <li class="breadcrumb-item active"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="#">Thành viên</a></li>
                <li class="breadcrumb-item">Danh sách</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Danh sách thành viên
                    <td style="text-align: center;">
                        <span class="badge bg-danger">
                            <a href="?controller=addMember" style="color:white" href="">Thêm
                                <ion-icon name="trash-outline"></ion-icon>
                            </a>
                        </span>
                    </td>
                    <td style="text-align: center;">
                        <span class="badge bg-danger">
                            <a style="color:white" href="?controller=deleteMember">Xóa
                                <ion-icon name="trash-outline"></ion-icon>
                            </a>
                        </span>
                    </td>
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
                                    <th>Quyền</th>
                                    <th>Sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                            $stt = 0;
                                            foreach ($members as $member) {?>
                                                <tr>
                                                    <td><?=++$stt?></td>
                                                    <td><?=$member['id']?></td>
                                                    <td><?=$member['tendn']?></td>
                                                    <td><?=$member['tendd']?></td>
                                                    <td><?=$member['quyen']?></td>
                                                    <td style="text-align: center;">
                                                    <span class="badge bg-danger">
                                                        <a style="color:white" href="?controller=deleteClient&clientId=<?=$member['id']?>">Xóa
                                                            <ion-icon name="trash-outline"></ion-icon>
                                                        </a>
                                                    </span>
                                                </td>
                                                </tr>
                                            <?php }
                                        ?>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>