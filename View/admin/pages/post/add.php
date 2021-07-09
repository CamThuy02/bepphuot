<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Thêm Bài Viết</h1>
                        <ol class="breadcrumb mb-g4">
                            <li class="breadcrumb-item active"><a href="./">Trang chủ</a></li>
                            <li class="breadcrumb-item active"><a href="?controller=listPost">Bài Viết</a></li>
                            <li class="breadcrumb-item">Thêm</li>
                        </ol>
                        <section class="content">
                            <div class="container-fluid">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Tiêu đề</label>
                                            <input type="text" required="required" name="Title"  class="form-control" id="txtTitle" placeholder="Tiêu đề">
                                        </div>
                                        <div class="form-group">
                                            <label>Chuyên mục</label>
                                            <select name="categoryId" class="form-control select2">
                                                <?php
                                                    foreach ($categories as $category) {?>
                                                        <option value="<?=$category['CategoryId']?>"><?=$category['CategoryName']?></option>
                                                    <?php }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group>
                                            <label for="exampleInputFile">Chọn ảnh</label>
                                            <div class="input-group">
                                              <div class="custom-file">
                                                <input type="file" name="Img" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Tóm tắt</label>
                                            <textarea class="textarea" name="Summary" required="required" id="txtSummary"  placeholder="NHập nội dung tóm tắt"
                                              style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Nội dung</label>
                                            <textarea required="required" name="Content" class="textarea" id="txtContent" placeholder="Nhập nội dung bài viết"
                                              style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                        <button type="submit" name="addPost" class="btn btn-primary">Thêm</button>
                                        <!-- <button type="submit" name="addCategory" class="btn btn-primary">Thêm</button> -->
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </main>