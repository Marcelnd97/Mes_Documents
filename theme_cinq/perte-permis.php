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
    <title>Perte du permis (invalidation)</title>
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
                <h1 style="font-weight: bold;"><b>Perte du permis (invalidation)</b></h1>
                <br>
                <h2 style="font-weight: bold;">Perte totale des points</h2>
                <p>En cas de délit de fuite, de conduite en état d'ivresse ou d'homicide involontaire 
                    vous perdez 6 points. Si vous commettez plusieurs infractions, vous les cumulez 
                    et c'est 8 d'un trait.</p>
                    <p>Pour un novice durant la 1re année de permis, cela concerne toutes les infractions 
                    à 6 points.</p>
                <p>S'il vous arrive de perdre tous vos points, votre permis est alors invalidé et pour
                     toutes les catégories (auto, moto...).</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Vous ne pouvez plus suivre de stage de sensibilisation et devez à nouveau passer les mêmes épreuves, sauf que vous 
                        devez vous soumettre à une visite médicale en plus. Tout cela bien sûr est à vos frais.</p>
                    </div>
                </div>
                <h2 style="font-weight: bold;">Comment le saurez-vous ?</h2>
                <p>Une lettre recommandée avec accusé de réception vous sera expédiée, vous indiquant
                     l'invalidation de votre permis de conduire. Vous aurez ensuite une quinzaine de 
                     jours pour restituer votre permis à la préfecture (ou gendarmerie/commissariat).</p>
                <p>Le permis de conduire perd alors sa validité. Il est donc obligatoire de le repasser.</p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Attention aux délais : vous devez attendre au moins 6 mois (1 an en cas de nouveau 
                        retrait total des points dans les 5 ans suivant le précédent). Dès que votre
                         permis est invalidé, vous pouvez faire les démarches et passer l'examen, 
                        mais vous devez respecter le délai de 6 mois, voire 1 an avant de reprendre le volant.</p>
                    </div>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>La perte totale des points veut dire que votre permis
                     est alors invalide, donc la conduite est interdite.</li>
                   <li>Récupérer le permis n'est plus possible, il faut le 
                    repasser (code+épreuve pratique) et prévoir la visite médicale en plus.</li>
                   <li>Vous pouvez le repasser 6 mois plus tard et attendre 
                    1 an avant de reprendre le volant.</li>
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