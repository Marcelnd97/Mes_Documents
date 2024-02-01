<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/theme.css">
    <title>Index</title>
    <link rel="shortcut icon" href="images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body class="codebody">
    <!--L'en-tête de la page--> 


    <header>
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top  shadow p-1 mb-3">
        <div class="container-fluid">
          <button class="navbar-toggler btnnavbar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" 
          aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="index">
              <img class="circular-square" src="images/logo/logo driving-car-solution.png" 
                    style="width: 70px; height: 65px; border-radius: 50%;">
              Driving Car Solution
            </a>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 modelmenu">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index">
                    <i class="bi bi-house-door"></i>&nbsp;&nbsp;Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="pages/inscription"><i class="bi bi-info-square"></i>&nbsp;&nbsp;Á propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="pages/inscription"><i class="bi bi-ev-front"></i>&nbsp;&nbsp;Code de la route</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="pages/inscription"><i class="bi bi-card-checklist">&nbsp;&nbsp;</i>série globale</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="pages/inscription"><i class="bi bi-envelope"></i>&nbsp;&nbsp;Contact</a>
              </li>
            </ul>
            <ul class="mx-auto mb-2 mb-lg-0 modelmenu">
                <li class="nav-item">
                    <a class="nav-link active" href="pages/login">connetion</a>
                </li>&nbsp;&nbsp;

                <li class="nav-item">
                    <a class="nav-link active" href="pages/inscription">inscription</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>      
    </header>
    <br><br><br>
    <section>
      <!-- Carousel -->
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <div class="col-md-12">
              <div id="demo" class="carousel slide" data-bs-interval="5000" data-bs-touch="true" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
                </div>
            
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/depaspratiquegeneral.jpg" alt="Los Angeles" class="d-block">
                  </div>
                  <div class="carousel-item">
                    <img src="images/stationunilateral.jpg" alt="Chicago" class="d-block">
                  </div>
                  <div class="carousel-item">
                    <img src="images/coupechemin.jpg" alt="New York" class="d-block">
                  </div>
                  <div class="carousel-item">
                    <img src="images/depassestdanger.jpg" alt="New York" class="d-block">
                  </div>
                  <div class="carousel-item">
                    <img src="images/droitepresentfeux.jpg" alt="New York" class="d-block">
                  </div>
                  <div class="carousel-item">
                    <img src="images/droitepresentstop.jpg" alt="New York" class="d-block">
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
        
      <div class="container mt-3">
        <div class="row justify-content-md-center">
          <div class="col-md-9">
            <div class="card cardapropos" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
              <div class="card-header text-center apropos" >
                <h3 data-aos="fade-right">Á Propos de nous.</h3>
              </div>
              <div class="card-body text-start">
                <div class="col-md-12">
                  <div class="card p-2 mt-2" data-aos="fade-right" data-aos-duration="2000">
                    <p class="card-text">Face à la recrudescence des accidents dont la plupart sont dûs 
                      au méconnaissance aux règles élémentaires du code de la route.</p>
                    <p>Driving car solution est une solution innovante pour permettre à tout chacun à maîtriser les règles
                      du code de la route gage de la sécurité routière. La personne organise sa formation en
                      fonction de ses disponibilités et de ses connaissances. La formation au code est accessible
                      24h/24 et 7j/7 via un ordinateur, une tablette ou un smartphone. Aussi, sa formation surmesure 
                      au code lui permet de maîtriser les rouages du code</p>
                    <a class="modale" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#">Mieux nous connaître !</a>
                    </p>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-2">
        <!-- Content here -->
        <div class="row justify-content-md-center">
          <div class="col-md-9">
            <div class="card cardapropos" data-aos="fade-down" data-aos-duration="3500">
              <div class="card-header text-center apropos">
                <h3 data-aos="fade-up-left">Code de la route</h3>
              </div>
              <div class="card-body text-start">
                <h5 class="card-title text-center">
                  <img src="images/code.jpg" style="width:200px; height: 200px; border-radius: 50%;"
                      data-aos="fade-left" data-aos-duration="1500" data-aos-easing="ease-in-sine">
                </h5>
                <div class="col-md-12">
                  <div class="card p-2 mt-2">
                    <p data-aos="fade-down-left" class="card-text">Vous pouvez à tout moment commencer à apprendre vos codes de conduite. 
                      Pour ce faire soit vous cliquez sur le bouton en bas du 
                      texte soit vous passez par le menu de la barre de navigation. <b>Attention ! </b>
                        Cette dernière possibilité requière imperativement une authentification. 
                      Ce la signifie que vous ne vous êtes pas connecté vous aurais ni aux cours ni aux séries.
                    </p>
                    <a data-aos="fade-left" data-aos-duration="1500" data-aos-easing="ease-in-sine"
                       href="pages/inscription" class="btn btn-primary btnindex">Commencer mes révisisons</a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-3">
        <!-- Content here -->
        <div class="row justify-content-md-center">
          <div class="col-md-9">
            <div class="card cardapropos" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
              <div class="card-header text-center apropos">
                <h3>Série globale</h3>
              </div>
              <div class="card-body text-start">
                <h5 class="card-title text-center">
                  <img src="images/quizz.jpg" style="width: 200px; height: 200px; border-radius: 50%;"
                        data-aos="fade-left" data-aos-duration="1500" data-aos-easing="ease-in-sine">
                </h5>
                <div class="col-md-12">
                  <div class="card p-2 mt-2" data-aos="fade-right" data-aos-duration="1500" 
                      data-aos-easing="ease-in-sine">
                  <p class="card-text">Vous pouvez passer par ce lien en cliquant sur le bouton sous-jaçent pour effectuer les séries. 
                  Tous comme vous avez la possibilité de faire les séries au niveau de la rubrique qui concerne les thèmes. <b>NB : </b> 
                  Il est formellement recommandé de d'apprendre les leçons avant d'attaquer les séries.</p>
                  <a href="pages/inscription" class="btn btn-primary btnindex"
                      data-aos="fade-right" data-aos-duration="1500" 
                      data-aos-easing="ease-in-sine">Faire mes testes</a>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-3">
        <!-- Content here -->
        <div class="row justify-content-md-center">
          <div class="col-md-9">
            <div class="card cardapropos" data-aos="fade-left" data-aos-duration="1500" data-aos-easing="ease-in-sine">
              <div class="card-header text-center apropos">
                <h3>Contact</h3>
              </div>
            <div class="col-md-12">
                <div class="card p-2 mt-2" data-aos="fade-up" data-aos-duration="1500"
                      data-aos-easing="ease-in-sine">
                    <p class="card-text">Vous pouvez nous contactez pour plus d'information en cliquant sur le lien sous-jacent.</p>
                    <a href="pages/inscription"class="btn btn-primary btnindex">Nous contacter</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      
      <!--Modal-->
      <div class="modal fade" id="staticBackdrop" 
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog text-center">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="card text-start p-2">
                <p>Prix réduit sans pour autant renier sur la qualité par rapport aux auto-écoles traditionnels.
                  Notre formation en ligne propose un prix jusqu’à 50% moins chères que dans une auto-école
                  traditionnelle. Le candidat peut accéder à des cours de code en illimité en</p>
              
                <p>Dans son espace, la personne accède à une panoplie de services pour gérer en toute
                  autonomie sa formation.</p>
                <p><b>Une plateforme dédiée pour votre réussite.</b></p>
                <p>Apprendre le code n’a jamais été aussi facile avec notre plateforme ouvrez vos comptes en
                  ligne et choisissez les leçons de code en toute indépendance chez vous .</p>
                <p>Nous vous offrons :</p>
                <ol style="list-style-type: disc; margin-left: 10px;">
                  <li>Créez un compte en quelques secondes</li>
                  <li>Testez vous au code</li>
                  <li>Entrainez-vous facilement</li>
                  <li>Suivez votre progression</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!--Le pied de la page-->
    <?php
    // <!--Le pied de la page-->
        include("footer/footer.php");

        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("script/script_link.php");
    ?>
</body>
</html>