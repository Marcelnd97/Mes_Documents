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
    <title>Evaluer son état physique</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">
     <!--L'en-tête de la page-->
     <?php
        include("../header/header.php")
     ?>
    <br><br><br>
    <section>
      <div class="container">
        <!-- Content here -->
        <div class="row">
            <div class="col-md-10" style="padding-left: 25%;">
                <h1 style="font-weight: bold;">Évaluer son état physique</h1>
                <br> 
                <h3><b>Pour obtenir le permis...</b></h3>
                <p>Être en bonne santé et se sentir bien de façon générale est une condition pour pouvoir conduire.</p>
                <h3><b>Formulaire Cerfa 02</b></h3>
                <p>On ne vous imposera pas de contrôle médical par défaut, mais vous devez signer une
                     déclaration sur l'honneur sur un formulaire afin de signaler l'existence ou non d'une maladie 
                     incompatible avec la conduite.</p> 
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Si vous rencontrez un problème de santé vous devez, de votre propre initiative, 
                        vous soumettre à un contrôle médical.</p>
                    </div>
                </div>
                <br>
                <h3><b>Contrôle médical</b></h3>
                <p>Si vous êtes concernés, vous devez donc signaler votre problème de santé en remplissant 
                    le dossier d'inscription à l'examen du permis de conduire. Vous devez vous soumettre
                     à un contrôle médical auprès d'un médecin agréé par la préfecture de votre lieu de résidence.</p>
                <p>La liste des médecins agréés est disponible dans les préfectures, sous-préfectures et dans
                     les mairies de certaines communes. Elle peut également être consultée sur le site internet 
                     de la préfecture.</p>
                <p>Comme je disais, certaines maladies sont incompatibles avec la conduite 
                    (problèmes cardio-vasculaires, altérations visuelles, troubles de l'équilibre, 
                    pratiques addictives, diabète, épilepsie,...).</p>
                <p>En cas d'avis médical favorable, si vous êtes candidat, vous pourrez procéder à 
                    votre inscription.</p>
                <p>En cas d'avis défavorable, le préfet vous adresse un courrier vous indiquant que 
                    vous ne pouvez 
                    pas vous présenter à l'examen et vous invite à présenter vos observations.
                </p>
                <h3 style="font-weight: bold;">Handicaps</h3>
                <p><b>Apnée obstructive du sommeil</b></p>
                <p>Il s'agit des pauses respiratoires pendant le sommeil qui durent entre 10 et 30 s et 
                    se répètent dans la nuit. Ce type d'apnée peut créer une inaptitude médicale. Si vous en souffrez, 
                    pensez à en parler à votre médecin car ce genre de "handicap" est traité avec un masque de nuit. 
                    Il permet de se reposer et d'éviter les phases de somnolence au volant. Le masque ressemble à ça :</p>
                <div class="card senscirc">
                    <img src="../images/theme_conduite/etat1.jpg" height="400px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Masque de nuit pour traiter l'apnée du sommeil</small></p>
                <p>Sinon, certains aménagements peuvent être mis en place si vous souffrez d'un autre handicap : 
                    rétroviseurs bilatéraux, embrayage automatique.</p>
                <h2 style="font-weight: bold;">Conducteur longue durée</h2>
                <p>Si vous vous présentez à un examen médical alors que vous avez déjà obtenu le permis, 
                    celui-ci reste provisoirement valide tant que le préfet n'a pas statué.</p>
                <p>La validité administrative de l'avis médical est de 2 ans. Au delà de ce délai, 
                    le contrôle doit être repassé.</p>
                <p>Si l'avis médical révèle un handicap problématique, le préfet vous adresse une lettre vous 
                    demandant de restituer votre permis de conduire et vous invitant à présenter vos observations.</p>
                <br>
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Vous devez signer un formulaire pour déclarer sur l'honneur que vous êtes aptes à conduire.</li>
                    <li>Si une maladie se déclare pendant la préparation à l'examen de la conduite, 
                        vous devez passer une visite médicale auprès d'un médecin agréé.</li>
                    <li>Si une maladie se déclare une fois le permis obtenu, vous devez faire de même.</li>
                    <li>Si le médecin juge que votre état vous permet de conduire, vous obtenez l'autorisation 
                        de la Préfecture ; le cas contraire - non.</li>
                    <li>Toutes les maladies ne sont pas incompatibles avec la conduite.</li>
                    <li>En cas de certains handicaps, des aménagements peuvent être mis en place pour faciliter 
                        la prise de commandes.</li>
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