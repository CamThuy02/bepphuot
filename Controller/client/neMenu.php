<?php
session_start();

class NeMenu {
	public function __construct()
	{
		require('../../Model/client/UserModel.php');
        $userModel = new UserModel();
        if (isset($_POST['neMenu'])) {

			$userModel->neMenu;
		}

        require('../../View/client/layouts/menu.php');
	}
}
?>