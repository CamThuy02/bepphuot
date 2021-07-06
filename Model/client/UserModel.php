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

	//Tag post Category
	public function tagPostCategory($id)
	{	
		$sql = "SELECT * FROM category, parentcategory WHERE category.ParentId = parentcategory.ParentId AND category.CategoryId = $id"; //giảm

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	//Left post Category
	public function leftPostCategory($id)
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId = $id ORDER BY DatePost DESC "; //giảm

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	//Top post Category
	public function topPostCategory($id)
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId = $id ORDER BY ViewNumber DESC LIMIT 5 "; //giảm

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	//right post Category
	public function rightPostCategory($id)
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId = $id ORDER BY DatePost DESC LIMIT 8 "; //giảm

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}

	
	//right post Home
	public function rightHome()
	{	
		$sql = "SELECT * FROM posts ORDER BY DatePost DESC limit 8 "; 

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}
	
	//Slie Home
	public function slideHome()
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId='101' ORDER BY ViewNumber DESC limit 3 "; 
		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}



	public function recipeHome()
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId LIKE '1%' ORDER BY DatePost DESC limit 6";

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}
	public function foodHome()
	{	
		$sql = "SELECT * FROM posts WHERE CategoryId LIKE '2%' ORDER BY DatePost DESC limit 6"; 

		$result = $this->db->conn->query($sql);

		$row = array();
		while ($data = $result->fetch_assoc())
		{
			$row[] = $data;
		}
		return $row;
	}
}