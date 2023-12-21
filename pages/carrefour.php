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
    <link rel="stylesheet" href="../pages/assets/style.css">
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
              <h1><b>Les carrefours à sens giratoire</b></h1>
              <br> 
                
              <h5><b>Rond-point ou carrefour à sens giratoire ?</b></h5>
               <P>Ah ! Voici encore 2 termes à ne pas confondre ! Ces 2 infrastructures se ressemblent, 
                    mais les priorités diffèrent complètement !
              </p>
              <div class="card important">
                <div class="card-body pb-1">
                <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                <p>C'est par abus de langage qu'on appelle communément toute intersection ronde "rond-point", 
                    alors qu'en réalité on se réfère souvent à des carrefours à sens giratoire !</p>
                </div>
              </div>
              <br>
              <li>Dans un rond-point, il n'y a pas de signalisation et la règle à appliquer est celle de la priorité à droite.</li>
              <li>Le carrefour à sens giratoire est orné des panneaux Cédez le passage à chaque entrée de carrefour.</li>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>
                  Lorsqu'un panneau annonce que vous allez rencontrer un phénomène routier, il s'intitule le <b>signal d'annonce.</b> 
                  Celui qui indique son existence imminente s'intitule <b>signal de position.</b>
                  </p>
                </div>
              </div>
              <br>
              
              <div class="card senscirc">
                <img src="../images/signalano.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Signal d'annonce d'un carrefour à sens giratoire</small></p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/rondpan.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Ronds-points et leurs panneaux</small></p>
              
              <p>L'objectif d'un rond-point ou d'un carrefour à sens giratoire est de faire ralentir la circulation tout 
                en favorisant les échanges de direction. La vitesse maximale ne doit pas excéder les 50km/h, 
                même si rouler à cette vitesse peut s'avérer compliqué pour une trajectoire toute en rondeur.</p>

              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/vitesslimite.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Vitesse à ne pas dépasser</small></p>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>
                  Dans un rond-point ou un carrefour à sens giratoire, le plus judicieux est de rouler à environ 30 km</b>
                  </p>
                </div>
              </div>
              <br>
              <p>Le carrefour à sens giratoire comprend la chaussée à sens unique qui tourne, 
                et la trajectoire à adopter c'est celle de la direction que vous souhaitez prendre. </p>
              <div class="card senscirc">
                <img src="../images/carefourgir.jpg" height="400px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Carrefours à sens giratoire</small></p>
              <br>
              <p>Remarquez que la voiture dont la trajectoire est verte ne circule pas au milieu. 
                Sa sortie est trop proche pour qu'elle se déplace vers le milieu (vers la gauche), pour ensuite tourner à droite. 
                Elle gênerait la circulation et pourrait causer un accident. </p>
              <p>La voiture sur la trajectoire bleue circule davantage vers le milieu mais pas complètement pour les mêmes raisons. 
                Et ainsi de suite pour toutes les autres voitures.</p>
              <p>N'oubliez pas d'allumer le clignotant à la hauteur de la sortie précédente.</p>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>
                    Plus votre trajectoire est longue (plus votre sortie est loin), 
                    plus vous circulerez vers le milieu. Si votre sortie est la première à droite, 
                    vous resterez sur la périphérie du carrefour à sens giratoire.  
                    Ce n'est pas seulement votre clignotant qui va informer les autres de vos intentions, 
                    mais aussi votre façon de circuler.
                  </p>
                </div>
              </div>
              <br>
              <p>Les cyclistes peuvent bénéficier des pistes cyclables dans un carrefour à sens giratoire.</p>
              <div class="card senscirc">
                <img src="../images/cycliste.jpg" height="500px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Cyclistes dans un carrefour à sens giratoire</small></p>
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
              <li>Ne pas confondre le carrefour à sens giratoire (signalisation existante)
                 et rond-point (pas de signalisation)..</li>
              <li>Arrivés au carrefour à sens giratoire, vous devez céder le passage car vous tomberez sur un panneau Cédez le passage, 
                tandis que vous devez respecter la règle de la priorité à droite dans un rond-point.</li>
              <li>Le carrefour à sens giratoire vous sera annoncé par un signal d'annonce puis un signal de position que voici :</li>
              </ol>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/rencontrecarrefour.jpg" width="200px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Vous allez rencontrer un carrefour à sens giratoire</small></p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Ce n'est pas seulement votre clignotant qui va informer les autres de vos intentions, 
                mais aussi votre façon de circuler.</li>
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