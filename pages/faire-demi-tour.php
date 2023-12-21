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
              <h1><b>Faire un demi-tour</b></h1>
              <p>Faire un demi-tour ne veut pas dire tourner à gauche ou à droite mais rime avec changer de sens de circulation. 
                Imaginez que vous vous êtes trompé de chemin et que vous voulez aller dans l'autre sens de la circulation. 
                Eh oui, cela arrive, mais si vous voulez faire demi-tour à un moment donné, 
                il faut vraiment être vigilant et agile dans vos manœuvres sur la route. 
                Comme d'habitude, je vais commencer par les interdictions, puis je finirai par les possibilités.</p>
              <b>Interdictions et obligations</b>
              <p>A ce stade de votre apprentissage, même sans avoir vu les panneaux, vous devriez être capable d'imaginer leur forme,
                 couleur et symbole. Comme c'est indiqué sur la photo, 
                ce panneau vous interdit de faire demi-tour. Il faudrait attendre la prochaine intersection pour le faire.</p> 
              <div class="card senscirc">
                <img src="../images/demitourinterdi.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Il est interdit de faire un demi-tour </small></p>
              
              <b>Possibilité de faire demi-tour</b>
              <p>Si vous tournez dans une rue qui finit en cul-de-sac, il sera probablement possible d'y effectuer un demi-tour. 
                L'impasse est présignalée avec le panneau numéro 1 
                et annoncée de façon imminente avec le panneau numéro 2 (voir ci-dessous) :</p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/demitourimpas.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Faire un demi-tour dans une impasse</small></p>
              <b class="text-muted">Manœuvres à effectuer</b>
              <p>Observez les schémas ci-dessous pour étudier la manœuvre, mais vous allez vraiment vous rendre compte des gestes à 
                effectuer une fois que vous allez commencer les heures de conduite.</p>
              <div class="card senscirc">
                <img src="../images/fairedemitour.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Faire le demi-tour</small></p>
              
              <p>Aussi, il ne faut pas oublier le demi-tour à droite (1) et à gauche (2) :</p>
              <div class="card senscirc">
                <img src="../images/deuxcotedemitour.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Faire le demi-tour des deux côtés</small></p>
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                    <li> Il n'est pas possible d'effectuer un demi-tour à tout moment (vérifiez la signalisation).</li>
                    <li>Si vous tombez sur ce panneau, il faut prendre en compte le fait que l'interdiction s'applique 
                        jusqu'à la prochaine intersection incluse :</li>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/attendreavantour.jpg" width="200px;">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Vous devez attendre et tourner lorsque c'est possible </small></p>
                <li>Vous pouvez tourner dans une rue signalée par une impasse et y faire un demi-tour.</li>
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