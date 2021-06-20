<?php
	// require 'Model/Database.php';
	// $db = new Database();

	require('Controller/client/header.php'); /*giao diện header*/

	if (isset($_GET['controller'])) {
		require 'Router\web.php'; /*xử lý các request trong Route/web.php*/
	} else {
		require 'View/client/pages/home.php'; /*require giao diện trang chủ*/
	}

	require 'View/client/layouts/footer.php'; /*giao diện footer*/

	// $db->closeDatabase();