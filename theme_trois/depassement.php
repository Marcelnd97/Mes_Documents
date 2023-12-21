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
    <title>Dépassements</title>
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
                <h1 style="font-weight: bold;"><b>Dépassements</b></h1>
                <br>
                <p>Étant donné qu'il s'agit des chaussées à sens unique, il est beaucoup plus pratique 
                    de dépasser les véhicules sur l'autoroute qu'en agglomération. 
                    En revanche, il faut que vous restiez vigilant car la vitesse est élevée.</p>
                <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Révisons les règles du dépassement. Mettez en ordre les actions à effectuer :</p>
                    <p>a) Mettez le clignotant gauche pour avertir de votre manœuvre ;</p>
                    <p>b) Assurez-vous que vous-mêmes n'êtes pas en train d'être dépassé en le vérifiant dans 
                        le rétroviseur intérieur et dans le rétroviseur extérieur gauche ;</p>
                    <p>c) Dès que vous apercevez l'avant du véhicule dans le rétroviseur intérieur, vous devez
                         vous rabattre (revenir sur la voie de départ sur laquelle vous circuliez) sans trop 
                         ralentir pour ne pas gêner la voiture dépassée ;</p>
                    <p>d) Assurez-vous d'avoir une bonne visibilité ;</p>
                    <p>e) Regardez souvent dans les rétroviseurs afin d'être informés au mieux de l'évolution 
                        de la situation et de l'intention des usagers qui circulent derrière vous ;</p>
                    <p>f) Déboîtez de façon progressive tout en respectant la distance entre les véhicules ;</p>
                    <p>g) Accélérez et maintenez cette accélération tout au long de la manœuvre afin d'occuper 
                        la voie de gauche le moins longtemps possible ;</p>
                    <p>h) Regardez directement en tournant la tête à gauche pour voir si aucun autre usager n'est
                         caché dans l'angle mort (en cas de plusieurs voies) ;</p>
                  </div>
                </div>
                <p><b>Réponse :</b>1D ; 2B ; 3E ; 4H ; 5A ; 6F ; 7G ; 8C.</p>
                <p><b>Précautions de dépassement sur autoroute</b></p>
                <p>Le danger vient de l'arrière. Donc pour dépasser sur l'autoroute, 
                    il faut être capable d'évaluer la vitesse d'approche d'un autre véhicule.</p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Il faut rouler à 80 km/h minimum dans la voie de gauche.
                    Autrement, restez sur la voie de droite !</p>
                    </div>
                </div>
                <p>Si jamais vous avez des limitations de vitesse qui sont inférieures à la vitesse
                     obligatoire, alors vous ne devez pas rouler plus vite, même si vous dépassez. 
                     Vous ne pouvez pas vous engager sur la file de gauche pour l'instant car un véhicule est en train 
                    de vous dépasser comme vous pouvez le voir dans votre rétroviseur extérieur.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/depasser1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Attention aux limitations de vitesse</small></p>
                    </div>
                </div>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Vous pouvez dépasser plusieurs véhicules à la fois.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/depasser2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Dépasser les camions d'un trait </small></p>
                    </div>
                </div>
                
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Si vous devez quitter une autoroute, ne vous lancez pas dans les dépassements ! 
                    Au contraire, vous devez rester sur la voie de droite et commencer 
                    à vous préparer à bifurquer.</p>
                    </div>
                </div>
                <p>Si un véhicule ne roule pas sur la bonne voie (il doit être sur la voie où vous vous trouvez 
                    actuellement - droite), il vous est interdit de le doubler par la droite. Ce serait dangereux 
                    si celui-ci venait se rabattre durant votre dépassement. 
                    Vous devez ralentir et attendre de pouvoir dépasser par la gauche.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card verglas" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/depasser3.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Dépassement sur l'autoroute</small></p>
                    </div>
                </div>
                
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Pour pouvoir dépasser un véhicule en toute sécurité, il faut s'assurer que ce soit possible.</li>
                    <li>Les dépassements ont lieu TOUJOURS par la gauche.</li>
                    <li>Si un véhicule ne respecte pas l'obligation de rouler 
                        minimum à 80 km/h et ne se trouve pas sur la voie de droite, ne jamais dépasser par la droite.</li>
                    <li>Vous pouvez dépasser plusieurs véhicules.</li>
                    <li>Vous pouvez dépasser les véhicules en respectant les limitations de vitesse.</li>
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