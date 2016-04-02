<?php
session_start();
require_once('functions.php');

if(!isset($_SESSION['login']))
{
  if(isset($_POST['pseudo']) && isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2']))
  {
    $pseudo = htmlentities($_POST['pseudo']);
    $name = htmlentities($_POST['name']);
		$firstname = htmlentities($_POST['firstname']);
		$email = htmlentities($_POST['email']);
    $password = htmlentities($_POST['password']);
    $password2 = htmlentities($_POST['password2']);

    if(isValidPseudo($pseudo) && isValidName($name) && isValidFirstname($firstname) && isValidEmail($email) && isValidPassword($password) && isValidPassword($password2) && ($password == $password2))
    {
      $_SESSION['login'] = $pseudo;
    }
  }
}
else echo "Erreur.<br>Inscription impossible : vous êtes déjà logué avec un compte.";

 ?>
