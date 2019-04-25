<?php
 require 'connection.php';

 if(isset($_POST['nom'])){
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $numb = $_POST["numero"];
    $mail = $_POST["email"];
}
       $req = $Database->prepare('UPDATE `user` SET `nom`=?,`numero`=?,`email`=?');
       $req-> execute(array($nom,$numb,$mail));
       header('location:../index.php');

 ?>  
 