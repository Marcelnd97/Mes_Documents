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
    <title>Les bus</title>
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
                <h1 style="font-weight: bold;"><b>Les bus</b></h1>
                <br>
                <p>Comme vous le savez déjà, les bus ont leur propre voie de circulation et les lignes blanches 
                    discontinues délimitent leur voie de celle des voitures. Aussi, dans leur couloir de circulation est inscrit le mot "bus". Vous n'avez donc pas le droit d'emprunter cette voie,
                     sauf si un panneau vous y autorise. Autrement, vous risquez une amende.</p>
                <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Vous souvenez-vous de cette photo ?</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/bus1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voie de bus</small></p>
                    </div>
                </div>
                <p>J'espère que vous vous souvenez aussi des lignes jaunes en zigzag :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/bus2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Franchissement du zigzag jaune autorisé</small></p>
                    </div>
                </div>
                <p>Sur ces lignes jaunes, le passage vous est autorisé mais l'arrêt et le stationnement vous y sont interdits.</p>
                <p>Voici d'autres panneaux relatifs aux bus. A votre avis, que signifie l'avant-dernier ?</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/bus3.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Panneaux relatifs à la circulation des bus</small></p>
                    </div>
                </div>
                
                <p>1. Voie réservée aux véhicules des services réguliers de transports en commun</p>
                <p>2. Fin de voie réservée aux véhicules des services réguliers de transports en commun</p>
                <p>3. Arrêt d'autobus</p>
                <p>4. Je vous laisse encore réfléchir un peu, la réponse se trouve ci-dessous</p>
                <p>5. Accès interdit aux véhicules de transport en commun de personnes</p>
                <p>6. Traversée de voie de véhicules routiers des services réguliers de transport en commun (bus de ville)</p>
                <p><b>Réponse : </b>Le panneau 4 signifie que la voie prévue pour le sens unique est ouverte au bus dans 
                l'autre sens. La photo est peut-être plus parlante :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/bus4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Circulation des bus dans le sens contraire à la circulation normale </small></p>
                    </div>
                </div>
                
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>En ville, les bus sont prioritaires quand ils quittent leurs arrêts. 
                        Vous vous devez de leur faciliter le passage aux intersections et dans les rues étroites. 
                        Quand les bus sont à l'arrêt et que la ligne est discontinue, vous pouvez les dépasser, 
                        mais lorsqu'ils s'apprêtent à quitter l'arrêt, vous n'avez pas le droit d'entamer le processus 
                        de dépassement.Hors agglomération, on ne cède pas le passage à un bus qui veut s'insérer à la 
                        circulation car la vitesse est trop élevée et vous pourriez surprendre les usagers derrière vous. 
                        Il faut néanmoins rester vigilant à leurs manœuvres potentielles.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/bus5.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Merci de laisser la priorité au bus</small></p>
                    </div>
                </div>
                <p>Sachez que les bus peuvent avoir leurs propres feux. Bien entendu, 
                    en tant qu'automobiliste, vous n'êtes pas concerné. Exemple en image :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/bus6.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Feux des bus qui ne vous concernent pas </small></p>
                    </div>
                </div>
                
                <p>Un autre marquage au sol concernant les bus : le damier, 
                    qui signale le croisement d’une voie de bus et d’une voie de circulation normale.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/bus7.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Damier blanc des bus </small></p>
                    </div>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Vous n'êtes jamais seul sur la route, donc pour certaines catégories d'usagers vous serez informés
                     de leur présence ou de leur passage.</li>
                   <li>En ville, les bus sont prioritaires et les stickers collés sur leur carrosserie vous le confirment.</li>
                   <li>Vous pouvez dépasser un bus à l'arrêt alors que la ligne est discontinue, mais ne pouvez pas 
                    le faire lorsqu'il est engagé.</li>
                   <li>Vous ne pouvez pas dépasser un bus si la ligne est continue.</li>
                   <li>La voie de bus est aussi réservée aux véhicules du type taxi, ambulance, pompiers et police en mission.</li>
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