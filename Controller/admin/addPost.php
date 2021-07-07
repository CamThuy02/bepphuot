<?php

class AddPost
{
	public function __construct()
	{
        require_once('../../Model/admin/post.php');
        require_once('../../Model/admin/category.php');
		$categoryModel = new CategoryModel();
		$postModel = new PostModel();
		$categories = $categoryModel->listCategory(); /*lấy tất cả chuyên mục*/

		if (isset($_POST['addPost'])) {
			$title = $_POST['Title'];
			// $slug = changeTitle($title);
			$summary = $_POST['Summary'];
			$content = $_POST['Content'];
			$userId = $_SESSION['useradmin']['id'];
			$categoryId = $_POST['categoryId'];
			$DatePost = date('Y-m-d');
            // $sessionKey = 'post_' . $postId;
            // $sessionView = $_SESSION[$sessionKey];
            // if (!$sessionView) { // nếu chưa có session
            //     $_SESSION[$sessionKey] = 1; //set giá trị cho session
            //     $conn->query('UPDATE table_posts SET views = views + 1 WHERE id = ' . $postID);
            // }
			$image = pathinfo($_FILES['Img']['name'], PATHINFO_BASENAME);
            move_uploaded_file($_FILES['Img']['tmp_name'], '../../Public/admin/assets/img/' . $image);
			$postModel->addPost($title, $image, $summary, $content, $categoryId, $userId, $DatePost);
            header('location: ?controller=listPost');
		}
		require('../../View/admin/pages/post/add.php');
	}
}