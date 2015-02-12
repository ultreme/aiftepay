<?php
//Test de connection a la base de donnée
if(mysql_connect($hebergeur_bsd, $login_bsd, $password_bsd) AND mysql_select_db($base_bsd)) {
	$test_bsd = 0;
	//Test de connection a la table, si elle n'existe pas on la crée
	$requete_test = mysql_query("SELECT * FROM aiftepay_shoutbox WHERE id='1'");
	if($requete_test) {
	}
	else {
	$requete1 = "CREATE TABLE `aiftepay_shoutbox` (
			`id` mediumint(9) NOT NULL auto_increment,
			`message` mediumtext NOT NULL,
			`auteur` tinytext NOT NULL,
			PRIMARY KEY  (`id`)
			) TYPE=MyISAM AUTO_INCREMENT=38 ;";
	$requete2 = "INSERT INTO `aiftepay_shoutbox` VALUES ('2', 'Bienvenue sur aiftepay 1.0', 'aiftepay');";
	mysql_query($requete1) or die(mysql_error());
	mysql_query($requete2) or die(mysql_error());
	}
}
//Sinon, erreur de connection a la base de donnée
else {
$test_bsd = 1;
}
?>