<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/theme.css">
  <title>Situations à rique</title>
  <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
</head>
<body class="codebody">
  <!--L'en-tête de la page-->
    <?php
          include("../header/header.php");
      ?>
    <div class="container mt-3" id="infor">
        <div class="row">
            <div class="col-md-12">
              <div class="card rowdefile">
                  <h3 class="marquee"><marquee behavior="alternate"
                   direction="left">Il est recommandé de ne pas raffraîchir 
                   la page dés l'instant que vous commencez le teste pour ne pas réinitialiser la série.</marquee></h3>
              </div>
                
            </div>
        </div>
    </div>
    <div class="container app">
        <div id="quiz-container">
          <div class="row justify-content-md-center">
            <div class="col-md-10">
                  <div class="card justify-content-md-center" id="quiz-image">
                      <div id="quiz-image-content"></div>  
                  </div>
              </div> 
          </div>
          <br>
          <div class="row justify-content-md-center">
              <div class="col-md-8">
                  <div class="card" id="quiz-questionNumber">
                      <div id="quiz-questionNumber-content" class="questionNumber"></div>
                  </div>
              </div>
          </div>
          <br>
          <div class="row justify-content-md-center">
              <div class="col-md-8">
                  <div class="card" id="quiz-question">
                      <div id="quiz-question-content" class="question"></div>
                  </div>
              </div>
          </div>
          <br>
          <div class="row justify-content-md-center">
              <div class="col-md-8">
                  <div class="card" id="quiz-options">
                      <div id="quiz-options-content" class="options"></div>
                  </div>
              </div>
          </div>
          <br>
          <div class="row justify-content-md-center">
              <div class="col-md-4 style">
                  <div class="card score" id="score">
                      <div id="score-content">Score: 0</div> 
                  </div>
                  <div class="card" id="timer">
                      <div id="timer-content">Temps restant: <span id="time">60</span> secondes</div>
                  </div>
              </div>
          </div>
          <br>
          <audio id="audio"></audio>
          
          <div class="row justify-content-md-center">
              <div class="col-md-3">
                <div class="card son" id="son">
                    <a class="btn btn-info" id="sons" onclick="toggleSound()">
                        <i id="soundIcon" class="bi-volume-mute">&nbsp;&nbsp; Active/Pause</i>
                    </a>
                </div>
                  
              </div>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-3" class="restart">
              <button id="restart-button" onclick="restartQuiz()">Recommencer le Quiz</button>
          </div>
        </div>
        <!-- <br>
          <p id="noteBien"><b>NB :</b><i> Vous êtes libre d'activer la son mais sachez que le lecteur peut vous faire perdre beaucoup de temps dans les séries. 
          Donc il est conseillé de ne pas l'activer et de vous concentrer.</i></p> -->
    </div>


  <script>
    const quizData = [
      {
        question: "Pour voir loin devant moi, j'utilise : ",
        image: "../images/quizroute/risque1.jpg",
        options: [
          {text:"A. les feux de position seuls", isCorrect: false},
          {text:"B. les feux de croisement", isCorrect: false},
          {text:"C. les feux de route", isCorrect: true},
          {text:"D. les feux de brouillard arrière", isCorrect: false}
          ],
        audioQuestion: "Pour voir loin devant moi, j'utilise : A. les feux de position seuls, B. les feux de croisement,C. les feux de route, D. les feux de brouillard arrière",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La visibilité est réduite. J'allume : ",
        image: "../images/quizroute/risque2.jpg",
        options: [
            {text:"A. les feux de position seuls", isCorrect: false},
            {text:"B. les feux de croisement", isCorrect: true},
            {text:"C. je peux rouler sans feux", isCorrect: false},
        ],
        audioQuestion: "La visibilité est réduite. J'allume : A. les feux de position seuls, B. les feux de croisement, C. je peux rouler sans feux",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Dans cette situation, j'utilise les feux de croisement essentiellement pour :",
        image: "../images/quizroute/risque3.jpg",
        options: [
          {text: "A. voir", isCorrect: false}, 
          {text: "B. ou être vu", isCorrect: true},
        ],
        audioQuestion: "Dans cette situation, j'utilise les feux de croisement essentiellement pour :  A. voir, B. ou être vu, C. je ne conduit pas ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La nuit :- le champ visuel est réduit ",
        image: "../images/quizroute/risque4.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: true},
          {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "La nuit :- le champ visuel est réduit. A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La nuit :- la perception de la profondeur augmente ",
        image: "../images/quizroute/risque4.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: false},
          {text: "B. NON", isCorrect: true}
        ],
        audioQuestion: "La nuit :- la perception de la profondeur augmente. A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Les feux de route éblouissent les usagers devant moi : ",
        image: "../images/quizroute/risque5.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: true},
          {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "Les feux de route éblouissent les usagers devant moi : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Dans cette situation, j'allume les feux de position : - pour voir ",
        image: "../images/quizroute/risque6.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: false},
          {text: "B. NON", isCorrect: true}
        ],
        audioQuestion: "Dans cette situation, j'allume les feux de position : - pour voir A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Dans cette situation, j'allume les feux de position : - pour être vu ",
        image: "../images/quizroute/risque6.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: false},
          {text: "B. NON", isCorrect: true}
        ],
        audioQuestion: "Dans cette situation, j'allume les feux de position : - pour être vu A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "L' aquaplanage : - c'est quand l'eau",
        image: "../images/quizroute/risque7.jpg",
        options: [
          {text: "A. n'est plus évacuée par le pneu", isCorrect: true}, 
          {text: "B. est évacuée trop brusquement par le pneu", isCorrect: false}
        ],
        audioQuestion: "L' aquaplanage : - c'est quand l'eau. A. n'est plus évacuée par le pneu, B. est évacuée trop brusquement par le pneu",
        audioAnswer: "correct.mp3"
      },
      {
        question: "L' aquaplanage : - entraîne",
        image: "../images/quizroute/risque7.jpg",
        options: [
          {text: "A. le blocage des roues", isCorrect: false}, 
          {text: "B. une perte de contrôle du véhicule", isCorrect: true}
        ],
        audioQuestion: "L' aquaplanage : - entraîne. A. le blocage des roues, B. une perte de contrôle du véhicule",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Il pleut fortement. J'allume : ",
        image: "../images/quizroute/risque8.jpg",
        options: [
          {text: "A. les feux de position seuls", isCorrect: false}, 
          {text: "B. les feux de croisement", isCorrect: true},
          {text: "C. les feux de route", isCorrect: false}
        ],
        audioQuestion: "Il pleut fortement. J'allume : A. les feux de position seuls, B. les feux de croisement, C. 3 cl de whisky",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ma visibilité est inférieure à 50 m, je roule au maximum à :",
        image: "../images/quizroute/risque9.jpg",
        options: [
        {text: "A. 90 km/h", isCorrect: false}, 
        {text: "B. 70 km/h", isCorrect: false},
        {text: "C. 50 km/h", isCorrect: true}
        ],
        audioQuestion: "Ma visibilité est inférieure à 50 m, je roule au maximum à : A. 90 km/h, B. 70 km/h, C. 50 km/h",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Dans ces conditions : - je circule à 50 km/h",
        image: "../images/quizroute/risque10.jpg",
        options: [
        {text: "A. avant", isCorrect: false}, 
        {text: "B. avant et arrière", isCorrect: true}
        ],
        audioQuestion: "Dans ces conditions : - j'utilise les feux de brouillard. A. avant, B. avant et arrière",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Dans ces conditions : - je circule à 50 km/h",
        image: "../images/quizroute/risque10.jpg",
        options: [
        {text: "A. OUI", isCorrect: false}, 
        {text: "B. NON", isCorrect: true}
        ],
        audioQuestion: "Dans ces conditions : - je circule à 50 km/h. A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      }
    ];

    let currentQuestionIndex = 0;
    let countQuestions = 1;
    let score = 0;
    let time = 600; // Temps en secondes
    let soundEnabled = false;

    function loadQuestion() {
      const currentQuestion = quizData[currentQuestionIndex];
      document.getElementById("quiz-questionNumber").style.display = "flex";
      
      document.getElementById("restart-button").style.display = 'none';

      document.getElementById("quiz-question-content").textContent = currentQuestion.question;

      const imageContainer = document.getElementById("quiz-image-content");
      imageContainer.innerHTML = `<img src="${currentQuestion.image}" alt="Quiz Image">`;


      const optionsContainer = document.getElementById("quiz-options-content");
      optionsContainer.innerHTML = "";

      currentQuestion.options.forEach((option) => {
        const button = document.createElement("button");
        button.textContent = option.text;
        button.classList.add("option");
        button.onclick = () => checkAnswer(option.text);
        optionsContainer.appendChild(button);
      });

      updateCountQuestion();
      updateScore();
      speak(currentQuestion.audioQuestion); // Lire la question à voix haute
    }

    function checkAnswer(selectedAnswer) {
      const currentQuestion = quizData[currentQuestionIndex];
      const options = document.querySelectorAll('.option');

      options.forEach(option => {
        const isCorrect = currentQuestion.options.find(opt => opt.isCorrect).text;

        if (option.textContent === isCorrect) {
          if (option.textContent === selectedAnswer) {
            option.parentNode.style.backgroundColor = 'green'; // Réponse correcte en vert
          }else {
            option.parentNode.style.backgroundColor = 'red'; // Réinitialiser la couleur pour les options incorrectes
          }
        } else if (option.textContent === selectedAnswer) {
          option.parentNode.style.backgroundColor = 'red'; // Réponse incorrecte en rouge
        }
      });

      const correctOption = currentQuestion.options.find(option => option.isCorrect);
      
      if (selectedAnswer) {
        countQuestions ++;
      }

      if (selectedAnswer === correctOption.text) {
        score++;
        if (soundEnabled) {
          speak("Bravo !");
          playAudio(currentQuestion.audioAnswer);
        } 
      } else {
        speak("Attention ! La réponse correcte est " + correctOption.text);
      }

      currentQuestionIndex++;
      nextQuestion();
    }


    function nextQuestion() {
      if (currentQuestionIndex < quizData.length) {
        loadQuestion();
      } else {
        endQuiz();
      }
    }

    function updateCountQuestion(){
      document.getElementById("quiz-questionNumber-content").textContent = `Conteur de question: ${countQuestions} / ${quizData.length}`;
    }

    function updateScore() {
      document.getElementById("score-content").textContent = `Score: ${score}`;
    }
    
    function endQuiz() {
      if (currentQuestionIndex <= quizData.length) {
        speak("Votre score final est: " + score + " sur " + quizData.length + ". Vous pouvez refaire le test pour mieux comprendre"); 
      }

      document.getElementById("quiz-image").style.display = 'none';
      document.getElementById("quiz-question").style.display = 'none';
      document.getElementById("quiz-options").style.display = 'none';
      document.getElementById("timer").style.display = 'none';
      document.getElementById("son").style.display = 'none';
      document.getElementById("score-content").textContent = `Votre score final est: ${score} sur ${quizData.length}`;
      document.getElementById("restart-button").style.display = 'flex';
      document.getElementById("quiz-questionNumber").style.display = "none";
      document.getElementById("noteBien").style.display = "none";
      document.getElementById("infor").style.display = "none";

    }

    function restartQuiz() {
      // Réinitialiser les variables et afficher à nouveau les éléments nécessaires
      currentQuestionIndex = 0;
      countQuestions = 1;
      score = 0;
      time = 600;
      loadQuestion();
      resetOptionsColor();
      
      document.getElementById("quiz-options").style.display = 'flex';
      document.getElementById("quiz-image").style.display = 'flex';
      document.getElementById("quiz-question").style.display = 'flex';
      document.getElementById("son").style.display = 'flex';
      document.getElementById("timer").style.display = 'block';
      document.getElementById("defilant").style.display = "flex";
      document.getElementById("quiz-questionNumber").style.display = "flex";


    }

    function resetOptionsColor() {
      const options = document.querySelectorAll('.option');
      options.forEach(option => {
        option.parentNode.style.backgroundColor = ''; // Réinitialiser la couleur
      });
    }

    function countdown() {
      const timerElement = document.getElementById("time");
      const countdownInterval = setInterval(() => {
        time--;
        timerElement.textContent = time;

        if (time <= 0) {
          clearInterval(countdownInterval);
          endQuiz();
        }
      }, 1000);
    }

    function toggleSound() {
      soundEnabled = !soundEnabled;

      const soundIcon = document.getElementById('soundIcon');
      const soundButton = document.getElementById('sons');

      if (soundEnabled) {
        soundIcon.classList.remove('bi-volume-mute');
        soundIcon.classList.add('bi-volume-up', 'bi-3x');
        // speak("Le song est activé");
      } else {
        soundIcon.classList.remove('bi-volume-up');
        soundIcon.classList.add('bi-volume-mute', 'bi-3x');
        // speak("Le son est désactivé");
      }
    }

    function speak(text) {
      if (soundEnabled) {
        const synth = window.speechSynthesis;
        const utterance = new SpeechSynthesisUtterance(text);
        synth.speak(utterance);
      }
    }

    function playAudio(audioSrc) {
      if (soundEnabled) {
        const audio = document.getElementById("audio");
        audio.src = audioSrc;
        audio.play();
      }
    }

    // Charger la première question et démarrer le compte à rebours au démarrage
    loadQuestion();
    countdown();
  </script>

  <?php
    // <!--Le pied de la page-->
        include("../footer/footer.php");
        
        // <!--Ces deux script concerne les popervers, les listes deroulante ou des info-bulles-->
        include("../script/script_link.php");
  ?>
</body>
</html>