<?php
class DeleteMember {
	public function __construct()
	{
        
        require('Model/admin/member.php');
        $memberModel = new MemberModel(); 

        if (isset($_POST['deleteMember'])) {
        $id = $_POST["id"];
        
        if ($id)
        {
        $memberModel->deleteMember($id);
        }
    }
    require('View/admin/layouts/header.php');
    require('View/admin/pages/member/delete.php');
    require('View/admin/layouts/footer.php');
    }}
        