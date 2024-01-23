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
    <title>Aides à la conduite</title>
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
                <h1 style="font-weight: bold;"><b>Aides à la conduite</b></h1>
                <br>
                <p>Les aides à la conduite peuvent vous faciliter la vie, voire la sauver !</p>
                <h2 style="font-weight: bold;">Régulateur de vitesse</h2>
                <p>Il se trouve sur le volant ou sur le commodo, selon les modèles. Il a pour rôle 
                    de stabiliser l'allure sans forcément agir sur le frein ou l'accélérateur. 
                    C'est vous qui devez régler la vitesse à laquelle vous voulez rouler, mais 
                    en roulant seulement !</p>
                <p>Votre pied n'est pas positionné sur l'accélérateur.</p>
                <p>Il fonctionne seulement sur les rapports de vitesse supérieurs.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Il se désactive en appuyant sur le frein ou l'embrayage.</p>
                    </div>
                </div>
                <br>
                <p>Il est davantage adapté sur les routes ou les autoroutes, pas en agglomération.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>En vous approchant d'un poste de péage, pensez à désactiver le régulateur de vitesse !</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Le régulateur adaptatif</h2>
                <P>Il fonctionne comme le régulateur de vitesse, sauf qu'en plus ce système gère les distances 
                    de sécurité devant vous. Donc si vous approchez trop du véhicule devant vous, le système va 
                    automatiquement réduire l'allure pour augmenter la distance de sécurité. Ce qui réduit le 
                    risque d'accident. Mais attention, cela ne doit pas vous empêcher de rester vigilant à ce 
                    qui se passe autour de vous et à garder les pieds près des pédales pour reprendre le contrôle 
                    de la vitesse si besoin.</P>
                <h2 style="font-weight: bold;">Limiteur de vitesse</h2>
                <P>Grâce à ce dispositif, vous pouvez régler la vitesse limite que vous ne souhaitez pas dépasser.
                     Si jamais vous souhaitez accélérer graduellement, la pédale reste inactive. Si vous appuyez 
                     brusquement, vous pouvez accélérer momentanément.</P>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Contrairement au régulateur de vitesse, le limiteur de vitesse impose de garder 
                        le pied sur l'accélérateur.</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Radar de recul</h2>
                <P>C'est un dispositif qui permet d'avertir de la proximité d'un obstacle qui peut être caché
                     dans l'angle mort, grâce à un signal sonore. Bien entendu, pour stationner vous devez vous 
                     créer vos propres repères pour ne pas devenir paresseux. Et à trop vouloir dépendre des 
                     outils qui facilitent la vie, le jour où ils tombent en panne, vous faites comment ?</P>
                <h2 style="font-weight: bold;">Avertisseur d'angle mort</h2>
                <P>Un voyant jaune ou rouge s'allume sur les rétroviseurs extérieurs pour vous signaler la présence
                     d'un véhicule dans l'angle mort.</P>
                <h2 style="font-weight: bold;">Système embarqué de téléphonie mobile</h2>
                <P>Les voitures récentes permettent au conducteur d'utiliser le téléphone sans le tenir à la main.
                     En effet, c'est la technologie du Bluetooth qui permet de connecter le téléphone à la voiture.</P>
                <h2 style="font-weight: bold;">GPS (Global Positionning System) </h2>
                <P>J'ai déjà évoqué le GPS dans le chapitre La vigilance.</P>
                <P>Il s'agit d'un dispositif qui va vous guider vers la destination que vous aurez préalablement 
                    renseignée avant de partir. Vous pouvez régler le GPS selon vos souhaits (pas de péage, trajet
                     le plus court etc.)</P>
                <P>Ne suivez pas bêtement ses instructions. Suivez aussi les panneaux !</P>
                <h2 style="font-weight: bold;">Direction assistée</h2>
                <P>C'est un système mécanique d'assistance à l'orientation des roues d'un véhicule. Il permet de
                     réduire l’effort fourni par la personne conductrice pour diriger son véhicule en faisant 
                     appel à une source de puissance annexe pour orienter les roues.</P>
                <br>
                <div class="card question">
                <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Vous souvenez-vous des termes "braquer" ou "contre-braquer ?</p>
                </div>
                </div>
                <br>
                <P><b>Réponse :</b>Ce sont des termes qu'on utilise pour tourner le volant dans un sens ou un autre.</P>
                <p>Si jamais le voyant de la direction assistée s'allume, il faut vérifier avec votre garagiste :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 100px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_neuf/conduite1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voyant de la direction assistée </small></p>
                    </div>
                </div>
                <h2 style="font-weight: bold;">La boîte noire</h2>
                <p>Depuis juillet 2022, un nouvel équipement est désormais obligatoire à bord de votre véhicule :
                     la boîte noire. Depuis cette date, les voitures, les utilitaires et les poids lourds neufs 
                     doivent en être équipés. </p>
                <p><b>Quelle est l’utilité de cette équipement ?</b></p>
                <p>La boîte noire permet de mémoriser l’activité générale du véhicule : le freinage, la vitesse, 
                    le port de la ceinture etc.. Ainsi en cas d’accident, ces données peuvent être analysées pour
                     identifier les responsabilités.  Ces données ne peuvent être utilisées que dans le cadre de 
                     sécurité routière ou de situation judiciaire. </p>
                <p>La boîte noire n’enregistre pas les conversations à l’intérieur du véhicule ni tout autre 
                    information personnelle.</p>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Le régulateur de vitesse permet de garder une allure constante, alors que le 
                    limiteur de vitesse permet de ne pas dépasser la vitesse déterminée par le conducteur.</li>
                   <li>Le radar de recul permet de détecter les obstacles derrière vous et vous les signaler.</li>
                   <li>La direction assistée vous permet de tourner facilement le volant sans perdre toute 
                    l'énergie journalière à braquer ou à contre-braquer.</li>
                   <li>Il est possible de téléphoner sans tenir le téléphone à la main (technologie Bluetooth).</li>
                   <li>L'avertisseur d'angle mort vous signale les véhicules qui sont dans l'angle mort.</li>
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