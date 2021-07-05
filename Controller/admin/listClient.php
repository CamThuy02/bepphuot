<?php

class ListClient {
	public function __construct()
	{
		require('../../Model/admin/member.php');
		$memberModel = new MemberModel();
		$members=$memberModel->listClient();
		require('../../View\admin\pages\member\listClient.php');
	}
}