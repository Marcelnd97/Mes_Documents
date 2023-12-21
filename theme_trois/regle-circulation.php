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
    <title>Les règles de circulation</title>
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
                <h1 style="font-weight: bold;"><b>Les règles de circulation</b></h1>
                <br>
                <h2 style="font-weight: bold;">Différents espaces</h2>
                <p>Sur autoroute, en raison de l'infrastructure et des vitesses pratiquées, 
                    des règles spécifiques doivent être respectées. Comme vous pouvez le voir sur 
                    la photo ci-dessous, les voies sont plutôt droites, mais parfois il existe des virages. 
                    Ils ne sont pas importants et ne vous obligeront pas à ralentir comme sur les routes en montagne, 
                    donc il n'y aura pas de signalisation relative à ce point, ou très peu.</p>
                <p>Observez l'environnement de la photo ci-dessous et repérez-vous :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/circuler1.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Différents espaces sur autoroute</small></p>
                
                    </div>
                </div>
                <p>1. Bretelle d'accès</p>
                <p>2. Bretelle de sortie</p>
                <p>3. Voie d'insertion (d'accélération)</p>
                <p>4. Voie de décélération</p>
                <p>5. Bande d'arrêt d'urgence (BAU)</p>
                <p>6. Terre plein central</p>
                <p>7. Glissière de sécurité</p>
                <p>8. et 9. Deux chaussées à sens unique</p>
                <h2 style="font-weight: bold;">Positionnement sur la chaussée</h2>
                <p>En marche normale, vous devez circuler sur la voie la plus à droite (partie n°9 sur la photo),
                     mais pas sur la bande d'arrêt d'urgence (partie n°5). Cette dernière est prévue seulement en
                      cas de panne. La voie d'insertion est réservée exclusivement à l'accélération et à l'insertion. 
                      La voie de gauche est la voie réservée aux dépassements.</p>
                 <p class="text-muted text-center"><small >Rue à sens unique</small></p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Les poids lourds (véhicules de plus de 3,5 t ou de plus de 7 m de long) ne doivent jamais 
                        circuler dans la voie la plus à gauche (n°8 de la photo ci-dessus).</p>
                    </div>
                </div>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Rouler à gauche sur autoroute sans raison est passible d'une amende !</p>
                    </div>
                </div>
                <br>
                <p><b>Marquage au sol</b></p>
                <p>Rien que vous ne connaissiez déjà : les lignes discontinues séparent les voies 
                    (la gauche de la droite) et les lignes qui séparent la voie de droite de l'accotement délimitent 
                    la bande d'arrêt d'urgence.</p>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Vous souvenez-vous de leurs dimensions ?</p>
                  </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/lignemedianesuroute.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Ligne de séparation des voies sur route</small></p>
                
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/lignerivsurautoroute.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Ligne délimitant la bande d'arrêt d'urgence (BAU)</small></p>
                
                    </div>
                </div>
                
                <p>Comme vous le savez déjà, l'arrêt sur cette dernière est strictement interdit sauf en cas de panne.</p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Les lignes de la bande d'arrêt d'urgence contiennent une sorte de mini dos-d'ânes en forme 
                        de traits et servent à empêcher le conducteur de s'endormir si celui-ci roule dessus.</p>
                    </div>
                </div>
                <br> 
                <p>La seule voie qui existe sur les autoroutes et non pas sur les routes est 
                    <b>la voie réservée aux véhicules lents</b>.
                     C'est une voie supplémentaire, située à droite et elle est délimitée par une ligne discontinue large.</p> 
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Si vous ne roulez pas à plus de 60 km/h, vous devez l'emprunter.</p>
                    </div>
                </div>
                <p>Si vous roulez à plus de 60 km/h, vous ne devez pas l'utiliser. Elle débute souvent en bas 
                    d'une côte et se termine en haut. 
                    Cette voie est indiquée par un panneau rond à fond bleu et inscriptions blanches :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 500px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/circuler2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voie pour véhicules lents</small></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/lignederivesurroute.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voie pour véhicules lents - dimensions</small></p>
                    </div>
                </div>
                <p>N'oubliez pas qu'il est interdit de circuler sur le "zèbras" :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/circuler3.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Interdiction de circuler et de s'arrêter sur le</small></p>
                    </div>
                </div>
                <p>Sur autoroute, il est également interdit de :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/circuler4.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Manœuvres interdites sur autoroute</small></p>
                    </div>
                </div>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>faire demi-tour et conduire dans le sens contraire (voir schéma ci-dessous, manœuvre n° 1) ;</li>
                    <li>faire marche arrière et prendre une sortie que vous aurez ratée (manœuvre n°2) :</li>
                    <li>dépasser les voitures par la droite (par la BAU), manœuvre n°3 ;</li>
                    <li>faire demi-tour sur le terre plein central (manœuvre n°4).</li>
                </ol>
                <h2 style="font-weight: bold;">Restrictions temporaires de circulation</h2>
                <p>Les interdictions générales et complémentaires de circuler concernent les véhicules
                     ou ensembles de véhicules de plus de 7,5 tonnes de poids total autorisé en charge, 
                     affectés aux transports routiers de marchandises dangereuses et non dangereuses, 
                     à l’exclusion des véhicules spécialisés et des matériels et engins agricoles.</p>
                <p><b>Interdictions permanentes de circuler en France : la règle générale </b></p>
                <p>Les poids lourds de plus de 7,5 tonnes de PTAC (Poids Total Autorisé en Charge)
                     n’ont pas le droit de circuler :</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>le samedi à partir de 22h jusqu’au dimanche 22h ;</li>
                    <li>les veilles de jours fériés à partir de 22h jusqu’au lendemain 22h ;</li>
                    <li>les samedis fériés, de 00h à 24h ;</li>
                    <li>les dimanches veille de jours fériés, de 00h à 24h.</li>
                </ol>
                <p><b>Restrictions de circulation spécifiques en région parisienne </b></p>
                <p>Pour la région Île-de-France, les interdictions supplémentaires 
                    suivantes s’ajoutent à la règle générale (hors les 5 samedis d’été) :</p>
                <p>Sens Paris -> Province</p>
                <p>Vendredi : de 16h à 21h</p>
                <p>Samedi : de 10h à 18h et de 22h à 24h</p>
                <p>Dimanche et jour férié : de 00h à 24h</p>
                <p>Veille de jour férié : de 16h à 24h</p>
                <p>Sens Province -> Paris</p>
                <p>Lundi et lendemain de jour férié : de 06h à 10h</p>
                <p>Samedi : de 22h à 24h</p>
                <p>Dimanche et jour férié : de 00h à 24h</p>
                <p>Veille de jour férié : de 22h à 24h</p>
                <br>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Vous entrez sur l'autoroute en vous insérant et ce faisant, vous n'avez pas la priorité.</li>
                    <li>Vous devez circuler sur le côté droit de la chaussée, mais pas sur l'extrême 
                        droite qui est la voie appelée BAU.</li>
                    <li>La BAU est réservée seulement aux cas extrêmes.</li>
                    <li>Il est interdit de : faire demi-tour, dépasser les voitures par la droite 
                        (en passant par la BAU), de franchir le terre-plein au milieu, de revenir en
                         arrière si vous avez loupé la sortie.</li>
                    <li>Les restrictions s'appliquent sur les poids-lourds, souvent le soir (à vérifier les horaires).</li>
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