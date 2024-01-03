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
    <title>Secourir</title>
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
                <h1 style="font-weight: bold;"><b>Secourir</b></h1>
                <br>
                <div class="card question">
                <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Vous vous rappelez comment savoir si la victime est consciente, si elle respire 
                        et a le cœur qui bat ?</p>
                </div>
                </div>
                <br>
                <p> Voici la réponse avec les mots clés : questions - objet/narine - pouls.</p>
                <p> Secourir c'est porter assistance aux victimes et aussi les réconforter. Si vous ne savez 
                    absolument rien faire, voici ce qu'il ne faut pas faire pour ne pas empirer l'état des victimes :</p>
                	<br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <ol style="list-style-type: disc;">
                        <li>Ne déplacez pas les blessés, sauf s'il y a un risque d'incendie ou de noyade.</li>
                        <li>Ne retirez pas le casque d'un motard !</li>
                    </ol>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Position latérale de sécurité</h2>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Si le blessé se trouve sur la chaussée et qu'il est sur le dos, vous pouvez le placer dans
                         la position latérale de sécurité. Cela pourrait lui sauver la vie.</p>
                    </div>
                </div>
                <br>
                <p>Cette technique sert à maintenir le passage de l'air jusqu'aux poumons. Pour ce faire, 
                    on place la victime sur le côté, en chien de fusil, en maintenant sa tête alignée dans 
                    l'axe du dos, la bouche ouverte ; 
                    le corps est horizontal et tourné sur le côté (voir photo ci-dessous) :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_six/secoure1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Position latérale de sécurité </small></p>
                    </div>
                </div>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Si vous disposez d'une couverture isothermique, couvrez les victimes
                         ! Même s'il fait 40°C, les blessés
                         peuvent avoir froid car leur corps est en état de choc !</p>
                    </div>
                </div>
                <br>
               
                <h2 style="font-weight: bold">Hémorragies à soigner</h2>
                <p>On peut distinguer trois sous-catégories d'hémorragies :</p>
                <ol style="list-style-type: disc;">
                    <li>l'hémorragie artérielle (le sang est rouge vermeil et il gicle par saccades) ;</li>
                    <li>l'hémorragie veineuse (le sang est rouge sombre et il s'écoule en nappe) ;</li>
                    <li>l'hémorragie capillaire (qui correspond à un saignement de faible intensité et sans gravité,
                         tel que celui provoqué par une coupure faite en se rasant).</li>
                </ol>
                <p>Les saignements internes sont invisibles, mais vous allez pouvoir agir en cas de saignements
                 externes. Vous pourrez au moins les réduire, et c'est déjà une bonne chose à faire. Vous pouvez 
                 sauver des vies, car si la victime perd plus d'un tiers de son sang, elle va périr.</p>
                <p><b>Compression manuelle</b></p>
                <p>Arrêter les saignements peut se faire à plusieurs endroits du corps ; cela dépend 
                lequel vous est accessible (si vous ne déplacez pas la victime). Il faut donc appuyer
                 sur l'artère soit avec un ou plusieurs doigts ou le poing entier.</p>
                 <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Si la blessure a lieu sur les bras ou les jambes, il faut appuyer entre la blessure et le cœur.
                         Si la blessure a lieu sur la tête ou sur le cou, il faut appuyer en bas de la blessure.</p>
                    </div>
                </div>
                <br>
                 
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_six/secoure2.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Comment arrêter les saignements</small></p>
                    </div>
                </div>
                
                <p><b>Pansement compressif</b></p>
                <p>Si la plaie est très large et impossible à comprimer avec la main, installez d'emblée un 
                    large pansement compressif. N'essayez pas d'enlever un corps étranger profondément enfoncé
                     dans une plaie car cela risque de déclencher une hémorragie très importante. Il ne sera
                      enlevé qu'en salle d'opération.</p>
                <p>Si vous ne disposez pas de pansement compressif, alors vous pouvez utiliser un linge propre
                     (jamais d'ouate) que vous placerez entre la plaie et votre main. Ce linge n'est pas stérile,
                      mais l'arrêt de l'hémorragie prime sur les risques d'infection.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_six/secoure3.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Panser une plaie  </small></p>
                    </div>
                </div>
                
                <p><b>La loi</b></p>
                <ol style="list-style-type: disc;">
                    <li>Article 223-6 du Code pénal :</li>
                </ol>
                <p>Toute personne qui ne porte pas secours à une personne en danger, soit en agissant 
                    elle-même, soit en prévenant les secours, risque une peine de 5 ans d'emprisonnement 
                    et une amende de 75 000 euros.</p>
                <ol style="list-style-type: disc;">
                    <li>Article 434-10 du Code pénal :</li>
                </ol>
                <p>Tout conducteur impliqué dans un accident et qui ne s'arrête pas commet un délit de 
                    fuite et est puni de 3 ans d'emprisonnement et de 75 000 euros d'amende maximum.</p>
                <h2 style="font-weight: bold;">Défibrillateur</h2>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p> Vous pouvez utiliser cet appareil sans être formés, mais seulement si la victime est au sol !</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_six/secoure4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Réanimation grâce au défibrillateur</small></p>
                    </div>
                </div>
                <p>Si vous avez un défibrillateur à portée de main et qu'une victime demande assistance,
                     vous pouvez agir, vous ne risquez pas de vous tromper.</p>
                <p>Une fois que vous allumerez l'appareil, vous n'aurez qu'à suivre les instructions données.
                     Le message concernera la démarche à suivre quant aux électrodes à placer sur le corps de 
                     la victime. C'est l'appareil qui fait lui-même le diagnostic et délivre le choc si c'est 
                     nécessaire.</p>
                <br>
                

                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Vous pouvez placer la victime en position latérale de sécurité pour qu'elle ne s'asphyxie pas.</li>
                   <li>Vous pouvez arrêter l'hémorragie externe à l'aide de vos doigts ou d'un pansement compressif.</li>
                   <li>Si vous ne portez pas secours ou n'avertissez pas les autorités de l'accident, vous risquez 
                    de payer une amende et d'être emprisonnés ;
                     de même si vous quittez un lieu d'accident (ce qui est un délit de fuite).</li>
                   <li>Si vous avez la possibilité d'utiliser un défibrillateur sur une victime au sol, n'hésitez
                     pas à le faire car vous ne risquez pas de vous tromper !</li>
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