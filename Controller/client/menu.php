<?php
session_start();

class Menu {
	public function __construct()
	{
		require('../../Model/client/UserModel.php');
        $userModel = new UserModel();
        if (isset($_POST['menu'])) {

			$userModel->menu;
		}

        require('../../View/client/layouts/menu.php');
	}
}
?>
