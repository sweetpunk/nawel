<?php

require_once('./../lib/libs/Smarty/Smarty.class.php');
$smarty = new Smarty();


$actual_link = "$_SERVER[REQUEST_URI]";
$currentPage = end(explode('/', $actual_link));
var_dump($_SESSION);exit;
if ('login.php' !== $currentPage) {
    if (true !== $_SESSION['connected']) {
        header('Location: login.php');
        exit;
    }
}


