<?php

class ProfileMember {
	public function __construct()
	{
        require('../../Model/admin/member.php');
        $memberModel = new MemberModel(); 
        $arr = $_SESSION['useradmin'];
		$data = $memberModel->getData($arr['id']);
        
        
    
    require('../../View/admin/pages/member/profile.php');
    }}
    