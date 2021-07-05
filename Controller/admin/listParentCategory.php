<?php

class ListParentCategory {
	public function __construct()
	{
		require('../../Model/admin/parentCategory.php');
		$categoryModel = new ParentCategoryModel();
		$parentCategoryModel->listParentCategory;
		
		require('../../View/admin/layouts/header.php');
		require('../../View/admin/pages/parentCategory/list.php');
	}
}