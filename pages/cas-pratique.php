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
    <title>Cas pratique</title>
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
              <h1><b>Cas pratiques</b></h1>
              <p>L'objectif de ce chapitre est de vous faire pratiquer le changement de direction.</p><br> 
              <h4><b>Présence des feux et priorités</b></h4>
              <p>Je choisis de commencer par leur présence car c'est, me semble-t-il, le cas le plus facile. 
                Ils régulent la circulation et vous vous reposez sur ce qu'ils vous disent de faire. Malgré cela, 
                il faut respecter quelques règles quand il s'agit de changer de direction. 
                Je sais que nous avons déjà vu tout cela auparavant, mais une petite révision ne vous fera pas de mal.</p>
              <b>Changer de direction en présence des piétons</b>
              <p>Observez la photo ci-dessous. Si vous êtes dans la voiture verte (trajectoire bleue, n°2) et que vous 
                voulez tourner à droite, vous avez la priorité car vous ne coupez le chemin à personne. En revanche, 
                comme le feu est aussi vert pour les piétons dans la rue où vous tournez, ce sont eux qui ont la priorité.</p>
              <div class="card sensuniq">
                <img src="../images/droitepresentfeux.jpg" height="350px" class="sensuniq">
              </div>
              
              <p class="text-muted text-center"><small >Tourner à droite en présence des feux</small></p>
             
              <p>Ajoutons une autre voiture venant d'en face (trajectoire en rouge, n°3). Si le feu est vert, 
                et que cette voiture veut aussi tourner dans la même direction que vous, vous avez toujours la priorité. 
                En effet, vous ne coupez le chemin à personne, contrairement à cette voiture qui le fait.</p>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                  <p>
                  Même si le feu l'autorise à tourner, elle doit attendre que ce soit son tour.
                </div>
              </div>
              <br>
             
              <p>La règle de priorité qui s'applique dans le carrefour où les feux sont présents est la suivante : 
                les piétons sont les premiers à passer, puis la voiture qui ne coupe le chemin à aucune autre voiture, 
                puis la voiture qui coupe le chemin aux autres voitures.</p>
              <h3><b>Présence de signalisation dans une intersection en croix</b></h3>
              <br>
              <p><b>Vous voulez tourner à droite </b></p>
              <p>Quand vous êtes tout seul, c'est facile, non ? Mais quand il y a plusieurs conducteurs avec la même intention, 
                il faut trouver une solution. En plus des panneaux qui régissent les priorités, vous connaissez 2 règles : 
                priorité à droite et priorité à la voiture qui ne coupe pas le chemin à d'autres voitures. </p>
              <div class="card question">
                <div class="card-body">
                  <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                  <p>Quelle(s) règle(s) de priorité s'applique(nt) dans cette situation schématisée ?</p>
                </div>
              </div>
              <br>
               <div class="card sensuniq">
                <img src="../images/droitepresentstop.jpg" height="350px" class="sensuniq">
              </div>
              
              <p class="text-muted text-center"><small >Tourner à droite en présence d'un Stop</small></p>
              
              <p><b>Réponse: </b>le panneau Stop oblige les deux voitures à s'arrêter (sur la trajectoire n°2 et n°3). 
              La voiture qui a la priorité (trajectoire n°1) tourne à gauche mais aucune signalisation ne la contraint à 
              céder le passage.  La priorité va se jouer entre les 2 voitures qui ont un Stop. 
              La voiture n°2 tourne à droite (prioritaire sur celle qui tourne à gauche étant sur la trajectoire n° 3).</p>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                  <p>
                  Comment j'ai procédé à l'analyse ?
                </div>
              </div>
              <br>
              <ol>
                <li>J'analyse la nature des panneaux (les voitures sur les trajectoires 
                    n°2 et n°3 ont un Stop donc pour le moment je les laisse de côté car elles ne sont pas prioritaires) ;</li>
                <li> Je regarde si la voiture va tout droit (prioritaire) ou si elle tourne (moins prioritaire) ;</li>
                <li>Je regarde si la voiture tourne à droite (plus prioritaire) ou à gauche (moins prioritaire) ;</li>
                <li>Si malgré la signalisation il y a conflit, j'applique la règle de la priorité à droite.</li>
              </ol>
              <div class="card question">
                <div class="card-body">
                  <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                  <p>Voici un cas similaire. Repérez les panneaux. Qui tourne dans quelle direction ? 
                    Réfléchissez à l'ordre de passage proposé.</p>
                </div>
              </div>
              <br>
             
               <div class="card sensuniq">
                <img src="../images/losangeblancrouge.jpg" height="350px" class="sensuniq">
              </div>
              <p class="text-muted text-center"><small>Priorités avec le losange blanc et jaune</small></p>
               
              <p><b>Réponse: </b>La voiture sur la trajectoire n°3 a le panneau Cédez le passage, 
              donc je la laisse de côté car les deux autres ont la priorité grâce au même panneau (losange de priorité). 
              A priori, la voiture n° 3 passe en dernier, mais je vous conseille de toujours vérifier s'il n'y a pas d'indices 
              cachés, vous pourriez vous tromper. Ensuite, vous devez analyser la nature d'interaction des 2 voitures prioritaires.
               L'ordre de passage va se jouer entre elles. L'une tourne à droite, l'autre à gauche. 
               C'est celle qui tourne à droite qui gêne le moins la circulation, 
               donc c'est elle qui est prioritaire. Ensuite la n°2 passera, puis la n°3.</p>
               <br>
               <b>Vous voulez tourner à gauche </b>
               <p>Comme nous avons déjà abordé le cas des voitures qui veulent tourner à gauche, 
                alors tout cela vous semblera peut-être un peu répétitif. 
                Mais n'oubliez pas que c'est toujours bien de vous entraîner pour développer vos réflexes !</p>
              <div class="card question">
                <div class="card-body">
                  <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                  <p>Réfléchissez aux priorités de ce schéma. Quelle voiture est restreinte par un panneau ? Et les autres ?</p>
                </div>
              </div>
              <br>
              
              <div class="card sensuniq">
                <img src="../images/tourencontrepan.jpg" height="350px" class="sensuniq">
              </div>
              <p class="text-muted text-center"><small>Tourner à gauche si vous rencontrez le panneau Cédez le passage</small></p>
              <p><b>Réponse: </b>Vous avez repéré les deux voitures derrière leur Cédez le passage (la bleue et la rouge). 
              A priori, c'est la voiture orange qui a la priorité totale sur les autres voitures. 
              Après avoir vérifié vos hypothèses,  la rue perpendiculaire a le panneau Cédez le passage implanté des deux côtés. 
              La n°1 est donc prioritaire. De plus, elle ne coupe le chemin à personne, elle va tout droit. 
              Ensuite va s'engager la voiture sur la trajectoire n°2, car elle va également tout droit. 
              Reste la voiture sur la trajectoire n°3, car non seulement elle a un Cédez-le-passage, mais elle tourne aussi à gauche.</p>
              <div class="card question">
                <div class="card-body">
                  <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                  <p>Réfléchissez aux priorités de ce schéma :</p>
                </div>
              </div>
              <br>
              
              <div class="card sensuniq">
                <img src="../images/ordrepassage.jpg" height="350px" class="sensuniq">
              </div>
              <p class="text-muted text-center"><small>Quel est l'ordre de passage ? </small></p>
              
              <p><b>Réponse:</b> La voiture qui n'a pas de signalisation a, par défaut, 
              la priorité car selon l'effet miroir (par rapport aux deux autres voitures qui ont un Stop) 
              elle n'a pas de restrictions. Après elle, pourra s'engager la voiture qui tourne à droite puis celle qui tourne à gauche.</p>
              <div class="card sensuniq">
                <img src="../images/gauchepresencestop.jpg" height="350px" class="sensuniq">
              </div>
              <p class="text-muted text-center"><small>Tourner à gauche en présence d'un Stop</small></p>
              
              <b>Axes prioritaires </b>
              <p>Il s'agit d'un cas un peu plus complexe, mais les règles ne changent pas.</p>
              <div class="card question">
                <div class="card-body">
                  <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                  <p>Je ne vous donne aucun indice, réfléchissez aux priorités :</p>
                </div>
              </div>
              <br>
              <div class="card sensuniq">
                <img src="../images/axepriorite.jpg" height="200px" class="sensuniq">
              </div>
              <p class="text-muted text-center"><small>Axes prioritaires et ordre de passage</small></p>
              <ol>
                <li>Axe prioritaire tournant à droite</li>
                <li>Axe prioritaire tournant à gauche</li>
              </ol>
              <b>Réponses:</b>
              <ol style="margin-left: 8px;">
                <li>L'axe prioritaire tournant à droite concerne seulement ce bout de route. C'est pour cette raison que 
                    la voiture sur la trajectoire n°1 a le droit de s'engager tout comme celle de la trajectoire n°2. 
                    Mais comme la direction vers laquelle les deux voitures veulent aller est identique, 
                    il faut laisser le passage à droite. Raison pour laquelle la voiture venant de droite a la priorité. 
                    La voiture sur la trajectoire n°2 passe ensuite, car la voiture sur la trajectoire n°3 doit s'arrêter au Stop.</li>
                <li>L'axe prioritaire tournant à gauche : encore une fois, il faut d'abord appliquer la règle de la 
                    signalisation (le losange blanc et jaune), car elle prévaut sur les règles de priorité à droite 
                    et sur les voitures qui coupent le chemin aux autres voitures. Selon cette règle, la voiture qui 
                    est sur la trajectoire n°1 est prioritaire car l'axe prioritaire correspond à sa future trajectoire. 
                    Ensuite va passer la voiture qui quitte son axe de priorité vers le milieu du carrefour, mais elle 
                    va tout droit et n'a pas d'autres restrictions comme l'a la voiture sur la trajectoire n°3, 
                    qui doit céder le passage.</li>
              </ol>
              <h3><b>Absence de signalisation dans une intersection en T</b></h3>
              <p>Pour varier les plaisirs, j'ai décidé de vous faire  découvrir un autre type d'intersection avec 
                trois voitures qui vont devoir se plier à la règle des priorités car aucune signalisation n'est mise en place.</p>
              <p>Voici un premier exemple tout simple.</p>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                  <p>N'oubliez pas que la voiture qui va vers une direction indépendante des autres voitures n'est pas 
                    concernée par les priorités. C'est pour cela qu'elle peut tourner quand elle veut. 
                    Ce sont les deux autres voitures qui vont devoir appliquer les règles de priorité.
                  </p>
                </div>
              </div>
              <br>
              <div class="card sensuniq">
                <img src="../images/intersectionT.jpg" height="200px" class="sensuniq">
              </div>
              <p class="text-muted text-center"><small>Ordre de passage dans une intersection en T</small></p>
              
              <p>La priorité ne s'applique pas à votre voiture car vous tournez à droite et êtes les seuls à le faire. 
                La voiture n°2 doit céder le passage à la voiture n°1 car cette dernière est à sa droite.</p>
              <div class="card question">
                <div class="card-body pb-1">
                <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                <p>Cas pratique n° 1 : Imaginons que vous conduisez la voiture n°1 et que vous voulez aller tout droit. 
                    La voiture d'en face aussi veut continuer tout droit. 
                    Mais la voiture sur votre droite veut tourner à gauche, elle a mis son clignotant. Quel est l'ordre de passage ?</p>
                </div>
              </div>
              <br>
              
              <div class="card sensuniq">
                <img src="../images/ordrepasscas1.jpg" height="250px" class="sensuniq">
              </div>
              <p class="text-muted text-center"><small>Ordre de passage : cas 1</small></p>
              
              <p><b>Réponse :</b> D'abord va passer la voiture numéro 3, puis viendra la voiture numéro 2 et enfin 
              votre voiture qui a le numéro 1. Si vous ne savez pas encore pourquoi, je vous laisse réfléchir.</p>
              <p>Réponse sur l'explication de l'ordre de passage : La voiture n°3 ne coupe le chemin à personne. 
                Elle va tout droit. Si vous aussi voulez aller tout droit, vous devez d'abord céder le passage à 
                 voiture n°2 car elle est sur votre droite. Aussi, la voiture n°3 est sur la droite de la voiture n°2. 
                C'est donc à la voiture n°2 de céder le passage à la 3 puis à vous de céder le passage à la n°2.</p>
              <div class="card question">
                <div class="card-body pb-1">
                <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                <p>Cas pratique n° 2 : Dans cet exemple, je veux que vous validiez ou invalidiez l'ordre de passage des 3 voitures. 
                    Les flèches indiquent les directions que ces voitures veulent prendre.</p>
                </div>
              </div>
              <br>
              
              <div class="card sensuniq">
                <img src="../images/ordrepasscas2.jpg" height="250px" class="sensuniq">
              </div>
              <p class="text-muted text-center"><small>Ordre de passage : cas 2</small></p> 
              
              <p><b>Réponse : </b>Cet ordre de passage est correct car si vous voulez tourner à droite, 
              vous ne coupez le chemin à aucune de ces voitures. En revanche, tant la voiture n°2 que la voiture n°3 
              veulent tourner à gauche. Ce qui va attribuer la priorité à l'une ou à l'autre c'est leur placement : 
                la voiture n°2 se trouve sur la droite de la voiture n°3 et automatiquement la rend prioritaire.</p>
              <div class="card question">
                <div class="card-body pb-1">
                <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                <p>Cas pratique n°3 : sur la photo ci-dessous, qui a la priorité et quel est l'ordre de passage ?</p>
                </div>
              </div>
              <br>
              <div class="card sensuniq">
                <img src="../images/ordrepasscas3.jpg" height="250px" class="sensuniq">
              </div>
              <p class="text-muted text-center"><small>Ordre de passage : cas 3</small></p> 
              <p><b>Réponse : </b>La voiture n°2 a la priorité car elle ne coupe le chemin à personne. 
               La priorité va se jouer entre votre voiture (n°1) et la n°3. Elle veut tourner à gauche et 
               vous voulez aller tout droit, donc comme elle vous coupe le chemin, vous êtes prioritaire.</p>
              <h3><b>En résumé</b></h3>
              <b>Principe des priorités en présence de feux ou de signalisation</b>
              <ol style="margin-left: 10px;">
                <li>Procédez par élimination, repérez les panneaux ou les feux qui restreignent le passage.</li>
                <li>Repérez les autres voitures et leurs intentions.</li>
                <li>Repérez les directions que ces voitures veulent prendre.</li>
                <li>Aller tout droit est prioritaire sur tourner à gauche ou à droite.</li>
                <li>Tourner à droite est prioritaire sur tourner à gauche.</li>
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