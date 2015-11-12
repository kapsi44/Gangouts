<?php
    include_once 'header.php';
    
    ?>

    <title> Gangouts </title>
</head>
<body>
	<div class="site-wrapper">
	    <div class="site-wrapper-inner">
	        <div class="cover-container">
	            <div class="masthead clearfix">
	                <div class="inner">
	                    <div class="masthead-brand" align="left" style="margin-left:auto;"><img src ="public/images/go1.png" width="15%" height="30%"></img>
	                    <nav>
	                        <ul class="nav masthead-nav" >
	                            <li class="active"><a href="index.php">Home</a></li>
	                            <li><a href="<?php echo 'index.php?module=Admin&action=login'?>">Admin Login</a></li>
	                            <li><a href="<?php echo 'index.php?module=User&action=login'?>">User Login</a></li>
	                        </ul>
	                    </nav>
						</div>
					</div>
	            </div>
	            <div class="inner cover" align="center">
	                <h1 class="cover-heading"> GangOuts With New Friends </h1>
	                <p class="lead">Gangouts lets you video call, phone, or message the people you love. Gang Your friends and widen your circle.Register to enjoy the fun. </p>
	                <p class="lead" align ="center">
	                    <a href="<?php echo 'index.php?module=User&action=register'?>" class="btn btn-lg btn-default">Register</a>
	                </p>
	            </div>
	            <?php include('footer.php');?>
	        </div>
	    </div>
	</div>
	<!-- Bootstrap core JavaScript
	    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../Public/js/bootstrap/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../Public/js/bootstrap/ie10-viewport-bug-workaround.js"></script>
</body>
</html>