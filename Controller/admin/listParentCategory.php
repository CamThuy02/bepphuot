<?php

class ListParentCategory {
	public function __construct()
	{
		require('../../Model/admin/parentCategory.php');
		$parentcategoryModel = new ParentCategoryModel();
		$result = $parentcategoryModel->listParentCategory();
		require('../../View/admin/pages/parentCategory/list.php');
	}
}