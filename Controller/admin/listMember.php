<?php

class ListMember {
	public function __construct()
	{
		require('Model/admin/member.php');
		$memberModel = new MemberModel();
		$members=$memberModel->listMember();
		require('View\admin\pages\member\list.php');
	}
}
?>