<?php

class DeleteCategory {
	public function __construct()
	{
		require('../../Model/admin/category.php');
		
		$categoryModel = new CategoryModel();

		if (isset($_GET['CategoryId'])) {
			$CategoryId = $_GET['CategoryId'];

            $categoryModel->deleteCategory($CategoryId);
				
			header('location: ?controller=listCategory');
		}
		
	}
}
?>