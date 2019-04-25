<?php
    session_start();

    require 'traitement/connection.php';
?>
<!DOCTYPE html>
<html lang="fr">
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

<div class="container">
  <h2>INSERT</h2>
  <form action="traitement/inserer.php" method="POST">
    <div class="form-group col-md-4">
      <label for="nom">nom</label>
      <input type="text" class="form-control" id="nom" placeholder="Enter email" name="nom">
    </div>
    <div class="form-group col-md-4">
      <label for="pwd">numero</label>
      <input type="number" class="form-control" id="numero" placeholder="Enter votre numero" name="numero">
    </div>
    <div class="form-group col-md-4">
      <label for="email">email</label>
      <input type="email" class="form-control" id="email" placeholder="entrez votre mail" name="email">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input " type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary col-md-4">Submit</button>
  </form>
</div>

</body>
</html>
