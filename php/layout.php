<?php

require_once('./../lib/libs/Smarty/Smarty.class.php');
require_once('../config.php');

$smarty = new Smarty();
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
        if(session_id() == '') {session_start();}
    } else  {
       if (session_status() == PHP_SESSION_NONE) {session_start();}
    }

if (isset($_SESSION['user_id'])) {
	echo '<script type="text/javascript">
	var sessUID = '. (int)$_SESSION['user_id'].';</script>';
}


$actual_link = "$_SERVER[REQUEST_URI]";
$explodedLink = explode('/', $actual_link);
$currentPage = end($explodedLink);

if ('login.php' !== $currentPage) {
    if (true !== $_SESSION['connected']) {
        header('Location: login.php');
        exit;
    }
}

$smarty->assign('currentPage', $currentPage);



