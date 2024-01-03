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
    <title>Les changements de direction</title>
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
              <h1><b>Les changements de direction</b></h1>
              <br> 
              <p>Changer de direction ne rime pas avec tourner à gauche ou à droite quand cela vous chante. 
                En effet, vous pouvez mettre en danger la vie des autres ainsi que la vôtre.</p>
                <h4><b>Est-ce autorisé ou pas ?</b></h4>
                <p>Avant de parler de la manœuvre en elle-même, voyons si vous y avez droit.</p>
                <b>Obligations et interdictions</b>
                <span><small>Panneaux</small></span>
              <div class="card question">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                        <p>Je vous ai déjà sensibilisés à la différence entre la possibilité, l'obligation et l'interdiction. 
                            Alors essayez de deviner le sens de ces panneaux puis classez-les dans ces 3 catégories selon leur fonction.</p>
                    </div>
              </div>
              <br>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/sensinterobliger.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Sens interdit ou obligatoire</small></p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/contournment.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Contournement</small></p>
              <p><b>Réponse : </b>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Vous avez bien deviné que les panneaux ronds rouge et blanc (n°1 et n°2) 
                    avec les deux flèches noires vous interdisent de tourner à gauche ou à droite. 
                    Ils sont barrés donc cela signifie que tourner dans cette direction est interdit.</li>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Rappelez-vous que les panneaux carrés donnent des indications sur la conduite.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/findebutintersec.jpg" width="300px;">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Fin d'interdiction vs. Début d'interdiction</small></p>
                
                <li>Les deux autres panneaux ronds rouge et blanc interdisent la circulation tout court
                     (le n°3 interdit la circulation à tout véhicule dans les deux sens, 
                    le n°4 interdit simplement le passage) ;</li>
                <li>Les panneaux ronds bleus avec les flèches blanches symbolisent l'obligation de tourner à droite (n°5), 
                    à gauche (n°6) ou vous avez le choix entre les deux obligations (n°7) ;</li>
                <li>Les panneaux d'obligation (suite) vous montrent par où vous pouvez contourner, 
                    à savoir par la gauche (n°2 et n°4) ou par la droite (n°1 et n°3).</li>
                <li>Il n'y a pas de panneaux sur la possibilité  
                    (n°7, dans la mesure où c'est une obligation d'avoir le choix !)</li>
              </ol>
              
              <h5 class="text-muted"><small>Implémenttion</small></h5>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li><b>Les panneaux d'interdiction</b> vous informeront suffisamment en avance pour que vous puissiez prendre une décision sur votre itinéraire. 
                    Ces panneaux vont toujours se référer à la prochaine intersection pour une question de sécurité et de gestion de la conduite ;</li>
                <li><b>Les autres, bleus</b>    , vous obligent à prendre une certaine direction au moment où vous rencontrez le panneau.</li>
              </ol>
              <p>Vous pourrez aussi rencontrer ce type de panneau :</p>
              <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/bifurcation.jpg" width="100px;">
                    </div>
                    </div>
                </div>
              <p class="text-muted text-center"><small>Fin d'interdiction vs. Début d'interdiction</small></p>
              <p>Il faut comprendre que c'est une bifurcation. Cela veut dire que le chemin principal se sépare en 2, 
                mais qu'il faut mettre le clignotant malgré tout.</p>
              <p><b>Si c'est possible, que faites vous ?</b></p>
              <p>Je pense que le réflexe que vous avez dû développer à ce stade c'est de vous poser 
                les questions suivantes et je suis là pour vous le rappeler :</p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Avez-vous le droit de tourner (à gauche ou à droite)? Est-ce possible, obligatoire, voire interdit ?</li>
                <li>Comment allez-vous informer les autres de vos intentions ?</li>
                <li>Comment allez-vous informer les autres de vos intentions ?</li>
                <li>Comment allez-vous maîtriser votre véhicule?</li>
                <li>En changeant de direction, sur qui avez-vous la priorité ? Qui en a sur vous ?</li>
              </ol>
              <p>Ces questions devraient vous faire réfléchir sur le type de panneaux que vous serez susceptibles de rencontrer, sur le marquage au sol, 
                ainsi que sur les actions à effectuer dans la voiture pour pouvoir changer de trajectoire dans de bonnes conditions et en toute sécurité.</p>
              <p>Justement, je vous en parlerai dans les chapitres suivants !</p>
              
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Avant de tourner à gauche ou à droite, il faut s'assurer que c'est autorisé.</li>
                    <li>Les panneaux d'obligation ou d'interdiction vous aideront à prendre une décision ou à la changer !</li>
              </ol>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Petite anecdote personnelle : Le jour où j'ai passé l'examen de la conduite (côté pratique), la seule instruction que 
                    j'ai reçue en démarrant la voiture était "Allez tout droit". Bien entendu, je m'arrêtais aux feux, je faisais attention 
                    aux passages piétons etc, mais après un certain temps j'ai repéré de loin un sens interdit. J'ai compris qu'il fallait 
                    agir vite pour changer de direction car si je prenais le sens interdit sous prétexte de suivre la consigne j'allais non 
                    seulement échouer à l'examen, mais surtout avoir un accident ou causer un problème dans la circulation ! 
                    Lorsque j'ai changé de voie pour tourner à droite, 
                    on m'a demandé pourquoi ce changement de direction. J'ai expliqué que c'était interdit de continuer "tout droit".</p>
                </div>
              </div>
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