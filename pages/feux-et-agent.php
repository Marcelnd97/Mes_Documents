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
              <h1><b>Les feux et les agents</b></h1>
              <br> 
                
              <h5><b>Feux</b></h5>
               <P>Ce régulateur de circulation va se situer aux intersections 
                (non pas aux ronds-points ou carrefours à sens giratoire) pour ordonner l'arrêt et le départ des voitures. 
                Les feux accompagnent le marquage au sol, la ligne des feux. Si les feux aux couleurs pleines vous sont familiers, 
                n'oubliez pas ceux qui contiennent des flèches. Ces derniers vont concerner seulement une certaine direction à 
                suivre ou designer une certaine catégorie d'usagers pouvant l'emprunter. Commençons par ce que vous connaissez déjà :
              </p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/tricolor.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Feux tricolores</small></p>
              <p>Comme vous l'avez certainement repéré, les feux contiennent 3 couleurs: verte, jaune et rouge.</p>
              <div class="card important">
                <div class="card-body pb-1">
                <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                <p>Attention à la couleur du feu jaune. Dans le langage courant il est souvent appelé orange, 
                    or dans le code de la route la couleur est jaune.</p>
                </div>
              </div>
              <br>
              <p>1. Le feu vert donne l'autorisation de continuer tout droit où même de tourner à gauche ou à droite. 
                Je parlerai des changements de direction dans le prochain chapitre.
              </p>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>
                    Si vous voulez aller tout droit et que la circulation est bloquée, 
                    il conviendrait de ne pas s'engager dans la circulation pour ne pas l'encombrer. 
                    Aussi, si le feu est vert depuis longtemps, pensez à ralentir, 
                    car il va sûrement changer de couleur d'une seconde à l'autre.
                  </p>
                </div>
              </div>
              <br>
              
              <div class="card senscirc">
                <img src="./images/carefencombrer.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Carrefour encombré : ne pas s'engager malgré le feu vert </small></p>
              <p>2. Le feu jaune est lié au feu rouge. Il faut vraiment faire attention à vérifier 
                    qu'il n'y a pas de véhicule ne respectant pas l'intervalle de sécurité derrière vous. 
                    Si vous pilez en cas de danger imminent, vous pouvez avoir ou causer un accident !
              </p>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Le feu jaune apparaît après le vert, mais pas dans le sens inverse ! Lorsque vous êtes arrêtés au feu rouge, 
                    il passera directement au vert.</p>
                </div>
              </div>
              <br>
              <p>3. Le feu rouge impose un arrêt net à l'aplomb du support, 
                ou alors avant le passage piétons ou à la hauteur de la ligne des feux. 
                Ce feu demande de faire aussi attention au marquage au sol.
                 Le schéma ci-dessous illustre bien la situation :</p>
              <div class="card senscirc">
                <img src="./images/feuxmarque.jpg" height="400px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Feux et marquage au sol</small></p>
              <br>
              
              <h3><b>Combinaison feux + panneaux</b></h3>
              <p>En cas de panne de feux, la circulation ne doit pas être perturbée. 
                Pour rendre la circulation fluide et ne faire paniquer aucun automobiliste, 
                des panneaux sont installés en dessous de chaque feu pour prendre leur relais.</p>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Si à un feu rouge vous remarquez la présence d'un autre panneau et que le feu fonctionne, 
                    il faut suivre les indications du feu. Si en revanche, 
                    il est en panne, il faut suivre l'indication du panneau.</p>
                </div>
              </div>
              <br>
              
              <p>Remarquez le panneau de Cédez le passage en dessous du feu :</p>
              <div class="card senscirc">
                <img src="./images/comptepan.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Panneau à prendre en compte lorsque les feux ne fonctionnent pas</small></p>
              <br>
              <h3><b>Plusieurs feux</b></h3>
              <p>En revanche, si vous circulez dans les axes qui contiennent plusieurs voies, 
                il y aura alors plusieurs feux.</p>
              <p>N'oubliez pas d'allumer le clignotant à la hauteur de la sortie précédente.</p>
              <div class="card question">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                        <p>Observez bien la photo ci-dessous. Si vous voulez aller tout droit, où vous placez-vous ? Selon quel critère ? 
                            Quel feu faudrait-il suivre ? Prenez le temps de bien observer tous les détails de la photo.</p>
                    </div>
              </div>
              <br>
              <div class="card senscirc">
                <img src="./images/positionnement.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Feux et positionnement sur la chaussée</small></p>
              
              <p><b>Réponse : </b>Je vous ai déjà parlé du marquage au sol et des règles de positionnement. 
              Or, sur cette photo nous ne voyons pas devant nous les flèches par terre nous indiquant les sens possibles. 
              En revanche, dans le rétroviseur intérieur, nous voyons que les flèches ont été indiquées 50 m auparavant. 
              Par conséquent, la voie où vous vous trouvez n'est pas la bonne si vous voulez aller tout droit. 
              La flèche n° 2 indiquée dans le rétroviseur est exclusive : c'est pour tourner à droite. Donc pour aller tout droit, 
              il aurait fallu se positionner dès le début sur la voie de gauche, car c'est celle-ci qui indique la direction voulue. 
              Votre feu attitré est donc le n° 1, mais aussi le n° 3. Si vous voyez deux feux qui émettent des informations identiques, 
              comme c'est le cas ici, sachez que c'est pour augmenter la visibilité des feux. 
              De loin, vous verrez plus facilement le n°1 et le n°2, 
              et une fois proche de l'intersection, vous verrez le n°3 et le n°4.</p>
              <h3><b>Panneau de danger annonçant les feux</b></h3>
              <p>La présence de certains feux peut surprendre, par exemple si vous quittez une route nationale 
                et entrez en agglomération. Pour éviter que le conducteur soit pris au dépourvu, 
                le panneau ci-dessous annonce la présence de feux tricolores.</p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/feuxtricolore.jpg" width="100px; height: 100px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Panneau annonçant les feux tricolores </small></p>
              <h4><b>Policier : un cas hybride</b></h4>
              <p>Il s'agit d'un autre régulateur de trafic qui intervient lorsque les feux sont en panne, 
                pour effectuer les différents contrôles (documents, alcoolémie, respect du code de la route) 
                ou sécuriser les lieux en cas d'accident. Voici les gestes à connaître pour savoir s'arrêter, 
                ralentir ou passer sans problème face à un policier :</p>
                <br>
              <div class="card senscirc">
                <img src="./images/gestepolice.jpg" height="300px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Gestes du policier</small></p>
              <p>Comme vous pouvez le constater, il peut vous autoriser à circuler, 
                vous ordonner de vous arrêter ou vous interdire le passage. 
                C'est un vrai couteau suisse de la circulation !</p>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>Le policier annule et remplace toute signalisation mise en place, 
                    même si ses gestes contredisent le message 
                    émis par les panneaux ou les feux tricolores.</p>
                </div>
              </div>
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Le policier a le pouvoir sur la signalisation. En sa présence, 
                    il faut suivre ses instructions en priorité.</li>
                    <li>Lorsque le policier est absent, les feux régissent les priorités.</li>
                    <li>Lorsque les feux sont en panne, les panneaux sous les feux dictent les priorités.</li>
                    <li>En l'absence des panneaux, il faut appliquer la règle de la priorité à droite.</li>
                    <li>Si certains feux peuvent surprendre en quittant la route et en arrivant en agglomération, 
                        ils sont annoncés par un panneau.</li>
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