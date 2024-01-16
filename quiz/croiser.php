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
  <link rel="stylesheet" href="../pages/assets/theme.css">
  <title>Quiz aborder les intersections</title>
  <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-color: chocolate;
    }
    #soundIcon {
      
      padding-left: 25px;
      font-size: x-large;
    }
    .app {
      background: #fff;
      width: 90%;
      max-width: 650px;
      margin: 100px auto;
      border-radius: 10px;
      padding: 7px;
    }
    img {
      max-width: 100%;
      height: auto;
    }

    #quiz-container {
      max-width: 700px;
      margin: 0 auto;
    }

    .question {
      margin-top: 20px;
      padding-bottom: 20px;
    }

    .options {
      display: flex;
      flex-direction: column;
      max-width: 100%;
    }

    .option {
      margin: 10px;
    }

    #score {
      margin-top: 10px;
      padding: 20px;
    }
    #timer {
      margin-top: 10px;
      padding-bottom: 10px;
    }
    button {
      border: none;
      background: #979695;
      color: #222;
      padding: 10px;
      margin: 10px 0;
      text-align: left;
      border-radius: 4px;
      font-weight: 500;
      width: 95%;
      cursor: pointer;
      transition: all 0.4s;
    }
    button:hover {
      background: white;
      color: #001e4d;
    }
    .style {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .restart {
      border: 1px solid #222;
      border-radius: 4px;
      font-weight: 500;
      width: 40%;
      text-align: center;
    }
    .restart:hover {
      background: blue;
      color: #fff;
    }
    .card {
      background-color: blue;
      color: #fff;
    }
    #btn-next {
      background: #001e4d;
      color: #fff;
      font-weight: 500;
      width: 150px;
      border: 0;
      padding: 10px;
      text-align: center;
      margin: 20px auto 0;
      border-radius: 4px;
      cursor: pointer;
      display: none;
    }
  
    #son {
      background-color: blue;
      color: white;
      margin: 10px auto;
      max-width: 40%;
    }
    #sons {
      margin: 10px auto;
      height: 10%;
      border: none;
    }
  </style>
