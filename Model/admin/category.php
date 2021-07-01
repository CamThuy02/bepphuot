<?php

class CategoryModel extends Database{
	protected $db;

	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}

	public function addCategory($name, $slug)
	{	
		$this->db->conn->real_escape_string($name);
		$sql = "INSERT INTO categories (name, slug)
							VALUES ('$name', '$slug')";
		$this->db->conn->query($sql);
	}
}