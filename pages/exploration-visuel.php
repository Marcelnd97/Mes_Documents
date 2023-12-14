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
    <title>Exploration visuelle</title>
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">
     <!--L'en-tête de la page-->
     <?php
        include("header.php")
     ?>
    <br><br><br>
    <section>
      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-10" style="padding-left: 25%;">
                <h1 style="font-weight: bold;">L'exploration visuelle</h1>
                <br> 
                <p>Apprendre à observer son environnement (ouvrir les yeux de tous les côtés) permet d'anticiper. 
                    Retenez bien ce verbe car vous serez amenés à le mettre en pratique non-stop !</p>
                    <p>Pour pouvoir <b>anticiper</b> et donc prévoir les gestes des autres et se demander s'ils sont compatibles avec les vôtres, 
                        il est nécessaire de faire plusieurs actions.</p>
                <h4><b>Regarder large</b></h4>
                <p>L’œil ne peut pas tout voir, contrairement à ce que l'on pourrait croire. 
                    De plus, si la vitesse augmente, le champ de vision rétrécit !</p>
                <div class="card senscirc">
                    <img src="./images/theme_conduite/cond_img1.jfif" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Largeur du champ visuel</small></p>
                
                <p><b>Regarder loin</b></p>
                <p>Pour éviter d'être pris au dépourvu, vous devez regarder loin devant vous.</p>
                <p><b>Regarder autour de vous</b></p>
                <div class="card senscirc">
                    <img src="./images/theme_conduite/cond_img2.jfif" height="500px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>La tête du conducteur doit être mobile</small></p>
                <br>
                
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Pour anticiper, il faut bien regarder loin devant soi et tout le temps.</li>
                <li>Regarder ne se limite pas seulement à regarder devant, il faut regarder de tous les côtés.</li>
                <li>Pour voir à gauche, à droite ou derrière, vous pourrez utiliser les rétroviseurs.</li>
                <li>Pour voir les angles morts, il faut tourner la tête à gauche ou droite.</li>
                <li>Le champ de vision diminue plus la vitesse augmente : à 130 km/h vous ne verrez qu'à l'angle de 30°.</li>
              </ol>
              <br>              
          </div>
        </div>
      </div>

    </section>

    <!--Le pied de la page-->
    <?php
    // <!--Le pied de la page-->
        include("footer.php");

        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("script_link.php");
    ?>
</body>
</html>