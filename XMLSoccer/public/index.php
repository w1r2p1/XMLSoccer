<?php

if (!empty($_POST['action'])) {

    switch ($_POST['action']){
        case 'login':
            $myUser->loadPage($_POST['action']);
            break;
        case 'register':
            $myUser->loadPage($_POST['action']);
            break;
        default:
            header('Location: ..');
            break;
        }
    }else {
        header('Location: ..');
    }
    
header('Location: ..');
