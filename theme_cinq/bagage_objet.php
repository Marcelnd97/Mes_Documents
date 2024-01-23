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
    <title>Bagages et objets encombrants</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<<body class="codebody">>

    <!--L'en-tête de la page-->
    <?php
        include("../header/header.php");
    ?>
    <section>
      <br><br><br><br>

      <div class="container">
       <!-- Content here -->
        <div class="row justify-content-center">
          <div class="col-md-8">
                <h1 style="font-weight: bold;"><b>Bagages et objets encombrants</b></h1>
                <br>
                <h2 style="font-weight: bold;">Voyagez léger !</h2>
                <p>C'est dans le coffre que les bagages sont les moins encombrants et les moins dangereux.</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Ne placez rien sur la plage arrière, car cela entrave la visibilité !</p>
                    </div>
                </div>
                <br>
                
                <p>Si vous transportez des objets lourds et encombrants dans votre voiture, cela va avoir une influence 
                    sur :</p>
                <ol style="list-style-type: disc;">
                    <li>le confort (mouvements du conducteur et visibilité) ;</li>
                    <li>la visibilité (plage arrière notamment) ;</li>
                    <li>la consommation du carburant.</li>
                </ol>
                <p>Même s'il est tentant de ne faire qu'un trajet en voiture en cas de déménagement, 
                    mieux vaut faire plusieurs trajets plutôt que de provoquer un accident ! </p>
                <br>
                <p>Pour que cela n'arrive pas, il est préférable de suivre ces règles :</p>
                <ol style="list-style-type: disc;">
                    <li>chargez d'abord le coffre et fixez bien les objets pour les maintenir en place ;</li>
                    <li>évitez de poser les objets sur la plage arrière car cela entrave la visibilité 
                        d'un côté et devient dangereux en cas de freinage brusque de l'autre 
                        (par inertie les objets vont être projetés vers l'avant) ;</li>
                </ol>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                        <p>Si votre véhicule est trop chargé, les manœuvres seront plus compliquées.</p>
                    </div>
                </div>
                <br>
                
                
                <p>La direction devient moins sûre, la distance de freinage est plus longue, 
                    la consommation de carburant est plus importante.</p>
                <p>Mais si vous ne pouvez pas faire autrement, alors pensez :</p>
                <ol style="list-style-type: disc;">
                    <li>à augmenter la pression des pneus (nous verrons cela dans l'un des prochains cours) ;</li>
                    <li>à régler la hauteur des feux (voir photo ci-dessous) ;</li>
                    <li>à anticiper davantage sur le freinage.</li>
                </ol>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 250px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_cinq/bagage1.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Réglage des feux </small></p>
                    </div>
                </div>
                
                <p>1. Position de base : "0".</p>
                <p>2. Position pour hausser les phares : "1" ou même plus sur certains modèles de voitures (2,3..).</p>
                <p>Si vous voulez transporter un vélo, vous avez plusieurs possibilités.  Avant tout achat, 
                    assurez vous de la compatibilité du modèle avec votre véhicule.</p>
                <p>Le modèle à sangles s’installe sur le coffre ou le hayon de la voiture. Il permet de 
                    transporter 3 vélos. Inconvénient : il cache la visibilité arrière du conducteur.</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                        <p>Si l'objet transporté dissimule la plaque d'immatriculation, il faut fixer une 
                            deuxième plaque sur l'objet.</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_cinq/bagage2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Transport du vélo </small></p>
                    </div>
                </div>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Le transport des vélos en haut du véhicule augmente la 
                        consommation du carburant avec une plus grande prise au vent.</p>
                    </div>
                </div>
                
                <p><b>Dépassement des objets à l'extérieur</b></p>
                <p><b class="text-muted">En longueur</b></p>
                <p>Si vous devez fixer les objets sur le toit de la voiture, 
                    sachez qu'il est interdit que ceux-ci dépassent l'avant du véhicule, carrosserie incluse.</p>
                <p>Le dépassement arrière ne doit pas excéder 3 m. Dès 1 m, il doit être signalé comme suit :</p>
                 <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 450px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_cinq/bagage3.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Dépassement à l'arrière  </small></p>
                    </div>
                </div>
                <br>
                <p>La nuit, ce panneau doit être  complété par un <b>feu rouge 
                    orienté vers l'arrière ou par un catadioptre orange</b> de chaque côté latéral du véhicule. </p>
                <p><b class="text-muted">En largeur</b></p>
                <p>Les objets chargés ne doivent pas dépasser les 2,55 m.</p>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Une galerie de toit entraîne une surconsommation de carburant, 
                        car la résistance à l'air est plus grande !</p>
                    </div>
                </div>
                <p><b class="text-muted">En hauteur</b></p>
                <p>En principe, il n'y a pas de limitation sauf si vous devez passer 
                    sous un pont ou un endroit où la hauteur est limitée.</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                        <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                        <p>Mesurez avec attention les objets dépassant de votre véhicule pour à la fois 
                            être en règle et ne pas risquer d'abîmer votre matériel.</p>
                    </div>
                </div>
                <br>
                
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Le transport des objets est soumis aux règles du code de la route.</li>
                   <li>Pour transporter des objets, il faut s'assurer que votre visibilité, et donc votre sécurité,
                     ne soit pas mise en question.</li>
                   <li>Une voiture chargée roule moins bien qu'une voiture vide ; pensez à gonfler davantage les pneus, 
                    à régler la hauteur des feux et à être plus vigilants sur le freinage.</li>
                   <li>Si les objets chargés dépassent en longueur, en largeur ou en hauteur, vous devez vérifier si vous
                     respectez les normes en vigueur quant à leur transport.</li>
                   <li>Si les objets que vous transportez dépassent à l'arrière, vous devez les signaler de jour comme de nuit.</li>
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