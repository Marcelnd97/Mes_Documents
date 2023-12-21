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
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 20px; ">

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
                <h1 style="font-weight: bold;"><b>Stationnement alterné</b></h1>
                <br>
                <P>Dans certaines rues, le stationnement est régi par une période dans le mois. 
                    C'est à dire qu'il est interdit de stationner du côté de la rue où l'un de ces 2 panneaux est implanté. 
                    Ce stationnement est appelé unilatéral, donc juste d'un côté, 
                    à alternance semi-mensuelle (tantôt c'est interdit du 1er au 15 du mois, tantôt du 16 au 31).</p>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Le changement d'application de la règle se fait le 15 et le dernier jour du mois entre 20 h 30 et 21 h.</p>
                    </div>
                </div>
                <br>
                <p>Voici l'exemple :</p>
                <div class="card senscirc">
                    <img src="../images/ioninterselonperiodmois.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Stationnement interdit selon la période dans le mois</small></p>
                <ol>
                    <li>Stationnement interdit du côté du panneau du 1er au 15 du mois</li>
                    <li>Stationnement interdit du côté du panneau du 16 à la fin du mois</li>
                </ol>
                <br>
                <p class="text-muted"><b>Combinaisons panneaux / panonceaux</b></p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Non seulement le stationnement peut être autorisé ou interdit d'un seul côté, 
                        alterné et semi-mensuel, il peut être payant ou contrôlé par disque.</p>
                    </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="../images/pancombininterdposibstation.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panonceaux qui combinent les interdictions 
                    et les possibilités de stationner</small></p>
                
                <ol>
                    <li>Le premier panneau signifie la chose suivante : 
                        entrée en zone à stationnement unilatéral à alternance semi-mensuelle dont le stationnement est payant</li>
                    <li>Le deuxième panneau signifie : stationnement interdit du côté du panneau du 1er au 15 du mois, 
                        mais il est payant du 16 au 31.</li>
                    <li>Le troisième panneau signifie : stationnement interdit du côté du panneau du 1er au 15 du mois, 
                        mais du 16 au 31 il est possible de stationner entre 09 h et 17 h, 
                        la durée autorisée est indiquée sur le panonceau qui complète le panneau ou il faut se renseigner en mairie.</li>
                </ol>
                <p>Voici à présent le schéma des stationnements unilatéraux à alternance semi-mensuelle :</p>
                <div class="card senscirc">
                    <img src="../images/stationunilateral.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Stationnement unilatéral</small></p>
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Les règles de stationnement varient en fonction des périodes dans le mois ou les heures.</li>
                    <li>Les restrictions seront appliquées au côté pair ou impair dans une 
                        rue (panneau rond) ou dans une zone (panneau rond sur un fond blanc).</li>
                    <li>Les restrictions mensuelles peuvent être soumises aux conditions de paiement.</li>
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