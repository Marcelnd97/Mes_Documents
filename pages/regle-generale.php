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
              <h1><b>Les règles générales</b></h1>
              <br> 
              <h5><b>Comment circuler ?</b></h5>
              <p>Voyons les règles de circulation quant au positionnement sur la chaussée.</p>
              <p>Vous savez déjà que vous devez vous placer au milieu de la voie si vous êtes dans une rue à sens unique. 
                Dès que vous allez vous trouver sur un axe qui contient plusieurs voies, 
                la règle que vous connaissez également est de vous positionner sur celle qui est la plus à droite.</p>
              <h5><b>Intersection encombrée</b></h5>
                <div class="card question">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                        <p>Vous rappelez-vous la situation ci-dessous ? Que faut-il faire ?</p>
                    </div>
              </div>
              <br>
              <div class="card senscirc">
                <img src="../images/carefencombrer.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Intersection encombrée</small></p>
              <p><b>Réponse : </b>Si l'intersection est encombrée comme sur la photo, 
              que la voiture devant vous n'avance pas (ses feux arrière sont rouges) 
              vous ne devez pas avancer même si le feu vous y autorise. Mieux vaut patienter avant de passer pour désengorger l'axe, 
              sinon vous allez rester bloqué avec l'arrivée d'autres voitures
              </p>
              <p>Si le carrefour est encombré et qu'il n'y a pas de panneaux, la règle reste la même : 
                il ne faut pas s'engager si l'on risque de gêner la circulation (voir illustration ci-dessous). 
                Les voitures dont la trajectoire est tracée à l'aide de la flèche verte ont la priorité. En revanche, 
                celles qui ont mis le clignotant passent en premier car elles vont désengorger le trafic. 
                Si l'une des voitures qui est à l'arrêt bouge, elle risque de bloquer la circulation :
              </p>
              <div class="card senscirc">
                <img src="../images/interencombrer.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Intersection encombrée</small></p>
              
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Bloquer la circulation dans une intersection peut être sanctionné d'une amende !</p>
                </div>
              </div>
              <br>
              <h4><b>Circuler en file</b></h4>
              <p>Nous avons vu que pour circuler tout droit, il faut rester dans sa file, c'est-à-dire dans sa voie. 
                Vous pouvez changer de voie seulement si vous voulez changer de direction.</p>
              <p>Observez la photo ci-dessous. Vous devez vous avancer. 
                Dépasser les véhicules d'une autre file par la droite n'est pas considéré comme un dépassement :</p>
                <div class="card senscirc">
                <img src="../images/droite.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Continuer à droite</small></p>
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Quand on est sur une seule voie, on circule à droite de la chaussée voire au milieu.</li>
                    <li>Quand il y a plusieurs voies qui vont dans le même sens, on circule sur la voie la plus à droite. </li>
                    <li>En cas d'intersection encombrée, 
                        vous devez rester au feu même s'il est vert ou au Stop jusqu'à ce que le trafic se fluidifie.</li>
                        <li>Si vous êtes dans une file, restez dans la file sauf si vous souhaitez changer de direction.</li>
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