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
    <title>L'alcool</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body class="codebody">
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
                <h1 style="font-weight: bold;">L'alcool</h1>
                <br>
                <p>Les boissons alcoolisées représentent un vrai danger pour tout type de conducteur, 
                    qu'il soit novice ou confirmé.</p>
                <p>L'alcool est la seconde cause d'accident mortels (moins de 30%) après la vitesse.
                     85% des accidents mortels liés à l'alcool sont dus à des buveurs occasionnels et 
                     principalement le soir et week-end. La principale tranche d'âge concernée est les 18-24 ans. 
                     En effet, il représentent un quart des accidents mortels. Tous les ans, plus de 1000 vies 
                     sont perdus à cause de l'alcool au volant. Désigner un capitaine de soirée est simple, 
                     gratuit, rassurant et permet de sauver de nombreuses vies !</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>La consommation identique pour 2 personnes à gabarit différent peut avoir
                         des conséquences inégales. </p>
                    </div>
                </div>
                <br>
                
                <P>Un conducteur qui a consommé de l'alcool est un conducteur dont l'état physique et psychique a changé,
                     ce qui n'est pas du tout compatible avec la conduite :</P>
                <ol style="list-style-type: disc; margin-left: 10;">
                    <li>les gestes peuvent devenir mal coordonnés, plus brutaux, moins précis, 
                        moins rapides et la personne peut présenter des troubles d'équilibre ;</li>
                    <li>les perceptions sont altérées et la vigilance diminuée : le champ visuel est réduit, 
                        l'audition et la perception des contrastes sont moins bonnes (comme une diminution de 
                        la sensibilité à la couleur rouge, etc), et la sensibilité à l'éblouissement est plus
                         importante.</li>
                </ol>
                <p>L'état alcoolisé, même s'il ne semble pas important, ralentit le cerveau dans ses analyses. 
                    Une mauvaise estimation des distances et des vitesses entraîne une diminution des capacités 
                    de choix et de raisonnement et peut provoquer un allongement du temps de réaction. Le danger peut être sous-estimé, 
                    ce qui peut donner lieu à une plus grande prise de risque et le sentiment de toute-puissance. </p>
                    <p>Les risques d'accident mortel varient selon le taux d'alcool dans le sang. 
                    Ainsi les risques d'accidents mortels sont multipliés :</p>
                <ol style="list-style-type: disc; margin-left: 10;">
                    <li>par 2 avec 0,5 g/l de sang,</li>
                    <li>par 10 avec 0,8 g/l de sang,</li>
                    <li>et 35 avec 1,2 g/l de sang.</li>
                </ol>
                
                <p>Il y a deux façons de parler du taux d'alcool : en g/l de sang, et en mg/l d'air expiré.</p>
                <p>Lors d'un contrôle routier, les agents vous font souffler dans un éthylotest. Si le résultat 
                    affiche "positif", vous devrez souffler dans un éthylomètre. Le résultat s'exprime alors en 
                    "mg/l d'air expiré" (puisque vous soufflez). Si le résultat indique que votre taux d'alcool 
                    est supérieur au taux maximal autorisé, les agents vous feront faire une prise de sang 
                    (par un professionnel de la santé). Le résultat de celle-ci s'exprime en "g/l de sang".</p>
                <p>Dès 0,50 g/l de sang (prise de sang) vous êtes en infraction, ce qui correspond à 0,25 mg/l 
                    d'air expiré (éthylomètre).</p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/alcool1.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Effet d'alcool sur la vision</small></p>   
                <div class="card" style="background-color: #a1ee90;">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Alcool mélangé avec les médicaments est une bombe à retardement. Mon conseil : 
                        n'en consommez pas, mais si jamais vous en avez consommé, ne conduisez surtout pas !</p>
                    </div>
                </div>
                <br>
                
                
                <p>Il en est de même pour le mélange alcool et drogues. Notez que la polyconsommation 
                    (alcool et cannabis) multiplie le risque d'accident mortel par 29 (selon les dernières statistiques).</p>
                <h3 style="font-weight: bold;">Dosage et limites légales </h3>
                <p>Les verres servis dans les cafés et restaurants contiennent environ 10 g d'alcool 
                    pur quelle que soit la boisson.</p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/alcool2.jpg" height="350px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>10 g d'alcool quel que soit le verre</small></p>   
                   
                  
                <div class="card" style="background-color: #a1ee90;">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Quand les boissons alcoolisées sont servies à domicile, les doses d'alcool peuvent varier.</p>
                    </div>
                </div>
                <br>
                <p>Un verre de bière, de vin, de pastis ou de whiskey n'est pas servi dans le même type de verre. 
                    Certes, il y a plus de bière dans un verre à bière que de whiskey dans un verre à whiskey mais 
                    la concentration d'alcool est différente. 
                    Par exemple 10 g d'alcool correspond à 3 cl de whiskey ou 25 cl de bière.</p>
                <p>En moyenne, un verre fait monter l'alcoolémie de 0,2 à 0,25 g/l de sang. 
                    Comme je le disais tout à l'heure, cela peut varier selon le gabarit de la personne et surtout si 
                    elle consomme la boisson à jeun ou pas.</p>
                <h3 style="font-weight: bold;">Mesure de l'alcoolémie </h3>
                <p>L'alcoolémie est la quantité d'alcool présente dans 1l de sang. Elle se mesure :</p>
                <ol style="list-style-type: disc; margin-left: 10;">
                    <li>en grammes d'alcool par litre de sang ou</li>
                    <li>en milligrammes d'alcool par litre d'air expiré.</li>
                </ol>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/alcool3.jpg" height="400px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Nombres de verres autorisés et interdits </small></p> 
                <p><b><em>Pour les conducteurs en période probatoire (3 ans normalement, ou 2 ans pour les personnes issues 
                    de la conduite accompagnée), la limite légale étant fixée à 0,2 g / l de sang, 
                    il est fortement déconseillé de boire ne serait-ce qu'un seul verre. Permis probatoire = 0 
                    verre d'alcool.</em></b></p>
                <div class="card" style="background-color: #a1ee90;">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Attention, le taux d’alcool dans le sang continue à monter pendant 15 à 30 minutes 
                        après le dernier verre si l’on est à jeun, et pendant 30 à 60 minutes si l’on a mangé.</p>
                    </div>
                </div>
                <br>
                <p>Avant de prendre la voiture, ne cherchez pas à boire de l'eau pour "diluer" l'alcool, 
                     à manger sur le pouce en voulant susciter l'effet éponge. 
                    Les bonbons à la menthe ou le café salé ne vous aideront pas non plus.</p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/al.jfif" height="350px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Taux d'alcoolémie après 2 verres d'alcool à jeun</small></p>
                
                <p>A chaque verre consommé, votre taux d'alcool augmente. Et votre organisme (principalement le foie)
                     travaille pour éliminer cet alcool présent dans votre sang. Le pic d'alcoolémie est le moment où 
                     vous atteignez le taux maximal (visible sur le pic des courbes de ce graphique). Vous pouvez aussi 
                     voir qu'un homme et une femme n'ont pas les mêmes rythmes d'absorption et d'élimination de l'alcool.
                      Ceci est lié au métabolisme qui est différent selon les sexes. Cela varie aussi selon le poids du
                       consommateur. Vous pouvez aussi voir 
                    que le taux d'alcool monte très rapidement et qu'à l'inverse, l'élimination est beaucoup plus lente.</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Un verre d'alcool donne un taux de 0,25 g/l de sang. Et on élimine en moyenne 0,10 g/l par heure. 
                        Il faut donc environ 2h30 au foie pour éliminer un verre d'alcool dans le sang. Les effets de l'alcool 
                        se font sentir dès le premier verre. 
                        Pour réduire les risques en conduite, il est donc conseillé d'attendre au moins 2 heures avant de conduire.</p>
                    </div>
                </div>
                <br>
                <p>Bref, vous ne pouvez pas accélérer ce processus ! Donc si vous vous faites contrôler par la police, 
                    inutile de nier la réalité, ou de mentir aux forces de l'ordre...Les éthylotests révèlent
                     systématiquement la réalité sur votre consommation d'alcool. </p>
                <p>Sachez qu'en cas d'accident corporel vous serez automatiquement soumis au contrôle d'alcoolémie.</p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/alcool4.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Éthylotest chimique</small></p>
                
                <p>L’éthylotest chimique contient un ballon dans lequel vous devez souffler. Si vous avez bu de l'alcool,
                     les effluves sortiront par votre œsophage et coloreront le réactif jaune en vert. Si le changement de 
                     couleur atteint le repère, le test est positif. </p>
                <p>L'éthylotest électronique est un petit appareil digital qui donne un résultat chiffré qui ne semble pas
                     être très précis. L'appareil qui semble être le plus précis est l'éthylomètre (voir image ci-dessous), 
                     à condition que le prévenu n'ait ni bu, ni mangé, ni fumé de cigarette dans la demi-heure précédant le test.</p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/alcool5.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Ethylomètre</small></p>
                <p>Si un accident a eu lieu et que le conducteur est dans l'incapacité de souffler, 
                    une prise de sang est alors effectuée. C'est le seul témoin qui donne une mesure incontestable.</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Depuis mai 2020, l'éthylotest dans votre véhicule n'est plus obligatoire. 
                        Mais il reste très utile pour vous permettre de dire si vous pouvez conduire ou pas après la consommation d'alcool. 
                        Pensez qu'il a une durée de péremption d'environ 2 ans. </p>
                    </div>
                </div>
                <br>
                <h3 style="font-weight: bold;">Sanctions </h3>
                <p><b>Lorsque vous ne respectez pas les règles du Code de la route vous commettez une infraction. 
                    Une infraction peut être une contravention ou un délit. Le délit étant plus grave que la contravention, 
                    il donne lieu à des sanctions plus lourdes.</b></p>
                <table class="table table-striped table-bordered">
                    <thead style="background-color: chocolate; color: white;">
                        <tr>
                        <th scope="col">Infraction commise</th>
                        <th scope="col">Amende</th>
                        <th scope="col">Suspension de permis</th>
                        <th scope="col">Retrait de points</th>
                        <th>Autres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Alcool (probatoire)<br>(0,20 g atteints/l à 0,79 g/l)</td>
                        <td>135 euros </td>
                        <td>3 ans</td>
                        <td>6</td>
                        <td>Immobilisation du véhicule</td>
                        </tr>
                        <tr>
                        <td>Alcool<br>(0,50 g/l à 0,79 g/l)</td>
                        <td>135 euros</td> 
                        <td>3 ans</td>
                        <td>6</td>
                        <td>Immobilisation du véhicule</td>
                        </tr>
                        <tr>
                        <td>Alcool<br>(plus de 0,79 g/l)</td>
                        <td>4500 euros </td>
                        <td>3 ans</td>
                        <td>6</td>
                        <td>Délit : tribunal</td>
                        </tr>
                        <tr>
                        <td>Drogues et alcool</td>
                        <td>Maximum<br>9000 euros</td>
                        <td>3 ans </td>
                        <td>6</td>
                        <td>Délit : tribunal</td>
                        </tr>
                    </tbody>
                </table>
                <p>Si vous vous rendez compte que vous avez trop bu (même 2 verres étant trop), 
                    laissez-vous ramener par quelqu'un qui n'a pas bu, prenez les transports 
                    en commun ou un taxi ou dormez sur place.</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>L'alcool était présent dans 20 % d'accidents mortels de la route en 2013, s
                        elon l'Observatoire national interministériel de la sécurité routière (O.N.I.S.R.).</p>
                    </div>
                </div>
                <br>
                    
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Les effets de l'alcool diminuent la vigilance et altèrent le comportement de manière 
                        à ce qu'il ne soit pas compatible avec la conduite.</li>
                    <li>En cas d'accident corporel, le dépistage aux drogues et à l'alcool est pratiqué systématiquement.</li>
                    <li>La limite légale d'alcool consommé avant la prise du volant est d'un verre (moins de 0,20g/l) 
                        pour les conducteurs en période probatoire.</li>
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