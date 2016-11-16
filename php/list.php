<?php

include('./layout.php');

$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
$db->set_charset("utf8");

$sql = 'SELECT user_id FROM lists WHERE id = '.(int)$_GET['id'].'';

$res = $db->query($sql)->fetch_all();

if ($_SESSION['user_id'] == 6 || $res[0][0] == $_SESSION['user_id']) {
	header('Location: home.php');
    exit;
}
else {
	$smarty->assign('list_uid', $res[0][0]);
}

$sql = 'SELECT g.id, g.list_id, g.name, g.description, g.image, g.link, g.cost, g.currency, g.available, u.first_name, g.taken_by, l.filename, GROUP_CONCAT(u2.first_name SEPARATOR \', \') as participants, MAX(CASE WHEN u2.id = '.(int)$_SESSION['user_id'].' THEN 1 ELSE 0 END) AS myparticipation, g.comment FROM gifts g LEFT OUTER JOIN user u ON u.id = g.taken_by INNER JOIN lists l on l.id = g.list_id LEFT OUTER JOIN gift_participation gp on gp.gift_id = g.id LEFT OUTER JOIN user u2 on u2.id = gp.user_id WHERE list_id = '.(int)$_GET['id'].' GROUP BY g.id ORDER BY g.id ASC';

$res = $db->query($sql)->fetch_all();

$smarty->assign('res', $res);
$smarty->assign('uid', $_SESSION['user_id']);
$smarty->assign('listId', (int)$_GET['id']);
$smarty->assign('isActive', "1");
$smarty->display('../tpl/layout.tpl');
$smarty->display('../tpl/header.tpl');
$smarty->display('../tpl/list.tpl');