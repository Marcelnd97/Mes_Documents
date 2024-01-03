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
    <title>Les camions</title>
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
                <h1 style="font-weight: bold;"><b>Les camions</b></h1>
                <br>
                <p> Les poids lourd sont des véhicules encombrants et ont des limitations de vitesse spécifiques.
                     J’adapte l’allure et mon comportement en étant à proximité de l’un d’eux, pour limiter 
                     le risque d’accident. </p>
                <h2 style="font-weight: bold;">Leur encombrement</h2>
                <p> Plus un véhicule est imposant, plus ses angles morts sont importants. Ces zones sont les
                    zones où le conducteur du poids lourds ne peut pas voir ce qu’il se passe depuis son poste 
                     de conduite. Pour être sûr d’être vu lorsque je suis un camion, je dois voir au moins un 
                     rétroviseur du camion. </p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/camion1.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Plus un véhicule est imposant, plus ses angles morts sont importants.</small></p>
                    </div>
                </div>
                
                <p> Un camion chargé peut peser 18 fois plus qu’une voiture et être 4 fois plus long. La conduite d’un camion 
                    est donc différente de la conduite d’une voiture. Ils ont besoin de plus d’espace et de plus de temps pour 
                    manoeuvrer. Le gabarit des poids lourds impose aux conducteurs de faire des écarts de trajectoire lorsqu’ils
                     manoeuvrent. Lors d’un changement de direction, par exemple, 
                    ils sont souvent obligés de circuler sur la voie de gauche pour tourner à droite, à cause de leur déport. </p>
               <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/camion2.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Tenez compte du gabarit des véhicules lourds</small></p>
                    </div>
                </div> 
               
                <h2 style="font-weight: bold;">Leur signalisation</h2>
                <p><b>Véhicule plus long</b></p>
                <p> Il est important de savoir si un camion est très long pour savoir si le dépassement
                     est possible. C’est pour cela, notamment, que les camions qui ont une remorque ont des 
                     triangles rouges à l’arrière de la remorque. </p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/camion3.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Signalisation de véhicules longs </small></p>
                    </div>
                </div> 
                 
                <p><b>Transport de matières dangereuses</b></p>
                <p> Les camions permettent le transport de différentes matières. Certaines matières nécessitent
                     d’être clairement signalées. Cela permet, notamment, que les secours puissent agir en 
                     conséquence, en cas d’accident. </p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/camion4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Véhicule transportant des matières dangereuses pour l'environnement</small></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/camion5.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Détail sur la matière transportée </small></p>
                    </div>
                </div>
                
                <p>1. Le numéro 30 de la plaque orange renseigne le type de danger et le numéro 1202 la nature du danger ou code matière.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Les numéros du dessus qui commencent :</p>
                    <p>- par un 1 sont des matières et objets explosibles ;</p>
                    <p>- par un 2 sont des gaz comprimés ;</p>
                    <p>- par un 3 des liquides inflammables ;</p>
                    <p>- par un 4 des solides inflammables ;</p>
                    <p>- par un 5 des comburants ou peroxydes ;</p>
                    <p>- par un 6 des matières toxiques ;</p>
                    <p>- par un 7 des matières radioactives ;</p>
                    <p>- par un 8 des matières corrosives ;</p>
                    <p>- par un 9 des dangers divers.</p>
                    </div>
                </div>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Dans la seconde partie de la plaque (2e ligne), on trouve le code matière qui est le
                         numéro ONU sous lequel est référencé le type de produit transporté 
                         (près de 3000 numéros existants).</p>
                    <p>Il s'agit d'un numéro composé de 4 chiffres qui permet d’identifier la matière concernée.</p>
                    <p><b>Exemple du n° 1202 = gasoil</b></p>
                    </div>
                </div>
                <br>
                <p>2. Le symbole de danger rouge démontre que c'est une matière inflammable, 
                    tandis que le blanc informe que la matière est très polluante.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/camion6.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Les risques liés aux matières dangereuses que peut transporter un camion</small></p>
                    </div>
                </div>
                
                <p><b>Vitesse spécifique</b></p>
                <p> Les poids lourds ont des vitesses spécifiques. Selon le type de route qu’ils empruntent, 
                    ils doivent respecter la limitation de vitesse qui leur est imposée. Les disques ronds blancs 
                    à l’arrière indiquent aux autres usagers les limitations de vitesse : </p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/camion7.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Les vitesses respectives sur route non prioritaire, prioritaire et autoroute</small></p>
                    </div>
                </div>
                <h2 style="font-weight: bold;">Mon comportement</h2>
                <p> Pour être vu, avoir une bonne visibilité et pour anticiper : </p>
                <ol style="list-style-type: disc;">
                    <li>je garde de bonnes distances de sécurité et je serre le bord gauche de ma voie.
                         Si je ne vois pas un des rétroviseurs 
                        du poids lourd, je suis trop près. Le conducteur du camion ne me voit pas ! </li>
                </ol>
                <p> En plus, l’hiver, je peux éviter plus facilement les plaques de gel et de neige 
                    qui peuvent tomber de son toit. </p>
                <p> Lorsqu’un <b>camion manoeuvre :</b> </p>
                <ol style="list-style-type: disc;">
                    <li>je reste à une bonne distance, pour lui faciliter la manoeuvre et 
                        pour réduire le risque d’accrochage lié au porte-à-faux et au déport du véhicule, </li>
                    <li>si besoin, je m’arrête le temps que la manoeuvre se termine. Si le camion manoeuvre en face de moi, 
                        je m’arrête le temps qu’il se replace dans sa voie, </li>
                    <li>à l’entrée d’un carrefour à sens giratoire, je reste en arrière du camion, pour le 
                        laisser manoeuvrer tranquillement et pour éviter le risque d’accrochage. </li>
                </ol>
                <p> Pour le <b>dépasser</b> : </p>
                <ol style="list-style-type: disc;">
                    <li> je vais au maximum de la vitesse autorisée, pour être visible du conducteur le plus tôt possible, </li>
                    <li> je serre le bord gauche de ma voie, </li>
                    <li> je tiens fermement le volant, pour éviter des écarts de trajectoire (surtout à la fin du dépassement), </li>
                    <li> je me rabats uniquement lorsque je vois le camion entier dans le rétroviseur intérieur. </li>
                </ol>
                <p> Une forte différence de vitesse entre usagers surprend, peut engendrer des erreurs de 
                    conduite et aggrave les conséquences d’un accident. </p>
                <br>
                <p> Si le <b>croisement est difficile :</b> </p>
                
                <ol style="list-style-type: disc;">
                    <li> sur une route étroite, les véhicules de plus de 2 m de large et
                         de plus de 7 m de long doivent me faciliter le passage. </li>
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