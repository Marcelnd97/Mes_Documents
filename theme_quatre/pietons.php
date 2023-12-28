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
    <title>Les piétons</title>
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
                <h1 style="font-weight: bold;"><b>Les piétons</b></h1>
                <br>
                <p>Vous êtes nés piétons et avez baigné longtemps dans cette logique 
                    (même à présent, vous avez les réflexes d'un piéton). Par conséquent, j'ai choisi 
                    d'aborder ce chapitre du point de vue qui vous est connu pour que vous puissiez anticiper 
                    sur votre propre comportement en tant qu’automobiliste.</p>
                <p><b>Repérez la signalisation</b></p>
                <p>Parlons d'abord des zones où toute une signalisation vous en informe 
                    (donne des indications) ou vous prévient de leur présence (en mode danger).</p>
                <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Associez les panneaux suivants à leur signification et faites attention aux contresens :</p>
                    <p>a) sortie d'aire piétonne</p>
                    <p>b) passage pour piétons dans 50 m</p>
                    <p>c) passage pour piétons imminent</p>
                    <p>d) accès interdit aux piétons</p>
                    <p>e) passage pour piétons surélevé dans 50 m</p>
                    <p>f) endroit fréquenté par les enfants (sortie d'école par exemple)</p>
                    <p>g) entrée d'aire piétonne</p>
                    <p>h) fin de chemin obligatoire pour piétons</p>
                    <p>i) chemin obligatoire pour piétons</p>
                    </div>
                </div>
                <br>
                
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/piet.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Panneaux relatifs aux piétons</small></p>
                    </div>
                </div>
                
                <p><b>Réponses :</b></p>
                <p>Panneau 1 : réponse b (signal d'annonce) ; Panneau 2 : réponse e ; Panneau 3 : réponse f ; 
                    Panneau 4 : réponse d ; Panneau 5 : réponse c (signal de position) ; Panneau 6 : réponse i ; 
                    Panneau 7 : réponse h ; Panneau 8 : réponse g ; Panneau 9 : réponse a.</p>
                <p>Quelques précisions quant à ces panneaux :</p>
                <p>- Le panneau n°8 représente une entrée en zone piétonne, un espace dédié aux piétons. 
                    Les piétons sont prioritaires sur tous les autres usagers, excepté les tramways. 
                    La présence de véhicules motorisés est exceptionnelle et le stationnement n'est pas 
                    autorisé dans cette zone. Il faut rouler au pas !</p>
                <p><b>Repérez les individus</b></p>
                <ol style="list-style-type: disc;">
                    <li>Nous avons vu que les piétons sont ceux qui utilisent leurs pieds pour se déplacer 
                        même s'il tiennent un vélo (ou une moto) à la main ou qu'ils conduisent une poussette. 
                        Même ce scooter électrique est considéré
                         comme piéton car sa vitesse est de 6 km/h. Il est prévu pour les handicapés physiques :</li>
                </ol>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/pieton2.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Scooter électrique assimilé piéton</small></p>
                    </div>
                </div>
               
                <p>Pour se déplacer, ils doivent utiliser le trottoir ou l'accotement et pour traverser,
                     ils doivent emprunter les passages piétons (s'ils sont à moins de 50 m d'eux) en respectant 
                     les feux qui leur sont attitrés. Le passage piéton est constitué de bandes larges traversant 
                     la chaussée. Il peut être surélevé ou plat.</p>
                <p>La jeune femme qui s'apprête à traverser sur cette photo est le parfait exemple du 
                    respect de la règle.</p>
                 <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate; 
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/pieton3.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Piéton respectant les règles </small></p>
                    </div>
                </div>
                 
                <p>Dans cette situation vous devez ralentir, voire vous arrêter, pour laisser le passage à la jeune femme 
                    car elle démontre clairement l'intention de traverser. De plus, les feux sont absents.</p>
                    <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Notez que dans cette situation, le passage piétons est matérialisé 
                        (le marquage au sol blanc est bien présent). Si la chaussée est refaite pour cause 
                        de travaux et que le passage piéton n'est pas encore clairement matérialisé, 
                        vous devez céder le passage aux piétons car ils sont plus vulnérables.</p>
                    </div>
                </div>
                <br>
                <p>Si les feux avaient été présents, la jeune femme aurait pu traverser seulement 
                    si son feu était vert, le vôtre rouge bien évidemment.</p>
                <p>En image, l'illustration des feux piétons que vous connaissez déjà. Le rouge vous 
                    oblige à patienter sur le trottoir, le vert vous autorise à traverser :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 350px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/pieton4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Feux pour les piétons</small></p>
                    </div>
                </div>
                <ol style="font-weight: bold;">
                    <li>Non-respect des règles</li>
                </ol>
                <p>Les choses se compliquent lorsque vous voyez des piétons sur le trottoir, 
                    mais qui ne semblent pas clairement vouloir s'engager dans la circulation. 
                    Lorsque c'est le cas, vous avez la priorité, mais je vous conseille de ralentir 
                    pour ne pas être surpris.</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Je me suis rendue compte qu'il m'arrivait de traverser inopinément la rue même au passage piétons. 
                    Pas bien, hein ? Soyez très vigilants, car vous n'êtes pas à l'abri d'un piéton qui décide de s'engager
                    même à la dernière seconde. Je me réfère aussi aux enfants 
                    qui n'arrivent pas à évaluer les dangers et peuvent finir 
                    par faire des gestes brusques ou inattendus.</p>
                    </div>
                </div>
                <br>
                <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>D'ailleurs, pourquoi devez-vous faire attention dans les zones où le passage des 
                        enfants est fort présent ?</p>
                    </div>
                </div>
                <br>
                <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Et par analogie, pourquoi les personnes âgées sont-elles vulnérables 
                        même si elles respectent les passages piétons ?</p>
                    </div>
                </div>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Les enfants n'ont pas la même carrure que les adultes et leur champ de vision n'est que de 70°
                         contrairement à un adulte dont le champ visuel est de 180°. Si vous êtes stationné et comptez repartir, 
                         assurez-vous que la voie est libre, 
                        car vous ne verrez pas un enfant de 5 ans par exemple derrière la voiture et même dans le rétroviseur !</p>
                    </div>
                </div>
                <br>
                <p>Les personnes âgées peuvent être aussi une source de point d'alerte, car elles ne vont pas forcément
                     pouvoir vous voir ou vous entendre. Elles se déplacent lentement mais peuvent aussi s'engager de 
                    façon impromptue. Vous devez non seulement redoubler de vigilance, mais aussi de patience.</p>
                <p>Puis existent ces piétons qui ont pris confiance en eux (trop en leurs oreilles, moins en leurs yeux), qui 
                    savent évaluer les distances (ou pensent savoir) et sont pressés d'arriver à destination.</p>
                <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Pourquoi en tant que piétons sommes-nous dangereux pour les automobilistes ?</p>
                    </div>
                </div>
                <br>
                <ol style="list-style-type: disc;">
                    <li>Parce qu'il nous est arrivé à tous de taper un texto ou de téléphoner en marchant 
                        sans faire attention à la circulation ;</li>
                    <li>Parce qu'il nous arrive encore de traverser en dehors des passages piétons ;</li>
                    <li>Parce qu'il nous arrive de traverser en courant ce qui augmente la puissance du choc 
                        en cas d'accident ;</li>
                    <li>Parce qu'il nous arrive de nous faufiler entre les voitures ce qui augmente la possibilité
                         d'être heurtés ou écrasés...</li>
                </ol>
                <p>Je choisis les scenarii catastrophes pour que vous compreniez 
                    l'inversion de la logique automobiliste - piéton.</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Un automobiliste doit faire attention à tous ces obstacles et toujours céder le passage aux piétons
                         car ces derniers sont plus vulnérables et ont la priorité.</p>
                    </div>
                </div>
                <br>
                <p><b>Vitesse</b></p>
                <p>Nous avons déjà vu que la vitesse en agglomération était de 50 km/h maximum. 
                    Mais lorsque vous roulez à travers des zones où vous risquez de rencontrer de nombreux piétons, 
                    vous devez redoubler de vigilance et adapter votre allure à la situation, c'est-à-dire, ralentir.</p>
                <p>Si au moment où vous passez il n'y a pas beaucoup de piétons, je vous conseille 
                    de ralentir quand même. C'est plus judicieux et précautionneux. En cas de présence de signalisation 
                    relative à la vitesse, tout simplement respectez-la. La moins élevée est de 5 km/h :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/pieton5.jpg">
                        </div>
                        <p class="text-muted text-center"><small>
                        Limitations de vitesse en cas de forte présence de piétons ou d'autres obstacles</small></p>
                    </div>
                </div>
                
                <p>Vous pourrez aussi rencontrer les panneaux d'entrée et de sortie de zone à 30 km/h 
                    qui ne concernent pas une seule rue, 
                    mais aussi les adjacentes. C'est une zone qui est ouverte à tous les usagers.</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Dans les zones 30 et les zones de rencontre, le passage piétons n'est pas forcément présent !</p>
                    </div>
                </div>
                <br>
                <p>Voici les panneaux d'entrée et de sortie de zone :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/pieton6.jpg">
                        </div>
                        <p class="text-muted text-center"><small>
                        La limitation de vitesse s'applique aux rues adjacentes</small></p>
                    </div>
                </div>
                
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Alors que les limitations de vitesse simples s'appliquent seulement à la rue dans laquelle vous
                         vous trouvez, la zone s'applique à plusieurs rues. 
                        Vous devriez voir un panneau de sortie de zone pour pouvoir accélérer un peu.</p>
                    </div>
                </div>
                <br>
                <p>Si jamais vous ne respectez pas les vitesses, vous pouvez prendre une amende, 
                    perdre des points sur votre permis ou au pire des cas, causer un accident plus ou moins grave.</p>
                <h3 style="font-weight: bold;">Freinage</h3>
                <p>Si vous devez donc freiner pour ne pas heurter un piéton, mieux vaut respecter 
                    les vitesses imposées. En sachant qu'un piéton se déplace à 4-5 km/h et qu'il est vulnérable,
                     plus vous roulez vite et plus l'accident risque d'être mortel. Il faut ajouter sa vitesse de 
                     déplacement à la vôtre, ce qui entraîne des dommages catastrophiques.</p>
                <p>Observez bien le schéma ci-dessous. Convaincus ?</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/pieton7.jfif">
                        </div>
                        <p class="text-muted text-center"><small>
                        Chances de survie d'un piéton en cas d'accident</small></p>
                    </div>
                </div>
                <p><b>Klaxon </b></p>
                <p>Il est interdit en ville ou la nuit, sauf en cas de danger immédiat.
                    Les avertisseurs sonores ne doivent pas être utilisés pour manifester votre 
                     impatience ou énervement. Il doit être bref et justifié. Il peut être explicitement 
                     interdit comme sur le panneau ci-dessous :</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 150px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_quatre/pieton8.jfif">
                        </div>
                        <p class="text-muted text-center"><small>
                        Interdiction d'utiliser le klaxon </small></p>
                    </div>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Vous n'êtes jamais seuls sur la route, donc pour certaines
                         catégories d'usagers vous serez informés de leur présence ou de leur passage.</li>
                    <li>Les piétons peuvent avoir un comportement inattendu, alors il faut apprendre à l'anticiper.</li>
                    <li>Soyez prudents dans les zones partagées et ne roulez pas vite pour pouvoir anticiper les dangers et, 
                        s'il le faut, vous arrêter en cas de dangers immédiats.</li>
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