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
    <title>Stationner en ville</title>
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
                <h1 style="font-weight: bold;"><b>Stationner en ville</b></h1>
                <br>
                <P>Tout simplement, commençons par les lieux dans lesquels votre véhicule sera en sécurité : 
                    les parkings (payants ou gratuits).</p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Le parking est un espace ou un bâtiment spécifiquement aménagé pour 
                        le stationnement des véhicules.</p>
                    </div>
                </div>
                <br>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <b><li>Parking de surface</li></b>
                </ol>
                
                <p>Il se situe de plain pied, à l'extérieur, sur l'espace public ou privé. 
                    Ce type de parking comprend le stationnement en voirie (places le long d'une rue, d'un quai, etc.) 
                    et les espaces dégagés à cette fin entre des bâtiments, ou établis sur des anciens champs, 
                    des anciens terrains vagues, etc. Il comprend également un parking 
                    vélo ou alors il peut être destiné exclusivement à ce type d'usagers, comme sur la photo :</p>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/parkingdeuroue.jpg" width="300px;" height="400px;">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Parking deux-roues </small></p>
                
                
                <p>Les parkings peuvent aussi être sous vidéosurveillance, dans ce cas ce panneau vous l'indiquera :</p>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/videosurveillance.jpg" width="100px;">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Parking sous vidéosurveillance</small></p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <b><li>Zone bleue</li></b>
                </ol>
                
                <p>Je vous ai déjà parlé de cette zone où il est possible de stationner sous certaines conditions. 
                    Sachez que tout parking est  représenté par un panneau bleu et s'il contient le pictogramme du disque, 
                    il est alors en zone bleue.</p>
                <div class="card senscirc">
                    <img src="../images/amenagerpourstation.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Lieu aménagé pour le stationnement gratuit, 
                    payant ou gratuit à durée limitée avec contrôle par disque </small></p>
                
                
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <b><li>Parking fermé ou sous-terrain</li></b>
                </ol>
                
                <p>Vous trouverez ce genre de parkings en ville, sous les aéroports ou sous les bâtiments 
                    de certaines zones d'activités. Ils ont plusieurs niveaux et le revêtement qui recouvre 
                    le sol protège sa surface, contrairement aux parkings en plein air. Des rampes permettent 
                    de passer d’un niveau à l'autre. Des ascenseurs ou des escaliers permettent aux occupants des véhicules, 
                    une fois ceux-ci garés, de rejoindre les sorties ou de se rendre directement à un endroit voulu sans sortir.</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <b><li>Parking relais</li></b>
                </ol>
                
                <p>Ce type de parking est destiné à inciter les automobilistes à accéder au centre-ville en transports en commun : 
                    métro, tram, train de banlieue ou bus, en leur permettant de stationner leur véhicule dans un parking 
                    de surface ou fermé, ceci jusqu'à leur retour. Ce parc de stationnement peut être payant ou gratuit, gardé ou non.</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <b><li>Stationnement partagé (gratuit)</li></b>
                </ol>
                
                <p>Une nouvelle réglementation est applicable dans certaines villes et concerne les places qui peuvent 
                    être partagées entre les voitures d'un côté et des véhicules de transport de marchandises de l'autre. 
                    Cette règle est applicable entre 20 h et 7 h du matin les dimanches et les jours fériés. Pourquoi, 
                    à votre avis ?</p>
                <p>Il s'agit des places qui sont inoccupées la nuit, car le jour elles sont réservées à la livraison.</p>
                <p>L'interdiction ou la possibilité de les utiliser se manifeste par un marquage au sol jaune. 
                    Si vous voyez une ligne jaune continue, c'est interdit. Si la ligne jaune est discontinue, 
                    alors attention à l'heure de votre arrivée ainsi qu'à la durée du stationnement. Voici la photo ci-dessous :</p>
                <div class="card senscirc">
                    <img src="../images/livraison.jpg" height="400px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Livraison</small></p>
                
                <br>
                <p>Sachez que si vous ne respectez pas les conditions imposées, vous risquez la fourrière, 
                    représentée très souvent de façon suivante sous forme de panonceau. 
                    Vous risquez de payer une amende et de perdre des points sur votre permis.</p>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/panneaufouriere.jpg" width="100px;">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Panonceau symbolisant la fourrière</small></p>
                
                
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Pensez à déplacer votre voiture au moins une fois par semaine pour que cela ne soit 
                        pas considéré comme un stationnement abusif ! 
                        Ce cas ne s'applique pas aux parkings qui proposent des forfaits mensuels ou annuels.</p>
                    </div>
                </div>
                <br>
                <p><b>Types de stationnement</b></p>
                <p>En fonction de l'aménagement du parking, vous pourrez stationner (voir le schéma ci-dessous) :</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>en <b>épi</b>, ce qui veut dire que vous allez occuper une place de parking en diagonale ;</li>
                    <li>en <b>créneau</b>, ce qui veut dire que vous allez occuper une place de parking le long du trottoir ;</li>
                    <li>En <b>bataille</b>, ce qui veut dire que vous allez vous placer perpendiculairement à la chaussée. 
                        Par mesure de sécurité et pour un confort de conduite, 
                        pensez à vous ranger en marche arrière pour avoir une meilleure visibilité pour repartir.</li>
                </ol>
                <div class="card senscirc">
                    <img src="../images/type de stationnement.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>type de stationnement</small></p>
                <p>En fonction de la rue dans laquelle vous vous trouvez, vous allez adapter votre façon de stationner.</p>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Stationner en double file est interdit, car les voitures derrière vous doivent se déporter à gauche. 
                        Regardez de près le schéma du stationnement en bataille. Imaginez que vous êtes stationnés à la place 
                        de la voiture rose, sans occuper la place attitrée du parking. 
                        Ce comportement est passible d'une amende et vous risquez de perdre des points sur votre permis.</p>
                    </div>
                </div>
                <br>
                <p class="text-muted"><b>Dans une rue à double sens de circulation</b></p>
                
                <p>Vous devez généralement vous garer en créneau du côté droit de la chaussée. 
                    Si vous voulez vous garer en sens inverse, 
                    il faut faire demi-tour. Il est dangereux de stationner à contresens.</p>
                <p class="text-muted"><b>Dans une rue à sens unique</b></p>
                <p>Vous pouvez vous garer à gauche ou à droite, faites juste attention au marquage 
                    au sol au cas où il y aurait des restrictions.</p>
                <p class="text-muted"><b>Cas exceptionnels de stationnement autorisé</b></p>
                <p>Seulement si vous voyez le panneau ci-dessous, vous aurez le droit de vous :</p>
                <ol style="margin-left: 10px; list-style-type: disc;">*
                    <li>garer sur le trottoir ;</li>
                </ol>
                
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/arretexeptionelmentautoriser.jpg" width="100px;">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Arrêt exceptionnellement autorisé</small></p>
                <ol style="margin-left: 10px; list-style-type: disc;">*
                    <li>ou si vous voyez le panneau qui dit Stationnement bilatéral autorisé.</li>
                </ol>
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Il existe les différents types de parkings (fermé, sous-terrain, de surface, parking relais..).</li>
                    <li>En ville, vous pouvez occuper les places prévues pour la livraison de marchandises 
                        (signalées par le marquage au sol jaune et les inscriptions), 
                        mais seulement pendant la nuit.</li>
                    <li>Vous n'avez le droit de stationner ni sur le trottoir ni à moitié sur le trottoir, 
                        sauf si une signalisation vous y autorise.</li>
                </ol>
                <br>
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