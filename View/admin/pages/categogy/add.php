<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Thêm Chuyên Mục</h1>
                        <ol class="breadcrumb mb-g4">
                            <li class="breadcrumb-item active"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active"><a href="list-category.html">Chuyên mục</a></li>
                            <li class="breadcrumb-item">Thêm</li>
                        </ol>
                        <section class="content">
                            <div class="container-fluid">
														<?php  
                        			if (isset($alert['success'])) {?>
                            		<div class="form-group alert alert-primary">
																		<?=$alert['success']?>
																	</div>
																	<?php }
															?>
                                <form method="post">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên chuyên mục</label>
                                            <input type="text" name="name" class="form-control" placeholder="Tên chuyên mục">
                                        </div>
                                        <button type="submit" name="addCategory" class="btn btn-primary">Thêm</button>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </main>