<?php
include('layout.php');

if (!empty($_POST)) {
    $db = new mysqli('127.0.0.1', 'root', '', 'nawel');

    $sql = 'SELECT id, pwd FROM user WHERE login = "'.$_POST['login'].'"';
    $res = $db->query($sql)->fetch_array();

    if ($res['pwd'] === MD5($_POST['pwd'])) {
        $_SESSION['connected'] = true;
        $_SESSION['user_id'] = $res['id'];

        if ($_POST['login'] == $_POST['pwd']) {
            header('location: account.php');
            exit;
        }
        else {
            header('Location: home.php');
            exit;
        }
    }

    echo 'you fail to connect';
}

$smarty->display('../tpl/layout.tpl');
$smarty->display('../tpl/login.tpl');