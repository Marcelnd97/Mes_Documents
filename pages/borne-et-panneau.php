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
                <h1 style="font-weight: bold;"><b>Bornes et panneaux</b></h1>
                <br>
                <p>Si vous roulez dans une ville que vous connaissez, tout va bien. Mais si vous partez en voyage 
                    et devez savoir où vous vous situez, il faut apprendre à lire les indices. Aussi, en cas d'accident, 
                    il est très utile de savoir lire les informations renseignées sur les panneaux et sur les bornes.</p>
                <h3 style="font-weight: bold;">Types de routes</h3>
                <p>Elles sont classées par catégories, et s'alignent quelque peu sur la classification administrative :</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>route nationale ;</li>
                    <li>route départementale ;</li>
                    <li>route communale ;</li>
                    <li>route rurale ;</li>
                    <li>route forestière.</li>
                </ol>
                <p>Il n'existe pas de route régionale.</p>
                <p>En quittant Naucelles (voir photo ci-dessous), le numéro de la route est écrit sur une 
                    sorte de panonceau jaune : D 453.</p>
                <div class="card senscirc">
                    <img src="../images/sortiaglomeration.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Sortie d'agglomération</small></p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Ces panonceaux s'appellent des cartouches. Ils vous informent du numéro de 
                        la route sur laquelle vous vous trouvez. 
                        Les couleurs des cartouches varient selon la catégorie de route.</p>
                    </div>
                </div>
                <br>
                <p>Les cartouches des routes nationales sont rouges, ceux des routes départementales sont jaunes, 
                    ceux des routes communales et rurales sont blancs et ceux des routes forestières sont verts.</p>
                <p><b>Route départementale</b></p>
                <p>Je vais commencer par ce type de route, car je vous ai déjà donné un premier exemple avec Naucelles.
                     Ne soyez pas surpris de voir les bornes sur les accotements qui vous rappellent le numéro de 
                     la route sur laquelle vous vous trouvez :</p>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/bornederoute.jpg" width="200px;">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Borne de la route D 453</small></p>
                
                
                <p>Route nationale </p>
                <p>La borne désignant la route nationale est de couleur rouge.</p>
                <br>
                <div class="card question">
                    <div class="card-body">
                        <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                        <p>A votre avis, quelles seront les initiales pour une route nationale ? 
                            Que signifie l'anneau blanc sur le fond noir comme sur le pictogramme ci-dessous ? Que signifie le chiffre 12 ?</p>
                    </div>
                </div>
                <br>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/bornacoutement.jpg" width="200px;">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Borne située sur l'accotement</small></p>
                
                <p><b>Réponse :</b> Vous roulez sur la Nationale 203 et vous circulez au kilomètre 
                    12 de cette route. Vous êtes aussi actuellement sur la rocade.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Le nombre inscrit en noir, ici "12", désigne toujours le nombre 
                        de kilomètres depuis le début de la route.</p>
                    </div>
                </div>
                <br>
                
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>L'anneau blanc sur le fond noir peut également représenter la ceinture périphérique. 
                        Pour ceux qui ne connaissent pas ce terme, c'est généralement une voie rapide urbaine 
                        ou une voie de type autoroutier permettant à la circulation de transit de contourner une ville,
                         son centre-ville ou une agglomération et de relier les différentes autoroutes qui y aboutissent. 
                        On peut aussi l'appeler anneau périphérique.</p>
                    </div>
                </div>
                <br>
                <p><b>Autres routes </b></p>
                <ol style="list-style-type: disc;">
                    <b><li>Autres routes qui existent : communales, forestières, rurales. 
                        Elles auront comme initiales la lettre C, F ou R.</li></b>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <img src="../images/routeforest.jpg" width="200px;">
                                </div>
                            </div>
                        </div>
                        <p class="text-muted text-center"><small>Route forestière</small></p>
                    <b><li>Routes à accès réglementé </li></b>
                        <p>Une rocade ou encore des routes de liaison inter agglomérations peuvent être limitées à quelques 
                            catégories d'usagers. D'habitude, elles sont prévues seulement pour les véhicules motorisés. 
                            L'exemple de ce type de route peut être la voie rapide  
                            (2 fois 2 voies avec un terre-plein central au milieu) représentée par le schéma ci-dessous :</p>
                        <div class="card senscirc">
                            <img src="../images/chauseparersableplein.jpg" height="200px" class="senscirc">
                        </div>
                        <p class="text-muted text-center"><small>Route à chaussée séparée avec un terre plein au milieu</small></p>
                        <div class="card senscirc">
                            <img src="../images/routacceregle.jpg" height="200px" class="senscirc">
                        </div>
                        <p class="text-muted text-center"><small>Routes à accès réglementé</small></p>
                        
                        <p>La fin de ce type de route sera représentée par ce panneau :</p>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <img src="../images/finacceregle.jpg" width="200px;">
                                </div>
                            </div>
                        </div>
                        <p class="text-muted text-center"><small>Fin de route à accès réglementé</small></p>
                    <b><li>Autoroute</li></b>
                        <div class="card senscirc">
                            <img src="../images/voieautoroute.jpg" height="200px" class="senscirc">
                        </div>
                        <p class="text-muted text-center"><small>Voies d'autoroute</small></p>
                        <div class="card Informations bg-info">
                            <div class="card-body">
                            <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                            <p>Le nombre inscrit en noir, ici "12", désigne toujours le nombre 
                                de kilomètres depuis le début de la route.</p>
                            </div>
                        </div>
                </ol>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Il existe différents types de routes et donc différents types de bornes les caractérisant.</li>
                    <li>Les cartouches sont comme des panonceaux à part, tandis que les encarts 
                        sont incorporés sur les panneaux.</li>
                    <li>Les routes à chaussée séparée par un terre-plein central ont un aspect similaire aux autoroutes.</li>
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