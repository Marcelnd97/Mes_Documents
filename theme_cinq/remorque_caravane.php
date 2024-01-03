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
    <title>Remorques et caravanes</title>
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
                <h1 style="font-weight: bold;"><b>Remorques et caravanes</b></h1>
                <br>
                <p>Si ce que vous envisagez de transporter ne peut pas entrer dans la voiture, 
                    vous pouvez très bien opter pour une remorque ou une caravane. Le permis B 
                    permet de tracter une remorque de 750 kg de PTAC ou moins. Si la remorque pèse plus de 750 kg, 
                    il existe 3 possibilités : si la somme des PTAC ne dépasse pas 3 500 kg, le permis B suffit.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_cinq/remorque1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Règles à respecter permis B </small></p>
                    </div>
                </div>
                
                <p>De 3 500 kg à 4 250 kg, il faut suivre une formation de 7 heures (B96) :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_cinq/remorque2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Formation en cas de poids dépassé </small></p>
                    </div>
                </div>
                <p>Au-delà de 4 250 kg, il faut posséder le permis BE. Si c'est la camionnette qui dépasse le poids,
                    mais pas la remorque, c'est le permis BE qu'il faut envisager de passer :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_cinq/remorque3.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Il faut passer le permis BE</small></p>
                    </div>
                </div>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Une remorque de plus de 500 kg, doit avoir sa propre plaque d'immatriculation et son certificat d'immatriculation.
                         Une remorque (même légère) a une incidence sur la trajectoire.</p>
                    </div>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Il faut faire attention à la différence de poids entre la voiture (véhicule tractant) 
                    à vide et chargée.</li>
                   <li>Il ne faut pas que les deux PTAC  dépassent 3 500 kg autrement, il faut suivre une 
                    formation de 7 heures.</li>
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