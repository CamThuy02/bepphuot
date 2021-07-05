<?php
class EditMember {
	public function __construct()
	{
        
        require('Model/admin/member.php');
        $memberModel = new MemberModel(); 

        if (isset($_POST['editMember'])) {
        $id = $_POST["id"];
        $tendn = $_POST["tendn"];
        $pass = $_POST["pass"];
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
        $memberModel->editMember($id,$tendn,$pass,$tendd,$quyen,$email,$dienthoai,$diachi,$ngaysinh,$gioitinh,$dantoc,$gioithieu);
        }
    }
    require('View/admin/layouts/header.php');
    require('View/admin/pages/member/edit.php');
    require('View/admin/layouts/footer.php');
    }}
    