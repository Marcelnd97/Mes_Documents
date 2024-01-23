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
    <title>Le soleil</title>
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
                <h1 style="font-weight: bold;"><b>Soleil</b></h1>
                <br>
                <p>Ne pensez pas que s'il fait beau, vous ne risquez rien. Le soleil peut 
                    être placé juste en face de vous, ou sur les côtés et vous éblouir aussi !</p>
                <p>Une succession rapide de zones d'ombres et de zones ensoleillées empêchent l’œil 
                    de distinguer clairement les objets. Pensez donc à avoir toujours les lunettes de 
                    soleil et à baisser le pare-soleil. Vous pouvez vous en servir pour réduire l'éblouissement 
                    de face ou sur le côté.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/soleil.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Éblouissement par le soleil en sortant de l'agglomération</small></p>
                
                    </div>
                </div>
                <br>

                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Le soleil peut éblouir et vous faire perdre le contrôle du véhicule ;</li>
                    <li>Pensez à porter les lunettes de soleil, mais enlevez-les au crépuscule !</li>
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