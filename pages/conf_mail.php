<?php
    // récupérer les 2 informations dans l'URL du lien qui est dans le mail que l'utilisateur recevra.
    // $id = (int) $_GET['id'];
    // $token = (String) htmlentities($_GET['token']);

    // //Ensuite nous allons vérifier ces informations pour confirmer ou non-confirmer le compte.
    // if(!isset($id)){
    //     $valid = false;
    //     $err_mess = "Le lien est erroné";
     
    // }elseif(!isset($token)){
    //     $valid = false;
    //     $err_mess = "Le lien est erroné";
    // }
     
    // if($valid){
    //     $req = $DB->query("SELECT id 
    //         FROM carusers
    //         WHERE id = ? AND token = ?", array($id, $token));
            
    //         echo "ID: $id, Token: $token<br>";
            
    //     $req = $req->fetch();
     
    //     if(!isset($req['id'])){
    //         $valid = false;
    //         $err_mess = "Le lien est erroné";
    //     }else{
    //         $DB->insert("UPDATE carusers SET token = NULL, confirmation_token = ? WHERE id = ?",
    //         array(date('Y-m-d H:i:s'), $req['id']));
    //         $info_mess = "Votre compte a bien été validé";

    //         echo "Compte validé avec succès<br>";
    //     }
    // }
?>