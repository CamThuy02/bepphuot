<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Đăng nhập - SB Admin</title>
        <link href="Public\admin\css\styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-mystyle">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-12 col-md-9">
                                <div class="card o-hidden border-0 shadow-lg my-5">
                                    <div class="card-body p-0">
                                        <!-- Nested Row within Card Body-->
                                        <div class="row">
                                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                            <div class="col-lg-6">
                                                <div class="p-5">
                                                    <div class="text-center text-login">
                                                        <h1 class="h2 mb-5">Đăng nhập</h1>
                                                    </div>
                                                    <form method="post" class="user">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputEmail" name="username_admin" aria-describedby="emailHelp"
                                                                placeholder="Tên đăng nhập">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="password_admin" class="form-control"
                                                                id="exampleInputPassword" placeholder="Nhập mật khẩu">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox small">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                                <label class="custom-control-label" for="customCheck">Ghi nhớ đăng nhập</label>
                                                            </div>
                                                        </div>
																												<button type="submit" name="login_admin" value="Login">Đăng nhập</button>
                                                        <a href="index.html" class="btn btn-login btn-block">
                                                            Đăng nhập
                                                        </a>
                                                    </form>
                                                    <hr>
                                                    <div class="text-center">
                                                        <a class="small" href="password.html">Quên mật khẩu?</a>
                                                    </div>
                                                    <div class="text-center">
                                                        <a class="small" href="register.html">Bạn chưa có tài khoản? Đăng ký!</a>
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
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Bếp Phượt 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="Public\admin\js\scripts.js"></script>
    </body>
</html>

