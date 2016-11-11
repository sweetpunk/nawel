<?php

require_once('./../lib/libs/Smarty/Smarty.class.php');
$smarty = new Smarty();
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
        if(session_id() == '') {session_start();}
    } else  {
       if (session_status() == PHP_SESSION_NONE) {session_start();}
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



