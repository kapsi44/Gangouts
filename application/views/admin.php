<?php 
   
	include('header.php');
    session_start(); 
    ?>
<title>Admin Log In </title>
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
                            <li><a href="<?php echo 'index.php?module=user&action=register'?>">Register</a></li>
                            <li><a href="<?php echo 'index.php?module=user&action=login'?>">User Login</a></li>
                        </ul>
                    </nav>
					</div>
				</div>
            </div>
<div class="container">
    <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Admin Login</h2>
        <label for="adminId" class="sr-only">Admin Id</label>
        <input type="email" id="adminId" name="adminId" class="form-control" placeholder="Admin Id"  required autofocus>
        <label for="adminPassword" class="sr-only">Password</label>
        <input type="password" id="adminPassword" name="adminPassword" class="form-control" placeholder="Password" required>
       <div class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
            </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
    </form>
    <?php include('footer.php');?>
</div>
</body>
</html>
