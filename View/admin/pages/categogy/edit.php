<div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Sửa Chuyên Mục</h1>
                    <ol class="breadcrumb mb-g4">
                        <li class="breadcrumb-item active"><a href="index.html">Trang chủ</a></li>
                        <li class="breadcrumb-item active"><a href="list-category.html">Chuyên mục</a></li>
                        <li class="breadcrumb-item">Sửa</li>
                    </ol>
                    <section class="content">
                        <div class="container-fluid" id="edit">
                            <form method="POST">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="txtCategoryName">Tên chuyên mục</label>
                                        <input type="text" name="CategoryName" class="form-control" id="txtCategoryName" placeholder="Tên chuyên mục" value="<?php echo $categoryOld['CategoryName']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtCategoryType">Loại chuyên mục</label>
                                        <input type="text" name="CategoryType" class="form-control" id="txtCategoryType" placeholder="Loại chuyên mục" value="<?php echo $categoryOld['CategoryType']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtParentId">Id mục lớn</label>
                                        <input type="text" name="ParentId" class="form-control" id="txtParentId" placeholder="Id mục lớn" value="<?php echo $categoryOld['ParentId']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtCountPosts">Số bài viết</label>
                                        <input type="text" name="CountPosts" class="form-control" id="txtCountPosts" placeholder="Số bài viết" value="<?php echo $categoryOld['CountPosts']?>">
                                    </div>
                                    <button type="submit" name="editCategory" class="btn btn-primary">Cập nhật</button>
                                    <!-- <script>alert("Cập nhật thành công")</script> -->
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </main>