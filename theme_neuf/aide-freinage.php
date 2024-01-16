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
    <title>Aides au freinage</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
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
                <h1 style="font-weight: bold;"><b>Aides au freinage</b></h1>
                <br>
                <h2 style="font-weight: bold;">ABS (ABR) et AFU</h2>
                <p><b>ABS</b></p>
                <p>Il s'agit d'un dispositif de sécurité active car sa fonction est d'éviter l'accident.</p>
                <p>ABS (aussi appelé ABR) est le système d'antiblocage des roues qui en cas de freinage 
                    d'urgence permet de garder le contrôle de la direction sans raccourcir les distances 
                    de freinage.</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Si le voyant ABS est allumé sur le tableau de bord, il représente le dysfonctionnement 
                        de l'antiblocage des roues, donc direction le garage. 
                        C'est un témoin d'alerte. Vous pouvez donc toujours rouler, mais moins vite.</p>
                    </div>
                </div>
                <br>
                <p>Le système ABS évite le blocage des roues par une succession de blocages/ déblocages. 
                    Vous devez donc appuyer à fond sur la pédale de frein sans relâcher la pression.</p>
                <p><b>AFU</b></p>
                <p>C'est un complément idéal de l'ABS qui détecte l'urgence d'après la vitesse d'enfoncement 
                    de la pédale de frein et amplifie le freinage. Ils n'ont pas pour fonction de raccourcir 
                    les distances de freinage.</p>
                <br>

                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>L'ABS est le système antiblocage des roues, l'AFU le complète.</li>
                   <li>Il ne faut pas freiner de façon successive, mais d'un seul coup en appuyant 
                    à fond sur la pédale.</li>
                   <li>Ni l'ABS ni l'AFU ne raccourcissent les distances de freinage !</li>
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