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
    <title>arrêter à temps</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body class="codebody">
     <!--L'en-tête de la page-->
     <?php
        include("../header/header.php")
     ?>
    <br><br><br>
    <section>
      <div class="container">
        <!-- Content here -->
        <div class="row justify-content-center">
          <div class="col-md-10">
                <h1 style="font-weight: bold;">S’arrêter à temps</h1>
                <br> 
                <p>Pour vous arrêter, il faut freiner. On peut prévoir le freinage si l'on observe son environnement et si l'on anticipe, 
                    mais il peut nous arriver aussi de devoir freiner brusquement si un obstacle surgit sur la route de façon inopinée.</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Malheureusement, même si vous êtes concentrés, 
                        votre cerveau mettra un certain temps à repérer le danger et à envoyer le message à vos pieds.</p>
                    </div>
                </div>
                <br>
                <p>Observez le schéma du temps de réaction :</p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/arret1.jfif" height="500px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Temps de réaction lors du freinage</small></p>
                <p>Ce schéma vous aide à comprendre le temps qu'il vous faut pour appuyer sur le frein. Pendant que vous percevez, 
                    analysez, décidez et agissez, vous roulez toujours. 
                    C'est au niveau du point B (voir schéma ci-dessous) que vous commencez seulement à freiner :</p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/arret2.jfif" height="150px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Distances parcourues lors de la distance d'arrêt</small></p>
                <p><b>Temps de réaction</b></p>
                <p>Calcul de la distance de perception, analyse, prise de décision et appui sur le frein
                     parcourue en 1 seconde : il faut multiplier le chiffre des dizaines de la vitesse par 3. 
                     Exemple pour 50 km/h : 5 x 3 = 15 m. Vous parcourez donc 15 m sans réagir.</p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/arret3.jpg" height="100px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Distance parcourue avant le freinage</small></p>
                
                <p><b>Distance de freinage</b></p>
                <p>Donc après avoir parcouru 15 m, vous avez commencé à freiner. Mais lorsque vous appuyez sur le frein,
                     la voiture ne s'arrête pas net. Elle parcourt une distance qu'on appelle la distance de freinage. 
                     Elle est proportionnelle à la vitesse à laquelle vous roulez. Vous aurez plus de difficultés à 
                     vous arrêter si vous roulez vite.</p>
                <p><b>Distance d'arrêt</b></p>
                <p>Cette distance comprend la distance parcourue pendant le temps de réaction et <b>la distance de freinage</b>.
                     Elle commence à la découverte de l'obstacle et prend fin à l'arrêt complet du véhicule.</p>
                <p>Elle peut varier selon :</p>
                <ol style="list-style-type: disc; margin-left: 10px;">
                    <li>l'état physique et le niveau de vigilance du conducteur ;</li>
                    <li>la vitesse du véhicule ;</li>
                    <li>l'état de la chaussée ;</li>
                    <li>l'état du véhicule ;</li>
                    <li>le poids du véhicule ;</li>
                    <li>l'environnement (descente, montée, terrain plat).</li>
                </ol>
                <p><b>Calcul de la distance d'arrêt</b> : en multipliant le chiffre des dizaines de la vitesse <b>par lui-même</b>, 
                    vous obtenez approximativement la distance nécessaire pour arrêter le véhicule. 
                    Exemple pour 50 km/h : 5 x 5 = 25 m. Vous parcourez autour de 25 m avant de vous arrêter net.</p>
                <p><b>Par temps de pluie</b>, la distance de freinage est multipliée par 2. Ainsi, à la distance trouvée par 
                    temps sec, il faut y ajouter la moitié de cette même distance. 
                    D'où les chiffres 12,5 pour 25m, 40,5m pour les 81m et 84,5 pour les 169m.</p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/arret4.jfif" height="150px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Distance d'arrêt sur chaussée sèche et mouillée</small></p>
                <br>

                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Lorsqu'un obstacle surgit, personne n'est capable d'arrêter la voiture aussitôt.</li>
                    <li>Le cerveau met du temps pour envoyer aux pieds le message de freiner, appelé aussi le temps de réaction.</li>
                    <li>L'arrêt complet du véhicule se compose du temps de réaction additionné au temps de freinage.</li>
                    <li>Le calcul se fera en multipliant les chiffres des dizaines de la vitesse par lui même (5 x 5 ; 9 x 9 etc).</li>
                    <li>La distance d'arrêt augmente si la chaussée est mouillée.</li>
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