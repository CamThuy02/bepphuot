<?php
class DeleteAdmin {
	public function __construct()
	{
        
        require('../../Model/admin/member.php');
        $memberModel = new MemberModel(); 

        if (isset($_GET['AdminId'])) {
        $AdminId = $_GET["AdminId"];
        $memberModel->deleteMember($AdminId);
        
        header('Location: ?controller=listMember');
    } 
    require('../../View\admin\pages\member\list.php');
    }}
        