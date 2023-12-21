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
    <title>Changer de direction</title>
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
                <h1 style="font-weight: bold;"><b>Changer de direction</b></h1>
                <br>
                <h2 style="font-weight: bold;">Vous voulez changer de direction</h2>
                <p>Comme vous le savez déjà, changer de direction ne peut pas s'effectuer sur autoroute comme 
                    en agglomération ou sur les petites routes. La vitesse étant trop importante, 
                    seules les bifurcations sont autorisées.  C'est pour cette raison que les panneaux 
                    seront implantés longtemps à l'avance, tout simplement pour que vous puissiez vous
                     préparer à prendre votre décision en agissant en toute sécurité.</p>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Si vous vous trompez de rue en agglomération, ce n'est pas bien grave car vous pouvez toujours
                         regagner la direction voulue en passant par une autre rue adjacente. Sur les routes hors agglomération, 
                         vous pouvez aussi regagner la direction voulue si vous rencontrez un carrefour à sens giratoire. 
                         Si vous ratez une sortie sur autoroute, 
                        vous devrez parcourir de nombreux kilomètres avant la prochaine sortie. D'où autant de panneaux répétitifs !</p>
                    </div>
                </div>
                <br>
                <p><b>Bifurcation avec voie de décélération</b></p>
                <p>Nous avons déjà vu le terme "bifurcation" lorsque je vous ai parlé des voies pour
                     tourner à gauche ou à droite dans une agglomération. Bifurquer veut donc dire changer
                      de direction.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Sur les autoroutes, la bifurcation est un endroit où le chemin se divise en 2 et propose donc une autre direction, 
                        différente de celle que vous étiez en train de suivre.</p>
                    </div>
                </div>
                <br>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Avant de vouloir changer de direction, il va falloir repérer la manière dont la bifurcation est annoncée. 
                        Comment comprenez-vous l'étape n°1 du schéma, intitulée "Annonce" ?</p>
                  </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/changer1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Étape 1 </small></p>
                
                    </div>
                </div>
                
                <P><b>Réponse :</b> Vous roulez sur l'autoroute A40. Le panneau de confirmation implanté 
                sur la gauche (Confirmation n°6) vous en informe. Quant à l'étape n°1 du schéma (Annonce), 
                elle a 2 significations car elle contient 2 panneaux. Le panneau supérieur comporte 
                le numéro de l'autoroute embranchée (A41) et la distance à parcourir avant la bifurcation (8 km).
                 Le panneau inférieur confirme que pour aller à Annecy (reste encore 12 km) ou à Grenoble 
                (reste encore 124 km), il faut continuer sur la même autoroute.</P>
                <p>Voyons les autres étapes :</p>
                <ol style="list-style-type: disc;">
                    <li>étape n°2 (Confirmation de bifurcation) contient un petit idéogramme qui symbolise 
                        le croisement avec une autre autoroute (A40 et A41) à venir dans 3 km (3000 m) ;</li>
                </ol>
                
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Étape 2 : annonce de la bifurcatio</small></p>
                
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change3.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Idéogramme des croisements autoroutiers</small></p>
                    </div>
                </div>
                <ol style="list-style-type: disc;">
                    <li>étape n°3 (Avertissement) sera visible à 2 km de la bifurcation. Vous pourrez y lire les noms 
                        des villes prises comme terminus de chaque autoroute (Chamonix et Grenoble) ;</li>
                </ol>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Étape 3 : avertissement </small></p>
                    </div>
                </div>
                <ol style="list-style-type: disc;">
                    <li>étape n°4 (Présignalisation) confirme la bifurcation et la distance à parcourir
                         pour l'atteindre (1 km) ;</li>
                </ol>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change5.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Étape 4 : présignalisation</small></p>
                    </div>
                </div>
                <ol style="list-style-type: disc;">
                    <li>étape n°5 (Dernier rappel) représente la bifurcation imminente (une petite flèche en haut à droite 
                        rappelle la direction à suivre pour atteindre l'autoroute A41). Elle se situe au début de la voie de 
                        décélération. Vous y verrez le
                         panneau qui vous oblige à ralentir pour pouvoir bifurquer à droite (voir la flèche sur le panonceau) ;</li>
                </ol>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change6.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Dernier appel</small></p>
                    </div>
                </div>
                
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Une fois que vous vous êtes engagés sur la bretelle de sortie de la A40, 
                        vous ne pouvez plus revenir en arrière !</p>
                    </div>
                </div>
                <p><b>Bifurcation avec affectation des voies</b></p>
                <p>Ce cas de figure demande un peu plus de vigilance, car vous allez devoir
                     vous positionner dans la bonne voie au bon moment.</p>
                <p>Je vais commencer par une Confirmation de direction pour que vous sachiez 
                    sur quelle autoroute vous vous trouvez. En l'occurrence, la A46 :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change7.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Étape d'annonce</small></p>
                    </div>
                </div>
                <br>
                
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Comme vous pouvez le constater, la confirmation peut 
                    être située tant à droite qu'à gauche.</p>
                    </div>
                </div>
                <br>
                <div class="card question">
                <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>C'est l'étape de l'avertissement qui sera sensiblement différente de celle où l
                    a bifurcation se fait avec une voie de décélération. Que remarquez-vous entre les deux ?</p>
                </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change8.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Différent type de bifurcations </small></p>
                    </div>
                </div>
                
                <br>
                <p><b>Réponse :</b> Comme vous pouvez le voir, l'avertissement de l'exemple 1 
                (sans affectation de voie) est représentée sur une seule "branche", 
                or lorsque les voies sont affectées on distingue 2 "branches".</p>
                <ol style="list-style-type: disc; margin-left: 10px;">
                    <li>l'étape n°4 (Présignalisation) fait référence aux panneaux qui se trouvent sur un portique 
                        et qui sont implantés à l'endroit où vous devez prendre la voie de votre choix.
                         En l'occurrence, il faut profiter des 500 m annoncés pour changer de voie :</li>
                </ol>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change9.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Étape 4 : présignalisation</small></p>
                    </div>
                </div>
                <ol style="list-style-type: disc; margin-left: 10px;">
                    <li>l'étape n°5 (Dernier rappel) répète les mêmes panneaux sur le portique, 
                        sauf que la bifurcation est imminente :</li>
                </ol>
                
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change10.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Dernier appel </small></p>
                    </div>
                </div>
                
                <h2 style="font-weight: bold;">Quitter l'autoroute</h2>
                <p><b>Sortie avec voie de décélération</b></p>
                <p>Pour sortir de l'autoroute, une voie supplémentaire est mise en place pour vous permettre
                     de ralentir progressivement.  Voyons à présent le schéma de l'autoroute où vous allez 
                     devoir suivre les indications de sortie :</p>
                <ol style="list-style-type: disc; margin-left: 10px;">
                    <li>L'étape annonçant la sortie contient 3 panneaux. L'un qui concerne la sortie 10 dans 8 km et 
                        les 2 autres concernent des villes. Comment les comprendre ? 
                        La sortie 10 se situe à 8 km de ce panneau et permet de rejoindre Yenne, Belley et St Genix.</li>
                </ol>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change11.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Étape 1 : annonce de sortie</small></p>
                    </div>
                </div>
                <ol style="list-style-type: disc; margin-left: 10px;">
                    <li>L'étape d'Avertissement prévient que la sortie 10 est à 2km :</li>
                </ol>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change12.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Étape 2 : avertissement</small></p>
                    </div>
                </div>
                <ol style="list-style-type: disc; margin-left: 10px;">
                    <li>L'étape de la présignalisation prévient que la sortie 10 est à 1 km :</li>
                </ol>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change13.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Étape 3 : présignalisation</small></p>
                    </div>
                </div>
                <ol style="list-style-type: disc; margin-left: 10px;">
                    <li>L'étape du dernier rappel est celle qui va annoncer la sortie 10 qui est imminente,
                         se situant un peu avant le début de la voie de décélération.</li>
                </ol>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change14.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Dernier appel</small></p>
                    </div>
                </div>
                <p><b>Sortie avec affectation des voies</b></p>
                <p>Tout comme dans le cas d'une bifurcation, pour sortir 
                    de l'autoroute il faut se positionner sur la bonne voie au bon moment :</p>
                <ol style="list-style-type: disc; margin-left: 10px;">
                    <li>L'étape d'annonce est la même qu'en sortie avec voie de décélération :</li>
                </ol>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change15.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Étape 1 : annonce</small></p>
                    </div>
                </div>
                <ol style="list-style-type: disc; margin-left: 10px;">
                    <li>L'étape d'avertissement avec sa flèche inclinée signale que la sortie 12 
                        située à 1 km comporte une voie qui lui est attribuée :</li>
                </ol>
                
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change16.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Étape 2 : avertissement</small></p>
                    </div>
                </div>
                <ol style="list-style-type: disc; margin-left: 10px;">
                    <li>L'étape de présignalisation et ses spécificités :</li>
                </ol>
                
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Les panneaux de présignalisation (placés sur le portique) comportent 2 types de panneaux. Les bleus 
                    avec les flèches dirigées vers le bas rappellent les directions desservies par l'autoroute, 
                    alors que les vertes et les blanches désignent les directions routières desservies par la sortie 12 située à 500 m.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change17.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Étape 3 : présignalisation</small></p>
                    </div>
                </div>
                <ol style="list-style-type: disc; margin-left: 10px;">
                    <li>L'étape du dernier rappel comporte les panneaux qui annoncent la sortie imminente, 
                        mais confirment aussi les autres destinations :</li>
                </ol>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/change18.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Dernier appel</small></p>
                    </div>
                </div>
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Changer de direction sur autoroute veut dire emprunter une voie 
                        de décélération pour changer de route.</li>
                    <li>Il existe 2 façons de signaler le changement de direction : 
                        par voie de décélération et par affectation de voies.</li>
                    <li>Les panneaux vont être implantés plusieurs fois pour vous signaler une direction ou une sortie.</li>
                    <li>Il existe 5 étapes dans la signalisation : annonce, confirmation de (bifurcation ou de sortie), 
                        avertissement, présignalisation, dernier appel.</li>
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