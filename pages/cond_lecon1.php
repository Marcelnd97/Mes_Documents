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
    <title>Qu'est ce que conduire</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png"> 
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">

<!--L'en-tête de la page-->
<?php
    include('../header/header.php')
?>
    <section>
      <br><br><br><br>

      <div class="container">
        <!-- Content here -->
        <div class="row">
          <div class="col-md-10" style="padding-left: 25%;">
              <h1 style="font-weight: bold;"><b>Qu'est-ce que conduire</b></h1>
              <br> 
              <P>Le but de ce chapitre n'est pas d'entrer dans le détail de la conduite au niveau technique, 
              mais au niveau cognitif - mental. Je veux vous prouver que conduire demande de la concentration.</p>
              <div class="card question">
                <div class="card-body">
                  <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                  <p>Avez-vous déjà essayé de regarder un film et parler au téléphone en même temps?
                     Ou d'envoyer un texto et de répondre aux questions d'un interlocuteur en face de vous ?
                  </p>
                </div>
              </div>
              <br>
              <p>Si vous me dites que "oui", mais qu'une action prévaut sur l'autre, 
                c'est exactement ce que je veux entendre. Il est impossible pour le cerveau de se concentrer sur 2 
                actions à 100%. C'est pour cela que nous finissons par taper la conversation en face à face dans le champ du 
                texto ou que l'on place notre interlocuteur au téléphone au 2e plan si le film est très intéressant.</p>
              
              <div class="card Informations bg-info">
                <div class="card-body">
                  <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                  <p>
                  Conduire c'est observer, analyser et agir. Écouter une émission à la radio en détail, 
                  c'est se concentrer sur le sujet et ne plus faire attention sur la route. Conduire c'est mobiliser tous les sens, 
                  donc il faut s'y adonner à 100%. Surtout lorsque l'on est conducteur novice.
                  </p>
                </div>
              </div>
              <br>

              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
              <li>Conduire n'est pas compatible avec plusieurs actions mentales à effectuer simultanément 
                (conduire, parler au téléphone, lire, écouter de la musique).
                  Conduire demande déjà de faire plusieurs opérations mentales qui demandent de la concentration.</li>
              <li>Conduire n'est pas compatible avec plusieurs actions mentales à effectuer simultanément
                 (conduire, parler au téléphone, lire, écouter de la musique). Conduire demande déjà de 
                 faire plusieurs opérations mentales qui demandent de la concentration.</li>
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