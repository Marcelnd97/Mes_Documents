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
    <title>La ceinture</title>
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
                <h1 style="font-weight: bold;"><b>La ceinture</b></h1>
                <br>
                <h2 style="font-weight: bold;">L'installation et visibilité</h2>
                <p>Avant même de s'installer et boucler la ceinture, il faut faire attention aux places que les 
                    passagers vont occuper. Il convient que la place du milieu (à l'arrière) soit occupée par 
                    un passager qui est plus petit que les autres pour ne pas entraver la visibilité du conducteur.</p>
                <h2 style="font-weight: bold;">Le dispositif de retenue : la ceinture</h2>
                <p>Elle permet de limiter les mouvements incontrôlables des passagers d'un véhicule lors d'un choc. 
                    Ainsi, ils ne sont pas projetés contre des obstacles, par inertie. Le non-port de la ceinture 
                    est un facteur de mortalité routière. Vous êtes obligés de la porter du début à la fin du trajet.
                     Seul un certificat médical peut vous en dispenser.</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Si vous ne portez pas de ceinture de sécurité lors d'un contrôle routier, 
                        vous paierez une amende de 135 euros et vous aurez 3 points suspendus de votre permis de conduire.</p>
                    </div>
                </div>
                <br>
                 <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 50px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_neuf/ceinture.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Témoin de ceinture</small></p>
                    </div>
                </div>
                <p>Si ce voyant s'allume sur votre tableau de bord, alors la ceinture n'a pas été mise ou 
                    présente un problème.</p>
                <p>Sur beaucoup de modèles, le voyant peut être de couleur rouge et non pas blanc comme sur 
                    la photo ci-dessus. Sachez qu'il s'agit d'un témoin d'alarme, car on le considère comme
                     indispensable à la conduite. Je vous conseille de voir un garagiste si le voyant est 
                     allumé alors que la ceinture est bouclée.</p>
                <p>Le port de la ceinture est respecté à 98% à l'avant, mais moins à l'arrière (80%). 
                    En cas d'accident, elle permet au passager de s'extraire rapidement de la voiture en 
                    restant conscient.Il existe des dispositifs qui bloquent plus tôt et plus fermement le 
                    corps pendant le choc. Le déclenchement de ces prétensionneurs provoque une détonation
                     et une fumée sans danger. Les limiteurs d'effort réduisent le pic de la pression 
                     exercée sur le torse lors du choc.</p>
                <h2 style="font-weight: bold;">En cas d'accident...</h2>
                <p><b>Sans ceinture les conséquences sont graves :</b></p>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead style="background: chocolate; color: white;">
                            <tr>
                                <th>Vitesse d'impact</th>
                                <th>Conséquences</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>25 km /h</td>
                                <td>Blessures graves</td>
                            </tr>
                            <tr>
                                <td>50 km /h</td>
                                <td>MORT !</td>
                            </tr>
                            <tr>
                                <td>100 km/h</td>
                                <td>MORT !</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p><b>Avec la ceinture, les conséquences sont atténuées :</b></p>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead style="background: chocolate; color: white;">
                            <tr>
                                <th>Vitesse d'impact</th>
                                <th>Conséquences</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>25 km /h</td>
                                <td>Indemne</td>
                            </tr>
                            <tr>
                                <td>50 km/ h</td>
                                <td>Indemne</td>
                            </tr>
                            <tr>
                                <td>100 km / h</td>
                                <td>Blessures graves</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Chaque année, le port de la ceinture de sécurité permet de sauver 300 vies !  </p>
                    </div>
                </div>
                <br>

                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Le passager qui porte la ceinture limitera les risques de blessures graves en cas d'accident .</li>
                   <li>Le non-port de la ceinture est davantage présent sur les sièges arrière que sur les sièges avant.</li>
                   <li>Même à 50 km/h vous risquez la mort en cas d'accident si vous ne portez pas la ceinture.</li>
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