<!--
this is second header file which is visible after login.
-->

<?php
include_once('link.php');
session_start();
$email = $_SESSION['email'];
?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			  <a href="index.php"><img   class="displayed" src="images/download.png"></a>
		</div>
		<div class="dropdown navbar-right" id="right">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email;?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  	<li><a href="account.php">compte</a></li>
    <li><a href="logout.php">se deconnecter</a></li>
  </ul>
</div>
	</div>
</nav>