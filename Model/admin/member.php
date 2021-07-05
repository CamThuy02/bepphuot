<?php
class MemberModel extends Database{
	protected $db;

	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}

	public function createMember($id,$tendn,$pass,$tendd,$quyen,$email,$dienthoai,$diachi,$ngaysinh,$gioitinh,$dantoc,$gioithieu)
	{	
		// echo $quyen;
		// die();
		$sql = "INSERT INTO users(id,tendn,pass,tendd,quyen,email,dienthoai,diachi,ngaysinh,gioitinh,dantoc,gioithieu) 
    VALUES ('$id','$tendn','$pass','$tendd', '$quyen','$email','$dienthoai','$diachi','$ngaysinh','$gioitinh','$dantoc','$gioithieu')";
	// echo $sql;
	// die();
	$this->db->conn->query($sql);

	}
	public function editMember($id,$tendn,$tendd,$quyen)
	{
		$sql = "UPDATE admin SET tendn = '$tendn', tendd = '$tendd', 
  quyen = '$quyen', id ='$id' where id = $id";
	}

	public function deleteMember($memberId)
	{
		$sql = "DELETE FROM users WHERE id = $memberId";
		
		return $this->db->conn->query($sql);
	}

	public function listClient()
	{
		$sql = "SELECT * FROM users where quyen = 0";
		$result = $this->db->conn->query($sql);
		$list = array();
		while($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
	}
}