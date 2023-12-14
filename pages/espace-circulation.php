<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../pages/assets/theme.css">
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">

<!--L'en-tête de la page-->
<?php
    include("header.php");
?>
	
    <section>
      <br><br><br><br>

      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-10" style="padding-left: 25%;">
              <h1><b>Espace de circulation</b></h1>
              <br> 
              <div class="card question">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                        <p>En agglomération et sur les routes, la signalisation n'est pas forcément la même. Pourquoi ?</p>
                    </div>
              </div>
              <br>
              <p><b>Réponse : </b>La densité des habitations est différente, les vitesses seront donc différentes,
               l'environnement est différent (sur la route vous trouverez les animaux domestiques 
               si vous passez par une région montagneuse, les pierres qui tombent sur la route, etc..).
              </p>
              <p>L'environnement de la circulation peut être <b>considéré au sens large</b> (en ville) 
                ou plus <b>particulier</b> (sur une piste cyclable). Avant de passer aux cas particuliers, 
                voyons d'abord l'espace de circulation au sens large : en agglomération et hors agglomération.
              </p>
              <h4><b>Agglomération vs. hors agglomération</b></h4>
               <P>
               La première distinction à faire quand il s'agit de l'espace de circulation, 
               c'est de savoir si vous êtes en agglomération ou hors agglomération.
              </p>
              <div class="card attention">
                <div class="card-body">
                  <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                  <p>L'agglomération n'est pas seulement une grande ville, 
                    c'est aussi un village de 3000 habitants par exemple.</p>
                </div>
              </div>
              <br>
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>
                  L'agglomération comprend l'espace où sont groupées des habitations rapprochées et dont l'entrée 
                  et la sortie sont signalées par des panneaux.Que vous habitiez en ville ou dans un village, 
                  vous habitez en agglomération.
                  </p>
                </div>
              </div>
              <br>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/D906.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Entrée et sortie d'agglomération</small></p>
              
              <p>Le premier panneau annonce l'entrée de Courpière, tandis que le second étant rayé, annonce la sortie de Champeix.</p>
              <p>Si les habitations sont beaucoup moins denses, alors elles ne constituent pas une agglomération mais un lieu-dit. 
                Ce dernier est représenté sur un panneau de plus 
                petite taille que ceux d'entrée ou de sortie d'agglomération et qui est de couleur noire.</p>
                <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="./images/gorgeluxe.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Représentation d'un lieu-dit : Entrée (1) et Sortie (2)</small></p>
              <h4><b>Qui circule où ?</b></h4>
              <div class="card question">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b>
                        <p>Observez la photo ci-dessous et pensez aux usagers qui empruntent les différents espaces.</p>
                    </div>
              </div>
              <br>
              <P><b>Réponse : </b>En tant que piéton en agglomération, 
               vous devez vous déplacer en empruntant un lieu sûr : le trottoir. Hors agglomération,
               pensez à emprunter l'accotement qui est contraire au sens de la circulation 
              (marchez du côté gauche de la route pour être vu).</P>
              <div class="card senscirc">
                <img src="./images/partiroute.jpg" height="200px" class="senscirc">
              </div>
              <p class="text-muted text-center"><small>Parties de la route </small></p>
              <p>Quant aux voitures et aux bus, ils circulent essentiellement sur 
                la chaussée tant en agglomération qu'en dehors.</p>
              <p>Les vélos peuvent circuler tantôt sur la chaussée tantôt sur le trottoir. </p>
              <p>Pour que les usagers ne gênent pas la circulation les uns aux autres, 
                ils circulent dans des espaces bien délimités.</p>
              <br>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
                    <li> La route contient les différents espaces que les usagers peuvent emprunter : 
                        accotement, trottoir, chaussée, voie.</li>
                    <li>Un village est aussi une agglomération à condition que les habitations soient denses. </li>
              </ol>
          </div>
        </div>
      </div>

    </section>

    <!--Le pied de la page-->
    <?php
    // <!--Le pied de la page-->
        include("footer.php");

        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("script_link.php");
    ?>
</body>
</html>