<?php

include('./layout.php');

$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

function isnull($var) {
	if (isset($var) && $var != '') {
		return $var;
	}
	return "NULL";
}

function secure_string($string)
{
	// On regarde si le type de string est un nombre entier (int)
	if(ctype_digit($string))
	{
		$string = intval($string);
	}
	// Pour tous les autres types
	else
	{
		$link = mysqli_connect('127.0.0.1', 'root', '', 'nawel');
		$string = mysqli_real_escape_string($link, $string);
		$string = addcslashes($string, '%_');
	}
	
	return $string;
}

if (isset($_POST['user_infos'])) {
	$pwd = '';
	if (isset($_POST['pwd'])) {
		$pwd = 'pwd = "'.MD5($_POST['pwd']).'",';
	}
	$sql = 'UPDATE user SET login = "'.$_POST['login'].'", '.$pwd.' email = "'.$_POST['email'].'", first_name = "'.$_POST['firstname'].'", last_name = "'.$_POST['lastname'].'" WHERE id='.$_SESSION['user_id'].'';
	$db->query($sql);
	header('location: home.php', true);
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
		if ($value == 0 && isnull($name[$key]) != 'NULL') {
			$sql = 'INSERT INTO gifts (list_id, name, description, image, link, cost, currency) VALUES ("'.(int)$_POST['mylist'].'", "'.secure_string(isnull($name[$key])).'", "'.secure_string(isnull($desc[$key])).'", "'.secure_string(isnull($img[$key])).'", "'.secure_string(isnull($link[$key])).'", "'.secure_string(isnull($price[$key])).'", "'.secure_string(isnull($curr[$key])).'")';
			var_dump($sql);
			$db->query($sql);
		}
		else {
			$sql = 'UPDATE gifts SET name = "'.secure_string(isnull($name[$key])).'", description = "'.secure_string(isnull($desc[$key])).'", image = "'.secure_string(isnull($img[$key])).'", link = "'.secure_string(isnull($link[$key])).'", cost = '.secure_string(isnull($price[$key])).', currency = "'.$curr[$key].'" WHERE id = '.$value;
			$db->query($sql);
		}
	}

	//header('Location: mylist.php', true);
	//exit;
}