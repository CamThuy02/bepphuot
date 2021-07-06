<?php

class LeftPostCate {
	public function __construct()
	{
		require('Model/client/UserModel.php');
        $userModel = new UserModel();
        if (isset($_POST['leftPostCate'])) {

			$userModel->leftPostCate;
		}

        require('View/client/pages/category/leftPostCate.php');
	}
}
?>
