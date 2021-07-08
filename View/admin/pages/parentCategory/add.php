<div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Thêm Chuyên Mục Cha</h1>
                    <ol class="breadcrumb mb-g4">
                        <li class="breadcrumb-item active"><a href="./">Trang chủ</a></li>
                        <li class="breadcrumb-item active"><a href="?controller=listParentCategory">Chuyên mục cha</a></li>
                        <li class="breadcrumb-item">Thêm</li>
                    </ol>
                    <section class="content">
                        <div class="container-fluid" id="create-p">
                            <div class="card-body">
                                <form method="POST"  >
                                    <div class="form-group">
                                        <label for="txtParentId">Id chuyên mục cha</label>
                                        <input type="text" name="ParentId" class="form-control" id="txtParentId" placeholder="Id chuyên mục cha">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtParentName">Tên chuyên mục cha</label>
                                        <input type="text" name="ParentName" class="form-control" id="txtParentName" placeholder="Tên chuyên mục con">
                                    </div>
                                    <button type="submit" name="addParentCategory" class="btn btn-primary">Thêm</button>
                                </form> 
                            </div>
                        </div>
                    </section>

                </div>
            </main>