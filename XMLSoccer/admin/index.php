<?php

if (!isset($_SESSION['user'])) {
  include_once ('public/view/loginform.php');
  exit();
}else {
    header('Location: ..');
}
