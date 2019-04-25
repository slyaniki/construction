<!--
Into this file, we create a layout for registration page.
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
                        <div class="panel-title">S'inscrire</div>
                       
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="post" action="registration_code.php">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                          <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Prenom">                                    
                                    </div>

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="nom">                                        
                                    </div>
                            
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-apple"></i></span>
                                         <label class="radio-inline"><input type="radio" name="gender" value="Mal">Mal</label>
	  <label class="radio-inline"><input type="radio" name="gender" value="Femelle">Femelle</label>                                      
                                    </div>

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="email">                                      
                                    </div>
                                
                           

                                    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                         <input type="password" name="password" class="form-control" id="pwd" placeholder="password">
                                    </div>

                                   
                                    

                                
                          


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                     <script type="text/javascript" >
                                     
                                     window.onload = function() {
                                    document.getElementById('mylink').onclick = function() {
                                        document.getElementById('loginform').submit();
                                        return false;
                                    };
                                };
                                     </script>
                                    <div class="col-sm-12 controls">
                                       <button type="submit" name="create" class="btn btn-success">Submit</button>
                                      <a id="btn-fblogin" href="#" class="btn btn-primary">S'inscrire avec Facebook</a>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Vous avez dejà un compte? 
                                        <a href="login.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                           connectez-vous ici
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>