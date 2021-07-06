<?php

class DeletePost {
	public function __construct()
	{
		require('../../Model/admin/post.php');
		
		$postModel = new PostModel();

		if (isset($_GET['postId'])) {
			$postId = $_GET['postId'];
            $postModel->deletePost($postId);
			header('location: ?controller=listPost');
		}
        require('../../View/admin/pages/post/list.php');	
	}
}

?>