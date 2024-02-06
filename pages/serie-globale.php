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

    // if(! isAuthenticated()){
    //     // Rediriger vers la page de connexion si non authentifié
    //     header('Location: login.php');
    //     exit();
    // }

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
    <title>Les séries</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body class="codebody">

     <!--L'en-tête de la page-->
     <?php
        include("../header/header.php");
     ?>
    <br><br><br>
    <section>
        <div class="container">
                <div class="row">
                    <div class="col-ms-12" data-aos="fade-left">
                        <a href="coderoute" class="retoure">
                        <b>
                            <i class="bi bi-arrow-left-circle-fill" ></i>&nbsp;Retour
                        </b>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row text-center">
                    <div class="col-md-12 ">
                        <h1 data-aos="fade-down">Accumulation des séries par thème</h1>
                    </div>
                </div>
                <hr>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="cours" data-aos="fade-left">
                            <img src="../images/quizz.jpg" class="rounded-circle" 
                                    style="width: 100px; height: 100px; border-radius: 50%;">&nbsp;
                                <span>Thème n° 1</span>    
                            <h3 class="mt-1">
                                <b>La circulation routière</b></h4>
                        </div>
                    </div>
                </div>

                <div class="wrapper" data-aos="zoom-in-left">
                    <div class="row">
                        <div class="col-md-4">
                                <div class="card theme" style="width: 18rem;">
                                    <div class="card-header">
                                    <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">Les bases de la signalisation</p>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="mb-2 text-body" data-aos="fade-up" 
                                                data-aos-duration="500"><a href="#" class="btn btn-primary">Règle de priorité</a></h3>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">La siganlisation</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#panneau" class="btn" style="border: none;">
                                <div class="card theme" style="width: 18rem;">
                                    <div class="card-header">
                                    <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">Les panneaux</p>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="mb-2 text-body" data-aos="fade-up" 
                                                data-aos-duration="500"><a href="#" class="btn btn-primary">Panneau</a></h3>
                                    </div>
                                    <div class="card-footer">
                                    <a href="#" class="btn btn-primary"></a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#intersection" class="btn" style="border: none;">
                                <div class="card theme" style="width: 18rem;">
                                    <div class="card-header">
                                    <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">8 Activités</p>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="mb-2 text-body" data-aos="fade-up" 
                                                data-aos-duration="500">Les intersections</h3>
                                    </div>
                                    <div class="card-footer">
                                    
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#circuler" class="btn" style="border: none;">
                                <div class="card theme" style="width: 18rem;">
                                    <div class="card-header">
                                    <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">8 Activités</p>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="mb-2 text-body" data-aos="fade-up" 
                                            data-aos-duration="500">Circuler</h3>
                                    </div>
                                    <div class="card-footer">
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                        </div>&nbsp;<span>0/8</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#vitesse" class="btn" style="border: none;">
                                <div class="card theme" style="width: 18rem;">
                                    <div class="card-header">
                                    <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">4 Activités</p>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="mb-2 text-body" data-aos="fade-up" 
                                            data-aos-duration="500">La vitesse</h3>
                                    </div>
                                    <div class="card-footer">
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                        </div>&nbsp;<span>0/4</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#depasser" class="btn" style="border: none;">
                                <div class="card theme" style="width: 18rem;">
                                    <div class="card-header">
                                    <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">8 Activités</p>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="mb-2 text-body" data-aos="fade-up" 
                                            data-aos-duration="500">Croiser et dépasser</h3>
                                    </div>
                                    <div class="card-footer">
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                        </div>&nbsp;<span>0/8</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#station" class="btn" style="border: none;">
                                <div class="card theme" style="width: 18rem;">
                                    <div class="card-header">
                                    <p class="badge badge-warning" style="background-color: chocolate; margin-bottom: 5px;">8 Activités</p>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="mb-2 text-body" data-aos="fade-up" 
                                                data-aos-duration="500">Stationner ou s'arrêter</h3>
                                    </div>
                                    <div class="card-footer">
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar overflow-visible text-dark" style="width: 10%"></div>
                                        </div>&nbsp;<span>0/8</span>
                                    </div>
                                </div>
                            </a>
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