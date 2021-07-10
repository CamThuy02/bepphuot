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
			$summary = $_POST['Summary'];
			$content = $_POST['Content'];
			$viewnumber = $_POST['ViewNumber'];
			$userId = $_SESSION['useradmin']['id'];
			$categoryId = $_POST['categoryId'];
			$DatePost = date('Y-m-d');

			$image = pathinfo($_FILES['Img']['name'], PATHINFO_BASENAME);
            move_uploaded_file($_FILES['Img']['tmp_name'], '../../Public/admin/assets/img/' . $image);
			$postModel->addPost($title, $viewnumber, $image, $summary, $content, $categoryId, $userId, $DatePost);
            header('location: ?controller=listPost');
		}
		require('../../View/admin/pages/post/add.php');
	}
}