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
    <title>Intervales de securité</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">
     <!--L'en-tête de la page-->
     <?php
        include("../header/header.php")
     ?>
    <br><br><br>
    <section>
      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-10" style="padding-left: 25%;">
                <h1 style="font-weight: bold;">Intervalles de sécurité</h1>
                <br> 
                <p>Nous voici au chapitre qui est très important car à l'examen vous aurez 
                    tout un tas de questions sur les intervalles de sécurité.</p>
                <p>Il va falloir être malin pour dénicher tous les indices pour faire le bon calcul. 
                    Aussi, si l'on cherche à vous poser autant de questions à ce sujet, c'est pour vous faire 
                    comprendre que choisir la meilleure position sur la route et savoir conduire à la bonne distance 
                    des autres usagers est primordial. "Coller" quelqu'un n'est pas une bonne idée car vous ne vous 
                    donnez pas la possibilité de pouvoir anticiper et agir vite. Aussi, vous manquez de visibilité.</p>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Que se passe-t-il si le conducteur freine devant vous et que vous devez faire de même ?</p>
                  </div>
                </div>
                <br>
                <p><b>Réponse</b> : Vous risquez de lui rentrer dedans !</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>L'intervalle entre 2 véhicules doit être au minimum de 2 secondes : 
                        1 seconde est le temps physiologique d'une réaction et une autre seconde est la marge de sécurité.</p>
                    </div>
                </div>
                <br>
                <p>Voici comment vous pouvez faire ce calcul :</p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/interval1.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Comment calculer les 2 secondes ?</small></p>
                <p>Il faut que vous preniez un repère fixe devant vous 
                    (poteau ou panneau) et que vous attendiez que le véhicule devant vous passe devant pour pouvoir compter.</p>
                    <p>Pour dire que la distance de sécurité derrière vous est visuellement suffisante, vous pouvez aussi utiliser un point de repère. 
                        Il faut que vous puissiez voir dans votre rétroviseur intérieur les deux phares entiers du véhicule derrière vous.</p>
                <h2 style="font-weight: bold;">Distances à calculer en fonction du type de route</h2>
                <p><b>Distances sur autoroute</b></p>
                <p><em>Comme la vitesse peut être très élevée (jusqu'à 130 km/h), il est primordial de respecter les distances. 
                    Vous verrez ce genre de panneaux qui vous aideront à établir un calcul approximatif, mais efficace :</em></p>
                <div class="card senscirc">
                    <img src="../images/peage2.jpg" height="150px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Distances de sécurité sur autoroute</small></p>
                <p>Comme vous pouvez le voir, on se sert de <b>la ligne de rive</b> pour calculer. Si une ligne fait 
                39 m et l'intervalle entre les deux lignes est de 13 m, 
                l'espace à laisser correspond à (39 m x 2) additionné à la distance entre les lignes (13m) et cela donne <b>91 m.</b></p>
                <div class="card senscirc">
                    <img src="../images/lignerivsurautoroute.jpg" height="150px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Calcul des distances sur autoroute </small></p>
                <p><b>Distances sur route à 110 km/h</b></p>
                <p>Le calcul est le suivant :</p>
                <p>On multiplie la dizaine de la vitesse par 3 pour obtenir la distance parcourue pour 1 seconde : 11 x 3 = 33m/s. 
                    Mais comme la distance de sécurité est de 2 secondes, il faut donc 66 m (33 x 2). Vous pouvez vous servir de
                     la ligne médiane pour vérifier si la distance est respectée ou pas. Il faut donc compter 6 traits entre 
                     les véhicules.</p>
                <div class="card senscirc">
                    <img src="../images/lignemedianesuroute.jpg" height="150px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Calcul des distances sur route </small></p>
                <p><b>Distances sur route à 80 km/h</b></p>
                <p>Pensez à laisser une cinquantaine de mètres sur une route à 80 km/h (8 x 6 = 48 m, pour que ce soit précis). 
                    De plus, la ligne de rive est composée de traits de 3 m avec des intervalles de 3,5 m. 
                    Il faut donc faire le calcul grâce aux traits et aussi grâce à la vitesse. C'est l'astuce qui peut
                    vous aider le jour de l'examen !</p>
                <div class="card senscirc">
                    <img src="../images/lignederivesurroute.jpg" height="150px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Ligne de rive sur route à 90 km / h </small></p>
                
                <p><b>Distances en agglomération</b></p>
                <p>Pensez à laisser une trentaine de mètres sur une route à maximum 50 km/h.</p>
                <p><b>Distances dans un tunnel</b></p>
                <p>Il faut respecter la distance minimale de 2 diodes quelle que soit l'allure des véhicules.</p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Dans certains tunnels cette distance peut varier.</p>
                    </div>
                </div>
                <br>
                
                <p>Pour évaluer les distances, vous pouvez vous référer aux points bleus :</p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/aprehender.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Distances à appréhender dans un tunnel</small></p>
                <p><b class="text-muted">Tableau récapitulatif</b></p>
                <p>Voici le tableau récapitulatif mais approximatif pour connaître l'intervalle en mètres :</p>
                <table class="table table-striped table-bordered border-secondary">
                    <thead style="background-color: chocolate; color: white;">
                        <tr>
                        <th scope="col">Vitesse</th>
                        <th scope="col">Distance en 1 seconde</th>
                        <th scope="col">Distance de sécurité (2 secondes)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>50 km/h</td>
                        <td>5 x 3 = 15 m</td>
                        <td>5 x 6 = 30 m</td>
                        </tr>
                        <tr>
                        <td>70 km/h</td>
                        <td>7 x 3 = 21 m</td>
                        <td>7 x 6 = 42 m</td>
                        </tr>
                        <tr>
                        <td>80 km/h</td>
                        <td>8 x 3 = 24 m</td>
                        <td>8 x 6 = 48 m</td>
                        </tr>
                        <tr>
                        <td>110 km/h</td>
                        <td>11 x 3 = 33 m</td>
                        <td>11 x 6 = 66 m</td>
                        </tr>
                        <tr>
                        <td>130 km/h</td>
                        <td>13 x 3 = 39 m</td>
                        <td>13 x 6 = 78m</td>
                        </tr>
                    </tbody>
                </table>
                <h2 style="font-weight: bold;">En cas de dépassement</h2>
                <p>Pensez à laisser une bonne distance de sécurité si vous dépassez un piéton, un cavalier, une voiture.</p>
                <p> Pour dire que la distance de sécurité derrière vous est visuellement suffisante,
                     vous pouvez aussi utiliser un point de repère. Il faut que vous puissiez voir dans votre 
                     rétroviseur intérieur les deux phares entiers du véhicule derrière vous.</p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/imageretro.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>2 phares entiers = distance de sécurité suffisante</small></p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>1 m minimum en ville, 1,50 m minimum sur les routes hors agglomération.</p>
                    </div>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Pour conduire en toute sécurité, il faut respecter les distances entre les voitures.</li>
                    <li>Vous pouvez calculer ces distances en faisant des calculs, mais vous pouvez 
                        aussi les évaluer de façon rapide.</li>
                    <li>Le calcul rapide se fait en prenant un point de repère, attendre que la voiture 
                        devant vous passe devant et à partir de là, compter les secondes.</li>
                    <li>En temps, 2 secondes sont la bonne distance à avoir.</li>
                    <li>Sur l'autoroute, le calcul facile se fait à partir des 2 lignes de rive.</li>
                    <li>Sur route, il faut compter 50 m environ, aussi prendre en compte les lignes de rive.</li>
                    <li>En ville, il faut compter 30 m.</li>
                    <li>Dans un tunnel, il faut prendre comme repère les 2 diodes qui représentent la distance de 150 m 
                        ce qui est requis.</li>
                    <li>Prévoyez une distance suffisante en cas de dépassement.</li>
                </ol>
                <br>              
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