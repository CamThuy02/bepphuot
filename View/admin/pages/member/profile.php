<div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Thông tin tài khoản</h1>
                <ol class="breadcrumb mb-g4">
                    <li class="breadcrumb-item active"><a href="index.html">Trang chủ</a></li>
                    <li class="breadcrumb-item active"><a href="profile.php">Tài khoản</a></li>
                    <li class="breadcrumb-item">Thông tin</li>
                </ol>
                <div class="content">
                  <div class="container-fluid">
                    <div class="row gutters-sm my-5">
                      <div class="col-md-4 mb-3">
                        <div class="card card-user">
                          <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150"/>
                              <div class="mt-3">
                                <h4>Bếp Phượt</h4>
                                <p class="text-secondary mb-1"> Phát triển ứng dụng Web</p>
                                <p class="text-muted font-size-sm"> Đại học Công nghệ Thông tin - ĐHQG TPHCM </p>
                              </div>
                              <p class="description text-center"> "The key to success is <br />
                                to focus the conscious mind on things <br />
                                you desire not things you fear"</p>
                            </div>
                          </div>
                        </div>
                      </div>
                     
                      <div class="col-md-8">
                        <div class="card mb-3">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Tên đăng nhập</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                <?php echo $data["tendn"]; ?>
                              </div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Họ tên</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                                <?php echo $data["tendd"]; ?>
                              </div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                              </div>
                              <div class="col-sm-9 text-secondary"> 
                              <?php echo $data["email"]; ?>
                              </div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Số điện thoại</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $data["dienthoai"]; ?>
                              </div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Địa chỉ</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $data["diachi"]; ?>
                              </div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Ngày sinh</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $data["ngaysinh"]; ?>
                              </div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Giới tính</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $data["gioitinh"]; ?>
                              </div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Dân tộc</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $data["dantoc"]; ?>
                              </div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Giới thiệu</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              <?php echo $data["gioithieu"]; ?>
                              </div>
                            </div>
                            <hr />
                            <div class="row">
                              <div class="col-sm-12">
                                <a class="btn btn-login" target="__blank" href="?controller=editMember&Id=<?php echo $data['id'] ?>"> Sửa thông tin</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </main>