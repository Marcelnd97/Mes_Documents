<?php
    //initialiser la session
    session_start();
    // vérifier si l'utilisateur est connecté, sinon redirigez le vers la page de donnection
    if(! isset($_SESSION['username'])) {
        header('location: login.php');
        exit();
    }

    require('auth.php');

    if(! isAuthenticated()){
        // Rediriger vers la page de connexion si non authentifié
        header('Location: login.php');
        exit();
    }

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
<body class="codebody">

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
              <img class="circular-square" src="./images/bdd.png" style="width: 40px; 
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
        <br><br><br>
        <div class="container-fluid mt-3">
          <div class="row">
            <div class="col-md-6 positioncode text-start">
              <h1>Leçons de code</h1>
            </div>
            <div class="col-md-6 positionlecon">
              <a href="theme-des-leçons.php" class="btn" style="background-color: chocolate; color: white;">
              <b>Toutes les leçons</b></a>
            </div>
          </div>
          <div class="row pt-2">
            <div class="col-md-12">
              <div class="card codee">
                <div class="card-body text-center">
                    <img src="./images/direction.jpg" class="rounded-circle" style="width: 30%; 
                        height: 30%;; border-radius: 50%;
                        border-top-left-radius: 50% 50%; 
                        border-top-right-radius: 50% 50%; 
                        border-bottom-right-radius: 50% 50%; 
                        border-bottom-left-radius: 50% 50%;
                        margin:2px;">    
                    <h3 class="mt-3"><b>La circulation rouière</b></h3>
                    <span><b><i class="bi bi-bookmark"></i></i>&nbsp;Fiche: </b>
                    </span>&nbsp;<span class="text-muted">6</span>&nbsp;&nbsp;&nbsp;
                    <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                    <span class="text-muted">2</span>
                    <div class="button text-center">
                        <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#" class="btn" 
                        style="font-size: large; display: inline-block; margin-top: 30px; border-radius: 12px; 
                        color: white; padding: 5px; background-color: chocolate; width: 30%;">Commencer</a>
                    </div>
                    </p>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <!--Modal-->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" 
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog text-center">
          <div class="modal-content" style="background-color: chocolate; color: white;">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h5 class="modal-title">
                <img src="./images/direction.jpg" class="rounded-circle" style="width: 30%; 
                        height: 30%;; border-radius: 50%;
                        border-top-left-radius: 50% 50%; 
                        border-top-right-radius: 50% 50%; 
                        border-bottom-right-radius: 50% 50%; 
                        border-bottom-left-radius: 50% 50%;
                        margin:2px;">
              </h5>
              <h3 class="mt-3"><b>Les Intersections</b></h3>
              <hr>
              <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
              <span>2</span>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <a href="#" style="color: chocolate; text-decoration: none;">
                    <div class="card" style="color: chocolate;">
                      <h4><b>Aborder une intersection</b></h4>
                      <h4>10 questions</h4>
                    </div>
                  </a>
                </div>
                <div class="col-md-6">
                  <a href="#"  style="color: chocolate; text-decoration: none;">
                    <div class="card">
                      <h4><b>Intersections et propriétés</b></h4>
                      <h4>10 questions</h4>
                    </div>
                  </a>
                </div>
              </div>
              <hr>
              <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
              </span>&nbsp;<span>6</span>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <a href="#" class="btn btn-outline-light" style="color: black; border: none; 
                  border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                  <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Avant une intersection</a>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <a href="#" class="btn btn-outline-light" style="color: black; border: none; 
                  border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                  <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Aborder une intersection</a>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <a href="#" class="btn btn-outline-light" style="color: black; border: none; 
                  border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                  <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les panneaux de priorité</a>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <a href="#" class="btn btn-outline-light" style="color: black; border: none; 
                  border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                  <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Principes de priorité</a>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <a href="#" class="btn btn-outline-light" style="color: black; border: none; 
                  border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                  <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les carrefours à sens giratoire</a>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <a href="#" class="btn btn-outline-light" style="color: black; border: none; 
                  border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                  <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les feux et les agents</a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Le pied de la page-->
    <footer>
      <div class="container-fluid text-center">
          <div class="row footer">
            <div class="col-md-4">
              <p>DRIVING SOLUTION</p>
            </div>
            <div class="col-md-4">  
              <p>&copy; 2023 Mon Site. Tous droits réservés.</p>
            </div>
            <div class="col-md-4">
              <p>Réseau Sociaux</p>
            </div>
          </div>
      </div>
    </footer>

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