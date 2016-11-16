<?php
include('./layout.php');

$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
$db->set_charset("utf8");

if (isset($_POST['user_infos'])) {
	$pwd = '';
	$avatar = secure_string($_POST['current-avatar']);
	if (isset($_POST['pwd']) && $_POST['pwd'] != '') {
		var_dump($_POST['pwd']);
		echo '<br />';
		$pwd = 'pwd = "'.MD5($_POST['pwd']).'",';
	}
	if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == UPLOAD_ERR_OK) {
		var_dump($_FILES);
		$extension = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
		var_dump($extension);
		$avatar = ''.(int)$_SESSION['user_id'].'.'.$extension.'';
		var_dump($avatar);
		$filename = '../img/avatar/'.$avatar;
		var_dump($filename);
		move_uploaded_file($_FILES['avatar']['tmp_name'], $filename);
	}
	echo 'pwd : ';
	var_dump($pwd);
	echo '<br />';
	$sql = 'UPDATE user SET login = "'.$_POST['login'].'", '.$pwd.' email = '.isnull($_POST['email']).', first_name = '.isnull($_POST['firstname']).', last_name = '.isnull($_POST['lastname']).', avatar = '.isnull($avatar).' WHERE id='.(int)$_SESSION['user_id'].'';
	echo '<br />';
	var_dump($sql);
	$db->query($sql);
	header('location: home.php', true);
	exit;
}
else if (isset($_POST['list_infos'])) {
	var_dump($_POST);
			echo'<br />';
	foreach ($_POST as $k => $v) {
		if ((int)$k)
		{
			$comment = $_POST['comment_'.(int)$k];
			$cmt = ', comment = NULL';
			echo'comment = ';
			var_dump($comment);
			if (strlen($comment) > 0) {
				$cmt = ', comment = \''.$comment.'\'';
			}
			echo' ; cmt = ';
			var_dump($cmt);
			$sql = 'UPDATE gifts SET available = '.($v ? 0 : 1).', taken_by = '.($v ? $v : 'NULL').$cmt.' WHERE id='.$k.'';
			var_dump($sql);
			echo'<br />';
			$db->query($sql);
		}
		else if (substr($k, 0, 11) == 'participant') {
			$giftId = substr($k, 12);
			$sql = 'DELETE from gift_participation WHERE gift_id = '.(int)$giftId.' AND user_id = '.(int)$_SESSION['user_id'].'';
			var_dump($sql);
			echo'<br />';
			$db->query($sql);
			if ($v == 1)
			{
				$sql = 'INSERT INTO gift_participation (gift_id, user_id) VALUES ('.(int)$giftId.', '.(int)$_SESSION['user_id'].')';
				var_dump($sql);
				echo'<br />';
				$db->query($sql);
			}
		}
	}

	header('Location: home.php', true);
	exit;
}
else if (isset($_POST['mylist'])) {
	var_dump($_POST);
	$ids = $_POST['id'];
	$name = $_POST['name'];
	$img = $_POST['image'];
	$link = $_POST['link'];
	$desc = $_POST['description'];
	$price = $_POST['price'];
	$curr = $_POST['currency'];

	foreach ($ids as $key => $value) {
		echo '<br />';
		if ($value == 0 && isnull($name[$key]) != 'NULL') {
			$sql = 'INSERT INTO gifts (list_id, name, description, image, link, cost, currency) VALUES ("'.(int)$_POST['mylist'].'", '.isnull($name[$key]).', '.isnull($desc[$key]).', '.isnull($img[$key]).', '.isnull($link[$key]).', '.isnull($price[$key]).', '.isnull($curr[$key]).')';
			var_dump($sql);
			echo '<br />';
			$db->query($sql);
		}
		else {
			$sql = 'UPDATE gifts SET name = '.isnull($name[$key]).', description = '.isnull($desc[$key]).', image = '.isnull($img[$key]).', link = '.isnull($link[$key]).', cost = '.isnull($price[$key]).', currency = '.isnull($curr[$key]).' WHERE id = '.(int)$value;
			var_dump($sql);
			echo '<br />';
			$db->query($sql);
		}
	}

	header('Location: mylist.php', true);
	exit;
}

$smarty->display('../tpl/layout.tpl');
$smarty->display('../tpl/header.tpl');
$smarty->display('../tpl/save.tpl');