</head>
<body style="background-color: gainsboro; font-family:'Times New Roman', Times, serif; font-size: 17px;">
  <!--L'en-tête de la page-->
    <?php
          include("../header/header.php");
      ?>
    <br>
    <br>
    <br>
    <br>
    <div class="container" id="container">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                  <h3 style="font-weight: bold; padding-right: 20px;"><marquee behavior="alternate"
                   direction="left">Il est conseillée de ne pas raffraîchir 
                   la page dés l'instant que vous commencez le test pour ne pas réinitialiser la série.</marquee></h3>
              </div>
                
            </div>
        </div>
    </div>
    <div class="container app">
        <div id="quiz-container">
          <div class="row">
            <div class="col-md-12">
                  <div class="card" id="quiz-image">
                      <div id="quiz-image-content"></div>  
                  </div>
              </div> 
          </div>
          <br>
          <div class="row">
              <div class="col-md-6">
                  <div class="card" id="quiz-questionNumber">
                      <div id="quiz-questionNumber-content" class="questionNumber"></div>
                  </div>
              </div>
          </div>
          <br>
          <div class="row">
              <div class="col-md-12">
                  <div class="card" id="quiz-question">
                      <div id="quiz-question-content" class="question"></div>
                  </div>
              </div>
          </div>
          <br>
          <div class="row">
              <div class="col-md-12">
                  <div class="card" id="quiz-options">
                          <div id="quiz-options-content" class="options"></div>
                  </div>
              </div>
          </div>
          <br>
          <div class="row">
              <div class="col-md-12 style">
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
          
          <div class="row">
              <div class="col-md-12">
                  <div class="card" id="son">
                      <button id="sons" onclick="toggleSound()">
                        <i id="soundIcon" class="bi-volume-mute">&nbsp;&nbsp; Active/Pause</i>
                    </button>
                  </div>
              </div>
          </div>
        </div>
          <button id="restart-button" class="restart" style="display: none;" onclick="restartQuiz()">Recommencer le Quiz</button>
          <br>
          <p id="noteBien"><b>NB :</b><i> Vous êtes libre d'activer la son mais sachez que le lecteur peut vous faire perdre beaucoup de temps dans les séries. 
          Donc il est conseillé de ne pas l'activer et de vous concentrer.</i></p>
    </div>

  <script>
    const quizData = [
      {
        question: "",
        image: "../images/quizcroiser/croiser1.jpg",
        options: [
        {text: "Je passe", isCorrect: true}, 
        {text: "ou je céde le passage", isCorrect: false}
        ],
        audioQuestion: "Je passe ou je cède le passage",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je passe",
        image: "../images/quizcroiser/croiser2.jpg",
        options: [
        {text: "A. OUI", isCorrect: true}, 
        {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "Je passe : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: " Je suis en descente.",
        image: "../images/quizcroiser/croiser3.jpg",
        options: [
        {text: "A. je reste sur ma trajectoire", isCorrect: false}, 
        {text: "B. je serre à droite", isCorrect: true}
        ],
        audioQuestion: " Je suis en descente. A. je reste sur ma trajectoire, B. je serre à droite",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Si le croisement est impossible :",
        image: "../images/quizcroiser/croiser3.jpg",
        options: [
        {text: "A.j'avance", isCorrect: false}, 
        {text: "B. je recule", isCorrect: true}
        ],
        audioQuestion: "Si le croisement est impossible : A. j'avance, B. je recule",
        audioAnswer: "correct.mp3"
      },
      {
        question: "",
        image: "../images/quizcroiser/croiser4.jpg",
        options: [
        {text: "A. je ralentis et je serre à droite", isCorrect: true}, 
        {text: "B. ou je serre à droite et je ralentis", isCorrect: false}
        ],
        audioQuestion: "A. je ralentis et je serre à droite, B. ou je serre à droite et je ralentis",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je dépasse :",
        image: "../images/quizcroiser/croiser5.jpg",
        options: [
        {text: "A. OUI", isCorrect: false}, 
        {text: "B. NON", isCorrect: true}
        ],
        audioQuestion: "Je dépasse : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le marquage autorise le dépassement : - dans la situation 1",
        image: "../images/quizcroiser/croiser6.jpg",
        options: [
        {text: "A. OUI", isCorrect: false}, 
        {text: "B.NON", isCorrect: true}
        ],
        audioQuestion: "Le marquage autorise le dépassement : - dans la situation 1/ A.OUI, B.NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le marquage autorise le dépassement : - dans la situation 2",
        image: "../images/quizcroiser/croiser6.jpg",
        options: [
        {text: "C. de tous les véhicules", isCorrect: false}, 
        {text: "D. des véhicules circulant lentement", isCorrect: true}
        ],
        audioQuestion: "Le marquage autorise le dépassement : - dans la situation 2. C. de tous les véhicules, D. des véhicules circulant lentement",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Pour un dépassement, il est conseillé d'avoir une différence de vitesse d'au moins :",
        image: "../images/quizcroiser/croiser7.jpg",
        options: [
        {text: "A. 10km/h", isCorrect: false}, 
        {text: "B. 20km/h", isCorrect: true},
        {text: "C. 40km/h", isCorrect: false}
        ],
        audioQuestion: "Pour un dépassement, il est conseillé d'avoir une différence de vitesse d'au moins : A. 10km/h, B. 20km/h, C. 40km/h",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Au niveau d'une priorité à droite :",
        image: "../images/quizcroiser/croiser8.jpg",
        options: [
        {text: "A. tout dépassement est interdit", isCorrect: false}, 
        {text: "B. le dépassement des deux roues est autorisé", isCorrect: true}
        ],
        audioQuestion: "Au niveau d'une priorité à droite :A. tout dépassement est interdit, B. le dépassement des deux roues est autorisé",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La signalisation indique un rétrécissement :",
        image: "../images/quizcroiser/croiser9.jpg",
        options: [
        {text: "A. par la droite", isCorrect: true}, 
        {text: "B. par la gauche", isCorrect: false}
        ],
        audioQuestion: "La signalisation indique un rétrécissement : A. par la droite, B. par la gauche",
        audioAnswer: "correct.mp3"
      },
      {
        question: "J'indique immédiatement mon intention de changer de voie :",
        image: "../images/quizcroiser/croiser9.jpg",
        options: [
        {text: "A. OUI", isCorrect: true}, 
        {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "J'indique immédiatement mon intention de changer de voie : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je ralentis pour laisser l'usager à gauche se rabattre :",
        image: "../images/quizcroiser/croiser10.jpg",
        options: [
        {text: "A. OUI", isCorrect: false}, 
        {text: "B. NON", isCorrect: true}
        ],
        audioQuestion: "Je ralentis pour laisser l'usager à gauche se rabattre : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "L'usager à gauche peut continuer de dépasser :",
        image: "../images/quizcroiser/croiser10.jpg",
        options: [
        {text: "C. OUI", isCorrect: true}, 
        {text: "D. NON", isCorrect: false}
        ],
        audioQuestion: "L'usager à gauche peut continuer de dépasser : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      // Ajoutez d'autres questions ici...
    ];

    let currentQuestionIndex = 0;
    let countQuestions = 1;
    let score = 0;
    let time = 280; // Temps en secondes
    let soundEnabled = false;

    function loadQuestion() {
      const currentQuestion = quizData[currentQuestionIndex];

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
      document.getElementById("restart-button").style.display = 'inline';
      document.getElementById("quiz-questionNumber").style.display = "none";
      document.getElementById("noteBien").style.display = "none";
      document.getElementById("container").style.display = "none";

    }

    function restartQuiz() {
      // Réinitialiser les variables et afficher à nouveau les éléments nécessaires
      currentQuestionIndex = 0;
      countQuestions = 1;
      score = 0;
      time = 280;
      loadQuestion();
      resetOptionsColor();
      
      document.getElementById("quiz-options").style.display = 'flex';
      document.getElementById("quiz-image").style.display = 'flex';
      document.getElementById("quiz-question").style.display = 'flex';
      document.getElementById("son").style.display = 'block';
      document.getElementById("timer").style.display = 'block';
      document.getElementById("restart-button").style.display = 'none';
      document.getElementById("container").style.display = "flex";

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