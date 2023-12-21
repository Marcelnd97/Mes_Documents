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
              <h1><b>Tourner à droite</b></h1>
              <br> 
              <h3><b>Vous pouvez tourner à droite</b></h3>
              <p>Si vous ne voyez pas de panneaux d'obligation ou d'interdiction sur votre chemin, 
                a priori vous pouvez tourner à droite. Je dis a priori car vous ne serez jamais à 
                l'abri d'une route barrée ou en travaux, par exemple. 
                Mais si tout va bien, comment allez-vous vous y prendre ?</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li><b>Où</b> devez-vous vous <b>positionner</b> sur la chaussée ?</li>
                    <li>Comment allez-vous <b>informer</b> les autres de vos intentions ?</li>
                    <li>Comment allez-vous <b>maîtriser</b> votre véhicule?</li>
                </ol>
                <h3><b>Comment tourner ?</b></h3>
                <p>On va commencer par le début, par votre prise de décision de changer de direction. 
                    Grâce aux panneaux que nous avons vus auparavant, vous avez bien compris que l'un
                     des principes de base de la conduite est l'<b>anticipation</b>. 
                    Vous devez prévoir vos intentions mais aussi celles des autres. Nous allons d'abord 
                    nous concentrer sur vos intentions.</p>
                    <div class="card question">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                        <p>Comme en France nous roulons à droite, tourner à droite demande moins d'éléments à 
                            prendre en compte que de tourner à gauche. A votre avis, qu'est-ce que ce schéma cherche à nous faire comprendre ?</p>
                    </div>
              </div>
              <br>
              <div class="card senscirc">
                <img src="../images/tourndroite.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Tourner à droite</small></p>
              <ol>
                <li>Si vous voulez tourner à droite à la prochaine intersection (donc vous devez anticiper cette intention) 
                    vous vous devez d'en <b>informer les autres</b>. Cela veut dire que <b>vous allez mettre votre clignotant droit</b> au 
                    niveau de l'intersection précédente. Il ne faut pas le faire trop tôt non plus pour ne pas prêter à confusion.</li>
                    <p>Quant à la voiture arrêtée au STOP, elle ne risque en aucun cas de mal interpréter votre geste. 
                        Si la rue est trop longue, alors vous pouvez actionner votre clignotant à 50 m 
                        approximativement de la rue où vous voulez tourner.
                    </p>
                <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Le jour de l'examen de la conduite pratique, pensez à bien anticiper vos intentions en temps et en heure. 
                    Une fois le permis obtenu, si vous êtes distrait, ne connaissez pas la ville ou vous trompez pour 
                    une quelconque raison, mon conseil est de toujours mettre le clignotant, même si c'est au dernier moment.</p>
                </div>
                </div>
                <br>
                
                <div class="card question">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                        <p>Voici un autre schéma pour vous faire réfléchir sur le positionnement sur la chaussée.</p>
                    </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="../images/positionchausse.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Positionnement sur la chaussée</small></p>
                
                <li>Vous l'avez bien repéré, <b>la voiture serre le bord droit de la chaussée</b>. 
                    Ce qui n'est pas clairement représenté sur ce schéma 
                    c'est que la voiture ralentit et qu'il peut y avoir d'autres usagers de la route présents.</li>
                <li>Une dernière information au niveau du changement de la trajectoire est la suivante : 
                    au niveau de l'angle de la rue <b>vous devriez décélérer</b>, voire vous arrêter si vous voyez un passage piétons.</li>
                <li>Passons à un exemple un tout petit peu plus complexe, mais je suis sûr que vous allez rapidement comprendre la logique, 
                    car vous avez assez de connaissances pour déduire la marche à suivre.</li>
              </ol>
              <div class="card question">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                        <p>Imaginez que vous êtes dans la voiture dont l'habitacle est représenté sur la photo. 
                            Pour tourner à droite, êtes-vous bien placé ? Chaque détail compte !</p>
                    </div>
              </div>
              <br>
                <div class="card senscirc">
                    <img src="../images/bufurcposivoie.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Bifurcations: Positionnement sur les voies</small></p>
              <p><b>Réponse : </b>Pour tourner à droite vous n'êtes pas bien placé car vous êtes clairement sur la voie de gauche. 
                Les flèches entourées en jaune sous les n°1 et n°2 le démontrent. Mais dans cette situation, 
                pouvez-vous rattraper le coup et tourner à droite quand même ? La réponse est oui. Pourquoi ?</p>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Le rétroviseur intérieur vous informe des choses suivantes : 
                    les flèches pour tourner à droite ont déjà été annoncées (vous ne voyez dans le rétroviseur que la flèche rouge n°2, 
                    donc a priori vous n'êtes pas censé vous décaler). En revanche, il peut vous arriver de vous tromper de direction 
                    et vous avez le droit de changer d'avis. Vous devez mettre le clignotant droit et changer de voie. 
                    Pour des raisons de sécurité, vous devez occuper la voie qui est la plus à gauche pour tourner à droite 
                    (entourée en rouge sous le n°2). Si vous aviez pu anticiper vos intentions et décider à temps, 
                    il aurait fallu se positionner à l'extrême droite (flèche entourée en rouge sous le n°1). Aussi, 
                    n'oubliez pas que les lignes par terre sont discontinues, ce qui vous permet de vous décaler vers la droite.</p>
                </div>
              </div>
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Avant toute manœuvre, vous devez vous assurer que tourner à droite est autorisé.</li>
                    <li>Vous devez informer les autres de votre manœuvre en mettant le clignotant droit, 
                        serrer le trottoir droit, ralentir à l'approche de l'angle de la rue, 
                        puis tourner le volant à droite et vous positionner toujours sur le côté droit de la chaussée .</li>
                    <li>Dans une rue à plusieurs voies, il faut faire la même chose mais il faut se positionner sur la voie la plus à droite 
                        (il faut se positionner dans la voie de stockage qui est la plus à droite).</li>
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