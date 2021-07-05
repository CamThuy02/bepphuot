<?php

class ListCategory {
	public function __construct()
	{
		require('../../Model/admin/category.php');
		$categoryModel = new CategoryModel();

		if (isset($_POST['listCategory'])) {

			$categoryModel->listCategory;
		}
		require('../../View/admin/pages/categogy/list.php');
	}
}