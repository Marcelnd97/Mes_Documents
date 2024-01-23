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
    <title>Les chantiers routiers</title>
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
                <h1 style="font-weight: bold;"><b>Les chantiers routiers</b></h1>
                <br>
                <p>Les zones de travaux, le balisage d'un accident, d'un véhicule en panne sont des événements 
                    inattendus empêchant la circulation de se dérouler comme il faut. Par conséquent, il faut être très prudent.</p>
                
                <div class="card question">
                <div class="card-body">
                <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                <p>Vous souvenez-vous de la couleur des panneaux et de la 
                    façon dont on détermine si la signalisation est temporaire ou pas ?</p>
                </div>
                </div>
                <br>
                <br>
                <p><b>Réponse : </b>Si on annonce des travaux, la signalisation sera jaune. 
                    Si c'est une nouvelle vitesse qu'il faut adopter,
                    elle sera posée par terre. Défense de dépasser aussi !</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/chantier1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Travaux en agglomération</small></p>
                    </div>
                </div>
                
                <h2 style="font-weight: bold;">Quelques exemples de dangers sur la chaussée</h2>
                <p>Nous avons déjà vu quelques panneaux à fond jaune se référant à des dangers temporaires 
                    à appréhender en ou hors agglomération. Ce sont les panneaux annonçant les travaux, 
                    le rétrécissement de chaussée, le dos-d'âne (ou cassis) temporaire, le feu tricolore
                     temporaire ou la projection de gravillons (voir photo ci-dessous) :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/chantier2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Panneaux annonçant les dangers temporaires</small></p>
                    </div>
                </div>
                
                <h2 style="font-weight: bold;">Conséquences des travaux</h2>
                <p><b>Il faut prendre un autre chemin</b></p>
                <p>Une déviation est souvent mise en place pour cause de travaux. 
                    La route habituelle peut être complètement fermée comme sur les panneaux ci-dessous </p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/chantier3.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Route fermée</small></p>
                    </div>
                </div>
                <p>La déviation peut concerner tous les véhicules, comme elle peut concerner seulement une 
                    certaine catégorie :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/chantier4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Déviation pour les poids-lourds</small></p>
                    </div>
                </div>
                
                <p><b>Il faut changer de trajectoire</b></p>
                <p>Si les déviations vont vous faire changer d'itinéraire, d'autres panneaux vont vous faire
                     changer un peu la trajectoire, ce qui n'est pas à négliger en terme de vitesse à respecter 
                     et des dangers à anticiper.</p>
                <p>Grâce à ce panneau on vous informe d'une réduction de nombre de voies et aussi de la vitesse,
                     mais sur autoroute.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/chantier5.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Réduction de voies dans 500 m</small></p>
                    </div>
                </div>
                <p>Lorsqu'il y a un changement d'espace de circulation et donc de chaussée, 
                    vous serez avertis avec le panneau ci-dessous :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/chantier6.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Présignalisation de changement de chaussée ; 
                            emprunter la voie indiquée</small></p>
                    </div>
                </div>
                <p>Le panneau d'affectation des voies vous informera de la circulation
                     à double sens, ce qui est donc temporairement le cas sur l'autoroute :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/chantier7.jpg">
                        </div>
                        <p class="text-muted text-center"><small>La circulation se fait à double sens</small></p>
                    </div>
                </div>
                
                <p><b>Signalisation dynamique</b></p>
                <p>Les panneaux lumineux annoncent l'emplacement exact des travaux en donnant des conseils sur la 
                    conduite à adopter. En l'occurrence, 
                    la flèche lumineuse sur la photo ci-dessous invite les conducteurs à emprunter la voie désignée :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/chantier8.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Travaux sur la route </small></p>
                    </div>
                </div>
                
                <p><b class="text-muted">Bouchons</b></p>
                <p>Les bouchons sur autoroute surgissent pour cause de fort trafic, des travaux, 
                    des accidents ou tout autre obstacle qui ferait ralentir la circulation.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Si vous voyez que les voitures ralentissent devant vous et allument le bouton warning, 
                    cela veut dire que vous devez faire pareil pour annoncer à 
                    ceux derrière vous qu'il y a un bouchon et qu'il faut ralentir.</p>
                    </div>
                </div>
                <br>
                <p>Autrement, ce sont les panneaux lumineux qui vous en informeront à temps :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/chantier9.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Bouchons annoncés grâce aux panneaux lumineux</small></p>
                    </div>
                </div>
                
                <h2 style="font-weight: bold;">Panneaux plantés latéralement</h2>
                <p>Certains panneaux peuvent être présents sur la route, mais ils ne sont pas visibles facilement. 
                    Et c'est le but ! Ils sont plantés à l'endroit en question pour anticiper sur un futur usage.</p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Il ne faut pas les prendre en compte, ils ne sont pas effectifs !</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/chantier10.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Panneau ineffectif</small></p>
                    </div>
                </div>
                
                <p>Précautions à suivre si vous tombez sur les travaux ou les déviations :</p>
                <ol style="list-style-type: disc;">
                    <li>regardez bien devant vous pour pouvoir repérer de loin les panneaux ou signalisations 
                        vous avertissant des évènements inattendus ;</li>
                    <li>en cas de travaux ou déviation, pensez à ralentir ;</li>
                    <li>pensez à garder vos distances ;</li>
                    <li>prévoyez des retards dans vos déplacements et ne cherchez pas à arriver à l'heure coûte 
                        que coûte.</li>
                </ol>
                <h2 style="font-weight: bold;">Quelques exemples</h2>
                <br>
                <div class="card question">
                    <div class="card-body">
                        <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                        <p>Sur cette photo, vous voyez cette limitation de vitesse, que faites-vous ?
                        Sur quelle route êtes-vous ? 
                        La vitesse, est-elle temporaire ou pas ? Sur quelle partie de 
                        la chaussée s'applique-t-elle ? La droite ou la gauche ?</p>
                    </div>
                </div>
                <br>
                
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/chantier11.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Anticiper les dangers temporaires </small></p>
                    </div>
                </div>
                
                <p><b>Réponse : </b>Vous êtes sur une route hors agglomération. La vitesse est temporairement 
                limitée à 50 km/h, car elle n'est pas sur un panneau. Elle se trouve sur les chevrons et s'applique 
                sur la partie de la route devant vous, donc à gauche du panneau. De plus, vous pouvez entrevoir des 
                travaux devant vous, dans approximativement 500 m. Le panneau vous dit de ralentir 
                (vous avez pu conduire à 80km/h maximum car c'est la limitation sur les routes hors agglomération),
                 mais je vous conseille d'être vigilants à un changement de trajectoire par exemple.</p>
                <br>
                <div class="card question">
                    <div class="card-body">
                        <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                        <p>Avez-vous le droit de dépasser ce véhicule ?</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/chantier12.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Travaux non-entamés</small></p>
                    </div>
                </div>
                <p><b>Réponse : </b>Sur cette photo, nous ne voyons pas de travaux proprement dits. Mais le camion 
                    en question s'est arrêté et s'apprête à entamer des travaux car il a mis le gyrophare. Vous pouvez 
                    donc passer à côté de lui (le dépasser) car aucun cycliste ne vient dans l'autre sens. Autrement, 
                    il faudrait laisser passer le cycliste (zoomer l'image pour voir l'inscription sur la chaussé).</p>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Si vous voyez un panneau annonçant les travaux, votre comportement doit changer.</li>
                    <li>Vous devez ralentir et comprendre où se trouvent les déviations pour ne pas être surpris.</li>
                    <li>Certains panneaux peuvent être posés latéralement et auquel cas il ne faut pas les prendre en compte.</li>
                    <li>Un camion nacelle qui élague les arbres dans la rue est aussi considéré comme un véhicule qui fait des travaux.</li>
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