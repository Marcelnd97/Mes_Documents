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
    <link rel="stylesheet" href="../pages/assets/style.css">
    <title>Les panneaux de direction</title>
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
                <h1 style="font-weight: bold;"><b>Les panneaux de direction</b></h1>
                <br>
                <h2 style="font-weight: bold;"><b>Code couleur</b></h2>
                <p>Une fois que vous avez quitté une agglomération et êtes sur une route, 
                    quelle que soit sa nature, vous allez devoir suivre une direction. 
                    Nous verrons cela en détail dans le chapitre suivant, 
                    je vais évoquer ici seulement quelques généralités.</p>
                <div class="card question">
                    <div class="card-body">
                        <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                        <p>En voyant les panneaux ci-dessous, que remarquez-vous ?</p>
                    </div>
                </div>
                <br>
                
                
                <div class="card senscirc">
                    <img src="../images/couleurpanetsens.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Couleur des panneaux et leur sens </small></p>
                
                <p><b>Réponse : </b> Leurs couleurs sont différentes et chacune a un sens bien particulier.</p>
                <ol>
                    <li>Le <b>bleu</b> indique un itinéraire empruntant une autoroute.</li>
                    <li>Le <b>vert</b> indique un itinéraire principal reliant des villes importantes.</li>
                    <li>Le <b>blanc</b> précise des itinéraires secondaires et des localités proches.</li>
                    <li>Le <b>jaune</b> informe d'un itinéraire temporaire.</li>
                </ol>
                <h2 style="font-weight: bold;"><b>Panneaux de direction : indications</b></h2>
                <p>La couleur n'est pas le seul indicateur à prendre en compte pour décoder le sens d'un panneau. 
                    En effet, l'information renseignée dessus va être annoncée plusieurs fois en amont pour que vous puissiez, 
                    non seulement vous rattraper en cas d'erreur, mais aussi vous préparer à la prise de décision.</p>
                <ol style="list-style-type: disc;">
                    <li>Les panneaux de <b>présignalisation</b> annoncent une direction et sont de forme <b>rectangulaire</b>. 
                        Ce qu'il faut retenir, c'est qu'ils annoncent une direction bien en amont.</li>
                </ol>
                <p>Pour prendre l'autoroute A 75, il faut que vous rouliez encore tout droit. 
                    Pour aller à Aurillac et à Massiac il faut tourner à droite à la prochaine intersection :</p>
                    
                <div class="card senscirc">
                    <img src="../images/pandirectsurroute.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux de directions sur les routes</small></p>
                
                <div class="card question">
                    <div class="card-body">
                        <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                        <p>Voyons l'exemple d'un carrefour à sens giratoire sur la photo ci-dessous. 
                            À votre avis, où est-il positionné ? 
                            De quelles informations disposez-vous ?</p>
                    </div>
                </div>
                <div class="card senscirc">
                    <img src="../images/carefoursensgiratoir.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Carrefour à sens giratoire</small></p>
                <p><b>Réponse :</b> Comme c'est marqué 150 m en bas à droite, cela veut 
                dire que c'est une présignalisation d'un carrefour que vous rencontrerez dans 150 m. 
                Ces intersections sont annoncées plus tôt pour faciliter la prise de décision.</p>
                <ol style="list-style-type: disc;">
                    <li>Les panneaux de <b>position</b> sont de forme <b>rectangulaire, terminés par une pointe de flèche.</b> 
                        Ils sont placés après le carrefour de manière à ce que vous puissiez anticiper 
                        une éventuelle manœuvre avant le panneau.</li>
                </ol>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/panposition.jpg" width="300px;">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Panneaux de position</small></p>
                <p>Si vous voulez savoir combien de kilomètres il vous reste à faire pour atteindre votre destination, 
                    le chiffre qui est sur le panneau vous le renseigne. Voyons l'exemple du chemin pour aller à 
                    Briançon de la photo ci-dessous. Il vous reste à parcourir 53 km par la route départementale
                     et il faut tourner à gauche pour y aller :</p>
                <div class="card senscirc">
                    <img src="../images/directasuivre.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Directions à suivre</small></p>
                
                <p>Comme vous pouvez le voir, vous avez aussi d'autres informations qui peuvent ou non vous concerner. 
                    Les panneaux en blanc sont des directions vers des lieux proches</p>
                <ol style="list-style-type: disc;">
                    <li>Les panneaux de <b>confirmation</b> sont implantés sur le <b>côté droit de la chaussée 
                        (mais peuvent aussi se trouver à gauche)</b> et comportent le nombre de kilomètres à 
                        parcourir pour atteindre les mentions indiquées. Ils sont numérotés d'un cartouche 
                        précisant la catégorie et le numéro de route sur laquelle vous roulez.</li>
                </ol>
                <div class="card question">
                    <div class="card-body">
                        <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                        <p>À votre avis, comment faut-il lire ces panneaux ?</p>
                    </div>
                </div>
                
                <br>
                <div class="card senscirc">
                    <img src="../images/panoconfirmation.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux de confirmation </small></p>
                
                <p><b>Réponse :</b> Vous êtes sur la Nationale 7 (cartouche en haut des panneaux) 
                    et pour rejoindre l'autoroute A 89 (encart) il vous reste 1,5 km à parcourir. 
                    Pour aller à Clermont-Ferrand vous pouvez emprunter une autoroute qui sera signalée
                     plus loin ou vous pouvez continuer par la route, et auquel cas il vous reste 148 km. 
                     Ce sera la même chose pour Roanne. Tarare et L'Arbresle peuvent être atteints par l'autoroute, 
                    autrement ils sont à 31 et 10 km. Lentilly est à 4 km.</p>
                <h2 style="font-weight: bold;">Visites culturelles : panneaux de couleur marron </h2>
                <div class="card question">
                    <div class="card-body">
                        <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                        <p>Parmi ces 5 panneaux, lesquels donnent la direction et lesquels 
                            localisent une curiosité touristique ?</p>
                    </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="../images/directionsiteculturel.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Directions et sites culturels</small></p>
                <p><b>Réponse:</b>Les panneaux 1 et 2 localisent le début et la fin d'un itinéraire 
                    touristique tandis que les autres indiquent la direction à suivre pour atteindre les curiosités.</p>
                <h2 style="font-weight: bold;">Panneaux de changement de direction</h2>
                <div class="card question">
                    <div class="card-body">
                        <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                        <p>Sans connaître le sens exact de l'indication Bis ou S1 pour aller à Lille, 
                            que pouvez-vous dire de façon certaine de ces 2 panneaux ?</p>
                    </div>
                </div>
                <br>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/signalchangdirection.jpg" width="200px;">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Signalement d'un changement de direction</small></p>
                <p>Réponse : Étant donné que les panneaux sont jaunes, il s'agit d'une signalisation 
                    temporaire et donc d'un chemin temporaire. Voyons pourquoi existent ces panneaux :</p>
                <p><b>Réponse :</b> Étant donné que les panneaux sont jaunes, 
                il s'agit d'une signalisation temporaire et donc d'un chemin temporaire. Voyons pourquoi existent ces panneaux :</p>
                <ol>
                    <li>Le panneau signalant un itinéraire Bis permet d'atteindre la même destination que le panneau vert par exemple. 
                        Seulement, si l'itinéraire est bis (ce qui veut dire deuxième) cela veut dire qu'il passe par des routes moins
                         fréquentées. Les itinéraires bis permettent 
                        de répartir le trafic lors des périodes de fortes fréquentations, comme les vacances d'été par exemple.</li>
                    <li>Les itinéraires S ou de substitution sont mis en place pour désengorger le trafic sur une autoroute si 
                        les travaux sont trop importants et risquent de ralentir la circulation. Le fléchage est réalisé en plaçant 
                        un symbole substitution dans les panneaux de direction. Parfois, 
                        il peut y avoir plusieurs itinéraires de substitution : S1, S2, S3 etc.</li>
                </ol>
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Les panneaux de direction informent par répétition pour permettre à 
                        l'usager de ne pas manquer les informations.</li>
                    <li>Il existe des panneaux de présignalisation, d'annonce et de confirmation.</li>
                    <li>Le code couleur des panneaux permet de distinguer les différentes routes et leur nature
                         (itinéraire de substitution par exemple).</li>
                    <li>La vitesse temporaire est posée par terre, mais le panneau ne change pas de couleur.</li>
                    <li>La façon dont l'information est agencée sur les panneaux marron vous indiquera 
                        l'itinéraire vers les lieux touristiques ou leur présence.</li>
                </ol>
                <br>
          </div>
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