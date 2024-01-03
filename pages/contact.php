<?php
    //initialiser la session
    session_start(); 
        include("config.php");
   
    // vérifier si l'utilisateur est connecté, sinon redirigez le vers la page de donnection
    if(! isset($_SESSION['id'])) {
        header('location: login.php');
        exit();
    }


    // require('auth.php');

    // if(isAuthenticated()){
    //     // Rediriger vers la page de connexion si non authentifié
    //     header('Location: login.php');
    //     exit();
    // }

//     if (isset($_GET['logout'])) {
//         logout();
//         header('Location: login.php');
//         exit();
//     }
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
    <title>Contact</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">
    <!--L'en-tête de la page-->
    <?php
        include("../header/header.php");
     ?>
    <br><br><br>
    <section>
      <!-- Carousel -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="cardd">
              <div id="demo" class="carousel slide" data-bs-ride="carousel">

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
                    <img src="../images/depaspratiquegeneral.jpg" alt="Los Angeles" class="d-block" style="width:100%; height:30%;">
                  </div>
                  <div class="carousel-item">
                    <img src="../images/stationunilateral.jpg" alt="Chicago" class="d-block" style="width:100%; height:30%;">
                  </div>
                  <div class="carousel-item">
                    <img src="../images/coupechemin.jpg" alt="New York" class="d-block" style="width:100%; height:30%;">
                  </div>
                  <div class="carousel-item">
                    <img src="../images/depassestdanger.jpg" alt="New York" class="d-block" style="width:100%; height:30%;">
                  </div>
                  <div class="carousel-item">
                    <img src="../images/droitepresentfeux.jpg" alt="New York" class="d-block" style="width:100%; height:30%;">
                  </div>
                  <div class="carousel-item">
                    <img src="../images/droitepresentstop.jpg" alt="New York" class="d-block" style="width:100%; height:30%;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        
        <div class="container mt-3">
          <div class="row text-center">
            <div class="col-md-12">
              <div class="cardd" style="width: 50%; border-radius: 20px; background-color: grey;">
                <div class="card-header" style=" border-radius: 20px;">
                  <h3 id="apropos">Á Propos de nous.</h3>
                </div>
                <div class="card-body text-center">
                  <div class="col-md-12">
                    <div class="card p-2 mt-2">
                      <p class="card-text">Face à la recrudescence des accidents dont la plupart sont dûs 
                        au méconnaissance aux règles élémentaires du code de la route.</p>
                      <p>Driversolution est une solution innovante pour permettre à tout chacun à maîtriser les règles
                        du code de la route gage de la sécurité routière. La personne organise sa formation en
                        fonction de ses disponibilités et de ses connaissances. La formation au code est accessible
                        24h/24 et 7j/7 via un ordinateur, une tablette ou un smartphone. Aussi, sa formation surmesure 
                        au code lui permet de maîtriser les rouages du code</p>
                      <a class="decoration" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#">Mieux nous connaître !</a>
                      </p>
                    </div>
                </div>
              </div>
              
              <p></p>
            </div>
          </div>
          
        </div>
      </div>

      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-12">
            <div class="cardd mb-3" style="width: 50%; border-radius: 20px; background-color: grey;">
              <div class="card-header text-center" style=" border-radius: 20px;">
                <h3 id="code-route">Code de la route</h3>
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">
                  <img src="../images/code.jpg" width="100px" height="100px" style="border-radius: 100px;">
                </h5>
                <div class="col-md-12">
                  <div class="card p-2 mt-2">
                    <p class="card-text">Vous pouvez à tout moment commencer à apprendre vos codes de conduite. 
                      Pour ce faire soit voit vous cliquez sur le bouton en bas du 
                      texte soit vous passez par le menu de la barre de navigation. <b>Attention ! </b>
                        Cette dernière possibilité requière imperativement une authentification. 
                      Ce la signifie que vous ne vous êtes pas connecté vous aurais ni aux cours ni aux séries.
                    </p>
                    <a href="inscription.php" class="btn" style="background-color: chocolate; color: white;">Commencer mes révisisons</a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-12">
            <div class="cardd mb-3" style="width: 50%; border-radius: 20px; background-color: grey;">
              <div class="card-header text-center" style=" border-radius: 20px;">
                <h3 id="serie-global">Série globale</h3>
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">
                  <img src="../images/quiz.jpg" width="100px" height="100px" style="border-radius: 100px;" >
                </h5>
                <div class="col-md-12">
                  <div class="card p-2 mt-2">
                  <p class="card-text">Vous pouvez passer par ce lien en cliquant sur le bouton sous-jaçent pour effectuer les séries. 
                  Tous comme vous avez la possibilité de faire les séries au niveau de la rubrique qui concerne les thèmes. <b>NB : </b> 
                  Il est formellement recommandé de d'apprendre les leçons avant d'attaquer les séries.</p>
                  <a href="inscription.php" class="btn" style="background-color: chocolate; color: white;">Faire mes testes</a>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-12">
            <div class="cardd mb-3" style="width: 50%; border-radius: 20px; border: 1px solid grey; background-color: white;">
              <div class="card-body text-center">
                <p class="card-text">
                  <a href="contact.php" class="btn" style="background-color: chocolate; color: white;">Veuillez nous contacter pour plus d'information. </a>
                </p>
              </div>
              <div class="card-footer text-center">
                <h3 id="contact">Contact</h3>
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
        include("../footer/footer.php");

        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("../script/script_link.php");
    ?>
</body>
</html>