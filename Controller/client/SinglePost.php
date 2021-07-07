<?php

class SinglePost {
	public function __construct()
	{
		require ('Model/client/UserModel.php');
		require('Controller/client/header.php'); /*giao diện header*/
		$userModel = new UserModel();

		if (isset($_GET['PostId'])) {

			$id = $_GET['PostId'];

			$SinglePost = $userModel->SinglePost($id);
			$slideTopHome = $userModel->slideTopHome();
            $tagPostCategory = $userModel->tagPostCategory($id);					
			$leftPostCategory = $userModel->leftPostCategory($id);	
			$topPostCategory = $userModel->topPostCategory($id);
			$rightPostCategory = $userModel->rightPostCategory($id);					

		}

		require('View/client/pages/singlePost.php');

		require ('View/client/layouts/footer.php'); /*giao diện footer*/
	}
}