<?php

class Contact {
	public function __construct()
	{ 
        require ('Model/client/UserModel.php');
		$userModel = new UserModel();
		require('Controller/client/header.php'); /*giao diện header*/		
		$userModel->slideTopHome();

		require('View/client/pages/contact.php');

		require ('View/client/layouts/footer.php'); /*giao diện footer*/
	}
}
