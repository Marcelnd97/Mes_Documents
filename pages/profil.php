<?php

//initialiser la session
session_start();    
include("config.php");
// vérifier si l'utilisateur est connecté, sinon redirigez le vers la page de donnection
    if(! isset($_SESSION['id'])) {
        header('location: login.php');
        exit();
    }  
?>


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../pages/assets/theme.css">

    <title>Profile</title>
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">
     <!--L'en-tête de la page-->
     <?php
        include("header.php")
     ?>
    <br><br><br>
    <hr>
    <div class='row m-3'>
            <div class='col-md-12 p-0'>
                <h1>Le profil de l'utilisateur</h1>
            </div>
            <?php
                if (isset($_SESSION["id"])) {
                    ?>
                    <div class='card col-md-4 text-center m-2'>
                        <div class='col'>
                            <div class='mb-3 mt-3'>
                                <img src='./images/client.png' class='rounded-circle' width='100px' height='100px'/>
                            </div>
                            <div class='mb-3'>
                                <h2><?= $_SESSION['username'] ?></h2>
                                    <small class='form-text text-muted'><?= $_SESSION['type'] ?></small>
                            </div>
                            <div class='col mb-3 p-0'>
                                <a class='btn btn-primary mr-2' color='primary'>
                                    <i class='fas fa-pencil-alt'></i>&nbsp;Modifie
                                    profil</a>
                            </div>
                            <div class='col mb-3 p-0'>
                                <a class='btn btn-danger mr-2' href="login.php" color='primary'>
                                    <i class='fas fa-pencil-alt'></i>&nbsp;Se déconnecter</a>
                            </div>
                        </div>
                    </div>
                    <div class='card col-md-7 m-2'>
                        <table class='table'>
                            <tbody>
                            <tr>
                                <th scope='row'>Prénom</th>
                                <td><?= $_SESSION['prenom'] ?></td>
                            </tr>
                            <tr>
                                <th scope='row'>Nom</th>
                                <td><?= $_SESSION['nom'] ?></td>
                            </tr>
                            <tr>
                                <th scope='row'>Adresse</th>
                                <td><?= $_SESSION['adresse'] ?></td>
                            </tr>
                            <tr>
                                <th scope='row'>Adresse mail</th>
                                <td><?= $_SESSION['mail'] ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php
                }
                ?>
            
        </div>

        <?php
         // <!--Le pied de la page-->
            include("footer.php");

            // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
            include("script_link.php");
        ?>
</body>
</html>