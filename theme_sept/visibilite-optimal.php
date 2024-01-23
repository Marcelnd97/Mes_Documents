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
    <title>Avoir une visibilité optimale</title>
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
                <h1 style="font-weight: bold;"><b>Avoir une visibilité optimale</b></h1>
                <br>
                <p>La visibilité ne se réduit pas seulement à ce qui est devant vous. Nous l'avons déjà vu 
                    dans le chapitre L'exploration visuelle : il faut regarder de tous les côtés. Pour ce faire, 
                    vous allez aussi vous servir des rétroviseurs, ces petits miroirs qui vous aideront à voir 
                    ce qui est derrière vous.</p>
                <p>Pour un réglage efficace du rétroviseur intérieur, vous devez rester installés, le dos 
                    contre le dossier de façon à ne bouger que la tête. Dans le haut du rétroviseur intérieur, 
                    vous devez voir le haut de la vitre arrière sans bouger la tête.</p>
                <p>Le rétroviseur intérieur possède la position "nuit". Il suffit de tirer sur la languette 
                    en bas du rétroviseur (signalée en rouge sur la photo ci-dessous) pour l'obtenir. Ainsi, 
                    le rétroviseur sera légèrement incliné pour éviter que vous soyez éblouis.</p>
                <br>
                <div class="row">
                <div class="col-md-12" >
                    <div class="card" 
                        style="border: none; max-width: 650px; 
                        margin: 100px auto; border: 2px solid chocolate;
                        margin-top: 10px; margin-bottom: 10px;" >
                            <img src="../images/theme_sept/optimal1.jfif">
                    </div>
                    <p class="text-muted text-center"><small>Réglage du rétroviseur intérieur</small></p>
                </div>
                </div>
                <br>
                <p>Pour les rétroviseurs extérieurs, la technique est la suivante : vous devez voir 
                    la poignée de la portière arrière dans le coin en bas à droite du rétroviseur 
                    gauche et dans le coin en bas à gauche du rétroviseur droit, sans bouger le corps.</p>
                <br>
                <div class="row">
                <div class="col-md-12" >
                    <div class="card" 
                        style="border: none; max-width: 650px; 
                        margin: 100px auto; border: 2px solid chocolate;
                        margin-top: 10px; margin-bottom: 10px;" >
                            <img src="../images/theme_sept/optimal2.jpg">
                    </div>
                    <p class="text-muted text-center"><small>Assurez-vous de voir la poignée de la portière </small></p>
                </div>
                </div>
                <br>
                
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Les rétroviseurs (intérieurs et extérieurs) vous aident à garder la bonne 
                    visibilité sur la route et donc à prendre les bonnes décisions pour pouvoir conduire en toute sécurité.</li>
                   <li>Les rétroviseurs doivent être réglés, entre autres, selon votre taille.</li>
                   <li>Les rétroviseurs intérieurs sont à régler en étant assis, dos collé au siège 
                    et les extérieurs de manière à toujours voir la poignée de la portière arrière.</li>
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