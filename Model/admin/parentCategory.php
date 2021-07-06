<?php

class ParentCategoryModel extends Database{
	protected $db;

	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}

	public function addParentCategory($ParentId, $ParentName)
	{	
		// $this->db->conn->real_escape_string($name);
        $sql = "INSERT INTO parentcategory(ParentId,ParentName)
        VALUES('$ParentId','$ParentName')";
		$this->db->conn->query($sql);
	}

	public function listParentCategory()
	{	
		// $this->db->conn->real_escape_string($name);
		$sql = "SELECT * FROM parentcategory";
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
		$sql = "SELECT * FROM parentcategory WHERE ParentId = $id";
		$result = $this->db->conn->query($sql);
		$data = $result->fetch_array();

		return $data;
	}

	public function editParentCategory($ParentId, $ParentName)
	{	
		$ParentName =  $this->db->conn->real_escape_string($ParentName);

		$sql = "UPDATE parentcategory SET  ParentName = '$ParentName'  WHERE ParentId = $ParentId;";
    	$result = $this->db->conn->query($sql);
	}

	public function deleteParentCategory($id)
	{
		$sql = "DELETE FROM parentcategory WHERE ParentId = $id";

		return $this->db->conn->query($sql);
	}
}