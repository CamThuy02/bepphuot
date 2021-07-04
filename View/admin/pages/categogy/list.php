
<script>
function editCategoryAjax(rowId) {
    var id = rowId;
    var ckie = "CategoryId=" + id + "; expires= Mon, 27 Sep 2021 12:00:00 UTC; path=./edit-category.html";
    document.cookie = ckie;
    window.location.href = "http://localhost:81/doan/client/bepphuot/edit-category.html"
}
</script>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Danh Sách Chuyên Mục</h1>
                        <ol class="breadcrumb mb-g4">
                            <li class="breadcrumb-item active"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active"><a href="list-category.html">Chuyên mục</a></li>
                            <li class="breadcrumb-item">Danh sách</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Danh sách chuyên mục
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>CategoryId</th>
                                                <th>CategoryName</th>
                                                <th>CategoryType</th>
                                                <th>ParentId</th>
                                                <th>CountPosts</th>
                                                <th>Sửa</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $row = new CategoryModel();
                                                $sql = "SELECT * FORM category";
                                                $result = $row->listCategory();
                                                foreach ($result as $rel){
                                            ?>
                                            <tr>
                                                <td><?php echo $rel['CategoryId'] ?></td>
                                                <td><?php echo $rel['CategoryName'] ?></td>
                                                <td><?php echo $rel['CategoryType'] ?></td>
                                                <td><?php echo $rel['ParentId'] ?></td>
                                                <td><?php echo $rel['CountPosts'] ?></td>
                                                <td style="text-align: center;">
                                                    <span class="badge bg-primary">
                                                        <a style="color:white" href="?controller=editCategory">Sửa
                                                            <ion-icon name="create-outline"></ion-icon>
                                                        </a>
                                                    </span>
                                                </td>
                                                <td style="text-align: center;">
                                                    <span class="badge bg-danger">
                                                        <a style="color:white" href="">Xóa
                                                            <ion-icon name="trash-outline"></ion-icon>
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <!-- <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>101</td>
                                                <td>Công thức thức uống</td>
                                                <td style="text-align: center;">
                                                    <span class="badge bg-primary">
                                                        <a style="color:white" href="?controller=editCategory">Sửa
                                                            <ion-icon name="create-outline"></ion-icon>
                                                        </a>
                                                    </span>
                                                </td>
                                                <td style="text-align: center;">
                                                    <span class="badge bg-danger">
                                                        <a style="color:white" href="edit-category.html">Xóa
                                                            <ion-icon name="trash-outline"></ion-icon>
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody> -->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>