<?php
session_start();
require 'Config\config.php';

class Login
{
    public function __construct()
    {
        
        /**
        * Nếu tồn tại $_SESSION['useradmin'] chuyển hướng vào trang admin
        * Ngược lại hiển thị giao diện đăng nhập
        * @var array
        */
        if (!empty($_SESSION['useradmin'])) {
            header('Location: View/admin');
        } else {
            require_once('Model/client/UserModel.php');
            $userModel = new UserModel();
            $error = $this->loginAdmin($userModel);

            require('View/client/pages/login_admin.php');
        }
    }

    public function loginAdmin($userModel)
    {
        $username = $password = NULL;

        if (!empty($_POST['login_admin'])) {
            if (empty($_POST['username_admin'])) {
                echo "<script>alert('Cần điền tên đăng nhập!')</script>";
            } else {
                $username = $_POST['username_admin'];
            }
            if (empty($_POST['password_admin'])) {
                echo "<script>alert('Cần điền mật khẩu!')</script>";
            } else {
                $password = md5(md5($_POST['password_admin']));
            }

            if ($username && $password) {
                $result = $userModel->login($username, $password);
                $check = $result->num_rows; /*đếm số dòng trong database*/
            /**
            * Nếu số dòng trong database > 0 => lưu session + lấy dữ liệu + chuyển hướng
            * Ngược lại thông báo alert bằng script
            * @var array
            */
                if ($check > 0) {
                    $data = $result->fetch_array(); /*lấy dữ liệu tương ứng với username và password nhập*/
                /**
                * Nếu level = 1 thì chuyển hướng đến trang quản trị viên
                * Ngược lại thì thông báo đăng nhập lại
                * @var array
                */
                    if ($data['quyen'] == admin) {
                        $_SESSION['useradmin'] = $data; /*lưu session*/
                        $_SESSION['tendn'] = $data['tendn'];
                        header('Location: View/admin');
                    } else {
                        echo "<script>alert('Quyền hạn tài khoản chưa đủ!')</script>";								
                    }
                } else {
                    echo "<script>alert('Sai mật khẩu hoặc tên đăng nhập!')</script>";
                }
            }
        }
    }
}
