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
    <link rel="stylesheet" href="../pages/assets/style.css">
    <title>Croisement difficile</title>
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
              <h1><b>Croisements difficiles</b></h1>
              <br> 
              <h4><b>Routes en pente : croisements difficiles</b></h4>
              <p>Ici il faut que la manœuvre soit facilitée pour le véhicule pour lequel c'est le plus dangereux.</p>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>Il est plus difficile de repartir dans la montée, 
                    c'est pourquoi le véhicule descendant s'arrête en premier et facilite le passage du véhicule montant.</p>
                </div>
              </div>
              <br>
              
              <div class="card senscirc">
                <img src="../images/priorivoiturmontant.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Priorité au véhicule qui monte</small></p>
              
              <h3><b>Routes en pente : croisements impossibles</b></h3>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>Lorsque les croisements deviennent impossibles, c'est au véhicule le plus maniable de reculer.</p>
                </div>
              </div>
              <br>
              <p>Les règles de priorité à respecter :</p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Les règles de priorité à respecter :</li>
              </ol>
              <div class="card senscirc">
                    <img src="../images/reculerseul.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Vous reculez seuls face à plusieurs véhicules</small></p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>un véhicule léger doit reculer face à un véhicule lourd :</li>
              </ol>
              <div class="card senscirc">
                    <img src="../images/voiturlegerfacelourd.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Le plus lourd a la priorité</small></p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>le véhicule qui descend recule si les deux véhicules sont de même catégorie </li>
              </ol>
              <div class="card senscirc">
                    <img src="../images/reculmemegabari.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Recule celui qui descend en cas de même gabarit</small></p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>si une place d'évitement est disponible, 
                    c'est au véhicule qui se trouve près de cette place de l'utiliser même s'il doit reculer.</li>
              </ol>
              <div class="card senscirc">
                    <img src="../images/placevitement.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Place d'évitement</small></p>

              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Les règles des croisements difficiles ou impossibles s'effectuent en fonction du poids, 
                    de l'emplacement des véhicules et de leur nombre.</li>
                <li>Monter est plus difficile que de descendre.</li>
                <li>Manier un véhicule lourd est plus difficile que de manier un véhicule léger.</li>
                <li>Manier un ensemble de véhicules est plus difficile que de manier un seul véhicule.</li>
                <li>Si un emplacement est près du véhicule qui monte, il peut s'en servir pour laisser passer le véhicule qui descend.</li>
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