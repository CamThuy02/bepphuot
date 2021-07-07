<?php
session_start();

class Header {
	public function __construct()
	{
		require_once('Model/client/UserModel.php');
		$userModel = new UserModel();
		$this->signUp($userModel);
		$this->login($userModel);
		require('View/client/layouts/header.php');
	}

	public function signUp($userModel) {
		$username = $password = NULL;	
		if (isset($_POST['signup'])) {
			if (empty($_POST['username'])) {
				echo "<script>alert('Cần điền tên đăng nhập!')</script>";
			} else {
				$username = $_POST['username'];
			}

			if (empty($_POST['password'])) {
				echo "<script>alert('Cần điền mật khẩu!')</script>";
			} else if (empty($_POST['password2'])) {
				echo "<script>alert('Chưa nhập lại mật khẩu!')</script>";
			} else if ($_POST['password'] != $_POST['password2']) {
				echo "<script>alert('Mật khẩu không khớp!')</script>";
			} else {
				$password = md5(md5($_POST['password']));
			}

			if ($username && $password) {
				$check = $userModel->checkExists($username);

				if ($check->num_rows > 0) {
					echo "<script>alert('Tên đăng nhập đã bị trùng!')</script>";
				} else {
					$result=$userModel->signup($username, $password);
					echo "<script>alert('Đăng ký thành công!')</script>";
				
					$data=$result->fetch_array(MYSQLI_ASSOC);
					$_SESSION['user'] = $data;
					header('Location: ./');
				}
			}
		}
	}

	public function login($userModel)
	{
		$username = $password = NULL;
		if (!empty($_POST['login'])) {
			if (empty($_POST['username'])) {
				echo "<script>alert('Cần điền tên đăng nhập!')</script>";
				die;
			} else {
				$username = $_POST['username'];
			}
			if (empty($_POST['password'])) {
				echo "<script>alert('Cần điền mật khẩu!')</script>";
			} else {
				$password = md5(md5($_POST['password']));
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
					$data = $result->fetch_array(MYSQLI_ASSOC); /*lấy dữ liệu tương ứng với username và password nhập*/
					$_SESSION['user'] = $data; /*lưu session*/
					header('Location: ./');
				} else {
					echo "<script>alert('Sai mật khẩu hoặc tên đăng nhập')</script>";				
				}
			}
		}
	}
}
$header = new Header();