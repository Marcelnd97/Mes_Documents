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
    <title>Le vent</title>
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
                <h1 style="font-weight: bold;"><b>Le vent</b></h1>
                <br>
                <p>En agglomération, vous n'allez pas trop le sentir, car vous serez protégés par les immeubles. 
                    Sur les routes hors agglomération, il faut vraiment être très vigilant car vous 
                    pourrez être déportés vers la gauche ou la droite en fonction de la force et de la direction du vent.</p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Être déporté est particulièrement dangereux si vous êtes en train de dépasser un véhicule.</p>
                    </div>
                </div>
                <br>
                <p>La manche à air, faite en tissu, vous démontre en temps réel si le vent est fort ou pas. 
                    Sur l'illustration ci-dessous, la manche à air montre que le vent peut être inexistant (1), 
                    faible venant de gauche (2) ou fort, venant de droite (3) :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/vent1.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Vent latéral </small></p>
                
                    </div>
                </div>
                <p>L'effet du vent peut être ressenti aussi si vous passez d'une zone exposée 
                    au vent à une zone abritée. Cela peut arriver si vous dépassez un poids lourd notamment. </p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/vent2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Attention si vous dépassez ce poids-lourd en cas de vent fort  </small></p>
                
                    </div>
                </div>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Pour limiter les effets du vent, il faut réduire la vitesse.</p>
                    </div>
                </div>
                <br>

                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Le vent se ressent davantage sur les routes hors agglomération que dans les zones habitées.</li>
                    <li>Les dépassements peuvent s'avérer dangereux, car vous pourriez être déportés vers la gauche ou la droite.</li>
                    <li>Pour réduire les effets du vent, il faut réduire la vitesse.</li>
                    <li>Si vous dépassez un véhicule, laissez un espace supplémentaire pour tenir compte des écarts que vous pourriez subir.</li>
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