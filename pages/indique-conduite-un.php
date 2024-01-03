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
    <title>Indication de conduite (1)</title>
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
                <h1 style="font-weight: bold;"><b>Indications de conduite (1)</b></h1>
                <hr>
                <div class="card senscirc">
                    <img src="../images/Indications-_conduite_01.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux d'indication 1 </small></p>
                <br>
                
                <p>1. Lieu <b>gratuit</b> aménagé pour le stationnement</p>
                <div class="card important">
                    <div class="card-body pb-1">
                     <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                     <p>2. Lieu gratuit à durée limitée avec contrôle par disque</p>
                    </div>
                </div>
                <br>
                
                <p>3. Lieu payant aménagé pour le stationnement</p>
                <p>4. Indique l'emplacement d'un hôpital ou d'un centre médicalisé</p>
                <p>5. Vitesse conseillée</p>
                <p>6. Fin de vitesse conseillée</p>
                <p>7. Station de taxis</p>
                <p>8. Parking relais</p>
                <p>9. Parc de stationnement sous vidéo-surveillance</p>
                <div class="card senscirc">
                    <img src="../images/Indications-_conduite_02.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux d'indication 2 </small></p>
                <br>
                
                <p>10. Arrêt d'autobus</p>
                <div class="card important">
                    <div class="card-body pb-1">
                     <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                     <p>11. Traversée de voies de tramways (voir aussi n°17)</p>
                    </div>
                </div>
                <br>
                
                <p>12. Emplacement d'arrêt d'urgence</p>
                <p>13. Circulation à sens unique</p>
                <p>14. Impasse</p>
                <p>15. Présignalisation d'une impasse</p>
                <p>16. Passage pour piéton (signal de position)</p>
                <div class="card senscirc">
                    <img src="../images/Indications-_conduite_03.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux d'indication 3</small></p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                     <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                     <p>17. Traversée de voie de tramways</p>
                     <p>18. Traversée de voie de véhicules routiers des services réguliers de transport en commun</p>
                    </div>
                </div>
                <br>
                
                <p>19. Stationnement réglementé pour les caravanes dans toute la commune. Il faut s'adresser à la mairie pour avoir l'autorisation d'y stationner</p>
                <p>20. Conditions particulières de circulation par voie sur la route suivie</p>
                <p>21. Voies affectées à l'approche d'une intersection</p>
                <p>22. Conditions particulières de circulation sur la route transversale</p>
                <p>23. Condition particulières d'arrêt sur le trottoir</p>
                <p>24. Voie de détresse à droite</p>
                <p>25. Voie de détresse à gauche</p>
                <p>26. Voie de détresse à droite (en suivant la forme de la route)</p>
                <div class="card senscirc">
                    <img src="../images/Indications-_conduite_04.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux d'indication 4</small></p>
                <br>
                
                <p>26. Surélévation de chaussée (signal de position)</p>
                <p>27. Réduction du nombre de voies (de 4 à 3)</p>
                <p>28. Créneau de dépassement à 2 x 2 voies affectées, deux voies dans le sens de la marche, deux voies en sens inverse</p>
                <p>29. Créneaux de dépassement à 3 voies affectées (2 voies dans un sens, 1 voie dans l'autre)</p>
                <p>30. Section de route à 3 voies affectées  (1 dans un sens, 2 voies dans l'autre)</p>
                <p>31. Fin d'un créneau de dépassement à 3 voies affectées</p>
                <p>32. Présignalisation d'une borne de retrait de ticket de péage</p>
                <p>33. Paiement auprès d'un péagiste</p>
                <p>34. Paiement par carte bancaire</p>
                <p>35. Paiement automatique par pièces de monnaie et billets</p>
                <p>36. Paiement par abonnement ; la voie est réservée aux usagers abonnés</p>
                <div class="card senscirc">
                    <img src="../images/Indications-_conduite_05.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux d'indication 5</small></p>
                <br>
                
                <p>37. Route à accès réglementé</p>
                <p>38. Fin de route à accès réglementé</p>
                <p>39. Entrée d'aire piétonne</p>
                <p>40. Sortie d'aire piétonne</p>
                <p>41. Piste ou bande cyclable conseillée et réservée aux cycles à 2 ou 3 roues</p>
                <p>42. Fin de piste ou bande cyclable conseillée et réservée aux cycles à 2 ou 3 roues</p>
                <p>43. Entrée d'autoroute</p>
                <p>44. Sortie d'autoroute</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                     <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                     <p>45. Entrée de tunnel</p>
                     <p>46. Sortie de tunnelCe signal indique l'entrée d'un tunnel où il est interdit de faire 
                        demi-tour, de s'arrêter et de stationner en dehors des emplacements d'arrêt d'urgence 
                        prévus à cet effet et ou l'allumage des feux de croisement est obligatoire</p>
                    </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="../images/Indications-_conduite_06.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux d'indication 6</small></p>
                <br>
                
                <p>47. Chaussée à double sens, dont le sens opposé est réservé à la circulation des cycles</p>
                <p>48. Chaussée à double sens, dont le sens opposé est réservé à la circulation des autobus</p>
                <p>49. La voie de circulation en sens inverse est réservée aux cyclistes</p>
                <p>50. Voies affectées à l'approche d'une intersection</p>
                <p>51. Condition particulières de circulation par voie en terme de limitation de vitesse</p>
                <p>52. Paiement de péage par abonnement ; la voie est réservé aux usagers abonnés</p>
                <br>
                <div class="card senscirc">
                    <img src="../images/Indications-_conduite_07.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux d'indication 7</small></p>
                <br>
                <p>53. Début de voie verte</p>
                <p>54. Fin de voie verte</p>
                <p>55. Entrée de zone de rencontre</p>
                <p>56. Fin de zone de rencontre</p>
                <p>57. Indication du pays</p>
                <p>58. Impasse avec issue pour les piétons et le cyclistes</p>
                <br>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/Indications-_conduite_08.jpg" width="300px">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Panneaux d'indication 8</small></p>
                <br>
                    
                <p>59. Station de vidange pour caravanes, autocaravanes et cars</p>
                <p>60. Fréquence d'une radio dédiée aux informations sur la circulation et l'état des routes</p>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/Indications-_conduite_09.jpg" width="300px">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Panneaux d'indication 9</small></p>
                <br>
                
                <p>1. Rappel des limites de vitesse sur autoroute</p>
                <p>2. Indication aux frontières des limites de vitesse sur le territoire français</p>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/conditioncirculation.jpg" width="300px">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Conditions de circulation</small></p>
                <br>
                <p>1. Présignalisation de la praticabilité d'une section de route. Les mentions précisent 
                    les conditions de circulation (fermé)</p>
                <p>2. Présignalisation de la praticabilité d'une section de route. Les mentions précisent 
                    les conditions de circulation (ouvert)</p>
                <div class="card senscirc">
                    <img src="../images/peage.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Péage</small></p>
                <br>
                
                <p>1. Présignalisation du début d'une section routière ou autoroutière à péage</p>
                <p>2. Présignalisation d'une gare de péage avec retrait du ticket de péage ou paiement du péage</p>
                <p>3. Présignalisation du paiement du péage</p>
                <div class="card senscirc">
                    <img src="../images/peage1.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Indication sur autoroute</small></p>
                <br>
                <div class="card senscirc">
                    <img src="../images/peage2.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Distances de sécurité </small></p>
                <br>
                <div class="card senscirc">
                    <img src="../images/peage3.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Zone où la vitesse est contrôlée par un ou plusieurs dispositifs de contrôle automatisé </small></p>
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