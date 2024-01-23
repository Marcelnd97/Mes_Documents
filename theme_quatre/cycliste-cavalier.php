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
    <title>Les cyclistes et les cavaliers</title>
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
                <h1 style="font-weight: bold;"><b>Les cyclistes et les cavaliers</b></h1>
                <br>
                <p>Ceux qui se déplacent à vélo sont donc des cyclistes. lls doivent être en mouvement
                     pour être considérés comme tels. S'ils marchent en tenant le vélo à la main ils sont 
                     considérés piétons. Le code de la route s'applique à eux aussi.</p>
                <p><b>Repérez la signalisation</b></p>
                <p>Pour annoncer leur présence aux conducteurs de voitures ou pour donner des indications 
                    de circulation aux cyclistes, voici quelques panneaux dont je voudrais vous faire deviner le sens.</p>
                <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Comme d'habitude, je vous laisse les classer :</p>
                    <p>a) fin de piste ou bande obligatoire pour cycle</p>
                    <p>b) piste ou bande cyclable conseillée et réservée aux cycles à 2 ou 3 roues</p>
                    <p>c) interdit de tourner à gauche sauf pour les vélos</p>
                    <p>d) sens interdit aux voitures, sauf aux vélos</p>
                    <p>e) débouché de cyclistes venant de droite ou de gauche (des 2 sens)</p>
                    <p>f) fin de piste ou d'une bande cyclable conseillée et réservée aux cycles à 2 ou 3 roues</p>
                    <p>g) piste ou bande obligatoire pour les cycles sans side-car ou remorque et réservée aux cycles à 2 ou 3 roues</p>
                    <p>h) accès interdit aux cycles</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/cycliste1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Panneaux relatifs aux cyclistes</small></p>
                    </div>
                </div>
                
                <p><b>Réponses :</b></p>
                <p>Panneau 1 : réponse D (donne un ordre aux automobilistes, autorise les cyclistes)
                     ; Panneau 2 : réponse C (donne un ordre aux automobilistes, autorise les cyclistes) ; 
                     Panneau 3 : réponse E (prévient surtout les automobilistes du danger) ; Panneau 4 : 
                     réponse B (concerne les cyclistes, mais informe tout le monde); Panneau 5 : F 
                     (concerne les cyclistes, mais informe tout le monde) ; Panneau 6 : réponse G *
                     (concerne les cyclistes, mais informe tout le monde) ; Panneau 7 : réponse A 
                     (concerne les cyclistes, mais informe tout le monde) ; Panneau 8 : H.</p>
                <p>Sinon, pour repérer la présence des cyclistes, regardez par terre. Ils ont leur bande 
                    cyclable (espace qu'ils occupent sur la chaussée) et en tant qu'automobiliste, 
                    vous n'avez pas le droit de circulez dessus. </p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>La particularité des cyclistes c'est qu'ils peuvent aller à contresens de la circulation.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/cycliste2.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Vélo circulant parfois à contre-sens de la circulation</small></p>
                    </div>
                </div>
                
                <p>Un autre espace prévu pour les cyclistes, délimité par le marquage au sol, se situe avant le feu tricolore et 
                    leur permet de tourner plus facilement à gauche ou partir devant les voitures.</p>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Placer votre voiture sur un sas de cycliste est interdit et est puni par une amende !</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/cycliste3.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Sas réservé aux vélos </small></p>
                    </div>
                </div>
                
                <p><b>Repérez les cyclistes</b></p>
                <p>Ils doivent circuler sur la chaussée, peuvent emprunter les voies des bus selon 
                    la signalisation, parfois peuvent franchir un trottoir, mais ne devraient pas du 
                    tout l'emprunter. Les cyclistes peuvent circuler sur les aires piétonnes,
                     sauf dispositions différentes prises par l’autorité investie du pouvoir de police, 
                     à la condition de conserver l’allure du pas et de ne pas occasionner de gêne aux piétons. 
                     Quand ils circulent sur la chaussée, il doivent respecter tant la signalisation que les 
                     feux et notamment lorsque ceux-ci leur sont attitrés comme sur les 2 photos ci-dessous :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/cycliste4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Panneaux ou feux pour cyclistes</small></p>
                    </div>
                </div>
                <p><b class="text-muted">Droits et devoirs dans la circulation</b></p>
                <ol style="list-style-type: disc;">
                    <li>Les cyclistes doivent circuler à l'extrême droite de la chaussée ou sur la piste cyclable 
                        prévue à cet effet.</li>
                    <li>Les cyclistes peuvent circuler à deux de front sur la chaussée. Ils doivent se mettre en file
                         simple dès la chute du jour et dans tous les cas où les conditions de la circulation l’exigent,
                          notamment quand un véhicule voulant les dépasser annonce son approche.</li>
                    <li>Pour tourner à gauche le cycliste n'est pas obligé de serrer à gauche, mais n'ayant pas de 
                        clignotant, il vous fera un geste de la main pour vous montrer qu'il veut tourner.</li>
                    <li>Pour être visible la nuit, le cycliste doit avoir des dispositifs réfléchissants (catadioptres) 
                        de couleur blanche à l’avant, rouge à l’arrière et orange sur les cotés. Les pédales doivent
                         également comporter des catadioptres sauf si elles sont rétractables. La nuit, ou le jour 
                         lorsque la visibilité est réduite, le cycliste doit avoir un feu de position avant, 
                         jaune ou blanc, et un feu arrière rouge. Le cycliste doit porter un casque homologué 
                         ainsi qu'un gilet rétro-réfléchissant.</li>
                </ol>
                <p><b class="text-muted">Non-respect des règles</b></p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Les cyclistes peuvent aussi avoir des comportements inattendus ou dangereux, alors attention s'ils se 
                        faufilent entre les voitures ou changent de direction de façon inopinée.</p>
                    </div>
                </div>
                <br>
                <p><b>Zone de rencontre entre les différents usagers</b></p>
                <p>J'ai déjà évoqué les panneaux relatifs au partage d'espace :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/cycliste5.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Entrée et sortie de zone de rencontre </small></p>
                    </div>
                </div>
                <br>
                
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>La voie verte touche une grande variété de personnes et d'utilisations. 
                        Elle se caractérise avant tout par son degré de sécurité et son accessibilité.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/cycliste6.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voie verte</small></p>
                    </div>
                </div>
                <br>
                <p>Un autre panneau peut se référer à deux types d'usagers pour leur signaler 
                    une issue comme le panneau ci-dessous :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 150px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/cycliste7.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Impasse comportant une issue pour les piétons et les cyclistes </small></p>
                    </div>
                </div>
                
                <br>
                <p><b>Voies partagées</b></p>
                <p>Parfois un sens unique reste ouvert au sens inverse pour les vélos :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 150px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/cycliste8.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voie ouverte aux vélos, la chaussée sépare les deux 
                            voies par une ligne continue</small></p>
                    </div>
                </div>
                <h2 style="font-weight: bold;">Cavaliers</h2>
                <p>Le cheval monté est assimilé à un véhicule, car il est sans moteur et non soumis à l'immatriculation, 
                    tout comme le cycliste. Il doit, comme tel, se conformer à toutes les dispositions du code de 
                    la route qui lui sont applicables. Les pistes cyclables et les trottoirs sont interdits aux cavaliers.</p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Le cavalier doit se tenir à droite de la chaussée, près du bord. Les cavaliers et les animaux 
                        ne doivent pas représenter une entrave à 
                        la circulation des autres usagers et doivent pouvoir être dépassés en toute sécurité.</p>
                    </div>
                </div>
                <br>
                <p>Voici les panneaux relatifs aux cavaliers ou à la traction d'animaux :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/cycliste9.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Panneaux relatifs aux cavaliers</small></p>
                    </div>
                </div>
                <p>1. Chemin obligatoire pour cavaliers et réservé aux cavaliers</p>
                <p>2. Fin de chemin obligatoire pour cavaliers</p>
                <p>3. Accès interdit aux véhicules à traction animale</p>
                <h2 style="font-weight: bold;">Les trottinettes électriques</h2>
                <p>Les nouveaux engins de déplacement personnel motorisés (EDPM), tels que les trottinettes électriques,
                     les monoroues, les hoverboards ou les gyropodes, sont désormais de plus en plus répandus dans les 
                     trajets du quotidien. De nouvelles réglementations ont donc vu le jour afin de garantir 
                     la sécurité de ces nouveaux usagers. </p>
                <p><b>Quelles sont ces nouvelles réglementations ? </b></p>
                <p>Les EDP motorisés ont l’interdiction de circuler sur le trottoir : </p>
                <ol style="list-style-type: disc;">
                    <li>en agglomération, ils doivent circuler sur les bandes ou les pistes cyclables lorsqu’il y en a.
                         Sinon ils peuvent circuler sur la chaussée, 
                        à condition que la vitesse maximale autorisée soit inférieure ou égales à 50 km/h.</li>
                    <li>hors-agglomération, ils ont l’interdiction de circuler sur la chaussée 
                        (la vitesse étant supérieure à 50 km/h). 
                        Ils doivent donc circuler sur les voies vertes et les pistes cyclables. </li>
                </ol>
                <p>Les engins doivent avoir la vitesse bridée à 25 km/h pour pouvoir circuler sur le voie publique.</p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Quelles sont les sanctions en cas de mauvais comportement ?</p>
                    <p>- 35 € d’amende en cas de non respect des règles de circulation et la présence 
                        d’une seconde personne en plus de vous sur l’engin</p>
                    <p>- 135 € d’amende en cas de circulation non-autorisée sur un trottoir ou de débridage
                         de l’engin</p>
                    <p>- 1 500 € d’amende en cas d’utilisation d’un engin dont la vitesse maximale n’a pas 
                        été bridée lors de la construction (l”engin peut donc atteindre une vitesse supérieure
                         à 25 km/h)</p>
                    </div>
                </div>
                
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Les cavaliers sont assimilés cyclistes.</li>
                    <li>Les cyclistes circulent parfois à contresens des automobilistes.</li>
                    <li>Les cyclistes ont parfois leurs propres feux.</li>
                    <li>Les cyclistes peuvent emprunter les voies de bus.</li>
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