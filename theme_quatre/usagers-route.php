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
    <title>Usagers de la route</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">

    <!--L'en-tête de la page-->
    <?php
        include("../header/header.php");
    ?>
    <section>
      <br><br><br><br>

      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-10" style="padding-left: 25%;">
                <h1 style="font-weight: bold;"><b>Usagers de la route</b></h1>
                <br>
                <p>Commençons par la définition des gens qui se retrouvent sur la route. Il s'agit, 
                    en grande partie, des conducteurs de voitures, mais il est important de ne pas négliger 
                    ceux qui participent activement à la circulation, comme les piétons ou les cyclistes. 
                    Je suis sûre que vous savez tout cela, mais quelques précisions ne vous feront pas de mal.</p>
                <p>Les conducteurs de voitures ne sont pas les seuls usagers de la route. Ne négligez 
                    surtout pas les piétons, les conducteurs de véhicules à deux roues (motos ou vélos), 
                    les conducteurs de transports en commun, des véhicules lents ou d'intervention urgente.</p>
                <br>
                <div class="card attention">
                    <div class="card-body">
                    <b><i class="bi bi-exclamation-triangle"></i>&nbsp;&nbsp;Attention</b>
                    <p>Ce serait une erreur de croire que la signalisation vise seulement les voitures. 
                    Au contraire, elle donne des indications à tout le monde !</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Les piétons</h2>
                <p>Ce qui correspond à ce terme est non seulement une personne qui marche, mais aussi 
                    quelqu'un qui conduit une poussette ou tout autre véhicule de petites dimensions sans moteur ;
                     piéton est aussi une personne qui conduit à la main un cycle (vélo) ou un cyclomoteur (scooter) 
                     ou bien une personne à mobilité réduite se déplaçant en fauteuil roulant. Les piétons
                      empruntent le trottoir pour des raisons de sécurité. Seulement en cas d'impossibilité 
                      d'utiliser le trottoir, les piétons peuvent emprunter la route mais à condition d'être 
                      très vigilants.</p>
                <h2 style="font-weight: bold;">Les cyclistes</h2>
                <p>Ce sont des personnes qui se déplacent sur un vélo en empruntant des bandes ou des 
                    pistes cyclables. Ils partagent parfois, et souvent même, la route avec les automobilistes. 
                    Les personnes qui se déplacent en trottinette électrique doivent respecter les mêmes règles que 
                    les cyclistes.</p>
                <h2 style="font-weight: bold;">Les deux-roues</h2>
                <p>Il existe plusieurs catégories de deux roues-motorisés qui requièrent différents permis 
                    de conduire. Les cyclomotoristes d'un côté et les motocyclistes de l'autre. Les premiers 
                    sont ceux qui conduisent des scooters. Les seconds, des motos un peu plus grandes et 
                    plus puissantes.</p>
                <p>Les conducteurs de bus, trams ou de camions sont aussi les usagers de la route.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>A part les piétons et les vélos, les autres usagers de la route ont aussi besoin d'un permis de conduire.
                         J'en parlerai plus tard, dans un autre cours.</p>
                    </div>
                </div>
                <br>
                
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Il existe plusieurs types d'usagers de la route : piétons, deux-roues motorisés ou pas, 
                        conducteurs de voitures, conducteurs de bus, de camions.</li>
                    <li>Les assimilés piétons sont aussi les personnes en fauteuil roulant.</li>
                </ol>
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