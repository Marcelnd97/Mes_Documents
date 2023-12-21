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
    <title>L'organisation de l'espace</title>
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
                <h1 style="font-weight: bold;"><b>L'organisation de l'espace</b></h1>
                <br>
                <p>Vous n'êtes pas seul en tant qu'automobiliste. Certes, vous l'avez déjà remarqué 
                    en étant piéton, mais une fois les rôles inversés, la logique reste la même : 
                    on n'est pas tout seul sur la route.</p>
                <p>Observez la photo ci-dessous. L'automobiliste doit faire attention aux cyclistes 
                    (sur la bande cyclable ou sur le trottoir), aux piétons, aux autres voitures. 
                    Et ce n'est pas tout. Le schéma ci-dessous démontre que la chaussée n'est pas le seul 
                    endroit où se cachent les dangers pour les automobilistes.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/espace1.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Sas réservé aux vélos</small></p>
                    </div>
                </div>
                
                <p><b>Zone de rencontre</b></p>
                <p>Une autre zone où les automobilistes doivent être vigilants est celle qui est ouverte 
                    à tous les modes de transport, mais les piétons bénéficient de la priorité sur tous, 
                    à l'exception des tramways. La vitesse y est limitée à 20 km/h.</p>
                <p>Voici les panneaux relatifs à cette zone :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/espace2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>
                            Les piétons peuvent utiliser toute la chaussée et traverser partout (et sortie de zone) </small></p>
                    </div>
                </div>
                
                <p><b>Autres tronçons de route partagés entre les différents usagers</b></p>
                <p>La voie verte est un axe de circulation ouvert à tous les moyens de locomotion non motorisés.
                     Elle est donc ouverte aux piétons, aux cyclistes, aux rollers, aux personnes à mobilité 
                     réduite et aux cavaliers, dans le cadre du tourisme, des loisirs et des déplacements de 
                     la population locale.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>La voie verte touche une grande variété de personnes et d'utilisations. 
                        Elle se caractérise avant tout par son degré de sécurité et son accessibilité.</p>
                    </div>
                </div>
                <br>
                <p>Voici le panneau qui la représente :</p>                
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/espace3.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voici le panneau qui la représente :</small></p>
                    </div>
                </div>
                <p>Un autre panneau peut se référer à deux types d'usagers pour leur signaler une issue, 
                    comme le panneau ci-dessous :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 150px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/espace4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Impasse comportant une issue pour 
                            les piétons et les cyclistes</small></p>
                    </div>
                </div>
                
                <p><b>Voies partagées</b></p>
                <p>Parfois un sens unique reste ouvert au sens inverse pour les vélos :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/espace5.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voie ouverte aux vélos, la chaussée
                             sépare les deux voies par une ligne continue</small></p>
                    </div>
                </div>
                <P><b>L'aire piétonne</b></P>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/espace6.jpg">
                        </div>
                        <p class="text-muted text-center"><small>L'aire piétonne </small></p>
                    </div>
                </div>
                <p>L'aire piétonne est une zone (ensemble de rues) affectée à la circulation des piétons. Les piétons y
                    sont prioritaires sur tous les autres usagers (sauf face à un tramway).</p>
                <p> Les cyclistes peuvent parfois y circuler. Et parfois certains véhicules motorisés peuvent y accéder
                    (comme les bus). Dans ce cas, ils doivent circuler à l'allure du pas.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/espace7.jpg">
                        </div>
                        <p class="text-muted text-center"><small>L'aire piétonne avec tranche horaire</small></p>
                    </div>
                </div>
                
                <p>Quand un panneau d'entrée d'aire piétonne est complété de ce type de panonceau, 
                    cela signifie que la zone est piétonne pendant le créneau horaire indiqué.</p>
                <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Observez la photo ci-dessous. A votre avis, à qui devez-vous céder le passage ? 
                        A droite ou à gauche ?</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/espace8.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Sens de la circulation </small></p>
                    </div>
                </div>
                <p><b>Réponse :</b> La première règle à prendre en compte est le panneau Stop. Vous devez vous arrêter 
                    et céder le passage. Mais de quel côté ? Le panneau d'indication placé à gauche indique que 
                    vous pouvez tourner uniquement à gauche (et il existe 2 voies), car le sens de circulation 
                    pour aller à droite est réservé seulement pour les bus. 
                    Peu importe la direction que vous prenez, <b>vous devez toujours céder le passage des deux côtés.</b> </p>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Vous n'êtes jamais seuls sur la route, donc pour certaines catégories d'usagers vous serez informés
                         de leur présence ou de leur passage grâce aux panneaux ou au marquage au sol.</li>
                    <li>Soyez prudents dans les zones partagées et ne roulez pas vite pour pouvoir anticiper 
                        les dangers et les scénarios catastrophiques.</li>
                    <li>Si vous tombez sur les panneaux qui se réfèrent autant aux automobilistes, 
                        qu'aux autres usagers, vous devez prendre en compte tout le monde.</li>
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