<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../pages/assets/style.css">
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">

    <!--L'en-tête de la page-->
    <?php
        include("header.php");
    ?>
    <section>
      <br><br><br><br>

      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-10" style="padding-left: 25%;">
                <h1 style="font-weight: bold;"><b>Danger</b></h1>
                <hr>
                <h2 style="font-weight: bold;"><b>Dangers permanents</b></h2>
                <div class="card senscirc">
                    <img src="./images/dangerpermanent1.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Dangers permanents 1</small></p>
                <p>1. Virage à droite</p>
                <p>2. Virage à gauche</p>
                <p>3. Succession de virages, le 1er est à droite</p>
                <p>4. Succession de virages, le 1er est à gauche</p>
                <p>5. Cassis ou dos d'âne</p>
                <p>6. Ralentisseur</p>
                <p>7. Chaussée rétrécie</p>
                <p>8. Chaussée rétrécie par la droite</p>
                <div class="card senscirc">
                    <img src="./images/dangerpermanent2.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Dangers permanents 2</small></p>
                
                <p>9. Chaussé rétrécie par la gauche</p>
                <p>10. Chaussée particupèrement gpssante</p>
                <p>11. Pont mobile</p>
                <p>12. Passage à niveau muni de barrières à fonctionnement manuel ou de 
                    demi-barrières automatiques lors du passage des trains</p>
                <p>13. Passage à niveau sans barrière, ni demi-barrière</p>
                <p>14. Traversée de voies de tramways</p>
                <p>15. Traversée de voies de bus</p>
                <p>16. Endroit fréquenté par les enfants</p>
                <p>17. Passage pour piéton - signal d'annonce</p>
                <div class="card senscirc">
                    <img src="./images/dangerpermanent3.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Dangers permanents 3</small></p>
                
                <p>18. Danger pour lequel il n'existe pas de symbole correspondant</p>
                <p>19. et 20. Passage d'animaux domestiques</p>
                <p>21. Passage d'animaux sauvages (cerfs, sangliers, renards..)</p>
                <p>22. Passage de cavaliers</p>
                <p>23. Descente dangereuse (10%, c'est descendre de 10m tous les 100m parcourus)</p>
                <p>24. Annonce de feux tricolores</p>
                <p>25. Circulation dans les 2 sens à partir du panneau</p>
                <div class="card senscirc">
                    <img src="./images/dangerpermanent4.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Dangers permanents 4</small></p>
                
                <p>26. Risque de chute de pierres ou présence de pierres tombées sur la route</p>
                <p>27. Débouché sur un quai ou une berge</p>
                <p>28. Débouché de cyclistes venant de DROITE ou de GAUCHE</p>
                <p>29. Traversée d'une aire de danger aérien</p>
                <p>30. Risque de fort vent latéral</p>
                <p>31. Carrefour à sens giratoire avec priorité aux usagers circulant sur l'anneau</p>
                <p>32. Cédez le passage aux véhicules débouchant de la ou des routes situées à sa droite</p>
                <p>33. Intersection avec une route dont les usagers doivent céder le passage 
                    (priorité temporaire pour ceux qui circulent tout droit)</p>
                <p>34. Annonce de nappes de brouillard ou de fumée épaisse</p>
                <h2 style="font-weight: bold;"><b>Dangers temporaires</b></h2>
                <div class="card senscirc">
                    <img src="./images/dangertemporaires.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Dangers temporaires</small></p>
                <p>1. Rétrécissement de chaussée par la droite et par la gauche</p>
                <p>2. Accident</p>
                <p>3. Projection de gravillons</p>
                <p>4. Danger temporaire pour lequel il n'existe pas de symbole correspondant (il faut alors lire les panonceaux)</p>
                <p>5. Bouchon</p>
                <p>6. Travaux</p>
                <p>7.Annonce de signaux lumineux réglant la circulation</p>
                <p>8. Cassis, dos d'âne</p>
                <p>9. Chaussée glissante</p>
                <p>10. Annonce de nappes de brouillard ou de fumée épaisses</p>
                <br>
          </div>
        </div>
      </div>

    </section>

    <?php
    // <!--Le pied de la page-->
        include("footer.php");
        
        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("script_link.php");
    ?>
    
</body>
</html>