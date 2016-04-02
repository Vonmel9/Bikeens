<?php
session_start();
require_once('functions.php');

if(!isset($_SESSION['login']))
{
  if(isset($_POST['pseudo']) && isset($_POST['password']))
  {
    $pseudo = htmlentities($_POST['pseudo']);
    $password = htmlentities($_POST['password']);
    if(isValidPseudo($pseudo) && isValidPassword($password))
    {
      $_SESSION['login'] = $pseudo;
    }
  }
}
 ?>
