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
  <title>Entretien du véhicule</title>
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
        question: "Je dois effectuer une contre-visite du contrôle technique. L'attestation comporte la lettre :",
        image: "../images/quiz_theme8/entretien1.jpg",
        options: [
          {text:"A. A", isCorrect: false},
          {text:"B. S", isCorrect: true}
          ],
        audioQuestion: "Je dois effectuer une contre-visite du contrôle technique. L'attestation comporte la lettre : A. A, S. B",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le délai pour effectuer la contre-visite est de :",
        image: "../images/quiz_theme8/entretien1.jpg",
        options: [
          {text:"C. 2 mois", isCorrect: true},
          {text:"D. 6 mois", isCorrect: false}
          ],
        audioQuestion: "Le délai pour effectuer la contre-visite est de : C. 2 mois, D. 6 mois",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Pour connaître la date du prochain contrôle technique, je consulte ",
        image: "../images/quiz_theme8/entretien2.jpg",
        options: [
          {text:"A. le certificat d'immatriculation et la vignette sur le pare-brise avant", isCorrect: true},
          {text:"B. l'attestation", isCorrect: false}
          ],
        audioQuestion: "Pour connaître la date du prochain contrôle technique, je consulte . A. le certificat d'immatriculation et la vignette sur le pare-brise avant, B. l'attestation",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je vends mon véhicule à un particulier. Le contrôle technique doit dater de moins de 6 mois :",
        image: "../images/quiz_theme8/entretien3.jpg",
        options: [
            {text:"A. OUI", isCorrect: true},
            {text:"B. NON", isCorrect: false},
          ],
        audioQuestion: "Je vends mon véhicule à un particulier. Le contrôle technique doit dater de moins de 6 mois : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "J'ai choisi le bon carburant pour mon véhicule",
        image: "../images/quiz_theme8/entretien4.jpg",
        options: [
          {text:"A. OUI", isCorrect: false},
          {text:"B. NON", isCorrect: true}
          ],
        audioQuestion: "J'ai choisi le bon carburant pour mon véhicule. A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je dois remplacer les balais d'essuie-glace : - si je sens des traces d'usure en passant le doigt dessus",
        image: "../images/quiz_theme8/entretien5.jpg",
        options: [
          {text:"A. OUI", isCorrect: true},
          {text:"B. NON", isCorrect: false}
          ],
        audioQuestion: "Je dois remplacer les balais d'essuie-glace : - si je sens des traces d'usure en passant le doigt dessus A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je dois remplacer les balais d'essuie-glace : - s'ils laissent des traces sur le pare-brise",
        image: "../images/quiz_theme8/entretien5.jpg",
        options: [
          {text:"C. OUI", isCorrect: true},
          {text:"D. NON", isCorrect: false}
          ],
        audioQuestion: "Je dois remplacer les balais d'essuie-glace : - s'ils laissent des traces sur le pare-brise C. OUI, D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le contrôle du niveau de liquide de refroidissement se fait :",
        image: "../images/quiz_theme8/entretien6.jpg",
        options: [
          {text:"A. moteur chaud", isCorrect: false},
          {text:"B. moteur froid", isCorrect: true}
          ],
        audioQuestion: "Le contrôle du niveau de liquide de refroidissement se fait : A. moteur chaud, B. moteur froid",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le manque de liquide de refroidissement entraîne un risque d'échauffement anormal du moteur :",
        image: "../images/quiz_theme8/entretien6.jpg",
        options: [
          {text:"A. OUI", isCorrect: true},
          {text:"B. NON", isCorrect: false},
          ],
        audioQuestion: "Le manque de liquide de refroidissement entraîne un risque d'échauffement anormal du moteur : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce symbole signale ",
        image: "../images/quiz_theme8/entretien7.jpg",
        options: [
          {text:"A. le haut du pneu", isCorrect: false},
          {text:"B. le temoin d'usurne", isCorrect: true},
          ],
        audioQuestion: "Ce symbole signale. A. le haut du pneu, B. le temoin d'usurne",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le remplacement d'un pneu se fait selon ",
        image: "../images/quiz_theme8/equipe3.jpg",
        options: [
            {text:"A. ses dimensions d'origines", isCorrect: true},
            {text:"B. ou sa couleur", isCorrect: false},
        ],
        audioQuestion: "Le remplacement d'un pneu se fait selon . A. ses dimensions d'origines, B. ou sa couleur",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Après une crevaison, je roule avec une 'galette'. Je roule : ",
        image: "../images/quiz_theme8/entretien9.jpg",
        options: [
          {text:"A. à l'allure habituelle", isCorrect: false},
          {text:"B. à une allure plus lente", isCorrect: true},
          ],
        audioQuestion: "Après une crevaison, je roule avec une 'galette'. Je roule :. A. à l'allure habituelle, B. à une allure plus lente",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je modifie la pression des pneus en fonction ",
        image: "../images/quiz_theme8/entretien10.jpg",
        options: [
          {text:"A. de la charge du véhicule ou de la longueur du trajet", isCorrect: true},
          {text:"B. de l'usure des essuie-glace", isCorrect: false},
          ],
        audioQuestion: "Je modifie la pression des pneus en fonction. A. de la charge du véhicule et de la longueur du trajet, B. de l'usure des essuie-glace",
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