<div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Thêm Chuyên Mục Con</h1>
                    <ol class="breadcrumb mb-g4">
                        <li class="breadcrumb-item active"><a href="./">Trang chủ</a></li>
                        <li class="breadcrumb-item active"><a href="?controller=listCategory">Chuyên mục con</a></li>
                        <li class="breadcrumb-item">Thêm</li>
                    </ol>
                    <section class="content">
                        <div class="container-fluid" id="create">
                            <div class="card-body">
                                <form method="POST"  >
                                    <div class="form-group">
                                        <label for="txtCategoryId">Id chuyên mục</label>
                                        <input type="text" name="CategoryId" class="form-control" id="txtCategoryId" placeholder="Id chuyên mục">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtCategoryName">Tên chuyên mục</label>
                                        <input type="text" name="CategoryName" class="form-control" id="txtCategoryName" placeholder="Tên chuyên mục">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtCategoryType">Loại chuyên mục</label>
                                        <input type="text" name="CategoryType" class="form-control" id="txtCategoryType" placeholder="Loại chuyên mục">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtParentId">Id mục lớn</label>
                                        <input type="text" name="ParentId" class="form-control" id="txtParentId" placeholder="Id mục lớn">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtCountPosts">Số bài viết</label>
                                        <input readonly type="text" required="required" name="CountPosts" class="form-control" id="txtCountPosts" value="0">
                                    </div>
                                    <button type="submit" name="addCategory" class="btn btn-primary">Thêm</button>
                                </form>
                            </div>
                            
                        </div>
                    </section>

                </div>
            </main>