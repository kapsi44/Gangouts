<?php 
require_once "header.php";
?>
<link href="http://vitalets.github.io/bootstrap-editable/assets/prettify/prettify-bootstrap.css" rel="stylesheet">
        <link href="http://vitalets.github.io/bootstrap-editable/assets/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="http://vitalets.github.io/bootstrap-editable/subnav.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>  
        
        <script src="http://vitalets.github.io/bootstrap-editable/assets/bootstrap/js/bootstrap.js"></script>    
        <script src="http://vitalets.github.io/bootstrap-editable/assets/prettify/prettify.js"></script>
        <script src="http://vitalets.github.io/bootstrap-editable/assets/mockjax/jquery.mockjax.js"></script>
        
        <link href="http://vitalets.github.io/bootstrap-editable/assets/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet">
        <script src="http://vitalets.github.io/bootstrap-editable/assets/bootstrap-editable/js/bootstrap-editable.js"></script>
                                   
        <script src="http://vitalets.github.io/bootstrap-editable/main.js"></script>
        
        <style type="text/css">
            body {
/*                padding-top: 80px;*/
                padding-bottom: 40px;
            }
             
            section#example {
                padding-top: 80px;
                padding-bottom: 0;
            } 
            
            section {
                padding-top: 23px;
                padding-bottom: 23px;  
                vertical-align: middle;  
            }  
            
            input:-moz-placeholder {
               color: #999999;
            }         
            
        </style>        
</head>
<body>
<table id="user" class="table table-bordered table-striped">
                                <tbody> 
                                    <tr>         
                                        <td width="30%">Username</td>
                                        <td><a href="#" id="username" data-type="text" data-pk="1" data-name="username" data-original-title="Enter username">superuser</a></td>
                                        <td width="45%"><span class="muted">Simple text field</span></td>
                                    </tr>
                                    <tr>         
                                        <td>First name</td>
                                        <td><a href="#" id="firstname" data-type="text" data-pk="1" data-name="firstname" data-placement="right" data-placeholder="Required" data-original-title="Enter your firstname">John</a></td>
                                        <td><span class="muted">Required text field, placement: right</span></td>
                                    </tr>  
                                    <tr>         
                                        <td>Last name</td>
                                        <td><a href="#" id="lastname" data-type="text" data-pk="1" data-name="lastname" data-original-title="Enter your lastname"></a></td>
                                        <td><span class="muted">Originally empty text field</span></td>
                                    </tr>  
                                   <tr>         
                                        <td>Sex</td>
                                        <td><a href="#" id="sex" data-type="select" data-name="sex" data-pk="1" data-prepend="Not set" data-original-title="Select sex"></a></td>
                                        <td><span class="muted">Select, loaded from json</span></td>
                                    </tr>
                                                                 
                                    <tr>         
                                        <td>Group</td>
                                        <td><a href="#" id="group" data-type="select" data-name="group" data-pk="1" data-value="5" data-source="groups.php" data-original-title="Select group">Admin</a></td>
                                        <td><span class="muted">Select, loaded from server</span></td>
                                    </tr> 
                                    <tr>         
                                        <td>Status</td>
                                        <td><a href="#" id="status" data-type="select" data-name="status" data-pk="1" data-value="0" data-source="status.php" data-original-title="Select status">Active</a></td>
                                        <td><span class="muted">Select, loaded from server (error)</span></td>
                                    </tr>       
                                    <tr>         
                                        <td>Date of birth</td>
                                        <td><a href="#" id="dob" data-type="date" data-viewformat="dd.mm.yyyy" data-pk="1" data-name="dob" data-original-title="Select Date of birth">15.05.1984</a></td>
                                        <td><span class="muted">Date field, format dd.mm.yyyy</span></td>
                                    </tr> 
                                    <tr>         
                                        <td>Comments</td>
                                        <td><a href="#" id="comments" data-type="textarea" data-pk="1" data-name="comments" data-placeholder="Your comments here..." data-original-title="Enter comments">awesome<br>user!</a></td>
                                        <td><span class="muted">Textarea</span></td>
                                    </tr>                                     
                                    <tr>         
                                        <td>Weight, kg</td>
                                        <td><a href="#" id="weight" data-type="text" data-pk="1" data-name="weight" data-inputclass="span1" data-original-title="Weight">65</a></td>
                                        <td><span class="muted">Server-side validation error, width = span1</span></td>
                                    </tr>                                     
                                    <tr>         
                                        <td>Note</td>
                                        <td><span id="note" data-pk="1" data-toggle="#pencil" data-original-title="Enter note">pretty note..</span><a href="#" id="pencil" style="float: right"><i class="icon-pencil"></i></a></td>
                                        <td><span class="muted">Toggle by another element</span></td>
                                    </tr>                                                                                            
                                                                                                        
                                </tbody>
                            </table>
