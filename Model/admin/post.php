<?php

class PostModel extends Database{
	protected $db;

	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
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
		$sql = "DELETE FROM posts WHERE PostId = $postId";
		return $this->db->conn->query($sql);
	}

}
?>