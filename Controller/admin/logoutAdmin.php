<?php
session_start();

class LogoutAdmin {
	public function __construct()
	{
		unset($_SESSION['useradmin']); // xóa session user đã tạo khi đăng nhập
		header('Location: ./'); // chuyển hướng về trang chủ		
	}
}
$logout = new LogoutAdmin();