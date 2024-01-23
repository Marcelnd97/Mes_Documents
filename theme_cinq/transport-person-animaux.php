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
    <title>Le transport des personnes et des animaux</title>
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
                <h1 style="font-weight: bold;"><b>Le transport des personnes et des animaux</b></h1>
                <br>
                <p>Vous êtes responsables de vos passagers. Cela veut dire que vous devez vous assurer :</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>qu'ils soient assis à une place ;</li>
                    <li>qu'ils soient attachés avec une ceinture ;</li>
                    <li>qu'ils ne vous entravent pas la visibilité ;</li>
                    <li>qu'ils ne vous influencent pas dans la conduite ;</li>
                    <li>qu'ils soient maximum 8 dans le véhicule que vous conduisez (maximum autorisé).</li>
                </ol>
                <p>Pendant la conduite, il faut s'assurer que vous ne freinez pas 
                    ou ne prenez pas trop brusquement les virages. Proposez-leur une pause au minimum toutes
                     les 2 heures, elle fera du bien à tous.</p>
                <p>Avant un long trajet pensez à prévoir des activités pour les enfants, 
                    car s'ils commencent à s'ennuyer ils pourraient vous distraire. Pensez aussi à faire
                     des pauses et à leur préparer de quoi manger et boire. S'ils sont nauséeux en voiture 
                     (ce qui peut arriver sur un long trajet sur les routes sinueuses), évitez une conduite
                      brusque et sportive. Roulez tranquillement, sans à-coup. Prévoyez un départ décalé, 
                      lorsque la circulation est fluide.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_cinq/transport1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Activité pour enfant en voiture  </small></p>
                    </div>
                </div>
                <h2 style="font-weight: bold;">Transport des animaux</h2>
                <p>Les réactions des animaux peuvent être brusques et imprévues. En voiture, c'est la même 
                    chose : ils peuvent vous sauter dessus, se glisser entre vos jambes, même être malades.</p>
                <p>Il existe plusieurs façons de transporter votre animal pour la sécurité de tous. Vous pouvez :</p>
                <ol style="list-style-type: disc;">
                    <li>attacher votre animal avec une ceinture spécifique,</li>
                    <li>placer votre animal dans une caisse de transport adaptée à sa taille 
                        (pensez à attacher la caisse pour la sécurité de votre animal et la vôtre),</li>
                    <li>utiliser un filet ou des barres de protections si vous placez votre 
                        animal dans le coffre (en ayant enlevé la plage arrière).</li>
                </ol>
                <p>Et en cas d'accident, les secouristes vont d'abord devoir maitriser l'animal 
                    pour vous secourir en sécurité et rapidement. Pendant ce temps, votre vie peut être en jeu.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Les animaux n’aiment pas tellement être attachés et expriment en général leur mécontentement
                         (miaulement, aboiements…), ce qui devient vite stressant pour le conducteur. Essayez donc d’habituer le plus tôt 
                        possible votre animal de compagnie à voyager dans de bonnes conditions de sécurité.</p>
                    </div>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Vous êtes responsables de vos passagers pendant la conduite.</li>
                   <li>Les passagers doivent se plier aux règles d'être attachés et de ne pas gêner 
                    le conducteur en aucun cas.</li>
                   <li>Vous pouvez transporter 8 passagers maximum à condition que chacun ait une place 
                    (officiellement notées sur la carte grise).</li>
                   <li>Les enfants peuvent vous distraire sans vouloir, pensez à les occuper pendant la conduite.</li>
                   <li>Les petits animaux sont placés dans les cages et les grands dans le coffre, derrière un filet.</li>
                   <li>Les animaux peuvent avoir des gestes imprévisibles.</li>
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