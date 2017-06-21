<?php require_once('header.php'); ?>

<!-- Content -->
<div class="container" style="padding-top:5%">
    <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
            </div>
            <div class="panel-body" >
                <!-- Form -->
                <form id="signupform" class="form-horizontal" role="form" action="public/controller/login.php" method="post">
                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" type="submit" class="btn btn-success"><i class="icon-hand-right"></i> &nbsp Login</button>
                            <span style="margin-left:8px;">or</span>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>Sign Up with Facebook</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Don't have an account!
                            <a href="?action=register">Sign Up Here!</a>
                            </div>
                        </div>
                    </div>
                </form>
             </div>
        </div>
     </div>
</div>

 <?php require_once('footer.php'); ?>
