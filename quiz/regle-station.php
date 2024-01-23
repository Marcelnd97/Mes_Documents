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
  <title>Arrêt et Stationnement</title>
  <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="image/png">

</head>
<body class="codebody">  <!--L'en-tête de la page-->
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
        </div><!-- <br>
          <p id="noteBien"><b>NB :</b><i> Vous êtes libre d'activer la son mais sachez que le lecteur peut vous faire perdre beaucoup de temps dans les séries. 
          Donc il est conseillé de ne pas l'activer et de vous concentrer.</i></p> -->
    </div>

  <script>
    const quizData = [
      
      {
        question: "Je peux m'arrêter un court instant immédiatement : - à droite",
        image: "../images/quizstationner/station2_1.jpg",
        options: [
          { text: "A. OUI", isCorrect: false },
          { text: "B. NON", isCorrect: true }
        ],
        audioQuestion: "Je peux m'arrêter un court instant immédiatement : - à droite. C. OUI, D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je peux m'arrêter un court instant immédiatement : - à gauche",
        image: "../images/quizstationner/station2_1.jpg",
        options: [
          { text: "C. OUI", isCorrect:  false},
          { text: "D. NON", isCorrect:  true}
        ],
        audioQuestion: "Je peux m'arrêter un court instant immédiatement : - à gauche. C. OUI, D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je stationne de préférence :",
        image: "../images/quizstationner/station2_2.jpg",
        options: [
          { text: "A. à gauche", isCorrect: false },
          { text: "B. à droite", isCorrect: true }
        ],
        audioQuestion: "Je stationne de préférence : A. à gauche, B. à droite",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je stationne de préférence :",
        image: "../images/quizstationner/station2_2.jpg",
        options: [
          { text: "C. en marche avant", isCorrect: false },
          { text: "D. en marche arrière", isCorrect: true },
        ],
        audioQuestion: "Je stationne de préférence : C. en marche avant, D. en marche arrière",
        audioAnswer: "correct.mp3"
      },
      {
        question: "L'emplacement libre à droite : - est contrôlé par disque",
        image: "../images/quizstationner/station2_3.jpg",
        options: [
          { text: "A. OUI", isCorrect: false },
          { text: "B. NON", isCorrect: true },
        ],
        audioQuestion: "L'emplacement libre à droite : - est contrôlé par disque. A. OUI. B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "L'emplacement libre à droite : - est réservé.",
        image: "../images/quizstationner/station2_3.jpg",
        options: [
          { text: "C. OUI", isCorrect: true },
          { text: "D. NON", isCorrect: false },
        ],
        audioQuestion: "L'emplacement libre à droite : - est réservé. C. OUI. D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je peux stationner à droite sur le trottoir :",
        image: "../images/quizstationner/station2_4.jpg",
        options: [
          { text: "A. dans la situation 1", isCorrect: false },
          { text: "B. dans la situation 2", isCorrect: false },
          { text: "C. dans aucune des deux situations", isCorrect: true },
        ],
        audioQuestion: "Je peux stationner à droite sur le trottoir : A. dans la situation 1, B. dans la situation 2, C. dans aucune des deux situations",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Dans cette situation, stationner en marche arrière : - permet d'avoir une meilleure visibilité",
        image: "../images/quizstationner/station2_5.jpg",
        options: [
          { text: "A. OUI", isCorrect: false },
          { text: "B. NON", isCorrect: true },
        ],
        audioQuestion: "Dans cette situation, stationner en marche arrière : - permet d'avoir une meilleure visibilité, A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Dans cette situation, stationner en marche arrière : - permet d'avoir une meilleure visibilité",
        image: "../images/quizstationner/station2_5.jpg",
        options: [
            { text: "A. OUI", isCorrect: true },
            { text: "B. NON", isCorrect:  false},
        ],
        audioQuestion: "Dans cette situation, stationner en marche arrière : - permet d'avoir une meilleure visibilité. A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je peux stationner derrière le véhicule blanc à droite :",
        image: "../images/quizstationner/station2_6.jpg",
        options: [
          { text: "A. OUI", isCorrect: false },
          { text: "B. NON", isCorrect: true },
        ],
        audioQuestion: "Je peux stationner derrière le véhicule blanc à droite : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je stationne directement :",
        image: "../images/quizstationner/station2_7.jpg",
        options: [
          { text: "A. à droite après la camionnette blanche", isCorrect:  false},
          { text: "B. à droite entre les deux véhicules", isCorrect: true },
          { text: "C. à gauche avant la camionnette blanche", isCorrect: false },
        ],
        audioQuestion: "Je stationne directement : A. à droite après la camionnette blanche, B. à droite entre les deux véhicules, C. à gauche avant la camionnette blanche",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je peux stationner entre les deux véhicules à droite : ",
        image: "../images/quizstationner/station2_8.jpg",
        options: [
          { text: "A. OUI", isCorrect: false },
          { text: "B. NON", isCorrect:  true},
        ],
        audioQuestion: "Je peux stationner entre les deux véhicules à droite : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: " Le véhicule à gauche est correctement stationné :",
        image: "../images/quizstationner/station2_8.jpg",
        options: [
          { text: "A. OUI", isCorrect:  false},
          { text: "B. NON", isCorrect: true},
        ],
        audioQuestion: "Le véhicule à gauche est correctement stationné : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le stationnement derrière le véhicule gris à droite est :",
        image: "../images/quizstationner/station2_9.jpg",
        options: [
          { text: "A. interdit", isCorrect: true },
          { text: "B. autorisé", isCorrect: false },
        ],
        audioQuestion: "Le stationnement derrière le véhicule gris à droite est. A. interdit, B. autorisé",
        audioAnswer: "correct.mp3"
      },
      {
        question: "À droite, sur l’accotement :",
        image: "../images/quizstationner/station2_10.jpg",
        options: [
          { text: "A. Je peux m'arrêter", isCorrect: true },
          { text: "B. je peux stationner", isCorrect: false },
          { text: "C. je ne dois ni m'arrêter ni stationner", isCorrect: false },
        ],
        audioQuestion: "À droite, sur l’accotement : A. Je peux m'arrêter, B. je peux stationner, C. je ne dois ni m'arrêter ni stationner",
        audioAnswer: "correct.mp3"
      },
      {
        question: "À droite, sur l’accotement :",
        image: "../images/quizstationner/station2_10.jpg",
        options: [
          { text: "A. Je peux m'arrêter", isCorrect: false },
          { text: "B. je peux stationner", isCorrect:  true},
          { text: "C. je ne dois ni m'arrêter ni stationner", isCorrect: false },
        ],
        audioQuestion: "À droite, sur l’accotement : A. Je peux m'arrêter, B. je peux stationner, C. je ne dois ni m'arrêter ni stationner",
        audioAnswer: "correct.mp3"
      },
      
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
          // option.parentNode.style.backgroundColor = 'green'; // Réponse correcte en vert
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
