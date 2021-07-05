<?php

class ListParentCategory {
	public function __construct()
	{
		require('../../Model/admin/parentCategory.php');
<<<<<<< HEAD
		$categoryModel = new ParentCategoryModel();
		$parentCategoryModel->listParentCategory;
		
		require('../../View/admin/layouts/header.php');
=======
		$parentCategoryModel = new ParentCategoryModel();
		$result = $parentCategoryModel->listParentCategory();
>>>>>>> f8a8b73cc9ec7d1d3fe4971986b257242e22e988
		require('../../View/admin/pages/parentCategory/list.php');
	}
}