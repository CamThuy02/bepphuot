<?php

class PostCategory {
	public function __construct()
	{
		require ('Model/client/UserModel.php');
		require('Controller/client/header.php'); /*giao diện header*/
		$userModel = new UserModel();

		if (isset($_GET['CategoryId'])) {

			$CategoryId = $_GET['CategoryId'];

			$tagPostCategory = $userModel->tagPostCategory($CategoryId);
			// $row = array();
			// while ($data = $tagPostCategory->fetch_assoc())
			// {
			// 	$row[] = $data;
			// }
			$leftPostCategory = $userModel->leftPostCategory($CategoryId);	
			$topPostCategory = $userModel->topPostCategory($CategoryId);
			$rightPostCategory = $userModel->rightPostCategory($CategoryId);		
		}

		require('View/client/pages/category/postCategory.php');

		require ('View/client/layouts/footer.php'); /*giao diện footer*/
	}
}
