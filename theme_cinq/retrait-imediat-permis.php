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
    <title>Retrait immédiat du permis</title>
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
                <h1 style="font-weight: bold;"><b>Retrait immédiat du permis</b></h1>
                <br>
                <p>Certaines infractions peuvent être plus graves que d'autres et entraîner le retrait du permis
                     sur le champ. Je sais que cela fait peur, alors voici les situations à éviter :</p>
                <ol style="list-style-type: disc;">
                    <li>État alcoolique et usage de stupéfiants ou refus de dépistage ;</li>
                    <li>Excès de vitesse de 40 km/h et plus ;</li>
                    <li>En cas d'accident mortel, délit de fuite (si rattrapés) ou soupçon d'infraction liée à 
                        la vitesse, aux priorités, aux croisements ou dépassements ;</li>
                    <li>le préfet peut ordonner l’annulation d’un permis de conduire suite à l'avis médical 
                        d'un médecin agréé ;</li>
                    <li>conduite avec le téléphone tenu en main et en commettant une autre infraction 
                        (chevauchement de la ligne continue, dépassement interdit, refus de priorité, etc).</li>
                </ol>
                <p>Il faudra attendre la décision du tribunal pour savoir ce qu'il en résultera.</p>
                <p>Une annulation (ou invalidation) du permis de conduire s'applique à toutes les catégories
                     de permis pour une durée maximale de 3 ans (10 ans en cas de récidive). Si malgré cette 
                     décision de justice, un usager conduit un véhicule nécessitant un permis de conduire, 
                     il encourt une peine pouvant aller jusqu’à 2 ans de prison et 4 500 € d’amende.</p>
                     <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Si votre permis est seulement suspendu, il vous sera restitué à la fin de la période de 
                        suspension. S'il est annulé, il vous est retiré définitivement. 
                        Pour conduire à nouveau, il faut le repasser en entier, une fois la période d'annulation écoulée.</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Confiscation du véhicule</h2>
                <p>La confiscation obligatoire du véhicule est une sanction infligée par un juge à la suite d'une
                     infraction grave commise avec ce véhicule si l'on en est le propriétaire.</p>
                <p><b>Infractions entraînant une confiscation obligatoire du véhicule</b></p>
                <ol style="list-style-type: disc;">
                    <li>Conduite d'un véhicule sans être titulaire du permis correspondant à la catégorie du véhicule.</li>
                    <li>Récidive de conduite sous l'empire d'un état alcoolique ou sous l'emprise de stupéfiants.</li>
                    <li>Récidive de refus de se soumettre aux contrôles d'alcoolémie ou aux dépistages de stupéfiants.</li>
                    <li>La récidive de grand excès de vitesse (égal ou supérieur à 50km/h de la vitesse maximale 
                        autorisée).</li>
                    <li>Conduite sans assurance.</li>
                </ol>
                <p>Attention, cette liste est non-exhaustive, vous pouvez vérifier sur un site officiel toutes
                     les situations entraînant la confiscation du véhicule.</p>
                <p><b>Fourrière</b></p>
                <p>En cas de constatation d'une infraction pour laquelle la peine de confiscation est encourue,
                     le véhicule peut être immobilisé et mis en fourrière</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Exemple d'un cas de mise en fourrière plus anodin : Imaginons que dans votre quartier 
                        ou lotissement vient s'installer un marché tous les mercredis matin. Sauf qu'un mardi
                         soir vous l'avez oublié et vous êtes garés à votre place habituelle. Ne soyez pas 
                         surpris si votre voiture n'est plus là mercredi matin, 
                        mais qu'elle est à la fourrière. Bien sûr qu'il faut payer pour la récupérer !</p>
                    </div>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>La perte totale des points veut dire que votre permis est alors invalide,
                     donc la conduite est interdite.</li>
                   <li>Récupérer le permis n'est plus possible, il faut le repasser 
                    (code+épreuve pratique) et prévoir la visite médicale en plus.</li>
                    <li>Le retrait immédiat du permis de conduire a lieu seulement si l'infraction est très grave.</li>
                    <li>La confiscation du véhicule peut avoir lieu aussi en cas de stationnement gênant !</li>
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