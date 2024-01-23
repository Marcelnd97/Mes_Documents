<?php
    //initialiser la session
    session_start(); 
        include("config.php");
   
    // vérifier si l'utilisateur est connecté, sinon redirigez le vers la page de donnection
    if(! isset($_SESSION['id'])) {
        header('location: accueil.php');
        exit();
    }

     
     $req_profil = $DB->query("SELECT * FROM carusers",
     array());
     $req_profil = $req_profil->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home admin</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body>

    <?php
        if (isset($_SESSION['id'])) {?>

            <a class="btn btn-primary" href="deconnexion">Se déconnecter</a>
            <h2>Voici le profil de <?= $_SESSION['username'] ."&nbsp;&nbsp;". $_SESSION['mail']; ?></h2>
            <div>Quelques informations sur vous : </div>
            <ul>
                <li>Votre id est : <?php echo $_SESSION['id'] ?></li>
                <li>Votre id est : <?php echo $_SESSION['prenom'] ?></li>
                <li>Votre id est : <?php echo $_SESSION['nom'] ?></li>
                <li>Votre mail est : <?= $_SESSION['mail'] ?></li>
                <li>Votre rôle est : <?= $_SESSION['type'] ?></li>
            <!-- <li>Votre compte a été crée le : <?= $_SESSION['date_creation'] ?></li> -->
            </ul>
        <?php }
    ?>
    


    <<body class="codebody">>
        <div class='row m-3'>
                <div class='col-md-12 p-0'>
                    <h1>Le profil de l'utilisateur</h1>
                </div>
                <?php

                    if (isset($_SESSION["id"])) {
                        ?>
                        <div class='card col-md-12 m-2'>
                            
                            <table class='table'>
                                <thead>
                                    <tr>
                                        <th scope='row'>Prénom</th>
                                        <th scope='row'>Nom</th>
                                        <th scope='row'>adresse</th>
                                        <th scope='row'>Téléphone</th>
                                        <th scope='row'>Adresse</th>
                                        <th scope='row'>mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                            
                                <tr>
                                    <td><?=$_SESSION['prenom']?></td>
                                </tr>
                                <tr>
                                    <td><?= $_SESSION['nom'] ?></td>
                                </tr>
                                <tr>
                                    <td><?= $_SESSION['adresse'] ?></td>
                                </tr>
                                <tr>
                                    <td><?= $_SESSION['mail'] ?></td>
                                </tr>
                                </tbody>
                               
                            </table>
                        </div>
                        <?php
                    } ?>
                
            </div>

            <?php

                // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
                include("../script/script_link.php");
            ?>
    </body>
</body>
</html>