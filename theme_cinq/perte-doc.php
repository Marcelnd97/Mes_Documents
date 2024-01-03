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
    <title>En cas de perte de documents</title>
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
                <h1 style="font-weight: bold;"><b>En cas de perte de documents</b></h1>
                <br>
                <p>S'il vous arrive de perdre vos documents ou de vous vous faire voler votre portefeuille,
                     direction la gendarmerie ou le commissariat ! On vous y délivrera :</p>
                <ol style="list-style-type: disc;">
                    <li>un récépissé de permis de conduire valable 2 mois </li>
                    <li>un récépissé de carte grise valable 1 mois.</li>
                </ol>
                <p>Pendant ce temps-là, vous devez faire la démarche de renouvellement qui consiste à aller :</p>
                <ol style="list-style-type: disc;">
                    <li>à la préfecture, à la sous-préfecture ou à la mairie de votre domicile 
                        (renseignez-vous au préalable pour savoir dans lequel de 
                        ces endroits vous rendre, toutes les préfectures n'ont pas le même fonctionnement) ;</li>
                    <li>si vous habitez à Dakar, au bureau des permis de conduire de la préfecture de police.</li>
                </ol>
                <p>Le lieu de la demande dépend du domicile, quel que soit le lieu de délivrance de l'ancien permis.</p>
                <br>
                                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Si vous perdez vos documents, la préfecture se charge de vous délivrer des 
                        documents temporaires.</li>
                    <li>Il faut entreprendre une démarche de renouvellement pendant la durée de validité
                         des documents temporaires.</li>
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