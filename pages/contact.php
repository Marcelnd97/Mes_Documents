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
    <link rel="stylesheet" href="../assets/theme.css">
    <title>Contact</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body class="codebody">
    <!--L'en-tête de la page-->
    <?php
        include("../header/header.php");
     ?>
    <br><br><br>
    <section>
        
        <div class="container mt-3">
          <!-- Content here -->
          <div class="row justify-content-md-center">
            <div class="col-md-9">
              <div class="card cardapropos">
                <div class="card-header text-center apropos">
                  <h3>Contact</h3>
                </div>
              <div class="col-md-12">
                  <div class="card p-2 mt-2">
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
        include("../footer/footer.php");

        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("../script/script_link.php");
    ?>
</body>
</html>