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
    <title>La prise de médicaments</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">
     <!--L'en-tête de la page-->
     <?php
        include("../header/header.php")
     ?>
    <br><br><br>
    <section>
      <div class="container">
        <!-- Content here -->
        <div class="row">
            <div class="col-md-10" style="padding-left: 25%;">
                <h1 style="font-weight: bold;">La prise de médicaments</h1>
                <br>
                <p>Que votre prise de médicaments soit récente ou de longue durée, il ne faut surtout pas négliger
                     ses effets. Je ne parle pas de somnifères, car vous imaginez bien que leur consommation est 
                     complètement incompatible avec la conduite.</p>
                <p>Je vous parle surtout des médicaments que vous pensez inoffensifs, mais qui en réalité peuvent 
                    vous créer des soucis si vous ne consultez pas leur notice ou leur boîte. Voici quelques
                     exemples de médicaments qu'on ne soupçonne pas d'être dangereux ou 
                     incompatibles avec la conduite  :</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>un sirop contre la toux provoque de la somnolence et augmente le temps de réaction ;</li>
                    <li>un antalgique avec de la codéine peut aussi provoquer la somnolence ;</li>
                    <li>un antihistaminique peut également provoquer de la gêne lors de la conduite.</li>
                </ol>
                <p>Pour tous les autres médicaments, je vous conseille de bien vérifier
                     le pictogramme qui se trouve sur leur boîte :</p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/medicament1.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Pictogrammes à vérifier si vous prenez des médicaments</small></p>
                <p>Le pictogramme jaune, de niveau n°1 vous invite à lire la notice avant de conduire. 
                    Le médicament n'est donc pas à négliger, soyez prudents.</p>
                <p>Le pictogramme orange, de niveau n°2 vous invite à demander avis à votre médecin ou pharmacien. 
                    Soyez très prudents.</p>
                <p>Le pictogramme rouge, de niveau n°3 vous interdit de conduire et vous invite à demander conseil
                     à un médecin. Ne conduisez donc pas, c'est très dangereux.</p>
                <div class="card" style="background-color: #a1ee90;">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Les médicaments comportant ces pictogrammes ne sont pas tous
                         délivrés sur ordonnance. Raison de plus pour redoubler de vigilance !</p>
                    </div>
                </div>
                <br>
                <div class="card" style="background-color: #a1ee90;">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Associer l'alcool/médicaments et/ou drogue amplifie considérablement les effets néfastes !</p>
                    </div>
                </div>
                <br>
                <br>
                
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Les médicaments agissent sur le système nerveux et peuvent altérer votre vigilance, 
                        augmenter la somnolence.</li>
                    <li>Méfiez-vous des médicaments qui semblent inoffensifs - consultez la notice !</li>
                    <li>Les pictogrammes de différentes couleurs vous aideront à identifier les médicaments 
                        auxquels il faut faire attention.</li>
                    <li>Mélanger des médicaments à l'alcool ou à la drogue augmente les effets néfastes.</li>
                </ol>
                <br>              
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