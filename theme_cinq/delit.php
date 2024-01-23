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
    <title>Délits</title>
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
                <h1 style="font-weight: bold;"><b>Délits</b></h1>
                <br>
                <p>Les délits sont les infractions les plus importantes et les plus graves pour lesquelles 
                    le conducteur sera jugé devant un tribunal correctionnel. Les délits peuvent entraîner 
                    des peines d'emprisonnement !</p>
                <p>Le juge peut également obliger à suivre des travaux d'intérêt général.</p>
                <h2 style="font-weight: bold;">Exemples de délits</h2>
                <p><b>Alcool et drogues</b></p>
                <ol style="list-style-type: disc;">
                    <li>Conduite ou récidive de conduite en état d'ivresse manifeste égale ou supérieure à 0,8 g / l 
                        de sang ou en état d’ivresse manifeste ;</li>
                    <li>Refus de se soumettre à une vérification de présence d’alcool dans le sang ;</li>
                    <li>Conduite après usage de stupéfiants ou refus de dépistage de stupéfiants.</li>
                </ol>
                <p><b>Vitesse</b></p>
                <ol style="list-style-type: disc;">
                    <li> Excès de vitesse ou récidive d'excès de vitesse supérieur à 50 km / h ;</li>
                </ol>
                <p><b>Permis de conduire</b></p>
                <ol style="list-style-type: disc;">
                    <li>Conduite malgré une suspension administrative ou judiciaire 
                        du permis de conduire ou une rétention du permis de conduire ;</li>
                    <li>Conduite sans permis de conduire.</li>
                </ol>
                <p><b>Autres</b></p>
                <ol style="list-style-type: disc;">
                    <li>  Blessures involontaires causées à un tiers et entraînant une 
                        interruption de travail de plus de 3 mois</li>
                </ol>
                <h2 style="font-weight: bold;">Délits de fuite</h2>
                <p>Le délit de fuite est le fait de fuir vos responsabilités lorsque vous êtes impliqué 
                    dans un accident. En effet, suite à un accident, il faut réaliser un constat amiable 
                    pour la prise en charge des frais matériels des autres usagers impliqués. Et au pire de
                     pouvoir aider une victime blessée.</p>
                <p>Cette infraction au Code de la route est un délit puni de 3 ans de prison et de 75 000 €
                     d’amende (7 ans de prison et 100 000€ d'amende en cas d'accident mortel !).</p>
                <h2 style="font-weight: bold;">Non-assistance à personne en danger</h2>
                <p>La non-assistance à personne en danger est le fait de ne pas secourir ou aider des victimes 
                    d’accident alors que la personne pouvait le faire sans risques pour elle-même. Cette 
                    infraction entraîne 5 ans de prison et 75 000€ d'amende.</p>
                <h2 style="font-weight: bold;">Refus d'obtempérer</h2>
                <p>Le refus d’obtempérer est le fait de ne pas obéir à la demande des forces de l’ordre lors 
                    un contrôle routier ou d'un dépistage (alcool ou drogue). L'infractionniste encourt un 
                    retrait de 6 points, 7 500€ d'amende, une suspension de permis et 1 an de prison 
                    (5 ans d'emprisonnement et 75 000€ en cas de mise en danger d'autrui).</p>
                
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Si vous commettez un délit, vous passerez au tribunal correctionnel.</li>
                   <li>Si vous conduisez sans permis de conduire, en état d'ivresse manifeste supérieure à 0,8g/l de sang, 
                    causant des blessures à un tiers par exemple, vous serez en situation de délit.</li>
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