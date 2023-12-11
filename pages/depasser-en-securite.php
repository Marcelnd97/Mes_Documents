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
              <h1><b>Dépasser en toute sécurité</b></h1>
              <div class="card question">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                        <p>Avant de dépasser un véhicule, que faut-il faire ?</p>
                    </div>
              </div>
              <br>
              <div class="card senscirc">
                <img src="./images/depassautoriser.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Dépassement autorisé </small></p>
              <p><b>Réponse :</b> Il faut d'abord évaluer les possibilités de dépassement et avant de passer à l'acte, 
                en informer les autres usagers. Il y a un avant, un pendant et un après, alors ne négligez pas les étapes.</p>
              <h3><b>Avant de dépasser</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Assurez-vous que la largeur de la chaussée permet de dépasser sans risque d'accrochage.</li>
              </ol>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Il faut laisser un intervalle d'au moins 1 m en agglomération et 1,50 m 
                    hors agglomération pour dépasser un deux-roues ou un piéton.</p>
                </div>
              </div>
              <br>
              
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Assurez-vous d'avoir une bonne visibilité. Si vous circulez sur une chaussée à double sens, 
                    assurez-vous qu'aucune voiture ne vient d'en face. N'oubliez pas que les voitures qui viennent d'en 
                    face circulent aussi à une certaine vitesse. Si vous entrez dans une rue où ce panneau est implanté au 
                    début de la rue, attention aux voitures venant d'en face !</li>
              </ol>
              
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/circdoublesens.jpg" width="200px">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Circulation à double sens</small></p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Ne vous rapprochez pas trop du véhicule à dépasser.</li>
                <li>Assurez-vous que le dépassement est bref, sans excéder la vitesse autorisée.</li>
                <li>Assurez-vous que votre réserve d’accélération est suffisante.</li>
                <li>Assurez-vous qu'aucun obstacle (cycliste, piéton, travaux sur la chaussée) 
                    n'obligera le véhicule dépassé à se décaler vers la gauche, 
                    là où vous aurez besoin de vous placer pour le dépassement.</li>
                <li>Assurez-vous que vous-même n'êtes pas en train d'être dépassé en le vérifiant 
                    dans vos rétroviseurs intérieur et extérieur gauche.</li>
                <li>Pensez à regarder souvent dans les rétroviseurs afin d'être informé au mieux de l'évolution de la 
                    situation et des intentions des usagers qui circulent derrière vous.</li>
                <li>Pensez aussi à regarder directement en tournant la tête à gauche pour voir si aucun autre 
                    usager n'est caché dans l'angle mort.</li>
              </ol>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>L'angle mort est la zone inaccessible au champ de vision pour le conducteur d'un véhicule sans rotation de la tête, 
                    parce qu'elle n'est ni couverte par la visibilité des rétroviseurs ni sur les côtés du véhicule.</p>
                </div>
              </div>
              <br>
              <div class="card senscirc">
                <img src="./images/anglevisibletinvisible.jpg" height="500px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Angles visibles et invisibles depuis la place 
                du conducteur</small></p>
              
              <h5><b>Dépasser</b></h5>
              
              <p><b>Déboîtement </b></p>
              <p>Une fois que les conditions énumérées sont réunies et que vous êtes prêt, 
                voici les étapes à respecter :</p>
              <ol>
                <li>Mettez le clignotant gauche pour avertir de votre manœuvre ;</li>
                <li>Après avoir à nouveau vérifié latéralement, vous pouvez déboîter de façon progressive 
                    tout en respectant la distance entre les véhicules.</li>
              </ol>
              
              
              <p><b>Manœuvre de dépassement</b></p>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Pour effectuer le dépassement, vous devez bien accélérer et maintenir cette accélération tout au 
                    long de la manœuvre afin d'occuper la voie de gauche le moins longtemps possible.</li>
              </ol>
              <h5><b>Se rabattre</b></h5>
              <p>Dès que vous apercevez <b>l'avant du véhicule</b> dans le rétroviseur intérieur, vous devez vous rabattre 
                (revenir sur la voie de départ sur laquelle vous circuliez) sans trop ralentir pour ne pas 
                gêner la voiture dépassée.</p>
              <h2><b>Route à double sens avec élargissement et rétrécissement des voies </b></h2>
              <p>Certaines routes peuvent bénéficier des tronçons prévus pour les dépassements. 
                Ils sont annoncés avec des panneaux et panonceaux et durent un temps limité. 
                Il faut profiter de ces occasions pour doubler en toute sécurité. 
                Voici le schéma d'un tronçon de route où les dépassements sont possibles :</p>
              <div class="card senscirc">
                <img src="./images/depassepossible.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Dépassements possibles</small></p>
              <br>
              <div class="card senscirc">
                <img src="./images/pannindicelargi.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Panneaux indiquant l'élargissement et le rétrécissement de voies</small></p>
              <ol>
                <li> Créneau de dépassement sur section de route à 3 voies</li>
                <li>Réduction du nombre de voies sur route à chaussées séparées</li>
                <li>Section de route à 3 voies. Créneau de dépassement en sens inverse</li>
                <li>La circulation est interdite aux camions sur la voie du milieu qui sert à dépasser</li>
              </ol>
              <br>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Parfois, une voie centrale va servir au dépassement pour les deux sens de circulation. 
                    Pour rendre ces routes moins dangereuses, 
                    une alternance de créneaux de dépassement avec 2 voies dans un sens et 1 voie dans l'autre est mise en place.</p>
                </div>
              </div>
              <p><b>Routes à plusieurs voies</b></p>
              <p>Les routes à chaussée séparée (routes du type 2 fois 2 voies) peuvent aussi 
                être concernées par l'élargissement des voies mais qui ne visent pas forcément le dépassement.</p>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>Notez toutefois que les routes à 4 voies à double sens de circulation sont rares.</p>
                </div>
              </div>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/signal2x2voies.jpg" width="300px">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Signalisation rencontrée sur les 2 x 2 voies</small></p>
              <ol>
                <li>Annonce d'un créneau de dépassement ou d'une route à 2 x 2 voies</li>
                <li>Réduction du nombre de voies sur route à chaussée séparée</li>
              </ol>
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                <li>Actions à effectuer pour bien dépasser : 
                    s'assurer que c'est possible, avertir (mettre le clignotant), dépasser, vérifier, se rabattre.</li>
                <li>Les routes à plusieurs voies peuvent avoir un créneau de dépassement pendant un temps limité.</li>
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