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
            $SinglePost = $userModel->tagPostCategory($id);				

		}

		require('View/client/pages/singlePost.php');

		require ('View/client/layouts/footer.php'); /*giao diện footer*/
	}
}