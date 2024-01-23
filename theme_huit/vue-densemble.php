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
    <title>Vue d'ensemble</title>
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
                <h1 style="font-weight: bold;"><b>Vue d'ensemble</b></h1>
                <br>
                <h2 style="font-weight: bold;">Les éléments principaux</h2>
                <p><b>Le châssis</b></p>
                <p>C'est tout le squelette métallique de la voiture. Il protège non seulement tous les équipements
                     intérieurs, mais aussi les passagers qui sont dans l'habitacle. C'est pour cette raison que 
                     les piétons et les cyclistes par exemple sont plus vulnérables que les automobilistes.</p>
                <p>Pour connaître le modèle de votre véhicule, la marque du constructeur, le type, le numéro
                     d'identification ou de série, vous devez vous référer à l'information située dans la partie
                      droite du véhicule sur un élément non démontable (par exemple la portière).</p>
                <p><b>Le moteur</b></p>
                <p>Il produit de l'énergie nécessaire pour que la voiture puisse avancer. Il est commandé par 
                    la pédale d'accélérateur pour avancer et du frein pour s'arrêter.</p>
                <p><b>La transmission</b></p>
                <p>Le moteur ne peut pas avancer sans transmission de message. C'est l'embrayage qui assure
                     cette transmission. Il permet de séparer ponctuellement le moteur du reste de la transmission,
                      raison pour laquelle on peut manipuler les vitesses.</p>
                <p><b>La boîte de vitesses</b></p>
                <p>Elle se trouve en bas à droite du conducteur et sert à changer les vitesses et à stationner.</p>
                <p><b>Les roues</b></p>
                <p>Les roues motrices sont les roues qui reçoivent la puissance du moteur pour la transmettre à 
                    la route. Sur un vélo ou une moto, la roue motrice est toujours la roue arrière. Sur une voiture,
                     les roues motrices peuvent être soit à l'avant, soit à l'arrière, soit les 2 (sur les modèles 4 x 4).</p>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/vue1.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Schéma des éléments</small></p>
                    </div>
                </div>
                <br>
                
                <p><b>La suspension</b></p>
                <p>Il s'agit de tous les éléments permettant de relier les masses non suspendues (roues) 
                    aux masses suspendues (typiquement le châssis, le moteur et tous les composants du 
                    véhicule fixés au châssis).</p>
                <p><b>Les freins</b></p>
                <p>Si le terme est utilisé au pluriel c'est parce que tout véhicule dispose d'un frein 
                    principal que vous commandez avec une pédale et un frein à main.</p>
                <p><b>Le pot d'échappement</b></p>
                <p>Il se compose d'un silencieux réduisant le bruit produit par la sortie de gaz d'échappement,
                     et d'un système réduisant les émissions polluantes par filtration ou catalyse. On vérifie 
                     son état et sa fixation lors du contrôle technique.</p>
                <h2 style="font-weight: bold;">Comment la voiture avance-t-elle ?</h2>
                <p>Il existe 3 pédales qui se trouvent à vos pieds et qu'il faut apprendre à utiliser ainsi que
                     leur maître d'orchestre : la boîte de vitesses. Ce cas ne s'applique pas de la même façon
                      aux boîtes automatiques (on verra cela vers la fin de ce chapitre).</p>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/vue2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Pédales d'une voiture et boîte à vitesses</small></p>
                    </div>
                </div>
                <br>
                
               
                <p>Vous comprenez maintenant pourquoi ni l'alcool ni la drogue ne sont compatibles avec la 
                    conduite : vous avez besoin de coordonner les gestes des 2 pieds, de la main droite, utiliser
                     les yeux, le cerveau..Bref !</p>
                <p>Pour démarrer une voiture, vous devez commencer par placer votre pied gauche sur l'embrayage,
                     actionner la 1ère vitesse si vous ne reculez pas et appuyer sur l'accélérateur. Tout en 
                     relâchant la pédale d'embrayage. Puis pour accélérer, vous allez changer les
                      vitesses : 2, 3, 4, 5, 6.</p>
                <p>Le point mort se trouve à la jonction entre les vitesses 1 et 2. Le véhicule n'a pas à entraîner
                     le moteur (qui tourne de façon autonome) et peut ainsi parcourir de grandes distances en 
                     roue libre.</p>
                <p><b class="text-muted">Fonctionnement de l'embrayage</b></p>
                <p>Il assure la liaison et la séparation du moteur avec la boîte de vitesses. Il va s'occuper de
                     transmettre des informations sur la vitesse (que vous communiquez avec la boîte de vitesses), 
                     puis de revenir à la position neutre.</p>
                <p><b>Changement de vitesse en 3 étapes</b></p>
                <p>1. Débrayer : Avant d'actionner une vitesse à l'aide de la boîte de vitesses (la 1ère par exemple),
                     vous devez appuyer sur la pédale d'embrayage. Vous communiquez ainsi l'information de 
                     la vitesse au moteur grâce à l'intermédiaire qui est l'embrayage.</p>
                <p>Patiner : Pour que la voiture avance, il faut lâcher progressivement la pédale d'embrayage. 
                    Le moteur entraîne progressivement les roues, car il a reçu les informations du débrayage 
                    et il agit. La voiture commence à avancer.</p>
                <p>2. Embrayer : Lorsque la pédale d'embrayage est lâchée, le moteur entraîne des roues et la 
                    voiture avance normalement. Pour changer de vitesse, il est à nouveau nécessaire de débrayer,
                     changer de vitesse, lâcher progressivement l'embrayage et ainsi de suite.</p>
                 <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/vue3.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Changement de vitesses en débrayant (1) et en embrayant (2)</small></p>
                    </div>
                </div>
                <br>
                <b class="text-muted">Vitesses et leur fonctionnement</b>
                <p>Sur les voitures, en général, il existe 5 ou 6 rapports de vitesse. Et chacun de 
                    ces rapports a son propre rôle à jouer. En effet, selon les situations que vous allez 
                    rencontrer sur la route, vous n'aurez pas toujours besoin de la même disponibilité de puissance.</p>
                <br>
                <div class="card question">
                <div class="card-body">
                <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                <p>Pour savoir quelle vitesse utiliser, commençons par un exemple. Imaginez que vous deviez 
                    faire rouler un gros tonneau plein d’eau en le poussant :
                     à quel moment est-ce que vous auriez besoin de pousser le plus fort pour qu’il avance ?</p>
                </div>
                </div>
                <br>
                
                <p><b>Réponse :</b> C’est au départ qu’on a besoin de forcer le plus. C’est normal, 
                le tonneau est immobile, il est lourd et il faut l’arracher de sa position initiale. 
                Mais une fois lancé, il peut même aller tout seul sans qu'on l'aide.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>La 1ère vitesse est donc la plus puissante. Ensuite, le besoin de puissance diminue 
                        progressivement parce ce que l’on va de plus en plus vite. 
                        Par conséquent, les rapports suivants sont de moins en moins puissants.</p>
                    </div>
                </div>
                <br>
                
                <br>
                <div class="card question">
                <div class="card-body">
                <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                <p>Imaginez maintenant que devant vous se dresse une montée. 
                    Prenez toujours comme exemple le même tonneau. Que devez vous faire ?</p>
                </div>
                </div>
                <br>
                <p><b>Réponse :</b> Le tonneau va ralentir et va devenir de plus en plus lourd face à une montée. 
                Pour continuer à avancer, il faut forcer beaucoup plus. Et forcer plus ne veut dire rien d'autre
                 que de rétrograder, ce qui veut dire de descendre de vitesse pour gagner en force.</p>
                <b>Quand changer de vitesse ?</b>
                <p>Voici 2 façons qui vous permettent de savoir quand vous devez changer de vitesse :</p>
                <p>1. La première règle c'est tout simplement de tendre l’oreille et d'écouter le bruit 
                    du moteur ou autrement dit, le régime moteur. C'est simplement la vitesse de rotation 
                    du moteur. Quand il tourne trop vite, on peut sentir qu’il force car il fait plus de bruit. 
                        Et pour le soulager, il est temps de passer la vitesse suivante.</p>
                <p>2. La deuxième serait de regarder le compteur de vitesse. Je ne vous le conseille pas,
                     car vous allez perdre la visibilité sur la route. Lorsque vous allez commencer à conduire, 
                     votre moniteur de conduite vous apprendra à écouter la musique du moteur.  Voici la 
                     correspondance entre les vitesses et les plages d'allure :</p>
                <ol style="list-style-type: disc;">
                    <li>De 0 à 20 km/h, c’est la 1ère qui fait démarrer ;</li>
                    <li>De 20 à 40 km/h, la 2e ;</li>
                    <li>De 40 à 60 km/h, la 3e ;</li>
                    <li>De 60 à 80 km/h, la 4e ;</li>
                    <li>Et enfin, de 80km/h à la vitesse maximale, c’est à dire 130 km/h, c'est le rôle de 
                        la 5e vitesse.</li>
                </ol>
                <b class="text-muted">Surrégime et sous-régime</b>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Si vous comprenez bien ces notions-là, vous allez aussi comprendre les 
                        fondements d'écoconduite.</p>
                    </div>
                </div>
                <br>
                
                <p>Vous êtes en surrégime lorsque la vitesse atteinte est plus élevée que la vitesse passée.</p>
                <p>Exemple : Si vous roulez à 40 km/h et êtes en 2e, il est temps de passer en 3e si vous ne 
                    comptez pas vous arrêter. Mais imaginons que vous accélérez (passez à 60 km/h) et 
                    conservez la même vitesse (2e toujours) alors que vous devez passer à la 3e, vous 
                    êtes en sur-régime. Votre moteur va "crier".</p>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Certes, être en surrégime est utile si vous allez dépasser un véhicule (ça ne va pas durer longtemps), 
                        mais au niveau de l'écologie, cela rime avec pollution car vous allez consommer plus de carburant.</p>
                    </div>
                </div>
                <br>
                <p>Vous êtes en sous-régime lorsque la vitesse atteinte est moins élevée que la vitesse passée.</p>
                <p>Exemple : Si vous roulez à 40 km/h mais êtes en 4e vitesse, vous manquez de puissance pour
                     votre lancée. N'oubliez pas que la 4e vitesse est celle qui doit juste appuyer une vitesse que 
                     la 3e, 2e et 1ère ont créée avec beaucoup d'efforts. Si vous êtes en 4e vitesse et à 40 km/h, la 
                     répartition de la force n'a pas été bien effectuée.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Astuce : Imaginez que les vitesses sont une chaîne d'animaux qui en fonction de leur taille et
                         mobilité vont transmettre l'énergie. Quand vous êtes en 1ère, c'est un éléphant qui soulève 
                         le tonneau. Et heureusement, parce qu'il a beaucoup de force. En 2e c'est un animal qui est 
                         un tout petit peu plus plus rapide, mais toujours puissant, comme l'ours. Puis en 3e c'est un 
                         animal plus agile comme un cheval. En 4e c'est le lion, puis en 5e le guépard. Être en sous-régime, 
                        c'est demander au guépard de soulever le tonneau. Votre moteur va alors "s'étouffer".</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Boîte de vitesses automatique</h2>
                <p>Elle détient 6 rapports de marche avant et un de marche arrière. Chaque rapport est choisi 
                    automatiquement, en fonction de la position du levier de vitesse.</p>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/vue4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Boîte à vitesse automatique</small></p>
                    </div>
                </div>
                <br>
                <ol style="list-style-type: disc;">
                    <li>Park verrouille la boîte et empêche les roues avant de tourner. 
                        Il faut appuyer sur le frein pour retirer cette position ;</li>
                    <li>Reverse permet de faire marche arrière ;</li>
                    <li>Neutre ne doit jamais être utilisé en roulant, c'est le point mort ;</li>
                    <li>Drive permet d'avancer surtout si le frein est lâché !</li>
                </ol>
                <br>
                               
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Le châssis protège les équipements intérieurs.</li>
                   <li>Les roues motrices sur une voiture peuvent être soit à l'avant soit à l'arrière, soit les 2.</li>
                   <li>Il existe 2 freins (l'un actionné par la pédale et l'autre avec la main).</li>
                   <li>Pour conduire, il faut transmettre l'information de la vitesse du boîtier
                         au moteur en appuyant sur la pédale de l'embrayage = débrayer.</li>
                   <li>En position embrayée, les roues sont entraînées.</li>
                   <li>La 1ère vitesse est la plus puissante, car elle fait démarrer la voiture du point zéro.</li>
                   <li>Vous êtes en surrégime lorsque la vitesse atteinte est plus élevée que la vitesse passée.</li>
                   <li>Vous êtes en sous-régime lorsque la vitesse atteinte est moins élevée que la vitesse passée.</li>
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