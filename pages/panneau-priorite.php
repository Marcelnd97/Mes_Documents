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
              <h1><b>Les panneaux de priorité</b></h1>
              <br> 
              
              <p>Dans le chapitre précédent, nous avons vu comment fonctionnent les intersections en 
                l'absence de la signalisation. 
                Ici, nous allons nous concentrer sur les panneaux qui vont indiquer les priorités.</p>
                
              <h5><b>Panneau Stop</b></h5>
               <P> A ce panneau vous êtes obligés de vous arrêter <b>sans dépasser la ligne blanche continue</b> qui fait 
                office de la limite de la chaussée. Le panneau et la ligne fonctionnent ensemble.
              </p>
              <div class="card senscirc">
                <img src="./images/pannaustop.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>S'arrêter au Stop au niveau de la ligne blanche</small></p>
              
              
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>
                        Points à retenir :
                    </p>
                    <p>
                    - Même si la visibilité est bonne et qu'aucune voiture ne vient par la droite, vous êtes obligés de vous arrêter !
                    </p>
                    <p>
                    - Vous devez vous arrêter au niveau de la ligne, pas forcément au niveau du panneau !
                    </p>
                    </div>
                </div>
              <br>
              <h3><b>Panneau Cédez le passage</b></h3>
              <p>
               Vous n'êtes pas obligés de marquer un arrêt total à ce panneau, sauf si un panonceau vous le précise.
               Cédez le passage fonctionne avec le marquage au sol où les lignes sont discontinues. 
               Voici le cas d'un carrefour à sens giratoire dont je vous parlerai dans l'un des prochains chapitres :
              </p>
              <div class="card senscirc">
                <img src="./images/cederpassage.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Panneau Cédez le passage et son marquage au sol</small></p>
              <br>
              <p>Tandis que Stop est constant dans sa signification, 
                le sens du panneau Cédez le passage peut devenir Stop selon le panonceau qui le complète.
              </p>
              <p>Je vais commencer par le cas le plus basique : 
                s'il est représenté sans panonceau ou comme sur la photo ci-dessus (triangle rouge et blanc), alors vous :
              </p>
              <div class="card important">
                  <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>
                        Tandis que le panneau Stop vous oblige à vous arrêter net, 
                        le panneau Cédez le passage vous demande de décélérer ou de vous arrêter.
                    </p>
                  </div>
                </div>
                <br>
              <p>Enfin, dans certains cas, les panonceaux vont préciser si vous devez juste céder le passage ou vous arrêter.
              </p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/ceder.jpg">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small >Cédez le passage</small></p>
              <p>
                La lecture du premier panneau est toute simple et vous la connaissez  : 
                Cédez le passage à l'intersection que vous rencontrerez.
              </p>
              <p>
                La lecture du deuxième est la suivante : Cédez le passage à l'intersection que vous rencontrerez dans 150 m.
              </p>
              <p>
                Quant à l'arrêt obligatoire, vous verrez un Cédez le passage complété par un panonceau comme c'est le cas sur la photo ci-dessous :
              </p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/anoncepan.jpg">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Panneau annonçant le Stop et le panneau Stop</small></p>
              
              <p>Le panonceau Stop 150 m vous demande de vous arrêter à l'intersection qui est à 150 m de vous.</p>
              <br>
              <div class="card important">
                <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>
                        Le sens de ces deux panneaux devient identique !
                    </p>
                </div>
               </div>
               <br>
                <h3><b>Panneaux relatifs à la priorité</b></h3>
                <p>Lorsque vous roulez tout droit et voyez à un moment donné les panneaux comme ci-dessous, 
                    sachez que vous devez être attentifs aux priorités. 
                    Aucun marquage au sol ne complète la signification de ces panneaux :
                </p>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/prioritepan.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Panneaux relatifs aux priorités</small></p>
              <p>Comme ces panneaux ne sont pas évidents à interpréter, je vais vous aider.</p>
              <br>
              <div class="card important">
                <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>
                      Attention, il s'agit des règles générales, 
                      il faut toujours analyser la situation dans son ensemble et surtout dans les intersections complexes !
                    </p>
                </div>
               </div>
              
               <br>
                <p>
                <b>Panneau 1 :</b> Lorsque vous voyez ce panneau implanté sur l'accotement droit, il vous concerne. 
                En effet, cela veut dire que vous devez céder le passage aux véhicules débouchant de la droite ou des 
                routes situées à droite. Vous n'êtes donc pas prioritaire. En revanche, 
                si c'est vous qui arrivez de droite pour quelqu’un d'autre qui voit ce panneau implanté sur l'accotement et 
                qui le concerne, il va vous céder le passage car vous êtes prioritaire.
                </p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                        <p>
                         Si par tout hasard, vous rencontrez ce panneau en rejoignant un axe où il n'y a aucune rue à droite, 
                         alors ce panneau s'applique pour vous, c'est vous qui avez la priorité !
                        </p>
                    </div>
                </div>
                
                <br>
                <p><b>Panneau 2 et 3 :</b> Lorsque vous roulez sur une route et voyez ce panneau (2), 
                    cela veut dire que vous êtes sur une route prioritaire. 
                    Le même panneau rayé (3) met fin au caractère prioritaire de la route sur laquelle vous roulez.
                </p>
                <p><b>Panneau 4 :</b>  veut dire qu'à la prochaine intersection les autres usagers doivent vous céder le passage. 
                    Il s'agit d'une priorité ponctuelle et elle vous concerne seulement si vous allez tout droit.
                </p>
                <h3><b>Effet miroir</b></h3>
                 <p>Ce que j'appelle l'effet miroir est le fait que dans les intersections :</p>
                 <li>vous avez la priorité donc quelqu'un d'autre doit vous céder le passage ;</li>
                 <li>vous n'avez pas la priorité donc vous devez céder le passage.</li>
                 <br>
                <div class="card important">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                        <p>
                            Tout le monde ne peut pas avoir la priorité dans une intersection. 
                            n ordre de passage doit s'établir pour rendre la circulation fluide.
                        </p>
                    </div>
                </div>
                <br>
                <p>Observez bien ces deux photos. Certes, les panneaux concernent les tronçons de route rétrécis où se font 
                    les croisements. En revanche, l'effet miroir s'applique aussi sur ces panneaux-ci. Sur la première photo, 
                    la flèche qui vous concerne est rouge donc vous devez céder le passage venant d'en face. 
                    Sur la seconde photo, la flèche rouge concerne la personne venant d'en face donc vous avez la priorité.
                </p>
                <div class="card sensuniq">
                    <img src="./images/vousceder.jpg" height="200px" class="sensuniq">
                </div>
                <br>
                <div class="card question">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                    <p>Observez bien la situation des deux photos ci-dessous. Ce n'est pas le jeu des 7 différences, 
                        vous avez juste le panneau Stop et Cédez le passage qui diffèrent et leurs marquages au sol respectifs. 
                        Réfléchissez à l'effet miroir et dans quel cas vous laissez passer la voiture grise, venant de droite.</p>
                    </div>
                </div>
                <br>
                
                
                <div class="card sensuniq">
                    <img src="./images/fonctionprio.jpg" height="200px" class="sensuniq">
                </div>  
                <p class="text-muted text-center"><small>Priorités en fonction de la signalisation</small></p><br>
                <p><b>Réponse :</b> Qu'ils se trouvent en agglomération ou sur les routes, 
                    les ronds-points sans signalisation bénéficient de la règle de la priorité à droite. 
                    Pensez au rond-point de l’Étoile à Paris comme étant l'un des exemples.
                </p>
                
                <br>
                <div class="card question">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                    <p>Et quelle signalisation auriez-vous pu rencontrer sur votre
                         chemin si la voiture grise avait le Stop ou Cédez le passage ?</p>
                    </div>
                </div>
                <br>
                <p><b>Réponse :</b> L'effet miroir ici veut dire que sur votre partie de la 
                   route vous avez sûrement rencontré le panneau ci-dessous :
                </p>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/routepan.jpg">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small >Panneau route prioritaire</small></p>
              
                
              <p>mais que vous n'avez en aucun cas rencontré le panneau ci-dessous :</p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/priodroitpan.jpg">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small >Panneau route prioritaire</small></p>
              <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                    <p>
                    Si vous n'avez rencontré aucune signalisation vous concernant et que vous arrivez à une intersection, 
                    <b>regardez le marquage au sol</b> de ceux qui arrivent de droite.
                    </p>
                    </div>
                </div>
                <br>
                <div class="card question">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>
                      Sur les photos ci-dessous vous devez appliquer la règle des panneaux. 
                      Pour aller tout droit, quel est votre comportement ?
                    </p>
                    </div>
                </div>
                <div class="card sensuniq">
                    <img src="./images/priofoncpan.jpg" height="200px" class="sensuniq">
                </div>  
                <p class="text-muted text-center"><small>Priorités en fonction du panneau</small></p>

                <p><b>Réponse :</b>  Sur la photo n°1 vous avez la priorité car le panneau vous l'indique. 
                    La voiture venant sur votre droite doit s'arrêter soit à un Stop soit à un Cédez le passage. 
                    Donc vous pouvez conserver la même allure de circulation tout en restant prudents. 
                    Sur la photo n° 2 vous devez laisser le passage aux voitures venant de droite à la prochaine intersection, 
                    car le panneau vous l'indique. Si vous ne voyez clairement aucune voiture venant de droite, 
                    vous pouvez conserver la même allure tout en restant prudents. En revanche, 
                    <b>si vous n'avez pas une bonne visibilité</b> ou que vous voyez des voitures arriver, il faut ralentir et céder le passage.
                </p>
                
                <br>
                <h3><b>En résumé</b></h3>
                <div class="card sensuniq">
                    <img src="./images/recappan.jpg" height="200px" class="sensuniq">
                </div> 
              <p class="text-muted text-center"><small>Récapitulatif des panneaux indiquant la priorité</small></p>
              <ol style="margin-left: 10px; list-style-type: disc;"> 
                <li>Vous avez la priorité</li>
                <li>Vous n'avez pas la priorité</li>
                <ul>
                    <li>- Pensez à l'effet miroir pour les comprendre et établir les priorités : 
                    tous les usagers ne peuvent pas bénéficier du droit de passage en même temps.</li>
                </ul>
              </ol> 
          </div>
        </div>
      </div>

    </section>

    <!--Le pied de la page-->
    <?php
    // <!--Le pied de la page-->
        include("footer.php");

        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("script_link.php");
    ?>
</body>
</html>