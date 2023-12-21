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
              <h1><b>Principes de priorité</b></h1>
              <br> 
              
              <p>Jusqu'à maintenant, nous avons vu le cas des intersections simples. 
                Voyons à présent ce qui arrive lorsque tout un axe devient prioritaire.</p>
                
              <h5><b>Axes prioritaires</b></h5>
               <P>Les panonceaux peuvent schématiser la forme d'intersection en cas d'ambiguïté. 
                    L'axe prioritaire est toujours en gras comme sur les photos ci-dessous :
              </p>
              <div class="card senscirc">
                <img src="../images/pandeterminprio.jpg" height="200px" class="senscirc">
              </div>
              
              <p class="text-muted text-center"><small>Panonceaux déterminant les priorités </small></p>
              
              <p>Sur la première photo, vous circulez sur l'axe prioritaire, qui tourne ensuite vers la gauche. 
                En allant en face, vous quitterez donc cet axe prioritaire. 
                Mais les véhicules venant de votre droite auront une obligation de priorité par rapport à votre voie. 
                Et les véhicules venant de votre gauche ne devront pas vous couper la route s'ils désirent aller tout droit. 
                Vous n'aurez donc à céder la priorité ni à gauche ni à droite.</p>
              <p>Sur la deuxième photo, vous roulerez toujours sur une route prioritaire 
                si votre trajectoire correspond à la ligne en gras sur le panonceau. 
                Vous n'aurez pas à céder le passage aux voitures venant de droite. 
                Si vous tournez à droite, vous ne serez plus sur la route prioritaire.</p>
              <p>Sur le schéma ci-dessous, la voiture orange passe en premier car elle circule sur 
                l'axe prioritaire et qu'elle aille en direction du Cédez le passage ou pas, 
                elle reste prioritaire :</p>
              <div class="card senscirc">
                <img src="../images/fonctaxe.jpg" height="350px" class="senscirc">
              </div>
              <br>
              <h4><b>Entrée et sortie d'agglomération</b></h4>
              <p>
                 A l'intérieur de l'agglomération, la route conserve son caractère prioritaire :
              </p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/courpiere.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Vous êtes prioritaires en entrant dans une agglomération</small></p>
              <p>A la sortie de l'agglomération, la route reste ou devient à caractère prioritaire :<p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/champiex.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>En sortant de Champeix, vous êtes prioritaires</small></p>
              
              <p>En entrant dans une agglomération, vous devez être attentifs aux priorités car on vous indique que 
                la route sur laquelle vous vous trouvez cesse d'être prioritaire :</p>
              <div class="col">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="../images/nocourpiere.jpg" width="300px;">
                  </div>
                </div>
              </div>
              <p class="text-muted text-center"><small>Informez-vous des règles de passage à la prochaine intersection</small></p>
              
                <h3><b>Priorités relatives à la voie d'accélération</b></h3>
                <p>Si vous vous apprêtez à rejoindre l'autoroute où l'on circule à une vitesse élevée, vous n'êtes pas prioritaires. 
                    Vous devez céder le passage aux autres véhicules, 
                    tout en vous servant de la voie d'accélération pour vous insérer sur la chaussée prioritaire.
                </p>
                <div class="card sensuniq">
                    <img src="../images/voieinsert.jpg" height="200px" class="sensuniq">
                </div> 
              <p class="text-muted text-center"><small>Voies d'insertion ne donnent pas la priorité</small></p>
              <h3><b>En résumé</b></h3>
              <ol style="margin-left: 10px; list-style-type: disc;">
              <li>Dans les carrefours aux axes prioritaires, il faut suivre les indications du panonceau pour savoir qui 
                  devra passer en premier.</li>
              <li>
                  En entrant ou en quittant l'agglomération, les priorités peuvent changer.</li>
              <li> Sur les voies servant à s'insérer sur les voies rapides ou autoroutes, vous n'avez pas la priorité.
              </li>
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