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
    <title>Les véhicules spécifiques</title>
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
                <h1 style="font-weight: bold;"><b>Les véhicules spécifiques</b></h1>
                <br>
                <h2 style="font-weight: bold;">Véhicules d'intervention urgente</h2>
                <p>Il existe deux types de véhicules d'intervention urgente : les véhicules prioritaires et 
                    ceux bénéficiant de facilités de passage. Ces derniers sont des véhicules d'entreprises 
                    privées (ambulances, SNCF, entretien de la voirie, etc). Les véhicules prioritaire sont 
                    des véhicules "officiels" du type : Police, Gendarmerie, SAMU, Douanes...Tous ces usagers 
                    sont prioritaires ou bénéficient de facilités de passage quand ils sont en mission et qu'ils 
                    utilisent leurs avertisseurs sonores et lumineux (bleus).</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/vehicule1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Véhicules avec priorité si en mission</small></p>
                    </div>
                </div>
                
                <p><b>Gyrophare bleu allumé</b></p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Cédez-leur le passage et facilitez-leur le passage aux intersections. Laissez-leur la possibilité de 
                    vous dépasser facilement. Ils peuvent ne pas respecter la signalisation ou la règle de la priorité à droite !</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/vehicule2.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Priorité aux véhicules d'urgence</small></p>
                    </div>
                </div>
                <p>En mission, les véhicules d'urgence ne sont pas obligés de respecter la signalisation :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/vehicule3.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Police en mission</small></p>
                    </div>
                </div>
                <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Sur la photo ci-dessous, avez-vous la priorité ?</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/vehicule4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Cédez le passage aux véhicules prioritaires en mission</small></p>
                    </div>
                </div>
                
                <p><b>Réponse : </b>Non, car la voiture de pompiers qui arrive de gauche s'apprête à tourner 
                à gauche et elle a le gyrophare allumé.</p>
                <h2 style="font-weight: bold;">Véhicules lents</h2>
                <p>Ce sont des véhicules à progression lente tels que les véhicules de nettoyage, de travaux. 
                    Ils circulent un peu plus à droite que les autres, raison pour laquelle vous pouvez les dépasser.</p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Lorsqu'ils sont en mission, leurs gyrophares orange sont allumés, 
                        mais ils ne sont pas prioritaires pour autant !</p>
                    </div>
                </div>
                <br>
                
                <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>En revanche, si vous tombez sur un camion qui transporte de la marchandise, 
                        vous devriez le laisser passer. Pourquoi ?</p>
                    </div>
                </div>
                <br>
                <p><b>Réponse : </b>Son gabarit fait qu'il peut avoir plus de difficultés à changer de direction ou à s'engager. 
                Il prend aussi plus de place pour manœuvrer.</p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Rappel : Vous pouvez dépasser un tracteur en franchissant la ligne de dissuasion à condition 
                        que les conditions soient bonnes (bonne visibilité). Vous n'avez pas le droit de dépasser un
                         tracteur si la ligne est continue. Les tracteurs peuvent rouler à 40 km/h maximum. 
                        S'ils tractent une remorque, alors leur vitesse est limitée à 25 km/h.</p>
                    </div>
                </div>
                <br>
                
                <h2 style="font-weight: bold;">Véhicules encombrants</h2>
                <p>Il s'agit des camions ou des véhicules qui transportent des matières dangereuses. 
                    Ils sont lourds et peu maniables. Il leur faut beaucoup d'espace.</p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Il gênent la visibilité à cause de leurs dimensions et il faut plus de temps pour les dépasser !</p>
                    </div>
                </div>
                <br>
                
                <p>Les remorques ou semi-remorques doivent avoir des catadioptres triangulaires. </p>
                <p>Leurs vitesses maximales sont indiquées à l'arrière du véhicule (stickers blancs comme sur la photo ci-dessous) :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/vehicule5.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Limitations de vitesse pour les véhicules encombrants </small></p>
                    </div>
                </div>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Sur autoroute, les poids lourds roulent à 90 km /h !</p>
                    </div>
                </div>
                <br>
                
                <p>Si vous vous retrouvez avec un poids lourd dans un espace bien limité, laissez-lui le temps et l'espace 
                    pour manœuvrer. Sur la photo ci-dessous, il ne faut pas que la voiture bleue s'engage avant que le 
                    camion tourne et la voiture verte devrait même reculer un peu ou serrer à droite. Vous voyez d'ailleurs le 
                    tracé de la trajectoire du poids lourd ; elle est large et s'étale sur la voie de la voiture verte :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/vehicule6.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Tenez compte du gabarit des véhicules lourds</small></p>
                    </div>
                </div>
                <br>
                
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Si un poids lourd se trouve sur la voie d'accélération au moment où vous passez sur votre voie de
                         droite, laissez-le s'insérer 
                        car les possibilités d'accélération lui sont limitées du fait de leur chargement.</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Taxi : un cas hybride</h2>
                <p>Il ne s'agit pas de véhicules de transport en commun, mais ils ont le privilège d'utiliser 
                    les voies de bus ! A Paris par exemple, la préfecture de police a pris des dispositions 
                    particulières pour faciliter la circulation des taxis à cause des contraintes liées à la 
                    profession de chauffeur professionnel. En effet, les taxis ont le droit d'emprunter les 
                    voies des bus, mais sous certaines conditions (adapter la vitesse, ne pas bloquer la circulation, etc).
                    Aussi, pour signaler une station de taxi, le code de la route a prévu ce panneau :</p>
                    <div class="row">
                        <div class="col-md-12" >
                        <div class="card" 
                        style="border: none; max-width: 100px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/vehicule7.jfif">
                            </div>
                        <p class="text-muted text-center"><small>Station de taxi</small></p>
                    </div>
                </div>
                <br>
                
                <h2 style="font-weight: bold;">Convois exceptionnels</h2>
                <p>Il s'agit d'un ou plusieurs véhicules escortés par des guideurs. Souvent, 
                    ce sont les motards qui ont un gyrophare orange allumé.</p>
                <p>Vous devez suivre leurs indications s'ils vous en donnent, mais ces véhicules 
                    ne bénéficient pas de facilités de passage.</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Si vous refusez de suivre leurs indications, vous pourrez payer une amende.</p>
                    </div>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Les véhicules d'intervention urgente sont prioritaires lorsqu'ils sont en mission (gyrophares bleus).</li>
                   <li>Les véhicules d'intervention urgente en mission ne respectent pas forcément la
                     signalisation ou les règles de circulation.</li>
                   <li>Avoir une bonne ouïe est donc très important dans la conduite.</li>
                   <li>Vous pouvez dépasser les véhicules lents, ils ne sont pas prioritaires.</li>
                   <li>Vous devez être patients avec les véhicules encombrants, car leurs manœuvres sont
                     au ralenti à cause de leur poids.</li>
                   <li>Les poids lourds sont plus difficilement dépassés que les voitures.</li>
                   <li>Les taxis peuvent emprunter les couloirs des autobus.</li>
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