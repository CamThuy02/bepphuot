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
	public function editMember($id, $tendn, $pass, $tendd, $quyen, $email, $dienthoai, $diachi, $ngaysinh, $gioitinh, $dantoc, $gioithieu)
	{
		$sql = "UPDATE users SET id = '$id',tendn = '$tendn',pass = '$pass',tendd = '$tendd',quyen = '$quyen',
		email = '$email',dienthoai = '$dienthoai',diachi = '$diachi',ngaysinh = '$diachi',gioitinh = '$gioitinh',
		dantoc = '$dantoc',gioithieu = '$gioithieu';";
		$this->db->conn->query($sql);
	}

	public function deleteMember($memberId)
	{
		$sql = "DELETE FROM users WHERE id = $memberId";
		
		return $this->db->conn->query($sql);
	}

	public function listMember()
	{
		$sql = "SELECT * FROM users where quyen = 1";
		$result = $this->db->conn->query($sql);
		$list = array();
		while($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
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