<?php
    session_start();
    include('config.php');

    if (isset($_SESSION['id'])) {
        header('Location: accueil.php');
        exit;
    }

    // var_dump($_POST);

    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
        if (isset($_POST['connexion'])){
            $mail = htmlentities(strtolower(trim($mail)));
            $mdp = trim($mdp);


            if(empty($mail)){ // Vérification qu'il y est bien un mail de renseigné
                $valid = false;
                $er_mail = "Il faut mettre un mail";
            }  

            if(empty($mdp)){ // Vérification qu'il y est bien un mot de passe de renseigné
                $valid = false;
                $er_mdp = "Il faut mettre un mot de passe";
            }

            // On fait une requête pour savoir si le couple mail / mot de passe existe bien car le mail est unique !
            $req = $DB->query("SELECT * FROM carusers WHERE mail = ? AND mdp = ?",
                 array($mail, crypt($mdp, 
                 '$6$rounds=5000$kjhg0fqs12dfgh54jkljABCDEFGHIJKLMh68g012fdssdiqsNOPQRSTUVWXYZdfgh354jklmùnbvcxwm6789lkjhgfds$')));
            
                $req = $req->fetch();

            // Si on a pas de résultat alors c'est qu'il n'y a pas d'utilisateur correspondant au couple mail / mot de passe
            // if (is_array($req) && isset($req['id']) == ""){
            //     $valid = false;
            //     $er_mail = "Le mail ou le mot de passe est incorrecte";
                
            // }

            if (!isset($req['id'])){
                $valid = false;
                $er_mail = "Le mail ou le mot de passe est incorrecte";
                 
            }elseif($req['n_mdp'] == 1){ // On remet à zéro la demande de nouveau mot de passe s'il y a bien un couple mail / mot de passe
                $DB->insert("UPDATE utilisateur SET n_mdp = 0 WHERE id = ?",
                array($req['id']));
            }

            // S'il y a un résultat alos on va charger la SESSION de l'utilisateur en utilisateur les variables $_SESSION
            if(is_array($req)){
                if ($valid){
                    // id de l'utilisateur unique pour les requêtes futures

                    $_SESSION['id'] = $req['id'];
                    $_SESSION['username'] = $req['username'];
                    $_SESSION['prenom'] = $req['prenom'];
                    $_SESSION['nom'] = $req['nom'];
                    $_SESSION['telephone'] = $req['telephone'];
                    $_SESSION['adresse'] = $req['adresse'];
                    $_SESSION['mail'] = $req['mail'];
                    $_SESSION['type'] = $req['type'];

                    if ($req['type'] === "admin") {
                        header("Location: home.php");
                        exit;
                    } else if ($req['type'] === "user") {
                        header("Location: theme-des-leçons.php");
                        exit;
                    } else {
                        header("Location: accueil.html");
                        exit;
                    }
                }
            }
        }
    }


  
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
    <link rel="stylesheet" href="../assets/theme.css">
</head>
<body class="codebody">

    <div class="container mt-3">
        <div class="row justify-content-md-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header apropos text-center">
                        <div class="col-md-12">
                            <img src="../images/client.png" style="width: 150px; height: 150px; border-radius: 50%;">
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if(! empty($message)) { ?>
                            <div class="alert alert-danger" role="alert">
                            <p class="errorMessage"><?php echo $message; ?></p>
                            </div>
                        <?php } ?>
                        <form action="" method="post">
                            <?php
                            if (isset($er_mail)){
                            ?>
                                <div><?= $er_mail ?></div>
                            <?php
                            }
                            ?>
                            <div class="mb-3">
                            <input type="email" class="form-control" name="mail" 
                                value="<?php if(isset($mail)){ echo $mail; }?>" placeholder="Votre mail" required>
                            </div>

                            <?php
                            if (isset($er_mdp)){
                            ?>
                                <div><?= $er_mdp ?></div>
                            <?php
                            }
                            ?>

                            <div class="mb-3">
                            <input type="password" class="form-control" name="mdp" 
                                placeholder="votre mot de passe" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary login" name="connexion">login</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p class="box-register">Vous êtes nouveau ici ?&nbsp;
                                <a class="connect" href="inscription.php">S'inscrire</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>