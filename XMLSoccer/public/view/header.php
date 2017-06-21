<?php
session_start();
require_once('model/database.php');
require_once('model/user.php');

$user = new User();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SoccerApp</title>

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                    class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" rel="home" href="http://localhost/XMLSoccer/"><span class="glyphicon glyphicon-home"></span></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php if($user->isLoggedIn()) : ?>
            <ul class="nav navbar-nav nav nav-tabs">
                <li>
                    <div class="row">
                        <div class="col-md-12">
                            <form class="navbar-form" role="search" name="search" method="get" action="http://localhost/cookbook/frontend/templates/search.php">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="keyword" id="keyword">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-calendar"></span>Calendar</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-list-alt"></span>Preferences <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://www.jquery2dotnet.com">General</a></li>
                        <li><a href="http://www.jquery2dotnet.com">Predictions</a></li>
                        <li><a href="#">Filters</a></li>
                        <li class="divider"></li>
                        <li><a href="#">League Filter</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Odds Filter</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-envelope"></span>Inbox <span class="label label-info">32</span>
                </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="label label-warning">4:00 AM</span>Favourites Snippet</a></li>
                        <li><a href="#"><span class="label label-warning">4:30 AM</span>Email marketing</a></li>
                        <li><a href="#"><span class="label label-warning">5:00 AM</span>Subscriber focused email
                            design</a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="text-center">View All</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    My Games <span class="label label-primary">42</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="label label-warning">7:00 AM</span>Hi :)</a></li>
                        <li><a href="#"><span class="label label-warning">8:00 AM</span>How are you?</a></li>
                        <li><a href="#"><span class="label label-warning">9:00 AM</span>What are you doing?</a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="text-center">View All</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-user"></span><?php echo $_SESSION['user']['username']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="?action=account"><span class="glyphicon glyphicon-user"></span>Account</a></li>
                        <li><a href="?action=settings"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="?action=logout"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
                    </ul>
                </li>
            </ul>
            <?php else: ?>
            <ul class="nav navbar-nav navbar-right nav nav-tabs">
                <li role="presentation"><a href="?action=login">Login</a></li>
                <li role="presentation"><a href="?action=register">Register</a></li>
            </ul>
            <?php endif; ?>
        </div>
    </div>
    <!-- /.navbar-collapse -->
</nav>
