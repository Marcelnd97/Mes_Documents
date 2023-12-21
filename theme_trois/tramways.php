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
    <title>Les tramways</title>
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
                <h1 style="font-weight: bold;"><b>Les tramways</b></h1>
                <br>
                <h2 style="font-weight: bold;">Présence de tramways</h2>
                <p>Quel que soit le panneau que vous allez rencontrer, il est primordial de rester vigilant, 
                    car les tramways ont la priorité :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/tramways1.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Panneaux relatifs au tramway</small></p>
                    </div>
                </div>

                <p>1. Traversée de voies de tramway</p>
                <p>2. Voie réservée aux tramways</p>
                <p>3. Fin de voie réservée aux tramways</p>
                <p>4. Passage pour tramways</p>
                <p>5. Traversée de tramways</p>
                <p>Si vous devez traverser la voie de tramway, un feu rouge clignote aux intersections 
                    vous annonçant son arrivée :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 150px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/tramways2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Feu annonçant le passage d'un tramway</small></p>
                    </div>
                </div>
                
                <p>Vous devez vous arrêter et repartir seulement lorsque le feu est éteint.</p>
                
                
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                        <p>Attention au tramway venant de l'autre sens, il peut en cacher un autre !</p>
                    </div>
                </div>
                <p>Les tramways sont prioritaires sur tous les autres usagers. Toutefois, 
                    ils sont obligés de respecter les feux les concernant, les signaux des agents 
                    et l'arrêt au signal Stop.</p>
                    <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Aussi, n'oubliez pas que les passages à niveau peuvent réguler la circulation des tramways !</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Tramways et priorités</h2>
                <p>Les tramways doivent respecter la signalisation et céder le passage si la signalisation 
                    les y oblige :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/tramways3.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Le tramways n'a pas la priorité </small></p>
                    </div>
                </div>
                <p>En revanche, en l'absence de signalisation, ils ont la priorité, comme sur la photo ci-dessous :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/tramways4.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Le tramway est prioritaire en absence de signalisation</small></p>
                    </div>
                </div>
                
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                        <p>Si vous ne cédez pas le passage à un tramway, vous pourrez payer une amende
                             et aussi avoir un accident !</p>
                    </div>
                </div>
                <br>
                 <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Dans le cas un peu plus complexe, comme sur le schéma ci-dessous, que remarquez-vous 
                        par rapport au respect de la signalisation des véhicules prioritaires ?</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/tramways5.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Priorités dans les cas un peu plus complexes </small></p>
                    </div>
                </div>
                <p><b>Réponse : </b>Le véhicule de police peut franchir le
                 panneau Stop car il est en mission. Le tramway et la voiture doivent lui Céder le passage. </p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                        <p>Si un deux-roues passe sur les rails d'un tramway à une vitesse élevée, il risque de chuter !
                             Cela peut aussi lui arriver s'il pleut. En effet, 
                            le changement de revêtement provoque facilement la perte d'adhérence. Soyez vigilants dans ces situations.</p>
                    </div>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>La vigilance est importante en présence de tramways dans votre environnement.</li>
                   <li>En l'absence de signalisation, le tramway a la priorité.</li>
                   <li>En présence des véhicules prioritaires (police en mission), le tramway n'a pas la priorité.</li>
                   <li>Vous pouvez dépasser un tramway par la droite.</li>
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