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
    <title>La vigilance</title>
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
                <h1 style="font-weight: bold;">La vigilance</h1>
                <br>
                <p>Nous avons vu que votre état physique peut beaucoup influencer votre vigilance. Ce qui peut 
                    aussi l'altérer c'est votre comportement pendant la conduite, malgré un état de santé parfait.</p>
                <p>Pendant la conduite, l'activité cognitive du cerveau est intense. Vous êtes exposés à des 
                    stimuli du monde extérieur que vous recevez à travers vos récepteurs (yeux et oreilles) 
                    et que votre cerveau traite et analyse. Si vous surchargez votre cerveau avec des stimuli, 
                    le temps de traitement des données sera plus lent, la réaction aussi et la conséquence peut devenir tragique.</p>
                <p>Faute d'expérience, les conducteurs novices seront peut-être même sur-vigilants. En revanche, 
                    les conducteurs expérimentés pourraient se sentir trop sûrs d'eux et toujours mal évaluer les dangers. 
                    L'issue peut être alors aussi catastrophique (rappelez-vous des accidents qui ont lieu sur les trajets 
                    connus et courts).</p>
                <p>Pour maintenir le contrôle de votre véhicule, il est donc déconseillé de :</p>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>prendre ou changer un CD ou de chercher une chanson sur votre lecteur USB ;</li>
                    <li>allumer une cigarette ;</li>
                    <li>manger un sandwich etc.</li>
                </ol>
                <p>car, tout simplement, ils détournent votre attention.</p> 
                <h3 style="font-weight: bold;">Téléphone portable</h3>
                <p>Parler au téléphone (et donc le tenir), ou taper un texto en conduisant est 
                    non seulement ultra dangereux mais aussi passible d'une amende.</p>
                <div class="card" style="background-color: #a1ee90;">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Pour un téléphone tenu en main en conduisant ou tout dispositif émettant du son
                         (écouteurs, oreillettes, casque) vous risquez 135 euros d'amende avec 3 points de retirés.</p>
                    <p>Si vous commettez cette infraction en même temps qu'une autre (chevauchement de ligne continue, 
                        refus de priorité, etc) vous encourez en plus une suspension du permis de conduire.</p>
                    </div>
                </div>
                <br>
                <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>
                    Pourquoi l'usage du téléphone au volant est-il incompatible avec la conduite ?
                    </p>
                  </div>
                </div>
                <br>
               
                <p>Réponse : Non seulement vous devez utiliser une main pour tenir le téléphone, mais vous
                     devez surtout vous concentrer sur ce que l'autre personne vous dit ! Mon conseil :
                      ne répondez pas ! Vous rappellerez cette personne plus tard.</p>
                <p>Certains smartphones détiennent le logiciel permettant de lui dicter un message ou de lui
                     dire de répondre à votre place sans avoir à y toucher (reconnaissance vocale). 
                     Je sais que vous serez tentés de le faire, mais attendez de vous arrêter et coupez
                      votre moteur pour passer un coup de fil ou répondre à un texto. C'est toujours plus sûr.</p>
                <div class="card senscirc">
                    <img src="./images/theme_conduite/vigile1.jpg" height="250px" class="senscirc">
                </div>
                <p class="text-muted text-center"><small>Incompatibilité entre le téléphone portable et la conduite</small></p>   
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Près de 1 accident corporel sur 10 est lié à l'utilisation du téléphone.</p>
                    </div>
                </div>
                <br>
                <p>En revanche, discuter avec un autre passager dans la voiture est moins dangereux, 
                    car votre interlocuteur perçoit les conditions de la circulation. En effet, 
                    il peut s'adapter au trafic et aura le réflexe 
                    de s'arrêter de parler si les conditions de circulation se compliquent.</p> 
                <h3 style="font-weight: bold;">Autres distractions auditives ou visuelles</h3>
                <p><b>Musique ou radio</b></p>
                <p>Écouter de la musique ou la radio est moins dangereux que de téléphoner, car vous pouvez très
                     bien changer votre façon d'écouter, c'est-à-dire passer à une écoute de veille (écouter sans 
                     vraiment faire attention à tout ce qui est dit). Cette écoute permet à votre cerveau de rester 
                     éveillé à condition de ne pas écouter la radio ou la musique trop fort. En effet, le son pourrait 
                     camoufler les bruits et les avertissements donnés par les autres usagers ce qui rallongerait votre
                      temps de réaction.</p> 
                <p><b>Logiciels d'apprentissage d'une langue</b></p>
                <p>Évitez aussi de vouloir investir le temps de conduite à l'apprentissage d'une langue étrangère.
                     Je me réfère à des logiciels que l'on peut télécharger sur une clé USB ou un CD et les écouter 
                     en voiture. Je trouve cette pratique extrêmement dangereuse car pour apprendre une langue, votre
                      cerveau a besoin d'une attention accrue. Ce n'est plus une écoute de veille comme celle de la radio,
                       mais une écoute active. Donc incompatible avec la conduite !</p> 
                <p><b>Films</b></p>
                <p>Regarder un film en conduisant est extrêmement dangereux, car pour cette activité il faut mobiliser 
                    toute son attention. C'est donc incompatible !</p> 
                <p><b>GPS (Global Positioning System) </b></p>
                <p>Le système de géolocalisation par GPS  est un équipement technologique permettant de repérer en temps
                     réel tout objet ou personne qui en est équipé grâce à une couverture par satellites. Ce dispositif 
                     est autorisé et même intégré dans plus en plus de modèles de voitures. Vous pouvez régler le GPS de 
                     telle façon à ce que les directions soient indiquées aussi à l'oral. </p>
                <p>Pensez à le mettre à jour assez souvent, car il y a des modèles qui prennent en compte les déviations
                     en cas de travaux par exemple. </p> 
                 <div class="card question">
                  <div class="card-body">
                    <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                    <p>
                    Pourquoi apprendre les indications autoroutières si vous avez un GPS ? 
                    </p>
                  </div>
                </div>
                <br>
                <p><b>Réponse: </b>'est très bien d'avoir un GPS, je vous l'accorde ! C'est un outil qui facilite la vie.
                     Mais il peut tomber en panne, rencontrer un bug, mal indiquer un chemin sur l'écran. 
                     Il faut donc toujours avoir un minimum de connaissances sur la lecture des panneaux routiers
                      ou autoroutiers. Il est toujours préférable d'apprendre des choses par soi-même et emmagasiner
                       les connaissances de façon pérenne, plutôt que d'être dépendant des outils, qui quand ils
                        tombent en panne, vous créent rien d'autre que du stress. Il faut toujours avoir une compétence
                         en back-up !</p>
                <p>En termes de sécurité, ce n'est pas ce qui nuit le plus à la vigilance. Il faudrait peut-être
                     privilégier l'option d'indication d'itinéraire à l'oral pour moins regarder l'écran.</p>
                <p><b>Tabac</b></p>
                <p>Si allumer une cigarette peut distraire, fumer est dangereux pour d'autres raisons. 
                    Il peut vous arriver de faire tomber la cigarette à un endroit inaccessible depuis la 
                    position dans laquelle vous vous trouvez, et vous pouvez mettre le feu dans la voiture.</p>
                <p>En plus, vous ne pouvez pas vous arrêter n'importe où (sur les routes et les autoroutes 
                    c'est plus compliqué), donc cela devient dangereux.  Mon conseil : ne fumez pas.</p>
                <br>
                                    
                <h3><b>En résumé</b></h3>
                
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Le cerveau doit être disponible pour bien analyser les situations et envisager de
                         prendre les bonnes décisions.</li>
                    <li>La monotonie de la conduite, la routine des trajets, les fortes émotions, 
                        la distraction ou la fatigue et la prise d'alcool ou de drogues peuvent faire 
                        baisser la vigilance.</li>
                    <li>N'utilisez pas votre téléphone en conduisant, ne fumez pas, ne mangez pas, 
                        n'écoutez pas la musique trop fort.</li>
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