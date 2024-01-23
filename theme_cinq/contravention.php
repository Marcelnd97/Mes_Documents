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
    <title>Contraventions</title>
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
                <h1 style="font-weight: bold;"><b>Contraventions</b></h1>
                <br>
                <h2 style="font-weight: bold;">Amendes forfaitaires</h2>
                <p> Si vous commettez une infraction au code de la route, vous devez payer une amende 
                    dont le prix varie en fonction :</p>
                <ol style="list-style-type: disc;">
                    <li>de la date du paiement ;</li>
                    <li>de la classe d'infraction.</li>
                </ol>
                <p>Il existe 5 classes d'infraction, la 1ère étant la moins importante, 5 la plus importante.</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hover">
                        <thead style="background: chocolate; color: white;">
                            <tr>
                                <th>Classe de l'infraction</th>
                                <th>Amende maximale</th>
                                <th>Amende forfaitaire</th>
                                <th>Amende minorée</th>
                                <th>Amende majorée</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1ere classe</td>
                                <td>38 €</td>
                                <td>11 €</td>
                                <td>-</td>
                                <td>33 €</td>
                            </tr>
                            <tr>
                                <td>2eme classe</td>
                                <td>150 €</td>
                                <td>35 €</td>
                                <td>22 €</td>
                                <td>75 €</td>
                            </tr>
                            <tr>
                                <td>3eme classe</td>
                                <td>450 €</td>
                                <td>68 €</td>
                                <td>45 €</td>
                                <td>180 €</td>
                            </tr>
                            <tr>
                                <td>4eme classe</td>
                                <td>750 €</td>
                                <td>135 €</td>
                                <td>90 €</td>
                                <td>375 €</td>
                            </tr>
                            <tr>
                                <td>5eme classe</td>
                                <td>1500 € voire 3000 € en cas de récidive</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                    </table>
                </div>
                <p>L'amende est traditionnellement nommée amende forfaitaire et ne concerne que les 
                    contraventions. Les délits, les crimes et les contraventions de 5e classe ne sont donc pas 
                    pris en compte par cette catégorie car leur gravité est supérieure.</p>
                <p><b>Amende minorée</b></p>
                <p>Pour les contraventions de 2e, 3e et 4e classe, les amendes sont minorées car elles 
                    ne concernent pas les infractions liées au stationnement. Il faut donc payer le plus 
                    rapidement possible pour pouvoir bénéficier du montant inférieur à l'amende forfaitaire si 
                    celle-ci le permet.</p>
                <p><b>Amende majorée</b></p>
                <p>En cas d'oubli de paiement ou du non respect du délai normal, le montant de l'amende 
                    est majoré avec réception de l'avis majoré. Si l'on opte pour le télépaiement d'une 
                    amende majorée dans les 30 jours après la réception de l'amende forfaitaire majorée, 
                    le montant est réduit de 20%. </p>
                <p><b>Paiement sur Internet</b></p>
                <p>Pour payer l'amende en ligne, il faudra se munir du numéro de télépaiement et de sa 
                    clé mentionnés sur l'avis de contravention. Le paiement s'effectue sur le site du 
                    gouvernement dédié aux amendes. Toutes les contraventions ne peuvent pas être payées 
                    en ligne tout comme celles excédant 1500€.</p>
                <br>
                <div class="row">
                    <div class="col-md-12" >
                        <div class="card" 
                            style="border: none; max-width: 550px; 
                            margin: 100px auto;
                            margin-top: 10px; margin-bottom: 10px;" >
                                <img src="../images/theme_cinq/contravention1.jpg">
                        </div>
                        <p class="text-muted text-center"><small>Amende pour le franchissement d'une ligne continue</small></p>
                    </div>
                </div>
                <br>
                <div class="card Informations bg-info">
                    <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Informations</b>
                    <p> Depuis le 23/11/2015 il est possible de contester sa contravention en ligne.</p>
                    </div>
                </div>
                <br>
                <p> Voici les infractions classées par leur nature.</p>
                <p><b>Infractions par classe : quelques exemples</b></p>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td>Amendes de 1ère classe</td>
                                <td>- Stationnement interdit <br> - Feux de position non conformes</td>
                            </tr>
                            <tr>
                                <td>Amendes de 2e classe</td>
                                <td>- Conduite sans signe "A" pour les jeunes conducteurs
                                     <br> - Changement de direction sans clignotant
                                     <br> - Non paiement d'un péage routier
                                     <br> - Non présentation de l'attestation d'assurance
                                </td>
                            </tr>
                            <tr>
                                <td>Amendes de 3e classe</td>
                                <td>- Excès de vitesse inférieur à 20 km/h lorsque la vitesse autorisée maximale est supérieure à 50 km/h,
                                     <br> - Conduite d'un véhicule non équipé de dispositifs de freinage conformes </td>
                            </tr>
                            <tr>
                                <td>Amendes de 4e classe</td>
                                <td>
                                    - Usage d'un téléphone en conduisant <br> 
                                    - Circulation sur la bande d'arrêt d'urgence <br> 
                                    - Conduite sans ceinture de sécurité <br> 
                                    - Refus de priorité, non respect d'un feu rouge ou d'un Stop <br> 
                                    - Stationnement non-autorisé sur une place réservée aux handicapés <br> 
                                    - Franchissement ou chevauchement d'une ligne continue <br> 
                                    - Maintien en circulation d'un véhicule sans visite technique périodique <br> 
                                    - Conduite en état d'ivresse <br> 
                                    - Circulation en sens interdit <br> 
                                    - Non respect de la distance de sécurité entre 2 véhicules <br> 
                                    - Excès de vitesse inférieur à 50 km/h, sauf les excès de vitesse inférieurs à 20 km/h quand la vitesse limite est supérieure à 50 km/h (contravention de troisième classe) <br> 
                                    - Dépassement dangereux <br> 
                                    - Circulation de nuit ou par visibilité insuffisante sans éclairage <br>  
                                    - Circuler sur un scooter non immatriculé</td>
                            </tr>
                        </tbody>
                     </table>
                </div>
                <h2 style="font-weight: bold;">Infractions relatives aux documents</h2>
                <p> Comme vous pouvez le constater, il faut toujours avoir les documents sur 
                    vous. Les photocopies ne sont pas acceptées.</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hover">
                        <thead style="background: chocolate; color: white;">
                            <tr>
                                <th>Nature de l'infraction</th>
                                <th> Amende</th>
                                <th>Suspension de permis</th>
                                <th>Retrait de points</th>
                                <th> Divers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Non-présentation : permis, carte grise</td>
                                <td>11 euros</td>
                                <td>Non</td>
                                <td>Non</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Conduite malgré un permis suspendu</td>
                                <td>Max 4 500 euros</td>
                                <td>3 ans</td>
                                <td>6</td>
                                <td>Délit : tribunal</td>
                            </tr>
                            <tr>
                                <td>Défaut de permis</td>
                                <td>Max 15 000 euros</td>
                                <td>3 ans</td>
                                <td>Sans objet</td>
                                <td>Délit : tribunal</td>
                            </tr>
                            <tr>
                                <td>Défaut d'assurance</td>
                                <td>Max 3 750 euros</td>
                                <td>3 ans</td>
                                <td>Non</td>
                                <td>Suspension ou annulation</td>
                            </tr>
                            <tr>
                                <td>Vente de permis</td>
                                <td>Max 15 000 euros</td>
                                <td>3 ans</td>
                                <td>6</td>
                                <td>Délit : tribunal</td>
                            </tr>
                            
                    </table>
                </div>
                <h2 style="font-weight: bold;">Infractions relatives à l'installation dans le véhicule</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hover">
                        <thead style="background: chocolate; color: white;">
                            <tr>
                                <th>Nature de l'infraction</th>
                                <th> Amende</th>
                                <th>Suspension de permis</th>
                                <th>Retrait de points</th>
                                <th> Divers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Non-port de la ceinture de sécurité</td>
                                <td>135 euros</td>
                                <td>Non</td>
                                <td>3</td>
                                <td>Amende : chaque occupant non attaché</td>
                            </tr>
                            <tr>
                                <td>Passagers (-18 ans) non attachés</td>
                                <td>135 euros</td>
                                <td>Non</td>
                                <td>Non</td>
                                <td>Le conducteur est responsable</td>
                            </tr>
                            <tr>
                                <td>Enfant (-10 ans) en place avant</td>
                                <td>135 euros</td>
                                <td>Non</td>
                                <td>Non</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Téléphone tenu en main en conduisant</td>
                                <td>135 euros</td>
                                <td>Non</td>
                                <td>3</td>
                                <td>Suspension du permis si autre infraction commise en même temps</td>
                            </tr>
                            <tr>
                                <td>Utilisation de tout dispositif émettant du son</td>
                                <td>135 euros</td>
                                <td>Non</td>
                                <td>3</td>
                                <td>Écouteurs, oreillettes, casque..</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h2 style="font-weight: bold;">Infractions relatives à l'état physique du conducteur</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hover">
                        <thead style="background: chocolate; color: white;">
                            <tr>
                                <th>Nature de l'infraction</th>
                                <th> Amende</th>
                                <th>Suspension de permis</th>
                                <th>Retrait de points</th>
                                <th> Divers</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                                <td>Alcool (conducteurs novices) de 0,20 à 0,79 g/l</td>
                                <td>135 euros</td>
                                <td>3 ans</td>
                                <td>6</td>
                                <td>-</td>
                           </tr>
                           <tr>
                                <td>Alcool de 0,50 à 0,79 g/l</td>
                                <td>135 euros</td>
                                <td>3 ans</td>
                                <td>6</td>
                                <td>-</td>
                           </tr>
                           <tr>
                                <td>Drogues et alcool</td>
                                <td>Max 4 500 euros</td>
                                <td>3 ans</td>
                                <td>6</td>
                                <td>Délit : tribunal</td>
                           </tr>
                        </tbody>
                    </table>
                </div>
                <h2 style="font-weight: bold;">Conduite</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hover">
                        <thead style="background: chocolate; color: white;">
                            <tr>
                               <th>Nature de l'infraction</th>
                               <th> Amende</th>
                               <th>Suspension de permis</th>
                               <th>Retrait de points</th>
                               <th> Divers</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                                <td>Excès de vitesse*</td>
                                <td>De 68 à 3750 euros</td>
                                <td>De rien à 3 ans</td>
                                <td>De 1 à 6</td>
                                <td>En fonction de l'excès de vitesse</td>
                           </tr>
                           <tr>
                                <td>Dépassement dangereux</td>
                                <td>135 euros</td>
                                <td>3 ans</td>
                                <td>3</td>
                                <td>-</td>
                           </tr>
                           <tr>
                                <td>Franchissement d'une ligne continue</td>
                                <td>135 euros</td>
                                <td>3 ans</td>
                                <td>3</td>
                                <td>-</td>
                           </tr>
                           <tr>
                                <td>Priorité ou Stop</td>
                                <td>135 euros</td>
                                <td>3 ans</td>
                                <td>4</td>
                                <td>Quel que soit le régime de priorité</td>
                           </tr>
                           <tr>
                                <td>Distance de sécurité</td>
                                <td>135 euros</td>
                                <td>3 ans</td>
                                <td>3</td>
                                <td>-</td>
                           </tr>
                           <tr>
                                <td>Circulation sur la bande d'arrêt d'urgence (BAU)</td>
                                <td>135 euros</td>
                                <td>3 ans</td>
                                <td>3</td>
                                <td>-</td>
                           </tr>
                           <tr>
                                <td>Circulation en sens interdit</td>
                                <td>135 euros</td>
                                <td>3 ans</td>
                                <td>4</td>
                                <td> </td>
                           </tr>
                        </tbody>
                    </table>
                </div>
                <h2 style="font-weight: bold;">* Tableau relatif aux excès de vitesse</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hover">
                        <thead style="background: chocolate; color: white;">
                            <tr>
                               <th>Nature de l'infraction</th>
                               <th> Amende</th>
                               <th>Suspension de permis</th>
                               <th>Retrait de points</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                                <td>Excès de vitesse de 1 à 19 km/h, vitesse supérieure à 50 km/h</td>
                                <td>68 euros</td>
                                <td>Non</td>
                                <td>1</td>
                           </tr>
                           <tr>
                                <td>Excès de vitesse de 1 à 19 km/h, vitesse limitée à 50 km/h</td>
                                <td>135 euros</td>
                                <td>Non</td>
                                <td>1</td>
                           </tr>
                           <tr>
                                <td>Excès de vitesse de 20 à 29 km/h</td>
                                <td>135 euros</td>
                                <td>Non</td>
                                <td>2</td>
                           </tr>
                           <tr>
                                <td>Excès de vitesse de 30 à 39 km/h</td>
                                <td>135 euros</td>
                                <td>Max 3 ans</td>
                                <td>3</td>
                           </tr>
                           <tr>
                                <td>Excès de vitesse de 40 à 49 km/h</td>
                                <td>135 euros</td>
                                <td>Max 3 ans</td>
                                <td>4</td>
                           </tr>
                           <tr>
                                <td>Excès de vitesse de 50 km/h ou plus</td>
                                <td>Max 1 500 euros</td>
                                <td>Max 3 ans</td>
                                <td>6</td>
                           </tr>
                           <tr>
                                <td>Récidive d'excès de vitesse de 50 km/h ou plus</td>
                                <td>Max 3 750 euros</td>
                                <td>Max 3 ans</td>
                                <td>6</td>
                           </tr>
                        </tbody>
                    </table>
                </div>
                <h2 style="font-weight: bold;">Infractions relatives au stationnement</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hover">
                        <thead style="background: chocolate; color: white;">
                            <tr>
                               <th>Nature de l'infraction</th>
                               <th> Amende</th>
                               <th>Suspension de permis</th>
                               <th>Retrait de points</th>
                               <th> Divers</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                               <td>Au-delà du temps réglementaire</td>
                               <td>17 euros</td>
                               <td>Non</td>
                               <td>Non</td>
                               <td>Montant susceptible de changer</td> 
                           </tr>
                           <tr>
                               <td>Arrêt et stationnement gênant</td>
                               <td>35 euros</td>
                               <td>Non</td>
                               <td>Non</td>
                               <td>Fourrière possible ; prévoir d'autres frais</td> 
                           </tr>
                           <tr>
                               <td>Arrêt et stationnement très gênant</td>
                               <td>135 euros</td>
                               <td>Non</td>
                               <td>Non</td>
                               <td>Fourrière possible ; prévoir des frais</td> 
                           </tr>
                           <tr>
                               <td>Arrêt et stationnement dangereux</td>
                               <td>135 euros</td>
                               <td>Max 3 ans</td>
                               <td>3</td>
                               <td>Fourrière possible ; prévoir des frais</td> 
                           </tr>
                        </tbody>
                    </table>
                </div>
                <h2 style="font-weight: bold;">Infractions relatives au refus</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hover">
                        <thead style="background: chocolate; color: white;">
                            <tr>
                                <th>Nature de l'infraction</th>
                               <th> Amende</th>
                               <th>Suspension de permis</th>
                               <th>Retrait de points</th>
                               <th> Divers</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                               <td>Refus d'obtempérer (obéir)</td>
                               <td>Max 7 500 euros</td>
                               <td>3 ans</td>
                               <td>6</td>
                               <td>Délit : tribunal</td>
                           </tr>
                           <tr>
                               <td>Délit de fuite</td>
                               <td>Max 75 000 euros</td>
                               <td>3 ans</td>
                               <td>6</td>
                               <td>Délit : tribunal</td>
                           </tr>
                        </tbody>
                    </table>
                </div>
                <h2 style="font-weight: bold;">Contester une contravention</h2>
                <p>Il est possible de contester une contravention. La contestation se fait uniquement par courrier, 
                    avec preuve à l'appui et uniquement une fois que l'amende initiale est payée. Si les autorités 
                    conviennent que la contravention n'a pas lieu d'être alors le montant de l'amende est remboursé
                     et les points sont rendus (s'il y a lieu).</p>
                <br>
                                
                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                   <li>En fonction de leur nature et du moment de leur règlement,
                     les amendes sont minorées ou majorées.</li>
                   <li>Il est possible de payer et de contester les amendes sur Internet.</li>
                   <li>L'amende la moins chère est de 11 euros (non-présentation du permis de conduire), 
                    la plus chère peut aller jusqu'à 100 000 euros et plus si vous avez cumulé les délits.</li>
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