<?php
error_reporting(0);
include("fonctions_ftp.php");
include("infos.php");
include("test_bsd.php");
?>
<html>
	<head>
		<title>aiftepay v1.0</title>
		<link rel="STYLESHEET" type="text/css" href="design.css">
	</head>
	<body>
	<div id="conteneur">
	<?php
		if($test_bsd > 0) {
			echo "<h4>Erreur de connection � la base de donn�es : veuillez �diter correctement le fichier infos.php 
			� l'aide d'un �diteur texte</h4>";
		}
	?>
	<div id="header"></div>
	<div id="content">
	<div id="page">
	<?php
	echo "\n";
	include("script.php");
	echo "\n";
	echo "\n";
	//Tribune libre.

	echo "</div>";
	echo "<div id=\"shoutbox\">";
	echo "\n";
	include("shoutbox.php");
	echo "\n";
	echo "\n";
	echo "</div>";
	?>
	</div>
	</div>
	</body>
</html>