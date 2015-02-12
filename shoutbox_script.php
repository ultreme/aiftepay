<?php

include("infos.php");

mysql_connect($hebergeur_bsd, $login_bsd, $password_bsd);

mysql_select_db('aiftepay_shoutbox');

$auteur = addslashes($_POST['auteur']);

$message = addslashes($_POST['message']);

// Requete sql et injection dans la bsd

$requete = "INSERT INTO aiftepay_shoutbox(id, auteur, message) VALUES('', '".$auteur."', '".$message."')" or die(mysql_error());

if ($message != NULL AND $auteur != NULL)
	{
	mysql_query($requete) or die(mysql_error());
	// Redirection 
	header("location: index.php");
	}
	
else
	{
	// Redirection 
	header("location: index.php");
	}