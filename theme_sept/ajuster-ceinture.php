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
    <title>Ajuster la ceinture</title>
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
                <h1 style="font-weight: bold;"><b>Ajuster la ceinture</b></h1>
                <br>
                <h2 style="font-weight: bold;">Absence du port de la ceinture détectable</h2>
                <p>Le port de la ceinture est obligatoire, tant pour le conducteur que pour les 
                    passagers à l'avant et à l'arrière. Certaines voitures sont équipées de voyants 
                    sonores et lumineux pour vous aider à y penser.</p>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_cinq/bagage1.jfif">
                        </div>
                        <p class="text-muted text-center"><small>Voyant lumineux indiquant le non-bouclage de la ceinture</small></p>
                    </div>
                </div>
                <br>
                
                <h2 style="font-weight: bold;">En cas de contrôle routier</h2>
                <p>La ceinture joue un rôle essentiel en cas d'accident.</p>
                <br>
                <div class="card question">
                    <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>Que risquez-vous si vous ne portez pas de ceinture en cas de contrôle ?
                    Et si un passager de -18 ans ne la porte pas ? Et un adulte ?</p>
                </div>
                </div>
                <br>
                <p><b>Réponse :</b></p>
                <p>Mauvaise nouvelle n°1 : Vous perdrez 3 points et payerez une amende de 135 euros pour 
                    votre propre infraction.</p>
                <p>Mauvaise nouvelle n°2 : Vous payerez une autre amende de 135 euros si un passager de 
                    moins de 18 ans ne la porte pas, car c'est vous le responsable.</p>
                <p>Bonne nouvelle pour vous, mais pas pour le passager majeur : c'est lui qui paye son 
                    amende (90 ou 135 euros).</p>
                <p>Bonne nouvelle pour le passager : s'il possède le permis de conduire, on ne lui enlève 
                    pas de points.</p>
                <h2 style="font-weight: bold;">En cas d'accident</h2>
                <p>Si en cas d'accident vous ne portiez pas la ceinture, le choc que vous ressentirez 
                    serait celui-ci :</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead style="background: chocolate; color: white;;">
                            <tr>
                                <th>Vitesse</th>
                                <th>50 km / h</th>
                                <th>80 km / h</th>
                                <th>110 km / h</th>
                                <th>130 km / h</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>En mètres</b></td>
                                <td>10 m</td>
                                <td>25 m</td>
                                <td>48 m</td>
                                <td>66 m</td>
                            </tr>
                            <tr>
                                <td><b>Chute de l'étage</b></td>
                                <td>3e</td>
                                <td>8e</td>
                                <td>16e</td>
                                <td>22e</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
                
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Si en cas d'accident vous portez la ceinture, la bonne nouvelle c'est que le risque d'être 
                        tué est divisé par 3 et celui d'être éjecté par 10. Ne jouez pas avec Newton !</p>
                    </div>
                </div>
                <br>
                <h2 style="font-weight: bold;">Bouclage</h2>
                <p>Vous devez boucler la ceinture de sécurité avant de démarrer. Assurez-vous de le faire 
                    avant de conduire, car, comme tout oubli (siège non réglé, rétroviseur mal réglé etc), 
                    cela constitue une information supplémentaire à gérer en plus de la conduite. Donc un 
                    grand risque de finir déconcentrés, d'avoir une amende ou un accident.</p>
                <p>La ceinture doit passer comme en diagonale sur la partie haute du corps. La sangle 
                    thoracique doit maintenir l'épaule, alors que la sangle abdominale doit être sur le haut 
                    des cuisses. La ceinture doit être suffisamment tendue, mais aussi ne doit pas être 
                    vrillée pour ne pas occasionner des blessures en cas de choc.</p>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 650px; 
                            margin: 100px auto; border: 2px solid chocolate;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_sept/ceinture2.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Bouclage de ceinture de sécurité</small></p>
                    </div>
                </div>
                <br>
                <p>En cas de grossesse, la loi ne change pas tout comme le nombre de points perdus. Cependant, 
                    il est essentiel de bien positionner la ceinture en passant la sangle abdominale le plus
                     bas possible sous le ventre de la future maman et la sangle diagonale bien entre la poitrine.</p>
                <p>Le fonctionnement de la ceinture est simple. Lors d'un choc, la ceinture contre l'inertie du
                     corps et le retient en le maintenant en place. Si vous ne portez pas de ceinture, vous
                      continuerez à vous déplacer à la même vitesse et serez projetés en avant. 
                      Pour ceux qui sont assis à l'arrière, c'est la même chose. Sauf que si vous avez un 
                      passager assis à l'arrière sur le siège du milieu et qu'il n'est pas attaché, 
                      il sera projeté entre les deux sièges avant, contre le pare-brise. En cas de choc, 
                      il pourrait blesser un autre passager. Son poids pourrait être multiplié par 10 avec 
                      la vitesse.</p>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p>Vous divisez par 3 le risque d'être tués en cas d'accident si vous portez la ceinture.</p>
                    </div>
                </div>
                <br>
                
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                  <li>Tous les passagers doivent être attachés à l'aide de la ceinture pour ne pas payer 
                    d'amende et ne pas être exposés au risque de mort lors d'une collision.</li>
                  <li>Si vous ne bouclez pas la ceinture, le voyant lumineux devrait s'allumer sur votre tableau de bord.</li>
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