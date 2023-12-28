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
    <title>Les deux-roues motorisés</title>
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
                <h1 style="font-weight: bold;"><b>Les deux-roues motorisés</b></h1>
                <br>
                <p>Les deux-roues motorisés circulent sur la chaussée et sont prévus pour un usage en 
                    agglomération. Ils offrent une alternative aux embouteillages, car ils se faufilent entre 
                    les voitures.</p>
                <h2 style="font-weight: bold;">Départements tests</h2>
                <p>Suite à une expérimentation, la circulation interfile a été autorisée dans certains 
                    départements. Lorsque la circulation étaient ininterrompue sur toutes les voies, lors d'un 
                    embouteillage par exemple, les motocyclistes étaient autorisés à remonter les files de voitures, 
                    uniquement sur les routes à chaussées séparées normalement limitées à plus de 70 km/h.  </p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Depuis le 01/02/21, cette pratique n'est plus autorisée.</p>
                    </div>
                </div>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Depuis 2007, les deux-roues peuvent rouler avec les feux de croisement allumés pendant 
                        la journée pour augmenter leur visibilité.
                         Il ne faut donc pas leur faire un appel de phares.</p>
                    </div>
                </div>
                <h2 style="font-weight: bold;"> Dépasser un deux-roues motorisé et être dépassé</h2>
                <p> Pour croiser ou dépasser un piéton ou un deux-roues, laissez un écart de 1 m en agglomération 
                    (et de 1,50m hors agglomération). Soyez vigilants si vous les repérez : même si le port de casque 
                    leur incombe, il ne les protège pas totalement des accidents.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                        <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                        <p>DComme les cyclistes, les motards peuvent avancer et aller sur les côtés rapidement, 
                            mais pas en marche arrière ! Donc la zone 
                            d'incertitude d'un deux-roues se trouve devant eux et sur leurs côtés. </p>
                    </div>
                </div>
                <br>
                <p>Lorsque vous êtes dépassé par un deux-roues, il peut être conseillé de serrer à droite de 
                    votre voie pour faciliter sa manoeuvre. Dans ce cas, le motard peut vous remercier en 
                    faisant un signe avec son pied droit. </p>
                <h2 style="font-weight: bold;">Trois types de deux-roues motorisés à connaître</h2>
                <ol style="list-style-type: disc;">
                    <li><b>Cyclomoteur de classe A : tout véhicule à deux ou trois roues équipé d’un moteur à 
                        combustion interne d’une cylindrée ne dépassant pas 50 cm³ ou d'un moteur électrique 
                        et qui ne peut dépasser sur une route en palier la vitesse de 25 km/heure ;</b></li>
                    <li><b>Cyclomoteur de classe B :</b></li>
                    <p>1. véhicule à deux roues équipé d'un moteur à combustion d'une cylindrée n'excédant 
                        pas 50 cm³ ou d'un moteur électrique ;</p>
                    <p>2. véhicule à trois roues équipé d'un moteur à combustion d'une cylindrée n'excédant 
                        pas 50 cm³ ou d'un moteur électrique et possédant une masse à vide de 270 kg  ;</p>
                    <p>3. véhicule à quatre roues équipé d'un moteur à combustion d'une cylindrée n'excédant 
                        pas 50 cm³ ou d'un moteur électrique ou d'autres types de moteurs d'une puissance 
                        maximale de 4 kW et possédant une masse à vide de 350 kg. Ne peut dépasser sur une
                            route en palier la vitesse de 45 km/h.</p>
                    <li><b>Motocyclette :</b> tout véhicule motorisé à deux roues avec ou sans side-car et qui ne 
                        correspond pas à la définition du cyclomoteur. La cylindrée excède 50 cm³ et/ou le 
                        véhicule peut dépasser la vitesse de 45 km/h sur une route en palier 
                        (il suffit que cette dernière condition soit satisfaite, cf. une motocyclette 
                        trafiquée (max. 50 cm³) qui est considérée comme une motocyclette). 
                        Même si une remorque y est attachée, ce véhicule demeure une motocyclette.</li>
                </ol>
                <p>Ne vous cassez pas la tête à apprendre ces caractéristiques en détail. 
                    C'est juste pour que vous ayez une idée de leur gabarit. Les photos et le 
                    tableau ci-dessous seront plus parlants : 
                    le n°1 représente un cyclomoteur de classe A et la photo n°2 une motocyclette :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/roue1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Scooter et moto</small></p>
                    </div>
                </div>
                <h2 style="font-weight: bold;">CYCLOMOTEUR / MOTOCYCLETTE</h2>
                <table class="table table-striped table-bordered">
                    <thead style="background-color: chocolate; color: white;">
                        <tr>
                            <th scope="col">Type </th>
                            <th scope="col">Vitesse </th>
                            <th scope="col">Immatriculation </th>
                            <th scope="col">Permis nécessaire</th>
                            <th scope="col">Age</th>
                            <th scope="col">Obligation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cyclomoteur
                                classe A </td>
                            <td>Max. 25 km/h </td>
                            <td>Plaque jaune</td>
                            <td>ASSR 2 </td>
                            <td>16 ans <br> 18 ans / passager</td>
                            <td>Casque</td>
                        </tr>
                        <tr>
                            <td>Cyclomoteur classe B</td>
                            <td>Max. 45 km/h </td>
                            <td>Plaque d’immatriculation </td>
                            <td>Permis de conduire AM  </td>
                            <td>A partir de 14 ans <br> 14 ans / passager</td>
                            <td>Casque</td>
                        </tr>
                        <tr>
                            <td>Motocyclette</td>
                            <td>Plus de 45 km/h</td>
                            <td>Plaque d'immatriculation</td>
                            <td>Permis de conduire A1, A2 ou A</td>
                            <td>A partir de 16 ou 18 ans (A2 et A)</td>
                            <td>Casque</td>
                        </tr>
                    </tbody>
                </table>
                 <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p> Voyons à présent si vous parvenez à les différencier quand il s'agit des interdictions. Associez les panneaux à leur signification :</p>
                    <p>a) accès interdit aux véhicules à moteur à l'exception des cyclomoteurs</p>
                    <p>b) accès interdit aux cyclomoteurs</p>
                    <p>c) accès interdit aux motocyclettes et motocyclettes légères</p>
                    <p>d) accès interdit à tout véhicule à moteur</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/roue2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Interdictions pour les motos</small></p>
                    </div>
                </div>
                <p><b>Réponses :</b></p>
                <p> Panneau 1 : réponse b ; Panneau 2 : réponse c ; Panneau 3 : réponse d ; Panneau 4 : réponse a.</p>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Attention aux interdictions implicites. Le panneau n°3 interdit clairement l'accès aux 
                        3 types de véhicules, tandis que le panneau n°4 exclut les cyclomoteurs. Notez aussi 
                        que les cyclomoteurs sont représentés de 
                        façon plus fine que les motocyclettes, qui sont un peu plus grandes.</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">La réglementation inter-files</h2>
                <p>Une expérimentation concernant la circulation en inter-files est actuellement en cours 
                    dans certains départements. Voici en quoi consiste cette réglementation. </p>
                <p><b>Qui peut circuler en inter-files ?</b></p>
                <p>Les deux-roues ou trois-roues motorisés. Les tricycles, les quads ou encore les side-cars 
                    ne sont pas autorisés à conduire en inter-files.</p>
                <p><b>Où est-il possible de circuler en inter-files ? </b></p>
                <ol style="list-style-type: disc;">
                    <li>Sur les autoroutes et les routes à deux chaussées séparées par un terre-plein central et
                         dotées d’au moins deux voies chacune. 
                        La vitesse maximale autorisée doit être supérieure ou égale à 70 km/h.</li>
                    <li>Seuls 21 départements sont concernés par l’expérimentation : les Alpes-Maritimes, 
                        les Bouches-du-Rhône, la Drôme, l'Essonne la Gironde, la Haute-Garonne, les Hauts-de-Seine, 
                        l’Hérault, l’Isère, la Loire-Atlantique, le Nord, Paris, les Pyrénées-Orientales, le Rhône 
                        (y compris la métropole lyonnaise), la Seine-et-Marne, 
                        la Seine-Saint-Denis, le Val-d'Oise, le Val-de-Marne, le Var, le Vaucluse, et les Yvelines.</li>
                </ol>
                <p><b>Dans quelles circonstances la circulation inter-files est-elle possible ?</b></p>
                <ol style="list-style-type: disc;">
                    <li>La circulation doit être dense et composée de files ininterrompues sur toutes les voies</li>
                    <li>L’espace entre les véhicules doit être suffisant pour pouvoir passer</li>
                </ol>
                <p><b>Quelles sont les règles à respecter pour les deux-roues ? </b></p>
                <ol style="list-style-type: disc;">
                    <li>Les deux-roues doivent respecter une vitesse de 50 km/h maximum. Un différentiel de 30 
                        km/h par rapport aux autres véhicules est obligatoire.</li>
                    <li>Si le trafic se fluidifie et que les autres véhicules circulent à plus de 50 km/h sur au
                         moins une des 2 files, la circulation inter-files est de nouveau interdite.</li>
                    <li>Les deux-roues doivent toujours prévenir les autres véhicules de leur intention.</li>
                    <li>Il est interdit de forcer le passage si l’espace entre deux véhicules est trop petit. </li>
                    <li>Les deux-roues ne doivent pas se dépasser en inter-files. </li>
                    <li>Il est interdit de circuler en inter-files si des travaux sont présents sur 
                        la voie ou si celle-ci est couverte de neige ou de verglas.</li>
                </ol>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Les deux-roues peuvent aussi avoir un comportement inattendu, car ils peuvent se 
                        faufiler entre les voitures - tant à gauche qu'à droite.</li>
                    <li>Faites attention à la signalisation relative aux cyclomoteurs et aux motocyclettes 
                        lorsqu'il s'agit des interdictions d'accès 
                        (lorsqu'une voiture et une motocyclette sont barrées sur un panneau, sont exclus les cyclomoteurs).</li>
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