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
    <title>Dépasser par la droite</title>
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
              <h1><b>Dépasser par la droite et être dépassé</b></h1>
              <br> 
              <p>En conditions normales, il est interdit d'effectuer les dépassements par la droite. En revanche, 
                il est toutefois possible de dépasser un véhicule par la droite seulement dans 2 cas :</p>
                <ol>
                    <li>Lorsque ce véhicule est un tramway (exemple 1) ;</li>
                    <li>Lorsque la voiture qui est sur votre gauche tourne à gauche (exemple 2).</li>
                </ol>
              <div class="card senscirc">
                <img src="../images/depasserpardroite.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Dépassement par la droite</small></p>
              <h3><b>Être dépassé</b></h3>
              <p>S'il vous arrive que l'on vous dépasse, vous devez :</p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>garder la même allure et surtout ne pas accélérer 
                    (ralentir seulement pour faciliter le passage en cas d'urgence) ;</li>
                <li>serrer à droite pour garder un espace latéral maximum ;</li>
                <li>si la chaussée est mouillée, mettre les essuie-glaces en vitesse rapide dès 
                    que l'autre conducteur arrive à votre hauteur ;</li>
                <li>la nuit repasser en feux de croisement, dès que l'autre conducteur a allumé ses feux de route ;</li>
              </ol>
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Être dépassé par la droite est possible dans 2 cas (si le tramway est sur votre gauche et vous roulez plus vite 
                    que lui et si vous dépassez un véhicule qui change de trajectoire en tournant à gauche.</li>
                <li>Quand on est la voiture dépassée, il ne faut jamais accélérer mais garder la même allure.</li>
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