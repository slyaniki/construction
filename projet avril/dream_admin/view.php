<?php
 session_start();

 require 'traitement/connection.php';

if(isset($_GET['voir']) AND !empty($_GET['voir'])) {
   
   $voir = (int) $_GET['voir'];
       $req = $Database->prepare('SELECT * FROM user WHERE id=? ');
       $req->execute(array($voir));
       $m = $req->fetch();
   
   } 
 ?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>AJOUTER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

 <body>   

 <div class="col-xs-12 col-sm-9">
							<h4 class="blue">
								<span class="middle">  NOM:<?php echo $m['nom'] ?></span>

								<span class="label label-purple arrowed-in-right">
									<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
									<span class="glyphicon glyphicon-user"></span>
								</span>
							</h4>

							<div class="profile-user-info">
								<div class="profile-info-row">
									<div class="profile-info-name"></div>

									<div class="profile-info-value">
										<span>  NUMERO:<?php echo $m['numero'] ?></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> </div>

									<div class="profile-info-value">
										<i class="fa fa-map-marker light-orange bigger-110"></i>
										
										<span class="glyphicon glyphicon-mail"> EMAIL: <?php echo $m['email'] ?></span>
									</div>
								</div>

						


 <?php 
 
   
     
      
 ?>  
 </body>   
</html>