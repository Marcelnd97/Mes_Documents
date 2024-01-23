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
    <title>Un achat éco-responsable</title>
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
                <h1 style="font-weight: bold;"><b>Un achat éco-responsable</b></h1>
                <br>
                <p>Avec la voiture que vous allez conduire, vous allez plus ou moins contribuer à la pollution.
                     Heureusement que l'industrie de l'automobile a beaucoup évolué et vous allez avoir le choix !</p>
                <p>Si vous voulez acheter une voiture neuve, alors vous serez certainement confrontés à la lecture
                     d'une étiquette-énergie qui résume les performances énergétiques du véhicule.</p>
                <h2 style="font-weight: bold;"><b>Étiquette énergétique</b></h2>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Cette étiquette est obligatoirement apposée sur une voiture neuve pour faciliter le 
                        choix entre les différents modèles. Pour un véhicule d'occasion, elle n'est pas obligatoire.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                        style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_dix/achat.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Étiquette énergie</small></p>
                    </div>
                </div>
                <br>
                
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Une fois le véhicule acheté, vous pouvez connaître le taux de rejets en CO2 au kilomètre parcouru 
                        sur le certificat d'immatriculation (voir le cours sur les "documents obligatoires").</p>
                    </div>
                </div>
                <br>
                <p>Une autre étiquette énergie permet aussi de choisir ses pneus selon 3 critères :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                        style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_dix/achat2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Étiquette énergie pour les pneus</small></p>
                    </div>
                </div>
                
                <br>
                <p>1. la consommation de carburant ;</p>
                <p>2. la sécurité (adhérence sur le sol mouillé) ;</p>
                <p>3. le bruit de roulement externe des pneumatiques.</p>
                <h2 style="font-weight: bold;">Types de voitures</h2>
                <p>Il existe plusieurs types de voitures, alors voici quelques notions de base :</p>
                <ol style="list-style-type: disc;">
                    <li>voiture essence ;</li>
                    <li>voiture diesel ;</li>
                    <li>voiture GPL ;</li>
                    <li>voiture hybride ;</li>
                    <li>voiture électrique.</li>
                </ol>
                
                <p>C'est la voiture diesel qui pollue le plus, puis l'essence, puis la GPL, puis l'hybride
                     et enfin vient l'électrique.</p>
                <p><b>Voiture électrique</b></p>
                <p>Les voitures électriques font peu de bruit. Elles ne consomment pas d’énergie dans le freinage 
                    et dans les embouteillages. Et elle s’auto-(re)chargent dans les descentes, ou lors du freinage.</p>
                <p>Depuis quelques années :</p>
                <ol style="list-style-type: disc;">
                    <li>les constructeurs ont augmenté leur autonomie,</li>
                    <li>les prix sont plus abordables,</li>
                    <li>et vous pouvez bénéficier d'une prime à la conversion plus ou moins importante.</li>
                </ol>
                <p>Malgré tout cela, son autonomie et sa vitesse restent limitées. Et le coût très élevé de
                     l’accumulateur et de la batterie représentent plus de la moitié du prix du véhicule.</p>
                <p><b>Voiture hybride</b></p>
                <p>Elle assure les déplacements à allure basse jusqu'à 50 km /h. Son moteur fonctionne de manière 
                    électrique d'un côté et avec de l'essence ou du diesel de l'autre. Le moteur thermique prend le
                     relais pour les vitesses plus élevées ou les accélérations plus fortes.</p>
                <p><b>Bonus/malus</b></p>
                <p>Depuis plusieurs années, en achetant un véhicule électrique, vous pouvez bénéficier d'une aide 
                    financière à l'achat. Par contre, en achetant un véhicule trop polluant, vos frais d'immatriculation
                     seront plus importants. Il est donc important de bien choisir votre véhicule !</p>
                <p><b>Prime à la conversion</b></p>
                <p>Lors de l'achat d'un véhicule, pour bénéficier de la prime à la conversion, en plus du bonus
                     écologique, vous devez d'abord vous séparer de votre véhicule polluant. Il est alors destiné à
                      la casse. D'autres conditions doivent également être respectées en fonction de votre situation 
                      fiscale. Toutes les informations sur ces conditions sont indiquées sur le site internet du
                       "Service Public". </p>
                <p><b>Vignette Crit'air</b></p>
                <p>Elle permet de classer les véhicules en fonction de leurs émissions polluantes atmosphériques.
                     Ainsi les véhicules aux classes les plus basses :</p>
                <ol style="list-style-type: disc;">
                    <li>ont des facilités de stationnement,</li>
                    <li>des modalités de circulation privilégiées</li>
                    <li>et peuvent circuler dans les zones de circulation restreintes ou lors de pics de pollution.</li>
                </ol>
                <p>La vignette Crit'Air est obligatoire à Paris, Lyon, Lille, Strasbourg, Toulouse et Grenoble. 
                    Circuler dans ces villes en l'absence de vignette Crit'air est sanctionné d'une amende de 68€.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                        style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_dix/achat2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>vignette critair sur un pare brise</small></p>
                    </div>
                </div>
                
                <p>Cette vignette doit être posée sur le pare-brise avant, pour faciliter son contrôle par les agents 
                    des forces de l'ordre. Il existe 6 catégories de vignette, de 0 à 5. Pour 
                    information voici le détail des différentes classes :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                        style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_dix/achat3.jfif">
                        </div>
                        <p class="text-muted text-center"><small>vignettes critair</small></p>
                    </div>
                </div>
                <p>Si votre véhicule est de catégorie 4 ou 5, vous pouvez être interdit de circuler dans certaines 
                    zones de circulation restreintes, lors des pics de pollution. Si vous utilisez malgré cela 
                    votre véhicule, vous encourez une amende de 35€, ainsi que l'immobilisation du véhicule.</p>
                <p><b>Boîte automatique vs. boîte manuelle ?</b></p>
                <p>Les nouvelles boîtes automatiques ne consomment pas beaucoup plus que les boîtes manuelles.</p>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Les étiquettes sur les voitures neuves vous permettent de décoder leur nature écologique.</li>
                   <li>Les informations renseignées concernent la consommation de carburant, le bruit et 
                        l'adhérence des pneus.</li>
                   <li>La voiture Diesel reste la plus polluante, l'électrique la moins polluante.</li>
                   <li>La boîte de vitesses automatique ne fait pas moins polluer.</li>
                   <li>La production française des voitures a augmenté en 2015 et de ce fait tire la 
                        production automobile vers le haut.</li>
                   <li>C'est la Corée du Sud qui détient la plus grande usine de construction automobile au monde.</li>
                   <li>Les Français achètent principalement les voitures françaises.</li>
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