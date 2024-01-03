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
    <title>Évaluer l'état des victimes</title>
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
            <h1 style="font-weight: bold;"><b>Évaluer l'état des victimes</b></h1>
                <br>
                <ol style="list-style-type: disc;">
                    <li>Après avoir balisé les lieux, vous pouvez faire une première évaluation de l'état de 
                        la victime en vérifiant :</li>
                    <li>son état de conscience ;</li>
                    <li>sa respiration ou</li>
                </ol>
                <p>le fonctionnement de son cœur.</p>
            	<h2 style="font-weight: bold;">Conscience de la victime</h2>
                <p>Pour vérifier que la personne est consciente, il faut lui poser des questions du type "Comment
                     vous appelez-vous ? Où avez-vous mal ? ". Si la victime ne répond pas, il est fort probable qu'elle
                      soit inconsciente. Dans cet état, comme je l'avais déjà dit précédemment, il ne faut lui donner ni 
                      à boire ni à manger car la victime risque l'asphyxie.</p>
            	<h2 style="font-weight: bold;">Respiration</h2>
                <p>Pour vérifier si la victime respire, il faut voir si son torse est en mouvement. Si elle est dans
                     une telle position que vous ne pouvez pas le voir, vous pouvez toujours placer un miroir, un verre 
                     (de lunettes) ou un petit bout de papier devant le nez et/ou bouche pour voir si ces derniers oscillent 
                     ou pas, ou si de la buée d'y forme.</p>
            	<h2 style="font-weight: bold;">Battements de cœur</h2>
                <p>Pour vérifier que le cœur de la victime fonctionne, il faut lui prendre le pouls au niveau de la base 
                    du pouce. Dans certains cas vous serez obligés de le repérer au niveau de la carotide (cou) ou de la
                     fémorale (aine).</p>
                <br>
                
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Pour savoir si la victime est consciente, il faut lui poser des questions.</li>
                   <li>Pour savoir si la victime respire il faut lui placer un petit objet léger devant la
                     narine pour voir s'il oscille ou si de la buée s'y forme.</li>
                   <li>Pour savoir si la victime a le cœur qui bat il faut lui prendre le pouls.</li>
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