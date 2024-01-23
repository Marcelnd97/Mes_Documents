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
    <title>Les visites techniques</title>
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
                <h1 style="font-weight: bold;"><b>Les visites techniques</b></h1>
                <br>
                <p>C'est un passage obligatoire pour tout conducteur, lui permettant de vérifier si son véhicule 
                    fonctionne correctement. Une sorte de bilan de santé. Vous devez donc prendre l'initiative
                     de présenter votre véhicule dans un centre agréé avant la date limite.</p>
                <h2 style="font-weight: bold;"><b>Quand effectuer le contrôle ?</b></h2>
                <p>Si votre voiture est neuve, vous devez la présenter au contrôle technique entre ses 3,5 ans 
                    et 4 ans après la date de sa première mise en circulation. Les contrôles sont ensuite 
                    obligatoires tous les 2 ans.</p>
                <h2 style="font-weight: bold;"><b>Issue du contrôle</b></h2>
                <p>Le contrôle technique vérifie 133 points sur le véhicule.</p>
                <p>Si le véhicule passe le contrôle, le technicien remet au propriétaire :</p>
                <ol style="list-style-type: disc;">
                    <li>un procès verbal indiquant le résultat du contrôle,</li>
                    <li>une vignette collée sur le pare-brise avec la date de validité,</li>
                    <li>une autre petite vignette collée au dos du certificat d'immatriculation.</li>
                </ol>
                <p>Si le véhicule doit repasser le contrôle, vous avez 2 mois pour faire les réparations 
                    indiquées sur le procès-verbal et faire la contre-visite.</p>
                <p>Une lettre, sur le procès verbal et la vignette sur le certificat d'immatriculation, 
                    indique le résultat du contrôle technique :</p>
                <ol style="list-style-type: disc;">
                    <li>A (Accepté), le contrôle est favorable,</li>
                    <li>S (Sursis), une contre-visite est obligatoire,</li>
                    <li>R (Refusé), le véhicule ne peut plus circuler dès minuit le jour du contrôle.</li>
                </ol>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Les véhicules utilitaires de moins de 3,5 tonnes doivent subir une visite
                         complémentaire de contrôle anti pollution.</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;"><b>Coût</b></h2>
                <p>Le prix d'un contrôle technique peut varier selon les régions et son tarif est entre 80 et 100 euros.</p>
                <h2 style="font-weight: bold;"><b>En cas de vente du véhicule</b></h2>
                <p>Si vous voulez vendre votre véhicule, c'est vous qui devrez vous charger 
                    de son contrôle technique et non pas son acheteur.</p>
                <p>Lors de la vente de votre véhicule, le contrôle technique doit avoir moins de 6 mois.</p>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Tout véhicule de plus de 4 ans doit subir un contrôle technique, 
                    sauf si ce dernier a été fait dans les 6 mois précédant la vente.</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;"><b>Sanctions</b></h2>
                <p>Si le contrôle technique n'est à jour, vous encourez :</p>
                <ol style="list-style-type: disc;">
                    <li>une amende de 4e classe (135€),</li>
                    <li>et une immobilisation du véhicule.</li>
                </ol>
                <p>Après la constatation du défaut de contrôle technique, les forces de l'ordre 
                    conservent le certificat d'immatriculation. Vous avez alors 7 jours pour réaliser le contrôle. 
                    C'est seulement sur présentation du procès verbal positif du contrôle technique que les agents 
                    vous rendront le certificat d'immatriculation.</p>
                <br>
                                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Le contrôle technique est obligatoire pour tout véhicule.</li>
                   <li>Les contrôles se font tous les 2 ans, sauf pour les voitures neuves 
                    (avant qu'elle n'accomplisse ses 4 ans).</li>
                   <li>En fonction de l'issue du contrôle, une lettre est apposée pour signaler 
                    si la voiture passe le test ou si elle doit le repasser.</li>
                   <li>Un macaron est collé sur le pare-brise pour signaler la date du prochain 
                    contrôle technique.</li>
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