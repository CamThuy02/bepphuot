<?php

class PostCategory {
	public function __construct()
	{
	
		require('Controller/client/header.php'); /*giao diện header*/

		require('View/client/pages/category/postCategory.php');

		require ('View/client/layouts/footer.php'); /*giao diện footer*/

	}
}


