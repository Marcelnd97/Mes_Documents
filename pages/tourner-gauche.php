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
    <title>Tourner à gauche</title>
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
              <h1><b>Tourner à gauche</b></h1>
              <br> 
              <p>Tout comme pour tourner à droite, il va falloir d'abord s'assurer que tourner à gauche est autorisé. 
                Si ce n'est pas le cas, il va falloir changer d'itinéraire.</p>
              <h3><b>Il est possible de tourner à gauche</b></h3>
              <p>Cette manœuvre est un tout petit peu plus complexe car elle demande de faire attention à plusieurs éléments. 
                    Pourquoi ? Alors comme d'habitude, je commencerai ma démonstration par le cas le plus simple.</p>
              <b>Chaussée à sens unique.</b>
              <div class="card question">
                <div class="card-body pb-1">
                    <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                    <p>Observez le schéma ci-dessous et réfléchissez à la démarche de ce changement de direction.</p>
                </div>
              </div>
              <br>
              <div class="card senscirc">
                <img src="../images/chaussesensuniq.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Tourner à gauche: chaussée à sens unique</small></p>
              
              <b>Voici la réponse:</b>
              <ol>
                <li>Vous devez mettre le clignotant ;</li>
                <li>Vous devez serrer à gauche, aucun véhicule ne doit arriver en sens inverse;</li>
                <li>Vous devez ralentir progressivement puis vous arrêter au Stop au niveau de la ligne ;</li>
                <li>Si personne ne vient de la rue perpendiculaire, alors vous pouvez tourner.</li>
              </ol>
              <p>Maintenant, je veux que vous vous penchiez sur le cas de la chaussée à double sens.</p>
              <b>Chaussée à double sens</b>
              <div class="card question">
                <div class="card-body pb-1">
                    <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                    <p>Observez le schéma ci-dessous et réfléchissez à la démarche de ce changement de direction. 
                        Pourquoi la flèche verte suggère-t-elle que vous devez vous positionner sur la voie n°1 ?</p>
                </div>
              </div>
              <br>
              <div class="card senscirc">
                <img src="../images/gauchedoublesens.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Tourner à gauche : chaussée à double sens</small></p>
              <b>Voici la réponse:</b>
              <ol>
                <li>Vous pouvez tourner à gauche car la ligne est discontinue. Pensez à actionner le clignotant gauche ;</li>
                <li>Vous devez serrer l'axe médian, c'est à dire le milieu de la chaussée ;</li>
                <li>Vous devez ralentir progressivement puis vous arrêter au Stop au niveau de la ligne ;</li>
                <li>Vous devez vous positionner à l'extrême droite de la chaussée, sur la voie n°1, 
                    car en France on roule à droite.</li>
              </ol>
              <br>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>
                    Tourner à gauche est plus complexe parce que lorsque la chaussée est à double sens, 
                    vous êtes obligé de la traverser, et donc de couper le chemin à d'autres conducteurs.
                  </p>
                </div>
              </div>
              <br>
              <b>Chaussée à plusieurs voies</b>
              <br>
              <br>
              <p><b class="text-muted">Cas 1 : Vous ne coupez pas le chemin à d'autres conducteurs</b></p>
              <p>Je pense que vous avez compris comment tourner à gauche de façon simple en l'absence de feux. 
                Mais quand vous avez plusieurs voies qui vous proposent des directions différentes, 
                il faut encore respecter les règles de la conduite de base : 
                toujours emprunter la voie la plus à droite et repérer le feu qui concerne votre direction.</p>
              <div class="card question">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                        <p>Observez la photo ci-dessous. Êtes-vous bien placé pour tourner à gauche en étant positionné sur cette voie, 
                            n°1, entourée en jaune ?</p>
                    </div>
              </div>
              <br>
              <div class="card senscirc">
                    <img src="../images/bifurgauche.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Tourner à gauche : bifurcations</small></p>
              <p><b>Réponse: </b>Oui, il faut se positionner sur la voie qui est la plus à droite (voie où figure la flèche n°1, 
                entourée en jaune). Si, pour une raison ou une autre vous devez vous décaler vers la voie à l'extrême gauche, 
                vous en avez le droit car la ligne est discontinue. 
                Pensez juste à mettre le clignotant gauche en démarrant la voiture !</p>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Même si vous êtes positionnés sur la voie qui indique la direction que vous voulez prendre, 
                    il est important d'informer les autres de vos intentions. Mieux vaut surinformer que de ne pas assez 
                    informer, donc mettez le clignotant.</p>
                </div>
              </div>
              <br>
              <b class="text-muted">Cas 2 : Vous coupez le chemin à d'autres voitures</b>
              <p>Ce cas demande une vigilance accrue car s'y ajoute une difficulté à laquelle 
                il faut faire particulièrement attention : les voitures qui arrivent en face.</p>
              <p>Voici un premier exemple sans signalisation où je ne vous tends aucun piège. Vous êtes sur 
                la bonne voie pour tourner à gauche. Pour ne pas gêner la circulation, une voie de stockage est prévue, 
                c'est d'ailleurs là où se trouve votre voiture (l'habitacle représenté sur la photo). 
                Il s'agit d'un espace où vous allez pouvoir vous arrêter, mettre le clignotant, 
                puis enfin tourner lorsque la voie sera libre. 
                N'oubliez pas que vous n'avez pas la priorité car vous coupez le chemin aux voitures venant d'en face.</p>
              <br> 
              <div class="card senscirc">
                <img src="../images/voiestoktgauche.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Voie de stockage : tourner à gauche</small></p>
              <br>
              
              <p>Voici un autre exemple, cette fois-ci avec la présence des feux.</p>
              <div class="card question">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                        <p>Observez les 2 photos ci-dessous (elles fonctionnent ensemble) et réfléchissez à la démarche à 
                            suivre pour tourner à gauche. Je vous donne un petit indice : la présence du feu avec la petite croix 
                            rouge dans le fond est importante. A votre avis, quelle est sa fonction ?</p>
                    </div>
              </div>
              <br> 
              <div class="card senscirc">
                <img src="../images/gaucherougfeu.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Tourner à gauche en cas de feu rouge</small></p>
              <br>
              <p><b>Réponse: </b>Le petit feu en croix indique que la circulation dans l'autre sens est à l'arrêt : 
                le cas de la voiture blanche. Mais comme vous êtes aussi à l'arrêt, vous devez attendre que le feu passe au vert. 
                Mais lorsque celui-ci devient vert, il faut redoubler de vigilance. Regardez la photo ci-dessous :</p>
              <div class="card senscirc">
                <img src="../images/gauchevertfeu.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Tourner à gauche lorsque le feu est vert </small></p>
              <br>
              <p>Si votre feu est vert, la croix rouge du fond s'éteint, ce qui veut dire que les voitures dans l'autre sens 
                circulent dans votre direction, sur leur voie. Vous n'êtes donc pas prioritaire pour tourner et devez absolument 
                vous arrêter soit au milieu de la chaussée soit dans une voie de stockage car le passage des voitures en face est 
                en cours ! Sur la photo ci-dessus la voiture rouge tourne à gauche, car il n'y a pas de voitures qui arrivent en face.</p>
              <h3><b>Contournement par la droite ou la gauche</b></h3>
              <p>Il s'agit d'un cas spécifique pour tourner à gauche. Nous avons déjà vu que le marquage au sol vous indique une direction, 
                et donc autorise la circulation grâce aux flèches.</p>
              <div class="card question">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                        <p>Je vous propose d'observer cette photo et d'essayer de déduire quel élément relatif
                             au marquage au sol interdit de tourner à gauche et lequel le permet.</p>
                    </div>
              </div>
              <br>
              <div class="card senscirc">
                    <img src="../images/gaucheinterdit.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Changer de direction : interdictions et marquage au sol</small></p>
              <p>Je sais que vous avez repéré le sens interdit et le contournement par la gauche. Mais il y a un autre 
                détail sur cette photo à ne pas négliger : les lignes discontinues et continues inscrites sur la chaussée.</p>
              <p>Lorsqu'elles sont collées l'une à l'autre, chacune des fonctions de ces lignes s'appliquera à sa partie de la chaussée. 
                    Donc la flèche 1 du schéma ci-dessous interdit le franchissement de ligne continue, 
                    tandis que la flèche verte sous le numéro 2 l'autorise :</p>

              <br>
              <div class="card senscirc">
                    <img src="../images/lignecombiner.jpg" height="150px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Lignes combinées</small></p>
              <p><b>Réponse : </b>Vous pouvez donc contourner à gauche par la partie 2 sur la photo, 
                mais pas par la partie 1. Elle est réservée aux voitures venant de l'autre sens.</p>

              
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Pour tourner à gauche, il faut s'assurer que cela est autorisé (observer la signalisation verticale et horizontale).</li>
                    <li>S'il est possible de tourner à gauche, l'action sera plus complexe que de tourner à droite, 
                        car il va falloir traverser la chaussée et peut-être couper le chemin aux voitures venant d'en face.</li>
                    <li>Informer les autres usagers est l'action à faire en premier lieu (actionner le clignotant gauche). 
                        Puis vous pouvez vous approcher de l'axe de la chaussée donc aller vers la gauche, ralentir, 
                        (s'arrêter s'il y a un feu ou un Stop), et enfin tourner lorsque la voie est libre.</li>
                    <li>Si vous devez tourner dans une rue à double sens, vous devez tourner et vous positionner sur la voie de droite.</li>
                    <li>Si vous tournez à gauche et que vous coupez le chemin aux usagers venant d'en face vous devez leur céder le passage.</li>
                    <li>Si vous devez contourner un obstacle par la droite ou par la gauche, il vous faudra être bien attentif à toute la signalisation présente.</li>
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