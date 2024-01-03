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
    <title>Entrer et sortir du véhicule</title>
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
                <h1 style="font-weight: bold;"><b>Entrer et sortir du véhicule</b></h1>
                <br>
                <h2 style="font-weight: bold;"><b>Repérez-vous</b></h2>
                <p>Vous avez compris qu'il est toujours plus judicieux de tout vérifier avant de monter dans la 
                    voiture que d'effectuer des vérifications lorsque vous êtes en train de conduire. 
                    Pour les trajets un peu plus longs, il est utile de vérifier :</p>
                <ol style="list-style-type: disc;">
                    <li>l'état des pneus ;</li>
                    <li>l'état de la carrosserie ;</li>
                    <li>la propreté des vitres et l'état des essuie-glaces (que je vous conseille de changer tous
                         les ans).</li>
                </ol>
                <p>Si vous allez conduire le véhicule d'un ami, il est préférable de vous y installer et d'étudier 
                    l'espace et les différentes commandes :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;">
                                <img src="../images/theme_sept/partir1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Variation des pictogrammes  </small></p>
                    </div>
                </div>
                <br>
                
                <p>La commande n°3 par exemple, représente le bouton warning actionné. Très souvent, 
                    ce pictogramme est représenté avec un autre triangle à l'intérieur du grand, 
                    à la place de l'image de la voiture.</p>
                <h2 style="font-weight: bold;"><b>Vérifiez les équipements</b></h2>
                <p>Assurez-vous d'avoir le gilet et le triangle retroréfléchissants. Si vous ne les 
                    avez pas, vous payerez une amende.</p>
                <p>Aussi, veillez à vérifier l'état des liquides.</p>
                <br>
                <div class="card question">
                <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Quels sont les liquides auxquels je me réfère ?</p>
                </div>
                </div>
                <br>
                <p><b>Répondre : </b>Niveau d'huile, niveau de liquide de refroidissement, carburant (bien sûr !), 
                lave-glace, liquide de frein..et même de l'eau à boire !</p>
                <p>Pensez aussi à préparer votre itinéraire. Si vous voyagez seuls, regarder la carte pendant la 
                    conduite n'est pas une bonne idée. Avoir un GPS, oui. Si vous voyagez accompagné, étudiez tout 
                    de même un peu votre itinéraire avant de partir. Si vous voyagez à l'étranger, n'oubliez pas de 
                    préparer tous les documents et équipements nécessaires.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Parfois les GPS vous proposeront des itinéraires les plus rapides, et non pas les plus simples.</p>
                    </div>
                </div>
                <br>
                <p><b>Équipements obligatoires</b></p>
                <p>Quelle que soit la longueur de votre trajet, vous devez toujours avoir sur vous :</p>
                <p>- un triangle de présignalisation ;</p>
                <p>- un gilet haute visibilité.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;">
                                <img src="../images/theme_sept/partir2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Equipement à avoir en voiture</small></p>
                    </div>
                </div>
                <br>
                 <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Depuis mai 2020, il n'est plus obligatoire d'avoir un éthylotest dans votre véhicule. 
                        Il reste très utile pour vous permettre de savoir si vous pouvez conduire après avoir consommé de l'alcool. 
                        Pensez qu'il a une durée de péremption d'environ 2 ans et qu'il est sensible au changement de température.</p>
                    </div>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Assurez-vous que vous avez les documents et les équipements obligatoires.</li>
                   <li>Il est fortement conseillé de vérifier la pression des pneus, l'état des essuie-glaces, 
                    le niveau des liquides.</li>
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