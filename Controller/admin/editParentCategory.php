<?php

class EditParentCategory {
	public function __construct()
	{
		require('../../Model/admin/parentCategory.php');
		
		$parentCategoryModel = new ParentCategoryModel();

		if (isset($_GET['ParentId'])) {
			$ParentId = $_GET['ParentId'];
			$parentOld = $parentCategoryModel->getDataId($ParentId);

			if (isset($_POST['editParentCategory'])) {

				$ParentName = $_POST["ParentName"];
				
				$parentCategoryModel->editParentCategory($ParentId, $ParentName);
				
				header('location: ?controller=listParentCategory');
			}

			require('../../View/admin/pages/parentCategory/edit.php');
		}
		require('../../View/admin/layouts/header.php');
	}
}
?>