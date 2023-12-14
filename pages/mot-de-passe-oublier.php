<?php

    session_start();
        include('config.php');
    
    if (isset($_SESSION['id'])){
        header('Location: index.php');
        exit;
    }

    

    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
        if (isset($_POST['oublie'])){
            $mail = htmlentities(strtolower(trim($mail))); // On récupère le mail afin d envoyer le mail pour la récupèration du mot de passe
            // Si le mail est vide alors on ne traite pas
            if(empty($mail)){
                $valid = false;
                $er_mail = "Il faut mettre un mail";
            }

            if($valid){
                $verification_mail = $DB->query("SELECT nom, prenom, mail, n_mdp
                    FROM carusers WHERE mail = ?",
                    array($mail));
                $verification_mail = $verification_mail->fetch();

                if(isset($verification_mail['mail'])){
                    if($verification_mail['n_mdp'] == 0){
                        $new_pass = rand(7, 10);
                        $new_pass_crypt = crypt($new_pass, 
                        '$6$rounds=5000$kjhg0fqs12dfgh54jkljABCDEFGHIJKLMh68g012fdssdiqsNOPQRSTUVWXYZdfgh354jklmùnbvcxwm6789lkjhgfds$');
                        $DB->insert("UPDATE carusers SET mdp = ?, n_mdp = 1 WHERE mail = ?",
                        array($new_pass_crypt, $verification_mail['mail']));
                    }
                }else {
                    echo "No user found with this email.";
                }
                header('Location: login.php');
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
                <?php if (!empty($message)): ?>
                    <p style="color:red"><?= $message ?></p>
                <?php endif; ?>
                <form method="post">

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

                    <button type="submit" name="oublie" class="btn btn-primary">Generer</button>
                
                </form>
            </div>
        </div>
    </div>
</body>
</html>