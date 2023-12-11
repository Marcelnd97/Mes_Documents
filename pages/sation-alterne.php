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
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 20px; ">

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
                <h1 style="font-weight: bold;"><b>Stationnement alterné</b></h1>
                <br>
                <P>Dans certaines rues, le stationnement est régi par une période dans le mois. 
                    C'est à dire qu'il est interdit de stationner du côté de la rue où l'un de ces 2 panneaux est implanté. 
                    Ce stationnement est appelé unilatéral, donc juste d'un côté, 
                    à alternance semi-mensuelle (tantôt c'est interdit du 1er au 15 du mois, tantôt du 16 au 31).</p>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Le changement d'application de la règle se fait le 15 et le dernier jour du mois entre 20 h 30 et 21 h.</p>
                    </div>
                </div>
                <br>
                <p>Voici l'exemple :</p>
                <div class="card senscirc">
                    <img src="./images/ioninterselonperiodmois.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Stationnement interdit selon la période dans le mois</small></p>
                <ol>
                    <li>Stationnement interdit du côté du panneau du 1er au 15 du mois</li>
                    <li>Stationnement interdit du côté du panneau du 16 à la fin du mois</li>
                </ol>
                <br>
                <p class="text-muted"><b>Combinaisons panneaux / panonceaux</b></p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Non seulement le stationnement peut être autorisé ou interdit d'un seul côté, 
                        alterné et semi-mensuel, il peut être payant ou contrôlé par disque.</p>
                    </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="./images/pancombininterdposibstation.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Panonceaux qui combinent les interdictions 
                    et les possibilités de stationner</small></p>
                
                <ol>
                    <li>Le premier panneau signifie la chose suivante : 
                        entrée en zone à stationnement unilatéral à alternance semi-mensuelle dont le stationnement est payant</li>
                    <li>Le deuxième panneau signifie : stationnement interdit du côté du panneau du 1er au 15 du mois, 
                        mais il est payant du 16 au 31.</li>
                    <li>Le troisième panneau signifie : stationnement interdit du côté du panneau du 1er au 15 du mois, 
                        mais du 16 au 31 il est possible de stationner entre 09 h et 17 h, 
                        la durée autorisée est indiquée sur le panonceau qui complète le panneau ou il faut se renseigner en mairie.</li>
                </ol>
                <p>Voici à présent le schéma des stationnements unilatéraux à alternance semi-mensuelle :</p>
                <div class="card senscirc">
                    <img src="./images/stationunilateral.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Stationnement unilatéral</small></p>
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Les règles de stationnement varient en fonction des périodes dans le mois ou les heures.</li>
                    <li>Les restrictions seront appliquées au côté pair ou impair dans une 
                        rue (panneau rond) ou dans une zone (panneau rond sur un fond blanc).</li>
                    <li>Les restrictions mensuelles peuvent être soumises aux conditions de paiement.</li>
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