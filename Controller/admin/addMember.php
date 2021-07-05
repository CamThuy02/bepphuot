<?php
class AddMember {
	public function __construct()
	{
        
        require('../../Model/admin/member.php');
        $memberModel = new MemberModel(); 
        // echo "<script>alert('Thêm chuyên mục thành công')</script>";
        // die;
        if (isset($_POST['addMember'])) {
        $id = $_POST["id"];
        $tendn = $_POST["tendn"];
        $pass = md5(md5($_POST["pass"]));
        $tendd = $_POST["tendd"];
        $quyen = $_POST["quyen"];
        $email = $_POST["email"];
        $dienthoai = $_POST["dienthoai"];
        $diachi = $_POST["diachi"];
        $ngaysinh = $_POST["ngaysinh"];
        $gioitinh = $_POST["gioitinh"];
        $dantoc = $_POST["dantoc"];
        $gioithieu = $_POST["gioithieu"];
        if ($id)
        {
        $memberModel->createMember($id,$tendn,$pass,$tendd,$quyen,$email,$dienthoai,$diachi,$ngaysinh,$gioitinh,$dantoc,$gioithieu);
        }
    }
    require('../../View/admin/pages/member/create.php');
    }}
    