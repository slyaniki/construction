<!--
Into this file, we create a layout for login page.
-->

<?php

include_once('../link.php');

?>


   <style> body{
  background-image:   url('images/head.jpg');
}</style>
<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Administrateur</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#"></a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="login_code.php">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                         <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">                                    
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
                                    </div>
                                    

                                
                          


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                       <button type="submit" name="login" class="btn btn-primary">Se connecter</button>
                                     

                                    </div>
                                </div>


                                   
                            </form>     



                        </div>                     
                    </div>  
        </div>