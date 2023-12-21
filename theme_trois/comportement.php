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
    <title>Les comportements</title>
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
                <h1 style="font-weight: bold;"><b>Comportements</b></h1>
                <br>
                <h2 style="font-weight: bold;">Aires de repos en cas de fatigue</h2>
                <p>Comme je vous le disais dans le chapitre précédent, les autoroutes ne contiennent 
                    pas de virages (ou très peu), ce qui rend le trajet monotone et propice à l'endormissement. 
                    Si, en plus de cela vous avez mal dormi, alors vous risquez de vous endormir et probablement 
                    d'avoir un accident. En tous les cas, si les bandes d'alerte sonore vous ont secoués pendant 
                    la conduite, il est vraiment temps de vous arrêter !</p>
                <p><b>Arrêtez-vous sur une aire de repos</b></p>
                <p>Dès que vous ressentez les signes de fatigue, je vous conseille de vous arrêter sur 
                    une aire d'autoroute. Ne luttez pas contre les yeux lourds car la fatigue risque de gagner 
                    et vous faire finir dans le décor, à pleine vitesse. Vous imaginez les dégâts !</p>
                <p>Donc pensez à vous arrêter, c'est très important !</p>
                <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Comment allez-vous lire les panneaux de la photo ci-dessous ?</p>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/comporter1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>S'arrêter sur une aire d'autoroute</small></p>
                    </div>
                </div>
                
                <p><b>Réponse : </b>L'aire d'autoroute de Communay-Sud est à 900 m à partir du panneau.
                 Elle contient une station service et un restaurant. Le parking est sous surveillance vidéo.</p>
                <p>Lorsque les voies sont affectées, attention aux annonces des aires. Aire de St Priest se trouve
                     à 700m si vous empruntez la voie indiquée :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/comporter2.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Aire d'autoroute et affectation des voies</small></p>
                    </div>
                </div>
                <p>Une fois que vous vous êtes arrêtés, vous avez le choix entre une microsieste ou un 
                    café suivi de quelques mini exercices pour vous détendre.</p>
                <p>Dans les 2 cas, pensez à vous arrêter autour de 20-30 minutes. Une microsieste de 
                    20 minutes est tellement réparatrice, qu'elle vous permet de récupérer vos performances 
                    intellectuelles de pratiquement 50 %. Si vous prenez un café, sachez que la caféine
                     commence à faire effet au bout de 20-30 minutes seulement. Prenez le temps aussi
                      de sortir de la voiture, vous dégourdir les jambes et respirer l'air frais.
                       Pensez aussi à aérer votre voiture pour renouveler l'air qui peut aussi être 
                       responsable de la somnolence au volant. Enfin, arrêtez-vous même si vous n'en
                        ressentez pas le besoin, vous verrez que cela vous fera du bien !</p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Sur les autoroutes, les aires de repos sont accessibles toutes les 10 minutes environ.</p>
                    </div>
                </div>
                <h2 style="font-weight: bold;">En cas de malaise</h2>
                <p>Si vous, en tant que conducteur, ou l’un de vos passagers êtes victimes 
                    d’un malaise vagal ou cardiaque, il convient de réagir rapidement ! En effet, 
                    même un simple étourdissement peut mener à l’accident. Ainsi, toute sensation 
                    inhabituelle ne doit pas être prise à la légère pour éviter la perte de contrôle 
                    de votre véhicule.</p>
                <p>Voici la liste des symptômes à ne pas négliger :</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>un engourdissement du visage, d’un bras ou d’une jambe ;</li>
                    <li>des troubles de la parole, de la compréhension ou de la vision ;</li>
                    <li>des pertes d’équilibre ;</li>
                    <li>des difficultés de coordination des mouvements ;</li>
                    <li>des douleurs à la poitrine ;</li>
                    <li>des palpitations, etc.</li>
                </ol>
                <p>À la moindre alerte, vous devez vous arrêter en lieu sûr 
                    (voie d'arrêt d'urgence si l'aire d'autoroute est loin) et allumer les warnings.</p>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Victime d’un malaise, vous n’êtes pas à l’abri de provoquer un accident de la route.</p>
                    </div>
                </div>
                <br>
                
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Vos passagers seront pris en charge au titre de votre Responsabilité Civile, mais vous 
                        devez souscrire la Garantie Personnelle du Conducteur, 
                        proposée par des assurances auto. Vous serez alors également couvert en cas d’accident.</p>
                    </div>
                </div>
                <h2 style="font-weight: bold;">Véhicule présentant des problèmes</h2>
                <p><b>Vous n'avez plus d'essence</b></p>
                <p>Bien entendu, il faut préparer son trajet et calculer combien de fois il faudra vous 
                    arrêter pour mettre de l'essence avant d'atteindre la destination voulue. Si vous faites
                     cela avant de partir, vous ne serez pas pris au dépourvu et saurez quand vous arrêter.
                      Mais s'il vous arrive d'oublier de calculer, ce n'est pas la fin du monde car votre
                       voiture va vous informer du niveau d'essence qui baisse. Si l'aiguille est proche 
                       du (E) ce qui veut dire empty (en anglais vide), le voyant de couleur orange 
                       symbolisant la pompe à essence s'allumera et vous préviendra du besoin de vous 
                       arrêter pour remplir le réservoir.</p>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Le voyant ne s'allumera pas lorsque vous n'aurez plus d'essence, 
                        mais lorsque le véhicule contiendra moins de 10% de carburant dans son réservoir. 
                        Il est donc important de vous arrêter de suite !</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/comporter3.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Réservoir vide</small></p>
                    </div>
                </div>
                
                
                pVoici les idéogrammes symbolisant la pompe à essence sur un panneau d'aire d'autoroute :
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 150px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/comporter4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Pictogramme représentant une pompe à essence</small></p>
                    </div>
                </div>
                <p>Une fois que vous remplirez le réservoir, l'aiguille va pointer vers la lettre "F", 
                    ce qui veut dire full (en anglais plein).</p>
                <p><b class="text-muted">Station service et son fonctionnement</b></p>
                <p>Pour pouvoir vous approvisionner en essence, il faut que vous reconnaissiez les pictogrammes
                     qui vous indiquent la présence d'une station service. Une fois arrivés, vous devez suivre 
                     des panneaux qui vous indiqueront le chemin vers les pompes. Certaines pompes vont fonctionner
                      automatiquement, ce qui veut dire que vous pourrez régler votre achat par carte bancaire, 
                      et pour d'autres il faudrait régler à une caisse mise à disposition.</p>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Pour ne pas causer d'incendie, soyez prudents lors de l'approvisionnement 
                    en carburant : ne fumez pas et interdisez-le aussi à vos passagers.</p>
                    </div>
                </div>
                <br>
                <p><b>Vous tombez en panne</b></p>
                <p>Qu'il s'agisse d'une panne ou d'une crevaison, si l'état de votre véhicule le permet :</p>
                <p>1. garez-vous dans un refuge (un renfoncement au niveau de la glissière) doté d'un poste d'arrêt 
                    d'urgence ou sur une aire de repos. Si vous ne pouvez pas, placez-vous sur la bande d'arrêt d'urgence ;</p>
                <p>2. allumez vos warnings ;</p>
                <p>3. mettez le gilet jaune rétro-réfléchissant et passez-en un à chaque passager. 
                    Les gilets doivent être placés dans la boîte à gants pour vous éviter de 
                    sortir de la voiture et passer du temps sur la chaussée, exposé au danger ;</p>
                <p>4. sortez du véhicule par la droite et positionnez-vous derrière les 
                    glissières de sécurité le plus loin possible ;</p>
                <p>si vous vous trouvez à un refuge, utilisez le poste d'arrêt d'urgence.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/comporter5.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Poste d'arrêt d'urgence sur autoroute</small></p>
                    </div>
                </div>
                <p>Si vous êtes à un autre endroit : vous pouvez marcher jusqu'au poste d'arrêt d'urgence,
                     en restant bien derrière la glissière. Il y en a tous les 2 km à 2,5 km. Vous pouvez 
                     aussi téléphoner de votre portable au 3605 ou à la gendarmerie (17). Certes, vous ne pourrez 
                     pas voir les bornes kilométriques en étant derrière la glissière de sécurité, mais vous pouvez
                      toujours donner quelques informations aux autorités en charge.</p>
                <p>Si vous avez téléchargé sur votre smartphone l'application Vinci Autoroutes, vous pouvez
                     passer l'appel SOS et vous serez géolocalisés. Dans tous les cas, des informations vous 
                     seront demandées : type du véhicule, modèle du pneu s'il s'agit d'une crevaison, type de
                      carburant… Si le dépanneur a tout ce qu'il faut, il vous dépannera sur place et vous pourrez 
                      repartir. Sinon, il remorquera votre véhicule.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Conseil pratique : certaines enseignes de pompe à essence 
                    (je ne donnerai pas leurs noms, à vous de chercher), 
                    proposent un remorquage gratuit si vous détenez leur carte et achetez 
                    de l'essence chez eux avant de partir en voyage.</p>
                    </div>
                </div>
                <br>
                <p><b class="text-muted">Freins défaillants</b></p>
                <p>Si vos freins vous lâchent, vous allez pouvoir vous arrêter sur une voie de détresse. 
                    Elle permet à un véhicule de s'arrêter avant un tronçon de route dangereux 
                    (viaduc ou forte descente). Il est symbolisé avec un panneau comme suit :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/comporter6.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voie de détresse à gauche ou à droite
                             ou suivant la forme de la route </small></p>
                    </div>
                </div>
                
                <p>Au sol, un motif à damier rouge et blanc est peint pour indiquer à l'automobiliste 
                    la route à prendre. Au bitume succèdent alors des graviers (ralentissement), 
                    puis un moyen d'arrêt naturel (butte, talus...) ou artificiel (barils et butoir).</p>
                <p>Généralement, le véhicule stoppé subit tout de même d'importants dégâts, mais c'est à
                     comparer aux vies sauvées grâce à ce système.</p>
                <p>La voie de détresse est davantage réservée aux véhicules lents, mais s'il vous arrive
                     de ne pas pouvoir vous arrêter, vous pouvez avoir recours à cette solution.</p>
                <p><b class="text-muted">Frein bloqué</b></p>
                <p>Le frein peut être bloqué pour plusieurs raisons, et nous verrons son fonctionnement 
                    en détail dans le cours 3.  Si jamais il vous arrive de devoir gérer une situation 
                    qui donne des sueurs froides, sachez qu'il existe des solutions. La première chose 
                    à faire est de garder son sang-froid.</p>
                <p>1. Si vous paniquez, vous risquez de provoquer un accident en surréagissant.</p>
                <p>2. Enlevez votre pied de la pédale de frein et désactivez le régulateur de vitesse (s'il est activé).</p>
                <p>3. Testez la résistance de la pédale de frein en appuyant dessus.</p>
                <p>--> S'il y a peu de résistance et que vous pouvez plaquer la pédale au sol sans difficulté, 
                    vous avez une chance de récupérer de la pression de freinage en « pompant » avec la pédale de frein.</p>
                <p>--> Par contre, si la pédale de frein est dure ou bloquée, il se peut que quelque chose se 
                    soit placé entre le plancher et la pédale ou qu'une pièce du système de freinage actionnée 
                    par la pédale soit coincée. Essayez d'enlever l'objet coincé ou demandez à un passager de 
                    le faire. Si rien n'est coincé, alors il faut passer directement à l'étape n°5.</p>
                <p>4. Pompez sur la pédale de frein. En appuyant plusieurs fois sur la pédale, vous pourriez
                     produire suffisamment de pression dans le circuit hydraulique de freinage pour ralentir 
                     la voiture jusqu'à la stopper. Si la pression est faible, vous devez persister à pomper 
                     pour que les effets se fassent sentir.</p>
                <p>5. Rétrogradez. En passant à la vitesse inférieure, vous allez ralentir la voiture grâce 
                    au frein moteur.</p>
                <p>6. Utilisez le frein à main. Il n'agit que sur les roues arrière donc cela risque de prendre plus
                     de temps pour agir. Vous devez tirer lentement sur le manche qui se situe entre les deux sièges 
                     avant. Le frein à main peut bloquer les roues si vous l'actionnez 
                    trop fortement et trop rapidement, en particulier lorsque le véhicule roule très vite. </p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/comporter7.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Utilisez le frein à main </small></p>
                    </div>
                </div>
                
                <p>Si vous sentez ou entendez que vos roues se bloquent, relâchez un peu de pression 
                    en actionnant le levier vers l'avant jusqu'à ce que les roues soient débloquées.</p>
                <p>7. Avertissez les autres conducteurs.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/comporter8.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Prévenez les autres </small></p>
                    </div>
                </div>
                <p>Même si les autres conducteurs ne comprennent pas exactement ce qui se passe, 
                    un avertissement peut cependant les pousser à être vigilants et à agir en fonction 
                    du déplacement de votre véhicule. Vous pouvez aussi ouvrir les fenêtres de manière à pouvoir
                     crier vers l'extérieur du véhicule tout en laissant entrer de l'air dans celui-ci 
                     pour le ralentir. </p>
                <p>9. Roulez en zigzag, si vous avez assez d'espace pour réaliser cette manœuvre.
                     Les virages secs créent de fortes frictions sur les pneus, ce qui a tendance à ralentir 
                     le véhicule. Essayez d'effectuer des virages très serrés à droite puis à gauche et aussi 
                     souvent que possible, à condition que votre véhicule ne roule pas trop vite. Si vous faites
                      cette manœuvre à grande vitesse, votre voiture pourrait se retourner et s'engager dans 
                      une série de tonneaux. C'est pourquoi vous devez être très prudents lorsque vous décidez
                       d'effectuer une succession de virages serrés.</p>
                <p><b>Servez-vous de l'environnement</b></p>
                <p>Si vous ne parvenez pas à arrêter le véhicule avec les techniques déjà énumérées,
                     alors vous pouvez toujours vous servir de l'environnement :</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>utilisez les glissières de sécurité autour de la route pour vous y coller et ainsi créer
                         des frottements. Cette technique est très dangereuse, surtout lorsque votre voiture roule 
                         à très grande vitesse et vous ne devez donc les utiliser qu'en dernier recours ;</li>
                    <li>utilisez les reliefs à votre avantage. Essayez de repérer les portions de route en pente 
                        que vous pourriez monter. Si au cours d'une montée vous constatez que votre véhicule ne va
                         pas s'arrêter de lui-même sous l'action de la force de gravité, préparez-vous à utiliser
                          toutes les techniques de freinage décrites précédemment ;</li>
                    <li>vous pouvez considérablement ralentir la voiture en roulant sur le gravier qui se trouve
                         sur le bas-côté de la route. Soyez extrêmement prudents lorsqu'un côté de votre véhicule 
                         roule sur le bas-côté, car de grosses inégalités du sol peuvent entrainer son retournement.
                          Vous devez progressivement empiéter sur la bande de gravier ou d'herbe pour que le véhicule
                           reste relativement stable ;</li>
                    <li>vous pouvez également vous servir des arbustes et buissons pour perdre de la vitesse si 
                        les autres méthodes de freinage ont échoué. Tentez de rouler en centrant votre véhicule sur 
                        une ligne d'arbrisseaux en vous préparant à vous écarter à l'approche d'un arbre dont le tronc
                         est trop épais pour que vous puissiez le traverser sans encaisser de gros dégâts. Les arbres
                          qui ont des troncs d'au moins 12 cm de diamètre sont considérés comme dangereux pour 
                          les occupants de véhicules motorisés.</li>
                    <li>essayez de trouver un endroit en bord de route où vous avez une chance de vous arrêter sans 
                        trop de dommages. Scrutez les bords de route à une distance assez éloignée devant vous pour 
                        pouvoir préparer votre sortie de route. Si vous n'êtes pas en mesure de stopper le véhicule sur
                         la route, recherchez un espace ouvert en bord de route que vous allez pouvoir traverser sans 
                         rencontrer d'obstacle.</li>
                </ol>
                <p><b>Et si rien de tout cela ne fonctionne ?</b></p>
                <p>En dernier recours, préparez-vous à finir votre course en dérapage ou en accident. 
                    Recherchez un endroit couvert de buissons qui peuvent exercer une forte friction contre 
                    la voiture lorsque vous les traversez. S'il n'y a pas de buissons, recherchez des herbes, 
                    les plus hautes possible. Finalement, s'il n'y a pas de végétation, essayez de profiter 
                    d'un terrain sablonneux et mouillé, si possible.</p>
                <br>
                
                <h3><b>En résumé</b></h3>
                
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Arrêtez-vous toutes les 2 heures sur une aire pour faire une pause, 
                        car la monotonie de l'autoroute peut vous bercer et faire en sorte que vous vous endormiez.</li>
                    <li>Si vous avez un problème que vous ne pouvez pas anticiper (malaise, panne, crevaison),
                         pensez à utiliser la bande d'arrêt d'urgence et son poste.</li>
                    <li>Si vous avez un problème de freins, deux possibilités s'offrent à vous : 
                        soit de vous servir des voies de détresse, soit d'essayer d'arrêter le véhicule 
                        grâce au frein moteur (rétrograder) au frein à main (doucement, en le soulevant), 
                        en roulant en zigzag, en actionnant les warnings, 
                        en utilisant l'environnement pour faire ralentir la voiture et faire en sorte qu'elle s'arrête.</li>
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