<?php
require_once('model/XMLSoccer.php');
require_once('model/database.php');
require_once('model/user.php');

$soccer=new XMLSoccer("CCEESOFVPSICNGIEXDNMBFMSQCOEBAYKGJXXXHMTKUTLGBZWKQ");
$soccer->setServiceUrl("http://www.xmlsoccer.com/FootballDataDemo.asmx");

if (!isset($_REQUEST['action'])) {
    $result=$soccer->GetFixturesByDateIntervalAndLeague(array("league"=>3,"startDateString"=>"2017-05-01 00:00","endDateString"=>"2017-09-30 00:00"));
    include_once ('public/view/homepage.php');
    }

if (!empty($_REQUEST['action'])) {
    switch ($_REQUEST['action']){
        case 'login':
            include_once('/public/view/loginform.php');
            break;
        case 'register':
            include_once('/public/view/registerform.php');
            break;
        case 'logout':
            include_once('/public/controller/logout.php');
            break;
        case 'account':
            include_once('/public/view/account.php');
            break;
        default:
            $result=$soccer->GetFixturesByDateIntervalAndLeague(array("league"=>3,"startDateString"=>"2017-05-01 00:00","endDateString"=>"2017-09-30 00:00"));
            include_once('public/view/homepage.php');
            break;
        }
    }

?>
