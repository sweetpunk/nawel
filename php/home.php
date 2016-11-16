<?php

include('./layout.php');

$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
$db->set_charset("utf8");

$sql = 'SELECT l.id, l.name, u.avatar FROM lists l INNER JOIN user u on u.id = l.user_id WHERE user_id NOT IN ('.$_SESSION['user_id'].',1) ORDER BY l.name ASC';

$res = $db->query($sql)->fetch_all();

$smarty->assign('res', $res);
$smarty->assign('isActive', "1");
$smarty->assign('chatId', "1");
$smarty->assign('userId', $_SESSION['user_id']);
$smarty->display('../tpl/layout.tpl');
$smarty->display('../tpl/header.tpl');
$smarty->display('../tpl/home.tpl');
$smarty->display('../tpl/chat.tpl');