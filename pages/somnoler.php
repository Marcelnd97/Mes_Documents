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
    <title>La somnolence</title>
    <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<<body class="codebody">>
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
                <h1 style="font-weight: bold;">La somnolence</h1>
                <br>
                <p>La fatigue peut être due au manque de sommeil, mais aussi à un surmenage mental.  
                    Quelle que soit la raison, pensez à vous reposer avant de prendre le volant.</p>
                <div class="card" style="background-color: #a1ee90;">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Ne luttez jamais contre la fatigue, elle est toujours gagnante !</p>
                    </div>
                </div>
                <br>
                
                
                <p>En fonction de la longueur et de la complexité du trajet, les effets de fatigue ne 
                    causeront pas les mêmes soucis.</p>
                <p><b>Trajets longs </b></p>
                <p>La fatigue peut représenter un vrai danger à la conduite, car elle peut entraîner une baisse 
                    d'attention dont vous aurez besoin pour maîtriser votre véhicule. Les conducteurs novices ont
                     besoin de faire davantage d'efforts pour se concentrer, faute d'expérience.</p>
                <div class="card" style="background-color: #a1ee90;">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>La fatigue est la première cause de mortalité sur autoroute ! 
                        Elle est la cause principale d'1 accident mortel sur 3 sur autoroute ! </p>
                    </div>
                </div>
                <br>
                <p>Je sais bien que vous savez ce que cela veut dire se sentir fatigué. Qui n'a pas eu des paupières 
                    lourdes comme du plomb et une grosse envie de bâiller ? En revanche, je souhaite apporter ici quelques symptômes 
                    supplémentaires auxquels vous ne pensez pas forcément, mais qu'il faut savoir reconnaître.</p>
                <p><b>Fatigue des yeux se manifeste à travers :</b></p>
                <ol style="list-style-type: disc; margin-left: 10px;">
                    <li>le picotement des yeux ;</li>
                    <li>le clignement excessif des paupières ;</li>
                    <li>les paupières lourdes ;</li>
                    <li>le regard fixe et des difficultés de concentration.</li>
                </ol>
                <p><b>Autres sensations peuvent surgir, comme :</b></p>
                <ol style="list-style-type: disc; margin-left: 10px;">
                    <li>les crispations du cou ou des épaules ;</li>
                    <li>l'irritabilité (quelle que soit votre personnalité) ;</li>
                    <li>le besoin de vous gratter la tête ;</li>
                    <li>les démangeaisons sur tout le corps ou courbatures ;</li>
                    <li>les brefs passages à vide de la conscience ;</li>
                    <li>l'impression d'être serré dans vos vêtements ;</li>
                    <li>les maux de tête.</li>
                </ol>
                
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>La fatigue augmente le temps de réaction, diminue l'acuité visuelle, diminue l'appréciation
                         des vitesses et peut même provoquer une mauvaise coordination des mouvements.</p>
                    </div>
                </div>
                <br>
                <p>Certes, vous sentirez davantage ce genre de symptômes lors d'un voyage long que sur un 
                    déplacement court en agglomération. Nous verrons plus tard les risques pour la conduite 
                    quand vous êtes en dette de sommeil dans ce contexte-là ; malheureusement, vous n'êtes pas 
                    non plus à l'abri d'un pépin.</p>
                <p>Avant de partir en voyage : pour éviter les risques d'endormissement sur les routes et 
                    les autoroutes, je vous conseille de bien vous reposer et de ne pas consommer d'alcool 
                    (même la veille en quantités excessives). Pour conduire vous avez besoin de vous concentrer,
                     or l'excès d'alcool, même la veille, vous donnera la sensation que votre cerveau est brûlé, 
                     haché en mille morceaux. Vous n'aurez qu'une envie, c'est de vous reposer en silence, 
                     mais certainement pas de vous concentrer sur la conduite.</p>
                <p>Bon, je viens de vous présenter le scénario un peu excessif. Mais consommer de l'alcool
                     déshydrate de toute façon. Un verre ne vous fera pas de mal, mais abstenez-vous d'en 
                     prendre plus, vous vous sentirez en meilleure forme le lendemain.</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>Avant de partir en voyage long : repos et pas d'alcool.</p>
                    </div>
                </div>
                <br>
                <p><b>Pendant le voyage :</b></p>
                <ol style="list-style-type: disc; margin-left: 10px;">
                    <li>Pensez à vous arrêter toutes les 2 heures et à faire des pauses de 20 minutes pour réussir
                         à couper avec la monotonie de la vitesse que la conduite sur les routes peut entraîner. 
                         Aussi, ne vous suralimentez pas, car cela risque de vous causer de la somnolence 
                         (digérer donne envie de dormir !). Buvez de l'eau et mangez équilibré et en quantités
                          habituelles. Si lors des pauses vous n'avez pas le droit de boire du café ou qu'il ne 
                          vous fait pas ressentir ses effets, alors une sieste s'impose.</li>
                    <br>
                    <div class="card question">
                        <div class="card-body">
                            <p><b><i class="bi bi-chat-dots"></i>&nbsp;&nbsp;Question</b></p>
                            <p>
                            Vu que je parle d'obligation, à votre avis, le panneau sur lequel vous allez tomber 
                            sera de quelle forme et de quelle couleur ?
                            </p>
                        </div>
                    </div>
                    <br>
                    <p><b>Réponse : Retrouvez-la à la fin de la séquence sur la fatigue.</b></p>
                    <li>Passez le volant à quelqu'un d'autre qui a le permis de conduire et qui est autorisé 
                        à conduire (par votre assurance si c'est votre voiture par exemple). N'hésitez pas à le 
                        faire !</li>
                </ol>
                <div class="card" style="background-color: #a1ee90;">
                    <div class="card-body pb-1">
                    <b><i class="bi bi-exclamation-circle"></i>&nbsp;&nbsp;important</b>
                    <p>Évitez de voyager entre 2 h et 5 h du matin et entre 14 h et 16 h car ces créneaux sont 
                        propices à la somnolence.</p>
                    </div>
                </div>
                <br>
                <h3 style="font-weight: bold;">Trajets courts </h3>
                <p>Si les trajets se font sur les routes hors agglomération ou sur les autoroutes, 
                    leur longueur ne risque pas de vous bercer. Si vous ne connaissez pas le chemin, d'autant moins.
                     Mais en agglomération, la situation est quelque peu différente car les trajets sont plus courts
                      et souvent plus connus.</p>
                <div class="card Informations bg-info">
                <div class="card-body">
                    <b><i class="bi bi-info-square"></i>&nbsp;&nbsp;Information</b>
                    <p>65% des accidents de la circulation se produisent à moins de 15 km du domicile.</p>
                    </div>
                </div>
                <br>
                <p>La parfaite connaissance du chemin emprunté tous les jours entraîne la formation des
                     mécanismes et par conséquent, une baisse de la vigilance. Ce n'est pas parce que vous 
                     connaissez bien le chemin que les circonstances ne changent pas (un piéton qui sort de
                      nulle part et vous surprend par exemple).</p>
                <p><b>Réponse sur la sieste de 20 minutes</b> : Vous pouvez récupérer jusqu'à 50% de vos capacités 
                    intellectuelles.</p>
                <br>

                <h3><b>En résumé</b></h3>
                <ol style="margin-left: 10px; list-style-type: disc;">
                    <li>Trajets longs : la fatigue peut être gérée en amont si vous vous reposez,
                         autrement il faut s'arrêter pour faire une sieste.</li>
                    <li>Faire une sieste de 20 minutes vous fera récupérer jusqu'à 50 % de vos capacités 
                        intellectuelles.</li>
                    <li>Trajets courts et connus : si le chemin ne change pas, les circonstances si. 
                        Excès de confiance tue la vigilance.</li>
                    <li>La fatigue peut se ressentir aussi sur d'autres parties du corps que sur les yeux 
                        (crispation du cou ou envie de se gratter la tête).</li>
                    <li>Les heures dangereuses sont après le déjeuner (pendant la digestion) et après 01h du matin,
                         lorsqu'un nouveau cycle de sommeil doit être entamé.</li>
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