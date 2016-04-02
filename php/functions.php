<?php

// Return if a name is valid
function isValidPseudo($pseudo)
{
	if( preg_match("#^[a-zA-Z- ]{2,16}$#i", $pseudo) && (strlen($pseudo) >= 2) && (strlen($pseudo) <= 16) )
	{
		return true;
	}

	return false;
}

// Return if a name is valid
function isValidName($name)
{
	if( preg_match("#^[a-zA-Z- ]{2,40}$#i", $name) && (strlen($name) >= 2) && (strlen($name) <= 40) )
	{
		return true;
	}

	return false;
}

// Return if a firstname is valid
function isValidFirstname($name)
{
	if( preg_match("#^[a-zA-Z- ]{2,40}$#i", $name) && (strlen($name) >= 2) && (strlen($name) <= 40) )
	{
		return true;
	}

	return false;
}

// Return if a mail adress is valid
function isValidEmail($email)
{
	if( preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$#i", $email) && (strlen($email) >= 6) && (strlen($email) <= 60) )
	{
		return true;
	}

	return false;
}

// Return if a password is valid
function isValidPassword($password)
{
	if( preg_match("#^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$#i", $password) && (strlen($password) >= 8) && (strlen($password) <= 30) )
	{
		return true;
	}

	return false;
}
 ?>
