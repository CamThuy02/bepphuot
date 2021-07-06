<?php

class Home {
	public function __construct()
	{
		require ('Model/client/UserModel.php');
		$userModel = new UserModel();
		$userModel->rightHome();
		$userModel->slideHome();		
		$userModel->rightSlide();
		$userModel->rightHome();		
		$userModel->recipeHome();
		$userModel->foodHome();
		$userModel->bookHome();


		require('View/client/pages/home.php');

	}
}

