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
    <title>La vue du conducteur</title>
</head>
<body style="background-color: white; font-family:'Times New Roman', Times, serif; font-size: 17px;">
     <!--L'en-tête de la page-->
     <?php
        include("header.php")
     ?>
    <br><br><br>
    <section>
      <div class="container">
        <!-- Content here -->
        <div class="row">
            <div class="col-md-10" style="padding-left: 25%;">
                <h1 style="font-weight: bold;">La vue du conducteur</h1>
                <br> 
                <h3 style="font-weight: bold;">Acuité visuelle </h3>
                <p>A part les jambes et les bras, les yeux , les oreilles et le cerveau sont les organes dont on se sert le plus pour conduire. Il faut donc avoir une bonne acuité visuelle pour pouvoir repérer les différents éléments sur la route et les analyser assez rapidement.</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Pour conduire une voiture ou une moto, vous devez avoir l'acuité visuelle de 5/10 minimum 
                        (mesurée avec les deux yeux ouverts) que vous ayez une correction ou pas. Cela veut dire que vous pouvez
                         avoir 1 sur un œil et 6 sur l'autre. Tant que le score atteint les 50 %, tout va bien. 
                         Autrement, vous n'avez pas le droit de conduire.
                    </p>
                </div>
                </div>
                <br>
                
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>En revanche, à 50 m d'une entrée en agglomération, vous devriez être en mesure 
                        de lire le panneau devant vous.</p>
                    </div>
                </div>
                <br>
                <p>Si vous portez des lunettes ou des lentilles, ce sera marqué sur votre permis de conduire sous 
                    mention dispositif de correction et/ou de protection de la vision (01). Quel que soit votre dispositif 
                    de correction, vous vous devez d'en avoir un de rechange dans la voiture au cas où. Imaginez vous perdez
                     une lentille sur une aire d'autoroute. Comment finissez-vous le voyage ? </p>
                <p>Les lunettes de soleil sont conseillées (sauf la catégorie 4, qui est interdite pour la conduite)
                     la journée car vous pouvez être ébloui par le soleil et ainsi perdre le contrôle de la situation sur
                     la route. Parfois, il suffit d'un petit moment d'inattention pour que les soucis se produisent. 
                    Pensez à toujours avoir des lunettes de soleil dans la voiture, car la météo peut changer et le soleil peut 
                    vous surprendre. Si votre correction est importante, je vous conseille de vous faire faire des lunettes
                     de soleil à votre vue. Bien entendu, dès la tombée de la nuit, enlevez-les, car elles dégradent la visibilité.</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Si la mention "01" est inscrite sur votre permis, alors la conduite sans lunettes ou lentilles 
                        de contact peut être punie d'une amende de 135€, 
                        d'une perte de 3 points sur le permis et d'une immobilisation du véhicule. 
                    </p>
                </div>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>L'acuité minimale exigée pour obtenir le permis B est de 5/10e pour l'ensemble des 2 yeux.</li>
                    <li>La vue peut se dégrader avec l'âge, pensez à voir un médecin régulièrement.</li>
                        <li>Les lunettes de soleil sont à enlever la nuit.</li>
                                            
                        L'acuité minimale exigée pour obtenir le permis B est de 5/10e pour l'ensemble des 2 yeux.
                        La vue peut se dégrader avec l'âge, pensez à voir un médecin régulièrement.
                        Les lunettes de soleil sont à enlever la nuit.</li>
                                            <li>
                        L'acuité minimale exigée pour obtenir le permis B est de 5/10e pour l'ensemble des 2 yeux.
                        La vue peut se dégrader avec l'âge, pensez à voir un médecin régulièrement.
                        Les lunettes de soleil sont à enlever la nuit.</li>
                </ol>
                <br>              
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