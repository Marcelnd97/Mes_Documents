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
    <title>Les situations à rique</title>
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
                <h1 style="font-weight: bold;">Les situations à rique</h1>
                <br> 
                <p>Dans le chapitre précédent, nous avons déjà vu qu'observer pour pouvoir agir était important. 
                    Il faut savoir dans quelles situations vous devez redoubler de vigilance :</p>
                <p><b>Les intersections</b> sont des endroits où se côtoient les différents usagers. Malheureusement, 
                    tous ces usagers ne respectent pas forcément la signalisation donc il faut être très vigilant. 
                    Assurez-vous d'y être bien vus et bien compris.</p>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Si vous étiez le conducteur de la voiture représentée sur la photo, que feriez-vous ?</p>
                  </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/risque1.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Intersection avec un passage piéton</small></p>
                
                <p><b>Réponse : </b> Il aurait fallu actionner le clignotant gauche et ralentir. Les piétons sur cette photo sont
                 des personnes âgées qui ne marchent pas vite et ne voient pas forcément très bien.</p>
                 <p>Avant de <b>changer de direction</b>, assurez-vous que ce soit possible de tourner. 
                    Imaginez que vous mettez le clignotant droit, puis vous vous rendez compte que c'est interdit, 
                    donc vous l'éteignez. Que va comprendre la personne derrière vous ?</p>
                    <p class="text-muted text-center"><small >Rue à sens unique</small></p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Donnez des signaux conformes à vos actions.</p>
                    </div>
                </div>
                <br>
                <p>Pour ce qui concerne le <b>dépassement</b>, assurez-vous que toutes les conditions soient réunies. 
                    En effet, vous pourriez être surpris du surgissement des 
                    autres usagers qui ne savent pas ce que vous êtes en train de faire.</p>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Quelle que soit l'action que vous souhaitez entreprendre, pensez d'abord à sa faisabilité 
                        pour ne pas vous retrouver à donner des signaux contradictoires aux autres usagers.</li>
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