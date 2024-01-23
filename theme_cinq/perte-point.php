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
    <title>Perte de points</title>
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
                <h1 style="font-weight: bold;"><b>Perte de points</b></h1>
                <br>
                <p>La perte des points variera en fonction de l'infraction. 2 sortes d'infraction entraînent 
                    une perte de points :</p>
                <ol style="list-style-type: disc;">
                    <li>les contraventions (perte de 1 à 6 points) ;</li>
                    <li>les délits (perte directe de 6 points).</li>
                </ol>
                <p>Si vous commettez plusieurs infractions en même temps, vous pouvez perdre jusqu'à 8 points.</p>
                <p>Si pendant la période probatoire vous commettez des infractions vous faisant perdre 3 points
                     (ou plus), vous serez obligés de passer par un stage de sensibilisation payant.</p>
                <p>Suite à certaines infractions, le juge peut également prononcer l'obligation de suivre 
                    un stage de sensibilisation.</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>En cas de retrait de point(s) pendant la période probatoire, la majoration
                         automatique par année s'arrête.</p>
                    </div>
                </div>
                <br>
                <p>Vous saurez que vous avez perdu des points par une lettre simple. Pour connaître le nombre 
                    de points qu'il vous reste, il faut se rendre à la préfecture et y consulter un fichier confidentiel. 
                    Il est aussi possible de connaître
                     votre solde des points sur le site Télépoints du Ministère de l’Intérieur.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Seules les autorités administratives et judiciaires peuvent 
                        connaître votre nombre de points.</p>
                    </div>
                </div>
                <p>Bonne nouvelle : toutes les infractions n'entraînent pas la perte des points, mais je 
                    ne vous encourage pas à être plus tolérants pour autant.</p>
                <br>
                                
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>La perte de points varie en fonction de l'infraction.</li>
                   <li>Les contraventions font perdre de 1 à 6 points ; les délits de 6 voire 8 s'ils sont cumulés.</li>
                   <li>Certaines infractions (plus graves) peuvent finir au tribunal.</li>
                   <li>Tout conducteur confirmé a la possibilité de récupérer les points perdus 
                        en suivant un stage, mais à condition que son solde de points soit toujours positif.</li>
                   <li>Le conducteur novice, auteur d'une infraction et à qui on a retiré 3 points ou plus, 
                    est obligé de suivre un stage de sensibilisation payant.</li>
                   <li>Pour connaître le nombre de points restant, vous pouvez vous connecter sur le site de Télépoints 
                    ou vous rendre en Préfecture et y consulter un fichier confidentiel.</li>
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