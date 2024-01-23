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
    <title>Stratégie de conduite</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<<body class="codebody">>
     <!--L'en-tête de la page-->
     <?php
        include("../header/header.php")
     ?>
    <br><br><br>
    <section>
      <div class="container">
       <!-- Content here -->
        <div class="row justify-content-center">
          <div class="col-md-8">
                <h1 style="font-weight: bold;">Stratégie de conduite</h1>
                <br> 
                <p>Voyons de près ce que cela veut dire observer pour pouvoir anticiper, et donc pouvoir agir.</p>
                <p>Je vais vous montrer plusieurs situations captées en instant T, 
                    pour que nous fassions l'exercice d'anticipation ensemble.</p>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Voyons le premier exemple : Faut-il gronder les piétons parce qu'ils traversent 
                        en dehors des passages prévus pour eux ou ralentir et tenir le pied sur le frein pour anticiper ?</p>
                  </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/strategie1.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Analyser le comportement des autres usagers</small></p>
                
                <p><b>Réponse : </b>Vous n'êtes pas juge donc vous n'allez pas vous occuper de qui a tort et qui a raison. 
                De plus, vous n'aurez pas le temps pour ça. Nous voyons que ces 2 dames s'apprêtent à traverser jusqu'au bout 
                car elles ont déjà traversé la voie de vélos. Ce que vous ne savez pas encore, c'est si elles vont traverser 
                devant vous ou après. Pour ne pas être surpris, vous devez appliquer la règle d'observateur permanent. 
                De plus, vous voyez dans le rétroviseur intérieur que vous avez une voiture derrière vous. Donc ralentir 
                par anticipation vous permet d'informer les autres derrière vous que vous avez remarqué quelque chose qui 
                vous fait ralentir. Si les deux dames s'engagent à traverser en entier et passent devant votre voiture, 
                vous n'aurez pas de mal à freiner.</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>
                        En ralentissant, vous modifiez votre allure et vous avertissez 
                        les autres usagers des changements dans la circulation.
                    </p>
                    </div>
                </div>
                <br>
                
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Prenons un autre exemple. Sur la photo ci-dessous, que prévoyez-vous 
                        comme comportement sur les usagers indiqués ?</p>
                  </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/strategie2.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Anticiper pour agir </small></p>
                <p><b>Réponse :</b> La moto derrière vous (nous la voyons dans le rétroviseur, n°1) 
                est censée rester derrière vous. Pourtant, il faut s'attendre à ce qu'elle passe soit à droite, 
                soit à gauche et qu'elle vous dépasse. Non, ce n'est pas le bon comportement à adopter si l'on est 
                conducteur de cette moto, mais je vous parle d'anticipation des situations possibles.
                 Les piétons traversent (n°2) et la voiture rouge (n°3) est à l'arrêt (feux Stop allumés) car l'intersection 
                 doit être encombrée par exemple. La voiture grise (n°4) est en train de faire une manœuvre
                  (partir ou en train de se garer). Cette situation vous indique qu'il faut ralentir et même freiner 
                  doucement (passage piéton où les piétons sont engagés, voiture sur le passage piétons donc circulation 
                  probablement encombrée). La voiture sous le n°4 n'est pas très mobile, car en train d'effectuer une manœuvre. 
                Il faut rester vigilant pour anticiper les gestes du conducteur de deux-roues.</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>En ralentissant, vous diminuez le risque d'être surpris par un changement 
                        de trajectoire d'un autre usager.
                    </p>
                    </div>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>La vigilance permet de prévoir le comportement (quel qu'il soit) des autres usagers.</li>
                    <li>Quand on conduit, plusieurs indices vont être disponibles dans l'environnement, 
                        mais c'est votre expérience qui vous aidera à prendre en compte les plus pertinents.</li>
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