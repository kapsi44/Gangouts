<?php
require_once 'helper.php';
require_once 'header.php';
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
   <!-- BOOTSTRAP STYLE SHEET -->
     <script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"3609b55ff1107067073429a5384e606f",petok:"031035f1140463f1a7640e7822ebc3968df3025a-1447011911-1800",zone:"designbootstrap.com",rocket:"a",apps:{}}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=b0bfc08c34/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<link href="public/css/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT-AWESOME STYLE SHEET FOR BEAUTIFUL ICONS -->
    <link href="public/css/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- CUSTOM STYLE CSS -->
    <style type="text/css">
               .btn-social {
            color: white;
            opacity: 0.8;
        }

            .btn-social:hover {
                color: white;
                opacity: 1;
                text-decoration: none;
            }

        .btn-facebook {
            background-color: #3b5998;
        }

        .btn-twitter {
            background-color: #00aced;
        }

        .btn-linkedin {
            background-color: #0e76a8;
        }

        .btn-google {
            background-color: #c32f10;
        }
    </style>

<script data-rocketsrc="http://www.designbootstrap.com/track/ga.js"  type="text/rocketscript"></script>

</head>
<body>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">GANGOUTS</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav ">
                    <li><a href="<?php echo 'index.php?module=user&action=userPage';?>">HOME</a></li>
                    <li><a href="<?php echo 'index.php?module=user&action=profile';?>">NOTIFICATIONS</a></li>
                    <li><a href="#">FRIENDS </a></li>
                    <li><a href="#">PROFILE</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- NAVBAR CODE END -->


    <div class="container">
        <section style="padding-bottom: 50px; padding-top: 50px;">
            <div class="row">
                <div class="col-md-4">
                    <img src="http://designbootstrap.com/livedemos/2015/01/11/user-profile/assets/img/250x250.png" class="img-rounded img-responsive" />
                    <br />
                    <br />
                    <form id="update" method="post">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="firstname" placeholder="">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lastname" placeholder="">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="">
                    <label>Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="" maxlength="10"></br>
                    <label for="interest"> Blood Group*</label>
                    <select class="selectpicker"  data-style="btn-primary" style="display: none;" name="bloodGroup" >
                    <?php
                        option("A+,A-,B+,B-,O+,O-,AB+,AB-");
                        ?>
                    </select></br></br>
                    <label for="interest"> Area of Interest</label>
                    <select class="selectpicker" id="interest" name="interest" multiple="" style="display: none;">
                    <?php
                        option("Singing,Dancing,Cooking,Painting,Surfing,Sports,Reading,Teaching,Fishing");
                        ?>                
                    </select></br></br>
                    <label for="education">Qualifications</label>
                    <select class="selectpicker" name="qualifications" id="education" data-style="btn-info" multiple="" style="display: none;">
                    <?php
                        option("10th,12th,B.E,B.Tech,MCA,Phd,Others");
                        ?>       
                    </select>
                    <br></br>
                    <input type="submit" name="update" class="btn btn-success" value="Update Details"></input>
                    </form>
                    <br /><br/>
                </div>
                <div class="col-md-8">
                    <div class="alert alert-info">
                        <h2>User Bio : <?php echo $_SESSION['user']; ?> </h2>
                        <h4>Keep Your Profile Updated With Us </h4>
                        <p>
                            
                        </p>
                    </div>
                    <div >
                        <a href="#" class="btn btn-social btn-facebook">
                            <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                        <a href="#" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google</a>
                        <a href="#" class="btn btn-social btn-twitter">
                            <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                        <a href="#" class="btn btn-social btn-linkedin">
                            <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>
                    </div>
                    <div class="form-group col-md-8">
                        <form method = "post">
                        <h3>Change Your Password</h3>
                        <br />
                        <label>Enter Old Password</label>
                        <input type="password" name="old_pass" class="form-control">
                        <label>Enter New Password</label>
                        <input type="password" name="new_pass" class="form-control">
                        <label>Confirm New Password</label>
                        <input type="password" name="new_pass1" class="form-control" />
                        <br>
                        <input type="submit" name="change_password" class="btn btn-warning" value="Change Password"></input>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ROW END -->


        </section>
        <!-- SECTION END -->
    </div>
    <!-- CONATINER END -->
</body>

</html>
