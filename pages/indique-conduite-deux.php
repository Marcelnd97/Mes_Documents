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
    <title>Indications de conduite (2)</title>
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
                <h1 style="font-weight: bold;"><b>Indications de conduite (2)</b></h1>
                <hr>
                <h3 style="font-weight: bold;"><b>Moyens de transport</b></h1>
                <br>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="../images/panmoyentransport1.jpg" width="300px">
                    </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Panneaux relatifs aux moyens de transport</small></p>
                <br>
                <p>1. Gare ferroviaire</p>
                <p>2. Gare de trains-auto</p>
                <p>3. Embarcadère pour bac ou car ferry</p>
                <h3 style="font-weight: bold;"><b>Point mobilité </b></h1>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="../images/panmoyentransport2.jpg" width="300px">
                    </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Panneaux relatifs à l’accessibilité</small></p>
                <br>
                
                <ol style="list-style-type: disc;">
                    <li>Le panneau n°1 indique un itinéraire piétonnier ;</li>
                    <li>le panneau n°2 indique un itinéraire piétonnier difficilement accessible 
                        pour les personnes à mobilité réduite ;</li>
                    <li>le panneau n°3 indique une installation accessible aux personnes handicapées à
                         mobilité réduite.</li>
                </ol>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Attention à ne pas commettre de contre-sens entre le panneau n°2 et n°3 !</p>
                    </div>
                </div>
                <br>
                <h3 style="font-weight: bold;"><b>Point logement</b></h1>
                <div class="card senscirc">
                    <img src="../images/panmoyentransport3.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux : point logement</small></p>
                <br>
                
                <p>1. Auberge de jeunesse</p>
                <p>2. Terrain de camping pour tentes</p>
                <p>3. Terrain de camping pour caravanes</p>
                <p>4. Chambre d'hôte ou gîte</p>
                <p>5. Restaurant</p>
                <p>6. Débit de boissons ou établissement proposant des collations sommaires</p>
                <p>7. Hôtel</p>
                <h3 style="font-weight: bold;"><b>Point informations</b></h1>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="../images/panmoyentransport4.jpg" width="300px">
                    </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Panneaux : point informations</small></p>
                <br>
                
                <p>1. Accès à un poste d'appel téléphonique</p>
                <p>2. Relais d'information service</p>
                <p>3. Point d'accueil jeunes</p>
                <h3 style="font-weight: bold;"><b>Point confort et aide médicale</b></h1>
                <p>Si vous avez besoin d'utiliser les toilettes, de boire de l'eau :</p>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="../images/panmoyentransport5.jpg" width="300px">
                    </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Panneaux : point confort</small></p>
                <br>
                
                <h3 style="font-weight: bold;"><b>Étapes dans le voyage</b></h1>
                <p>Si vous souhaitez vous arrêter dans un village étape et consommer là-bas plutôt que dans de grandes enseignes,
                     vous n'avez qu'à suivre le premier panneau. 
                    Si vous souhaitez acheter des produits locaux, vous pouvez passer par une maison de pays :</p>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="../images/panmoyentransport6.jpg" width="300px">
                    </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Village étape et Maison de pays</small></p>
                <br>
                
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>
                    Le panneau d'un village étape est utilisable pour les villages ayant reçu le label 
                    « village étape » décerné par le ministère chargé des routes.
                    </p>
                    </div>
                </div>
                <br>
                
                <h3 style="font-weight: bold;"><b>Activités </b></h1>
                <p>Si vous souhaitez faire des activités dans une région, vous allez vous renseigner ou acheter un guide. 
                    Mais parfois vous allez tomber sur des indications
                     routières qui ne sont pas données par des guides, et c'est utile de les connaître.</p>
                <div class="card senscirc">
                    <img src="../images/panmoyentransport7.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux relatifs aux activités dans les alentours</small></p>
                <br>
                
                <p>1. Base de loisir</p>
                <p>2. Centre équestre, promenade, ranch, poney-club</p>
                <p>3. Plage</p>
                <p>4. Point de départ d'un circuit de ski de fond</p>
                <p>5. Station de ski de descente</p>
                <p>6. Piscine ou centre aquatique</p>
                <p>7. Point de départ d'un itinéraire pédestre</p>
                <p>8. Point de mise à l'eau d'embarcations légères</p>
                <p>9. Point de vue</p>
                <p>10. Gare de téléphérique</p>
                <p>11. Télésiège - télécabine</p>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="../images/panmoyentransport8.jpg" width="300px">
                    </div>
                </div>
                </div>
                <p class="text-muted text-center"><small>Village étape et Maison de pays</small></p>
                <br>
                
                <p>12. Point de détente</p>
                <p>13. Jeux d'enfants</p>
                <br>
                
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Comme vous pouvez le constater, les panneaux d'indication peuvent être de couleur noire
                         (panneaux 1-9) comme ils peuvent 
                        être de couleur bleue (panneaux 10 et 11). La couleur ne change rien à leur sens. </p>
                    </div>
                </div>
                <br>
                
                <h3 style="font-weight: bold;"><b>Danger en forêt </b></h1>
                <p>En région Méditerranéenne, le feu de forêt est un phénomène ancien et récurrent. 
                    Certaines plantes comme les Cistes ou les Pins peuvent favoriser les incendies. 
                    Pour vous prévenir des risques, ce panneau a été mis en place :</p>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/panmoyentransport9.jpg" width="100px">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Environnement nécessitant des précautions particulières</small></p>
                <h3 style="font-weight: bold;"><b>Visites culturelles</b></h1>
                <p>Encore une fois, vous serez amenés à consulter un guide, 
                    mais pour reconnaître un lieu, vous devrez savoir lire les panneaux. </p>
                <p>Comme le sens de ces panneaux n'est pas aussi évident que celui des activités qu'ils annoncent, 
                    je vais vous aider :</p>
                <div class="card senscirc">
                    <img src="../images/panmoyentransport10.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux d'indication culturelle</small></p>
                <br>
                
                <ol style="list-style-type: disc;">
                    <li>Le panneau n°1 représente un parc naturel régional ;</li>
                    <li>le panneau n°2 représente un parc national ;</li>
                    <li>le panneau n°3 représente une réserve naturelle ;</li>
                    <li>le panneau n°4 représente un terrain du conservatoire du littoral et des rivages lacustres ;</li>
                    <li>le panneau n°5 représente un monument historique ;</li>
                    <li>le panneau n°6 représente un site classé ;</li>
                    <li>le panneau n°7 représente un musée ayant reçu l’appellation « musée de France », créée par la loi du 4 janvier 2002 ;</li>
                    <li>le panneau n°8 représente un parc ou jardin ayant reçu le label « jardin remarquable » décerné par le ministère de la culture ;</li>
                    <li>le panneau n°9 représente un cimetière militaire ;</li>
                    <li>le panneau n°10 représente un point d’accueil du public dans un espace naturel sensible.</li>
                </ol>
                <h3 style="font-weight: bold;"><b>Point consommation </b></h1>
                <p>J'ai déjà évoqué la maison de pays et le village étape. 
                    On pourra également vous indiquer les commerces du coin ou l'endroit où vous pouvez retirer de l'argent :</p>
                <div class="card senscirc">
                    <img src="../images/panmoyentransport11.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux d'indication des commerces dans les alentours</small></p>
                <br>
                <ol style="list-style-type: disc;">
                    <li>Le panneau n°1 représente un distributeur de billets de banque ;</li>
                    <li>le panneau n°2 représente la présence d'un centre commercial ;</li>
                    <li>le panneau n°3 représente la vente des produits vinicoles ;</li>
                    <li>le panneau n°4 représente la vente des produits de terroir.</li>
                </ol>
                <br>
                <p><b>Point consommation et recyclage</b></p>
                <p>Le premier panneau représente une zone industrielle ou parc
                     d’activités et le deuxième représente un centre de tri des déchets.</p>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/panmoyentransport12.jpg" width="300px">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Point conso et recyclage</small></p>
                <br>
                
                <p><b>En cas de besoins de carburant</b></p>
                <p>Avant de partir en voyage, vous êtes censés vérifier le niveau d'huile et d'essence
                     pour ne pas rencontrer des problèmes de panne de votre véhicule.</p>
                <p>Mais si vous voyez que vous n'aurez pas assez d'essence pour arriver à destination,
                     il vaut mieux guetter les panneaux qui annoncent une station service. Si vous passez 
                     à travers plusieurs petites communes, vous pourrez en rencontrer une facilement. </p>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/panmoyentransport13.jpg" width="300px">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Postes de distribution de carburant ouvert 24</small></p>
                <br>
                
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Le G.P.L. est l'abréviation de Gaz de Pétrole Liquéfié. C'est un carburant qui préserve 
                        les performances du véhicule et réduit même l'usure du moteur. Un moteur qui utilise le
                         GPL est également capable de tourner avec son carburant classique ; 
                        il n'y a donc pas de risque de tomber en panne sèche loin d'une pompe.</p>
                    </div>
                </div>
                <br>
                <p>Si vous avez besoin de faire un saut chez un mécanicien, 
                    ou de vidanger votre caravane, vous devez guetter ces panneaux-ci :</p>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/panmoyentransport14.jpg" width="300px">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Entretien de votre véhicule sur la route</small></p>
                <br>
                <ol style="list-style-type: disc;">
                    <li>Le panneau n°1 représente le point de gonflage de pneus gratuit ;</li>
                    <li>le panneau n°2 représente un atelier d'entretien des véhicules ;</li>
                    <li>le panneau n°3 représente une station de vidange pour caravanes, autocaravanes et cars.</li>
                </ol>
                <br>
        </div>
      </div>
    </section>

    <?php
    // <!--Le pied de la page-->
        include("../footer/footer.php");
        
        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("../script/script_link.php");
    ?>
    
</body>
</html>