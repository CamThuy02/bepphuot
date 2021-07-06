<?php

class Home {
	public function __construct()
	{
		require ('Model/client/UserModel.php');
		//require('Controller/client/header.php'); /*giao diện header*/
		$userModel = new UserModel();

		$userModel->rightHome();		
		
		require('View/client/pages/home.php');

		//require ('View/client/layouts/footer.php'); /*giao diện footer*/
	}
}
