<?php

include('./layout.php');

$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$sql = 'SELECT user_id FROM lists WHERE id = '.(int)$_GET['id'].'';

$res = $db->query($sql)->fetch_all();

if ($res[0][0] == $_SESSION['user_id']) {
	header('Location: home.php');
    exit;
}
else {
	$smarty->assign('list_uid', $res[0][0]);
}

$sql = 'SELECT g.id, g.list_id, g.name, g.description, g.image, g.link, g.cost, g.currency, g.available, u.first_name, g.taken_by, l.filename FROM gifts g LEFT OUTER JOIN user u ON u.id = g.taken_by INNER JOIN lists l on l.id = g.list_id WHERE list_id = '.(int)$_GET['id'].'';

$res = $db->query($sql)->fetch_all();

$smarty->assign('res', $res);
$smarty->assign('uid', $_SESSION['user_id']);
$smarty->assign('isActive', "1");
$smarty->display('../tpl/layout.tpl');
$smarty->display('../tpl/header.tpl');
$smarty->display('../tpl/list.tpl');