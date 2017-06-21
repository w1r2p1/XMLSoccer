<?php require_once('header.php'); ?>

<!-- Main Page -->
<div class="container" style="margin-top:5%">

    <!-- Jumbotron -->
    <hr>
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-6" style="text-align: right">
                <p class="lead">Register now for <span class="text-success">FREE</span></p>
                <ul class="list-unstyled" style="line-height: 2">
                    <li><span class="glyphicon glyphicon-ok"></span> See all your orders</li>
                    <li><span class="glyphicon glyphicon-ok"></span> Fast re-order</li>
                    <li><span class="glyphicon glyphicon-ok"></span> Save your favorites</li>
                    <li><span class="glyphicon glyphicon-ok"></span> Fast checkout</li>
                    <li><span class="glyphicon glyphicon-ok"></span> Get a gift <small>(only new customers)</small></li>
                </ul>
            </div>
            <div class="col-xs-6">
                <p><a class="btn btn-warning" href="#" role="button">Learn more</a></p>
                <p><a class="btn btn-success btn-lg" href="?action=register" role="button">Create free account now!</a></p>
            </div>
        </div>
    </div>
    <hr>


    <!-- Menu -->
    <div class="row">
      <div class="col-xs-12">
        <ul class="nav nav-pills nav-justified">
          <li role="presentation" class="active"><a href="#"><strong>Live</strong></a></li>
          <li role="presentation"><a href="#"><strong>Results</strong></a></li>
          <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
              <strong>Leagues</strong> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="">LOGOUT</a></li>
              <li><a href="">MANAGE</a></li>
              <li><a href="">PRIVATE</a></li>
              <li role="separator" class="divider"></li>
              <li><a href=""><strong>NEW</strong></a></li>
            </ul>
          </li>
          <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
              <strong>Predictions</strong> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="">LOGOUT</a></li>
              <li><a href="">MANAGE</a></li>
              <li><a href="">PRIVATE</a></li>
              <li role="separator" class="divider"></li>
              <li><a href=""><strong>NEW</strong></a></li>
            </ul>
          </li>
          <li role="presentation"><a href="#"><strong>Odds</strong></a></li>
          <li role="presentation"><a href="#"><strong>Forums</strong></a></li>
        </ul>
      </div>
    </div>

    <!-- Content -->
    <section class="content" style="padding-top:5%; text-align: center;">
            <h4>TODAY'S GAMES</h4>
            <hr>
        <div class="row">
            <?php print_r($_SESSION['user']);?>
        </div>
    </section>

</div>

<?php require_once('footer.php'); ?>
