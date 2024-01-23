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
    <title>Verglas</title>
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
                <h1 style="font-weight: bold;"><b>Verglas</b></h1>
                <br>
                <p>Ce petit diablotin qui vous guette lorsque vous ne vous y attendez pas du tout, 
                    ce n'est rien d'autre que le verglas.</p>
                <p>Il est moins fréquent en agglomération, mais si l'hiver est rude, il ne faut pas 
                    le négliger! Il peut se former en plaques, donc il ne va pas couvrir la totalité de 
                    la route. S'il y en a vraiment beaucoup et que l'adhérence risque d'être quasiment nulle, 
                    il faut s'abstenir de conduire.</p>
                    <br>
                <div class="col">
                    <div class="row">
                    <div class="col-md-12 text-center">
                    <img src="../images/theme_trois/verglas1.jpg" width="250px">
                    </div>
                    </div>
                </div>
                <p class="text-muted text-center"><small>Verglas</small></p>
                <p>Si vous devez sortir et prendre la voiture, voici quelques conseils de conduite :</p>
                <ol>
                    <li>conduisez avec souplesse en étant doux avec le volant ;</li>
                    <li>si vous devez accélérer, il faut le faire doucement pour une vitesse réduite ;</li>
                    <li>ne pilez surtout pas, c'est très dangereux ! Vous risquez de faire tourner la voiture entre 180° et 720°
                        (tourner sur vous-même plusieurs fois) et finir je ne sais où ! 
                        Il faut ralentir progressivement à l'avance, en lâchant progressivement l'accélérateur ;</li>
                        <li>les pneus spéciaux sont conseillés ; ils sont obligatoires seulement si un panonceau vous le précise.</li>
                </ol>
                <p>Par temps de neige ou de verglas, vous pouvez utiliser des pneus à crampons (avec des pointes). 
                    Mais attention, vous ne pouvez 
                    les utiliser que le samedi précédent le 11 novembre au dernier dimanche de mars de l'année suivante.</p>
                <div class="card senscirc">
                    <img src="../images/theme_trois/verglas2.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Calendrier des restrictions d'utilisation des pneus à crampons</small></p>
                <p>Et lorsque vous les utilisez, vous devez apposer le disque spécifique sur l'arrière gauche de votre véhicule. 
                    De cette façon, vous prévenez les autres usagers de cette utilisation. 
                    Avec cet équipement vous ne devez pas dépasser 90 km/h.</p>
                <div class="row">
                    <div class="col-md-12" >
                            <div class="card verglas" 
                                     style="border: none; max-width: 300px; 
                                     margin: 100px auto; border: 2px solid chocolate; 
                                     margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_trois/verglas3.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Disque de pneus à crampons</small></p>
                
                    </div>
                </div>
                
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Le freinage sur le verglas doit être subtil et doux pour ne pas finir dans le décor.</li>
                    <li>Conduisez en souplesse et pas de gestes brusques.</li>
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