<?php
session_start();

if(!isset($_SESSION['login']))
{
  if(isset($_POST['pseudo']) && isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['email']))
  {

  }
}
else echo "Erreur.<br>Inscription impossible : vous êtes déjà logué avec un compte."

 ?>
