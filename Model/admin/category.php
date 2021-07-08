<?php

class CategoryModel extends Database{
	protected $db;

	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}

	public function addCategory($CategoryId, $CategoryName, $CategoryType, $ParentId, $CountPosts)
	{	
		// $this->db->conn->real_escape_string($name);
		$sql = "INSERT INTO category (CategoryId,CategoryName,CategoryType,ParentId,CountPosts)
				VALUES('$CategoryId','$CategoryName','$CategoryType','$ParentId','$CountPosts')";
		$this->db->conn->query($sql);
	}

	public function listCategory()
	{	
		// $this->db->conn->real_escape_string($name);
		$sql = "SELECT * FROM category";
		$rsql = "UPDATE category SET CountPosts = (SELECT COUNT(*) FROM posts WHERE posts.CategoryId = category.CategoryId)";
		$rresult = $this->db->conn->query($rsql);
		$result = $this->db->conn->query($sql);
		if($result == false)
		{
			return false;
		}

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}
	//phương thức lấy dữ liệu cần sửa
	public function getDataId($id)
	{
		$sql = "SELECT * FROM category WHERE CategoryId = $id";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_array();

		return $data;
	}

	public function editCategory($CategoryId, $CategoryName, $CategoryType, $ParentId, $CountPosts)
	{	
		$CategoryName =  $this->db->conn->real_escape_string($CategoryName);
		$CategoryType =  $this->db->conn->real_escape_string($CategoryType);
		$ParentId =  $this->db->conn->real_escape_string($ParentId);
		$CountPosts =  $this->db->conn->real_escape_string($CountPosts);

		$sql = "UPDATE category SET CategoryName = '$CategoryName', CategoryType = $CategoryType, ParentId = $ParentId, CountPosts = $CountPosts  
				WHERE CategoryId = $CategoryId;";
    	$result = $this->db->conn->query($sql);
	}

	public function deleteCategory($id)
	{
		$sql = "DELETE FROM category WHERE CategoryId = $id";

		return $this->db->conn->query($sql);
	}

}