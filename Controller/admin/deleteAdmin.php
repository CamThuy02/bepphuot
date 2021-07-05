<?php
class DeleteAdmin {
	public function __construct()
	{
        
        require('../../Model/admin/member.php');
        $memberModel = new MemberModel(); 

        if (isset($_POST['deleteAdmin'])) {
        $AdminId = $_POST["AdminId"];
        
        if ($AdminId)
        {
        $memberModel->deleteMember($AdminId);
        }
    }
    require('../../View\admin\pages\member\list.php');
    }}
        