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
    <link rel="stylesheet" href="../assets/theme.css">
    <title>Communiquer avec les autres</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<<body class="codebody">>
     <!--L'en-tête de la page-->
     <?php
        include("../header/header.php")
     ?>
    <br><br><br>
    <section>
      <div class="container">
       <!-- Content here -->
        <div class="row justify-content-center">
          <div class="col-md-8">
                <h1 style="font-weight: bold;">Communiquer avec les autres</h1>
                <br> 
                <p>Le code de la route a été mis en place pour que nous puissions anticiper les intentions des uns et des autres, 
                    mais aussi pour informer les autres de nos propres intentions.</p>
                <p>La communication entre les voitures se fait seulement grâce aux alertes que chaque conducteur émet 
                    en fonction de la signalisation qu'il doit respecter. 
                    Donc il s'agit bel et bien d'une forme de communication, je dirais même - d' une langue étrangère.</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Le code de la route est aussi un langage qu'on apprend à "comprendre" et à "parler" afin de 
                        communiquer avec les autres usagers de la route en toute sécurité.</p>
                    </div>
                </div>
                <br>
                <p>Être vu et bien compris est indispensable pour ne pas gêner, ne pas surprendre et 
                    aussi ne pas causer d'accident.</p>
                <h3 style="font-weight: bold;">Clignotants</h3>
                <p>Ces ampoules qui clignotent quand vous les actionnez, attirent le regard des autres vers
                     le côté de la route que vous souhaitez emprunter : gauche ou droit.</p>
                <p>Il faut utiliser les clignotants avant tout pour un changement de
                     direction, un dépassement, un changement de voie ou une insertion dans la circulation.</p>
                <p>Il faut utiliser les feux de détresse si les véhicules roulent à une vitesse réduite et
                     peuvent causer un embouteillage ou si on est en panne sur la chaussée.</p>
                <br>
                <div class="card senscirc">
                    <img src="../images/gauch-droit-commande.jpg" height="350px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Clignotants et warning</small></p>
                
                <h3 style="font-weight: bold;">Klaxon</h3>
                <p>Vous avez certainement entendu les conducteurs se servir de cet avertissement sonore pour exprimer 
                    leur exaspération face à ceux qui n'avancent pas ou font des gestes brusques ou interdits. 
                    Or, utiliser le klaxon en ville ou la nuit est interdit, sauf en cas de danger immédiat.</p>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Si vous utilisez le klaxon, cela doit être justifié par un danger imminent !</p>
                    </div>
                </div>
                <br>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Observez la photo ci-dessous. Est-ce justifié d'utiliser le klaxon ?</p>
                  </div>
                </div>
                <br>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/comuniquer.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Ne pas klaxonner</small></p>
                <p>Réponse : Ici, le piéton est déjà engagé. Même s'il n'a pas respecté le feu piéton, 
                    vous ne devez pas klaxonner. Cela ne servirait à rien.</p>
                <p>Si vous êtes sur une route très sinueuse et étroite, vous avez le droit d'utiliser le 
                    klaxon, c'est même conseillé :</p>
                <div class="card senscirc">
                    <img src="../images/klaxonpreconiser.jpg" height="300px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Klaxon préconisé</small></p>
                <h3 style="font-weight: bold;">Avertisseurs lumineux</h3>
                <p>Les feux Stop s'allument dès que le conducteur appuie sur la pédale de frein. 
                    Ce que je vous disais dans les chapitres précédents, 
                    c'est que dès que vous commencez à freiner un peu, le conducteur derrière vous le verra.</p>
                <p class="text-muted text-center"><small >Rue à sens unique</small></p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/strategie2.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>La voiture rouge est à l'arrêt</small></p>
                <br>
                <p>La nuit, vous pouvez aussi avertir les autres conducteurs d'un danger par un appel de phares rapide :</p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/comuniquer2.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Le conducteur derrière nous est soit en plein 
                    phare soit ce phare clignote pour faire un appel</small></p>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Les clignotants et les feux de détresse vous servent à avertir 
                        les autres conducteurs du changement de direction ou de trajectoire.</li>
                    <li>Le klaxon est à utiliser seulement en cas d'urgence.</li>
                    <li>Les avertissements lumineux servent à avertir la nuit des dangers sur la route non communiqués.</li>
                </ol>
                <br>              
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