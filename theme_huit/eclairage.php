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
    <title>L'éclairage</title>
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
                <h1 style="font-weight: bold;"><b>L'éclairage</b></h1>
                <br>
                <b>Éclairage et visibilité</b>
                <b class="text-muted">Voyants</b>
                <br>
                <div class="card question">
                <div class="card-body">
                <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                <p>A votre avis, quel est le degré d'alerte quand on allume les phares ? 
                    Sauriez-vous reconnaître le type de phares allumés ?</p>
                </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/claire1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Témoins pour les phares</small></p>
                    </div>
                </div>
                
                <p><b>Réponse :</b></p>
                <p>Voici la liste des phares à savoir reconnaître sur votre tableau de bord.</p>
                <p>1. Feux de route ; 2. Feux antibrouillard avant ; 3. Feux antibrouillard arrière ; 4.
                     Feux de croisement ; 5. Feux de position.</p>
                <p>Dès que vous allumez un phare, vous verrez l'un des témoins correspondants s'allumer sur 
                    votre tableau de bord. Il s'agit d'un témoin de signalisation.</p>
                <p>Vu leurs couleurs, ce n'est donc pas un problème, juste une information du bon fonctionnement 
                    de ce dispositif d'éclairage. D'ailleurs, la couleur peut varier selon le modèle du véhicule.</p>
                <p><b class="text-muted">Phares</b></p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/claire2.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Phares avant et arrière</small></p>
                    </div>
                </div>
                
                <b>Éclairage avant comprend :</b>
                <ol style="list-style-type: disc;">
                    <li>2 feux de route dont la portée est de 100 m minimum (ampoule de la partie 2) ;</li>
                    <li>2 feux de croisement dont la portée est de 30 m minimum et qui éclairent plus loin à 
                        droite qu'à gauche pour ne pas gêner les usagers croisés) (ampoule de gauche de
                         la partie 1) ;</li>
                    <li>2 feux de position, visibles à 150 m minimum  (ampoule de droite de la partie 2) ;</li>
                    <li>2 feux de brouillard (ampoule de la partie 3).</li>
                </ol>
                <p>Il existe aussi :</p>
                <ol style="list-style-type: disc;">
                    <li>2 feux diurnes permettant de mettre en évidence le véhicule de jour ;</li>
                    <li>2 feux d'angle qui éclairent la route par là où l'on tourne ; </li>
                </ol>
                <b>Éclairage arrière comprend :</b>
                <ol style="list-style-type: disc;">
                    <li>2 feux de position rouges qui sont visibles à 150 m ;</li>
                    <li>2 ou 3 feux Stop rouges qui s'allument lorsque l'on appuie sur la pédale de freins 
                         (partie 2 sur la photo) ;</li>
                    <li>2 catadioptres rouges ;</li>
                    <li>1 ou 2 feux de marche arrière qui sont blancs quand ils s'allument (partie 1 sur la photo) ;</li>
                    <li>1 ou 2 feux de brouillard (partie 3 sur la photo).</li>
                </ol>
                <p>Les feux de marche arrière s'allument quand on passe la marche arrière. Si votre voiture 
                    dispose d'un seul feu de brouillard arrière, alors il est placé à gauche.</p>
                <b>Éclairage avant et arrière comprend :</b>
                <ol style="list-style-type: disc;">
                    <li>2 clignotants (gauche et droit) ;</li>
                    <li>feux de détresse ou warnings (ce sont en réalité les 4 clignotants) ; il s'agit d'un 
                        témoin de signalisation ;</li>
                    <li>plaques blanches d'immatriculation rétroréfléchissante, lisibles à 20m minimum. </li>
                </ol>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/claire3.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Voyant clignotants et warnings</small></p>
                    </div>
                </div>
               
                <p><b>Quand utiliser les différents feux</b></p>
                <p><b>Feux d'angle</b></p>
                <p>Tout véhicule peut être muni à l’avant de 2 feux d’angle émettant latéralement une 
                    lumière blanche afin de compléter l’éclairage de la route située dans les virages. 
                    Les feux d'angle s'activent à 40 km/h ou en actionnant le clignotant.</p>
                <b>Feux adaptatifs</b>
                <p>Tous les véhicules n'en sont pas équipés. Mais cette aide est très utile pour mieux 
                    voir ce qui se passe dans les virages. En effet, ils suivent la direction donnée par le volant.</p>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_huit/claire4.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Feux d'angle</small></p>
                    </div>
                </div>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Si l'un de vos phares est en panne, vous risquez une amende. Les clignotants et les 
                        feux Stop ont plus de poids pour la sécurité que les feux arrière. Si la visibilité est mauvaise 
                        et que vous avez oublié de mettre les phares, vous risquez 135 euros d'amende.</p>
                    </div>
                </div>
                <br>
                                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Les phares peuvent contenir plusieurs ampoules.</li>
                   <li>Lorsque vous allumez les phares, un voyant sur votre tableau de bord s'allume 
                    également pour vous en informer.</li>
                   <li>Si vos phares sont en panne, vous risquez une amende.</li>
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