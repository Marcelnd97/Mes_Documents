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
              <h1><b>Avant une intersection</b></h1>
              <p>Avant même de parler d'intersection, il me paraît important de parler du sens de la circulation.
                On va commencer par la situation où vous êtes déjà en train de conduire.</p><br> 
              <h4><b>Avant de démarrer...</b></h4>
              <p>Alors pour aller tout droit, il faut s'assurer que cela est possible. Oui, je vous l'accorde, 
                c'est logique, mais comme je viens de le dire, 
                il va falloir analyser le contexte de la conduite pour juger si c'est toujours faisable.</p>
              <div class="card question">
                <div class="card-body">
                  <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                  <p>Voici quelques questions pour vous faire réfléchir sur les règles :</p>
                </div>
              </div>
              <p>
              <li>Pouvez-vous aller tout droit sans changer d'allure ou sans vous arrêter ?</li>
              <li> Pouvez-vous aller tout droit à l'infini ?</li>
              <li>Serez-vous toujours prioritaires pour aller tout droit ?</li>
              </p>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                  <p>
                    Aller tout droit veut dire aussi respecter les priorités. Comme l'ordre de passage des véhicules et les priorités entre eux représentent un gros pavé, contentez-vous pour le moment d'apprendre seulement les règles de base sans prendre en compte les priorités. 
                    Ce thème sera traité en détail dans les chapitres suivants.
                  </p>
                </div>
              </div>
              <br>
              <h4><b>Vous pouvez aller tout droit</b></h4>
              <p>
                D'emblée, je veux que vous compreniez la subtilité entre pouvoir aller tout droit, 
                être obligé d'aller tout droit et on vous interdit d'aller tout droit. 
                D'ailleurs, vous ne trouverez pas les mêmes panneaux dans ces 3 catégories !
              </p>
              <br>
              <h5><b>Même sens de circulation pour tous</b></h5>
              <p>
                Si la circulation se déroule dans un sens seulement, aucun véhicule n'arrivera en face de vous en sens 
                inverse. Il peut s'agir d'une rue qui est à sens unique (voir la pastille 1 du schéma ci-dessous) ou 
                des avenues entières où la circulation se déroule dans un sens seulement (voir la pastille 2 du schéma).
              </p>
              <div class="card senscirc">
                <img src="../images/sensunique.png" height="300px" class="senscirc">
              </div>
              
              <p class="text-muted text-center"><small >sens de circulation</small></p>
              <p><b>Rue à sens unique : le cas d'une voie</b></p>
              <p>Pour savoir que vous entrez dans une rue à sens unique, vous verrez un panneau carré 
                avec une flèche blanche sur un fond bleu, comme sur la photo ci-dessous :
              </p>

              <div class="card sensuniq">
                <img src="../images/sens-unique.png" height="300px" class="sensuniq">
              </div>
              
              <p class="text-muted text-center"><small >Rue à sens unique</small></p>
              <div class="card important">
                <div class="card-body pb-1">
                <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                <p>Rappelez-vous que les panneaux carrés donnent des indications sur la conduite.</p>
                </div>
              </div>
              <br>
              <p>Ce type de rues n'a qu'une seule voie, très souvent dépourvue d'un marquage au sol. 
                La règle de circulation implicite est de se positionner au milieu de la chaussée si la rue est étroite. 
                Autrement, vous pouvez serrer à droite.
              </p>
              <b>Bifurcation : chaussée à plusieurs voies à sens unique</b>
              <p>Il s'agit des rues, boulevards ou avenues à plusieurs voies. 
                Vu leur capacité à accueillir un grand nombre de conducteurs, 
                vous imaginez qu'il faut réguler la position des voitures pour que la circulation se passe dans 
                de bonnes conditions.
              </p>
              <p>Cette régulation se manifeste grâce au marquage au sol.</p>
              <div class="card question">
                <div class="card-body pb-1">
                <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                <p>Observez la photo ci-dessous et réfléchissez à la signification des flèches dans les 3 voies.</p>
                </div>
              </div>
             
              <br>
              <div class="card sensuniq">
                <img src="../images/fleche.jpg" height="300px" class="sensuniq">
              </div>
              <p class="text-muted text-center"><small>Positionnement sur la chaussée</small></p>
              <p>Les flèches sont donc répétées 3 fois dans chacune des voies. 
                Elles indiquent 3 fois la direction pour aller tout droit, 
                1 fois pour tourner à gauche, 1 fois pour tourner à droite.
              </p>
              <div class="card question">
                <div class="card-body pb-1">
                  <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                  <p>Pourquoi aller tout droit est-il proposé 3 fois ? Quelle voie emprunter alors ?</p>
                </div>
              </div>
              <br>
              <p>Vous devez décider, avant la première flèche, de la direction que vous voulez suivre. 
                Cette décision vous facilitera le placement sur la chaussée.
              </p>
              <p><b>Réponse</b> : Quand plusieurs flèches indiquent la même direction et que la circulation est nulle, 
                vous devez rester sur la voie qui est la plus à droite. Une fois que vous avez choisi la voie, 
                vous continuez dans cette direction. En revanche, 
                s'il y a davantage de voitures sur la voie numéro 1 par rapport à la voie numéro 2, 
                vous pouvez vous reporter sur cette dernière, voire sur la voie 3. Donc pour aller tout droit, 
                il faut occuper les voies dans l'ordre indiqué sur la photo : d'abord la voie de droite, ensuite la voie du centre, 
                enfin la voie de gauche. S'il n'existe que 1 voie, 
                alors il n'y a pas de dilemme. S'il y en a 2, toujours occuper celle de droite.
              </p>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>
                    Si la circulation n'est pas nulle, vous occuperez les voies en fonction de leur disponibilité, 
                    tout en respectant la règle annoncée précédemment.
                  </p>
                </div>
              </div>
              <br>
              <p>Jusqu'à maintenant, je vous ai parlé de la circulation à sens unique. 
                Si à un moment donné vous remarquez le panneau ci-dessous, faites attention, 
                car des voitures peuvent arriver en sens inverse.
              </p>
              <br>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/double.png" width="100px">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Circulation à double sens</small></p>
              <div class="card important">
                <div class="card-body pb-1">
                <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                <p>Exception : Contrairement aux autres panneaux de dangers, l'application pour celui-ci est immédiate !</p>
                </div>
              </div>
              <br>
              <p>Deux règles s'imposent quand on veut aller tout droit et qui concernent le marquage au sol :</p>
              <ol>
                <li>
                  Il faut se positionner au milieu de la voie si vous êtes dans une rue à sens unique et 
                  qu'il y a une seule voie.
                </li>
                <li>
                  S'il y a plusieurs voies à sens unique, il faut occuper en priorité celle qui est la plus à droite, 
                  mais seulement si elle propose d'aller tout droit ou de tourner à droite. Si elle propose d'aller à droite seulement, 
                  il ne faut pas occuper cette voie, bien évidemment.
                </li>
              </ol>
                <p>Et voilà !</p>
                <p>Mais comme vous n'allez pas pouvoir rouler tout droit à l'infini, 
                  parlons des obstacles ou des obligations à changer d'itinéraire.
                </p>
                <h3><b>Vous devez aller tout droit</b></h3>
                <P>
                  Bon voilà, vous avez compris : on ne vous demande pas où vous voulez aller. On vous oblige à y aller, 
                  et ce, à la prochaine intersection.
                </P>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>
                      Vu que je parle d'obligation, à votre avis, le panneau sur lequel vous allez tomber 
                      sera de quelle forme et de quelle couleur ?
                    </p>
                  </div>
                </div>
                <br>
                <p>
                  Si vous avez oublié, je vous laisse consulter vos notes puis revenir vite pour la suite ! 
                  Pour ceux qui ont trouvé que ce sont des panneaux ronds de couleur bleue avec un symbole blanc, 
                  je vous dis bravo ! Voici ce que ça donne en photo :
                </p>
                <div class="col">
                  <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/obliger.jpeg" width="300px" height="150px">
                    </div>
                  </div>
                </div>
                <p class="text-muted text-center"><small>Direction obligatoire</small></p>
                <ol>
                  <li>Direction obligatoire à la prochaine intersection : tout droit</li>
                  <li>Directions obligatoires à la prochaine intersection : tout droit ou à droite</li>
                  <li>Directions obligatoires à la prochaine intersection : tout droit ou à gauche</li>
                </ol>
                <p>Remarquez que vous avez tout de même une option supplémentaire quant aux flèches doubles 
                  (vous devez tourner à droite ou à gauche ou devez aller tout droit)
                </p>
                <div class="card important">
                  <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>
                      Ne confondez pas la rue à sens unique dont la flèche est un peu dodue, 
                      alors que celle-ci est plus maigrichonne !
                    </p>
                  </div>
                </div>
                <br>
                <div class="col">
                  <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/versus.jpg" width="300px" height="150px" style="background-color: gray;">
                    </div>
                  </div>
                </div>
                <p class="text-muted text-center"><small>Sens unique vs Direction obligatoire</small></p>
                <ol>
                  <li>Direction obligatoire à la prochaine intersection : tout droit</li>
                  <li>Circulation à sens unique</li>
                </ol>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Dans une rue étroite à sens unique, mieux vaut se positionner au milieu, sinon serrer à droite.</li>
                <li>Dans une rue à sens unique à une ou plusieurs voies, il faut se positionner sur la voie la plus à droite.</li>
                <li>La flèche symbolisant la direction obligatoire tout droit est plus fine que la flèche symbolisant la rue à sens unique.</li>
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