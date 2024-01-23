<?php

    session_start();
    include('config.php'); // Fichier PHP contenant la connexion à votre BDD
    $message = '';

    if (isset($_SESSION['id'])){
        header('Location: accueil.php');
        exit;
    }
    
    // Si la variable "$_Post" contient des informations alors on les traitres
        if(!empty($_POST)){
            extract($_POST);
            $valid = true;
            
            // On se place sur le bon formulaire grâce au "name" de la balise "input"
            if (isset($_POST['inscription'])){
            
            $username = htmlentities(trim($username)); // on récupère le username
            $prenom = htmlentities(trim($prenom)); // on récupère le prénom
            $nom  = htmlentities(trim($nom)); // On récupère le nom
            $telephone  = htmlentities(trim($telephone)); // On récupère le phone
            $adresse  = htmlentities(trim($adresse)); // On récupère le adres
            $mail = htmlentities(strtolower(trim($mail))); // On récupère le mail
            $mdp = trim($mdp); // On récupère le mot de passe 
            $confmdp = trim($confmdp); //  On récupère la confirmation du mot de passe
            $type = htmlentities(strtolower(trim($mail))); // On récupère le type
            // bin2hex(random_bytes($length))
            $token = bin2hex(random_bytes(12));

            //  Vérification du username
            if(empty($username)){
                $valid = false;
                $er_username = ("Le nom d' utilisateur ne peut pas être vide");
            }
            //  Vérification du nom
            if(empty($nom)){
                $valid = false;
                $er_nom = ("Le nom de  l' utilisateur ne peut pas être vide");
            }
            
            //  Vérification du prénom
            
            if(empty($prenom)){
                $valid = false;
                $er_prenom = ("Le prenom d' utilisateur ne peut pas être vide");
            }

            //  Vérification du telephone
            if(empty($telephone)){
                $valid = false;
                $er_phone = ("Le numéro de l' utilisateur ne peut pas être vide");
            }

            if(empty($adresse)){
                $valid = false;
                $er_adresse = ("L'adresse de l' utilisateur ne peut pas être vide");
            }
            
            // Vérification du mail
            if(empty($mail)){
                $valid = false;
                $er_mail = "Le mail ne peut pas être vide";

                // On vérifit que le mail est dans le bon format
            
            }elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)){
                $valid = false;
                $er_mail = "Le mail n'est pas valide";
            }else{
                
                // On vérifit que le mail est disponible
                $req_mail = $DB->query("SELECT mail FROM carusers WHERE mail = ?",
                    array($mail));

                $req_mail = $req_mail->fetch();
                
                // if(is_array($req_mail) && isset($req_mail["mail"])){
                //     if ($req_mail['mail'] !== ""){
                //         $valid = false;
                //         $er_mail = "Ce mail existe déjà";
                //     }
                // }


                if (! empty($req_mail['mail'])){
                    $valid = false;
                    $er_mail = "Ce mail existe déjà";
                }
            }
            // Vérification du mot de passe
            if(empty($mdp)) {
                $valid = false;
                $er_mdp = "Le mot de passe ne peut pas être vide";
    
            }elseif($mdp != $confmdp){
                $valid = false;
                $er_mdp = "La confirmation du mot de passe ne correspond pas";
            }
    
            // Si toutes les conditions sont remplies alors on fait le traitement
            if($valid){

                $mdp = crypt($mdp, 
                '$6$rounds=5000$kjhg0fqs12dfgh54jkljABCDEFGHIJKLMh68g012fdssdiqsNOPQRSTUVWXYZdfgh354jklmùnbvcxwm6789lkjhgfds$');
                $date_creation = date('Y-m-d H:i:s');
                $date_connexion = date('Y-m-d H:i:s');
                
                // On insert nos données dans la table utilisateur
                $DB->insert("INSERT INTO  carusers (username, prenom, nom, telephone, adresse, mail, mdp, date_creation, date_connexion, type, token)
                     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
                    array($username, $prenom, $nom, $telephone, $adresse, $mail, $mdp, $date_creation, $date_creation, 'user', $token));
    
                header('Location: paiement.php');
                exit;
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
    <link rel="stylesheet" href="../assets/theme.css">
</head>
<body class="codebody">

    <div class="container-fluid mt-3 my-container">
        <div class="row justify-content-md-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header apropos text-center">
                    <div class="col-md-12">
                        <img src="../images/client.png" width="100px;" height="100px;">
                    </div>
                </div>
                <div class="card-body">
                    <?php if (!empty($message)): ?>
                        <p style="color:red"><?= $message ?></p>
                    <?php endif; ?>
                    <form method="post">

                    <?php
                        // S'il y a une erreur sur le nom alors on affiche
                        if (isset($er_username)){
                        ?>
                        <div><?= $er_username ?></div>
                    <?php
                    }
                    ?>
                        <div class="mb-3">
                        <input type="text" class="form-control" name="username" <?php if(isset($username)){ echo $username; }?> 
                            placeholder="Votre nom d'utilisateur" required>
                        </div>

                    <?php
                        // S'il y a une erreur sur le nom alors on affiche
                        if (isset($er_prenom)){
                        ?>
                        <div><?= $er_prenom ?></div>
                    <?php
                    }
                    ?>
                        <div class="mb-3">
                        <input type="text" class="form-control" name="prenom" <?php if(isset($prenom)){ echo $prenom; }?>
                            placeholder=" Votre prénom" required>
                        </div>
                    
                    <?php
                        // S'il y a une erreur sur le nom alors on affiche
                        if (isset($er_nom)){
                        ?>
                        <div><?= $er_nom ?></div>
                    <?php
                    }
                    ?>
                        <div class="mb-3">
                        <input type="text" class="form-control" name="nom"  <?php if(isset($nom)){ echo $nom; }?> 
                            placeholder="Votre nom" required>
                        </div>

                    <?php
                        // S'il y a une erreur sur le nom alors on affiche
                        if (isset($er_phone)){
                        ?>
                        <div><?= $er_phone ?></div>
                    <?php
                    }
                    ?>
                        <div class="mb-3">
                        <input type="text" class="form-control" name="telephone" <?php if(isset($telephone)){ echo $telephone; }?> 
                            placeholder="Votre téléphone" required>
                        </div>

                    <?php
                        // S'il y a une erreur sur le nom alors on affiche
                        if (isset($er_adresse)){
                        ?>
                        <div><?= $er_adresse ?></div>
                    <?php
                    }
                    ?>
                        <div class="mb-3">
                        <input type="text" class="form-control" name="adresse" <?php if(isset($adresse)){ echo $adresse; }?> 
                            placeholder="Votre adresse" required>
                        </div>

                    <?php
                        // S'il y a une erreur sur le nom alors on affiche
                        if (isset($er_mail)){
                        ?>
                        <div><?= $er_mail ?></div>
                    <?php
                    }
                    ?>
                        <div class="mb-3">
                        <input type="text" class="form-control" name="mail" <?php if(isset($mail)){ echo $mail; }?> 
                            placeholder="Votre e-mail" required>
                        </div>

                    <?php
                        // S'il y a une erreur sur le nom alors on affiche
                        if (isset($er_mdp)){
                        ?>
                        <div><?= $er_mdp ?></div>
                    <?php
                    }
                    ?>
                        <div class="mb-3">
                        <!-- <input type="password" placeholder="Mot de passe" name="mdp" value="" required> -->
                        <input type="password" class="form-control" name="mdp" <?php if(isset($mdp)){ echo $mdp; }?> 
                            placeholder="Votre mot de passe" required>
                        </div>

                        <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Confirmer le mot de passe" name="confmdp" required>
                        </div>

                        <button type="submit" name="inscription" value="S'inscrire" class="btn btn-primary">s'inscrire</button>
                    
                    </form>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">
                        <a class="connect" href="login.php">Connectez-vous ici</a>
                        </div>
                        <!-- <div class="col-md-6">
                        <a class="btn btn-primary  connect" href="mot-de-passe-oublier.php">Mot de pass oublié</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>  
        </div>
        
    </div>
    <br>
</body>
</html>