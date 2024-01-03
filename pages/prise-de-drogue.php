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
    <title>La prise de drogues</title>
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
                <h1 style="font-weight: bold;">La prise de drogues</h1>
                <br>
                <p>Que vous conduisiez ou pas, sachez qu'aucune drogue n'est inoffensive, donc n'en prenez pas !</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>
                    Leur usage en France est interdit.
                    </p>
                    </div>
                </div>
                <br>
                
                
                <p>Les drogues sont des substances psychoactives, ce qui signifie qu'elles modifient la façon de penser, 
                    de se sentir et de se comporter. Certaines drogues vont avoir un effet apaisant sur le système nerveux,
                    tandis que d'autres drogues vont susciter de l'euphorie et un surplus d'énergie. Dans tous les cas, 
                    la prise de drogue n'est pas compatible avec la conduite car cela entraîne des effets psychomoteurs très dangereux.</p>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Pensez au moins à 3 effets indésirables quelle que soit la drogue consommée.
                    </p>
                  </div>
                </div>
                <br> 
                <p><b>Réponse :</b>Avec un état psychique altéré, le conducteur n'est pas dans son assiette. 
                Il va multiplier les risques s'il est euphorique, être lent sur les décisions s'il est trop calme.
                 Tout comme pour la consommation d'alcool, 
                la réduction du champ visuel est présente, la mémoire immédiate diminue aussi.</p>   
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>La drogue a été impliquée dans 23 % des accidents mortels en 2018, selon O.N.I.S.R. 
                        Dans 9 cas sur 10, le produit stupéfiant consommé est du cannabis.</p>
                    </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/drogue1.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Cannabis et son dépistage</small></p>
                <p>La molécule principale du cannabis étant le T.H.C. (tétrahydrocannabinol), les tests salivaire 
                    et urinaire sont pratiqués pour le dépistage. S'il est positif (il n'y a pas de limite, on cherche 
                    juste à detétecter sa présence), une prise de sang confirmera incontestablement la présence de la drogue.</p>
                <p>Tout comme pour l'alcool, en cas d'accident corporel vous serez soumis au dépistage des 
                    stupéfiants (drogues).</p>
                <div class="card" style="background-color: #a1ee90;">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Si vous avez mélangé l'alcool et la drogue, les sanctions sont plus dures. L'amende peut atteindre 9000 euros 
                        accompagnée d'une peine d'emprisonnement jusqu'à 3 ans. Les effets de la drogue et/ou de l'alcool peuvent 
                        altérer votre comportement et ainsi provoquer des accidents mortels.</p>
                    </div>
                </div>
                <br>
                <p>Règle absolue : ne prenez pas le volant si jamais vous vous retrouvez alcoolisé voire drogué.</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Il faut en moyenne 10h pour éliminer toute trace de consommation d'un joint dans la salive. 
                        Et 3 jours pour l'éliminer de l'urine. </p>
                    </div>
                </div>
                
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>La limite légale pour la drogue n'existe pas, car sa consommation est illégale en France.</li>
                    <li>Les amendes en cas d'infraction peuvent aller de 135 euros à 9000 euros et certaines peuvent être 
                        accompagnées d'une peine d'emprisonnement.</li>
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