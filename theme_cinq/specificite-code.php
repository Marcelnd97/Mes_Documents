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
    <title>Spécificités du code</title>
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
                <h1 style="font-weight: bold;"><b>Spécificités du code</b></h1>
                <br>
                <p>Comme signalé dans mon tout premier chapitre, le parcours Code la route s'adresse à tous
                     ceux qui veulent le passer en France. Mais si vous partez à l'étranger, et surtout en 
                     Europe, je me dois de vous donner quelques indications sur les obligations à respecter.</p>
                <p>Si vous partez en voyage en hiver, renseignez-vous si le pays en question vous demandera 
                    des pneus neige. Au Luxembourg par exemple, ils sont obligatoires, mais pas en Espagne.</p>
                <p>Comme pour tout autre voyage, vous pouvez vous servir du GPS ou des cartes routières.</p>
                <h2 style="font-weight: bold;">Cartes routières</h2>
                <p>Elles ont pour objectif de reproduire la réalité du terrain et d'en identifier les éléments par 
                    une représentation adaptée selon les besoins : plan de ville, carte routière, etc. Pour pouvoir
                     lire ces cartes, il est important d'en comprendre l'échelle.</p>
                <p>Si c'est marqué que le rapport est 1 : 200 000e, cela veut dire que 1cm sur la carte égal 2 
                    km en réalité. Cela signifie que 1 cm sur cette carte représente en réalité 200 000 cm sur le 
                    terrain, c'est-à-dire 2 000 m ou encore 2,0 km.</p>
                <p>Par souci d'espace, les pictogrammes représentent des infrastructures. Chaque carte contient 
                    une légende qui vous aidera à mieux comprendre les informations fournies.</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tbody>
                           <tr>
                                <td><b>Limitation de vitesse</b></td>
                                <td>50 km/h</td>
                                <td>48 km/h (30 miles per hour)</td>
                           </tr>
                           <tr>
                                <td><b>Pays</b></td>
                                <td>tous les pays de l'UE et même en Suisse</td>
                                <td>Royaume Uni</td>
                           </tr>
                        </tbody>
                    </table>
                </div>
                <p><b>Vitesse hors agglomération (sur route)</b></p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tbody>
                           <tr>
                                <td><b>Limitation de vitesse</b></td>
                                <td>96 (60 miles per hour*)</td>
                                <td>90</td>
                                <td>80</td>
                                <td>70</td>
                           </tr>
                           <tr>
                                <td><b>Pays</b></td>
                                <td>Royaume Uni</td>
                                <td>Belgique, Espagne, Estonie, Grèce, Hongrie, Italie, Lettonie, Lituanie, Luxembourg, Pologne, Portugal, République Tchèque</td>
                                <td>Bulgarie, Chypre, Danemark, France, Finlande, Irlande, Malte, Pays-Bas, Suisse</td>
                                <td>Suède</td>
                           </tr>
                        </tbody>
                    </table>
                </div>
                
                <p><b>Vitesse hors agglomération (voie rapide ou route à accès règlementé)</b></p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tbody>
                           <tr>
                                <td><b>Limitation de vitesse</b></td>
                                <td>120</td>
                                <td>112 (70 miles per hour)</td>
                                <td>110</td>
                                <td>100</td>
                           </tr>
                           <tr>
                               <td><b>Pays</b></td>
                               <td>Belgique</td>
                               <td>Royaume Uni</td>
                               <td>France, Estonie, Grèce, Hongrie, Italie</td>
                               <td>Suisse, Suède, Slovénie, Portugal, Pologne, Pays-Bas, Lituanie, 
                                Lettonie, Irlande, Finlande, Espagne</td>
                           </tr>
                        </tbody>
                    </table>
                </div>
                <p><b>Vitesse sur autoroute</b></p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tbody>
                           <tr>
                                <td><b>Limitation de vitesse</b></td>
                                <td>130 +</td>
                                <td>140</td>
                                <td>130</td>
                                <td>120</td>
                                <td>112 (70 miles per hour)</td>
                           </tr>
                           <tr>
                               <td><b>Pays</b></td>
                               <td>Allemagne</td>
                               <td>Pologne</td>
                               <td>France, Autriche, Bulgarie, Grèce, Hongrie, Italie, Lituanie, Luxembourg, 
                                République Tchèque, Roumanie, Slovaquie, Slovénie</td>
                               <td>Belgique, Danemark, Espagne, Estonie, Finlande, Irlande, Pays-Bas, Portugal, 
                                Suède, Suisse</td>
                               <td>Royaume Uni</td>
                           </tr>
                        </tbody>
                    </table>
                </div>
                <p><b>Alcoolémie au volant pour conducteurs confirmés (C) ou novices (N)</b></p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tbody>
                           <tr>
                                <td><b>Taux d'alcool dans le sang</b></td>
                                <td>0 g/l (C) ou (N)</td>
                                <td>0,1 g/l (C) ou (N)</td>
                                <td>0,2 g/l (C)  / 0,1 g/l (N)</td>
                                <td>0,25 g/l (C) / 0 g/l (N)</td>
                                <td>0,25 g/l (C) / 0,05 g/l (N)</td>
                                <td>0,25 g/l (C) / 0,1 g/l (N)</td>
                                <td>0,25 g/l (C) / 0,15 (N)</td>
                                <td>0,25 g/l (C) ou (N)</td>
                                <td>0,4 g/l</td>
                                <td>0,5 g/l (C) / 0,2 g/l (N)</td>
                           </tr>
                           <tr>
                               <td><b>Pays</b></td>
                               <td>Hongrie, République Tchèque, Roumanie, Slovaquie</td>
                               <td>Suède, Pologne, Estonie</td>
                               <td>Lituanie</td>
                               <td>Allemagne, Italie</td>
                               <td>Autriche</td>
                               <td>Irlande, Lettonie, Luxembourg, Pays-Bas</td>
                               <td>Espagne</td>
                               <td>Belgique, Bulgarie, Chypre, Danemark, Finlande, Grèce, Malte, Portugal, Slovénie, Suisse</td>
                               <td>Royaume Uni</td>
                               <td>France</td>
                           </tr>
                        </tbody>
                    </table>
                </div>
                
                <p>* Le Royaume Uni n'utilise pas les mêmes unités quand il s'agit de la vitesse. 1 mph = 1,609 344 km/h ;</p>
                <br>
                <div class="card important">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Faites défiler le tableau pour le voir en entier !</p>
                    </div>
                </div>
                <br>
                <p><b>Équipements à avoir dans la voiture</b></p>
                <p>G - Gilet</p>
                <p>E - Extincteur</p>
                <p>S - Trousse de secours</p>
                <p>A - Ampoules</p>
                <p>T - Triangles</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tbody>
                           <tr>
                                <td><b>Équipements</b></td>
                                <td>GESAT</td>
                                <td>GEST</td>
                                <td>GSAT</td>
                                <td>ESAT</td>
                                <td>GST</td>
                                <td>GT</td>
                                <td>GAT</td>
                                <td>ST</td>
                                <td>T</td>
                           <tr>
                               <td><b>Pays</b></td>
                               <td>Aucun pays <br> ne demande la <br>totalité des équipements </td>
                               <td> Belgique,<br> Lettonie, <br> Pologne,<br>Roumanie </td>
                               <td>République Tchèque, <br> Slovaquie, Slovénie </td>
                               <td>Royaume Uni</td>
                               <td>Autriche,<br> Bulgarie, Lituanie, <br>Hongrie</td>
                               <td>France,<br> Italie, <br> Luxembourg, <br> Portugal </td>
                               <td>Espagne<br>  (2 T) </td>
                               <td>Allemagne,<br> Estonie, <br>Pays-Bas (S est recommandée)</td>
                               <td>Danemark, <br>Finlande,  <br> Suède, <br>Suisse</td>
                           </tr>
                        </tbody>
                    </table>
                </div>
                <p><b>Feux de croisement</b></p>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tbody>
                           <tr>
                                <td><b>Feux</b></td>
                                <td>Non <br>Non mais </td>
                                <td>recommandés</td>
                                <td>Recommandés</td>
                                <td>D'octobre à mars</td>
                                <td>Voies rapides</td>
                                <td>Hors agglomération</td>
                                <td>Oui</td>
                           <tr>
                               <td><b>Pays</b></td>
                               <td>Allemagne, Belgique, Chypre, Espagne, Grèce, Luxembourg, 
                                Malte, Portugal, Royaume Uni</td>
                               <td>Pays-Bas, Irlande</td>
                               <td>Suisse</td>
                               <td>Slovaquie</td>
                               <td>Italie</td>
                               <td>Hongrie</td>
                               <td>Autriche, Bulgarie, <br> Danemark, Estonie, Finlande, FranceLettonie,
                                Lituanie, Pologne, République Tchèque, Slovénie, Suède</td>
                           </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <p>Comme vous pouvez le constater, les réglementations ne sont pas identiques. Dans certains 
                    pays elles paraissent plus strictes qu'en France. A vous de faire attention !</p>
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