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
    <title>L'écomobilité</title>
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
                <h1 style="font-weight: bold;"><b>L'écomobilité</b></h1>
                <br>
                <P>Pour les petites distances, mieux vaut se déplacer à pied ou à vélo.</P>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Pour faire un 1 km, il faut compter 12 minutes de marche à pied.</p>
                    </div>
                </div>
                <br>
                <p>A vélo, vous ne perdrez pas le temps pour chercher une place de parking. 
                    En ville, vous pouvez profiter des vélos en libre service qui disposent des 
                    bornes à presque chaque coin de rue.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p> En ce qui concerne les vélos, 10 km par jour évitent 700 kg de CO2 par an !</p>
                    </div>
                </div>
                <br>
               
                <p>Vous pouvez également vous déplacer en roller, à trottinette ou même en transport 
                    en commun pour favoriser l'écomobilité. Aussi, il s'agit de diminuer le bruit et la pollution 
                    due aux émissions de gaz carbonique. Le CO2 contribue au réchauffement climatique par 
                    augmentation de l'effet de serre.</p>
                <p>Le transport en commun pollue, mais si vous êtes 30 dans un bus, ensemble vous polluez 
                    moins que s'il y avait 30 voitures à rouler. Aussi, le fait d'utiliser les transports en 
                    commun désengorge le trafic.</p>
                <p>Un tramway peut transporter autour de 170 passagers. Il permet de limiter la pollution 
                    atmosphérique et sonore.</p>
                 <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p> En France, 65% des déplacements s'effectuent en voiture, raison pour laquelle 
                        l'écomobilité est en retard et doit davantage se développer.</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Les modes de déplacement alternatifs</h2>
                <p>Si vous décidez de prendre la voiture, alors vous pouvez réduire la pollution :</p>
                <ol>
                    <li>en pratiquant le covoiturage ;</li>
                    <li>en pratiquant l'autopartage ;</li>
                    <li>en vous servant des parkings relais.</li>
                </ol>
                <p><b>Covoiturage</b></p>
                <p>C'est une pratique qui est de plus en plus à la mode et qui consiste 
                    à utiliser une seule voiture pour transporter plusieurs personnes se 
                    rendant à un même endroit. Des sites internet permettent de mettre en 
                    relation ses usagers. Le covoiturage permet de réduire des dépenses, 
                    de la consommation de carburant et de la pollution de l'atmosphère.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_dix/ecom1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Espace co-voiturage</small></p>
                    </div>
                </div>
                
                <p><b>Autopartage</b></p>
                <p>Ce qui le différencie du covoiturage, c'est que l'on récupère une voiture libre à un endroit 
                    unique et ce sont les usagers qui s'en servent à des créneaux différents pour leurs besoins 
                    particuliers. Il existe des places réservées à ce genre de voitures.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                        style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_dix/ecom2.jpg">
                            </div>
                        <p class="text-muted text-center"><small>Principe d'auto-partage </small></p>
                    </div>
                </div>
                <h2 style="font-weight: bold;">Intermodalité</h2>
                <p><b>Parking relais</b></p>
                <p>C'est un espace de stationnement pour automobiles, situé en périphérie d'une ville et 
                    destiné à inciter les automobilistes à accéder au centre-ville en transport en commun : 
                    métro, tram, train de banlieue ou bus, en leur permettant de déposer leur véhicule dans 
                    un parking de surface ou fermé, ceci jusqu'à leur retour. Ce parc de stationnement peut 
                    être payant ou gratuit, gardé ou non.</p>
                <p><b>Pôle intermodal</b></p>
                <p>Cet endroit peut regrouper plusieurs moyens de transport. Il sert de jonction entre les bus, 
                    les tramways, les vélos etc. Les correspondances sont assurées et on peut souvent changer 
                    de moyen de transport sans payer de supplément.</p>
                                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Se déplacer à pied, à vélo ou en transport en commun réduit la pollution et le bruit.</li>
                   <li>En 12 minutes, un humain parcourt 1 km à pied.</li>
                   <li>L'utilisation du vélo permet de réduire les émissions du CO2.</li>
                   <li>Avec 65% de déplacement en voiture, la France reste en retard concernant l'écomobilité.</li>
                   <li>L'éco-mobilité signifie réfléchir à ses déplacements et les anticiper en mettant en place
                     le covoiturage, l'autopartage et le parking relais.</li>
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