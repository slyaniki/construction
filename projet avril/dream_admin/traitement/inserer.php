<?php
 require 'connection.php';

 if(isset($_POST['nom'])){
    $nom = $_POST["nom"];
    $numb = $_POST["numero"];
    $mail = $_POST["email"];
}
       $req = $Database->prepare('  INSERT INTO `user`( `nom`, `numero`, `email`) VALUES (?,?,?)');
       $req-> execute(array($nom,$numb,$mail));
       header('location:../index1.php');

 ?>  
 