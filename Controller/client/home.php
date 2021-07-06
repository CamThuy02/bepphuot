<?php

class Home {
	public function __construct()
	{
		require ('Model/client/UserModel.php');
		//require('Controller/client/header.php'); /*giao diện header*/
		$userModel = new UserModel();

<<<<<<< HEAD
		$userModel->rightHome();

		$userModel->slideHome();		
		
=======
		$userModel->rightHome();		
		$userModel->recipeHome();
		$userModel->foodHome();
>>>>>>> 061f6af9b81b22dbe08bfcc40bb049dea0782f85
		require('View/client/pages/home.php');

		//require ('View/client/layouts/footer.php'); /*giao diện footer*/
	}
}

