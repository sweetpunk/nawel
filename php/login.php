<?php
include('layout.php');

if (!empty($_POST)) {
    $db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

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