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
    <title>Le tableau de bord</title>
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
                <h1 style="font-weight: bold;"><b>Le tableau de bord</b></h1>
                <br>
                <p>Pour comprendre les bases du fonctionnement de votre véhicule au-delà du passage des vitesses,
                     il faut faire le lien entre le tableau de bord situé en haut du volant (la plupart du temps)
                      et les équipements dont il dispose.</p>
                <p>En effet, la plupart des actions entreprises seront affichées sur le tableau de bord, donc je 
                    commence par ce qui sera détectable.</p>
                <p>Lorsque vous introduisez la clé pour démarrer la voiture, il existe plusieurs positions. Sous 
                    certaines positions, les voyants du tableau de bord sont actifs ou pas :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/tableau1.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Positions de la clé</small></p>
                    </div>
                </div>
                
                <p>1. Lock est la position du déverrouillage de l'antivol en tournant simultanément la clé et le volant.</p>
                <p>2. Accessoires permet d'écouter la radio par exemple.</p>
                <p>3. On symbolise le contact - tous les voyants d'alerte s'allument avant la mise en route 
                    du moteur puis s'éteignent. Si certains restent allumés, cela veut dire qu'il y a un problème. 
                     Sur certains véhicules Diesel, il faut attendre dans cette position l'extinction du voyant de 
                     préchauffage du moteur.</p>
                <p>4. Start symbolise la mise en marche du moteur où il faut lâcher la clé dès que le moteur tourne.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Sur les voitures récentes, il est fort probable qu'une carte remplace la clé traditionnelle.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/tableau2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Démarrage de la voiture au bouton </small></p>
                    </div>
                </div>
                <p>Le tableau de bord ressemble à cela :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/tableau3.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Tableau de bord  </small></p>
                    </div>
                </div>
                
                <p>Il existe plusieurs sections et elles peuvent varier selon les modèles des voitures :</p>
                <ol style="list-style-type: disc;">
                    <li>le compte-tours qui indique le régime du moteur (pastille 1). Il peut être en sous-régime,
                         en plage de conduite économique ou surrégime où il risque la casse (position 7 ou 8, d'où
                          la couleur rouge) ;</li>
                    <li>le compteur de vitesse (tachymètre) indique la vitesse à la quelle vous roulez (pastille 2) ;</li>
                    <li>la température de l'eau de refroidissement indique si le moteur est bien refroidi (pastille 3) ;</li>
                    <li>le niveau de carburant indique si vous avez assez de carburant ou pas (pastille 4) ;</li>
                    <li>l'heure (pastille 5) ;</li>
                    <li>odomètre - compteur kilométrique totalisateur qui englobe tous les kilomètres parcourus 
                        (pastille 6) ;</li>
                    <li>odomètre partiel (remise à zéro après le remplissage du réservoir) sous la pastille 7 ;</li>
                    <li>quand le moteur fonctionne au ralenti, il tourne à un régime faible mais consomme une 
                        petite quantité d'essence en permanence, mesurée en litre par heure (pastille 8) ;</li>
                    <li>température extérieure (pastille 9).</li>
                </ol>
                <br>
                <div class="card question">
                <div class="card-body">
                <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                <p>Avec ces informations, pensez-vous que la voiture soit à l'arrêt ou pas ?</p>
                </div>
                </div>
                <br>
                <p><b>Réponse</b>La consommation au ralenti est de 1 l/h (très faible) et le tachymètre est à 0. 
                Remarquez aussi que le voyant du frein à main est visible (en bas de l'aiguille du tachymètre)
                 donc cela indique aussi que la voiture est à l'arrêt.</p>
                <h2 style="font-weight: bold;">Les commandes</h2>
                <p>Il est important de savoir les trouver rapidement sans quitter la route des yeux.</p>
                <b>Essuie-glaces</b>
                <p>Un essuie-glace est un dispositif mécanique essuyant la pluie et les projections 
                    (boues, insectes...) sur un pare-brise. Il est donc aussi utile par temps sec. 
                    Il existe plusieurs positions selon la force des averses.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/tableau4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Commande des essuie-glaces </small></p>
                    </div>
                </div>
                <p><b>Klaxon</b></p>
                <p>Il vous permet d'effectuer des avertissements sonores en cas de danger 
                    imminent. Il se trouve au milieu ou en bas du volant :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/tableau5.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Klaxon</small></p>
                    </div>
                </div>
                
                <b>Aération</b>
                <p>Nous avons déjà vu que la pluie peut créer de la buée et ainsi entraver la visibilité. 
                    Aussi, si vous avez froid dans la voiture, vous pouvez mettre le chauffage ou même l'air 
                    conditionné s'il fait trop chaud.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/tableau6.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Commandes d'air chaud et d'air froid</small></p>
                    </div>
                </div>
                <p>Lorsque les boutons 1 et 2 sont allumés, vous avez alors activé le désembuage avant (1)
                    ou le dégivrage arrière (2). Sur votre tableau de bord, ces icônes seront allumées :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/tableau7.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Désembuage avant et dégivrage arrière</small></p>
                    </div>
                </div>
                
                <p>Le bouton n°3 actionné permet d'avoir l'air conditionné et le n°4 recyclera l'air.</p>
                <p>Le bouton n°5 met en route de la clim en mode automatique (régule tout seul la température 
                    demandée dans l'habitacle). Le n°6 et le n°7 
                    permettent de baisser ou augmenter la température de l'air.</p>
                <p>Les n° 8 et 9 représentent la ventilation moyenne (8) et plus forte (9), tandis que le n°10 va 
                    orienter la ventilation vers les pieds, le torse ou vers le haut.</p>
                <h2 style="font-weight: bold;">Voyants</h2>
                <p>Il existe 3 types de témoins sur le tableau de bord :</p>
                <ol style="list-style-type: disc;">
                    <li>de signalisation, dont l'objectif est de vous montrer le fonctionnement des 
                        équipements à bord ;</li>
                    <li>d'alerte (couleur orange), dont l'objectif est de vous signaler une anomalie 
                        ou une panne. Si vous ne pouvez pas résoudre le problème tout seul, vous pouvez
                         encore rouler quelques kilomètres avant de rejoindre le garage !</li>
                    <li>d'alarme (couleur rouge), dont l'objectif est de vous alerter du danger et il 
                        faut s'arrêter de suite.</li>
                </ol>
                <p>Voici un petit aperçu des voyants les plus courants :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/tableau8.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voyants les plus courants</small></p>
                    </div>
                </div>
                
                <p>1. Commande des essuie-glaces (signalisation) ;</p>
                <p>2. Pression d'huile (alarme) ;</p>
                <p>3. Désembuage avant (signalisation) ;</p>
                <p>4. Feux de brouillard avant (signalisation).</p>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Nous verrons dans les chapitres suivants les autres voyants par thème.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/tableau9.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voyants alarmes</small></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/tableau10.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voyants alertes </small></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/tableau11.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voyants feux </small></p>
                    </div>
                </div>
                <br>
                
                                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Les équipements sont reliés à un ordinateur interne, qui lui, est relié à un tableau de bord et 
                    qui vous informe du fonctionnement de votre véhicule ou des anomalies qu’il peut présenter.</li>
                   <li>Il existe des commandes et des voyants lumineux témoignant des alertes à ne pas négliger 
                    pendant la conduite.</li>
                   <li>C'est en mettant la clé sur la position On que vous pouvez voir allumé le témoin de bord.</li>
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