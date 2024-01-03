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
    <title>Louïe</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">
     <!--L'en-tête de la page-->
     <?php
        include("../header/header.php")
     ?>
    <br><br><br>
    <section>
      <div class="container">
        <!-- Content here -->
        <div class="row">
            <div class="col-md-10" style="padding-left: 25%;">
                <h1 style="font-weight: bold;">L’ouïe</h1>
                <br> 
                <h3 style="font-weight: bold;">Acuité auditive</h3>
                <p>Bien entendre est aussi indispensable pour la conduite, car si l'on ne voit pas quelqu'un 
                    freiner brusquement, on peut l'entendre. Les sirènes de pompiers sont importantes à repérer pour
                     pouvoir céder le passage à ces véhicules prioritaires.</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Si vous n'entendez pas bien, vous ne pouvez pas bien vous repérer dans votre environnement.
                    </p>
                </div>
                </div>
                <br>
                <p>Il ne faut donc pas écouter de la musique avec un casque ou des écouteurs, car cette action réduit votre 
                    capacité à entendre les sons et à les interpréter correctement.</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Si vous n'entendez pas bien, vous ne pouvez pas bien vous repérer dans votre environnement.
                    </p>
                </div>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Bien entendre est important pour bien comprendre les sons et savoir les interpréter.</li>
                    <li>Écouter de la musique avec un casque ou des écouteurs n'est pas compatible avec la conduite.</li>
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