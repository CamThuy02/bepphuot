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
		$result = $this->db->conn->query($sql);
		if($result == false)
		{
			return false;
		}

		$row = array();
		while ($row = $result->fetch_assoc())
		{
			$rows[] = $row;
		}
		return $rows;
	}

	public function getById($id)
	{
		$sql = "SELECT * FROM category WHERE CategoryId = $id";
		$result = $this->db->conn->query($sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	public function editCategory($CategoryId, $CategoryName, $CategoryType, $ParentId, $CountPosts)
	{	
		// $this->db->conn->real_escape_string($name);
		$sql = "UPDATE category SET  CategoryName = '$CategoryName', CategoryType = $CategoryType, ParentId = $ParentId, CountPosts = $CountPosts  
				WHERE CategoryId = $CategoryId;";
    	$this->db->conn->query($sql);
	}

}