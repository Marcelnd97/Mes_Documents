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
    <title>Les catégories de permis</title>
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
                <h1 style="font-weight: bold;"><b>Les catégories de permis</b></h1>
                <br>
                <p>Pour pouvoir comprendre les 2 tableaux ci-dessous qui résument les types de permis de conduire, 
                    je vais d'abord vous sensibiliser à leurs spécificités.</p>
                <p> Faites la différence entre les différents types de deux-roues : un scooter et une motocyclette 
                    n'ont pas la même puissance et les spécificités du permis du type A diffèrent un peu.</p>
                <p>Les tricycles et les quadricycles sont aussi classés dans la catégorie des permis du type A. La 
                    puissance de leur moteur et leur poids ne leur permet pas d'être considérés comme des voitures 
                    habituelles.</p>
                <p> Un side-car est une motocyclette pourvue d'une troisième roue latérale (à droite ou à gauche).
                     Elle permet d'ajouter un "panier", généralement destiné à héberger 1 ou 2 passagers.</p>
                <p> PTAC (Poids total autorisé en charge) comprend le poids du véhicule à vide, la charge maximale 
                    de marchandises (charge utile) ainsi que le poids maximal du chauffeur et de tous les passagers.
                     Une voiture particulière ne doit pas dépasser 3,5t, et doit avoir moins de 9 places assises, 
                     conducteur compris.</p>
                <p> Véhicule de catégorie L5e : véhicule à trois roues symétriques, équipé d’un moteur d’une cylindrée
                     supérieure à 50 cm ³ s’il est à combustion interne et / ou dont la vitesse maximale par 
                     construction est supérieure à 45 km / h.</p>
                <p>Véhicule de catégorie L7e : véhicule à moteur à quatre roues dont la puissance maximale nette du 
                    moteur est inférieure ou égale à 15 kilowatts, le poids à vide n’excède pas 550 kilogrammes
                     pour les quadricycles affectés au transport de marchandises et 400 kilogrammes pour les 
                     quadricycles destinés au transport de personnes, et qui n’est pas de catégorie L6e.</p>
                <br>
                <div class="table-responsive">
                <table class="table table-bordered table-hover" style=" border-radius: 8px; overflow: hidden;">
                    <thead style="background-color: chocolate;  color: white; ">
                        <th>Permis</th>
                        <th>Véhicules</th>
                        <th>Âge minimal</th>
                        <th>Équivalence</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            AM (Brevet de sécurité routière)
                            </td>
                            <td>
                                2 roues ou 3 roues à moteur : <br>
                                - Cylindrée <= 50 cm3  <br>
                                - Puissance <= 4 kW  <br>
                                - Vitesse maxi 45 km/h  <br>
                                - Poids à vide <= à 350 kg
                            </td>
                            <td>14 ans</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>AM</td>
                            <td>Quadricycles légers à moteur</td>
                            <td>14 ans</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>A1</td>
                            <td>
                                Motocyclettes avec ou sans side-car :  <br>
                                - Cylindrée max : 125 cm3 <br>
                                - Puissance max : 11 kW (15 chevaux) <br>
                                - Rapport puissance / poids : <= 0,1kW/kg <br>
                                Tricycles à moteur : <br>
                                - Puissance max 15 kW (20 chevaux)
                            </td>
                            <td>16 ans</td>
                            <td>AM <br> B1</td>
                        </tr>
                        <tr>
                            <td>A2</td>
                            <td>
                                Motocyclettes avec ou sans side-car :  <br>
                                - Puissance max 35 kW (47 chevaux) <br>
                                - Rapport puissance/poids : <= 0,2 kW/kg 
                            </td>
                            <td>18 ans </td>
                            <td> AM <br> A1 <br> B1</td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>
                                Motocyclettes avec ou sans side-car : <br>
                                - Puissance max 73,6 kW (100 chevaux) <br>
                                Tricycles à moteur : <br>
                                - Puissance > 15 kW (20 chevaux)***
                            </td>
                            <td>20 ans ou 21 ans (Moto A2 depuis au moins 2 ans et formation de 7 heures)</td>
                            <td> AM <br> A1 <br> A2 <br> B1</td>
                        </tr>
                        <tr>
                            <td>B1</td>
                            <td>
                                Quadricycles à moteur (catégorie L7e) : <br>
                                - Puissance maxi 15 kW <br>
                                - Poids à vide maxi 550 kg (transport de marchandises) et 400 kg (transport de personnes)
                            </td>
                            <td>16 ans</td>
                            <td> AM <br> A1**</td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td>
                                Voitures, camionnettes voire camping-cars  à condition que : <br>
                                - PTAC <= 3,5 t <br>
                                9 places assises conducteur inclus <br>
                                - Remorques : PTAC <= 750 kg <br>
                                Option B96 : si remorque > 750 kg et somme des PTAC > à 3500 kg et <= à 4250 kg + formation de 7 heures <br>
                                - 125 cm3 (11 kW) si 2 ans de permis et formation de 7 heures <br>
                                - Tricycle - L5e si 2 ans de permis et formation de 7 heures et plus et plus de 21 ans
                            </td>
                            <td>18 ans</td>
                            <td> 	
                                AM <br>
                                A1* <br>
                                B1
                            </td>
                        </tr>
                        <tr>
                            <td>BE</td>
                            <td>
                            B + remorque ou semi-remorque dont PTAC > 750 kg et 3500 kg, si somme des PTAC >4250 kg
                            </td>
                            <td>18 ans</td>
                            <td> 	
                                AM <br>
                                A1* <br>
                                B1-BE****
                            </td>
                        </tr>
						
                    </tbody>
                </table>
                </div>
                <p>* justificatif de la conduite effective d'une 125 cm3 dans les 5 ans précédant
                     (relevé d'information délivré par l'assureur) ou, à défaut de cette pratique,
                      de la production d'une attestation de suivi de formation de 7h.</p>
                <p> ** Code 79 L5e <= 15 Kw.</p>
                <p>*** Si permis A2 obtenu par formation de 7heures, tricycle > 15 kW accessible dès 21 ans.</p>
                <p>**** Si permis C obtenu avant mars 1999.</p>
                <p>Voyons maintenant les poids lourds et les bus :</p>
                <div class="table-responsive">
                    <table class="table table-bordered" style=" border-radius: 8px;">
                        <thead style="background-color: chocolate;  color: white; ">
                            <th>Permis</th>
                            <th> Véhicules</th>
                            <th>Âge minimal</th>
                            <th> Conditions</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>C1</td>
                                <td>
                                    Véhicules affectés au transport de marchandises : <br>
                                    3,5 t < PTAC <= 7,5 t ; <br>
                                    9 places assises max (conducteur compris). <br>
                                    Remorques : PTAC <= 750 kg</td>
                                <td>18 ans</td>
                                <td>Être titulaire du permis B</td>
                            </tr>
                            <tr>
                                <td>C1E</td>
                                <td>
                                    Catégorie C1 + remorque dont PTAC > 750 kg ou  <br>
                                    Catégorie B + remorque dont PTAC > 3,5 t <br>
                                    PTRA <= 12 t</td>
                                <td>18 ans</td>
                                <td>Être titulaire du permis C1</td>
                            </tr>
                            <tr>
                                <td>C</td>
                                <td>
                                    Véhicules affectés au transport de marchandises : <br>
                                    PTAC > 3,5 t ; <br>
                                    9 places assises max (conducteur compris). <br>
                                    Remorque : PTAC <= 750 kg</td>
                                <td>21 ans</td>
                                <td>Être titulaire du permis B</td>
                            </tr>
                            <tr>
                                <td>CE</td>
                                <td>Catégorie C + remorque dont PTAC > 750 kg</td>
                                <td>21 ans</td>
                                <td>Être titulaire du permis C</td>
                            </tr>
                            <tr>
                                <td>D1</td>
                                <td>
                                    Véhicules affectés au transport de personnes : <br>
                                    16 passagers au maximum non compris le conducteur ; <br>
                                    Longueur max 8 m. <br>
                                    Remorque : PTAC <= 750 kg<br>
                                    9 places assises max (conducteur compris). <br>
                                    Remorque : PTAC <= 750 kg</td>
                                <td>21 ans</td>
                                <td>Être titulaire du permis B</td>
                            </tr>
                            <tr>
                                <td>D1E</td>
                                <td>Catégorie D1 + remorque dont PTAC > 750 kg<br>
                                    9 places assises max (conducteur compris). <br>
                                    Remorque : PTAC <= 750 kg</td>
                                <td>21 ans</td>
                                <td>Être titulaire du permis D1</td>
                            </tr>
                            <tr>
                                <td>D</td>
                                <td>Véhicules affectés au transport de personnes de plus 
                                    de 8 passagers (conducteur non compris) ou transportant plus de 9 personnes <br>
                                    Remorque : PTAC <= 750 kg</td>
                                <td>24 ans</td>
                                <td>Être titulaire du permis B</td>
                            </tr>
                            <tr>
                                <td>DE</td>
                                <td>Catégorie D + remorque dont PTAC > 750 kg</td>
                                <td>24 ans</td>
                                <td>Être titulaire du permis D</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>Il existe plusieurs types de permis de conduire et ce, en fonction du véhicule.</li>
                   <li>Le permis de type A concerne aussi d'autres véhicules que les deux-roues ; 
                    les véhicules de catégorie L5a (trois-roues) et L7e (quatre-roues sont aussi
                     dans cette catégorie de permis de conduire).</li>
                   <li>Le permis B concerne les voitures, les camionnettes et les camping-cars à condition que leur poids 
                    maximal ne dépasse pas les 3,5 t et que les places assises sont de 9 maximum conducteur inclus.</li>
                   <li>Le permis C concerne les poids lourds et le permis D les chauffeurs de bus.</li>
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