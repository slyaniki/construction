<!--
Into this file, we create a layout for login page.
-->

<?php
include_once('header.php');
include_once('link.php');

?>


   <style> body{
  background-image:   url('images/head.jpg');
}</style>
<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Se connecter</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">mot de passe oublié?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="login_code.php">
                                    <p style="color:red">email ou mot de passe incorrect</p>
                           
                                    

                                
                          


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                   


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Vous n'avez pas de compte? 
                                        <a href="login.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            reconnectez-vous
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>