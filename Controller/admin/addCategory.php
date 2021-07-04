<?php

class AddCategory {
	public function __construct()
	{
		require('../../Model/admin/category.php');
		$categoryModel = new CategoryModel();

		if (isset($_POST['addCategory'])) {
			$CategoryId = $_POST["CategoryId"];
			$CategoryName = $_POST["CategoryName"];
			$CategoryType = $_POST["CategoryType"];
			$ParentId = $_POST["ParentId"];
			$CountPosts = $_POST["CountPosts"];

			if ($CategoryId) {
				$categoryModel->addCategory($CategoryId, $CategoryName, $CategoryType, $ParentId, $CountPosts);
			}
		}
		require('../../View/admin/layouts/header.php');
		require('../../View/admin/pages/categogy/add.php');
	}
}