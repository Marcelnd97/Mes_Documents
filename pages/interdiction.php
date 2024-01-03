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
    <title>Interdictions</title>
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
                <h1 style="font-weight: bold;"><b>Interdiction</b></h1>
                <hr>
                <div class="card senscirc">
                    <img src="../images/paninterdiction1.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux d'interdiction 1 </small></p>
                <br>
                <p>1. Circulation interdite à tous véhicules dans les 2 sens</p>
                <p>2. Sens interdit</p>
                <p>3. Interdiction de tourner à gauche à la prochaine intersection</p>
                <p>4. Interdiction de tourner à droite à la prochaine intersection</p>
                <p>5. Interdiction de faire demi-tour jusqu'à la prochaine intersection INCLUSE</p>
                <p>6. Interdiction de dépasser tous les véhicules à moteur autres que les deux-roues</p>
                <p>7. Interdiction de dépasser pour les transports de marchandises de plus de 3,5 tonnes</p>
                <p>8. Arrêt obligatoire au poste de douane</p>
                <br>
                <div class="card senscirc">
                    <img src="../images/paninterdiction2.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux d'interdiction 2</small></p>
                <br>
                <p>9. Arrêt obligatoire au barrage de gendarmerie</p>
                <p>10. Arrêt obligatoire au barrage de police</p>
                <p>11. Arrêt obligatoire au poste de péage</p>
                <p>12. Accès interdit à tous les véhicules à moteur</p>
                <p>13. Accès interdit aux véhicules affectés au transport de marchandises, même aux camionnettes</p>
                <p>14. Accès interdit aux véhicules affectés au transport de marchandises de plus de 5,5t</p>
                <p>15. Accès interdit aux piétons</p>
                <p>16. Accès interdit aux cycles</p>
                <div class="card senscirc">
                    <img src="../images/paninterdiction3.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panonceau 3</small></p>
                <br>
                <p>17. Accès interdit aux véhicules à moteur à l'exception des cyclomoteurs</p>
                <p>18. Accès interdit aux véhicules à traction animale</p>
                <p>19. Accès interdit aux véhicules agricoles à moteur</p>
                <p>20. Accès interdit aux voitures à bras à l'exclusion de celles visées à l'article R.412-34 du code la de route</p>
                <p>21. Accès interdit aux véhicules de transport en commun</p>
                <p>22. Accès interdit aux cyclomoteurs</p>
                <p>23. Accès interdit aux motos et motos légères</p>
                <p>24. Accès interdit aux véhicules tractant une caravane ou une remorque de plus de 250 kg</p>
                <p>25. Accès interdit aux véhicules de transport de marchandises de plus de ... m de long</p>
                <div class="card senscirc">
                    <img src="../images/paninterdiction4.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux d'interdiction 4</small></p>
                <br>
                <p>26. Accès interdit aux véhicules dont la largeur, chargement compris, dépasse la dimension indiquée</p>
                <p>27. Accès interdit aux véhicules dont la hauteur, chargement compris, dépasse la dimension indiquée</p>
                <p>28. Accès interdit aux véhicules dont le PTAC (ou le PTRA) dépasse le poids indiqué sur le panneau</p>
                <p>29. Accès interdit aux véhicules pesant sur un essieu plus de 2,5t</p>
                <p>30. Limitation de vitesse (à 50km/)</p>
                <p>31. Signaux sonores interdits</p>
                <p>32. Interdiction aux véhicules de circuler sans maintenir entre eux au moins l'intervalle indiqué</p>
                <p>33. Accès interdit aux véhicules transportant des marchandises explosives ou facilement inflammables</p>
                <p>34. Accès interdit aux véhicules transportant des marchandises susceptibles de polluer des eaux</p>
                <p>35. Accès interdit aux véhicules transportant des marchandises dangereuses</p>
                <br>
                <div class="card senscirc">
                    <img src="../images/paninteretfininterdic.jpg" height="150px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux d'interdiction et fin d'interdiction</small></p>
                <br>
                <p>36. Fin de toutes les interdictions précédemment signalées et imposées aux véhicules EN MOUVEMENT</p>
                <p>37. Fin de limitation de vitesse à 70 km/h</p>
                <p>38. Fin d'interdiction de dépasser</p>
                <p>39. Fin d'interdiction de dépasser pour les véhicules de transport de marchandises dont le PTAC est > à 3,5t</p>
                <p>40. Fin d'interdiction de l'emploi des avertisseurs sonores</p>
                <p>41. Fin d'interdiction aux skieurs</p>
                <p>42. Accès interdit aux troupeaux</p>
                <h3 style="font-weight: bold;">Panneaux relatifs à l'interdiction de stationner</h3>
                <br>
                <div class="card senscirc">
                    <img src="../images/paninterdictions1.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux d'interdiction et fin d'interdiction</small></p>
                <br>
                <p>1. Arrêt et stationnement interdits</p>
                <p>2. Stationnement interdit</p>
                <p>3. Stationnement interdit du côté du panneau du 1er au 15 du mois</p>
                <p>4. Stationnement interdit du côté du panneau du 16 à la fin du mois</p>
                <br>
                <div class="card senscirc">
                    <img src="../images/paninterdic2.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Pannonceaux de direction vers laquelle s'applique l'interdiction</small></p>
                <br>
                <p>5. Stationnement interdit à gauche du panneau</p>
                <p>6. Stationnement interdit à droite du panneau</p>
                <p>7. Stationnement interdit à partir du panneau</p>
                <p>8. Stationnement interdit jusqu'au panneau</p>
                <p>9. Stationnement interdit avant et après le panneau</p>
                <div class="card senscirc">
                    <img src="../images/paninterdic3.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panonceaux relatifs à la catégorie d'usagers 
                    ou à certaines conditions</small></p>
                <br>
                <p>10. Stationnement payant avec parcmètre</p>
                <p>11. Stationnement gratuit à durée limitée (zone bleue)</p>
                <p>12. Stationnement interdit aux véhicules affectés au transport de marchandises</p>
                <br>
                <div class="card senscirc">
                    <img src="../images/paninterdic4.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panonceaux précisant les interdictions de se garer</small></p>
                <br>
                <p>13. Stationnement gênant au sens de l'article R 417-10 du code de la route</p>
                <p>14. Stationnement interdit sauf pour les véhicules électriques</p>
                <p>15. Stationnement et arrêt interdit sauf pour l'autopartage</p>
                <p>16. Stationnement réservé aux personnes titulaires de la carte européenne</p>
                <p>17. Stationnement interdit aux remorques ou aux caravanes</p>
                <br>
                <p><b>Zones</b></p>
                <p><b class="text-mutedd">Entrée de zone</b></p>
                <br>
                <div class="card senscirc">
                    <img src="../images/interdictstation1.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Interdiction de stationner 1</small></p>
                <br>
                <p>1. Entré de zone à stationnement interdit</p>
                <p>2. Entrée de zone à stationnement unilatéral à alternance semi-mensuelle</p>
                <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>3. Entrée de zone à stationnement de durée limitée avec contrôle par disque</p>
                </div>
              </div>
              <br>
              <p>4. Entrée de zone à stationnement payant</p>
              <br>
              <div class="card attention">
              <div class="card-body">
                <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                <p>5. Entrée de zone à stationnement unilatéral à alternance semi-mensuelle et à durée limitée 
                    contrôlée par disque</p>
                </div>
            </div>
            <br>
            <p>6. Début de zone à 30 km/h s'appliquant sur les rues adjacentes</p>
            <p>7. Entrée de zone de circulation restreinte</p>
            <br>
            <div class="card senscirc">
                <img src="../images/sortiezone.jpg" height="200px" class="senscirc">
            </div>
            <p class="text-muted text-center"><small>Sorties de zones</small></p>
            <p>8. Sortie de zone</p>
            <p>9. Sortie de zone à stationnement unilatéral à alternance semi-mensuelle</p>
            <br>
            <div class="card attention">
              <div class="card-body">
                <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                <p>10. Sortie de zone à stationnement de durée limitée avec contrôle par disque</p>
                </div>
            </div>
            <br>
            <p>11. Sortie de zone à stationnement payant</p>
            <br>
            <div class="card attention">
              <div class="card-body">
                <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                <p>12. Sortie de zone à stationnement unilatéral à alternance semi-mensuelle et à durée 
                    limitée contrôlée par disque</p>
                </div>
            </div>
            <br>
            <p>13. Sortie de zone à 30 km/h s'appliquant sur les rues adjacentes</p>
            <p>14. Sortie de zone de circulation restreinte</p>
            <br>
        </div>
      </div>
    </section>

    <?php
    // <!--Le pied de la page-->
        include("../footer/footer.php");
        
        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("../script/script_link.php");
    ?>
    
</body>
</html>