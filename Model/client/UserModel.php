<?php

class UserModel extends Database{
	protected $db;

	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}

	public function signup($username, $password)
	{	
		$sql = "INSERT INTO users (tendn, pass)
							VALUES ('$username', '$password')";
		$this->db->conn->query($sql);

		$sql = "SELECT * FROM users WHERE (tendn = '$username' AND pass = '$password')";
		$result = $this->db->conn->query($sql);
		
		return $result;
	}

	public function checkExists($username) 
	{
		$sql = "SELECT * FROM users WHERE tendn = '$username'";
		$result = $this->db->conn->query($sql);
		
		return $result;
	}
	
	public function login($username, $password)
	{
		$sql = "SELECT * FROM users WHERE (tendn = '$username' AND pass = '$password')";
		$result = $this->db->conn->query($sql);
		
		return $result;
	}

	///hiển thị menu
	public function menu()
	{	
		// $this->db->conn->real_escape_string($name);
		$sql = "SELECT * FROM parentcategory";

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}
	public function neMenu()
	{	
		$sql = "SELECT * FROM category";

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}
	
	public function postCategory($id)
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId = $id order by DatePost DESC "; //tăng

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}
}