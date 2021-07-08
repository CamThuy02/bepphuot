<?php

class PostModel extends Database{
	protected $db;

	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}
	public function addPost($title, $image, $summary, $content, $categoryId, $userId, $DatePost)
	{
		$title = $this->db->conn->real_escape_string($title);
		$summary = $this->db->conn->real_escape_string($summary);
		$content = $this->db->conn->real_escape_string($content);
		$sql = "INSERT INTO posts (Title, Img, Summary, Content, CategoryId, UserId, DatePost)
							VALUES ('$title', '$image','$summary', '$content', '$categoryId', '$userId', '$DatePost')";
		
		return $this->db->conn->query($sql);
	}
    public function listPost()
	{
		$sql = "SELECT * FROM posts";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}

		return $list;
	}

    public function deletePost($postId)
	{
		$sql = "DELETE FROM posts WHERE PostId = $postId;";
		return $this->db->conn->query($sql);
	}

	public function getPost($postId)
	{
		$sql = "SELECT * FROM posts WHERE PostId = $postId";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_array();
		return $data;
    }

    public function editPost($postId, $title, $summary, $content, $categoryId, $image)
	{
		$title = $this->db->conn->real_escape_string($title);
		$summary = $this->db->conn->real_escape_string($summary);
		$content = $this->db->conn->real_escape_string($content);
		$sql = "UPDATE posts SET Title = '$title', Summary = '$summary', Content = '$content', CategoryId = $categoryId, Img = '$image'
			    WHERE PostId = $postId;";

		$return = $this->db->conn->query($sql);
	}
}
?>