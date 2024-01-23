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
    <title>Aborder les intersections</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body class="codebody">

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
              <h1><b>Aborder une intersection</b></h1>
              <br> 
              <h4><b>Types d'intersections</b></h4>
              <p>Vous vous doutez bien que même si vous pouvez ou devez aller tout droit, 
                vous allez forcément arriver à un point où il va falloir s'arrêter à cause des intersections.</p>
              <div class="card question">
                <div class="card-body">
                  <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                  <p>De quoi s'agit-il ?</p>
                </div>
              </div>
              <br>
              <p>
                <b>Réponse</b> : Tout simplement, l'intersection est un carrefour. 
                Les panneaux ou les feux seront présents pour y réguler le trafic. Parfois, la signalisation sera absente. 
                Voici le schéma des intersections les plus courantes :
              </p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/typeIntersection.png">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small >Type d'intersection</small></p>
              
              
              <div class="card question">
                <div class="card-body pb-1">
                <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                <p>Quels sont les indicateurs qui vous permettent de remarquer une intersection ?</p>
                </div>
              </div>
              <br>
              <div class="card senscirc">
                <img src="../images/repèreInter.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Comment repérer une intersection ?</small></p>
              <br>
              <b>Reponse:</b>
              <li>Toutes les interruptions de bordures de trottoirs, d'alignement d'arbres, 
                de bâtiments ou de maisons (pastilles n° 1 et 2).</li>
              <li>Les autres usagers et leur comportement un piéton qui ralentit et qui traverse, 
                une autre voiture qui met le clignotant, 
                ou qui est arrêtée au feu rouge, etc (pastille n° 4 ).</li>
              <li>La signalisation verticale (panneaux), les feux (pastille n°5), 
                la signalisation horizontale (passage piéton sous la pastille n°3).</li>
                <p>Je viens de vous donner un exemple des intersections en croix. N'oublions pas les ronds-points et 
                    les carrefours au sens giratoire. Un chapitre en entier leur sera dédié.</p>
              <br>
              <h5><b>Absence de signalisation dans les intersections</b></h5>
              <p>
                Si vous roulez et qu'il n'y a aucun panneau, aucun signe, 
                vous imaginez bien qu'à ce moment-là il faut appliquer une règle malgré tout. 
              </p>
              <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Pourquoi faut-il le faire ?</p>
                  </div>
                </div>
                <br>
              <b>Réponse :</b>
              <p>Tout simplement parce que vous n'êtes pas seul et que d'autres voitures peuvent arriver de tous les côtés. 
                Si vous ne vous arrêtez pas aux intersections, vous risquez d'avoir un accident.
              </p>
              <div class="card important">
                  <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>
                    Quand il n'y a pas de règle explicitement formulée grâce à une signalisation 
                    (pas de panneau, pas de marquage au sol), la règle de la priorité à droite s'applique.
                    </p>
                  </div>
                </div>
                <br>
              <p>Observez la photo ci-dessous. Notez que le sens interdit ne change rien 
                (panneau rouge avec un rectangle blanc au milieu), 
                car ce qui nous intéresse c'est la voiture qui viendrait de droite, 
                accompagnant le sens de la flèche verte. Elle a la priorité, pas vous :
              </p>
              <div class="card sensuniq">
                <img src="../images/signalisation.jpg" height="300px" class="sensuniq">
              </div>
              <p class="text-muted text-center"><small>Intersection sans signalisation : priorité à droite</small></p>
              <p>Une autre règle qui s'applique mais qui n'est pas vraiment inhérente à la priorité à droite, 
                c'est celle d'une voiture qui coupe le chemin à une voiture qui va tout droit. Observez le schéma ci-dessous, 
                la voiture jaune est prioritaire car elle ne change pas de trajectoire.</p>
             
              <br>
              <div class="card sensuniq">
                <img src="../images/coupechemin.jpg" height="300px" class="sensuniq">
              </div>
              
              <p class="text-muted text-center"><small>Si vous coupez le chemin à une autre voiture</small></p>
              <h4><b>Intersections hors agglomération</b></h4>
              
              <p>En agglomération, les intersections sont plus facilement reconnaissables qu'en dehors des communes. 
                En rase campagne, les intersections peuvent se fondre dans le décor. 
                La nuit, c'est encore plus difficile de les voir !
              </p>
              <p>Pour les rendre visibles, les balises sont mises en place :</p>
              <br>
              <div class="card sensuniq">
                <img src="../images/baliseinter.jpg" height="300px" class="sensuniq">
              </div>
              <p class="text-muted text-center"><small>Balises d'intersection</small></p><br>
              
              <div class="card important">
                  <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>
                        Pour connaître tous les types de balises, consultez les Annexes.
                    </p>
                  </div>
                </div>
                <br>
                <b>Les cas particuliers</b>
                <p>Si vous débouchez sur une route à partir d'un accès non ouvert à la circulation 
                    publique (chemin de terre par exemple), il faut céder le passage à tous les usagers.
                </p>
                <p>Si les chemins de terre sont ouverts à la circulation publique, 
                    vous tomberez sur un panneau qui vous indiquera la démarche à suivre :</p>
                <div class="card sensuniq">
                    <img src="../images/cheminterre.jpg" height="300px" class="sensuniq">
                </div>
                <p class="text-muted text-center"><small>Chemin de terre a priori d'ordre privé</small></p><br>
                
                
                <p>La logique voudrait que vous rouliez plus vite sur la route asphaltée que sur la route en gravillons comme sur la photo. 
                    Vous avez la priorité car c'est plus difficile de vous arrêter pour céder le passage 
                    qu'à la voiture qui arriverait à une allure moins importante.
                </p>
                <h3><b>Tronçons de route à visibilité réduite</b></h3>
                 <p>Dans certains coins de rue, la visibilité est presque nulle. Ce sont les miroirs mis en place qui vous aideront à 
                    voir si un autre usager vient d'une rue perpendiculaire par exemple.</p>
                
                <div class="card sensuniq">
                    <img src="../images/cheminterre.jpg" height="300px" class="sensuniq">
                </div>
                <p class="text-muted text-center"><small>Miroir réduisant le manque de visibilité</small></p><br>
                <h3><b>Les ronds-points sans signalisation</b></h3>
                 <p>Qu'ils se trouvent en agglomération ou sur les routes, 
                    les ronds-points sans signalisation bénéficient de la règle de la priorité à droite. 
                    Pensez au rond-point de l’Étoile à Paris comme étant l'un des exemples.
                </p>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Il existe plusieurs types d'intersections.</li>
                <li>Dans une intersection sans signalisation, les priorités se définissent selon la règle de la priorité à droite.</li>
                <li>Pour tourner à gauche, la voiture qui coupe le chemin à une autre voiture qui va tout droit n'a pas la priorité.</li>
                <li>Les intersections sur les routes hors agglomération sont signalées avec des balises ayant un trait rouge.</li>
                <li>Le manque de visibilité dans certaines intersections est compensé par les miroirs .</li>
                <li>Les chemins de terre n'ont pas la priorité sur les routes asphaltées.</li>
                <li>Si deux chemins de terre se croisent, la priorité à droite s'applique.</li>
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