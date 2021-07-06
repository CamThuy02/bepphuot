<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Sửa Bài Viết</h1>
                        <ol class="breadcrumb mb-g4">
                            <li class="breadcrumb-item active"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active"><a href="list-post.html">Bài Viết</a></li>
                            <li class="breadcrumb-item">Sửa</li>
                        </ol>
                        <section class="content">
                            <div class="container-fluid">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Tiêu đề</label>
                                            <input value="<?=$postOld['Title']?>" type="text" required="required" name="Title" class="form-control" placeholder="Tên chuyên mục">
                                        </div>
                                        <div class="form-group">
                                            <label>Chuyên mục</label>
                                            <select name="CategoryId" class="form-control select2">
                                            <?php  
                                                foreach ($categories as $category) {?>
                                                    <option <?php if ($category['CategoryId'] == $postOld['CategoryId']) {echo "Đã chọn!";} ?> value="<?=$category['CategoryId']?>">
                                                        <?=$category['CategoryName']?>
                                                    </option>
                                                <?php }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Ảnh cũ</label><br>
                                            <img width="200px" src="../../Public/admin/assets/img/<?=$postOld['Img']?>">
                                            <input type="hidden" value="<?=$postOld['Img']?>" name="ImgOld">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Chọn ảnh</label>
                                            <div class="input-group">
                                              <div class="custom-file">
                                                <input type="file" name="Img" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tóm tắt</label>
                                            <textarea class="textarea" name="Summary" required="required" placeholder="Place some text here"
                                            style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$postOld['Summary']?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Nội dung</label>
                                            <textarea required="required" name="Content" class="textarea" placeholder="Place some text here"
                                            style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$postOld['Content']?></textarea>
                                        </div>
                                        <button type="submit" name="editPost" class="btn btn-primary">Hoàn thành</button>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </main>