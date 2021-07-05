<?php

class AddParentCategory {
	public function __construct()
	{
		require('../../Model/admin/parentCategory.php');
		$parentCategoryModel = new ParentCategoryModel();

		if (isset($_POST['addParentCategory'])) {
			$ParentId = $_POST["ParentId"];
			$ParentName = $_POST["ParentName"];

			if ($ParentId) {
				$parentCategoryModel->addParentCategory($ParentId, $ParentName);
			}
		}
		require('../../View/admin/pages/parentCategory/add.php');
	}
}