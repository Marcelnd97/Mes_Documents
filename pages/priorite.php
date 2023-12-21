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
                <h1 style="font-weight: bold;"><b>Priorités</b></h1>
                <hr>
                <div class="card senscirc">
                    <img src="../images/priorite1.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Priorités 1 </small></p>
                <br>
                <p>1. Fin de caractère prioritaire d'une route</p>
                <p>2. Indication du caractère prioritaire d'une route</p>
                <p>3. Cédez le passage à l'intersection (signal de position)</p>
                <p>4. Cédez le passage à l'intersection, dans 150 m (signal de position)</p>
                <p>5. Arrêt à l'intersection (signal avancé)</p>
                <p>6. Stop</p>
                <p>7. Cédez le passage à la circulation venant en sens inverse</p>
                <p>8. Vous avez la priorité par rapport au sens inverse</p>
                <br>
                <div class="card senscirc">
                    <img src="../images/recuppanpriori.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Récapitulatif des panneaux sur les priorités</small></p>
                <br>
                <p>1. Vous avez la priorité</p>
                <p>2. Vous n'avez pas la priorité</p>
                <br>
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