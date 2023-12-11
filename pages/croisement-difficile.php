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
              <h1><b>Croisements difficiles</b></h1>
              <br> 
              <h4><b>Routes en pente : croisements difficiles</b></h4>
              <p>Ici il faut que la manœuvre soit facilitée pour le véhicule pour lequel c'est le plus dangereux.</p>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>Il est plus difficile de repartir dans la montée, 
                    c'est pourquoi le véhicule descendant s'arrête en premier et facilite le passage du véhicule montant.</p>
                </div>
              </div>
              <br>
              
              <div class="card senscirc">
                <img src="./images/priorivoiturmontant.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Priorité au véhicule qui monte</small></p>
              
              <h3><b>Routes en pente : croisements impossibles</b></h3>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>Lorsque les croisements deviennent impossibles, c'est au véhicule le plus maniable de reculer.</p>
                </div>
              </div>
              <br>
              <p>Les règles de priorité à respecter :</p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Les règles de priorité à respecter :</li>
              </ol>
              <div class="card senscirc">
                    <img src="./images/reculerseul.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Vous reculez seuls face à plusieurs véhicules</small></p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>un véhicule léger doit reculer face à un véhicule lourd :</li>
              </ol>
              <div class="card senscirc">
                    <img src="./images/voiturlegerfacelourd.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Le plus lourd a la priorité</small></p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>le véhicule qui descend recule si les deux véhicules sont de même catégorie </li>
              </ol>
              <div class="card senscirc">
                    <img src="./images/reculmemegabari.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Recule celui qui descend en cas de même gabarit</small></p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>si une place d'évitement est disponible, 
                    c'est au véhicule qui se trouve près de cette place de l'utiliser même s'il doit reculer.</li>
              </ol>
              <div class="card senscirc">
                    <img src="./images/placevitement.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Place d'évitement</small></p>

              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Les règles des croisements difficiles ou impossibles s'effectuent en fonction du poids, 
                    de l'emplacement des véhicules et de leur nombre.</li>
                <li>Monter est plus difficile que de descendre.</li>
                <li>Manier un véhicule lourd est plus difficile que de manier un véhicule léger.</li>
                <li>Manier un ensemble de véhicules est plus difficile que de manier un seul véhicule.</li>
                <li>Si un emplacement est près du véhicule qui monte, il peut s'en servir pour laisser passer le véhicule qui descend.</li>
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