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
              <h1><b>Dépasser</b></h1>
              <br>
              <h3><b>Qu'est-ce que dépasser ?</b></h3>
              <p>C'est une manœuvre délicate surtout sur chaussée à double sens. Donc vous imaginez bien qu'en agglomération, 
                il faut être vraiment vigilant à cause de la densité de la circulation et des limitations de vitesse.</p>
              <p>Avant de parler des conditions des dépassements, voyons la base du déplacement.</p>
              <p>Le cas général, illustré sur le schéma ci-dessous, démontre que le dépassement s'effectue par la gauche. 
                    La voiture bleue dépasse la jaune :</p>
              <div class="card senscirc">
                <img src="../images/depaspratiquegeneral.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Dépassement : pratique générale </small></p>
              
              <h3><b>Règles de dépassement</b></h3>
              <p>Un dépassement est possible seulement si la signalisation l'autorise et que toutes 
                les conditions de sécurité sont réunies. Commençons par les interdictions : </p>
              <div class="card question">
                <div class="card-body">
                  <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                  <p>Vous rappelez-vous du marquage au sol qui interdit le franchissement de la ligne ?</p>
                </div>
              </div>
              <br>
              <b>Réponse :</b>
              <ol style="margin-left: 10px; list-style-type: disc;">
              <li>La <b>ligne continue</b> ne permet pas d'être franchie :</li>
              </ol>
              
              <div class="card senscirc">
                <img src="../images/despassementinterdit.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Dépassement interdit</small></p>
              
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>Le seul cas où elle peut être chevauchée est pour dépasser 
                    un cycliste à condition que la visibilité soit bonne.</p>
                </div>
              </div>
              <br>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>La <b>ligne d'annonce</b> aussi devrait dissuader de dépasser un véhicule 
                car 3 flèches plus tard, vous n'aurez plus le droit :</li>
              </ol>
              
              
              <div class="card senscirc">
                <img src="../images/depasvoiturlent.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Dépassement des véhicules lents</small></p>
              
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>La <b>ligne de dissuasion</b> comportant des pointillés serrés interdit le dépassement des véhicules à allure normale,
                     mais permet le dépassement de véhicules lents à condition que la visibilité soit bonne.</li>
                <li>Les <b>panneaux d'interdiction</b> bannissent le dépassement de tous les véhicules à moteur :</li>
              </ol>
              <div class="card senscirc">
                <img src="../images/interditdepasser.jpg" height="150px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Interdiction de dépasser</small></p>
              
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Attention, le premier panneau ne concerne pas les deux-roues sans side-car !</p>
                </div>
              </div>
              <br>
              <p>Et la fin d'interdiction symbolisée avec ce panneau :</p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/fininterditdepasser.jpg" width="200px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Ronds-points et leurs panneauxFin d'interdiction de dépasser</small></p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Vous n'avez pas le droit de dépasser dans les intersections où vous devez céder le passage 
                    (exception faite dans une priorité à droite, 
                    où vous pouvez dépasser un deux-roues (si personne n'est présent à droite)) ;</li>
              </ol>
              
              <div class="card senscirc">
                <img src="../images/depassestdanger.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Il est interdit et dangereux de dépasser </small></p>
              
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Tout dépassement est interdit (même celui des deux roues) sur 
                    les traversées de voies ferrées sans barrières :</li>
              </ol>
              
              <div class="card senscirc">
                <img src="../images/passageniveaudepassinterdit.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Il est interdit et dangereux de dépasser 
                Dépassement interdit sur un passage à niveau</small></p>
              
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>A l'approche d'un passage piétons le dépassement est interdit si la visibilité ne 
                    vous permet pas de vous assurer qu'aucun piéton ne soit engagé ;</li>
                <li>Si vous approchez un virage (pour manque de visibilité) ;</li>
                <li>Si un véhicule de service hivernal est en mission (gyrophares bleus allumés) :</li>
              </ol>
              
              <div class="card senscirc">
                <img src="../images/depinter.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Dépassement interdit</small></p>
              
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Si vous devez rouler plus vite que la vitesse autorisée, c'est interdit aussi !</li>
              </ol>
              <h5 class="text-muted"><b><small>Signalisation interdisant le dépassement</small></b></h5>
              <p>Voici le récapitulatif des panneaux qui explicitement (n°1 et n°2) interdisent le 
                dépassement ou de façon implicite (les autres) :</p>
              <div class="card senscirc">
                <img src="../images/recapdepinter.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Dépassements interdits</small></p>
              <p><b>Réponse :</b></p>
              <ol>
                <li>Le panneau n°1 interdit le dépassement de tous les véhicules à moteur sauf les 2 roues ;</li>
                <li>Le panneau n°2 interdit le dépassement aux véhicules transportant des marchandises dont
                     le poids est supérieur à 3,5 t ;</li>
                <li>Les panneaux n°3 et n°4 se réfèrent à un passage à niveau sans barrières où il est interdit 
                    de dépasser un quelconque véhicule ;</li>
                <li>Les panneaux n°5 et n°6 vous obligent à vous arrêter, donc il est interdit de dépasser un autre véhicule ;</li>
                <li>Le panneau n°7 vous oblige à céder la priorité à droite, 
                    donc vous n'avez pas le droit de dépasser un autre véhicule ;</li>
              </ol>
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Si une voiture passe à côté de vous dans l'autre sens de la circulation, vous la croisez.</li>
                <li>Si le croisement s'effectue sur une chaussée rétrécie, une signalisation va imposer les priorités de passage.</li>
                <li>En cas d'obstacle sur une route plate, le croisement entre 2 voitures de gabarit différent va toujours donner 
                    la priorité au véhicule qui est davantage maniable (moins lourd).</li>
                <li>Si vous n'avez aucune visibilité et conduisez sur une route sinueuse, 
                    vous êtes autorisés à utiliser le klaxon pour vous annoncer.</li>
                <li>Pour changer de direction, il existe le croisement à l'indonésienne et le croisement autour d'un point 
                    (vous allez contourner la voiture venant de l'autre sens, tournant aussi à gauche).</li>
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