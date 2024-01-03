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
    <title>Signalisation temporaire</title>
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
                <h1 style="font-weight: bold;"><b>Signalisation temporaire</b></h1>
                <br>
                <p>Vous avez bien compris, cette signalisation n'est pas présente sur la route tout le temps et de ce fait, 
                    sa couleur change pour lui donner un autre caractère même si la valeur reste la même.</p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>La couleur de la signalisation temporaire est jaune pour le marquage au sol et 
                        les panneaux de danger.</p>
                    </div>
                </div>
                <br>
                <p>Voici l'exemple de la chaussée rétrécie par la gauche, la droite ou des deux côtés de façon permanente 
                    (la route est faite comme ça), ou alors de façon temporaire à cause de travaux par exemple :</p>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/sensidenticmaispasvaleur.jpg" width="300px;">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Le sens est identique mais pas la valeur</small></p>
                
                <ol>
                    <li>Chaussée rétrécie</li>
                    <li>Chaussée rétrécie par la gauche</li>
                    <li> Chaussée rétrécie par la droite</li>
                    <li> Chaussée rétrécie de façon temporaire</li>
                </ol>
                <p>D'autres dangers temporaires n'ont pas leur correspondant en permanent. 
                    Le panneau symbolisant le bouchon ci-dessous indique bien son caractère temporaire 
                    (certainement à cause de travaux qui ralentissent la circulation) :</p>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="../images/pantempasperma.jpg" width="200px;">
                        </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Panneaux temporaires n'existant pas en permanent</small></p>
                <ol>
                    <li>Bouchon</li>
                    <li>Travaux</li>
                </ol>
                <h3 style="font-weight: bold;">Travaux sur la route</h3>
                <p>La réparation de la voirie pour entretien ou pour aménagements divers est signalée 
                    essentiellement avec les panneaux jaunes. Elle peut être accompagnée des balises pour 
                    bien délimiter des tronçons de route qui ne sont pas concernés par les travaux.</p>
                <p>Sur la photo ci-dessous nous voyons un panneau jaune qui symbolise les travaux (le bonhomme qui creuse avec une pelle) 
                    et aussi la limitation de vitesse posée par terre.</p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Point à retenir : Le panneau de vitesse est bien temporaire, mais n'est pas de couleur jaune.
                         Le fait qu'il soit posé par terre indique son caractère temporaire !</p>
                    </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="../images/signaletemporaire.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Signalisation temporaire (travaux) </small></p>
                
                <p>Voici d'autres panneaux que vous risquez de voir en cas de travaux :</p>
                <div class="card senscirc">
                    <img src="../images/pansymboltravaux.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux symbolisant les travaux</small></p>
                
                <ol>
                    <li>Autres dangers temporaires, précisés ou non</li>
                    <li>Projections de gravillon</li>
                    <li>Travaux</li>
                    <li>Chaussée glissante</li>
                </ol>
                <p>Voici les signaux de position de rétrécissement temporaire de la chaussée en cas de travaux :</p>
                <div class="card senscirc">
                    <img src="../images/plotsetpanaux.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Plots et panneaux d'une déviation ou d'un rétrécissement 
                    temporaire de la chaussée</small></p>
                <ol>
                    <li>Signal de position d'une déviation ou d'un rétrécissement temporaire de la chaussée</li>
                    <li>Barrage. Signalisation de position d'un obstacle temporaire</li>
                    <li>Signalisation de position des limites d'obstacles temporaires. Dispositif conique</li>
                    <li>Balise de renforcement pour améliorer la visibilité en cas de déviation</li>
                </ol>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Point à retenir : Lorsque vous rencontrez les panneaux relatifs aux travaux ou à un changement sur la chaussée, 
                        il ne faut pas le prendre comme une simple information. </p>
                    </div>
                </div>
                <br>
                
                <div class="card question">
                    <div class="card-body">
                        <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                        <p>Sur la photo ci-dessous, si vous voyez ce panneau symbolisant la chaussée 
                            glissante à cause du gasoil qui a dû être déversé, que faites-vous ?</p>
                    </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="../images/comportmaadopter.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Comportement à adopter : ralentir</small></p>
                
                <p><b>Réponse :</b>Il est judicieux de ralentir car la chaussée peut être glissante.</p>
                <p><b>Feux temporaires</b></p>
                <p>Il s'agit de feux qui sont annoncés avec des panneaux temporaires. 
                    Sur la photo ci-dessous les plots délimitent le passage des voitures :</p>
                <div class="card senscirc">
                    <img src="../images/panfeutempo.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux temporaires annonçant les feux temporaires</small></p>
                
                <p><b>Déviations</b></p>
                <p>Les travaux peuvent temporairement rétrécir la chaussée, décaler la conduite d'une voie, 
                    voire vous faire changer complètement de sens. Parfois, le marquage au sol peut changer 
                    aussi en devenant jaune. Vous vous devez alors de suivre les indications des déviations 
                    et de circuler sur le marquage jaune même s'il est superposé sur le blanc.</p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Notez bien que les panneaux de déviation peuvent contredire le sens habituel de la circulation 
                        et qu'ils peuvent annoncer la zone de travaux. 
                        La circulation risque d'être régulée grâce aux feux temporaires, comme sur la photo ci-dessus.</p>
                    </div>
                </div>
                <br>
                <p>Voici à présent les panneaux annonçant les déviations :</p>
                <div class="card senscirc">
                    <img src="../images/pandeviation.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panneaux de déviation</small></p>
                
                <ol>
                    <li>Direction de déviation</li>
                    <li>Présignalisation courante</li>
                    <li>Direction de déviation avec mention de la ville</li>
                    <li>Confirmation de déviation</li>
                </ol>
                <p>Si lors de travaux il n'y a pas de déviation, les agents d'entretien des routes peuvent 
                    être amenés à réguler la circulation avec des panneaux qu'ils vont avoir à la main. 
                    Le piquet vert autorise le passage et 
                    le rouge représentant le panneau du sens interdit, vous oblige à vous arrêter. </p>
                <div class="card senscirc">
                    <img src="../images/piquetmobile.jpg" height="200px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Piquets mobiles</small></p>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>La signalisation temporaire ne fait pas que vous informer, 
                        mais vous fait changer de comportement (ralentir ou faire dévier de chemin par exemple).</li>
                    <li>Même s'il n'y a pas de signalisation temporaire qui abaisse la limitation de vitesse, 
                        vous devez ralentir car des ouvriers peuvent surgir sur la chaussée.</li>
                    <li>La signalisation temporaire est symbolisée par les panneaux jaunes et 
                        le marquage en jaune peut l'accompagner.</li>
                    <li>La vitesse temporaire est posée par terre, mais le panneau ne change pas de couleur.</li>
                </ol>
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