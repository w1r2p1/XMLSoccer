<?php
session_start();
require_once('/../../model/database.php');
require_once('/../../model/user.php');

$user = new User();

if(!empty($_POST['email']) && !empty($_POST['password'])) {

        $user->loginUser($_POST['email'], $_POST['password']);
        header('Location: ../../?action=account');
        exit();
    }else {
        header('Location: ../../?action=register');
    }

?>
