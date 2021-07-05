<div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Danh Sách Chuyên Mục Cha</h1>
                    <ol class="breadcrumb mb-g4">
                        <li class="breadcrumb-item active"><a href="index.html">Trang chủ</a></li>
                        <li class="breadcrumb-item active"><a href="list-category.html">Chuyên mục cha</a></li>
                        <li class="breadcrumb-item">Danh sách</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i> Danh sách chuyên mục cha
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ParentId</th>
                                            <th>ParentName</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                                foreach ($result as $rel){
                                            ?>
                                            <tr>
                                                <td><?php echo $rel['ParentId'] ?></td>
                                                <td><?php echo $rel['ParentName'] ?></td>
                                                <td style="text-align: center;">
                                                    <span class="badge bg-primary">
                                                        <a style="color:white" href="?controller=editParentCategory&ParentId=<?php echo $rel['ParentId'] ?>">Sửa
                                                            <ion-icon name="create-outline"></ion-icon>
                                                        </a>
                                                    </span>
                                                </td>
                                                <td style="text-align: center;">
                                                    <span class="badge bg-danger">
                                                        <a style="color:white" href="?controller=deleteParentCategory&ParentId=<?php echo $rel['ParentId'] ?>">Xóa
                                                            <ion-icon name="trash-outline"></ion-icon>
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </main>