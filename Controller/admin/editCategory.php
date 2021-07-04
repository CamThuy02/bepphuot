<?php

class EditCategory {
	public function __construct()
	{
		require('../../Model/admin/category.php');
		$categoryModel = new CategoryModel();

		if (isset($_POST['editCategory'])) {
			if(isset($_POST['CategoryId']))
			{
				$Category = $_POST['CategoryId'];
				
				$item = $this->category->getById($CategoryId);
			}
			$categoryModel->editCategory();
			
		}
		require('../../View/admin/layouts/header.php');
		require('../../View/admin/pages/categogy/edit.php');
	}
}