<?php
$text = urlencode( $_POST["text"] );
$url = "https://watson-api-explorer.mybluemix.net/text-to-speech/api/v1/synthesize?accept=audio%2Fmp3&voice=fr-FR_ReneeVoice&text=" . $text;
$result = file_get_contents( $url );

//récupération du texte et urlencode
$text = urlencode( $_POST["text"] );

//nom du fichier
$fileName = md5($text) . ".mp3";

//chemin pour enregistrement du fichier
$pathFile = "audio" . DIRECTORY_SEPARATOR . $fileName;
	
if( file_exists($pathFile) ){
   //le fichier existe deja, retour de l'URL du fichier
   echo json_encode( array( "url" => $fileName ) );
}else{
   //préparation de l'URL pour l'API
   $url = "https://watson-api-explorer.mybluemix.net/text-to-speech/api/v1/synthesize?accept=audio%2Fmp3&voice=fr-FR_ReneeVoice&text=" . $text;
   
   //récupération du fichier mp3
   $result = file_get_contents($url);
	
   //stockage du fichier et retour de l'URL
   if( file_put_contents($pathFile, $result) ){
      echo json_encode( array( "url" => $fileName ) );
   }
}


?>