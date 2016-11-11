<?php

include('./layout.php');

$db = new mysqli('127.0.0.1', 'root', '', 'nawel');

$sql = 'SELECT id, name FROM lists WHERE user_id <> '.$_SESSION['user_id'].'';
$res = $db->query($sql)->fetch_all();

$smarty->assign('res', $res);
$smarty->assign('isActive', "1");
$smarty->display('../tpl/layout.tpl');
$smarty->display('../tpl/header.tpl');
$smarty->display('../tpl/home.tpl');