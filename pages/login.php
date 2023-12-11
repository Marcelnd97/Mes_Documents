<?php
    //session_start();

    //include('auth.php');
    //include("config.php");

    // if (login($username, $password)) {
    //     header('location: theme-des-leçons.php');
    // }else{
    //     $errorMessage = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    // }
    //////////////////////////////////////////////////////////////////////////////////////

    //$message = '';
    
    // if (isset($_POST['username']) && isset($_POST['password'])) {
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    
    //     $sql = "SELECT * FROM carusers WHERE username = :username";
    //     $stmt = $pdo->prepare($sql);
    //     $stmt->execute(['username' => $username]);
    //     $user = $stmt->fetch();
    
    //     if ($user && password_verify($password, $user['password'])) {
    //         session_start();
    //         if($_SESSION['user_id'] = $user['id'] && $user['type'] == 'admin'){
    //             header('Location: home.php');
    //         }else{
    //             header('Location: theme-des-leçons.php');
    //         }

    //     } else {
    //         $message = 'Mauvais identifiants';
    //     }
    // }


    // session_start();
    // include('config.php'); // Fichier PHP contenant la connexion à votre BDD
    // // S'il y a une session alors on ne retourne plus sur cette page
    // if (isset($_SESSION['id'])){
    //     header('Location: home.php');
    //     exit;
    // }
    //  // Si la variable "$_Post" contient des informations alors on les traitres
    // if(!empty($_POST)){
    //     extract($_POST);
    //     $valid = true;
    //     if (isset($_POST['connexion'])){
    //         $mail = htmlentities(strtolower(trim($mail)));
    //         $mdp = trim($mdp);
    //         if(empty($mail)){ // Vérification qu'il y est bien un mail de renseigné
    //             $valid = false;
    //             $er_mail = "Il faut mettre un mail";
    //         }
    //         if(empty($mdp)){ // Vérification qu'il y est bien un mot de passe de renseigné
    //             $valid = false;
    //             $er_mdp = "Il faut mettre un mot de passe";
    //         }
    //         // On fait une requête pour savoir si le couple mail / mot de passe existe bien car le mail est unique !
    //         $sql = "SELECT * FROM carusers WHERE mail = ? AND mdp = ?";
    //         $req = $DB->query($sql, [$mail, $mdp]);
    //         // $req = $DB->query("SELECT * FROM carusers WHERE mail = ? AND mdp = ?", 
    //         //     array($mail, crypt($mdp, PASSWORD_DEFAULT)));
    //         // $data = [""=> $mail,""=> $mdp]) or die("");
    //         if ($req !== false) {
    //             $req_user = $req->fetch();
    //         }else{
    //             error_log("Erreur d'exécution de la requête.");
    //             echo "Erreur d'exécution de la requête.";
    //         }
            
    //         // Si on a pas de résultat alors c'est qu'il n'y a pas d'utilisateur correspondant au couple mail / mot de passe
    //         if(is_array($req) && isset($req)){
    //             if ($req['id'] == ""){
    //                 $er_mail = "Le mail ou le mot de passe est incorrecte";
    //                 error_log($er_mail);
    //             }
    //             // Si le token n'est pas vide alors on ne l'autorise pas à accéder au site
                
    //             if($req['token'] !== NULL){
    //                 $valid = false;
    //                 $er_mail = "Le compte n'a pas été validé";	
    //             }
    //             // S'il y a un résultat alors on va charger la SESSION de l'utilisateur en utilisateur les variables $_SESSION
    //             if ($valid){
    //                 if (password_verify($mdp, $req['mdp'])) {
    //                     $_SESSION['id'] = $req['id']; // id de l'utilisateur unique pour les requêtes futures
    //                     $_SESSION['username'] = $req['username'];
    //                     $_SESSION['prenom'] = $req['prenom'];
    //                     $_SESSION['nom'] = $req['nom'];
    //                     $_SESSION['telephone'] = $req['telephone'];
    //                     $_SESSION['adresse'] = $req['adresse'];
    //                     $_SESSION['mail'] = $req['mail'];
    //                     $_SESSION['mdp'] = $req['mdp'];
    //                     $_SESSION['type'] = $req['type'];

    //                     if ($req["type"] === "admin") {
    //                         header("Location: home.php");
    //                         exit;
    //                     } else if($req["type"] === "user"){
    //                         header("Location: theme-des-leçons.php");
    //                         exit;
    //                     }else{
    //                         header("Location: index.html");
    //                         exit;
    //                     }
                        
    //                 }else{
    //                     $er_mail = "Le mail ou le mot de passe est incorrecte";
    //                     error_log($er_mail);
    //                 }
    //             }
    //         }
    //     }
    // }

    session_start();
    include('config.php');

    if (isset($_SESSION['id'])) {
        header('Location: home.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['connexion'])) {
        $mail = htmlentities(strtolower(trim($_POST['mail'])));
        $mdp = trim($_POST['mdp']);

        if (empty($mail) || empty($mdp)) {
            $er_message = "Veuillez remplir tous les champs.";
        } else {
            $sql = "SELECT * FROM carusers WHERE mail = ?";
            $req = $DB->query($sql, [$mail]);

            if ($req !== false) {
                $user = $req->fetch();

                if ($user && password_verify($mdp, $user['mdp'])) {
                    if ($user['token'] !== NULL) {
                        $er_message = "Le compte n'a pas été validé.";
                    } else {
                        $_SESSION['id'] = $user['id'];
                        $_SESSION['username'] = $user['username'];
                        $_SESSION['prenom'] = $user['prenom'];
                        $_SESSION['nom'] = $user['nom'];
                        $_SESSION['telephone'] = $user['telephone'];
                        $_SESSION['adresse'] = $user['adresse'];
                        $_SESSION['mail'] = $user['mail'];
                        $_SESSION['mdp'] = $user['mdp'];
                        $_SESSION['token'] = $user['token'];
                        $_SESSION['type'] = $user['type'];

                        if ($user['type'] === "admin") {
                            header("Location: home.php");
                            exit;
                        } else if ($user['type'] === "user") {
                            header("Location: theme-des-leçons.php");
                            exit;
                        } else {
                            header("Location: index.html");
                            exit;
                        }
                    }
                } else {
                    $er_message = "Le mail ou le mot de passe est incorrect.";
                }
            } else {
                error_log("Erreur d'exécution de la requête.");
                echo "Erreur d'exécution de la requête.";
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
    <link rel="stylesheet" href="../pages/assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        .my-container{
            margin-top: 200px;
            max-width: 500px;
            margin: 0 35%;
            border: 3px solid black;
            border-radius: 12px;
            
        }
        .card-header{
             background-color: chocolate;
             color: white;
        }
        .card-footer{
            background-color: chocolate;
             color: white;
        }
        .connect{
            color: blue;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="contaner mt-4 my-container">
            <div class="card justify-content-md-center">
                <div class="card-header text-center">
                    <div class="col-md-12">
                        <img src="./images/client.png" width="100px;" height="100px;">
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
                        <input type="text" class="form-control" name="mail" 
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
                        <button type="submit" class="btn btn-primary" name="connexion">login</button>
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
</body>
</html>