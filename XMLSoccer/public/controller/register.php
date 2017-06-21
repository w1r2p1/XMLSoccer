<?php
session_start();
require_once('/../../model/database.php');
require_once('/../../model/user.php');

$user = new User();

if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirmpassword'])
    && $_POST['password'] == $_POST['confirmpassword']) {

        if($user->isAllowed($_POST['email'])) {
            $user->registerUser($_POST['email'], $_POST['username'], $_POST['password'], $_POST['confirmpassword']);
            header('Location: ../../?action=account');
            exit;
        }
    }else {
        header('Location: ../../?action=register');
        exit();
    }

?>
