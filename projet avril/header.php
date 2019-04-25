<!--
this is header file which is visible in registration and login page.
-->
<?php
include_once('link.php');

?>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">mydream</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Acceuil</a></li>
      <li><a href="#">A propos</a></li>
      <li><a href="#">contact</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">lancer</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> inscrivez-vous</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> se connecter</a></li>
      
    </ul>
  </div>
  
</nav>