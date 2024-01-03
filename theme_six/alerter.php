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
    <title>Alerter ou faire alerter</title>
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
                <h1 style="font-weight: bold;"><b>Alerter ou faire alerter</b></h1>
                <br>
                <p>Après avoir balisé le lieu de l'accident et évalué l'état des victimes, il est temps de 
                    prévenir les secours.</p>
                <p>Pour rappel, voici la liste des numéros à appeler en cas de besoin:</p>
                <ol style="list-style-type: disc;">
                    <li>Ambulances (SAMU ou SMUR) : 15</li>
                    <li>Police ou gendarmerie : 17</li>
                    <li>Pompiers : 18</li>
                    <li>Numéro unique, même si vous n'avez pas de réseau : 112</li>
               </ol>
               <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Vous pouvez aussi utiliser l'application de l'autoroute depuis votre smartphone 
                        ou la borne d'appel d'urgence.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_six/alerter1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Intervention des pompiers lors d'un 
                             de voiture </small></p>
                    </div>
                </div>
                
                <p>Si vous devez appeler les secours, on va vous demander un certain nombre d'informations 
                    qu'il faudra anticiper pour pouvoir bien les renseigner :</p>
                <ol style="list-style-type: disc;">
                    <li>vos coordonnées car c'est vous qui alertez ;</li>
                    <li>la nature de l'accident ;</li>
                    <li>l'heure de l'accident ;</li>
                    <li>lieu précis de l'accident (pensez à vous servir des bornes sur les routes ou autoroutes,
                         par exemple : km 12 de l'autoroute A71 dans le sens Bourges - Vichy) ;</li>
                    <li>nombre de véhicules, leur couleur et marque si possible ;</li>
                    <li>nombre de victimes et leurs blessures.</li>
                </ol>
                <p>Si la collision a eu lieu avec un véhicule comportant des numéros sur une plaque orange, on vous
                     demandera de renseigner les informations de la plaque pour connaître les risques d'incendie
                      ou de toxicité par exemple.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_six/alerter2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Véhicule transportant des matières dangereuses 
                            pour l'environnement</small></p>
                    </div>
                </div>
                <p>En détail :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_six/alerter3.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Détail sur la matière transportée</small></p>
                    </div>
                </div>
                <p>1. Le numéro 30 de la plaque orange renseigne le type de danger 
                    et le numéro 1202 la nature du danger ou code matière.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Les numéros du dessus qui commencent :</p>
                    <ol style="list-style-type: disc;">
                        <li>par un 1 sont des matières et objets explosibles ;</li>
                        <li>par un 2 sont des gaz comprimés ;</li>
                        <li>par un 3 des liquides inflammables ;</li>
                        <li>par un 4 des solides inflammables ;</li>
                        <li>par un 5 des comburants ou peroxydes ;</li>
                        <li>par un 6 des matières toxiques ;</li>
                        <li>par un 7 des matières radioactives ;</li>
                        <li>par un 8 des matières corrosives ;</li>
                        <li>par un 9 des dangers divers.</li>
                    </ol>
                    </div>
                </div>
                <br>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Dans la seconde partie de la plaque (2e ligne), on trouve le code matière qui est le numéro 
                        ONU sous lequel est référencé le type de produit transporté (près de 3000 numéros existants). 
                        Il s'agit d'un numéro composé
                         de 4 chiffres qui permet d’identifier la matière concernée. <b>Exemple du n° 1202 = gasoil</b></p>
                    </div>
                </div>
                <br>
                
                <p>2. Le symbole de danger rouge démontre que c'est une matière inflammable, tandis que le blanc
                     informe que la matière est très polluante.</p>
                <p><b>E-call</b></p>
                <p>Certaines voitures disposent de cette option et il s'agit d'un dispositif d'appel d'urgence 
                    qui permet d'alerter manuellement ou automatiquement via des capteurs situés dans les air-bags 
                    les services de secours en cas d'accident.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Le véhicule est géolocalisé et donne des informations aux secours sur le type de véhicule, 
                        le nombre de passagers, et même le type de carburant utilisé !</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_six/alerter4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>E-call</small></p>
                    </div>
                </div>
                <br>

                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Après avoir porté le secours minimum, vous devez absolument prévenir les secours officiels.</li>
                   <li>Préparez-vous à répondre à des questions vous concernant, ainsi qu'aux questions 
                    relatives au contexte de l'accident.</li>
                   <li>Si la collision a lieu avec un véhicule qui transporte des matières dangereuses, 
                    les informations de la plaque orange peuvent aider les secouristes à mieux préparer leur intervention.</li>
                   <li>E-call est une nouvelle option présente dans les nouvelles voitures permettant de géolocaliser la voiture 
                    accidentée et même de donner des informations sur le nombre de victimes ou le type de carburant 
                    utilisé par le véhicule en question.</li>
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