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
              <h1><b>Évaluer et ajuster</b></h1>
              <br> 
              <p>Avoir la notion de vitesse en voiture est parfois difficile, surtout si vous conduisez une voiture moderne 
                qui n'émet aucun bruit contrairement à la petite 205 des années 2000 qui commence 
                à trembler dès qu'on atteint les 100 km/h sur l'autoroute !</p>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Quelle que soit la vitesse, elle est identique dans les 2 voitures,
                     mais on la sent moins dans la première que dans la deuxième.</p>
                </div>
              </div>
              <br>
              <p>Il est donc indispensable de comprendre la notion de vitesse sans s'appuyer
                 sur ses sensations pour ne pas se surprendre à rouler trop vite.</p>
              <br>
              <h4><b>Évaluer la vitesse</b></h4>
              <p>Pour évaluer la vitesse, il faut se demander combien de mètres parcourt un véhicule en 1 seconde. Pour obtenir ce résultat, 
                <b>il faut multiplier le chiffre des dizaines de la vitesse par 3.</b></p>
                <p>Si vous conduisez à 50 km/h, alors cela donne 5 x 3 = 15 m/s. 
                    Si vous conduisez à 50 km/h, vous parcourez 15m/s.</p>
              <p>Si vous conduisez à 80 km/h, alors cela donne 8 x 3 = 24 m/s. Si vous conduisez à 80 km/h, vous parcourez 24m/s.</p>
              <p>Si vous conduisez à 130 km/h, alors cela donne 13 x 3 = 39 m/s. Si vous conduisez à 130 km/h, 
                vous parcourez 39 m/s.</p>
                <br>
              <h4><b>Ajustement de la vitesse</b></h4>
              <p>Il s'agit de maîtriser son véhicule en toute circonstance pour éviter ou prévenir un accident.</p>
              <p>Voici les éléments auxquels vous devez être vigilants et veiller à ajuster votre vitesse si besoin, 
                <b>même si aucun panneau relatif à la vitesse n'est présent</b>. Il faut donc tenir compte :</p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li> de la configuration de la route ( virages, intersections, passages étroits..) ;</li>
                <li> des autres usagers (animaux, piétons, deux-roues..) ;</li>
                <li>de la traversée des lieux-dits ;</li>
                <li>de la visibilité (nuit, brouillard..) ;</li>
                <li> du trafic ;</li>
                <li> des chantiers en cours (projections de gravillons, rétrécissement de chaussée, 
                    des hommes qui travaillent sur les chantiers).</li>
              </ol>
              <p>Observez les 3 photos ci-dessous. Aucune ne fait explicitement référence à la vitesse à respecter, 
                or, vous devez ralentir :</p>
              <br>
              <div class="card senscirc">
                <img src="./images/ralentircausegazoile.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Ralentir à cause du gazoil déversé sur la chaussée</small></p>
              <div class="card senscirc">
                <img src="./images/ralentircausevirage.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Ralentir à cause des virages à venir pendant 6 km</small></p>
              <div class="card senscirc">
                <img src="./images/ralentircausepieton.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Même sur route hors agglomération, ralentir à cause des piétons </small></p>
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Pour évaluer la vitesse, il faut multiplier les dizaines de la vitesse par 3.</li>
                <li>L'ajustement de la vitesse demande du bon sens (ralentir dans les virages,
                    lorsqu'il y a d'autres usagers sur la route, des travaux, des employés des travaux publics, etc).</li>
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