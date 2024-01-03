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
    <title>Reconstitution du capital</title>
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
                <h1 style="font-weight: bold;"><b>Reconstitution du capital</b></h1>
                <br>
                <h2 style="font-weight: bold;">Récupération automatique : permis à 12 points</h2>
                <p><b>Après 6 mois</b></p>
                <p>En cas d'infraction ayant entraîné le retrait d'un seul point, celui-ci est récupéré 6 mois après
                     son retrait si vous n'avez commis aucune autre infraction dans l'intervalle de temps. 
                     Si, au contraire, vous avez commis une infraction, le premier point est définitivement 
                     perdu et ne pourra être récupéré qu'au bout de 2 ans si vous n'avez commis aucune autre
                      infraction pendant ce délai.</p>
                <p><b>Après 2 ans</b></p>
                <p>La récupération automatique pour atteindre 12 points est effective si vous n'avez commis aucune 
                    infraction sanctionnée par une contravention de 2e ou 3e classe.</p>
                <p><b>Après 3 ans</b></p>
                <p>Le délai de récupération automatique passe à 3 ans si votre dernière infraction commise constitue
                     un délit ou une contravention sanctionnée par une amende de 4e ou de 5e classe, par exemple :</p>
                <ol style="list-style-type: disc;">
                    <li>excès de vitesse supérieur à 20 km/h et inférieur à 50 km/h de la vitesse maximale autorisée ;</li>
                    <li>utilisation d'un téléphone tenu en main ;</li>
                    <li>conduite avec un taux d'alcool dans le sang supérieur à 0,5 g/l ;</li>
                    <li>conduite sous l'emprise de stupéfiants ;</li>
                    <li>circulation en sens interdit ;</li>
                    <li>non-port de la ceinture de sécurité (sauf pour les personnes qui bénéficient d'une dispense) ;</li>
                    <li>non-respect d'un Stop ou d'un feu rouge.</li>
                </ol>
                <p><b>Après 10 ans</b></p>
                <p>Les points retirés pour des contraventions des 4 premières classes sont réattribués automatiquement
                     au terme d'une période de 10 ans, jour pour jour, à compter de la date du premier retrait, à condition :</p>
                <ol style="list-style-type: disc;">
                    <li>que votre permis n'ait pas été annulé ou invalidé pendant ces 10 ans ;</li>
                    <li>que les points n'aient pas été perdus à la suite de délits ou de contraventions ayant occasionné 
                        un passage devant un tribunal correctionnel.</li>
                </ol>
                <p>Par exemple, 2 points perdus le 10 février 2016 sont automatiquement réattribués le 10 février 2026, 
                    même si d'autres points ont été perdus pendant ces 10 ans.</p>
             	<h2 style="font-weight: bold;">Récupération par stage : permis à 12 points </h2>
                <p>Vous pouvez récupérer jusqu'à 4 points, sans pouvoir dépasser le plafond de 12 points, avant le délai 
                    de récupération automatique.</p>
                <p>Vous devez, dans ce cas, accepter de suivre un stage de 2 jours de sensibilisation à la sécurité routière
                     à condition que le permis de conduire n'ait pas perdu sa validité.</p>
                <p>À la suite du stage, vous êtes informé de la reconstitution de points obtenus par ce moyen par lettre simple.
                      Il n'est possible de suivre qu'un seul stage de sensibilisation à la sécurité routière par an.</p>
            	<h2 style="font-weight: bold;">Récupération des points : permis probatoire </h2>
                <p><b>Perte de 1 ou 2 points</b></p>
                <p>Le point est récupéré automatiquement au terme d'un délai de 6 mois si aucune infraction n'est commise
                     pendant ce délai. Si une nouvelle infraction est commise, ce point est perdu.</p>
                <p>Si l'apprenti a commis une infraction entraînant un retrait de 2 points, le conducteur est informé par
                     lettre simple que ces 2 points lui sont retirés (il lui en reste donc 4). S'il le souhaite, 
                     le conducteur peut suivre un stage de sensibilisation à la sécurité routière lui permettant 
                     de reconstituer des points.</p>
                <p><b>Retrait d'au moins 3 points</b></p>
                <p>Le conducteur recevra une lettre recommandée avec accusé de réception l'informant du retrait de points.
                     Il sera obligé de suivre un stage de sensibilisation dans un délai de 4 mois à partir de la 
                     réception de la lettre.</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>S'il refuse ce stage, il est passible d'une amende de 135 € et risque une 
                        suspension de permis d'une durée de 3 ans.</p>
                    </div>
                </div>
                <br>
                <p>S'il effectue ce stage, le centre de formation à la sécurité 
                    routière lui délivre une attestation de suivi de stage.</p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Bonne nouvelle : le conducteur peut se faire rembourser l'amende qui a 
                        entraîné la perte des points auprès du Trésor public !</p>
                    </div>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>La récupération d'un point est automatique et la plus simple - elle se fait au bout de 6 mois
                     si aucune autre infraction n'a été commise entre temps.</li>
                   <li>La récupération des points n'est pas identique entre les permis à 12 points et les probatoires.</li>
                   <li>Il est possible de récupérer automatiquement des points au bout de 2 ou 3 ans en fonction de la 
                    nature de l'infraction.</li>
                   <li>Les points peuvent être récupérés aussi grâce aux stages de sensibilisation (tant pour le permis
                     probatoire que pour le régulier à 12 points).</li>
                   <li>C'est à partir de la perte de 3 points que le permis probatoire devient encore plus fragile et il
                     devient obligatoire pour le conducteur novice d'effectuer le stage de sensibilisation pour ne pas voir
                      son permis suspendu.</li>
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