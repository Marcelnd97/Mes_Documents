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
    <title>Évaluer son état psychologique</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<<body class="codebody">>
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
                <h1 style="font-weight: bold;">Évaluer son état psychologique</h1>
                <br>
                <p>Dans les chapitres précédents, je vous ai parlé des états qui peuvent mettre en cause 
                    la façon dont vous allez conduire. La fatigue peut être très dangereuse, mais l'état d'esprit dans 
                    lequel vous vous trouvez avant de prendre le volant peut aussi jouer sur votre disponibilité mentale.</p>
                <div class="card" style="background-color: #a1ee90;">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Si vous venez de vivre un choc, cela vous a affecté de façon mentale ou émotionnelle. Prenez le temps de
                         vous calmer et de relativiser pour ne pas finir dans le décor. Prenez le volant une 
                        fois que vous êtes disponible mentalement. Je pense à une situation traumatisante, stressante ou douloureuse.</p>
                    </div>
                </div>
                <br>
                <p>L'excès de confiance peut vous jouer des tours, car vous pourriez sous-évaluer les risques et prendre des décisions 
                    qui ne sont pas judicieuses, voire dangereuses.</p>
                <p>Si l'un de vos passagers vous incite à accélérer alors que vous ne pensez pas que ce soit une bonne idée, 
                    ne soyez pas influençable. C'est vous le maître du véhicule, c'est vous qui avez la responsabilité sur 
                    les passagers.</p>
                <br>
                    
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Si vous traversez une crise émotionnelle, ne conduisez pas.</li>
                    <li>Ne vous faites pas influencer par les autres passagers - c'est vous qui êtes 
                        responsable de leurs vies.</li>
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