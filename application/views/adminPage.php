<?php
  include_once 'header.php';
  include_once 'application/Config/config.php';
  
  session_start();
  $disp = new AdminModel();
	$array = $disp->displayUsers();
	$admin = new AdminController(); 
?>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="public/css/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="public/css/shCore.css">
<link rel="stylesheet" type="text/css" href="public/css/demo.css">
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" language="javascript" src="public/js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="public/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" language="javascript" src="public/js/shCore.js"></script>
<script type="text/javascript" language="javascript" src="public/js/demo.js"></script>
<style type="text/css" class="init">

</style>
<script type="text/javascript" language="javascript" class="init">
    $(document).ready(function() {
    $('#example').DataTable();
    } );

</script>

</head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Gangouts</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?php $admin->welcome($_SESSION['admin']) ?></a></li>
          </ul>
          <form class="navbar-form navbar-right" method="POST">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo 'index.php?module=user&action=logout'?>">Logout</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
			<?php 
				$user = new AdminModel();
				$user->displayUsers();
				?>
           <form method="POST">
		  <h2 class="sub-header">Registered Users</h2>
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="margin: 0 auto;">
              <thead>
                <tr>
                  <th>SNo</th>
                  <th>User Name</th>
                  <th>UserID</th>
                  <th>Email</th>
                  <th>Gender</th>
				  <th>Status</th>	
				  <th>Action</th>		
				</tr>
              </thead>
              <tbody>
                <tr>
				<?php
					if( mysqli_num_rows( $array )==0 ){
						echo '<tr><td colspan="4">No Rows Returned</td></tr>';
					} else {
                         while( $row = mysqli_fetch_assoc( $array ) ){
                            $_SESSION['email']=$row['email'];
                         	echo 
							"<tr>
								<td>{$row['id']}</td>
								<td>{$row['first_name']}</td>
								<td>{$row['user_name']}</td>
								<td>{$row['email']}</td>
								<td>{$row['gender']}</td>
								<td>{$row['status']}</td>
								<td><a href='index.php?module=admin&action=unblock&id=" . $row['user_name'] . "'>Unblock</a></td>
							</tr>\n";
                        }
					  }
					?>
              </tbody>
            </table>
          </div>
		  </form>
        </div>
      </div>
    </div>
  </body>
</html>
