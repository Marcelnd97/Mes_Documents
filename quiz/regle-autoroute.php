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
  <title>Règles sur autoroute</title>
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
        question: "La vitesse va être limitée à : ",
        image: "../images/quizroute/auto1.jpg",
        options: [
          {text:"A. 50 km/h", isCorrect: false},
          {text:"B. 70 km/h", isCorrect: true}
          ],
        audioQuestion: "La vitesse va être limitée à : A. 50 km/h, B. 70 km/h",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je m'arrête au feu :",
        image: "../images/quizroute/auto1.jpg",
        options: [
          {text:"C. OUI", isCorrect: false},
          {text:"D. NON", isCorrect: true}
          ],
        audioQuestion: "Je m'arrête au feu. C. OUI, D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce panneau indique une entrée :  ",
        image: "../images/quizroute/auto2.jpg",
        options: [
          {text:"A. d'autoroute", isCorrect: true},
          {text:"B. de route à accès réglementé", isCorrect: false},
          {text:"C. de rocade", isCorrect: false}
          ],
        audioQuestion: "Ce panneau indique une entrée . A. d'autoroute, B. de route à accès réglementé, C. de rocade",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je vais rencontrer un péage :",
        image: "../images/quizroute/auto3.jpg",
        options: [
            {text:"A. à 150 m", isCorrect: false},
            {text:"B. à 200 m", isCorrect: true},
        ],
        audioQuestion: "Je vais rencontrer un péage : A. à 150 m, B. à 200 m",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je pourrai payer en espèces :",
        image: "../images/quizroute/auto3.jpg",
        options: [
          {text: "C. OUI", isCorrect: true}, 
          {text: "D. NON", isCorrect: false},
        ],
        audioQuestion: "Je pourrai payer en espèces :  C. OUI, D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je suis bien placé pour prendre la direction de Grenoble :",
        image: "../images/quizroute/auto4.jpg",
        options: [
          {text: "A. OUI", isCorrect: true}, 
          {text: "D. NON", isCorrect: false},
        ],
        audioQuestion: "Je suis bien placé pour prendre la direction de Grenoble :  A. OUI, D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je peux encore changer de file :",
        image: "../images/quizroute/auto4.jpg",
        options: [ 
          {text: "C. OUI", isCorrect: false}, 
          {text: "D. NON", isCorrect: true}
        ],
        audioQuestion: "Je peux encore changer de file : C. OUI, D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Mon passager fait un malaise : - je m'arrête",
        image: "../images/quizroute/auto5.jpg",
        options: [ 
          {text: "A. immédiatement le long du trotoire", isCorrect: false},
          {text: "B. dans l'emplacement à droite un peu plus loin", isCorrect: true}
        ],
        audioQuestion: "Mon passager fait un malaise : - je m'arrête. A. immédiatement le long du trotoire, B. dans l'emplacement à droite un peu plus loin",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Mon passager fait un malaise : - je peux emprunter la borne d'appel d'urgence",
        image: "../images/quizroute/auto5.jpg",
        options: [ 
          {text: "C. OUI", isCorrect: true},
          {text: "D. NON", isCorrect: false}
        ],
        audioQuestion: "Mon passager fait un malaise : - je peux emprunter la borne d'appel d'urgence. C. OUI, D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je souhaite rejoindre l'aire autoroutière",
        image: "../images/quizroute/auto6.jpg",
        options: [ 
          {text: "A. je me place sur la bande d'arrêt d'urgence", isCorrect: false},
          {text: "B. je freine immédiatement", isCorrect: false},
          {text: "C. je freine dans la voie de déclaration", isCorrect: true}
        ],
        audioQuestion: "Je souhaite rejoindre l'aire autoroutière. A. je me place sur la bande d'arrêt d'urgence, B. je freine immédiatement, C. je freine dans la voie de déclaration",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Cette voie est réservée aux véhicules lents :",
        image: "../images/quizroute/auto7.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: true},
          {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "Cette voie est réservée aux véhicules lents :. A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je circule à 110 km/h. ",
        image: "../images/quizroute/auto7.jpg",
        options: [ 
          {text: "C. je suis bien placé", isCorrect: false},
          {text: "D. je dois circuler dans la voie centrale", isCorrect: true}
        ],
        audioQuestion: "Je circule à 110 km/h. C. je suis bien placé, D. je dois circuler dans la voie centrale",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je circule à 130 km/h. Je suis bien placé : ",
        image: "../images/quizroute/auto8.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: true},
          {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "Je circule à 130 km/h. Je suis bien placé : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Pour entrer sur l'autoroute, je m'insère : ",
        image: "../images/quizroute/auto9.jpg",
        options: [ 
          {text: "A. immédiatement", isCorrect: true},
          {text: "B. au bout de la voie d'insertion", isCorrect: false}
        ],
        audioQuestion: "Pour entrer sur l'autoroute, je m'insère : A. immédiatement, B. au bout de la voie d'insertion",
        audioAnswer: "correct.mp3"
      },
      {
        question: "J'allume le clignotant ",
        image: "../images/quizroute/auto9.jpg",
        options: [ 
          {text: "C. en m'insérant", isCorrect: false},
          {text: "D. avant de m'insérer", isCorrect: true}
        ],
        audioQuestion: "J'allume le clignotant. C. en m'insérant, D. avant de m'insérer",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je continue sur cette voie : - pour dépasser",
        image: "../images/quizroute/auto10.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: true},
          {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "Je continue sur cette voie : - pour dépasser. A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je continue sur cette voie : - pour continuer de circuler puisque je ne gêne personne ",
        image: "../images/quizroute/auto10.jpg",
        options: [ 
          {text: "C. en m'insérant", isCorrect: false},
          {text: "D. avant de m'insérer", isCorrect: true}
        ],
        audioQuestion: "Je continue sur cette voie : - pour continuer de circuler puisque je ne gêne personne. C. en m'insérant, D. avant de m'insérer",
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