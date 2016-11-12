<?php

include('./layout.php');

$db = new mysqli('127.0.0.1', 'root', '', 'nawel');

if (isset($_POST['user_infos'])) {
	$pwd = '';
	if (isset($_POST['pwd'])) {
		$pwd = 'pwd = "'.MD5($_POST['pwd']).'",';
	}
	$sql = 'UPDATE user SET login = "'.$_POST['login'].'", '.$pwd.' email = "'.$_POST['email'].'", first_name = "'.$_POST['firstname'].'", last_name = "'.$_POST['lastname'].'" WHERE id='.$_SESSION['user_id'].'';
	$db->query($sql);
	header('location: account.php');
	exit;
}
else if (isset($_POST['list_infos'])) {
	foreach ($_POST as $k => $v) {
		if ((int)$k)
		{
			$sql = 'UPDATE gifts SET available = '.($v ? 0 : 1).', taken_by = '.($v ? $v : 'NULL').' WHERE id='.$k.'';
			$db->query($sql);
		}
	}

	header('Location: home.php');
	exit;
}