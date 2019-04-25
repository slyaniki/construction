<?php
 session_start();

 require 'traitement/connection.php';

if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
   
   $supprime = (int) $_GET['supprime'];
       $req = $Database->prepare('DELETE FROM user WHERE id=? ');
       $req->execute(array($supprime));
   
   } 
   if(isset($_GET['voir']) AND !empty($_GET['voir'])) {
   
    $voir = (int) $_GET['voir'];
        $req = $Database->prepare('DELETE FROM user WHERE id=? ');
        $req->execute(array($voir));
    
    } 
    if(isset($_GET['modifier']) AND !empty($_GET['modifier'])) {
   
        $voir = (int) $_GET['modifier'];
            $req = $Database->prepare('UPDATE user SET nom=?,numero=?,email=? WHERE id=?');
            $req->execute(array($modifier));
        
        } 
    
   $user = $Database->query('SELECT * FROM user ');
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
</head>
<body>
<div class="form-group col-md-4">
<a href="insert.php" class="btn btn-primary">ajouter un clients</a>
<a href="insert.php" class="btn btn-primary">ajouter un projet</a>
<table class="table">
  <thead class="thead-dark">
 
    <tr>
      <th scope="col">NOM</th>
      <th scope="col">NUMERO</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ACTION</th>

    </tr>
  </thead>
  <tbody>
  <?php while ($m = $user->fetch()){ ?>
    <tr>
      <td><?=  $m['nom'] ?> </td>
      <td><?=  $m['numero'] ?> </td>
      <td><?=  $m['email'] ?> </td>
      <td>  <a href= "view.php?voir=<?= $m['id']?>" class="btn btn-primary">voir</a><br>
      <a href= "update.php?modifier=<?= $m['id']?>"  class="btn btn-success">modifier</a>
      <a href= "index1.php?supprime=<?= $m['id']?>" class="btn btn-danger">supprime</a></td>
      
    </tr>
    <?php } ?> 
    
  </tbody>
  
    
</table>
    </div>
   
     
   
    
  



   
   
    
    </body>
</html>
   