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
    <title>Accident</title>
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
                <h1 style="font-weight: bold;"><b>Accident</b></h1>
                <br>
                <p>Bonjour à tous ! J'espère que vous ne m'en voulez pas si je dois parler des sujets 
                    difficiles, mais encore une fois, vous en aurez besoin non seulement pour l'examen, mais 
                    surtout-si jamais (je croise les doigts que non) cela vous arrivait en vrai. </p>
                <p>Après tout ce que vous avez dû lire sur l'alcool, les drogues, le manque de vigilance,
                     etc, place à ce qui peut arriver et ce qu'il faut aussi apprendre à gérer : les accidents.
                      Ils ne sont pas tous méchants, mais quelle que soit leur nature ou leur cause, il faut 
                      savoir quoi faire.</p>
                <h2 style="font-weight: bold;">Accident et ses causes</h2>
                <p>Qu'est-ce qu'un accident ?</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>C'est une collision entre une voiture et une autre voiture ou un autre élément 
                        (usager, arbre, poteau, mur) entraînant des dégâts matériels et/ou corporels.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_six/choc1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Accident de la route </small></p>
                    </div>
                </div>
                <br>
                <div class="card question">
                <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Pourquoi les accidents arrivent-ils ?</p>
                </div>
                </div>
                <br>
                <p>Réponse : Les accidents arrivent pour des raisons différentes. Le manque de vigilance 
                    peut être une cause, tout comme la consommation d'alcool ou de drogues. Il peut arriver 
                    aussi que vous ayez un accident, causé par un tiers. Ou que vous en soyez tout simplement
                     le témoin oculaire.</p>
                <p>Vous pouvez donc être :</p>
                <ol style="list-style-type: disc;">
                   <li>témoin d'un accident ;</li>
                   <li>être victime d'un accident causé par un tiers ;</li>
                   <li>en être responsables vous-mêmes.</li> 
                </ol>
                <p><b>Facteurs relevés dans les accidents</b></p>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <td>Conduite sous influence d'alcool</td>
                            <td>L’alcoolémie positive d’un conducteur est présente dans les accidents 
                                causant 20% des tués sur la route.</td>
                        </tr>
                        <tr>
                            <td>Vitesse excessive</td>
                            <td>Selon les forces de l’ordre, les excès de vitesse sont la cause principale
                                 de 30% des accidents mortels.</td>
                        </tr>
                        <tr>
                            <td>Défaut de ceinture/casque au moment de l'accident</td>
                            <td>- 21% des tués dans les véhicules (plus d'1 personne sur 5) ne portaient pas 
                                leur ceinture.- 9% des tués à cyclo, et 3% à moto ne portaient pas de casque.</td>
                        </tr>
                        <tr>
                            <td>Téléphone au volant</td>
                            <td>Ce facteur n’est pas comptabilisé dans les statistiques d’accidents, mais 
                                téléphoner au volant multiplie par 3 le risque d’accident corporel. Et 1 
                                accident corporel sur 10 est lié à l'usage du téléphone.</td>
                        </tr>
                        <tr>
                            <td>Présence d’un obstacle fixe (arbre, véhicule stationné, glissières, mur, 
                                poteau, panneau de signalisation, bordure de trottoir, fossé etc.)</td>
                            <td>Facteur présent pour les accidents occasionnant 35% des tués.</td>
                        </tr>
                        <tr>
                            <td>Fatigue et somnolence au volant</td>
                            <td>Le facteur "malaise fatigue" apparaît dans 9% des décès sur l'ensemble du 
                                réseau. Ce risque apparaît de jour comme de nuit.</td>
                        </tr>
                        <tr>
                            <td>Conduite sous influence du cannabis</td>
                            <td>23% des décès surviennent dans des accidents impliquant un conducteur contrôlé
                                 positif aux stupéfiants. Conduire après avoir consommé du cannabis multiplie par 
                                 2 le risque d’être responsable d’un accident mortel. Le risque est multiplié par
                                  14 en cas de consommation conjointe de cannabis et d’alcool.</td>
                        </tr>
                        <tr>
                            <td>Conduite sans permis / avec permis inadapté / sans assurance</td>
                            <td>4% des accidents mortels impliquent un conducteur n'ayant pas le permis valide,
                                 en grande majorité (les 3/4) n'ayant pas de permis. Et 4% des accidents mortels 
                                 impliquent un véhicule sans assurance.</td>
                        </tr>
                    </table>
                </div>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>ATTENTION ! On ne peut pas établir de hiérarchie entre tous ces facteurs d’accident. En effet, 
                        un accident peut en comporter plusieurs et les procédures d’évaluation ne sont pas identiques
                         pour chacun. En revanche, la conclusion qu'il est possible de tirer est que 
                        le principal facteur qui déclenche les accidents est le comportement du conducteur.</p>
                    </div>
                </div>
                <br>
                <p><b>Effets de la vitesse</b></p>
                <br>
                <div class="card question">
                <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Comment l'augmentation de vitesse affecte-t-elle votre conduite ?</p>
                </div>
                </div>
                <br>
                <p><b>Réponse : </b></p>
                <ol style="list-style-type: disc;">
                    <li>Elle rétrécit le champ visuel ;</li>
                    <li>elle oblige le conducteur à assimiler un grand nombre d'informations en un temps trop court ;</li>
                    <li>elle augmente la fatigue pour l'effort dont elle a besoin ;</li>
                    <li>elle allonge la distance d'arrêt et rend le véhicule moins maniable ;</li>
                    <li>elle accentue le risque de dérapage.</li>
                </ol>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Pour réduire les risques d'accident, il est important de diminuer la vitesse de 10%. Il faut 
                        ralentir pour tenir compte de la configuration de la route, 
                        l'état de la chaussée, les autres usagers, la visibilité, le trafic ou les chantiers en cours.</p>
                    </div>
                </div>
                <br>
                <br>
                <div class="card question">
                <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Combien un accident coûte-t-il à la société ?</p>
                </div>
                </div>
                <br>
                <p>1,2 million d'euros, c'est le coût en 2007 d'un tué sur la route, selon l'Observatoire National 
                    Interministériel de la Sécurité Routière (ONISR).</p>
                <p>Pour obtenir cette estimation, on a pris en compte les coûts médicaux et sociaux
                     (premiers secours, convalescence, etc), les coûts matériels (dommages des véhicules, etc.), 
                     les frais généraux (frais d'expertise, de justice, etc.) mais aussi la perte de production 
                     future des tués, et la perte de production potentielle de la descendance potentielle des 
                     accidentés sont prises en compte, tout comme les préjudices moraux.</p>
                <p><b>État des pneus</b></p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Petit rappel : l'adhérence dépend du type de pneu et de son usure, du
                         revêtement de la chaussée ainsi que des conditions atmosphériques.</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Qui, quand, où?</h2>
                <p>Les accidents surviennent dans tous les contextes et touchent tous les usagers de tous âges.
                     Mais voici quelques tendances :</p>
                <ol style="list-style-type: disc;">
                    <li>Qui : Tous les usagers, mais majoritairement les 15-24 ans. Les véhicules légers (49%) 
                        précédant les piétons (15%). Les autres usagers constituent un moindre pourcentage. 
                        En ville, la majorité des piétons tués ont plus de 65 ans.</li>
                    <li>Quand : La nuit, le risque d'accident est multiplié par 2. Les accidents de nuit représentent
                         42% des tués sur les routes.</li>
                    <li>Où : Partout, mais les accidents sont davantage mortels sur les routes hors agglomération 
                        à cause de la vitesse. Ils sont plus fréquents en ville, mais sont moins mortels.</li>
                </ol>
                <br>
                                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Les causes des accidents sont multiples : c'est le cumul de différents facteurs 
                    qui les déclenche.</li>
                   <li>Les principales causes des accidents sont les suivantes : conduite sous influence d'alcool ou de 
                    drogues, vitesse excessive, non-port de casque ou de ceinture, 
                    utilisation du téléphone au volant, présence d'un obstacle fixe, fatigue et somnolence au volant.</li>
                   <li>Tous les usagers sont concernés, mais majoritairement 
                    les 15-24 ans ; en ville, la majorité des piétons tués sont des personnes âgées.</li>
                   <li>Les accidents arrivent davantage la nuit et c'est sur 
                    les routes hors agglomération qu'ils sont les plus meurtriers.</li>
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