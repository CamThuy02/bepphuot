<?php

class ListCategory {
	public function __construct()
	{
		require('../../Model/admin/category.php');
		$categoryModel = new CategoryModel();
		$result = $categoryModel->listCategory();
		require('../../View/admin/pages/categogy/list.php');
	}
}