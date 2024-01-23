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
    <link rel="stylesheet" href="../assets/theme.css">
    <title>Les coussins gonflables (air-bags)</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<<body class="codebody">>

    <!--L'en-tête de la page-->
    <?php
        include("../header/header.php");
    ?>
    <section>
      <br><br><br><br>

      <div class="container">
       <!-- Content here -->
        <div class="row justify-content-center">
          <div class="col-md-8">
                <h1 style="font-weight: bold;"><b>Les coussins gonflables (air-bags)</b></h1>
                <br>
                <p>Il s'agit d'un dispositif de sécurité passive car il s'active après que l'accident a eu lieu.</p>
                <p>Les air-bags sont principalement utilisés dans les automobiles, pour protéger les 
                    passagers lors d'une collision et ainsi leur éviter de percuter violemment certains 
                    équipements de la voiture. Les nouveaux modèles de voitures disposent des air-bags 
                    aussi sur les côtés et sur les sièges arrière.</p>
                <p>Lorsqu'ils s'ouvrent, cela ressemble à ce que vous pouvez voir sur la photo ci-dessous.</p>
                <br>
                <div class="card question">
                <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>A votre avis, que signifient les deux pictogrammes allumés,  représentant les air-bags ?</p>
                </div>
                </div>
                <br>
                 <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_neuf/coussin1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voyants air-bag </small></p>
                    </div>
                </div>
                <p><b>Réponse :</b></p>
                <p>1. Si l’icône affichée illustre un air-bag traversé d’un "X", le poids sur le siège ne
                     suffit pas à activer le système et le coussin ne se déploiera pas en cas d’impact frontal.</p>
                <p>2. Signale une anomalie de fonctionnement des tendeurs de ceintures et/ou des coussins 
                    gonflables qui pourraient ne pas se déployer; une vérification immédiate s’impose.</p>
                <p>Il s'agit d'un témoin d'alarme.</p>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>L'air-bag est un amortisseur de choc.</li>
                   <li>Sur certaines voitures, il y a des air-bags qui sont placés aussi sur les côtés.</li>
                   <li>Si le voyant air-bag s'allume, vérifiez vos équipements.</li>
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