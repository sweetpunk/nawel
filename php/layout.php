<?php

require_once('./../lib/libs/Smarty/Smarty.class.php');
include('../config.php');
include('./mail.php');

$smarty = new Smarty();
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
        if(session_id() == '') {session_start();}
    } else  {
       if (session_status() == PHP_SESSION_NONE) {session_start();}
    }

//$smarty->assign('myavatar', 'default.png']);

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

$smarty->assign('myavatar', $_SESSION['avatar']);
$smarty->assign('currentPage', $currentPage);

function isnull($var) {
    if (isset($var) && $var != '') {
        return '\''.secure_string($var).'\'';
    }
    return 'NULL';
}

function secure_string($string)
{
    // On regarde si le type de string est un nombre entier (int)
    if(ctype_digit($string))
    {
        intval($string);
    }
    // Pour tous les autres types
    else
    {
        $pattern = array('\'', '"', '\n', '\r', '%');
        $replace = array('\\\'', '\\"', '\\\n', '\\\r', '\\%');
        $string = addslashes($string);
    }
    
    return $string;
}

