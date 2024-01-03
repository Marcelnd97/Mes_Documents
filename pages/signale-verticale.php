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
    <title>Signalisation verticale</title>
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
                <h1 style="font-weight: bold;"><b>Signalisation verticale</b></h1>
                <br>
                <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                  <p>L'objectif de ce chapitre, ainsi que des chapitres suivants ne sera pas d'expliquer tous les panneaux. 
                    Je prendrai à chaque fois un exemple pour vous faire réfléchir sur la règle. 
                    Vous pourrez trouver tous les panneaux et leur sens dans la partie : "Les panneaux" de ce même cours.</p>
                </div>
              </div>
                
              <br>
              <h3 style="font-weight: bold;">Panneaux et leur nature</h3>
              <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Observez les panneaux de l'exemple 1 et de l'exemple 2. 
                        À votre avis, de prime abord, qu'est-ce qui les différencie ? Ont-ils des points en commun ?</p>
                  </div>
                </div>
                <br>
              
                <div class="card senscirc">
                    <img src="../images/valeurpanneaux.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Valeur des panneaux</small></p>
                
                <p><b>Réponse :</b>Même sans rien connaître au code de la route, vous pouvez déduire que les panneaux 
                de l'exemple 1, de couleur rouge et blanc, font certainement référence à un message très important, 
                tandis que les panneaux de l'exemple 2 sont moins agressifs, ne serait-ce qu'en termes de couleurs utilisées. 
                Aussi, ces derniers n'ont pas l'air d'annoncer un phénomène particulièrement dangereux. Les uns sont ronds, 
                les autres carrés. Alors si l'on combine la forme et la couleur, cela donnerait quelque chose comme ça :</p>
                <ol>
                    <li>Exemple 1 - on attire notre attention avec la couleur rouge qui est agressive ;</li>
                    <li>Exemple 2 - on nous informe car la couleur bleue apaise.</li>
                </ol>
                <p>Même si nos hypothèses sont bonnes, nous ne pouvons malheureusement pas en rester là, 
                    car cela reste assez approximatif. Les dangers nous guettent partout, 
                    alors il faut pousser l'analyse bien plus loin, hiérarchiser les informations.</p>
                <p>Voici les règles de base à retenir quant à la forme des panneaux :</p>
                <div class="card senscirc">
                    <img src="../images/formepanneaux.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Formes des panneaux</small></p>
                
                <br>
                <p><b>1. Panneaux triangulaires = danger</b></p>
                <p>Si les panneaux triangulaires rouge et blanc indiquent un danger permanent, 
                    les mêmes en jaune indiqueront le danger temporaire. 
                    Vous devez donc redoubler de vigilance en présence des obstacles annoncés :</p>
                <div class="card senscirc">
                    <img src="../images/PermanentTemporaire.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux permanents vs. Panneaux temporaires </small></p>
                
                <p class="text-muted"><b>Position en agglomération</b></p>
                <p>Qu'ils soient temporaires ou permanents, les panneaux triangulaires sont placés à 50 m du danger 
                    (ce qui correspond à 3 sec de conduite en circulant à 50 km/h) annonçant la règle à la prochaine intersection.</p>
                <p class="text-muted"><b>Position hors agglomération</b></p>
                <p>Ils sont placés à <b>150 m</b> du danger.</p>
                <p>La logique est simple : pouvoir anticiper pour ralentir, s'arrêter, contourner l'obstacle, etc.</p>
                <br>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                        <img src="../images/symbolprioritdroite.jpg" width="100px;">
                        </div>
                        </div>
                    </div>
                    <p class="text-muted text-center"><small>Panneau symbolisant la priorité à droite</small></p>
                
                <p><b>2. Panneaux triangulaires = danger</b></p>
                <ol style="list-style-type: disc;">
                    <li>Les <b>panneaux ronds rouge et blanc</b> donnent des ordres ou interdisent.</li>
                    <br>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="../images/interdictionetleurfin.jpg" width="200px;">
                            </div>
                        </div>
                    </div>
                    <p class="text-muted text-center"><small>Interdictions et leur fin</small></p>
                    
                </ol>
                <p>Signification de ces 2 panneaux :</p>
                <ol>
                    <li>Circulation interdite à tout véhicule dans les 2 sens ;</li>
                    <li> Fin de toutes les interdictions précédemment signalées et imposées aux véhicules en mouvement.</li>
                </ol>
                <p>Ils ne représentent pas un danger direct, 
                    mais si vous ne respectez pas cette signalisation, vous êtes en danger ! </p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Position : Qu'ils soient placés en agglomération ou en dehors, la règle s'applique à partir du panneau. 
                        Si ce type de panneau est rayé en diagonale, comme s'il était 13 h 35, 
                        cela indique la fin de l'ordre ou de prescription.</p>
                    </div>
                </div>
                
                
                <br>
                <ol style="list-style-type: disc;">
                    <li>Les <b>panneaux ronds à fond bleu aux inscriptions blanches</b> expriment l'obligation. 
                        La photo ci-dessous montre juste le principe de la règle :</li>
                </ol>
                <br>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/obligationetfin.jpg" width="200px;">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Obligations et leur fin </small></p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Position : Ils indiquent la règle à appliquer <b>à partir du panneau ou devant</b> celui-ci.</p>
                    </div>
                </div>
                <br>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/apliobligfin.jpg" width="200px;">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Application des obligations et de leurs fins</small></p>
                
                <p>Signification de ces 2 panneaux :</p>
                <ol>
                    <li>Vitesse minimale obligatoire de 30 km / h ;</li>
                    <li>Fin de vitesse minimale obligatoire.</li>
                </ol>
                <p><b>3. Panneaux carrés = indication</b></p>
                <p>Les panneaux carrés bleu foncé ou blancs avec un encadrement bleu foncé 
                    donnent des informations utiles aux conducteurs, 
                    donc a priori, il n'y aurait pas de danger.</p>
                <div class="card senscirc">
                    <img src="../images/pourconduitepourservice.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Indications de conduite</small></p>
                
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Comme ces panneaux informent, l'application est plus générale.</p>
                    </div>
                </div>
                <br>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/panindication.jpg" width="200px;">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>2 exemples de panneaux d'indication</small></p>
                
                <p>Signification de ces 2 panneaux :</p>
                <ol>
                    <li>Passage pour piétons ;</li>
                    <li> Paiement de péage par abonnement ; la voie est réservée aux usagers abonnés.</li>
                </ol>
                <p><b>4. Panneaux rectangulaires = localisation</b></p>
                <p>Les <b>panneaux rectangulaires</b> indiquent l'entrée en agglomération ou des itinéraires touristiques.</p>
                <div class="card senscirc">
                    <img src="../images/entrerenaglomeration.jpg" height="150px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Entrée en agglomération et localisation d'un itinéraire touristique</small></p>
                
                <p><b>5. Panneaux rectangulaires avec une flèche = direction</b></p>
                <p>Ces panneaux indiquent un itinéraire à suivre :</p>
                <div class="card senscirc">
                    <img src="../images/panneaudirection.jpg" height="150px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux des directions</small></p>
                
                <p>Donc à présent, vous pouvez faire la différence entre les informations annonçant le danger 
                    et les informations secondaires qui annoncent une règle à suivre. Imaginez à quel point c'est 
                    important pour tous les usagers de faire le distinguo ! Cela pourrait être extrêmement grave de 
                    comprendre le contraire de ce qui est annoncé (passage strictement interdit pour les piétons vs. 
                    entrée d'aire piétonne (donc c'est plus qu'autorisé !)), voir image ci-dessous :</p>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/panpasmemesenseloncouleur.jpg" width="200px;">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Panneaux n'ayant pas le même sens selon la couleur et la forme</small></p>
                
                <p>Si certains panneaux contiennent des symboles (bonhomme noir symbolisant le piéton) ou des chiffres 
                    (voir exemple 1 du début où le chiffre 50 se trouve sur un panneau rond en rouge et blanc), 
                    d'autres peuvent être complétés par des petits panneaux pour apporter de la précision au panneau principal. 
                    Dans ce cas-là, il s'agit des panonceaux. Voici un exemple ci-dessous pour illustrer mes propos :</p>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/pannocaux.jpg" width="200px;">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Panocaux</small></p>
                
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>À votre avis, comment ces panneaux doivent-ils être lus ? 
                        Dans quel sens ? Y a-t-il des informations plus importantes que d'autres ?</p>
                  </div>
                </div>
                <br>
                <p>Voici la logique de la lecture :</p>
                <ol>
                    <li>Sens interdit pour les voitures (panneau) sauf pour les vélos (panonceau) ;</li>
                    <li>Interdiction de tourner à gauche (panneau) sauf pour les vélos (panonceau).</li>
                </ol>
                <h3 style="font-weight: bold;">Panonceaux et leur nature</h3>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Je sais que vous ne connaissez pas tous les panneaux de l'exemple ci-dessous. 
                        Mais essayez de déduire leur nature ainsi que celle des panonceaux.</p>
                  </div>
                </div>
                <br>
                
                <div class="card senscirc">
                    <img src="../images/sensdespanoceaux.jpg" height="150px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Sens des panonceaux</small></p>
                
                <p><b>Réponses :</b></p>
                <p>Les panonceaux peuvent préciser :</p>
                <ol>
                    <li>la catégorie d'usagers concernée par l'indication donnée par le panneau 
                        (obligation de tourner à droite pour les <b>poids lourds)</b> ;</li>
                    <li>la distance séparant le panneau du danger ou de la prescription 
                        (vitesse limitée à 70 km/h pour tous les véhicules <b>dans 4,5 km</b>) ;</li>
                    <li>la précision quant à l'axe prioritaire à une intersection 
                        (route prioritaire qui continue sur <b>l'axe allant vers la gauche</b>) ;</li>
                    <li>l'étendue sur laquelle le danger peut survenir ou la règle à respecter 
                        (succession de virages dont le premier est à gauche, et ce, <b>pendant 4,5 km</b>) ;</li>
                    <li>la direction vers laquelle s'applique la prescription ou le danger annoncé 
                        (stationnement interdit <b>50 m à gauche</b>).</li>
                </ol>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Mais lorsque vous avez deux panneaux de même taille, comme dans l'exemple ci-dessous, 
                        comment faire ?</p>
                  </div>
                </div>
                <br>
                <p>Si les deux panneaux sont de même taille, cela veut dire que les 2 panneaux ont la même importance.</p>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/2panensemble.jpg" width="100px;">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>2 panneaux ensemble</small></p>
                <br>
                <p>La lecture est donc la suivante : la rue est interdite aux transports de marchandises et la 
                    vitesse limitée pour tous (y compris les cyclos) est à 30 km/h.</p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Le panneau relatif à la limitation de vitesse est lu indépendamment 
                        du panneau qui interdit le transport de marchandises.</p>
                    </div>
                </div>
                <br>
                
                <p><b>Combinaison panneau - panonceau</b></p>
                <p>Il existe 3 cas et il ne faut pas les confondre.</p>
                <ol>
                    <li>Lorsque le panonceau est placé entre 2 panneaux, il se réfère seulement au panneau du dessus. 
                        Le panneau qui se trouve au-dessous du panonceau est indépendant :</li>
                    <div class="card senscirc">
                        <img src="../images/panplacerdessus.jpg" height="250px" class="senscirc">
                    </div>
                    <p class="text-muted text-center"><small>Le panneau comportant le panonceau est placé au-dessus</small></p>
                    
                    <li>Lorsque chaque panneau contient un panonceau, les deux règles deviennent spécifiques :</li>
                    <div class="card senscirc">
                        <img src="../images/panetpanocauassocier.jpg" height="250px" class="senscirc">
                    </div>
                    <p class="text-muted text-center"><small>Chaque panneau est associé à son ou ses panonceaux</small></p>
                    
                    <li>Lorsqu'un seul panonceau est placé sous deux panneaux, le panonceau est commun aux deux uniquement 
                        si le panneau du haut est un panneau de danger et celui du bas d'interdiction :</li>
                    <div class="card senscirc">
                        <img src="../images/panoceauxcommun.jpg" height="250px" class="senscirc">
                    </div>
                    <p class="text-muted text-center"><small>Panonceau commun</small></p>
                    
                </ol>
                <p><b>Implantation et position</b></p>
                <p>Vous avez remarqué que les panneaux peuvent être implantés en coin de rue ou vers le milieu,
                     sur le trottoir. Voici quelques précisions quant à leur emplacement :</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>ils sont situés sur l'accotement ou le trottoir pour que les conducteurs
                         puissent les voir sans problèmes et aussi pour agir vite ;</li>
                    <li>ils sont placés à 2,30 m de haut pour être au-dessus des véhicules stationnés 
                        et pour ne gêner aucun autre usager de la route ;</li>
                    <li>ils sont implantés du côté droit de la chaussée dans le sens de la circulation.
                        Donc pour résumer, l'objectif de la signalisation verticale est de :</li>
                    <li>prévenir d'un danger, donner un ordre (exemple : interdiction de tourner à droite ou à gauche) ;</li>
                    <li>réguler la circulation en informant des régimes de priorité aux intersections (exemple : priorité à droite) ;</li>
                    <li>donner des indications de conduite ou de service (exemple : passage piéton / paiement par abonnement au péage).</li>
                </ol>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>La taille des panneaux est variable selon la vitesse maximum autorisée. 
                        Plus la vitesse est élevée, plus le panneau est grand.</p>
                    </div>
                </div>
                <br>
                <p><b>Signalisation dynamique</b></p>
                <p>Ce type de signalisation indique une information en temps réel. 
                    L'un des exemples serait la présence de ce radar pédagogique affichant la vitesse à laquelle vous roulez, 
                    comme sur la photo ci-dessous :</p>
                <div class="card senscirc">
                    <img src="../images/radarepedagogique.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Radar pédagogique</small></p>
                <p>Et voilà ! Pour le moment, il est juste important d'avoir pris vos marques.</p>
                <p>Après ce premier chapitre, je vous conseille de noter des informations qui vous semblent pertinentes. 
                    Le code de la route s'inscrit dans une logique visuelle, alors je vous conseille de prendre l'habitude dès le 
                    début de prendre vos propres notes et même de vous faire des schémas personnalisés.</p>
                <h3><b>En résumé</b></h3>
                <div class="card senscirc">
                    <img src="../images/chematrecuputilatifdespanoceaux.jpg" height="500px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Schéma récapitulatif de la logique des panneaux </small></p>
                <br>
          </div>
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