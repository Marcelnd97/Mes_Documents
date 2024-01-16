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
    <title>La surveillance du conducteur</title>
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
                <h1 style="font-weight: bold;"><b>La surveillance du conducteur</b></h1>
                <br>
                <p>Dans ce chapitre, je vous donnerai quelques conseils quant aux signaux lumineux qui peuvent 
                    se présenter sur votre tableau de bord, mais aussi si un problème surgit de façon impromptue.</p>
                <h2 style="font-weight: bold;"><b>Choix du carburant</b></h2>
                <p>Pour éviter la panne sèche, pensez à contrôler régulièrement la jauge de carburant sur 
                    le tableau de bord.</p>
                <p>Lorsque le voyant de réserve carburant s'allume (voir figure 1 ci-dessous), un signal 
                    sonore retentit. Vous circulez alors sur la réserve de carburant. Vous pouvez parcourir
                     entre 50 et 100 km, en fonction de votre voiture. Mais faites le plein dès que possible !</p>
                <p>Pour savoir quel carburant utiliser, vous pouvez :</p>
                <ol style="list-style-type: disc;">
                    <li>regarder dans la trappe du réservoir,</li>
                    <li>ou encore le certificat d'immatriculation.</li>
                </ol>
                <p>A la pompe à essence (voir figure 2 ci-dessous), un code couleur différencie les différents
                     types de carburant : les couleurs jaunes, orange ou noires, correspondent au Gazole
                      (dits "Diesel"), alors que la couleur verte correspond aux carburants "sans plomb"
                       (plus couramment appelé "Essence").</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/surveiller1.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Voyant de réserve carburant </small></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/surveiller2.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Pompe à essence avec différents carburants</small></p>
                    </div>
                </div>
                <p>De plus, il y a une nouvelle appellation pour les différents carburants :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/surveiller3.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Les différents noms de carburant </small></p>
                    </div>
                </div>
                <h2 style="font-weight: bold;">Ampoules</h2>
                <p>Nous avons vu que chaque feu possède une ampoule qui lui est attribuée.</p>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Ne touchez pas directement une ampoule des feux de croisement ou de route. 
                        Les traces de doigts risquent de les abîmer et même de faire griller l'ampoule !</p>
                    </div>
                </div>
                <br>
                <p>Je vous conseille de consulter le livret du constructeur pour connaître la procédure de changement d'une ampoule. 
                    Autrement, allez voir un garagiste ! Votre voiture vous signalera une ampoule grillée de cette façon :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/surveiller4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Témoin d'ampoule grillée</small></p>
                    </div>
                </div>
                
                <p>Lorsqu'une ampoule grille, vous devez changer les deux, 
                    symétriquement, car l'autre est usée et va griller à son tour.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Une ampoule perd jusqu'à 50% de ses capacités d'éclairage avec le temps.</p>
                    </div>
                </div>
                <br>
               
                <h2 style="font-weight: bold;">Liquide lave-glace</h2>
                <p>Si vous n'avez plus de liquide lave-glace, un témoin vous le signalera sur 
                    le tableau de bord :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/surveiller5.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Remplissage du liquide lave-glace </small></p>
                    </div>
                </div>
                
                <p>Pensez aussi à vérifier l'état de vos essuie-glaces car leur lamelle en caoutchouc peut se
                     décoller et ne pas être efficace dans l'essuyage. Changez les balais 1 fois par an, 
                     avant qu'il ne fasse froid et humide.</p>
                <h2 style="font-weight: bold;">Surfaces vitrées et optiques</h2>
                <p>Veillez à nettoyer les vitres et les rétroviseurs avec une éponge et de l'eau savonneuse 
                    ou un produit ménager.</p>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>N'utilisez pas une éponge grattante, vous risquez d'abîmer les surfaces</p>
                    </div>
                </div>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>L'intérieur de la lunette arrière comporte des résistances chauffantes fragiles, 
                    raison pour laquelle il faut nettoyer dans le sens des fils.</p>
                    </div>
                </div>
                <br>
               
                <h2 style="font-weight: bold;">Graissage</h2>
                <p>Pensez à pulvériser un peu d'huile de graissage au niveau des serrures et des portes
                     et du capot. Si votre serrure a gelé, vous pouvez y pulvériser un peu de liquide dégivrant
                      pour ne pas forcer ou casser la clé.</p>
                <h2 style="font-weight: bold;">Nettoyage du véhicule</h2>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                        <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Ne lavez pas votre voiture devant chez vous car c'est un geste qui ne 
                        respecte pas l’environnement !</p>
                    </div>
                </div>
                <br>
                <p>Les eaux usagées vont polluer le réseau d’eaux pluviales et entraîner une surconsommation 
                    d’eau. Privilégiez une aire de lavage dédiée qui intègre le recyclage des eaux usagées.</p>
                <h2 style="font-weight: bold;">Freins</h2>
                <p><b>Types de freins et leur fonctionnement</b></p>
                <p>Il existe le frein principal, le frein à main et le frein moteur. Leur rôle est de se
                     débarrasser de l'énergie cinétique (de l'énergie qu'un corps en mouvement a accumulé, 
                     en l'occurrence votre voiture).</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Si vous roulez 2 fois plus vite, alors la distance de freinage, la violence du choc et
                         la force centrifuge sont multipliées par 4. Si vous roulez 3 fois plus vite, la distance 
                         de freinage, la violence du choc et la force centrifuge sont multipliées par 9.</p>
                    </div>
                </div>
                <br>
                <p><b>Frein principal et son entretien</b></p>
                <p>Il agit sur les 4 roues lorsque vous appuyez sur la pédale. Un liquide huileux transmet
                     le mouvement et actionne les freins. Je vous ai parlé de la pédale qui, quand vous appuyez
                      dessus, ne freine pas. Cela veut dire que le liquide huileux est épuisé. Pour éviter ce genre 
                      de problèmes, prenez l'habitude de vérifier le niveau du liquide de frein. L'entretien de 
                      votre véhicule est au menu au chapitre suivant.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/surveiller6.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Frein principal </small></p>
                    </div>
                </div>
                
                <p><b>Frein à main</b></p>
                <p>Il agit sur les 2 roues d'un seul essieu, le plus souvent sur les roues arrière 
                    même s'il peut être présent sur les roues avant. Si vous voyez l'un des deux voyants
                     de ce type allumés sur votre tableau de bord (voir photo ci-dessous), alors il faut 
                     vérifier que votre frein à main à été correctement desserré. Autrement, direction garage. 
                     Il s'agit d'un témoin de signalisation voire d'alarme si c'est un problème grave.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/surveiller7.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voyant frein à main </small></p>
                    </div>
                </div>
                
                 <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Ne soyez pas surpris si je vous dis qu'il est possible de conduire avec un frein à main serré. 
                        Mais pour info : cela abîme le système de freinage.Conseil n°1 : soyez alertes et ne quittez pas 
                        des yeux votre tableau de bord.Conseil n°2 : Après avoir démarré la voiture, vous allez placer vos 
                        pieds sur l'embrayage et l'accélérateur. 
                        Avant de patiner, vérifiez que le frein à main a été correctement baissé.</p>
                    </div>
                </div>
                <br>
                <p><b>Frein moteur</b></p>
                <p>Dès que vous relâchez la pédale de l'accélérateur, le véhicule ralentit sur le frein moteur. 
                    Il faut l'utiliser dans les longues descentes. Il faut rétrograder pour permettre d'augmenter 
                    le frein moteur.</p>
                <p><b>Entretien des freins</b></p>
                <p>Nous avons vu que le frein principal agissait sur les 4 roues lorsque vous appuyez sur la 
                    pédale. Un liquide huileux transmet le mouvement et actionne les freins. Lorsque je vous ai 
                    parlé d'une défaillance des freins dans le chapitre sur les autoroutes, j'ai tout de suite 
                    affiché la couleur d'un scénario stressant, potentiellement catastrophique. Pour éviter ce
                     genre de problèmes, prenez l'habitude de vérifier le niveau du liquide de frein. </p>
                <p><b>Vérification du liquide de frein</b></p>
                <p>Au préalable, assurez-vous que la voiture est à l'arrêt, sur une surface plate, moteur éteint
                     et frein à main serré. Sur la plupart des véhicules, le maître-cylindre est situé côté pare-brise
                      dans le compartiment moteur, plutôt côté conducteur. Il est facile à repérer, il y a un réservoir 
                      rond en plastique au-dessus </p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/surveiller8.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Vérifier le liquide de frein </small></p>
                    </div>
                </div>
                
                <p>Si vous avez un niveau très en dessous du minimum requis, il faut absolument vérifier l'état de 
                    vos plaquettes et voir s'il n'y a pas une fuite vers les étriers. En effet, il est possible que 
                    le fluide soit mal réparti dans le circuit et appuie plus sur certaines plaquettes, d'où l'usure prématurée. 
                    Le témoin des plaquettes usées vous informera de ce problème en l'affichant sur votre tableau de bord :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/surveiller9.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Témoin des plaquettes usées </small></p>
                    </div>
                </div>
                
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Le contrôle des plaquettes de frein est à faire tous les  30 000 km.
                        Le contrôle des disques est à faire tous les 80 000 km.</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Entretien du moteur</h2>
                <p><b>Huile</b></p>
                <p>La lubrification est essentielle au fonctionnement du moteur pour éviter les frottements et 
                    donc les détériorations. Cette lubrification se fait grâce à l'huile dont il faut vérifier 
                    le niveau assez souvent. Si le témoin rouge (témoin d'alarme) s’allume en cours de route, 
                    il signale que la pression d’huile du moteur est insuffisante. Il faut donc immédiatement
                     arrêter le moteur.</p>
                <p>Observez la photo ci-dessous :</p>
                <ol style="list-style-type: disc;">
                    <li>le voyant blanc (ou jaune) s'allume pour signaler le niveau d'huile bas (pastille n°1)</li>
                    <li>le voyant rouge s'allume pour signaler la pression d'huile moteur (pastille n°2).</li>
                </ol>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Vous pouvez vérifier le niveau d'huile seulement lorsque le moteur est froid (pastille n°3) !</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/surveiller10.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Vérifier le niveau d'huile dans le moteur </small></p>
                    </div>
                </div>
               
                <p>Si le niveau d’huile est correct ou si le voyant reste allumé malgré l’appoint, vous devez appeler une dépanneuse 
                    pour vous remorquer jusqu'au garage. La voiture n'est pas en état de rouler.</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Toutes les huiles ne sont pas miscibles entre elles ! Une 
                        huile inadaptée peut endommager le moteur./p>
                    </div>
                </div>
                <br>
                <p><b>Liquide de refroidissement</b></p>
                <p>Pour refroidir le moteur, il faut du liquide de refroidissement et de l'air. 
                    Je vous conseille de toujours vérifier le niveau du liquide de refroidissement pour 
                    vous assurer qu'il n'y ait pas de fuite. Il faut le faire toutes les  5 ou 6 semaines.
                     Si vous ne diagnostiquez pas de fuite, mais que le niveau du liquide baisse rapidement, 
                     consultez un spécialiste.</p>
                 <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/surveiller11.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Vérifier le liquide de refroidissement</small></p>
                    </div>
                </div>
                 
                <p>Le voyant rouge signale que le moteur est en surchauffe dû à une température anormale
                     du liquide de refroidissement. Comme pour le problème précédent, il faut s'arrêter 
                     pour que le moteur refroidisse pour faire l'appoint. Si le problème persiste, 
                     direction le garage.</p>
                <p>D'autres voyants qui concernent le moteur peuvent s'allumer :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/surveiller12.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voyants moteu</small></p>
                    </div>
                </div>
                <p>1. Si vous avez une voiture diesel ce témoin de préchauffage pour moteur diesel doit 
                    s’éteindre une fois en marche. Si ce n’est pas le cas, vous avez peut-être un souci avec vos 
                    bougies de préchauffage. Je vous conseille d’aller au garage.</p>
                <p>2. Charge batterie : A la mise du contact, ce témoin s’allume puis s’éteint dès le démarrage 
                    du moteur. S’il s’allume en cours de route, c’est signe que la batterie ne se charge plus ou 
                    est en surcharge. Vous devez dans ce cas couper toutes les consommations électriques 
                    superflues (autoradio, chauffage,etc) et rouler jusqu’au garage le plus proche.</p>
                <p>3. Niveau de carburant faible. Arrêtez-vous à la prochaine station service.</p>
                <p>4. Dépollution du moteur: Il prévient d’un éventuel problème venant du système d’injection,
                     d’allumage ou du système antipollution. Il est recommandé de se rendre rapidement chez le 
                     garagiste pour éviter des dommages plus sévères au moteur.</p>
                <p>5. Le voyant d’anomalie du moteur, souvent appelé Check Engine, peut vous signaler une très
                     grande variété d’anomalies détectées par l’ordinateur de bord de votre véhicule. Cependant, 
                     si le voyant clignote alors que vous roulez, rangez-vous le plus rapidement possible de 
                     manière sécuritaire et arrêtez le moteur au plus vite.</p>
                <p>Si votre voiture n'a pas beaucoup roulé pendant l'hiver (ou pour d'autres raisons), il faudra 
                    être doux sur la pédale d'accélérateur au démarrage. Le moteur froid n'apprécie pas de tourner
                     à haut régime tout de suite. Donc vous pouvez partir, mais ne roulez surtout pas trop vite.</p>
                <p><b>Entretien de la batterie</b></p>
                <p>La batterie convertit l'énergie chimique en énergie électrique. Elle l'utilise pour les 
                    éclairages, le démarrage, l'alimentation, l'autoradio. La plupart des batteries sont sans 
                    entretien et vous n'avez pas à vous en occuper. Mais pour d'autres, il faut vérifier 
                    le liquide qu'elles contiennent.</p>
                <p>Voici le matériel dont vous devez disposer :</p>
                <ol style="list-style-type: disc;">
                    <li>des cosses neuves et de la graisse ;</li>
                    <li>des rondelles anti-sulfate ;</li>
                    <li>de l'eau distillée ou déminéralisée ;</li>
                    <li>une brosse métallique ;</li>
                    <li>de l'antirouille.</li>
                </ol>
                <p><b>Vérification du niveau du liquide</b></p>
                <ol style="list-style-type: disc;">
                    <li>Retirez les bouchons de remplissage.</li>
                    <li>Vérifiez le niveau du liquide : tous les éléments intérieurs de la batterie doivent être 
                        recouverts par l'eau (plus un à deux centimètres de liquide en plus).</li>
                    <li>Si ce n'est pas le cas, rajoutez de l'eau déminéralisée ou distillée.</li>
                </ol>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Ne pas prendre de l'eau du robinet à moins que la batterie soit complètement sèche et à défaut
                         d'avoir de l'eau déminéralisée (ou distillée) mais il 
                        ne sera pas possible de rouler longtemps dans ces conditions sans changer la batterie.</p>
                    </div>
                </div>

                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Bon à savoir : parfois, il est impossible d'accéder à l'intérieur de la batterie, 
                        car certains modèles ne comportent pas de bouchons. Il est alors impossible de la rouvrir.</p>
                    </div>
                </div>
                <br>
                
                <p><b>Démarrage du moteur sans batterie</b></p>
                <p>Si votre batterie est à plat, un autre conducteur peut vous aider à récupérer un peu de 
                    sa batterie pour pouvoir rentrer chez vous ou rouler jusqu'au premier garage.</p>
                <p>Il faut avoir les pinces qu'il faut correctement relier. Les + du véhicule chargeur vont 
                    sur les + du véhicule à charger et pour les - c'est la même chose. Il faut d'abord 
                    démarrer le véhicule de secours (chargeur), puis 5 minutes après, le véhicule en panne.</p>
                <h2 style="font-weight: bold;">Fusibles</h2>
                <p>Ils sont placés dans un boîtier étanche sous le capot et protègent le véhicule d'un 
                    court-circuit.</p>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Vous pouvez remplacer un fusible fondu par le même qui est de la même couleur. 
                        Le remplacer par un autre risque de provoquer un incendie !</p>
                    </div>
                </div>

                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>La boîte à fusibles n'est pas obligatoire, mais fortement conseillée dans le véhicule. 
                        En effet, je dois toujours circuler avec des feux qui fonctionnent.</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Courroie de distribution</h2>
                <p>C'est une pièce en caoutchouc qui est actionnée par la force du moteur et entraîne ses divers
                     équipements. Une courroie d'accessoire a une durée de vie très variable selon l'utilisation 
                     du véhicule. Le seul moyen de savoir quand la changer est de surveiller visuellement l'état 
                     d'usure de la courroie. Si la courroie est fatiguée, elle présente des craquelures, 
                     des déchirures ou des irrégularités en tout genre, il faut la changer.</p>
                <h2 style="font-weight: bold;">La notice d'utilisation du véhicule</h2>
                <p>Enfin, le plus simple lorsque vous avez un doute est de consulter la notice d'utilisation de 
                    votre véhicule. Il est conseillé de la laisser dans la boîte à gants pour qu'elle soit facilement
                     accessible.</p>
                <p>Elle permet de trouver une solution aux problèmes techniques "simples" et vous indique comment 
                    les résoudre. Par exemple, elle vous indique où se trouvent les fusibles dans le véhicule 
                    et précise le rôle de chacun.</p>
                <h2 style="font-weight: bold;">Notice d'utilisation</h2>
                <p>Dès que vous avez besoin d'un renseignement sur le véhicule, vous pouvez utiliser sa notice
                     d'utilisation. C'est pour cela, qu'il vous est conseillé de l'avoir dans la boite à gants.</p>
                <p>En effet, elle vous permet de trouver une solution à tous les problèmes techniques "simples" :</p>
                <ol style="list-style-type: disc;">
                    <li>problème de fusible,</li>
                    <li>dysfonctionnement des vitres électriques,</li>
                    <li>etc.</li>
                </ol>
                <br>

                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Les ampoules ont besoin d'être changées avec précaution. Certaines ampoules ont 
                    besoin d'une main experte, donc ne vous amusez pas à le faire par vous-même.</li>
                   <li>Si vous manquez de liquide lave-glace, le témoin lumineux vous le fera savoir en 
                    s'affichant sur le tableau de bord.</li>
                   <li>Pensez à nettoyer votre véhicule à une aire de lavage et à graisser les serrures.</li>
                   <li>Pour ne pas vous faire de sueurs froides, pensez à vérifier le niveau du liquide de frein.</li>
                   <li>Le moteur a besoin d'huile pour bien fonctionner. Si votre niveau d'huile devient bas 
                    pendant la conduite (voyant huile s'allume), arrêtez-vous et vérifiez le niveau d'huile 
                    seulement lorsque le moteur est froid et sur un sol plat.</li>
                   <li>Certaines batteries ont besoin d'être remplies avec du liquide et avec précaution !</li>
                   <li>Si vous voulez remplacer un fusible, faites attention à leur couleur !</li>
                   <li>De temps en temps, jetez un coup d’œil sur la courroie de distribution pour éviter que 
                    le moteur ne s'endommage.</li>
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