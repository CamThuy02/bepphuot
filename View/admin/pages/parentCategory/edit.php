<div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Sửa Chuyên Mục</h1>
                    <ol class="breadcrumb mb-g4">
                        <li class="breadcrumb-item active"><a href="index.html">Trang chủ</a></li>
                        <li class="breadcrumb-item active"><a href="list-parentcategory.html">Chuyên mục cha</a></li>
                        <li class="breadcrumb-item">Sửa</li>
                    </ol>
                    <section class="content">
                        <div class="container-fluid" id="edit-p">
                            <form method="POST"  >
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="txtParentName">Tên chuyên mục cha</label>
                                        <input type="text" name="ParentName" class="form-control" id="txtParentName" placeholder="Tên chuyên mục cha" value="<?php echo $parentOld['ParentName']?>">
                                    </div>
                                    <button type="submit" name="editParentCategory" class="btn btn-primary">Hoàn thành</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </main>