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
                <h1 style="font-weight: bold;"><b>Risques à connaître</b></h1>
                <br>
                <p>Comme nous l'avons déjà vu dans le chapitre précédent, les panneaux triangulaires annoncent 
                    le danger et ils permettent au conducteur de les anticiper. 
                    Les dangers signalés avec un panneau blanc et un encadré rouge et noir représentent le danger permanent.</p>
                <h3 style="font-weight: bold;">Dangers permanents : quelques généralités</h3>
                <p>Quand vous avez pris des notes à l'école, vous avez certainement appris à dessiner un triangle avec 
                    un point d'exclamation pour signaler une information importante. Sur la route, on se sert d'un panneau 
                    presque identique à ce fameux triangle pour signaler un danger. 
                    Celui-ci peut être précisé avec un panonceau ou alors renseigné par un panneau lumineux. Les voici :</p>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                        <img src="../images/dangerpresisounon.jpg" width="200px;">
                        </div>
                        </div>
                    </div>
                <p class="text-muted text-center"><small>Dangers précisés ou non</small></p>
                
                <br>
                <p>Le panneau n°1 ne précise pas la nature du danger, tandis que le n°2 annonce les arbres inclinés.</p>
                <p>La signalisation lumineuse ressemble à ce type de panneaux :</p>
                <div class="card senscirc">
                    <img src="../images/virageanoceavecpandynamic.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Virage annoncé avec un panneau dynamique</small></p>
                <p>Un autre panneau qui vous alertera des dangers permanents sera le risque de chute 
                    de pierres dans les régions montagneuses :</p>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                        <img src="../images/chutdepierre.jpg" width="200px;">
                        </div>
                        </div>
                    </div>
                <p class="text-muted text-center"><small>Risque de chute de pierres ou de présence des pierres 
                    tombées sur la chaussée</small></p>
                
                <p><b>Animaux</b></p>
                <p>Rouler sur les routes implique forcément le passage par les forêts où vivent des animaux sauvages, 
                    ou par des terrains ou fermes où se baladent les animaux domestiques.</p>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Observez bien les panneaux ci-dessous et réfléchissez à leur signification.</p>
                  </div>
                </div>
                <br>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                        <img src="../images/animausuroute.jpg" width="200px;">
                        </div>
                        </div>
                    </div>
                <p class="text-muted text-center"><small>Animaux sur la route </small></p>
                
                <p><b>Réponse :</b> Les panneaux n°1 et n°2 représentent le danger quant au passage des animaux domestiques ; 
                    le panneau n°3 englobe tous types d'animaux sauvages, et pas seulement les cerfs en image. 
                    Ce dernier panneau fait aussi référence aux sangliers, renards, lièvres, etc.</p>
                <p><b>Tronçons de route proches de l'eau</b></p>
                <p>Certains tronçons de route sont particulièrement dangereux car vous devrez passer sur un pont 
                    mobile ou sur une route qui débouche sur un quai. 
                    Si vous voyez l'un ou l'autre de ces panneaux, je vous conseille de ralentir :</p>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                        <img src="../images/routecouper.jpg" width="200px;">
                        </div>
                        </div>
                    </div>
                <p class="text-muted text-center"><small>Route coupée</small></p>
                <ol>
                    <li>Pont mobile</li>
                    <li>Débouché sur un quai ou une berge</li>
                </ol>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Pour découvrir tous les panneaux de danger sur la route, consultez les Annexes.</p>
                    </div>
                </div>
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="list-style-type: disc; margin-left: 10px;">
                    <li>Les dangers sur la route sont signalés avec les panneaux triangulaires.</li>
                    <li>Les dangers sur la route sont signalés avec les panneaux triangulaires.
                        Pensez au triangle avec le point d'exclamation pour faire le lien entre le danger et le panneau.</li>
                    <li>Les dangers sur la route sont signalés avec les panneaux triangulaires.
                        Pensez au triangle avec le point d'exclamation pour faire le lien entre le 
                        danger et le panneau.En agglomération, les panneaux de danger se trouvent à 50 m de celui-ci, 
                        tandis que sur les routes hors agglomération ils sont placés à 150 m avant le 
                        danger sauf si un panonceau indique le contraire.</li>
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