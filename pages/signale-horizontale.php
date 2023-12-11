<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../pages/assets/style.css">
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">

    <!--L'en-tête de la page-->
    <?php
        include("header.php");
    ?>
    <section>
      <br><br><br><br>

      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-10" style="padding-left: 25%;">
                <h1 style="font-weight: bold;"><b>Signalisation horizontale</b></h1>
                <br>
                <p>Comme son nom l'indique, il s'agit de la signalisation qui se trouve au sol. 
                    Le plus souvent, elle est <b>inscrite directement sur la chaussée (marquage au sol)</b>, 
                    mais elle peut aussi exister sur le trottoir. 
                    Pour le moment, nous nous concentrerons seulement sur le premier cas.</p>
                <p>Commençons par ce que vous connaissez déjà en tant que piéton : 
                    le <b>passage piéton.</b> Il vous indique l'endroit où vous êtes autorisé à traverser lorsque le feu est vert.</p>
                <p>Observez la photo ci-dessous : Remarquez le passage piéton inscrit sur la chaussée (lignes transversales 
                    en forme de rectangle). Remarquez également les triangles placés juste avant. 
                    Leur objectif est de faire ralentir les automobilistes :</p>
                <div class="card senscirc">
                    <img src="./images/marcpaspied.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Marquage passage piéton</small></p>
                
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Qu'en est-il des autres marquages ? Observez bien l'image ci-dessous. 
                        Que signifie le marquage au sol  1, 2 et 3 ? Quelle est leur couleur ?</p>
                  </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="./images/marcsolpourvoituretbus.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Marquage au sol pour les voitures et les bus </small></p>
                
                <p><b>Réponse :</b> En effet, nous voyons les lignes blanches qui n'ont pas la même épaisseur 
                (n°1 et n°2), une flèche blanche et le mot bus, aussi peint en blanc (n°3). 
                Les lignes discontinues délimitent le passage entre les véhicules.</p>
                <p>Plus précisément, le but de ce marquage est d'indiquer sans ambiguïté :</p>
                <ol style="list-style-type: disc;">
                    <li>les parties réservées à certaines catégories d'usagers (piétons, bus, voitures, vélos) ;</li>
                    <li>les différents sens de la circulation ;</li>
                    <li>la conduite à observer sur la voie.</li>
                </ol>
                <p>La couleur du marquage sur cette photo est blanche.</p>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Observez la photo ci-dessous. Que remarquez-vous ?</p>
                  </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="./images/marquagesole.jpg" height="150px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Marquage au sol</small></p>
                
                <p><b>Réponse :</b> Il existe des lignes, des flèches et des dessins. Le marquage est aussi blanc.</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>les lignes </li>
                    <li>les flèches ;</li>
                    <li>les dessins particuliers (damier, vélo, triangles indiquant les passages piétons...) ;</li>
                    <li>les inscriptions en lettres (bus...).</li>
                </ol>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Nous allons nous concentrer dans ce chapitre seulement sur les lignes et les flèches.</p>
                  </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Les lignes</h2>
                <p>Il existe différents types de lignes marquées au sol, voyons ce qu'elles signifient !</p>
                <p><b>Lignes médianes (milieu de la chaussée)</b></p>
                <ol>
                    <li><b>Il est interdit de franchir</b> une ligne continue pour dépasser ou changer de direction :</li>
                </ol>
                <div class="card senscirc">
                    <img src="./images/franchirligneinterdit.jpg" height="150px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Franchissement de la ligne continue est interdit</small></p>
                <li><b>Il est autorisé</b> de franchir une ligne discontinue pour dépasser ou changer de direction :</li>
                <div class="card senscirc">
                    <img src="./images/franchirligneautoriser.jpg" height="150px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Franchissement de la ligne discontinue est autorisé</small></p>
                
                <li> Lorsqu'elles sont collées l'une à l'autre, chacune des fonctions de ces lignes 
                    s'appliquera à sa partie de la chaussée. La flèche 1 du schéma ci-dessous interdit donc 
                    le franchissement de la ligne continue, tandis que la flèche verte sous le numéro 2 l'autorise :</li>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                        <img src="./images/lignecombiner.jpg" width="300px;">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Lignes combinées</small></p>
                
                <p><b class="text-muted">Longueur des traits et des intervalles</b></p>
                <p>La ligne médiane discontinue contient des traits et des intervalles. 
                    La longueur des traits et des intervalles vous donnera des 
                    indications sur le type de route que vous empruntez et sur les conditions de la circulation.</p>
                <ol>
                    <li>La ligne discontinue sur route peut être franchie pour dépasser ou changer de direction. 
                        Voici ses dimensions :</li>
                        <div class="card senscirc">
                            <img src="./images/lignemedianesuroute.jpg" height="150px" class="senscirc">
                        </div>
                        <p class="text-muted text-center"><small>La ligne médiane discontinue sur route </small></p>
                        
                        
                    <li> La ligne discontinue à plus petites dimensions, appelée la ligne d'annonce, 
                        précède une ligne continue et comporte des flèches de rabattement :</li>
                        <div class="card senscirc">
                            <img src="./images/ligneannoce.jpg" height="150px" class="senscirc">
                        </div>
                        <p class="text-muted text-center"><small>Ligne d'annonce </small></p>
                        
                        <br>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                <img src="./images/flecheanoncelignecontinu.jpg" width="300px" height="200px">
                                </div>
                            </div>
                        </div>
                        <p class="text-muted text-center"><small>Flèche de rabattement annonçant la ligne continue</small></p>
                        <li>. La <b>ligne de dissuasion</b> cherche à dissuader le conducteur de la franchir. 
                            Ses dimensions sont identiques (1,33 m et 3 m) à la ligne d'annonce :</li>
                        <div class="card senscirc">
                            <img src="./images/lignediscusion.jpg" height="150px" class="senscirc">
                        </div>
                        <p class="text-muted text-center"><small>Ligne de dissuasion</small></p>
                </ol>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p><b>Cette ligne autorise le dépassement des véhicules roulant lentement 
                        (tracteurs par exemple) sur des routes étroites et sinueuses.</b></p>
                    </div>
                </div>
                <br>
                
                <p><b>Lignes de rive (lignes de bord de route)</b></p>
                <p>Ces lignes peuvent être discontinues et continues. Tandis qu'il est interdit de franchir ces dernières, 
                    voici les règles pour franchir les premières :</p>
                <ol>
                    <li>Sur route, la ligne de rive sépare l'accotement de la chaussée. À l'approche d'une intersection, 
                        elle peut être remplacée par une ligne de 20 m espacée de 6 m. 
                        Vous pouvez la franchir. Si non, voici les dimensions générales :</li>
                    <div class="card senscirc">
                        <img src="./images/lignederivesurroute.jpg" height="150px" class="senscirc">
                    </div>
                    <p class="text-muted text-center"><small>Ligne de rive sur route</small></p>
                    
                    <li>Sur <b>autoroute</b>, la ligne de rive délimite la bande d'arrêt d'urgence (BAU). 
                        Il s'agit de la voie qui est la plus à droite. Il est autorisé de la franchir seulement <b>en cas extrême</b>.
                         Nous verrons cela en détail dans le chapitre sur les autoroutes. 
                        Sur le schéma ci-dessous la ligne est discontinue, mais parfois elle peut être continue :</li>
                        <div class="card senscirc">
                            <img src="./images/lignerivsurautoroute.jpg" height="150px" class="senscirc">
                        </div>
                        <p class="text-muted text-center"><small>Ligne de rive sur autoroute</small></p>
                        
                </ol>
                <p><b>Signalisations contradictoires</b></p>
                <p>Si vous voyez que la ligne est discontinue et donc vous autorise à la franchir, mais que le panneau vous l'interdit, 
                    il faut toujours appliquer le message du panneau. Franchissement de la ligne interdit en cas de dépassement :</p>
                <div class="card senscirc">
                    <img src="./images/pannauremportregle.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Le panneau remporte la règle</small></p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Point à retenir : Il faut prendre plusieurs indices en compte pour prendre une décision.</p>
                    </div>
                </div>
                <br>
                
                <p><b>Voies spécifiques</b></p>
                <p><b class="text-mutedd">Voie réservée à une certaine catégorie de véhicules</b></p>
                <br>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>A votre avis, pouvez-vous changer de voie pour aller vers la gauche ou vers la droite ?</p>
                  </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="./images/affectvoie.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Affectation des voies</small></p>
                <p>Vous allez me dire "oui"car la ligne est discontinue et je vous dis bravo ! Mais comme il faut toujours un mais, 
                    le changement de direction ne sera pas possible en vous décalant vers la voie de droite, 
                    car il y est inscrit "Bus". Il s'agit d'une voie réservée aux bus, 
                    taxis et véhicules prioritaires (police, pompiers).</p>
                <p>Enfin, si vous aviez été derrière la voiture bleue (voie la plus à gauche), 
                    vous auriez pu vous décaler à droite d'une voie 
                    (et vous retrouver dans celle où vous êtes à présent, derrière le véhicule blanc). </p>
                <p>Notez que les lignes qui délimitent les voies entre les voitures sont plus fines que 
                    celles qui marquent la voie de bus ou même des vélos (voir la photo ci-dessous) :</p>
                <div class="card senscirc">
                    <img src="./images/voiepourcyclistes.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Voie pour les cyclistes </small></p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Point à retenir : même si la ligne est discontinue, assurez-vous que vous avez 
                        le droit d'occuper la voie (exemple : bus).</p>
                    </div>
                </div>
                <br>
                
                <p><b class="text-muted">Voie d'insertion et d'entrecroisement</b></p>
                <p>La voie d'insertion sépare la chaussée principale par une ligne discontinue permettant 
                    de prendre l'élan suffisant pour s'insérer dans la circulation d'une voie rapide ou d'une autoroute.</p>
                <p>La voie de décélération permet de quitter une route (voie rapide ou autoroute) 
                    sans freiner ou gêner les usagers qui suivent. 
                    Je vous en parlerai plus en détail dans le chapitre relatif aux autoroutes.</p>
                <p>Voici une illustration pour comprendre le marquage au sol :</p>
                <div class="card senscirc">
                    <img src="./images/marquagesolvoieaccelerer.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Marquage au sol d'une voie d'accélération </small></p>
                <br>
                <div class="card senscirc">
                    <img src="./images/voientrecroisement.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>La voie d'entrecroisement</small></p>
                
                <p>Sur une voie d'entrecroisement on peut soit entrer soit sortir d'une route.</p>
                <p><b>Voie de stockage</b></p>
                <p>Elle est délimitée par des traits très larges et comporte des flèches. Vous pouvez ralentir et changer de direction sans gêner :</p>
                <div class="card senscirc">
                    <img src="./images/voiedestockagegauchdroite.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Voie de stockage pour tourner à gauche </small></p>
                
                <p><b class="text-muted">Voie de détresse</b></p>
                <p>Dans les descentes, cette inscription vous permet de vous arrêter en cas de défaillance des freins. 
                    Ce marquage est présent sur certaines autoroutes, dans les descentes et à la place de la bande d'arrêt 
                    d'urgence. Il permet aux véhicules ayant une défaillance du système de freinage d'accéder à un bac à 
                    graviers pour s'arrêter en sécurité. Il ne faut surtout pas s'arrêter 
                    sur une voie de détresse pour ne pas être percuté par un usager souhaitant accéder au bac à graviers.</p>
                <div class="card senscirc">
                    <img src="./images/lachefrein.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Si vos freins vous lâchent</small></p>
                
                <p><b>Lignes transversales</b></p>
                <p>Vous connaissez déjà un exemple de lignes transversales rectangulaires. Il s'agit du passage piéton. 
                    Dans les 2 autres cas où elles sont tracées à la limite des intersections, elles peuvent aussi être
                     continues ou discontinues. Vous pourrez les franchir, mais à condition de respecter la signalisation verticale. 
                    Une preuve de plus que le marquage au sol et la signalisation verticale doivent être observés ensemble :</p>
                <div class="card senscirc">
                    <img src="./images/stopetcedepassage.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Stop et Cédez le passage</small></p>
                
                <p>Une précision s'impose ici : la première ligne est continue et accompagnée du panneau Stop, 
                    tandis que la seconde est discontinue et accompagnée du panneau Cédez le passage.</p>
                <p><b>Lignes spécifiques</b></p>
                <p>Certains marquages au sol vont concerner les autres usagers, 
                    mais il est important que les automobilistes les connaissent.</p>
                <p><b class="text-muted">Lignes en zigzag</b></p>
                <p>Ces lignes sont de couleur jaune, peintes en zigzag sur la chaussée, devant un arrêt de bus.
                     Les automobilistes n'ont le droit ni de s'y arrêter ni d'y stationner, mais peuvent les franchir :</p>
                <div class="card senscirc">
                    <img src="./images/autopasarret.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Franchissement du zigzag autorisé mais pas l'arrêt </small></p>
                
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                        <p>Attention  : ici, bien que la ligne soit de couleur jaune, il s'agit d'une règle permanente !</p>
                    </div>
                </div>
                <br>    
                <p><b class="text-muted">Les damiers de bus</b></p>
                <p>Soyez vigilants si vous voyez un damier blanc, comme sur la photo ci-dessous. 
                    Vous pouvez le franchir, mais jamais vous y arrêter ou stationner. Sur la photo ci-dessous, 
                    le panneau d'interdiction de passage vous précise que vous ne pouvez pas continuer tout droit. 
                    Autrement, vous pouvez le franchir s'il n'y a pas d'autres contre-indications. 
                    Il faut veiller à ne pas encombrer les voies marquées par des damiers :</p>
                <div class="card senscirc">
                    <img src="./images/damierblancbus.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Damier blanc des bus</small></p>
                
                <p><b>Zébras</b></p>
                <p>Lorsqu’une partie de la chaussée comporte des hachures ou des chevrons, 
                    la circulation, l'arrêt et le stationnement y sont interdits :</p>
                <div class="card senscirc">
                    <img src="./images/zebra.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Zébras</small></p>
                
                <h3 style="font-weight: bold;"> Flèches directionnelles</h3>
                <p>Elles sont répétées 3 fois dans chacune des voies de stockage. 
                    Elles facilitent le placement sur la chaussée quand le conducteur a choisi sa direction. 
                    Comme vous pouvez le voir sur la photo ci-dessous, ces flèches sont inscrites au milieu de la voie.</p>
                <br>
                    <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Les flèches de rabattement se trouvent sur la ligne d'annonce 
                        et non pas au milieu de la voie comme sur la photo ci-dessous :</p>
                    </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="./images/changedirectionsuivrefleche.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Changer de direction en suivant les flèches</small></p>
                
                <h2 style="font-weight: bold;">Couleur du marquage</h2>
                <p>Pour le moment, nous avons observé les marquages blancs, jaunes, rouges et blancs. 
                    Il existe aussi en bleu et concerne les stationnements. 
                    Je vous en parlerai dans le chapitre relatif à ce sujet.</p>
                <div class="card senscirc">
                    <img src="./images/marqencouleur.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Marquage en couleur</small></p>
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>La signalisation horizontale concerne le marquage au sol.</li>
                    <li>Il existe différents types de marquages au sol (lignes, dessins, flèches, inscriptions sur la chaussée...)</li>
                    <li>Le marquage au sol existe en différentes couleurs selon l'information à communiquer.</li>
                    <li>Le marquage au sol jaune prévaut sur le blanc, donc il faut le respecter en priorité.</li>
                    <li>Il existe des lignes au milieu de la chaussée (pour indiquer les voies de circulation) 
                        et celles qui séparent l'accotement de la chaussée.</li>
                    <li>La longueur des lignes peut indiquer le type de route où vous vous trouvez à un moment donné 
                        (la ligne d'annonce par exemple).</li>
                    <li>Ce n'est pas parce que la ligne médiane est discontinue que vous pouvez forcément la franchir ; 
                        il faut faire attention à la signalisation verticale.</li>
                    <li>Les flèches inscrites sur la chaussée indiquent une direction à suivre.</li>
                </ol>
                <br>
          </div>
        </div>
      </div>

    </section>

    <?php
    // <!--Le pied de la page-->
        include("footer.php");
        
        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("script_link.php");
    ?>
    
</body>
</html>