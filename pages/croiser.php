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
              <h1><b>Se Croiser</b></h1>
              <br> 
              <p>Comme nous l'avons déjà vu dans les chapitres précédents, la circulation en France a lieu sur le côté droit de la chaussée, qu'il y ait une seule voie allant dans la même direction ou plusieurs.
                 Les voitures circulent aussi sur le côté gauche de la chaussée, mais dans l'autre sens.</p>
              <h4><b>Croisement naturel</b></h4>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>Lorsqu'une voiture passe à côté de vous et qu'elle se déplace dans le sens inverse, 
                    vous la croisez.</p>
                </div>
              </div>
              <br>
              <div class="card senscirc">
                <img src="../images/croiservoiture.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Vous croisez cette voiture</small></p>
              
              <p>Sur la photo, la voiture blanche roule sur sa voie, vous sur la vôtre. </p>
              <h4><b>Croisement spécifique</b></h4>
              <div class="card question">
                <div class="card-body">
                  <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                  <p>Lorsque le chemin est étroit, les panneaux vont réguler le passage comme sur la photo ci-dessous. 
                    A votre avis, avez-vous la priorité ? Vous rappelez-vous de l'effet miroir ?</p>
                </div>
              </div>
              <br>
              
              <div class="card senscirc">
                <img src="../images/prioritecroisement.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Priorités dans les croisements 1</small></p>
              
              <p><b>Réponse</b> : Vous n'avez pas la priorité car la flèche vous concernant est rouge, 
                donc vous devez céder le passage au conducteur du deux-roues venant d'en face.</p>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>S'il n'y avait eu personne de l'autre côté, alors vous auriez pu vous engager.</p>
                </div>
              </div>
              <br>
              <div class="card question">
                <div class="card-body">
                  <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                  <p>Et si vous voyez ce panneau, qui a la priorité ?</p>
                </div>
              </div>
              <br>
              <div class="card senscirc">
                <img src="../images/prioritedanscroisement.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Priorités dans les croisements 2</small></p>
              
              <p><b>Réponse :</b> C'est vous qui avez la priorité et la voiture noire doit vous céder le passage.</p>
              <br>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>S'il n'y avait aucune signalisation, la voiture déjà engagée aurait la priorité.</p>
                </div>
              </div>
              <br>
              <p><b>Croisement avec obstacle</b></p>
              <p>La signalisation dans l'exemple que je viens de donner est permanente, 
                mais un employé des travaux publics peut également régler l'ordre de passage. 
                Remarquez que sur la photo les travaux se situent devant vous :</p>
              <div class="card senscirc">
                <img src="../images/regulertraveaux.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Les employés des travaux publics régulent le passage</small></p>
              
              <b>Croisement avec obstacle sur les routes plates</b>
              <div class="card question">
                <div class="card-body">
                  <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                  <p>Si deux voitures de gabarit différent doivent se croiser, 
                    laquelle des deux pourra passer en premier et pourquoi ?</p>
                </div>
              </div>
              <br>
              <p><b>Réponse :</b> Le véhicule qui a le plus petit gabarit se déplace plus facilement 
                et de ce fait laisse plus d'espace à celui qui est encombré ou plus long pour la manœuvre.</p>
              <p>Donc dans le cas de figure ci-dessous, les priorités vont dépendre du gabarit des voitures.
                 Un véhicule de 2 m de large ou de 7 m de long doit s'arrêter voire stationner pour faciliter le passage au petit. 
                Le "petit" véhicule a la priorité sur le "grand".</p>
              <div class="card senscirc">
                <img src="../images/petitvehicule.jpg" height="300" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Priorité au petit véhicule</small></p>
              
              <p>Si, en revanche, vous ne rencontrez aucun autre usager, 
                mais que la route est très sinueuse et étroite (une seule voiture peut passer), 
                pensez à utiliser le klaxon pour vous annoncer :</p>
              <div class="card senscirc">
                <img src="../images/klaxonpreconiser.jpg" height="300" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Klaxon préconisé</small></p>
              
              <h4><b>Vous voulez changer de direction</b></h4>
              <p>Si vous voulez tourner à gauche, et que la voiture qui arrive en face tourne également à gauche, 
                vous allez la croiser en la contournant. 
                Un marquage au sol blanc délimite le point de rencontre des voitures comme sur la photo ci-dessous :</p>
              <div class="card senscirc">
                <img src="../images/pointrencontredeusvoiture.jpg" height="300" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Point de rencontre entre deux voitures tournant à gauche</small></p>
              
              <p>Vous remarquez que la voiture qui viendrait du sens de la flèche jaune, peut tourner seulement en contournant 
                le point blanc en franchissant la ligne discontinue. Pareil pour la bleue. La voiture venant du sens de la 
                flèche jaune ne pourra pas tourner à gauche avant le rond blanc, car vous remarquez que la ligne est continue.</p>

              <p>Une fois arrivées au point de rencontre, elles vont se croiser comme sur la photo ci-dessous. 
                Notez qu'aucune règle de priorité ne s'applique entre elles dans la situation comme sur cette photo. </p>
              <div class="card senscirc">
                <img src="../images/croisemtoungauche.jpg" height="300" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Croisement pour tourner chacune à gauche</small></p>
              
              <b>Croisement à l'indonésienne </b>
              <p>Il s'agit d'un cas similaire, sauf que vous croisez le véhicule en face par la gauche en tournant devant elle. 
                Aucune règle de priorité ne s'applique non plus entre elles.</p>
              <div class="card senscirc">
                <img src="../images/croisementindonesien.jpg" height="300" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Croisement à l'indonésienne</small></p>
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