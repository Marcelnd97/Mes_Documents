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
    <title>Le brouillard</title>
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
                <h1 style="font-weight: bold;"><b>La brouillard</b></h1>
                <br>
                <p>Le brouillard est davantage présent hors agglomération. En effet, dans certaines villes ou 
                    villages il peut être plus épais que dans de très grandes villes.</p>
                <p>Si votre véhicule est équipé de feux de brouillard avant et arrières, il faut alors les utiliser. 
                    Sinon, au minimum, vous devez utiliser les feux de croisement.</p>
                <div class="card senscirc">
                    <img src="../images/theme_trois/brouillard1.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Feux à faire fonctionner en cas de brouillard</small></p>
                <p>Ce qui est gênant en cas de brouillard, c'est la visibilité. Donc il me semble judicieux de 
                    ne pas conduire vite, non ? Pensez à ne pas dépasser les 50 km/h. Pour vous arrêter,
                     faites-le dans la zone de visibilité que vous avez devant vous.</p>
                <p>On pourra vous annoncer le brouillard (ou quelque chose qui lui ressemble) avec de la signalisation 
                    temporaire ou même permanente :</p>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/theme_trois/brouillard2.jpg" width="250px">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Annonce de nappes de brouillard ou de fumées épaisses</small></p>
                
                <p>Le brouillard va beaucoup entraver la visibilité. La règle à appliquer impérativement 
                    est de l'évaluer en mètres.</p>
                <p>Si la visibilité est inférieure à 50 m, il ne faut surtout pas dépasser les 50 km/h.</p>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Observez la photo ci-dessous. Que feriez-vous si vous étiez dans la 
                        voiture dont on voit le rétroviseur intérieur ?</p>
                  </div>
                </div>
                <br>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/theme_trois/brouillard3.jpg" width="300px">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Brouillard sur les petites routes</small></p>
                <p>Réponse : C'est une toute petite route de campagne et la visibilité n'est pas bonne. 
                    Elle est peut-être supérieure à 50 m, mais je vous conseille de ne pas dépasser les 50 km/h. 
                    Même 40 km/h ou 30 km/h seraient plus adaptés dans ce cas précis. </p>
                <p>En revanche, sur la photo ci-dessous, la situation est meilleure. On voit bien devant, 
                    mais je vous conseille tout de même de rester vigilants, car vous n'êtes jamais à l'abri de nappes de 
                    brouillard inattendues. Aussi, remarquez le panneau annonçant les virages successifs !</p>
                <div class="card senscirc">
                    <img src="../images/theme_trois/pluie2.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Brouillard et virages </small></p>
                
                <p>Si la visibilité est supérieure à 70 m, vous pouvez rouler à 70 km/h 
                    maximum et garder un intervalle de sécurité de 70 mètres.</p>
                <p>Si la visibilité est supérieure à 80 m, vous pouvez rouler à 80 km/h 
                    maximum et garder un intervalle de sécurité de 80 mètres.</p>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>N'utilisez pas les feux de route, ils forment un mur opaque devant le véhicule.</li>
                    <li>Ne circulez pas seulement avec les feux de position.</li>
                    <li>Éteignez les feux de brouillard arrière dès que la visibilité redevient bonne.</li>
                    <li>Ne suivez pas aveuglément les autres usagers.</li>
                    <li>Ne dépassez pas les autres véhicules !</li>
                </ol>
                <p><b>Récapitulatif des feux à allumer en fonction des conditions climatiques : </b></p>
                <div class="card senscirc">
                    <img src="../images/theme_trois/brouillard5.jpg" height="500px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Récapitulatif des feux à utiliser </small></p>
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