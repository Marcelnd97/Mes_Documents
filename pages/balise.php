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
    <title>Les balises</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body class="codebody">

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
                <h1 style="font-weight: bold;"><b>Balises</b></h1>
                <hr>
                <div class="card senscirc">
                    <img src="../images/balise.jpg" height="150px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Balises sur la route</small></p>
                <br>
                <p>1. Balise d'obstacle</p>
                <p>2. Balise de virage dangereux</p>
                <p>3. Balise de virage </p>
                <p>4. Balise de virage : le haut de cette balise est rouge afin d'être vue sur les routes enneigées</p>
                <p>5. Musoir : permet de séparer une sortie d'une voie de circulation </p>
                <p>6. Délinéateur : permet aux usagers de visualiser le bord de la route de nuit</p>
                <p>7. Balises blanches renforçant le marquage au sol permanent </p>
                <p>8. Balises vertes renforçant le marquage continu permanent</p>
                <p>9. Balises jaunes renforçant les marquages au sol temporaires</p>
                <p>10. Balises de position d'intersection</p>
                <p>11. Balise de tête d'îlot, signalant un contournement par la droite</p>
                <br>
        </div>
      </div>
    </section>

    <?php
    // <!--Le pied de la page-->
        include("../footer/footer.php");
        
        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("../script/script_link.php");
    ?>
    
</body>
</html>