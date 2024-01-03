<?php 
    session_start(); 
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
    <title>Documents facultatifs</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">

    <!--L'en-tête de la page-->
    <?php
        include("../header/header.php");
    ?>
    <section>
      <br><br><br><br>

      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-10" style="padding-left: 25%;">
                <h1 style="font-weight: bold;"><b>Documents facultatifs</b></h1>
                <br>
                <h2 style="font-weight: bold;"><b>Constat amiable</b></h2>
                <p>C'est un document qu'il est conseillé d'avoir dans son véhicule, car en cas d'accident 
                    il permet d’accélérer le processus de règlement par l'assurance. Il ressemble à cela :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_cinq/facultat1.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Constat amiable</small></p>
                    </div>
                </div>
                <p> Lorsque vous remplissez un constat amiable, vous devez renseigner :</p>
                <ol style="list-style-type: disc;">
                    <li>les blessures, même si elles sont légères ;</li>
                    <li>les dégâts sur le mobilier urbain (poteaux, glissières...) ;</li>
                    <li>le nombre de témoins ;</li>
                    <li>les informations figurant sur l'attestation d'assurance et sur le certificat d'immatriculation ;</li>
                    <li>les cases relatives aux circonstances et leur nombre (les assurances déterminent les 
                        dédommagements en fonction du nombre de cases cochées) ;</li>
                    <li>le point de choc initial sur le véhicule ;</li>
                    <li>les dégâts apparents sur le véhicule (il faut rajouter "sous réserve d'expertise") ;</li>
                    <li>la case de vos observations (circonstances non prévues par la liste ou désaccord avec 
                        l'autre personne impliquée) ;</li>
                    <li>la case prévue pour votre signature et celle de l'autre personne impliquée ;</li>
                    <li>un champ vide où vous pouvez faire le croquis des véhicules.</li>
                </ol>
                <p>Chaque conducteur impliqué dans l'accident doit, après avoir signé le constat, le renvoyer 
                    dans les 5 jours ouvrés (2 jours en cas de vol) à sa compagnie d'assurance.</p>
                <p>L'autre conducteur, s'il n'est pas d'accord avec votre analyse de la situation, peut refuser
                     de signer le constat. Remplissez la partie du constat amiable qui vous concerne et dans la partie 
                     observations indiquez que l’autre conducteur a refusé de signer. Vous disposez toujours de 5 jours
                      pour faire parvenir le constat amiable à votre assureur. Si le conducteur ayant refusé de signer 
                      ne se manifeste pas auprès de sa compagnie, c’est lui qui sera considéré comme étant en tort.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Vous n'êtes pas obligé d'avoir un constat amiable dans votre véhicule. 
                        Vous pouvez également vous servir de l'application de votre assureur ou des assureurs
                         français sur votre smartphone. Le constat dématérialisé est pratiqué et accepté.</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Disque de stationnement</h2>
                <p>Vous n'êtes pas obligés d'avoir ce document sur vous, mais sans lui vous perdez 
                    le bénéfice de vous garer dans une zone bleue.</p>
                <br>
                                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Le constat amiable est un document qui vous permet d'accélérer le règlement en cas d'accident.</li>
                    <li>Que le conducteur adverse veuille le signer ou pas, vous devez envoyer le document 
                        dans les 5 jours à votre assureur.</li>
                    <li>Le constat d'accident dématérialisé se pratique de plus en plus et est accepté.</li>
                    <li>Le disque de stationnement vous permet de bénéficier d'une place de parking dans une zone bleue, 
                        raison pour laquelle il est conseillé de toujours l'avoir dans le véhicule.</li>
                </ol>
          </div>
        </div>
      </div>

    </section>

    <!--Le pied de la page-->
    <?php
    // <!--Le pied de la page-->
        include("../footer/footer.php");

        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("../script/script_link.php");
    ?>
</body>
</html>