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
              <h1><b>Dépassements difficiles</b></h1>
              <br> 
              <p>Certains dépassements peuvent s'avérer difficiles ou dangereux.</p>
              <h4><b>Dépassements dangereux</b></h4>
              <p>Ces dépassements sont possibles en théorie mais dangereux en pratique.</p>
              <p>Il s'agit des routes avec des lignes discontinues mais qui contiennent beaucoup de virages. 
                S'il y a une voiture devant vous que vous souhaitez dépasser (voir la photo ci-dessous), 
                je vous conseille de patienter pendant 6 km avant de vous lancer dans un dépassement :</p>
              <div class="card senscirc">
                <img src="./images/nodepasvirage.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Ne dépassez pas d'autres véhicules dans les virages</small></p>
              
              <p>Voici tous les panneaux qui peuvent indiquer des virages. En leur présence, 
                je vous conseille de vous abstenir de dépasser même si le marquage au sol vous y autorise :</p>
                <br>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/depasmaeviter.jpg" width="300px">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Dépassements à éviter</small></p>
              <p>Les quatre panneaux indiquent l'existence des virages. Le n°1 et le n°2 indiquent le danger des virages à 
                droite et à gauche. Le n°3 et le n°4 indiquent une succession de virages. 
                Pour le n°3 le premier virage est à droite et pour le n°4 il est à gauche.</p>
              <p>Parfois, les routes ne contiennent pas de virages, mais sont en montée et votre visibilité étant réduite 
                vous ne pouvez pas voir si quelqu'un arrive en face. Bien entendu, 
                le dépassement est extrêmement dangereux. La preuve en image :</p>
              <div class="card senscirc">
                <img src="./images/depassdanger.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Dépassement dangereux</small></p>
              <p>Je vous déconseille également de vous engager dans un dépassement si les conditions climatiques ne 
                sont pas bonnes car vous pouvez glisser ou être déporté par le vent !</p>
                <p>Si vous devez dépasser une file de véhicules en une seule fois, 
                    pensez à garder le clignotant pendant toute la manœuvre.</p>
              <br>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Si vous effectuez un dépassement dangereux vous risquez 135 euros d'amende, 
                    3 ans de suspension de permis de conduire ainsi que la perte de 3 points sur votre permis.</p>
                </div>
              </div>
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Les dépassements sont fortement déconseillés dans les situations 
                    avec un manque de visibilité (virages, route qui monte..).</li>
                <li>Les dépassements interdits, mais effectués, sont passibles d'une amende.</li>
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