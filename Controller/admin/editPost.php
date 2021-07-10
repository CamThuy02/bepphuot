<?php

class EditPost {
	public function __construct()
	{
        require_once('../../Model/admin/category.php');
		require_once('../../Model/admin/post.php');

		$categoryModel = new CategoryModel();
		$postModel = new PostModel();

		if (isset($_GET['postId'])) {
			$postId = $_GET['postId'];
			$categories = $categoryModel->listCategory(); /*lấy toàn bộ chuyên mục trong bảng categories*/
			$postOld = $postModel->getPost($postId);

			if (isset($_POST['editPost'])) {
				$title = $_POST['Title'];
				$viewnumber = $_POST['ViewNumber'];
				$summary = $_POST['Summary'];
				$content = $_POST['Content'];
				$categoryId = $_POST['CategoryId'];
			/**
	        * Nếu không chọn ảnh thì lấy tên ảnh trong input có name là ImgOld
	        * Ngược lại thì lấy tên ảnh theo $title và lưu vào Public/admin/assets/img/
	        * Tiến hành sửa bài viết bằng hàm editPost bên Model
	        * @var array
	        */
				if (isset($_FILES['Img']) && $_FILES['Img']['error'] > 0) {
					$image = $_POST['ImgOld'];
				} else {
					$image = pathinfo($_FILES['Img']['name'], PATHINFO_BASENAME);
					move_uploaded_file($_FILES['Img']['tmp_name'], '../../Public/admin/assets/img/' . $image);
				}

				$postModel->editPost($postId, $title, $viewnumber, $summary, $content, $categoryId, $image);
				header('location: ?controller=listPost');
			}

			require('../../View/admin/pages/post/edit.php');
		}
	}
}

?>

