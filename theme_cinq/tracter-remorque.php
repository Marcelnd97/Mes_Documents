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
    <title>Tracter une remorque</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<<body class="codebody">>

    <!--L'en-tête de la page-->
    <?php
        include("../header/header.php");
    ?>
    <section>
      <br><br><br><br>

      <div class="container">
       <!-- Content here -->
        <div class="row justify-content-center">
          <div class="col-md-8">
                <h1 style="font-weight: bold;"><b>Tracter une remorque</b></h1>
                <br>
                <p>Tracter une remorque ou une caravane pour une voiture c'est comme si vous portiez un gros sac 
                    à dos en marchant. Vous ne pouvez pas aller vite, 
                    vous avez du mal à vous déplacer et le poids façonne vos gestes.</p>
                 <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_cinq/tracter1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Tracter une caravane </small></p>
                    </div>
                </div>
                
                <p>Le comportement du véhicule qui tracte subit aussi ce genre de changements :</p>
                <ol style="list-style-type: disc;">
                    <li>il pousse et contrarie le freinage ;</li>
                </ol>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Il faut anticiper le freinage et laisser davantage de distance entre les véhicules.</p>
                    </div>
                </div>
                <ol style="list-style-type: disc;">
                    <li>Il n'a pas la même tenue de route que la voiture à cause de la position
                         de ses roues, de sa hauteur et de son poids ;</li>
                </ol>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Il faut aller encore moins vite dans les virages.</p>
                    </div>
                </div>
                <ol style="list-style-type: disc;">
                    <li>Il est très sensible au vent latéral ;</li>
                </ol>
                
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Il faut être vigilant aux endroits exposés lors du croisement ou du dépassement des poids lourds.</p>
                    </div>
                </div>
                <h2 style="font-weight: bold;">Équipements</h2>
                <p>Les caravanes et les remorques doivent comporter certains équipements spécifiques.</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Si le PTAC de la remorque dépasse les 500 kg, une carte grise 
                        et une attestation d'assurance sont obligatoires pour ce véhicule.</p>
                    </div>
                </div>
                <br>
                <p>Aussi, la caravane ou la remorque doivent être équipées :</p>
                <ol style="list-style-type: disc;">
                    <li>de 2 feux rouges à l'arrière;</li>
                    <li>des clignotants, si son PTAC est supérieur à 500 kg ;</li>
                    <li>des feux Stop, si son PTAC est supérieur à 500 kg ;</li>
                    <li>d'une plaque d'immatriculation (identique au véhicule tracteur si le PTAC est inférieur 
                        à 500 kg, autrement doit avoir une autre plaque d'immatriculation et donc une autre 
                        carte grise) ;</li>
                    <li>des rétroviseurs extérieurs à droite seulement si sa largeur dépasse celle du véhicule 
                        tracteur ;</li>
                    <li>des freins supplémentaires si son poids dépasse 750 kg ou la moitié du poids du véhicule 
                        tracteur à vide.</li>
                </ol>
                 <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_cinq/tracter2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Equipement d'une remorque  </small></p>
                    </div>
                </div>
                <p>Différents freins supplémentaires sont nécessaires si le poids de la remorque dépasse les 750 kg (frein de parcage, 
                    frein de route et un système d'arrêt automatique si l'attelage entre la remorque et la voiture se rompt).</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                        <p>Il est interdit de transporter des personnes dans une remorque.</p>
                    </div>
                </div>
                <br>
                <p>Si vous circulez hors agglomération, assurez-vous que les distances de sécurités soient
                     respectées lorsque vous roulez derrière un long véhicule. Pour un véhicule ou un ensemble 
                     de véhicules dont la longueur dépasse 7 m et dont le PTAC est supérieur à 3,5t, laissez 
                     un intervalle de sécurité de 50 m devant vous.</p>
                <p><b>Conduite</b></p>
                <p>Comme vous avez un autre véhicule accroché au vôtre, la conduite sera forcément plus 
                    difficile. Le freinage sera plus allongé, notamment dans les descentes. Le vent pourra 
                    également affecter votre trajectoire. Veillez à aborder les virages moins vite pour ne pas
                     heurter la glissière de sécurité.</p>
                <p>En raison des dimensions des véhicules tractés, pensez à respecter la signalisation. 
                    Il ne faut pas non plus négliger la vitesse, car elle est limitée à 90 km/h pour les 
                    ensembles de véhicules dont le PTRA (Poids Total Roulant Autorisé) excède les 3,5t.</p>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Il est plus difficile de tracter une remorque que de conduire une voiture seule.</li>
                   <li>Le poids qu'exerce la remorque sur la voiture influence la conduite et la rend plus dangereuse.</li>
                   <li>Tracter une remorque demande de rouler moins vite.</li>
                   <li>Tracter une remorque demande d'être davantage vigilant et
                     d'anticiper sur les gestes car le freinage est plus difficile.</li>
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