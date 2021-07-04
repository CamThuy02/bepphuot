<?php
	require 'Model/Database.php';
	$db = new Database();

	if (isset($_GET['controller'])) {
		require 'Router/web.php'; /*xử lý các request trong Route/web.php*/
	} else{
		require('View/client/index.php'); /*giao diện trang chủ*/
	}
	
	$db->closeDatabase();
