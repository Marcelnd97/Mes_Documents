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
    <title>Les pneus</title>
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
                <h1 style="font-weight: bold;"><b>Les pneus</b></h1>
                <br>
                <p>Je vous ai parlé des pneus lorsque j'ai évoqué la notion d'aquaplaning ou celle du freinage,
                     mais aussi lorsque j'ai parlé des déplacements en montagne. Voyons tout cela de près.</p>
                <p>Les pneus doivent être en excellent état pour que la conduite se passe dans de bonnes 
                    conditions et en toute sécurité.</p>
                <p>Les pneus doivent :</p>
                <ol style="list-style-type: disc;">
                    <li>être de marque, ayant les mêmes caractéristiques sur un même essieu (voir photo ci-dessous).
                         Pastille n°1 et n°3 : roues arrière ; pastille n°2 et n°4 : roues avant</li>
                    <div class="row">
                        <div class="col-md-12" >
                            <div class="card" 
                                style="border: none; max-width: 650px; 
                                margin: 100px auto; border: 2px solid chocolate;
                                margin-top: 10px; margin-bottom: 10px;" >
                                    <img src="../images/theme_huit/pneu1.jfif">
                            </div>
                            <p class="text-muted text-center"><small>Montage correct et incorrect</small></p>
                        </div>
                    </div>
                    <li>Ne pas dépasser la profondeur réglementaire d'usure qui est de 1,6 mm. Pour la mesurer, 
                        il faut vous référer à une petite bosse qui se situe au fond des sillons ou des sculptures. 
                        Lorsque la hauteur de gomme restante arrive au niveau de cette bosse soit 1,6 mm, le pneu 
                        a atteint sa limite légale d’utilisation et doit être changé ;</li>
                    <li>L'usure entre les pneus d'un même essieu ne doit pas dépasser 5mm ;</li>
                    <div class="row">
                        <div class="col-md-12" >
                            <div class="card" 
                                style="border: none; max-width: 650px; 
                                margin: 100px auto; border: 2px solid chocolate;
                                margin-top: 10px; margin-bottom: 10px;" >
                                    <img src="../images/theme_huit/pneu2.jfif">
                            </div>
                            <p class="text-muted text-center"><small>Témoin d'usure des pneus</small></p>
                        </div>
                    </div>
                    
                    <li>Doivent être gonflés selon la recommandation exacte pour votre voiture. Cette information est mentionnée 
                        sur une étiquette collée dans l’ouverture de la porte du conducteur ou à l’intérieur 
                        de la trappe à essence de votre voiture ;</li>
                    <div class="row">
                        <div class="col-md-12" >
                            <div class="card" 
                                style="border: none; max-width: 650px; 
                                margin: 100px auto; border: 2px solid chocolate;
                                margin-top: 10px; margin-bottom: 10px;" >
                                    <img src="../images/theme_huit/pneu3.jpg">
                            </div>
                            <p class="text-muted text-center"><small>Réglage de la pression des pneus</small></p>
                        </div>
                    </div>
                   
                </ol>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>La bonne pression se situe généralement entre 1,8 et 3 bars au manomètre. La pression des
                         pneus se fait à froid. Il ne faut donc pas parcourir plus de 3 kilomètres avant de l'effectuer. 
                        Sinon, à chaud, il faut ajouter 0,3 bars de pression à la recommandation du constructeur.</p>
                    </div>
                </div>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Augmentez toujours la pression de vos pneus de 200 à 300 g si le véhicule est chargé ou en cas 
                        de long trajet sur autoroute. Des pneus sous-gonflés s'usent plus vite, 
                        consomment davantage de carburant et peuvent éclater.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/pneu4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>L'aspect des pneus au gonflage</small></p>
                    </div>
                </div>
                
                <p>Quand un pneu percute un obstacle sur la route, les conséquences du choc sont amplifiées 
                    par la vitesse. Si vous roulez vite, vous risquez d'endommager plus fortement votre 
                    pneu qu'en roulant à une allure modérée. Aussi, si vous conduisez trop vite, 
                    les pneus peuvent s'échauffer au-delà de leurs limites. Des accidents peuvent 
                    s'ensuivre comme l'éclatement du pneu ou des fuites d'air soudaines. Mieux vaut 
                    prévenir de tels risques. Lorsque vous notez des détériorations sur un de vos pneus, 
                    remplacez-le immédiatement avec votre roue de secours et prenez rendez-vous chez un 
                    professionnel pour le faire vérifier.</p>
                <p>Voici à présent quelques indicateurs que vous trouverez sur un pneumatique :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/pneu5.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Lecture des informations sur un flanc</small></p>
                    </div>
                </div>
                
                <p>1. Largeur du pneumatique exprimé en mm ;</p>
                <p>2. Hauteur du flanc en rapport avec la largeur du pneu exprimé en % (45 % de 245) ;</p>
                <p>3. Le pneu est composé d'une structure radiale ;</p>
                <p>4. Diamètre intérieur du pneu exprimé en pouces ;</p>
                <p>5. Indice charge et vitesse ;</p>
                <p>6. Un pneumatique désigné par ces marquages est conçu pour 
                    supporter des charges et des pressions de gonflage supérieures à la version standard.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>L'entretien des pneus passe par la vérification de leur gonflage 1 fois par mois. Nous avons vu que 
                        la bonne pression se situe entre 1,8 et 3 bars au manomètre. Aussi, si vos pneus sont trop usés 
                        (flancs présentant des hernies ou déchirures), vous risquez de crever. 
                        Si c'est trop tard pour un entretien, voici au moins les conseils pour le changer.</p>
                    </div>
                </div>
                
                <br>
                <p><b>En cas de crevaison</b></p>
                <p>Vous n'êtes pas obligés d'avoir une roue de secours dans votre véhicule, mais c'est vivement 
                    recommandé. Vous pouvez toujours avoir la bombe anti-crevaison, mais elle ne peut être utilisée
                     qu'en cas de petites crevaisons dues à la présence d'un corps étranger. Dans le cas d'une
                      crevaison large ou localisée sur le flanc du pneu, vous devrez procéder à l'installation
                       de la roue de secours.</p>
                <p><b>Si vous disposez d'une roue de secours</b></p>
                <p>Pensez à stationner de manière à ne pas gêner les autres usagers de la route. En agglomération,
                     les crevaisons sont davantage liées aux travaux car de nombreux vis et clous, d'une longueur
                      d'un à quatre centimètres, viennent s'incruster dans la gomme. Si la crevaison vous arrive
                       sur une route hors agglomération, pensez à stationner sur une BAU.</p>
                <ol style="list-style-type: disc;">
                    <li>Ne roulez surtout pas à plat sur une longue distance car votre pneu ne sera tout simplement
                         plus réparable.</li>
                    <li>Allumez vos feux de détresse.</li>
                </ol> 
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Ne changez jamais une roue gauche sur la bande d'arrêt 
                        d'urgence d'une autoroute ou d’une voie rapide. Votre vie en dépend !</p>
                    </div>
                </div>
                <br>
                
                <p>Si vous n'avez ni l'équipement ni la roue de rechange, le mieux est d'appeler un service de dépannage.</p>
                <p>Si vous avez l'équipement pour changer le pneu, mais ne savez pas faire, il va falloir
                     vous improviser mécano.</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Attention, changer une roue n'est pas une affaire facile, et il faut le faire correctement !</p>
                    </div>
                </div>
                <br>
                <p>Voyons d'abord le matériel qu'il vous faut :</p>
                <ol style="list-style-type: disc;">
                    <li>cric (l'appareil à soulever la voiture) ;</li>
                    <li>clef en croix ;</li>
                    <li>bombe anti-crevaison + compresseur électrique (se branche sur l'allume-cigare) ;</li>
                    <li>roue de secours ;</li>
                    <li>lampe de poche (au cas où la crevaison surviendrait de nuit) ;</li>
                    <li>éventuellement une paire de gants (si vous souhaitez garder les mains propres).</li>
                </ol>
                <p><b>Démontez la roue crevée et montez la nouvelle</b></p>
                <p><b class="text-muted">Voici les étapes à suivre :</b></p>
                <ol style="list-style-type: disc;">
                    <li>enlevez l'enjoliveur (sauf jantes alliage) ;</li>
                    <li>desserrez les boulons de la roue (sens inverse des aiguilles d'une montre). 
                        Voyez la photo ci-dessous (étape 1) ;</li>
                    <li>positionnez le cric (une marque située vers l'intérieur de la voiture vous y aidera), 
                        photo ci-dessous (étape 2) ;</li>
                    <li>levez la voiture (5 cm du sol minimum) ;</li>
                    <li>dévissez les boulons ;</li>
                    <li>retirez la roue crevée ;</li>
                    <li>positionnez la roue de secours (voir photo n°3 ci-dessous) ;</li>
                    <li>vissez les boulons manuellement, toujours une diagonale après l'autre 
                        (ne pas visser deux boulons côte à côte à la suite), photo n° 4 ci-dessous ;</li>
                    <li>descendez la voiture et enlevez le cric.</li>
                </ol>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/pneu6.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Démonter un pneu crevé</small></p>
                    </div>
                </div>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>"Souvent, la roue de secours est plus mince que les autres pneus. Il s'agit d'une "galette". 
                        Elle permet de parcourir quelques kilomètres mais doit être remplacée dès que possible. 
                        Vous ne devez pas dépasser 80 km/h, pour réduire les risque de perte d'adhérence, à cause 
                        de sa petite taille.</p>
                    <p>Il faut régulièrement contrôler la pression de la "galette" pour être sûr qu'elle pourra être 
                        utilisée correctement le moment voulu. </p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Eviter un vol</h2>
                <p>Malheureusement, certaines personnes volent des roues ! Pour éviter cela, les 
                    constructeurs ont mis en place un système d'"écrou antivol". Sans cet écrou, le 
                    boulon qui fixe la roue au véhicule ne peut pas être enlevé. Le jour où vous voulez 
                    changer une roue, vous devez utiliser un adaptateur.</p>
                <br>
                
                                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Les pneus doivent être de marque, ayant les mêmes caractéristiques sur un même essieu.</li>
                   <li>La profondeur réglementaire d'usure est de 1,6 mm, alors ne la dépassez pas sinon vous
                     risquez de crever.</li>
                   <li>La bonne pression des pneus se situe entre 1,8 et 3 bars de façon générale ; vous devez
                     pourtant connaître l'exacte pression requise pour votre véhicule.</li>
                   <li>Pensez à regonfler les pneus tous les mois.</li>
                   <li>En cas de crevaison, vous pouvez changer la roue vous-même (si vous avez la roue, le
                     matériel et le savoir-faire) ; autrement, il faut appeler un service de dépannage.</li>
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