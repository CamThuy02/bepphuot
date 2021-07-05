<?php

class EditCategory {
	public function __construct()
	{
		require('../../Model/admin/category.php');
		
		$categoryModel = new CategoryModel();

		if (isset($_GET['CategoryId'])) {
			$CategoryId = $_GET['CategoryId'];
			$categoryOld = $categoryModel->getDataId($CategoryId);

			if (isset($_POST['editCategory'])) {

				$CategoryName = $_POST["CategoryName"];
				$CategoryType = $_POST["CategoryType"];
				$ParentId = $_POST["ParentId"];
				$CountPosts = $_POST["CountPosts"];
				
				$categoryModel->editCategory($CategoryId, $CategoryName, $CategoryType, $ParentId, $CountPosts);
				
				header('location: ?controller=listCategory');
			}

			require('../../View/admin/pages/categogy/edit.php');
		}
	}
}
?>