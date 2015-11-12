<?php 
include('header.php'); 

session_start();   
  ?>

    <title> Sign In </title>
</head>
  <body>
	<div class="site-wrapper">
	<div class="site-wrapper-inner">
	<div class="masthead clearfix" align="left">
	                <div class="inner" >
	                    <div class="masthead-brand"  style="margin-left:auto;"><img src ="public/images/go1.png" width="15%" height="30%"></img>
	                    <nav>
	                        <ul class="nav masthead-nav" align="center">
	                            <li class="active"><a href="<?php echo 'index.php?module=home&action=start'?>">Home</a></li>
	                            <li><a href="<?php echo 'index.php?module=Admin&action=login'?>">Admin Login</a></li>
	                            <li><a href="<?php echo 'index.php?module=user&action=register'?>">Sign Up</a></li>
	                        </ul>
	                    </nav>
						</div>
					</div>
	            </div>
	<div class="container">
	    <form class="form-signin" id="signinForm" method="POST" >
	        <h2 class="form-signin-heading">Please Sign In</h2>
	        <input type="text" id="user_id" name="user_id"  class="form-control" placeholder="User Name" minlength="5" required autofocus>
	        <input type="password" id="password" name="password" class="form-control" placeholder="Password" minlength="4" required>
	        <div class="checkbox">
	            <input type="checkbox" value="remember-me"> Remember me
	        </div>
	        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
	    </form>
	    <?php include('footer.php');?>
	</div>
	<!-- /container -->
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="public/js/bootstrap/ie10-viewport-bug-workaround.js"></script>

</body>
</html>