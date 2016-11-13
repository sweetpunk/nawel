<?php

include('./layout.php');

$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

$sql = 'SELECT id, name FROM lists WHERE user_id NOT IN ('.$_SESSION['user_id'].',1)';
$res = $db->query($sql)->fetch_all();

$smarty->assign('res', $res);
$smarty->assign('isActive', "1");
$smarty->display('../tpl/layout.tpl');
$smarty->display('../tpl/header.tpl');
$smarty->display('../tpl/home.tpl');