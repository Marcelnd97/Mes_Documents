<?php
    //initialiser la session
    session_start(); 
        include("config.php");
   
    // vérifier si l'utilisateur est connecté, sinon redirigez le vers la page de donnection
    if(! isset($_SESSION['id'])) {
        header('location: login.php');
        exit();
    }


    // require('auth.php');

    // if(isAuthenticated()){
    //     // Rediriger vers la page de connexion si non authentifié
    //     header('Location: login.php');
    //     exit();
    // }

//     if (isset($_GET['logout'])) {
//         logout();
//         header('Location: login.php');
//         exit();
//     }
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
    <title>Thèmes et chapitres</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body class="codebody">

    <!--L'en-tête de la page-->
    <?php
        include("../header/header.php")
    ?>
        <br><br><br>
        <section>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-ms-12">
                        <a href="coderoute.php" class="retoure" style="text-decoration: none;">
                        <b>
                            <i class="bi bi-arrow-left-circle-fill" ></i>&nbsp;Retour
                        </b>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row text-center">
                    <div class="col-md-12 ">
                        <h1>Toutes les leçons de code</h1>
                        <p>Retrouvez ici toutes les leçons de code portant sur les 10 thèmes officiels de l’examen.</p>
                    </div>
                </div>
                <hr>
                <hr>
                <div class="row carteCode">
                    <div class="col-md-12">
                        <div class="cours">
                            <img src="../images/direction.jpg" class="rounded-circle" style="width: 8%; 
                                height: 8%;; border-radius: 50%;
                                border-top-left-radius: 50% 50%; 
                                border-top-right-radius: 50% 50%; 
                                border-bottom-right-radius: 50% 50%; 
                                border-bottom-left-radius: 50% 50%;
                                margin:2px;">&nbsp;
                                <span>Thème n° 1</span>    
                            <h3 class="mt-1">
                                <b>La circulation routière</b></h4>
                        </div>
                    </div>
                </div>

                <!-- Les intersections -->
                <div class="wrapper">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#base" class="btn" style="border: none;">
                        <div class="card theme" style="width: 18rem;">
                            <div class="card-header">
                            <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">8 Activités</p>
                            </div>
                            <div class="card-body">
                                <h3 class="mb-2 text-body">Les bases de la signalisation</h3>
                            </div>
                            <div class="card-footer">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                </div>&nbsp;<span>0/7</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#panneau" class="btn" style="border: none;">
                        <div class="card theme" style="width: 18rem;">
                            <div class="card-header">
                            <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">8 Activités</p>
                            </div>
                            <div class="card-body">
                                <h3 class="mb-2 text-body">Les panneaux</h3>
                            </div>
                            <div class="card-footer">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                </div>&nbsp;<span>0/7</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#intersection" class="btn" style="border: none;">
                        <div class="card theme" style="width: 18rem;">
                            <div class="card-header">
                            <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">8 Activités</p>
                            </div>
                            <div class="card-body">
                                <h3 class="mb-2 text-body">Les intersections</h3>
                            </div>
                            <div class="card-footer">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                </div>&nbsp;<span>0/8</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#circuler" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">8 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">Circuler</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/8</span>
                                </div>
                            </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#vitesse" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">4 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">La vitesse</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/4</span>
                                </div>
                            </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#depasser" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">8 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">Croiser et dépasser</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/8</span>
                                </div>
                            </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#station" class="btn" style="border: none;">
                        <div class="card theme" style="width: 18rem;">
                            <div class="card-header">
                            <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">8 Activités</p>
                            </div>
                            <div class="card-body">
                                <h3 class="mb-2 text-body">Stationner ou s'arrêter</h3>
                            </div>
                            <div class="card-footer">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                </div>&nbsp;<span>0/8</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Modal base -->

                <div class="modal fade" id="base" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/direction.jpg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Les bases de signalisation</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>2</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="../quiz/base1-signalisation.php" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Règles de priorité</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                            <div class="col-md-6">
                            <a href="../quiz/base2-signalisation.php" style="color: chocolate; text-decoration: none;">
                                <div class="card">
                                <h4><b>La signalisation</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>6</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="signale-verticale.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Signalisation versticale</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="risqua-connaitre.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Risques à connaître</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="signale-temporaire.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Signalisations temporaire</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="borne-et-panneau.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Bornes et panneaux</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="panneaux-de-direction.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les panneaux de direction</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="signale-horizontale.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Signalisation horizontale</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Modal panneau -->
                <div class="modal fade" id="panneau" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/direction.jpg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Les Panneaux</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>3</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                            <a href="../quiz/panneau1.php" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Les panneaux 1/2</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                            <div class="col-md-4">
                            <a href="../quiz/panneau2.php"  style="color: chocolate; text-decoration: none;">
                                <div class="card">
                                <h4><b>Les Panneaux 2/2</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                            <div class="col-md-4">
                            <a href="../quiz/indication-conduite.php"  style="color: chocolate; text-decoration: none;">
                                <div class="card">
                                <h4><b>Indications  de conduite</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>14</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="danger.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Danger</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="localisation.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Localisation</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="signale-dynamique.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Signalisation dynamique</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="direction.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Direction</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="panoceaux.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Panoceaux</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="signalisation-temporaire.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Signalisation temporaire</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="interdiction.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Interdiction</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="priorite.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Priorité</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="passage-a-niveau.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Passages à niveau</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="tunnels.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Tunnels</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="obligation.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Obligation</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="indique-conduite-un.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Indication de conduite (1)</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="indique-conduite-deux.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Indication de conduite (2)</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="balise.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Balise</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Modal des intersections -->
                <div class="modal fade" id="intersection" tabindex="-1" aria-labelledby="staticBackdropLabel" 
                    aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/direction.jpg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Les Intersections</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>2</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="../quiz/quiz-aborderinter.php" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Aborder une intersection</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                            <div class="col-md-6">
                            <a href="../quiz/intersect-propri.php" style="color: chocolate; text-decoration: none;">
                                <div class="card">
                                <h4><b>Intersections et propriétés</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>6</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="intersection.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Avant une intersection</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="aborder-intersection.php" class="btn btn-outline-light intersecte" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Aborder une intersection</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="panneau-priorite.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les panneaux de priorité</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="principe-priorite.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Principes de priorité</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="carrefour.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les carrefours à sens giratoire</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="feux-et-agent.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les feux et les agents</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                 <!--Modal securité du circuler-->
                 <div class="modal fade" id="circuler" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/direction.jpg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Circuler</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="../quiz/circulation.php" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Règle de circulation</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>7</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="espace-circulation.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Espace de circulation</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="regle-generale.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les règles générales</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="changer-direction.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les changements de direction</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="tourner-droite.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Tourner à droite</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="tourner-gauche.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Tourner à gauche</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="faire-demi-tour.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Faire un demi-tour</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="cas-pratique.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Cas pratique</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Modal vitesse -->
                <div class="modal fade" id="vitesse"  
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/direction.jpg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>La vitesse</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="../quiz/limitation-controle.php" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Adapter sa vitesse</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>3</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="limitation-controle.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Limitations et contrôles</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="evaluer-ajuster.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Evaluer et ajuster</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="consequence.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Conséquences</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Modal des despasser -->
                <div class="modal fade" id="depasser" data-bs-backdrop="écomobilité" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/direction.jpg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Croiser et dépasser</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="../quiz/croiser.php" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Croisement et dépassement</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>6</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="croiser.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Se Croiser</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="croisement-difficile.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Croisement difficiles</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="depasser.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Dépasser</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="conditions-pour-depasser.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Conditions pour dépasser</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="depassement-difficile.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Dépassements difficiles</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="depasser-en-securite.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Dépasser en toute sécurité</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="depasser-par-la-droit.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Dépasser par la droite et être dépassé</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                 <!--Modal station-->
                 <div class="modal fade" id="station" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/direction.jpg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Stationner ou s'arrêter</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>2</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Arrêt et Stationnement</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#"  style="color: chocolate; text-decoration: none;">
                                <div class="card">
                                <h4><b>Règle de Stationnement</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>6</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="arret-vs-station.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; S'arrêter vs. Stationnement</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="signal-interdiction.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; La signalisation d'interdiction</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="station-controle-disque.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Stationnement contrôle par disque</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="sation-alterne.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Stationnement alterné</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="station-ville.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Stationner en ville</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="station-sur-route.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Stationner sur route</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                

                <!-- Etape de conduiteur -->
                <hr>
                <div class="row carteCode">
                    <div class="col-md-12">
                        <div class="cours">
                            <img src="../images/theme2.svg" class="rounded-circle" style="width: 8%; 
                                height: 8%;; border-radius: 50%;
                                margin:2px;">&nbsp;
                                <span>Thème n° 2</span>    
                            <h3 class="mt-1">
                                <b>Le conducteur</b></h4>
                        </div>
                </div>
                </div>

                <div class="wrapper">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#conduire" class="btn" style="border: none;">
                        <div class="card theme" style="width: 18rem;">
                            <div class="card-header">
                            <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">9 Activités</p>
                            </div>
                            <div class="card-body">
                                <h3 class="mb-2 text-body">Conduire</h3>
                            </div>
                            <div class="card-footer">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                </div>&nbsp;<span>8</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#etat" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">11 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">Etre en état de conduire</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/8</span>
                                </div>
                            </div>
                    </a>
                        
                </div>

                <!-- Modal des conduire -->
                <div class="modal fade" id="conduire" data-bs-backdrop="écomobilité" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme2.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Conduire</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>2</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Stratégie de conduite</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#"  style="color: chocolate; text-decoration: none;">
                                <div class="card">
                                <h4><b>Adopter un conduite sécurisée</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>7</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="cond_lecon1.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Qu'est-ce que conduire</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="exploration-visuel.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Exploration visuelle</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="strategie-de-conduite.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Stratégie de conduite</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="situation-a-risque.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Principes de priorité</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="communiquer-avec-autruit.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Communiquer avec les autres</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="intervale-de-securite.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les Intervales de sécurité</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="arreter-a-temp.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; S'arrêter à temps</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                 <!--Modal securité du etat-->
                 <div class="modal fade" id="etat" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme2.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Être en état de conduire</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>2</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Etat physique</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#"  style="color: chocolate; text-decoration: none;">
                                <div class="card">
                                <h4><b>Etat psychologique</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>9</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="evaluer-etat-physique.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Evaluer son état physique</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="vue-du-conducteur.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; La vue du conducteur</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="louïe.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; L'ouïe</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="prise-medicament.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; La prise de médicaments</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="prise-de-drogue.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; La prise de drogue</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="alcool.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; L'alcool</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="vigilance.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; La vigilance</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="somnoler.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; La somnolence</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="etat-psychologique.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Evaluer son état psychologique</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>

                <!-- etape de la route -->
                <hr>
                <div class="row carteCode">
                    <div class="col-md-12">
                        <div class="cours">
                            <img src="../images/theme_trois/route_logo.svg" class="rounded-circle" style="width: 8%; 
                                height: 8%;; border-radius: 50%;
                                margin:2px;">&nbsp;
                                <span>Thème n° 3</span>    
                            <h3 class="mt-1">
                                <b>La route</b></h4>
                        </div>
                </div>
                </div>

                <div class="wrapper">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#conditions" class="btn" style="border: none;">
                        <div class="card theme" style="width: 18rem;">
                            <div class="card-header">
                            <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">9 Activités</p>
                            </div>
                            <div class="card-body">
                                <h3 class="mb-2 text-body">Conduire dans des conditions difficiles</h3>
                            </div>
                            <div class="card-footer">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                </div>&nbsp;<span>0/9</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#autoroute" class="btn" style="border: none;">
                        <div class="card theme" style="width: 18rem;">
                            <div class="card-header">
                            <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">8 Activités</p>
                            </div>
                            <div class="card-body">
                                <h3 class="mb-2 text-body">Conduire sur autoroute</h3>
                            </div>
                            <div class="card-footer">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                </div>&nbsp;<span>0/8</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#zone" class="btn" style="border: none;">
                        <div class="card theme" style="width: 18rem;">
                            <div class="card-header">
                            <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">5 Activités</p>
                            </div>
                            <div class="card-body">
                                <h3 class="mb-2 text-body">La traversée de zones dangereuses</h3>
                            </div>
                            <div class="card-footer">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                </div>&nbsp;<span>0/5</span>
                            </div>
                        </div>
                    </a>
                        
                </div>

                <!--Modal condition-->
                <div class="modal fade" id="conditions" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_trois/route_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Conduire dans des conditions difficiles</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>2</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Situations à risque</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#"  style="color: chocolate; text-decoration: none;">
                                <div class="card">
                                <h4><b>Conditions exceptionnelle</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>7</span>
                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/nuit.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Nuit</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/pluie.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Pluie</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/brouillard.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Brouillard</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/neige.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Neige</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/verglas.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Verglas</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/vent.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Vent</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/soleil.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Soleil</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Modal autoroute -->
                <div class="modal fade" id="autoroute"  
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_trois/route_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Conduire sur autoroute</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>2</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Règles sur autoroute</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card">
                                <h4><b>Adapter sa conduite</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>6</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/signalisation.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; La signalisation</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/regle-circulation.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les règles de circulation</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/change-direction.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Changer de direction</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/vitesse-distance.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Vitesse et distance de sécurité</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/depassement.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Dépaassements</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/comportement.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Comportements</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Modal zone -->
                <div class="modal fade" id="zone"  
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_trois/route_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>La traversée de zones dangereuses</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Zones dangereuses</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>4</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/chantier_routier.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les chantiers routiers</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/tunnels.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les tunnels</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/passage-niveau.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les passages à niveau</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_trois/tramways.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les tramways</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>

                <!-- etape usages -->
                <hr>
                <div class="row carteCode">
                    <div class="col-md-12">
                        <div class="cours">
                            <img src="../images/theme_quatre/theme4_logo.svg" class="rounded-circle" style="width: 8%; 
                                height: 8%;; border-radius: 50%;
                                margin:2px;">&nbsp;
                                <span>Thème n° 4</span>    
                            <h3 class="mt-1">
                                <b>Les autres usagers</b></h4>
                        </div>
                </div>
                </div>

                <div class="wrapper">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#rue" class="btn" style="border: none;">
                        <div class="card theme" style="width: 18rem;">
                            <div class="card-header">
                            <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">2 Activités</p>
                            </div>
                            <div class="card-body">
                                <h3 class="mb-2 text-body">Le partage de la rue</h3>
                            </div>
                            <div class="card-footer">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                </div>&nbsp;<span>0/2</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#usager" class="btn" style="border: none;">
                        <div class="card theme" style="width: 18rem;">
                            <div class="card-header">
                            <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">9 Activités</p>
                            </div>
                            <div class="card-body">
                                <h3 class="mb-2 text-body">Les spécificités des autres usagers</h3>
                            </div>
                            <div class="card-footer">
                            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                </div>&nbsp;<span>0/9</span>
                            </div>
                        </div>
                    </a>      
                </div>

                <!-- Modal des rue -->
                <div class="modal fade" id="rue" data-bs-backdrop="écomobilité" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_quatre/theme4_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Le partage de la rue</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Partage de la rue</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_quatre/organisation-espace.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; L'organisation de l'espace</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                 <!--Modal usager-->
                 <div class="modal fade" id="usager" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_quatre/theme4_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Les spécificités des autres usagers</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>2</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Usagers fragiles</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                            <div class="col-md-6">
                            <a href="#"  style="color: chocolate; text-decoration: none;">
                                <div class="card">
                                <h4><b>Véhicules spécifiques</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>7</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_quatre/usagers-route.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Ausagers de la route</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_quatre/pietons.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les piétons</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_quatre/cycliste-cavalier.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les cyclistes et les cavaliers</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_quatre/deuxroues-motoriser.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les deux roues motorisés</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_quatre/vehicule-specifique.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les véhicules spécifiques</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_quatre/bus.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les bus</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_quatre/camion.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les camions</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Notions divers -->

                <hr>
                <div class="row carteCode">
                    <div class="col-md-12">
                        <div class="cours">
                            <img src="../images/theme_cinq/theme5_logo.svg" class="rounded-circle" style="width: 8%; 
                                height: 8%;; border-radius: 50%;
                                margin:2px;">&nbsp;
                                <span>Thème n° 5</span>    
                            <h3 class="mt-1">
                                <b>Les notions diverses</b></h4>
                        </div>
                </div>
                </div>

                <div class="wrapper">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#document" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">4 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">Les documents administratifs</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/4</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#charger" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">5 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">Le chargement</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/5</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#permis" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">9 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">Le permis à points</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/9</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#infraction" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">4 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">Les infractions</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/4</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#etranger" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">1 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">Voyager à l'étranger</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/1</span>
                                </div>
                            </div>
                        </a>
                </div>

                <!--Modal document-->
                <div class="modal fade" id="document" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_cinq/theme5_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Les documents administratifs</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Documents administratifs</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>3</span>
                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/doc_obligatoire.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Documents obligatoires</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/doc_facultatif.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Documents facultatifs</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/perte-doc.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; En cas de perte de documents</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <!--Modal charger-->
                <div class="modal fade" id="charger" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_cinq/theme5_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Le chargement</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Charger son véhicule</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>4</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/bagage_objet.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Bagages et objets encombrants</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/remorque_caravane.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Remorques et caravanes</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/tracter-remorque.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Tracter une remorque</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/transport-person-animaux.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Le transport des personnes et animaux</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <!--Modal permis-->
                <div class="modal fade" id="permis" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_cinq/theme5_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Le permis à points</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Permis et infractions</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>8</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/formation.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les formations</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/capital-initial.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Capital initial et permie probatoire</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/perte-point.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Perte de points</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/reconstitution.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Reconstitution du capital</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/categorie-permis.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les catégories de permis</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/perte-permis.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Perte de permis (invalidation)</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/epreuve-theorique.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Epreuve théorique générale (E.T.G)</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/epreuve-pratique.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Epreuve pratique</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <!--Modal infraction-->
                <div class="modal fade" id="infraction" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_cinq/theme5_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Les infractions</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Infractions aux codes</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>3</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/retrait-imediat-permis.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Retrait immédiat du permis</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/contravention.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Contraventions</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/delit.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Délits</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <!--Modal etranger-->
                <div class="modal fade" id="etranger" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_cinq/theme5_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Voyager à l'étranger</b></h3>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_cinq/specificite-code.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Spécificitées du code</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- les secoures -->

                <hr>
                <div class="row carteCode">
                    <div class="col-md-12">
                        <div class="cours">
                            <img src="../images/theme_six/theme6_logo.svg" class="rounded-circle" style="width: 8%; 
                                height: 8%;; border-radius: 50%;
                                margin:2px;">&nbsp;
                                <span>Thème n° 6</span>    
                            <h3 class="mt-1">
                                <b>Les premiers secours</b></h4>
                        </div>
                </div>
                </div>

                <div class="wrapper">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#secours" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">6 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">Porter secours</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/6</span>
                                </div>
                            </div>
                        </a>
                </div>

                <!--Modal secours-->
                <div class="modal fade" id="secours" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                        <div class="modal-content" style="background-color: chocolate; color: white;">
                            <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <h5 class="modal-title">
                                <img src="../images/theme_six/theme6_logo.svg" class="rounded-circle" style="width: 30%; 
                                        height: 30%;; border-radius: 50%;
                                        margin:2px;">
                            </h5>
                            <h3 class="mt-3"><b>Porter secours</b></h3>
                            <hr>
                            <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                            <span>1</span>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#" style="color: chocolate; text-decoration: none;">
                                        <div class="card" style="color: chocolate;">
                                        <h4><b>Protéger, alerter, secourir</b></h4>
                                        <h4>10 questions</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                            </span>&nbsp;<span>5</span>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                <a href="../theme_six/accident.php" class="btn btn-outline-light" style="color: black; border: none; 
                                border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                                <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Accident</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                <a href="../theme_six/protege-zone.php" class="btn btn-outline-light" style="color: black; border: none; 
                                border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                                <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Protéger la zone</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                <a href="../theme_six/evalue-etat_victime.php" class="btn btn-outline-light" style="color: black; border: none; 
                                border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                                <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Evaluer l'état des victimes</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                <a href="../theme_six/alerter.php" class="btn btn-outline-light" style="color: black; border: none; 
                                border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                                <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Alerter ou faire alerter</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                <a href="../theme_six/secourir.php" class="btn btn-outline-light" style="color: black; border: none; 
                                border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                                <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Secourir</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- quiter son véhicule -->

                <hr>
                <div class="row carteCode">
                    <div class="col-md-12">
                        <div class="cours">
                            <img src="../images/theme_sept/theme7_logo.svg" class="rounded-circle" style="width: 8%; 
                                height: 8%;; border-radius: 50%;
                                margin:2px;">&nbsp;
                                <span>Thème n° 7</span>    
                            <h3 class="mt-1">
                                <b>Prendre et quitter son véhicule</b></h4>
                        </div>
                </div>
                </div>

                <div class="wrapper">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#installer" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">5 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">S'installer au poste de conduite</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/4</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#sortie" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">3 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">Entrer et sortir du véhicule</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/3</span>
                                </div>
                            </div>
                        </a>
                </div>

                <!--Modal installation-->
                <div class="modal fade" id="installer" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_sept/theme7_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>S'installer au poste de conduite</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Installation sécurisée</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>4</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_sept/etre-aisé.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Être à l'aise</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_sept/etre-assis.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Être bien assis</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_sept/visibilite-optimal.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Avoir une visibilité optimal</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_sept/ajuster-ceinture.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Ajuster la ceinture</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <!--Modal sortir-->
                <div class="modal fade" id="sortie" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_sept/theme7_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Entrer et sortir du véhicule</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Adopter les bons gestes</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>2</span>
                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_sept/avant-partir.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Avant de partir</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_sept/avant-quitte-voiture.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Avant de quitter la voiture</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <!-- les équippements -->

                <hr>
                <div class="row carteCode">
                    <div class="col-md-12">
                        <div class="cours">
                            <img src="../images/theme_huit/theme8_logo.svg" class="rounded-circle" style="width: 8%; 
                                height: 8%;; border-radius: 50%;
                                margin:2px;">&nbsp;
                                <span>Thème n° 8</span>    
                            <h3 class="mt-1"><b>La mécanique et les équipements</b></h3>
                        </div>
                </div>
                </div>

                <div class="wrapper">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#fonction" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">4 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">Le fonctionnement</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/4</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#depanner" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">4 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">L'entretien et le dépannage</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/4</span>
                                </div>
                            </div>
                        </a>
                </div>

                <!--Modal fonction-->
                <div class="modal fade" id="fonction" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_huit/theme8_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Le fonctionnement</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Équippements du véhicule</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>3</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_huit/vue-densemble.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Vue d'ensemble</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_huit/tableau-de-bord.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Tableau de bord</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_huit/eclairage.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; L'éclairage</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <!--Modal sortir-->
                <div class="modal fade" id="depanner" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_huit/theme8_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>L'entretien et le dépannage</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Entretien du véhicule</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>3</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_huit/visite-technique.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Visites techniques</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_huit/surveillance-conducteur.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; La surveillance du conducteur</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_huit/pneus.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les pneus</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>

                <!-- securité du passager -->

                <hr>
                <div class="row carteCode">
                    <div class="col-md-12">
                        <div class="cours">
                            <img src="../images/theme_neuf/theme9_logo.svg" class="rounded-circle" style="width: 8%; 
                                height: 8%;; border-radius: 50%;
                                margin:2px;">&nbsp;
                                <span>Thème n° 9</span>    
                            <h3 class="mt-1">
                                <b>La sécurité du passager et du véhicule</b></h4>
                        </div>
                </div>
                </div>

                <div class="wrapper">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#instpass" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">3 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">L'installation des passagers</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/3</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#enfant" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">2 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">L'installation des enfants</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/2</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#aide" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">4 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">Les aides technologiques</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/4</span>
                                </div>
                            </div>
                        </a>
                </div>

                <!--Modal instpass-->
                <div class="modal fade" id="instpass" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_neuf/theme9_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>L'installation des passagers</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Sécurité des passagers</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>2</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_neuf/ceinture.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; La ceinture</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_neuf/coussin-gonflable.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Les coussins gonflables (air-bags)</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <!--Modal enfant-->
                <div class="modal fade" id="enfant" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_neuf/theme9_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>L'installation des enfants</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>2</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Sécurité des enfants</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_neuf/securite-enfant.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Sièges homologués et sécurités des enfants</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                <!--Modal aide-->
                <div class="modal fade" id="aide" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_neuf/theme9_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Les aides technologiques</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Typologie d'aide</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>3</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_neuf/aide-freinage.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Aides au freinage</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_neuf/aide-tenu-route.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Aides à la tenu de route</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_neuf/aide-conduite.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Aides à la conduite</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>

                <!-- L'environnement -->

                <hr>
                <div class="row carteCode">
                    <div class="col-md-12">
                        <div class="cours">
                            <img src="../images/theme_dix/theme10_logo.svg" class="rounded-circle" style="width: 8%; 
                                height: 8%;; border-radius: 50%;
                                margin:2px;">&nbsp;
                                <span>Thème n° 10</span>    
                            <h3 class="mt-1">
                                <b>L'environnement</b></h4>
                        </div>
                </div>
                </div>

                <div class="wrapper">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#écomobilité" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">2 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">Choisir l'écomobilité</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/2</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#choix" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">2 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">Choisir son véhicule</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/2</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#conducteur" class="btn" style="border: none;">
                            <div class="card theme" style="width: 18rem;">
                                <div class="card-header">
                                <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">2 Activités</p>
                                </div>
                                <div class="card-body">
                                    <h3 class="mb-2 text-body">Être éco-conducteur</h3>
                                </div>
                                <div class="card-footer">
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                    </div>&nbsp;<span>0/2</span>
                                </div>
                            </div>
                        </a>
                </div>
                <!-- Modal écomobilité -->
                <div class="modal fade" id="écomobilité" data-bs-backdrop="écomobilité" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_dix/theme10_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Choisir l'écomobilité</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Une mobilité durale</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_dix/ecomobilite.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; L'écomobilité</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                 <!--Modal chix-->
                 <div class="modal fade" id="choix" data-bs-backdrop="choix" data-bs-keyboard="false" 
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_dix/theme10_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Choisir son véhicule</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Véhicule éco-responsable</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_dix/achat-ecoresponsable.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; Un achat éco-responsable</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Modal eco-conducteur -->

                <div class="modal fade" id="conducteur"  
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog text-center">
                    <div class="modal-content" style="background-color: chocolate; color: white;">
                        <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <h5 class="modal-title">
                            <img src="../images/theme_dix/theme10_logo.svg" class="rounded-circle" style="width: 30%; 
                                    height: 30%;; border-radius: 50%;
                                    margin:2px;">
                        </h5>
                        <h3 class="mt-3"><b>Être éco-conducteur</b></h3>
                        <hr>
                        <span><b><i class="bi bi-file-earmark-richtext"></i>&nbsp;Quiz :</b></span>&nbsp;
                        <span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            <a href="#" style="color: chocolate; text-decoration: none;">
                                <div class="card" style="color: chocolate;">
                                <h4><b>Éco-conduite</b></h4>
                                <h4>10 questions</h4>
                                </div>
                            </a>
                            </div>
                        </div>
                        <hr>
                        <span><b><i class="bi bi-bookmark"></i>&nbsp;Fiche détaillées :</b>
                        </span>&nbsp;<span>1</span>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                            <a href="../theme_dix/eco-conduite.php" class="btn btn-outline-light" style="color: black; border: none; 
                            border-radius: 20px; width: 400px; text-align: left; font-size: 20px;">
                            <i class="bi bi-check2-square"></i>&nbsp;&nbsp; L'éco-conduite</a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
                

            </div>
        </div>

    </section>
    
    

    <?php
    // <!--Le pied de la page-->
        include("../footer/footer.php");

        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("../script/script_link.php");
    ?>


    
    
</body>
</html>