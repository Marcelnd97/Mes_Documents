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
    <title>Les passages à niveau</title>
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
                <h1 style="font-weight: bold;"><b>Les passages à niveau</b></h1>
                <br>
                <p>Ces tronçons de route peuvent être très dangereux si vous n'êtes pas vigilants et patients. 
                    Pour ceux qui n'ont jamais vu un passage à niveau, 
                    il s'agit d'un passage sur les rails d'un train, comme sur la photo ci-dessous :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/passage1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Passage à niveau</small></p>
                    </div>
                </div>
                
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>À 90 km/heure, il faut 800 m pour qu’un train s’arrête. 
                        La distance d’arrêt d’un train est 10 fois supérieure à celle d’un véhicule.</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Présignalisation d'un passage à niveau</h2>
                <p>Bien entendu, vous serez informés de sa présence à temps. Vous étiez habitués à être avertis une 
                    seule fois d'un danger grâce aux panneaux triangulaires, mais le passage à niveau vous 
                    le répétera 2 fois de plus, 3 en tout. La première fois vous verrez les 3 lignes rouges
                     sur une balise blanche, puis vous verrez deux lignes et enfin une seule pour ensuite 
                     tomber directement sur le passage à niveau.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/passage2.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Panneaux annonçant un passage à niveau</small></p>
                    </div>
                </div>
                
                <p>Voyons à présent les informations que vous pouvez comprendre sans mes explications.</p>
                <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                        <p>Voici la liste des informations fournies ; 
                            associez-les aux panneaux correspondants et pensez à ce qui est commun à tous ces panneaux :</p>
                        <p>a) le passage est sans barrière</p>
                        <p>b) le passage est avec une barrière et fonctionne automatiquement</p>
                        <p>c) le passage à niveau est régulé avec un Stop ; 
                            ce panneau est implanté au niveau de la balise comportant 3 barres rouges</p>
                        <p>d) le passage à niveau est régulé à l'aide d'un feu</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/passage3.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Panneaux relatifs aux passages à niveau</small></p>
                    </div>
                </div>
                
                <p><b>Réponses : </b> 1 : réponse a (c'est un signal d'annonce, sans obligation d'arrêt mais 
                    le train a la priorité) ; Panneau 2 : réponse d (avec obligation d'arrêt) ; Panneau 3 : 
                    c (si le panonceau 150 m annonce le panneau Stop dans 150 m alors tous les deux sont implantés
                     au niveau de la balise comprenant 3 barres rouges) ; Panneau 4 : réponse b.</p>
                <p>Ce qui est commun à tous ces panneaux c'est que ce sont des signaux d'annonce. Ils annoncent 
                    l'existence du passage à niveau (en fonction du nombre de barres rouges renseignées sur les 
                    balises et le contexte).</p>
                <p>Voici le schéma récapitulatif des balises et des panneaux relatifs aux passages à niveau :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/passage4.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Schéma d'un passage à niveau depuis son annonce</small></p>
                    </div>
                </div>
                <p>et les panneaux que vous verrez une fois arrivés aux rails. On les appelle les signaux de position.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/passage5.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Régulation du trafic au sein d'un passage à niveau</small></p>
                    </div>
                </div>
                
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                        <p>Vous devez vous arrêter si le feu rouge est clignotant. 
                            Lorsqu'il ne clignote plus, la voie est libre.</p>
                    </div>
                </div>
                <br>
                <p><b>Passages à niveau avec les barrières ou demi-barrières</b></p>
                <p>La règle concernant l'annonce du passage à niveau reste la même, seulement 
                    la régulation du trafic diffère un peu. Au lieu d'attendre au Stop, vous serez d'abord avertis
                     du passage à niveau par les panneaux, mais arrêtés grâce aux barrières, régulées par un feu.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/passage6.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Barrière à fonctionnement automatique</small></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/passage7.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Signalisation d'un passage à niveau avec barrière </small></p>
                    </div>
                </div>
                
                <p>1. Barrières à fonctionnement manuel ou automatique</p>
                <p>2. Signal avancé</p>
                <p>3. Barrières avec ligne électrifiée située à moins de 6 m au-dessus de la chaussée</p>
                <p>Si la barrière est levée, vous pouvez passer. Vérifiez toutefois si votre passage est sûr.</p>
                <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Mais comment se comporter si la barrière est fermée ?</p>
                    </div>
                </div>
                <p>20 secondes environ avant l'arrivée du train, les feux rouges clignotent et la sonnerie retentit.
                     Les barrières s'abaissent juste après le début du clignotement des feux. Vous pouvez redémarrer seulement 
                    lorsque le feu rouge clignotant sera éteint et les barrières complètement levées.</p>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                        <p>- Ne vous engagez pas, même en cas de barrière levée, si la voie de l'autre côté est encombrée !</p>
                        <p>- Ne vous faufilez pas entre les barrières pour passer plus vite de l'autre côté.</p>
                        <p>- Si jamais vous tombez en panne ou êtes bloqués sur les voies, évacuez les passagers 
                            de la voiture et alertez un agent SNCF avec le téléphone du passage à niveau.</p>
                        <p>- Autrement, vous êtes autorisés à enfoncer les barrières ! Elles sont conçues pour ne 
                            pas résister à ce type de choc.</p>
                    </div>
                </div>
                <br>
                <p>Pour information, un panneau dynamique peut vous avertir de la fermeture du passage à niveau. 
                    Cela veut dire qu'un train arrive. Vous devez donc vous arrêter !</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/passage8.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Panneau dynamique annonçant un passage à niveau fermé</small></p>
                    </div>
                </div>
                <p>Les passages à niveau peuvent être annoncés avec des panneaux de ce type s'il faut tourner  :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 100px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/passage9.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Passage à niveau présignalé</small></p>
                    </div>
                </div>
                
                <p><b>🚂 Point info sécurité avec la SNCF Réseau</b></p>
                <p>Une centaine de collisions au passage à niveau ont été dénombrées chaque année, 
                    et 15 à 30 personnes y trouvent la mort. </p>
                <p>Il y a 15 307 passages à niveaux en France sur le réseau ferré national exploité 
                    (30 000 km de voies en service), soit 300 000 cycles de fermetures de barrières par jour, 
                    et 16 millions de véhicules qui empruntent un passage à niveau chaque jour.</p>
                <p>Il existe 2 types de passage à niveau : </p>
                <ol style="list-style-type: disc;">
                    <li>Passage à niveau avec barrières : 3 passages à niveau sur 4 sont équipés 
                        de feux rouges clignotants, et de barrières automatiques ou parfois de barrières manuelles seules.</li>
                    <li>Passage à niveau sans barrières : les passages à niveau sans barrières sont équipés de croix de
                         Saint-André ou de portillons.</li>
                </ol>
                <p>📞 Le téléphone orange est un téléphone d’alerte et d’urgence. Il vous permet 
                    de rentrer en contact avec un agent SNCF, en cas d’urgence au passage à niveau 
                    (barrière cassée, véhicule coincé). </p>
                <p>Pour bien s’en servir : </p>
                <ol style="list-style-type: disc;">
                    <li>Je lève le bras du téléphone.</li>
                    <li>J’appuie 2 secondes sur le bouton.</li>
                    <li>Je réponds à l’agent en suivant les consignes inscrites sur le téléphone. </li>
                    <li>L’agent me donne ensuite la marche à suivre. </li>
                </ol>
                <p>⚠️ Point de vigilance : ce téléphone n’a pas de tonalité, il faut patienter.</p>
                <p>Un itinéraire de substitution est indiqué sur certains téléphones. SNCF Réseau est à 
                    l’origine d’une journée nationale de prévention pour la sécurité des passages à niveau. 
                    Nationale depuis 2008, celle-ci est devenue par la suite mondiale avec la participation de 
                    plus de 70 pays depuis 2019. La journée se déroule chaque année, au mois de juin.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/passage10.jpe">
                        </div>
                        <p class="text-muted text-center"><small>SNCF - logo</small></p>
                    </div>
                </div>
                <br>
                                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Les passages à niveaux sont des infrastructures où il faut être très vigilant car 
                        la moindre erreur peut avoir de grandes répercussions.</li>
                    <li>La chose à ne pas faire en cas de passage à niveau, c'est de s'engager si la voie 
                        est encombrée de l'autre côté. La chose à faire si vous êtes bloqués sur la voie 
                        est d'enfoncer la barrière !</li>
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