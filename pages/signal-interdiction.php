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
                <h1 style="font-weight: bold;"><b>La signalisation d'interdiction</b></h1>
                <br> 

                <h3><b>Interdit de s'arrêter et de stationner</b></h3>
                <P>S'arrêter pour faire monter ou descendre des passagers, 
                  même un temps très court, n'est pas toujours possible . Pourquoi ?</p>
                <p>Si votre réponse est "Pour des raisons de sécurité" ou "Ça risque de gêner la circulation", je dis bravo !</p>
                <div class="card question">
                    <div class="card-body">
                      <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                      <p>Par conséquent, comment pensez-vous être avertis de l'interdiction ?</p>
                    </div>
                </div>
                
                
                
                
                <p>L'interdiction de s'arrêter sera signalée :</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>grâce au marquage au sol ;</li>
                    <li>grâce aux panneaux ;</li>
                    <li>aucunement (absence de signalisation) mais en présence de danger évident.</li>
                </ol>
                <p><b>Présence de signalisation</b></p>
                <p>L'interdiction de s'arrêter et de stationner se manifeste grâce à 
                une ligne jaune continue comme sur la photo ci-dessous :</p>
                <div class="card senscirc">
                    <img src="../images/interditdarreter.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Interdiction de s'arrêter : Marquage au sol</small></p>
                
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Remarquez que cette ligne jaune est permanente !</p>
                    </div>
                </div>
                <br>
                
                <p>Autrement, vous verrez ce panneau qui signifie que l'arrêt et le stationnement sont interdits.</p>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/interdicstation.jpg" width="100px;">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Panneau d'interdiction de stationner et de s'arrêter</small></p>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>La ligne jaune continue a autant d'importance que le panneau. La ligne peut remplacer le panneau et vice versa.</p>
                    </div>
                </div>
                <br>
                <p>Ce qu'il faut savoir aussi, et qui n'est pas explicitement dit, 
                    c'est que la signalisation interdisant l'arrêt s'applique dans la rue ou sur le trottoir :</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>dans le sens de la marche ;</li>
                    <li>jusqu'à la prochaine intersection.</li>
                </ol>
                <p  class="text-muted"><b>Panonceaux relatifs à l'arrêt</b></p>
                <p>Ne soyez pas surpris de voir un panonceau compléter le sens d'un panneau. 
                    Je vous laisse deviner le sens du panonceau ci-dessous :</p>
                <div class="card senscirc">
                    <img src="../images/panoceaurelatifdistance.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panonceau relatif à la distance</small></p>
                
                <p><b>Réponse : </b>Arrêt et stationnement interdits au-delà du panneau jusqu'à la prochaine intersection.</p>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Autrement dit, là où se trouve la voiture que vous conduisez à cet instant précis, 
                        la règle ne s'applique pas car vous vous situez avant le panneau. L'interdiction s'applique après le panneau.</p>
                    </div>
                </div>
                <br>
                <p>Voici la liste des panonceaux les plus courants :</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Panonceaux relatifs à la distance</li>
                </ol>
                <div class="card question">
                    <div class="card-body">
                      <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                      <p>Avant de prendre connaissance de leur sens, essayez de les anticiper par vous-même :</p>
                    </div>
                </div>
                <div class="card senscirc">
                    <img src="../images/pannocodistinterdic.jpg" height="600px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panonceaux qui s'appliquent à la 
                    distance d'interdiction d'arrêt</small></p>
                
                <p><b>Voici la réponse :</b></p>
                <ol>
                    <li>de part et d'autre du panneau ;</li>
                    <li>au-delà de ce panneau et pendant 50 m ;</li>
                    <li>jusqu'à ce panneau ;</li>
                    <li>au-delà du panneau .</li>
                </ol>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Astuce pour mieux retenir l'info : Pour savoir lire le sens des flèches du panneau, 
                        couchez le panneau dans le sens de la marche ! </p>
                    </div>
                </div>
                <br>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Panonceaux relatifs à une certaine catégorie d'usagers
                        L'arrêt et le stationnement ne seront pas interdits à tous les usagers de la route, 
                        alors il ne faut pas négliger les panonceaux qui vont préciser pour qui c'est interdit 
                        et pour qui ça ne l'est pas.</li>
                </ol>
                <div class="card question">
                    <div class="card-body">
                      <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                      <p>Si le panneau est accompagné d'un de ces panonceaux, que comprenez-vous ?</p>
                    </div>
                </div>
                <div class="card senscirc">
                    <img src="../images/interdicreferncusager.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Interdictions se référant à des usagers</small></p>
                <ol>
                    <li><b>Le premier autorise les conducteurs ayant le label "autopartage" tant de s'arrêter que de stationner. 
                        Mais pas les autres ;</b></li>
                    <li><b> Le panonceau représentant le camion précise que c'est interdit aux véhicules affectés au transport de marchandises. 
                        Mais pas aux autres ;</b></li>
                    <li><b>Le troisième panonceau interdit l'arrêt et le stationnement à tous les usagers, 
                        sauf aux personnes titulaires de la carte européenne ;</b></li>
                    <li><b>Le quatrième panonceau interdit l'arrêt aux remorques ou aux caravanes. Mais pas aux autres.</b></li>
                </ol>
                <h4><b>S'arrêter ou stationner en cas d'absence de signalisation</b></h4>
                <p>Arrêts et stationnements sont considérés dangereux lorsque la visibilité est insuffisante, 
                    mais aussi lorsque l'environnement est hostile, voire incompatible avec un arrêt impromptu.</p>
                <div class="card question">
                    <div class="card-body">
                      <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                      <p>Essayez de penser à toutes les situations concernées.</p>
                    </div>
                </div>
                <p><b>Voici la réponse :</b></p>
                <p>Il est interdit de s'arrêter ou stationner :</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>à proximité d'une intersection, d'un passage à niveau, d'un virage, d'un sommet de côte ou même sur un pont ! 
                        En agglomération cela semble évident, mais je préfère que vous soyez au courant dès le début !</li>
                    <li>sur les trottoirs, passages ou accotements réservés aux piétons ;</li>
                    <li>sur les voies, pistes ou bandes réservées aux cycles, bus, taxis, véhicule du type ambulance ou police, 
                        véhicules lents, véhicules faisant le covoiturage ;</li>
                    <li>aux emplacements réservés aux G.I.G. (Grand Invalide de Guerre), 
                        G.I.C. (Grand Invalide Civil) ou services de transports publics ;</li>
                    <li>si vous risquez de masquer les feux ou les panneaux de signalisation ;</li>
                    <li>à moitié sur la chaussée, à moitié sur le trottoir. 
                        Cela peut entraver la marche des piétons ou les obliger à marcher sur la chaussée ;</li>
                    <li>si vous bloquez l'accès à un véhicule stationné correctement ;</li>
                    <li>si vous obligez les autres conducteurs à chevaucher une ligne continue ;</li>
                    <li>dans un tunnel ;</li>
                    <li>si vous gênez l'accès à une bouche d'incendie ou à une installation souterraine ;</li>
                    <li>dans les zones de rencontre ou aires piétonnes, en dehors des emplacements aménagés 
                      (nous en parlerons en détail dans la partie 2 de ce cours).</li>
                    <li>à contre sens car c'est dangereux. Avant de repartir, 
                      il faut prendre en compte les véhicules arrivant en face et derrière.</li>
                </ol>
                <p><b>S'arrêter de nuit ou par mauvaise visibilité</b></p>
                <p>Sur une chaussée non éclairée, il est dangereux de stationner sans allumer l'éclairage. 
                  Il faut donc allumer le feu de stationnement côté circulation (ou les feux de position).</p>
                <h4><b>Interdit de stationner, mais arrêt autorisé</b></h4>
                <div class="card question">
                    <div class="card-body">
                      <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                      <p>Étant donné que vous connaissez à présent les notions de base sur l'interdiction de s'arrêter, 
                        avez-vous des idées sur le marquage au sol et les panneaux à rencontrer lorsqu'il 
                        s'agit des interdictions de stationner ?</p>
                    </div>
                </div>
               
                <p><b>Réponse :</b> La ligne qui interdit le stationnement est jaune comme celle qui interdit 
                  l'arrêt et le stationnement. Notez la seule différence : <b>elle est discontinue.</b> 
                  La règle s'applique jusqu'à la prochaine intersection, 
                  tout comme dans le cas de l'interdiction d'arrêt. Observez la photo ci-dessous :</p>
                <div class="card senscirc">
                  <img src="../images/marqstationinter.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Marquage au sol : stationnement interdit, arrêt autorisé</small></p>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Avec le panneau ci-dessous le stationnement est interdit mais l'arrêt est autorisé !</p>
                    </div>
                </div>
                <br>
                <div class="card senscirc">
                  <img src="../images/paninterstation.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneau d'interdiction de stationner</small></p>
                
                <br>
                <p>Notez bien la différence entre les deux panneaux : celui qui interdit le stationnement (mais autorise l'arrêt) 
                  ne contient qu'une seule rayure rouge, comme une sorte de diagonale 
                  partant à 11 heures et se terminant vers 17 heures (on dirait qu'il est 16 h 50 sur le panneau, non ?)</p>
                <p><b>Panonceaux relatifs à la distance de stationnement</b></p>
                <p>Les mêmes panonceaux de distance s'appliquent pour le stationnement donc je ne vais pas me répéter. 
                  Je joins juste une image pour l'illustrer :</p>
                <br>
                <div class="card senscirc">
                  <img src="../images/panpreisdiststation.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panonceau précisant la distance à laquelle 
                  s'applique l'interdiction de stationner </small></p>
                <p><b>Panonceaux relatifs à une certaine catégorie d'usagers</b></p>
                <p>Tout comme dans l'interdiction de s'arrêter, l'interdiction de stationner va viser des 
                  catégories d'usagers autorisés à stationner ou non.</p>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Je ne vais donner qu'un seul exemple. Ce sera à vous de bien lire les panneaux une fois le permis en poche, 
                      car il est impossible de couvrir tous les cas de figure existants.</p>
                    </div>
                </div>
                <br>
                <p>Par exemple, certains véhicules peuvent être exemptés de 
                  la règle comme les les véhicules électriques sur la photo ci-dessous :</p>
                <div class="col">
                  <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/interstatio-casspecific.jpg" width="100px;">
                    </div>
                  </div>
                </div>
                <p class="text-muted text-center"><small>Interdiction de stationner : cas spécifiques</small></p>
                
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Point à retenir : Vous avez le droit de stationner 7 jours maximum à un seul endroit, 
                      autrement c'est considéré comme abusif. Si l'on vous découvre, vous aurez droit à une amende.</p>
                    </div>
                </div>
                <br>
                <p>N'oubliez pas que vous n'avez le droit ni de vous arrêter ni de stationner sur certains marquages 
                  au sol commes les damiers ou emplacements de bus:</p>
                <div class="card senscirc">
                  <img src="../images/stationIntlignebus.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Lignes de bus et le damier : arrêts et stationnements interdits</small></p>
                <div class="card question">
                    <div class="card-body">
                      <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                      <p>Vous rappelez-vous des autres marquages au sol que nous avons vus interdisant l'arrêt et le stationnement ?</p>
                    </div>
                </div>
                <br>
                <p><b>Réponse :</b> Sur les chevrons, les voies de bus et de vélos, les voies d'insertion ou d'accélération.</p>
                <p>N'oubliez pas que le panneau ci-dessous se réfère seulement aux véhicules en mouvement, 
                  donc il ne met pas fin à l'arrêt et au stationnement interdit !</p>
                <div class="col">
                  <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/interstationenvigueur.jpg" width="300px;">
                    </div>
                  </div>
                </div>
                <p class="text-muted text-center"><small>Interdictions toujours en vigueur pour les arrêts et les stationnements</small></p>
                
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Différenciez bien les panneaux qui désignent les deux interdictions. Ils sont similaires (Stationnement 
                  interdit est rayé du type 16 h 50 alors qu'Arrêt et stationnement interdit contient une autre 
                  diagonale de l'autre côté formant une croix) :</li>
                </ol>
                <div class="col">
                  <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/arretstationinter-vs-stationinterdit.jpg" width="200px;">
                    </div>
                  </div>
                </div>
                <p class="text-muted text-center"><small>Arrêt et stationnement interdit vs.Stationnement interdit</small></p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                  <li>L'arrêt interdit englobe aussi la notion du stationnement interdit.</li>
                  <li>Que ce soit pour s'arrêter ou pour stationner, les interdictions sont communiquées grâce aux 
                    signalisations verticale et horizontale ou sont implicites (absence de signalisation).</li>
                  <li>Le marquage au sol est jaune (ligne continue ou discontinue), les panneaux sont souvent 
                    accompagnés de panonceaux pour préciser les restrictions.</li>
                  <li>Les panonceaux précisent les interdictions .</li>
                  <li>L'absence de signalisation se réfère aux interdictions de s'arrêter ou stationner aux endroits dangereux 
                    (passages piétons, tunnels, les voies de bus ou de taxis, etc).</li>
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