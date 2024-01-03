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
    <link rel="stylesheet" href="../pages/assets/style.css">
    <title>Limitations et contrôles</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body style="background-color: white;">

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
              <h1><b>Limitations et contrôles</b></h1>
              <br> 
              <h4><b>Vitesse en agglomération</b></h4>
              <p>En tant que piéton, vous avez déjà remarqué que les voitures en agglomération ne roulent pas à la même vitesse que sur les autoroutes, 
                par exemple. C'est lié au fait qu'en agglomération une vitesse trop élevée pourrait mettre en péril la vie des autres usagers, 
                plus vulnérables. Elle pourrait aussi endommager votre véhicule.</p>
              <p>Maintenant que vous connaissez la différence entre les obligations, interdictions et possibilités, 
                je vous laisse réfléchir à la nuance de signification entre ces 3 panneaux. Essayez de le faire sans aucune aide.
              </p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/panneauvit.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Panneaux relatifs à la vitesse</small></p>
              
              <p>Voici les réponses à cet exercice :</p>
              <ol>
                    <li> Panneau rond rouge et blanc, 50 : Panneau d'interdiction, la vitesse est limitée à 50 km/h ;</li>
                    <li>Panneau Zone, 30 : Il s'agit d'un panneau indiquant une vitesse limitée à 30km/h dans une zone. 
                        Nous verrons cela en détail dans le cours sur les différents usagers ;</li>
                    <li> Panneau carré bleu et blanc, 70 : Panneau d'indication, vitesse conseillée à 70 km/h. 
                        Ce panneau est facultatif et est davantage utilisé pour les vitesses supérieures (par exemple 70 km/h en rase campagne) ;</li>
              </ol>
              <p>S'ils étaient barrés, les trois panneaux indiqueraient la fin de l'application de la règle.</p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/finlimitvit.jpg" width="100px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Panneau annonçant la fin de limitation de vitesse</small></p>
              <br>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>
                  En agglomération, quelles que soient les conditions climatiques, que vous rouliez de jour ou de nuit, 
                  que vous soyez jeune conducteur ou expérimenté, la vitesse maximale autorisée est de 50 km/h.
                  </p>
                </div>
              </div>
              <br>
              <div class="card senscirc">
                <img src="../images/vitaglom.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Vitesse en agglomération cas général </small></p>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>En revanche, si sur cette photo au lieu du chiffre 50 (qui concerne le cas général) il y avait eu un autre chiffre, 
                    il aurait été appliqué à cette rue seulement.</p>
                </div>
              </div>
              
              <p>Sur la photo ci-dessus, le panneau relatif à la limitation de vitesse est implanté à côté du panneau annonçant l'entrée en 
                agglomération Brie. Dans le cas où le premier se trouverait collé en bas du nom de l'agglomération, 
                alors la règle de 50 km/h ne serait plus appliquée. La vitesse renseignée sur le panneau concernerait toute la ville. 
                Voici une illustration ci-dessous pour ne pas vous embrouiller avec les subtilités !</p>
              <br>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/courpierevit.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Dans toute la ville de Dakar la vitesse est limitée à 30 km </small></p>
              
              <p>Aussi, vous vous doutez bien que vous n'allez pas rouler vite si vous 
                repérez des obstacles sur la chaussée malgré la vitesse autorisée !</p>
              <p><b>Conditions climatiques</b></p>
              <p>Quelles que soient les conditions climatiques, la limitation de vitesse est plafonnée à 50 km/h.</p>
              <p><b>Jeunes Conducteurs</b></p>
              <p>Aucune règle en particulier ne s'applique aux conducteurs soumis au disque A. La limitation de vitesse est la même : 50 km/h.</p>
              <br>
              <h3><b>Vitesse hors agglomération : cas des lieu-dits</b></h3>
              <p>Si en agglomération la vitesse est limitée à 50 km/h, sur les autres routes vous pouvez rouler plus vite.</p>
              <p>Attention aux routes qui passent par les lieux-dits, car la limitation de vitesse peut être fixée par exemple à 70 km/h. 
                Il n'y a pas de vitesse particulière à ne pas dépasser. En l'absence de limitation de vitesse, il faut ralentir :</p>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/limitvitlieudit.jpg" width="300px;">
                  </div>
                </div>
              </div>
                
              <p class="text-muted text-center"><small>Limitation de vitesse à observer dans un lieu-dit</small></p>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Je vous donne ici la règle générale; certains tronçons de route peuvent être soumis à une réglementation spécifique. 
                    A vous de respecter les panneaux. </p>
                </div>
              </div>
              <p class="text-muted text-center"><small >Rue à sens unique</small></p>
              
              <div class="card important">
                <div class="card-body pb-1">
                <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                <p>Ne confondez pas un lieu-dit (1) avec un cours d'eau (2) !</p>
                </div>
              </div>
              <br>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/evite-confus.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small >Évitez la confusion </small></p>
              <h3>Vitesse hors agglomération</h3>
              <p><b>Routes à double sens</b></p>
              <div class="card senscirc">
                <img src="../images/vitrouted2sens.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Vitesse sur les routes à double sens</small></p>
              
              <p>Sur ce genre de routes, la vitesse est limitée à 80 km/h quelles que soient les conditions météorologiques et 
                quelle que soit l'expérience de conduite des conducteurs.</p>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Pour les conducteurs soumis au disque A, la limitation est fixée à 80 km/h.</p>
                </div>
              </div>
              <br>
              
              <p><b>Routes à accès réglementé</b></p>
              <p>Une rocade ou encore des routes de liaison interagglomérations peuvent être limitées à quelques catégories 
                d'usagers. D'habitude, elles sont prévues seulement pour les véhicules motorisés. 
                L'exemple de ce type de route peut être la voie rapide  
                (2 fois 2 voies avec un terre plein central au milieu) représentée par le schéma ci-dessous :</p>
              <div class="card senscirc">
                <img src="../images/routchausseparer.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Route à chaussée séparée avec un terre plein au milieu</small></p>
              
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Attention à ne pas confondre ce type de route avec une autoroute. La vitesse y est limitée à 110 km/h. 
                    Pour les jeunes conducteurs à 100 km/h.</p>
                </div>
              </div>
              <br>
              
              <div class="card senscirc">
                <img src="../images/acces-reglemente.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Route à accès réglementé</small></p>
              
              <p>Autoroute</p>
              <div class="card senscirc">
                <img src="../images/limitvitautoroute.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Limitation de vitesse sur autoroute</small></p>
              
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Comme c'est indiqué sur le panneau, par temps de pluie la vitesse est 
                    limitée à 110 km/h (pour tous les conducteurs).</p>
                </div>
              </div>
              <br>
              <p><b>Visibilité inférieure à 50 m</b></p>
              <p>Quels que soient le type de route et le contexte de l'application de la vitesse (en agglomération ou en dehors), 
                si la visibilité est inférieure à 50 m, vous devez rouler à 50 km/h maximum !</p>
              <h4>Les contrôles de vitesse</h4>
              <p>Enfin, sachez que si vous vous obstinez à rouler plus vite que la limitation de vitesse réglementaire, 
                    vous risquez de vous faire prendre par la police ou même par les radars.</p>
              <p>Voici comment vous serez informés de l'annonce et de la présence d'un radar qui flashe, 
                    puis d'un radar pédagogique qui vous indique la vitesse à laquelle vous roulez en temps réel.</p>
              <br>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/controleradare.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Contrôles de radars</small></p>
              
              <p>Voici à quoi ils ressemblent :</p>
              <div class="card senscirc">
                <img src="../images/typeradare.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Types de radars</small></p>
              
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>Si vous roulez à une vitesse supérieure à celle préconisée ou imposée, 
                    le radar pédagogique ne vous flashera pas. </p>
                </div>
              </div>
              <br>
              <div class="card senscirc">
                <img src="../images/radaretrocon.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Types de radars</small></p>
              <p>Il existe depuis quelques années des radars tronçons. Ils ne contrôlent pas la vitesse instantanée des usagers, 
                mais leur vitesse moyenne sur plusieurs kilomètres. Ces radars sont composés de deux bornes : 
                une au début et une à la fin de la zone contrôlée. L'ordinateur de cette deuxième borne va 
                déterminer le temps que l'usager a mis pour parcourir la zone, 
                ce qui lui permettra de calculer sa vitesse moyenne et de le verbaliser si nécessaire</p>
              <p>Les amendes relatives aux excès de vitesse peuvent varier. Pour savoir combien de points vous risquez de perdre, 
                    référez-vous au tableau récapitulatif des contraventions du chapitre "Contraventions" du cours "Les notions diverses".</p>





              
              <br>
              <h3><b>En résumé</b></h3>
              <p><b>Vitesse sur autoroute</b></p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/resumlimitvitautoroute.jpg" width="300px;"> 
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Limitations de vitesse sur autoroute</small></p>
              
              <p><b>Sur route</b></p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/resumlimitvitrout.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Limitation de vitesse sur routes</small></p>
              
              <p><b>En agglomération et en cas de mauvaise visibilité</b></p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/limitvit50km.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Limitation de vitesse à 50 km</small></p>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Si aucune signalisation relative à la vitesse n'est présente, 
                    il faut absolument prendre en compte d'autres indices !</p>
                </div>
              </div>
              <br>
              <div class="container text-center">
                <div class="row">
                    <div class="col-md-2">
                    <b>Type de route</b>
                    </div>
                    <div class="col-md-2">
                    Agglomération
                    </div>
                    <div class="col">
                    Hors agglomération, à double-sens sans séparateur central
                    </div>
                    <div class="col-md-2">
                    Hors agglomération, à double-sens sans séparateur central, avec un créneau de dépassement
                    </div>
                    <div class="col-md-2">
                    Route à accès réglementé
                    </div>
                    <div class="col">
                    Autoroute
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                    <b>Conducteur expérimenté</b>
                    </div>
                    <div class="col-md-2">
                    50 km/h
                    </div>
                    <div class="col">
                    80 km/h (90 km/h dans certains départements)
                    </div>
                    <div class="col-md-2">
                    90 km/h
                    </div>
                    <div class="col-md-2">
                    110 km/h
                    </div>
                    <div class="col">
                    130 km/h
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                    <b>Conducteur expérimenté</b>
                    </div>
                    <div class="col-md-2">
                    50 km/h
                    </div>
                    <div class="col">
                    80 km/h
                    </div>
                    <div class="col-md-2">
                    80 km/h
                    </div>
                    <div class="col-md-2">
                    100 km/h
                    </div>
                    <div class="col">
                    110 km/h
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                    <b>Par temps de pluie</b>
                    </div>
                    <div class="col-md-2">
                    50 km/h
                    </div>
                    <div class="col">
                    80 km/h
                    </div>
                    <div class="col-md-2">
                    80 km/h
                    </div>
                    <div class="col-md-2">
                    100 km/h
                    </div>
                    <div class="col">
                    110 km/h
                    </div>
              </div>
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