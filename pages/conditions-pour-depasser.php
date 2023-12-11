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
              <h1><b>Conditions pour dépasser</b></h1>
              <br>
              <p>Les dépassements sont autorisés seulement si toutes les conditions de sécurité sont 
                réunies et optimales et que la signalisation ne l'interdit pas :</p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>vous ne devez gêner aucun usager de la route ;</li>
                <li>vous devez savoir où vous rabattre ;</li>
                <li>le véhicule que vous souhaitez dépasser ne doit pas avoir d'obstacle devant lui (un cycliste par exemple) ;</li>
                <li>l'état de la chaussée doit être optimal (éviter par temps de pluie, neige et brouillard) ;</li>
                <li>vous devez toujours avoir assez de visibilité ;</li>
                <li>vous ne devez gêner personne derrière vous et devez vous assurer qu'aucun autre automobiliste ne soit dans l'angle mort ;</li>
                <li>vous ne devez pas dépasser la vitesse maximale autorisée ;</li>
                <li>la différence de vitesse doit être d'au moins 20 km/h et la distance entre le moment où vous avez 
                    commencé le dépassement et l'avez fini de 250 m.</li>
              </ol>
              
              <div class="card senscirc">
                <img src="./images/depassantproblem.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Dépasser sans problèmes </small></p>
              <p>Le dépassement est aussi autorisé dans les cas suivants, 
                même si je vous conseille de rester vigilant et surtout d'analyser d'abord la situation :</p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>sur un passage à niveau avec barrières ou demi-barrières ;</li>
                <li>aux intersections auxquelles vous avez la priorité ;</li>
                <li>à proximité d'une intersection où vous n'avez pas la priorité mais à condition d'avoir la visibilité suffisante ;</li>
                <li>la nuit où la visibilité est réduite, il faut mettre les bons phares et surtout rester vigilant, 
                    car d'autres usagers de la route comme les piétons peuvent vous surprendre.</li>
              </ol>
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Les dépassements autorisés sont possibles et faisables <b>seulement sous des conditions indispensables</b> 
                    (bonne visibilité, respect de la vitesse et des distances, pas d'obstacles sur la route..).</li>
                <li>La différence entre le véhicule qui dépasse et le véhicule dépassé <b>doit être d'au moins 20 km/h.</b></li>
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