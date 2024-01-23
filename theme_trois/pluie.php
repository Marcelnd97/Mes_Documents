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
    <title>La pluie</title>
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
                <h1 style="font-weight: bold;"><b>La pluie</b></h1>
                <br>
                <p>Qu'il pleuve de jour ou de nuit, ce sont les feux de croisement qui sont préconisés.</p>
                <div class="card senscirc">
                    <img src="../images/theme_trois/pluie1.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Feux de croisement</small></p>
                
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Quand il pleut, il faut ralentir. Pourquoi?</p>
                  </div>
                </div>
                <br>
                <p>"Raisons de sécurité", vous dites ? Bonne réponse !</p>
                <p>Mais quelle sécurité ? Quand il pleut le jour, la visibilité est réduite. La nuit, encore plus.
                     Aussi, la chaussée devient mouillée. Mais vu que la vitesse est assez basse en agglomération, 
                     a priori vous ne risquez pas l’aquaplaning, notion que j'expliquerai plus bas dans ce chapitre.</p>
                <p>En cas de très forte pluie, il faut redoubler de précautions. Vous devez allumer les feux de 
                    brouillard avant et feux de croisement (ou feux de position).</p>
                <div class="card senscirc">
                    <img src="../images/theme_trois/pluie2.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Éclairage en cas de pluie et forte pluie</small></p>
                
                <p>L'humidité de l'eau peut créer de la buée dans la voiture et entraver la visibilité de tous les côtés. 
                    Pensez à faire fonctionner le système de désembuage et/ou de ventilation dont voici les pictogrammes ci-dessous :</p>
                <div class="card senscirc">
                    <img src="../images/theme_trois/pluie3.jfif" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Boutons à actionner en cas de pluie</small></p>
                
                <h3 style="font-weight: bold;">Freinage en cas de pluie</h3>
                <p>Ce à quoi il faut vraiment faire attention quand il pleut, c'est la vitesse.</p>
                <div class="card important">
                  <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Je vous conseille chaudement de ralentir de 10 km/h pour éviter les aquaplaning ou autres mauvaises surprises. 
                        N'oubliez pas que si vous devez freiner de façon inattendue,
                         vous allez parcourir une distance de plus ! Vous souvenez-vous du schéma du calcul de la distance d'arrêt ?</p>
                  </div>
                </div>
                <br>
                
                <div class="card senscirc">
                    <img src="../images/theme_trois/pluie4.jfif" height="50px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Distance d'arrêt par temps de pluie</small></p>
                
                <p>Comme vous pouvez voir, la distance rajoutée de 40,5 m n'est pas négligeable. Au contraire, elle est assez élevée ! 
                    Donc inutile de jouer les conducteurs pressés, ça peut s'avérer dangereux.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>N'oubliez pas que les limitations de vitesse sur autoroute baissent de 130 km/h à 110 km/h !</p>
                    </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="../images/theme_trois/pluie5.jpg" height="350px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Obligation de ralentir</small></p>
                <p><b>Adhérence</b></p>
                <p>Donc vous avez bien compris que la chaussée est bien glissante en début de pluie. 
                    L'adhérence dépend de l'état des routes, des pneus et des suspensions. 
                    Le vent peut aussi être responsable d'un aquaplaning.</p>
                <div class="card important">
                  <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Aquaplaning : si les pneus usés ne parviennent pas à évacuer l'eau sur la route 
                        (ils ne sont donc pas en contact avec le goudron), la voiture glisse dangereusement et vous pouvez 
                        perdre le contrôle du véhicule. 
                        Cela peut arriver même sans avoir à freiner, donc encore une fois, attention à la vitesse !</p>
                  </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="../images/theme_trois/pluie6.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Ralentissez pour éviter l'aquaplaning</small></p>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Quand il pleut, il faut allumer les feux de croisement.</li>
                    <li>En cas de fortes pluies, il faut rajouter (aux feux de croisement) les feux de brouillard avant.</li>
                    <li>Si la pluie crée trop d'humidité, pensez à actionner les boutons "Désembuage" et "Ventilation".</li>
                    <li>Il est plus judicieux de ralentir en cas de pluie pour ne pas tomber dans les griffes de l'aquaplaning.</li>
                    <li>L'aquaplaning dépend de la chaussée, de la vitesse, de l'état des pneus, de la quantité d'eau sur la route et du vent latéral.</li>
                    <li>Si la chaussée est mouillée, la distance d'arrêt s'allonge en cas de freinage.</li>
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