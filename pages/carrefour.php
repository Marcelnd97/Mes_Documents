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
<body style="background-color: white;">

    <!--L'en-tête de la page-->
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top  shadow p-2 mb-2" style="background-color: chocolate;">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" 
          aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">
              <img class="circular-square" src="./images/bdd.png" id="logo" style="width: 40px; 
              height: 40px; border-radius: 50%;
              border-top-left-radius: 50% 50%; 
              border-top-right-radius: 50% 50%; 
              border-bottom-right-radius: 50% 50%; 
              border-bottom-left-radius: 50% 50%;
              margin:2px;">
              Driving Solution
            </a>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 modelmenu">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html"><i class="bi bi-house-door"></i>&nbsp;&nbsp;Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="apropos.php"><i class="bi bi-info-square"></i>&nbsp;&nbsp;Á propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="coderoute.php"><i class="bi bi-ev-front"></i>&nbsp;&nbsp;Code de la route</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="serie-globale.php"><i class="bi bi-card-checklist">&nbsp;&nbsp;</i>série globale</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.php"><i class="bi bi-envelope"></i>&nbsp;&nbsp;Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="logout.php">Deconnexion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>      
    </header>
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
                <img src="./images/signalano.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Signal d'annonce d'un carrefour à sens giratoire</small></p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/rondpan.jpg" width="300px;">
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
                  <img src="./images/vitesslimite.jpg" width="300px;">
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
                <img src="./images/carefourgir.jpg" height="400px" class="senscirc">
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
                <img src="./images/cycliste.jpg" height="500px" class="senscirc">
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
                  <img src="./images/rencontrecarrefour.jpg" width="200px;">
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

    <script src="../pages/assets/script.js"></script>

    <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    </script>
</body>
</html>