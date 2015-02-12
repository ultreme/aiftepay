<?php
// Fonctions necessaires au bon fonctionnement du script FTP
//Fonction d'affichage de l'icone fichier/dossier
//La variable entite designe le fichier ou le dossier en question

function ftp_icone($destination) {

	if(is_dir($destination)) {
		//S'il sagit dun dossier, on affiche l'icone de dossier
		$icone = "folder.gif";
	}
	else {				
		//S'il sagit d'un fichier,  en fonction de l'extension, on affiche l'image correspondante
		$extension = substr($destination, strrpos($destination, "."));
		$icone = $extension;
		
		switch($icone) {
		
		// Formats d'images
		case ".gif" :
		case ".jpg" :
		case ".jpeg" :
		case ".Jpeg" :
		case ".png" :
		$icone = "picture.gif";
		break;
		
		// Formats textes
		case ".php" :
		case ".txt" :
		case ".cfg" :
		case ".log" :
		$icone = "text.gif";
		break;
		
		//Formats videos
		case ".mpeg" :
		case ".avi" :
		case ".wmv" :
		case ".mov" :
		$icone = "movie.gif";
		break;
		
		//Formats audio
		case ".mp3" :
		case ".wma" :
		case ".wav" :
		$icone = "music.gif";
		break;
		
		//Formats compressés
		case ".tar.gz" :
		case ".zip" :
		case ".rar" :
		$icone = "compressed.gif";
		break;
		
		//Default
		default :
		$icone = "default.gif";
		break;
		}
	}
	
	return($icone);
	
}

//Renvoie le type de fichier renseigné

function ftp_format($destination) {

$extension = substr($destination, strrpos($destination, "."));

switch($extension) {
		// Formats d'images
		case ".gif" :
		case ".jpg" :
		case ".jpeg" :
		case ".Jpeg" :
		case ".png" :
		$format = "image";
		break;
		
		// Formats textes
		case ".php" :
		case ".txt" :
		case ".cfg" :
		case ".log" :
		$format = "texte";
		break;
		
		//Formats videos
		case ".mpeg" :
		case ".avi" :
		case ".wmv" :
		case ".mov" :
		$format = "video";
		break;
		
		//Formats audio
		case ".mp3" :
		case ".wma" :
		case ".wav" :
		$format = "audio";
		break;
		
		//Formats compressés
		case ".tar.gz" :
		case ".zip" :
		case ".rar" :
		$format = "compressé";
		break;
		
		//Default
		default: 
		$format = "inconnue";
		break;		
}

return($format);

}

?>