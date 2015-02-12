<?php
// Script FTP - Affiche le contenu du dossier


//Recuperation de l'eventuelle variable entite
if(isset($_GET['entite'])) {

	$link = str_replace("|", "/", $_GET['entite']);	

	if(is_dir($link) AND $link != "content" AND $link != "." AND $link != "..") {
	include("head.php");
	//On affiche le lien retour vers le dossier parent 
	$lien_precedent = substr($_GET['entite'], 0, strrpos($_GET['entite'], '|'));
	echo "<a href=\"index.php?entite=".$lien_precedent."\"><img src=\"images/arrow_up.gif\" /> [ . ]</a><br />";
	$folder = $link;
	}
	elseif ($link != NULL and $link != "content" AND $link != "." AND $link != "..") {
	//On affiche la page d'informations sur le fichier
	$taille = filesize($link);
	$format = ftp_format($link);
	echo "<div id=\"infos\">";
	echo "<strong>Informations sur le fichier: </strong>".$link."<br />";
	echo "<strong>Taille du fichier: </strong>".$taille." octets<br />";
	echo "<strong>Type de fichier: </strong>".$format."<br />";
	echo "<a href=\"".$link."\"><img src=\"images/download.gif\" /> Telecharger</a><br />";
	echo "</div>";
	$folder = substr($link, 0, strrpos($link, '/'));
	//On affiche le lien retour vers le dossier parent 
	$lien_precedent = substr($folder, 0, strrpos($folder, '/'));
	if($lien_precedent != NULL) {
	echo "<a href=\"index.php?entite=".$lien_precedent."\"><img src=\"images/arrow_up.gif\" /> [ . ]</a><br />";
	}
	}
	else {
	include("head.php");
	}
	
}

else {
include("head.php");
}

$repertoire = opendir($folder);

// Boucle d'affichage du contenu

while($content = readdir($repertoire)) {
	if($content != "." AND $content != "..") {
	//Icone à afficher
	$destination = $folder."/".$content;
	$icone = ftp_icone($destination);
	$folder = str_replace("/", "|", $folder);
	echo "<a href=\"index.php?entite=".$folder."|".$content."\">";
	echo "<img src=\"images/".$icone."\" /> ".$content."<br />";
	echo "</a>";
	}
}

$folder = str_replace("|", "/", $folder);
echo "<div id=\"pied\">Arborescence: ".$folder."</div>";
?>