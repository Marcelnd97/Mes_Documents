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
  <title>Les bases de la signalisation (2)</title>
  <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="image/png">
  
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
        question: "Cette borne indique que je circule sur :",
        image: "../images/Quiz signaux/quiz2_1.jpg",
        options: [
          { text: "A. une autoroute", isCorrect: false },
          { text: "B. une nationale", isCorrect: false },
          { text: "C. une rocade", isCorrect: true },
        ],
        audioQuestion: "Cette borne indique que je circule sur : A. une autoroute, B. une nationale, C. une rocade",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le cartouche sur le panneau de direction indique (F7). Je circule sur :",
        image: "../images/Quiz signaux/quiz2_2.jpg",
        options: [
          { text: "A. une route forestière", isCorrect: true },
          { text: "B. une route nationale", isCorrect: false },
          { text: "C. une autoroute", isCorrect: false },
        ],
        audioQuestion: "Le cartouche sur le panneau de direction indique (F7). Je circule sur : A. une route forestière, B. une route nationale, C. une autoroute",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La couleur marron est utilisée pour les panneaux signalant :",
        image: "../images/Quiz signaux/quiz2_3.jpg",
        options: [
          { text: "A. des commerces", isCorrect: false },
          { text: "B. des sites touristiques", isCorrect: true },
        ],
        audioQuestion: "La couleur marron est utilisée pour les panneaux signalant : A. des commerces, B. des sites touristiques",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Les panneaux de direction verts indiquent :",
        image: "../images/Quiz signaux/quiz2_4.jpg",
        options: [
          { text: "A. une bretelle d'autoroute", isCorrect: true },
          { text: "B. une route nationale", isCorrect: false },
          { text: "B. une rocade", isCorrect: false },
          { text: "C. un itinéraire important", isCorrect: false },
        ],
        audioQuestion: "Les panneaux de direction verts indiquent : A. une bretelle d'autoroute, B. une route nationale, B. une rocade, C. un itinéraire important",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Pour aller à Gap, j'emprunte :",
        image: "../images/Quiz signaux/quiz2_5.jpg",
        options: [
          { text: "A. obligatoirement l'autoroute", isCorrect: false },
          { text: "B. un itinéraire important ou l'autoroute", isCorrect: true },
          { text: "C. un itinéraire important obligatoirement", isCorrect: false },
        ],
        audioQuestion: "La vitesse est limitée à 30 km/h à hauteur : A. obligatoirement l'autoroute, B. un itinéraire important ou l'autoroute, C. un itinéraire important obligatoirement",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La signalisation indique :",
        image: "../images/Quiz signaux/quiz2_6.jpg",
        options: [
          { text: "A. un chaucidou (chaussée à circulation douce)", isCorrect: false },
          { text: "B. un ralentisseur", isCorrect: true },
          { text: "C. un passage piéton", isCorrect: false },
          { text: "D. un arrêt de bus", isCorrect: true },
        ],
        audioQuestion: "La signalisation indique : A. un chaucidou (chaussée à circulation douce), B. un ralentisseur, C. un passage piéton, D. un arrêt de bus",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Les flèches de rabattement annoncent :",
        image: "../images/Quiz signaux/quiz2_7.jpg",
        options: [
          { text: "A. une ligne de dissuasion", isCorrect: false },
          { text: "B. une ligne discontinue", isCorrect: false },
          { text: "C. une ligne continue", isCorrect: true },
        ],
        audioQuestion: "Les flèches de rabattement annoncent : A. une ligne de dissuasion, B. une ligne discontinue, C. une ligne continue",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je peux emprunter la voie de gauche pour tourner à gauche :",
        image: "../images/Quiz signaux/quiz2_8.jpg",
        options: [
          { text: "A. OUI", isCorrect: false },
          { text: "B. NON", isCorrect: true },
        ],
        audioQuestion: "Je peux emprunter la voie de gauche pour tourner à gauche : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Une ligne de stop est : ",
        image: "../images/Quiz signaux/quiz2_9.jpg",
        options: [
          { text: "A. discontinue et large", isCorrect: false },
          { text: "B. continue et large", isCorrect: true },
        ],
        audioQuestion: "Une ligne de stop est : A. discontinue et large, B. continue et large",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le marquage au sol autorise le dépassement de tous les véhicules :",
        image: "../images/Quiz signaux/quiz2_10.jpg",
        options: [
          { text: "A. OUI", isCorrect: false },
          { text: "B. NON", isCorrect: true },
        ],
        audioQuestion: "Le marquage au sol autorise le dépassement de tous les véhicules : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce véhicule circule normalement. Je dépasse :",
        image: "../images/Quiz signaux/quiz2_10.jpg",
        options: [
          { text: "A. OUI", isCorrect: false },
          { text: "B. NON", isCorrect: true },
        ],
        audioQuestion: "Ce véhicule circule normalement. Je dépasse : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      }

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
