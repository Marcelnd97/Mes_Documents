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
        include("header.php");
    ?>
    <section>
      <br><br><br><br>

      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-10" style="padding-left: 25%;">
                <h1 style="font-weight: bold;"><b>Stationnement contrôlé par disque</b></h1>
                <br>
                <P>Avant d'énumérer les conditions sous lesquelles vous allez pouvoir stationner votre véhicule, 
                    il faut que vous appreniez à faire la différence entre deux notions :</p>
                <ol>
                    <li> Il existe des panneaux qui concernent <b>une rue seulement</b> comme c'est le cas de la photo ci-dessous. 
                        Le panneau est donc rond, bleu et est rayé comme s'il était 16 h 50.</li>
                </ol>
                <div class="card senscirc">
                    <img src="./images/panstationruinterd.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneau qui interdit le stationnement dans une rue</small></p>
                
                <ol>
                    <li>Il existe aussi des panneaux qui concernent toute une zone. Ils reprennent le symbole bleu et rouge, 
                        sauf qu'ils sont intégrés sur un panneau carré. Quand ces panneaux sont en couleur, 
                        ils symbolisent l'entrée de zone. En noir et blanc, la sortie de zone.</li>
                    
                </ol>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="./images/enter-et-sortie-zone.jpg" width="200px;">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Entrée et sortie de zone</small></p>
                
                <p><b>Stationnement payant à durée limitée</b></p>
                <p>Qu'il s'applique à une seule rue ou à toute une zone, très souvent il s'agit d'un stationnement payant. 
                    Il faut donc prendre un ticket à un horodateur. C'est une machine qui ressemble à cela :</p>
                <div class="card senscirc">
                    <img src="./images/horodateur-ticket.jpg" height="500px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Prenez un ticket à l'horodateur</small></p>
                
                <p>Voici les panneaux vous obligeant à payer pour stationner votre véhicule, 
                    qu'ils concernent une rue, une zone ou un horaire bien précis :</p>
                <div class="card senscirc">
                    <img src="./images/stationpayant.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Stationnement payant</small></p>
                <ol>
                    <li>Entrée de zone payante</li>
                    <li>Sortie de zone payante</li>
                    <li>Stationnement payant avec horodateur</li>
                </ol>
                <p>De nos jours, il est aussi possible de payer directement avec son téléphone.
                     A vérifier, selon le modèle du téléphone.</p>
                <p>Dans certaines villes, des horodateurs portables individuels sont utilisés : 
                    ce sont des boîtiers électroniques qui s'accrochent au rétroviseur. 
                    Une carte à puce fait office de porte-monnaie car elle est approvisionnée avec des unités.</p>
                <p>Une fois que vous avez payé pour votre ticket, l'heure limite de stationnement y est inscrite. 
                    Pensez à placer le ticket à l'intérieur de la voiture, 
                    derrière le pare-brise, pour qu'il soit bien visible de l'extérieur.</p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Ne négligez pas le marquage au sol : notez que le mot PAYANT est parfois inscrit par terre.</p>
                    </div>
                </div>
                <br>
                <p><b>Stationnement gratuit à durée limitée (contrôlé par disque)</b></p>
                <p>Avant toute chose, il faut que vous ayez le disque dans la voiture. 
                    C'est un petit bout de carton de couleur bleue. Vous pouvez en avoir un gratuitement (normalement) 
                    dans une station service ou sinon l'acheter à moindre coût dans les établissements spécialisés. 
                    Il ressemble à cela :</p>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="./images/disque-a-avoir.jpg" width="200px;">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Disque à avoir dans la voiture</small></p>
                
                <br>
                <p>Ensuite, il faut que vous preniez connaissance de la durée autorisée sur le panneau 
                    d'entrée de zone et vous devez placer le disque derrière le pare-brise indiquant 
                    l'heure à laquelle vous êtes arrivés.</p>
                <p>Souvent, le disque qui est bleu, va de pair avec un marquage au sol qui, lui aussi, est bleu. 
                    Cela s'appelle la <b>zone bleue</b>. Il s'agit des emplacements qui sont mis en valeur 
                    par un marquage bleu au sol.</p>
                <p>La durée de stationnement autorisée est normalement de 1 heure 30 entre 9 h et 19 h (libre de 11 h 30 à 14 h 30). 
                    Mais les horaires peuvent changer selon les villes.</p>
                <div class="card senscirc">
                    <img src="./images/stationzoneblue.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Stationnement en zone bleue</small></p>
                
                <p>Le panneau que vous ne voyez pas dans le fond de la photo ci-dessus est celui-ci :</p>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="./images/sortiezonecontrole.jpg" width="200px;">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Sortie de zone contrôlée par disque</small></p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Si par hasard vous voyez les panneaux comme sur la photo ci-dessous, 
                        pas de panique ! Ce sont des anciens panneaux représentant une zone où l'on utilise le disque. 
                        Sa signification est identique à celle des panneaux actuels :</p>
                    </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="./images/logodisque.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Ancien logo représentant le disque</small></p>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Notez que vous devez utiliser le disque si votre rue se situe dans la zone bleue, 
                        même si vous êtes stationné devant votre propre garage. Pour éviter des amendes en cas d'oubli du disque, 
                        utilisez plutôt votre garage, non ?</p>
                    </div>
                </div>
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Le stationnement peut être payant ou gratuit et vous le saurez si vous faites 
                    attention au marquage au sol et aux panneaux.</li>
                    <li>Même si le stationnement est gratuit, vous devez vérifier si vous avez besoin d'un dispositif particulier 
                        (exemple: disque) ou si la place repérée est disponible et pendant combien de temps.</li>
                    <li>Si le stationnement est payant, vous allez pouvoir utiliser l'horodateur pour régler.</li>
                    <li>Si le stationnement est gratuit, mais requiert l'utilisation d'un disque, 
                        il faut acheter le disque et toujours le garder dans la boîte à gants.</li>
                </ol>
          </div>
        </div>
      </div>

    </section>

    <!--Le pied de la page-->
    <?php
    // <!--Le pied de la page-->
        include("footer.php");

        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("script_link.php");
    ?>
</body>
</html>