<?php

class LevelupMember {
	public function __construct()
	{
		require_once('../../Model/admin/member.php');
		
		$memberModel = new MemberModel();
		
		if (isset($_GET['clientId'])) {
			$ClientId = $_GET['clientId'];
			$memberModel->levelupMember($ClientId);
			header('Location: ?controller=listClient');
		}
		require('../../View\admin\pages\member\listClient.php');
	}
}