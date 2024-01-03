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
    <title>La signalisation</title>
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
                <h1 style="font-weight: bold;"><b>La signalisation</b></h1>
                <br>
                <h2 style="font-weight: bold;">Autoroute et ses caractéristiques </h2>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Rappelez-vous des caractéristiques des routes. Comment y circule-t-on ?</p>
                  </div>
                </div>
                <br>
                
                
                <p><b>Réponse :</b> Les routes peuvent être à sens unique, 2 x 2 voies ou à double sens. 
                    Pour les premières la vitesse est limitée à 110 km/h et pour les autres à 80 km/h 
                    (sauf réglementation différente). </p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>L'autoroute est une chaussée à sens unique spécialement conçue pour des déplacements rapides.
                         Les usagers venant de l'autre sens de la circulation sont donc de l'autre côté du terre plein.
                          Contrairement aux routes, vous n'y rencontrerez pas d'intersections et ne traverserez pas d'agglomération.</p>
                    </div>
                </div>
                <br>
                
                <P>Aussi, l'autoroute est interdite aux usagers qui ne peuvent se déplacer que lentement :</P>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/signale1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Usagers interdits sur autoroute</small></p>
                
                    </div>
                </div>
                
                <p class="text-muted text-center"><small >Rue à sens unique</small></p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Attention à ne pas confondre ce dernier panneau avec la motocyclette, qui est acceptée sur l'autoroute. 
                    Ce panneau se réfère aux cyclomoteurs dont la vitesse n'est pas compatible avec celle exigée.</p>
                    </div>
                </div>
                <br>
                
                <p><b>Dangers à prendre en compte</b></p>
                <p>Les feux n'existent pas sur l'autoroute. Voici les panneaux de danger ou d'interdiction 
                    les plus courants sur autoroute. Vous devriez tous les connaître !</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/signale2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Panneaux les plus courants sur autoroute</small></p>
                
                    </div>
                </div>
                
                <p><b>Réponse :</b></p>
                <p>1. Chaussée glissante </p>
                <p>2. Animaux sauvages peuvent surgir</p>
                <p>3. Descente dangereuse </p>
                <p>4. Risque de fort vent latéral </p>
                <p>5. Danger sur la route non précisé</p>
                <p>6 . Bouchon</p>
                <p>7. Travaux</p>
                <p>8. Accès interdit aux véhicules transportant des marchandises explosives ou facilement 
                    inflammables </p>
                <p>9. Accès interdit aux véhicules transportant des marchandises susceptibles de polluer les
                     eaux et en grande quantité </p>
                <p>10. Accès interdit aux véhicules transportant des marchandises dangereuses.</p>
                <p>Voici une combinaison panneau-panonceau relative aux véhicules lents :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 200px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/signale3.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Risque de heurt des véhicules lents</small></p>
                
                    </div>
                </div>
                
                <p>Comme vous pouvez le voir, cela concerne la montée (numéro 1) et la descente (numéro 2). 
                    Parfois, vous verrez ce même danger exprimé sur un grand panneau, comme sur l'image ci-dessous :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/signale4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Risque de heurt de véhicules</small></p>
                
                    </div>
                </div>
                
                <h2 style="font-weight: bold;">Route à accès réglementé ou autoroute ?</h2>
                <p>Je vous l'accorde, une autoroute ressemble à une 2 x 2 voie avec un terre plein au milieu.</p>
                <p>Certaines voies rapides peuvent avoir des bandes d'arrêt d'urgence, donc ce n'est pas
                     vraiment le critère à prendre en compte pour les différencier.</p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>C'est la signalisation qui va établir la différence et surtout la position des panneaux.</p>
                    </div>
                </div>
                <br>
                <p>Si sur la gauche vous voyez un panneau comme sur la photo ci-dessous, 
                    vous n'êtes pas encore sur l'autoroute mais sur le chemin vers cette autoroute.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/signale5.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Vous êtes sur une route qui mène vers</small></p>
                
                    </div>
                </div>
               
                <h2 style="font-weight: bold;">En revenant d'un pays étranger</h2>
                <p>Que vous revenez en France par une agglomération (Strasbourg), 
                    une autoroute (A31 qui passe par un poste de douane) ou par une autre route, vous verrez ces panneaux :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/signale6.jpg">
                        </div>
                        <p class="text-muted text-center"><small>En entrant en France </small></p>
                
                    </div>
                </div>
                <p>Comme vous pouvez le voir,  un panneau annonçant le pays est implanté, ainsi que les 
                    limitations de vitesse sur les routes et les autoroutes. Si vous voyez les étoiles 
                    jaunes sur un fond bleu, cela veut dire que L’État appartient à la Communauté Européenne. 
                    Le panneau qui annonce l'arrêt obligatoire au poste de douane se trouve aussi en sortant du pays.</p>
                <p><b>En direction de l'autoroute</b></p>
                <p>Nous avons vu que pour vous rendre sur une certaine autoroute, il faut suivre les panneaux 
                    qui l'indiquent. Imaginons que vous êtes sur la Nationale 7 et que vous êtes à la hauteur
                     de ce panneau. Il faut donc rouler encore 1,5 km pour atteindre l'autoroute A 89.</p>
                 <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 500px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/signale7.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Rouler en direction de l'autoroute A 89</small></p>
                    </div>
                </div>
                <p><b>Entrez sur l'autoroute</b></p>
                <p>Suivons l'exemple de la photo ci-dessous : 
                    pour entrer sur l'autoroute A89, il faut suivre l'indication A 89 et
                     surtout l'idéogramme suivant :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 100px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/signale8.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Entrée sur l'autoroute</small></p>
                    </div>
                </div>
                
                <p>Insérez-vous</p>
                <p>Pour changer de route (de la N7 à A89), vous allez devoir emprunter une bretelle d'accès. 
                    Il s'agit d'un virage de 350 ° à peu près qui vous permet d'accéder à l'autoroute. 
                    La continuité de la bretelle (signalée avec la flèche noire discontinue sur la photo ci-dessous)
                     est appelée voie d'accélération.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/signale9.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Bretelle d'accès qui permet de s'insérer sur l'autoroute</small></p>
                    </div>
                </div> 
                
                <p>Comme vous pouvez le remarquer, après le panneau qui interdit de tourner à gauche 
                    (normal, c'est un sens unique), vous pouvez voir un Cédez le passage un peu plus loin. 
                    C'est au niveau du panneau que vous devez rouler à l'extrême droite sur la voie d'accélération 
                    et vous insérer seulement lorsque la voie est libre sur la voie de droite habituelle. 
                    Vous ne devez pas gêner les autres voitures en les obligeant à changer de voie.</p>  
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/signale10.jfif">
                        </div>
                        <p class="text-muted text-center"><small>La bretelle de raccordement</small></p>
                    </div>
                </div>
                
                <h2 style="font-weight: bold;">Lecture des panneaux</h2> 
                <p><b>Directions sur autoroute</b></p>
                <p>Une fois que vous êtes sur autoroute, vous rencontrerez des panneaux bleus avec des inscriptions 
                    blanches pour les chemins réguliers, des panneaux jaunes avec les inscriptions noires pour les
                     itinéraires temporaires, des panneaux marrons avec des inscriptions noires pour les directions 
                     touristiques ou des forêts, des panneaux blancs avec les inscriptions noires pour des sorties.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/signale11.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Panneaux autoroutiers</small></p>
                    </div>
                </div>
                
                <p><b>Panneaux et cartouches </b></p>
                <p>La couleur des panneaux indiquant une direction autoroutière régulière est 
                    bleue avec des inscriptions en lettres blanches. Tout comme les autres routes, 
                    les autoroutes ont aussi leurs cartouches qui les désignent :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/signale12.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Lecture des panneaux </small></p>
                    </div>
                </div>
                
                <p>Sur la photo ci-dessus vous pouvez voir qu'il y a deux types de cartouches :</p>
                <p>A 51 qui est affiché sur un fond rouge avec les lettres blanches ;</p>
                <p>E 712 qui est affiché sur un fond vert avec les lettres blanches. 
                    C'est le cartouche de l'itinéraire européen. </p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Les itinéraires européens empruntent le plus souvent des autoroutes
                         ou des routes nationales les plus fréquentées. 
                        Plusieurs itinéraires européens peuvent parfois se chevaucher..</p>
                    </div>
                </div>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Ne confondez pas l'itinéraire européen avec le chemin forestier. 
                        Vous les différencierez grâce aux lettres E et F.</p>
                    </div>
                </div>
                <br>
                <p>La lecture des panneaux de la photo ci-dessus est la suivante : vous êtes sur l'autoroute 
                    A 51 et le sens des flèches indique la direction à suivre pour atteindre ces villes : 
                    Briançon, Gap, Barcelonnette, Nice, Marseille, Aix-en-Provence ou Digne les Bains. 
                    J'ai choisi de ne pas vous montrer l'affectation des voies, car je vous en parlerai 
                    plus tard dans l'un des prochains chapitres.</p>
                <p><b>Bornes</b></p>
                <p>Elles sont placées sur le côté gauche de la chaussée et donnent des indications sur le
                    numéro de l'autoroute où vous vous trouvez :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/siganle13.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Bornes sur autoroute</small></p>
                    </div>
                </div>
                
                <p>Lecture de la borne : Vous êtes sur l'autoroute A 51 et vous êtes au kilomètre 120 de cette
                     autoroute.</p>
                <h3 style="font-weight: bold;">Péage</h3>
                <p>Comme je le disais dans le chapitre précédent, presque toutes les autoroutes sont payantes.
                     Il existe des bribes d'autoroutes qui ne le sont pas (exemple : la A31 est gratuite de 
                     Luxembourg jusqu'à Toul), mais vous devez comprendre le fonctionnement d'un poste de péage 
                     car vous serez obligatoirement amenés à y passer.</p>
                <p>Rarement vous allez payer l'autoroute aussitôt que vous l'empruntez. Mais assez rapidement 
                    (depuis l'endroit où vous la rejoignez), vous serez amenés à prendre le ticket.</p>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Pour payer, il va falloir faire attention aux idéogrammes des panneaux. Je vous laisse les deviner :</p>
                    <p>a) présignalisation du début d'une section routière ou autoroutière à péage ;</p>
                    <p>b) arrêt obligatoire au poste de péage ;</p>
                    <p>c) présignalisation d'une gare de péage avec retrait du ticket de péage ou paiement du péage ;</p>
                    <p>d) paiement auprès d'un péagiste ;</p>
                    <p>e) paiement par carte bancaire  (2 panneaux) ;</p>
                    <p>f) paiement automatique par pièces de monnaie et billets ;</p>
                    <p>g) paiement par abonnement ; la voie est réservée aux usagers abonnés (2 panneaux) ;</p>
                    <p>h) présignalisation d'une borne de retrait de ticket de péage ;</p>
                    <p>i) présignalisation du paiement du péage.</p>
                  </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/signale14.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Idéogrammes relatifs au péage</small></p>
                    </div>
                </div>
                <p><b>éponses :</b> A9 ; B8 ; C10 ; D5 ; E7 et E2 ; F3 ; G4 et G6 ; H1 ; I11</p>
                <p>Pour ne pas encombrer les postes de péages, les panneaux vont annoncer les
                    modes de paiement possibles selon les voies affectées comme sur la photo ci-dessous :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/signale15.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voies par mode de paiement</small></p>
                    </div>
                </div>
                
                <h2 style="font-weight: bold;">Autoroute et ses caractéristiques </h2>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Si vous n'avez que de la monnaie, sur quelle voie vous placez-vous ?</p>
                    <p>a) vous restez sur la même voie</p>
                    <p>b) vous changez de voie, vous vous décalez vers la gauche</p>
                    <p>c) vous ne pouvez pas payer en monnaie</p>
                  </div>
                </div>
                <br>
                <p><b>Réponse :</b> 2 voies offrent a possibilité de payer en monnaie : celle sur laquelle vous vous 
                trouvez actuellement et celle de gauche. Vous pouvez très bien rester sur la voie où vous vous trouvez 
                actuellement, car le panneau vous donne la possibilité de payer aussi en monnaie. Donc réponse A.</p>
                <p><b>Arrêt imposé</b></p>
                <p>Le péage constitue une sorte d'arrêt imposé car vous êtes obligés de payer l'autoroute. Sur certains
                     tronçons d'autoroute, les postes de police peuvent être implantés et demander un arrêt obligatoire. 
                     Ne soyez donc pas surpris de voir ces deux panneaux :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/signale16.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Arrêts imposés </small></p>
                    </div>
                </div>
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Pour arriver sur une autoroute, il faut suivre 
                        l'idéogramme de l'autoroute qui est souvent incorporé sur un panneau bleu (encart).</li>
                    <li>Pour entrer sur une autoroute, il faut emprunter 
                        une bretelle d'accès et céder le passage pour ensuite rouler sur la voie de droite.</li>
                    <li>Pour savoir vers quelle autoroute vous vous dirigez et sur laquelle vous
                         vous trouvez, vous devez lire les cartouches et les bornes.</li>
                    <li>Les cartouches d'une autoroute sont rouge et blanc et d'une route européenne vert et blanc.</li>
                    <li>Pour payer l'autoroute vous devez vous arrêter au poste de péage.</li>
                    <li>Une présignalisation vous permet de savoir sur quelle voie vous 
                        devez vous placer pour choisir le mode de paiement dont vous disposez.</li>
                    <li>Les panneaux vont être implantés plusieurs fois pour vous signaler une direction ou une sortie.</li>
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