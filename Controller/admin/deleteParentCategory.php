<?php

class DeleteParentCategory {
	public function __construct()
	{
		require('../../Model/admin/parentCategory.php');
		
		$parentCategoryModel = new ParentCategoryModel();

		if (isset($_GET['ParentId'])) {
			$ParentId = $_GET['ParentId'];

            $parentCategoryModel->deleteParentCategory($ParentId);
				
			header('location: ?controller=listParentCategory');
		}
		
	}
}
?>