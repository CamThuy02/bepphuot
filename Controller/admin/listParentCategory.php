<?php

class ListParentCategory {
	public function __construct()
	{
		require('../../Model/admin/parentCategory.php');
		$parentCategoryModel = new ParentCategoryModel();
		$result = $parentCategoryModel->listParentCategory();
		require('../../View/admin/pages/parentCategory/list.php');
	}
}