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
    <title>Être à l'aise</title>
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
                <h1 style="font-weight: bold;"><b>Être à l'aise</b></h1>
                <br>
                <p>Il est vraiment primordial d'être bien installé parce que vos mouvements seront très limités en
                     étant assis et concentrés sur la route. Vous ne pourrez ni vous baisser ni vous lever pour aller
                      chercher un objet qui tombe à vos pieds ou sur le siège arrière. Bien entendu, si vous êtes accompagnés, 
                    les choses sont plus simples, mais commençons par la situation où vous êtes tout seuls.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Être bien installé veut donc dire que vous pouvez voir 
                        la route devant vous sans être gênés par les passagers ou les bagages.</p>
                    </div>
                </div>
                <br>
                <p>Cela s'applique aussi à la boîte de vitesses. Si par exemple un GPS est branché dans l'allume-cigare, 
                    le câble peut gêner le changement de vitesse. Le volant et les pédales
                     doivent aussi être accessibles.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Être bien installé veut aussi dire se sentir bien dans ses vêtements et sur son siège.</p>
                    </div>
                </div>
                <br>
                <p>Si un pantalon est trop serré, un pull vous gratte ou le réglage du siège ne vous convient pas, 
                    sachez que vous ne serez pas concentrés sur la route. En effet, vous allez plutôt avoir tendance 
                    à vous soulager de la gêne que d'être alertes sur la circulation. 
                    Le cerveau ne peut pas s'occuper d'autant d'actions, surtout lorsque l'on est conducteur novice.</p>
                <br>
                
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>À tout moment, vous devez avoir accès à toutes les commandes de la voiture sans être gênés pour conduire.</li>
                   <li>Si vous n'êtes pas à l'aise, vous risquez d'être déconcentrés !</li>
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