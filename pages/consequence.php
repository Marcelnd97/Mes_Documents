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
              <h1><b>Conséquences</b></h1>
              <br> 
              <p>En roulant, la voiture accumule de l'énergie cinétique. Pour pouvoir maîtriser le véhicule en éliminant 
                cette énergie en relâchant de la chaleur, vous devez freiner.</p>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>Quand la vitesse double, l'énergie cinétique est multipliée par 4 !</p>
                </div>
              </div>
              <br>
              <h4><b>Conséquences de la vitesse</b></h4>
              <p>Vous devez donc ajuster la vitesse car :</p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>plus vous roulez vite, plus il est difficile de s'arrêter ;</li>
                <li>plus vous roulez vite, plus il est difficile de changer de trajectoire ;</li>
                <li>plus vous roulez vite, plus les dégâts en cas de choc sont graves.</li>
              </ol>
              
              <p>En plus du comportement à adopter, l'état de votre voiture vous aidera à 
                freiner et donc à vous débarrasser de l'énergie cinétique.</p>
              <h4><b>L'adhérence des pneus</b></h4>
              <p>Si vos pneus n'adhèrent pas bien au sol, le freinage va être rallongé. L'adhérence va donc dépendre de :</p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>plus vous roulez vite, plus il est difficile de s'arrêter ;</li>
                <li>de l'état des pneus ;</li>
                <li>des conditions météorologiques.</li>
              </ol>
              <p>Voici le tableau récapitulatif de tous les critères confondus :</p>
              <br>
              <div class="container text-center">
                <div class="row" style="border: 1px solid black;">
                    <div class="col-md-2">
                    <b>Etat de la route et des pneus</b>
                    </div>
                    <div class="col-md-2">
                    Bon revêtement + pneus neufs
                    </div>
                    <div class="col-md-2">
                    Revêtement usé + pneus neufs
                    </div>
                    <div class="col-md-2">
                    Bon revêtement + pneus usés
                    </div>
                    <div class="col-md-2">
                    Revêtement usé + pneus usés
                    </div>
                </div>
                <div class="row" style="border: 1px solid black;">
                    <div class="col-md-2">
                    <b>Route sèche</b>
                    </div>
                    <div class="col-md-2">
                    0,80
                    </div>
                    <div class="col-md-2">
                    0,64
                    </div>
                    <div class="col-md-2">
                    0,64
                    </div>
                    <div class="col-md-2">
                    0,51
                    </div>
                </div>
                <div class="row" style="border: 1px solid black;">
                    <div class="col-md-2">
                    <b>Route mouillée</b>
                    </div>
                    <div class="col-md-2">
                    0,40
                    </div>
                    <div class="col-md-2">
                    0,32
                    </div>
                    <div class="col-md-2">
                    0,32
                    </div>
                    <div class="col-md-2">
                    0,25
                    </div>
                </div>
                <div class="row" style="border: 1px solid black;">
                    <div class="col-md-2">
                    <b>Début de pluie</b>
                    </div>
                    <div class="col-md-2">
                    0,28
                    </div>
                    <div class="col-md-2">
                    0,22
                    </div>
                    <div class="col-md-2">
                    0,22
                    </div>
                    <div class="col-md-2">
                    0,18
                    </div>
                </div>
                <div class="row" style="border: 1px solid black;">
                    <div class="col-md-2">
                    <b>Neige</b>
                    </div>
                    <div class="col-md-2">
                    0,20
                    </div>
                    <div class="col-md-2">
                    0,16
                    </div>
                    <div class="col-md-2">
                    0,16
                    </div>
                    <div class="col-md-2">
                    0,13
                    </div>
                </div>
                <div class="row" style="border: 1px solid black;">
                    <div class="col-md-2">
                    <b>Verglas</b>
                    </div>
                    <div class="col-md-2">
                    0,12
                    </div>
                    <div class="col-md-2">
                    0,10
                    </div>
                    <div class="col-md-2">
                    0,10
                    </div>
                    <div class="col-md-2">
                    0,08
                    </div>
                </div>
              </div>
              <br>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>Comme vous ne pouvez ni prévoir les conditions météorologiques ni l'état du revêtement, 
                    vous pouvez vérifier vos pneus. Faites-le tous les mois !
                  </p>
                </div>
              </div>
              <br>
              <p><b>Freinage et adhérence</b></p>
              <p>Si l'adhérence est suffisante, la voiture va tourner. Si elle ne l'est pas, 
                la force centrifuge va entraîner un changement de direction pour la voiture et sa déviation de la route :</p>
              <br>
              <div class="card senscirc">
                <img src="./images/forcentrefuge.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Force centrifuge plus forte que l'adhérence des pneus </small></p>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>Pour réduire la force centrifuge, il faut réduire la vitesse avant le virage.
                  </p>
                </div>
              </div>
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>La vitesse est une accumulation de l'énergie cinétique.</li>
                <li>Si vous ne maîtrisez pas le véhicule, les conséquences de la vitesse peuvent être très graves.</li>
                <li>Pour libérer la voiture de la vitesse, il faut freiner.</li>
                <li>Pour obtenir les résultats de freinage optimaux, il faut prendre en compte l'état de la route, 
                    l'état des pneus, les conditions météorologiques, 
                    l'état de la voiture et des freins ainsi que votre propre comportement.</li>
              </ol>
              <br>              
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