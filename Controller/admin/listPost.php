<?php

class ListPost {
	public function __construct()
	{
		require_once('../../Model/admin/post.php');
		$postModel = new PostModel();
		$posts = $postModel->listPost();
        require('../../View/admin/pages/post/list.php');
	}
}

?>
