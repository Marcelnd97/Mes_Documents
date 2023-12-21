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
    <title>Vitesse et distance de sécurité</title>
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
                <h1 style="font-weight: bold;"><b>Vitesse et distance de sécurité</b></h1>
                <br>
                <p>Voici un petit récapitulatif pour ne pas oublier les conducteurs novices :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/vitesse1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Limitations de vitesse sur autoroute</small></p>
                    </div>
                </div>
                <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>En revanche, si vous voyez ce panneau bleu, que devez-vous comprendre ? 
                        Que veulent dire sa forme et sa couleur ?</p>
                  </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 100px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/vitesse2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Vitesse minimale sur la voie de gauche </small></p>
                    </div>
                </div>
                
                <p><b>Réponse : </b>Il s'agit d'un panneau d'obligation et ici, c'est le cas de la vitesse minimum 
                à respecter. En effet, sur la voie de gauche d'une autoroute, 
                la vitesse minimum obligatoire est de 80 km/h dans des conditions normales de circulation.</p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Ces panneaux sont généralement placés sur les voies à fort trafic comme les autoroutes, 
                    les sorties d'aéroport etc... sur lesquelles tout ralentissement 
                    pourrait provoquer des bouchons.</p>
                    </div>
                </div>
                <h2 style="font-weight: bold;">Freinage et distances de sécurité</h2>
                <p>Encore une fois, comme les vitesses sont plus importantes, en cas de besoin de freinage, 
                    vous ne pouvez pas vous attendre à vous arrêter net.</p>
                <div class="card question">
                    <div class="card-body">
                        <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                        <p>Lorsque vous roulez à 130 km/h, quelle est la distance d'arrêt, 
                        vous souvenez-vous du calcul ?</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/vitesse3.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Freinage à 130 km </small></p>
                    </div>
                </div>
                
                <p><b>Réponse :</b> Il faut multiplier le chiffre des dizaines de la vitesse par lui-même pour
                 obtenir la distance nécessaire pour s'arrêter. Si vous roulez donc à 130 km/h, il faut faire le
                  calcul suivant : 13 x 13 = 169.</p>
                <p>La distance de sécurité sur autoroute, lorsque des véhicules ou des ensembles des véhicules 
                    se suivent à la même vitesse, doit être au minimum de 90 m. Pour estimer la distance de sécurité,
                     il faut multiplier le chiffre des dizaines par 6. Donc cela donne 13 x 6 = 78 m.</p>
                <div class="card question">
                    <div class="card-body">
                        <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                        <p>Astuce : Sur autoroute, vous pouvez évaluer les distances en prenant comme repères les 
                            lignes de la bande d'arrêt d'urgence. Vous rappelez-vous pourquoi ?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/vitesse4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Calcul simple des distances de sécurité sur autoroute</small></p>
                    </div>
                </div>
                
                <p><b>Réponse :</b> Selon ces panneaux, 1 trait correspond au danger, mais pas 2. 
                Si vous vous souvenez bien des dimensions des lignes, 
                vous comprendrez pourquoi. Si vous ne vous rappelez pas, voici un petit indice :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/vitesse5.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Bande d'arrêt d'urgence sur autoroute </small></p>
                    </div>
                </div>
                <p> Le calcul est donc simple : il faut ajouter 2 lignes (39 m x 2) 
                    à la distance entre elles (13m) et ça donne 91 m.</p>
                <h2 style="font-weight: bold;">Pourquoi prendre l'autoroute ? </h2>
                <div class="card question">
                    <div class="card-body">
                        <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                        <p>A votre avis, quelle est la différence entre la route nationale et 
                        l'autoroute pour atteindre la même destination ?</p>
                    </div>
                </div>
                <p>Petit indice : Le temps, c'est de l'argent.</p>
                <p><b>Réponse :</b>Comme le temps c'est de l'argent, il faut choisir son camp. 
                L'autoroute fait gagner du temps, car vous ne passez pas par toutes les villes ou villages 
                sur le chemin. En revanche, vous payez le péage. C'est comme un train direct 
                (par exemple un TGV qui est plus cher) par rapport à un train qui s'arrête dans toutes les gares 
                (et serait bon marché). Les routes sont moins chères pour deux raisons : il n'y a pas de péage, 
                puis on y roule moins vite et donc on consomme moins de carburant. Alors vous pouvez toujours 
                décider si vous souhaitez arriver plus vite à destination ou pas. </p>
                <p>Je ne suis pas sûre qu'il s'agisse d'un comportement de conducteur radin ou pas. 
                    Faire toute la France en période de vacances sur les routes nationales, c'est courageux !</p>
                
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>La vitesse maximale autorisée est de 130 km/h pour les conducteurs 
                        confirmés et de 110 km/h pour les conducteurs novices.</li>
                    <li>Par temps de pluie, tout le monde doit rouler à maximum 110 km/h.</li>
                    <li>Les distances de sécurité sont à calculer à partir des lignes de rive.</li>
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