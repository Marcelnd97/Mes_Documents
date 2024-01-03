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
  <title>Quiz Circulation</title>
  <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-color: chocolate;
    }
    .app{
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
      /* align-items: center; */
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
    button{
        /* border: 1px solid #222; */
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
    button:hover{
        background: white;
        color: #001e4d;

    }
    .style{
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .restart{
      border: 1px solid #222;
        border-radius: 4px;
        font-weight: 500;
        width: 40%;
        text-align: center;
    }
    .restart:hover{
      background: blue;
        color: #fff;
    }
    .card{
        background-color: blue;
        color: #fff;
    }
    #btn-next{
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
  
    #son{
      background-color: blue;
      color: white;
      margin: 10px auto;
      max-width: 31%;
    }
    #sons{
      margin: 10px auto;
      height: 10%;
      border: none;
    }
  </style>
</head>
<body>
    <br>
    <div class="container app">
        <div id="quiz-container">
          <div class="row">
            <div class="col-md-12">
                  <div class="card" id="quiz-image">
                      <div id="quiz-image"></div>  
                  </div>
              </div> 
          </div>
          <br>
          <div class="row">
              <div class="col-md-12">
                  <div class="card" id="quiz-question">
                      <div id="quiz-question" class="question"></div>
                  </div>
              </div>
          </div>
          <br>
          <div class="row">
              <div class="col-md-12">
                  <div class="card" id="quiz-options">
                          <div id="quiz-options" class="options"></div>
                  </div>
              </div>
          </div>
          <br>
          <div class="row">
              <div class="col-md-12 style">
                  <div class="card score" id="score">
                      <div id="score">Score: 0</div> 
                  </div>
                  <div class="card" id="timer">
                  <div id="timer">Temps restant: <span id="time">60</span> secondes</div>
                  </div>
              </div>
          </div>
          <br>
          <audio id="audio"></audio>
          
          <div class="row">
              <div class="col-md-12">
                  <div class="card" id="son">
                  <button id="sons" onclick="toggleSound()">Activer/Désactiver le Son</button>
                  </div>
              </div>
          </div>
        </div>
          <!-- <button id="suivant" onclick="nextQuestion()">Parleur</button> -->
          
          <button id="restart-button" class="restart" style="display: none;" onclick="restartQuiz()">Recommencer le Quiz</button>
        
    </div>

  <script>
    const quizData = [
      {
        question: "Le panneau indiquant une vitesse minimale obligatoire de 30 km/h est :",
        image: "../images/imgQuiz4/imgQRP1.jpg",
        options: ["A. le n°1", "B. le n°2", "C. le n°3", "D. le n°4"],
        correctAnswer: "C. le n°3",
        audioQuestion: "Le panneau indiquant une vitesse minimale obligatoire de 30 km/h est :",
        audioAnswer: "correct.mp3"
      },
      {
        question: "À 200 mètres, je rencontrerai :",
        image: "../images/imgQuiz4/imgQRP2.jpg",
        options: ["A. un feu tricolore", "B. giratoire", "C. un giratoire et un feu tricolore"],
        correctAnswer: "B. giratoire",
        audioQuestion: "À 200 mètres, je rencontrerai : ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je peux tourner : - à droite ",
        image: "../images/imgQuiz4/imgQRP3.jpg",
        options: ["A. OUI", "B. NON"],
        correctAnswer: "B. NON",
        audioQuestion: "Je peux tourner : - à droite ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je peux tourner : - à gauche",
        image: "../images/imgQuiz4/imgQRP3.jpg",
        options: ["A. OUI", "B. NON"],
        correctAnswer: "A. OUI",
        audioQuestion: "Je peux tourner : - à gauche",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La vitesse est limitée à 30 km/h à hauteur : ",
        image: "../images/imgQuiz4/imgQRP4.jpg",
        options: ["A. du panneau", "B. ou du ralentisseur"],
        correctAnswer: "A. du panneau",
        audioQuestion: "La vitesse est limitée à 30 km/h à hauteur :",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce panneau interdit de : ",
        image: "../images/imgQuiz4/imgQRP5.jpg",
        options: ["A. faire demi-tour", "B. tourner à gauche à la prochaine intersection"],
        correctAnswer: "B. tourner à gauche à la prochaine intersection",
        audioQuestion: "Ce panneau interdit de : ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le panneau signale un passage pour piétons : ",
        image: "../images/imgQuiz4/imgQRP6.jpg",
        options: ["A. OUI", "B. NON"],
        correctAnswer: "B. NON",
        audioQuestion: "Le panneau signale un passage pour piétons : ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La signalisation indique :",
        image: "../images/imgQuiz4/imgQRP7.jpg",
        options: ["A. un risque de chute de pierre", "B. une intersection de dépasser", "C. un virage dangereux"],
        correctAnswer: "A. un risque de chute de pierre",
        audioQuestion: "La signalisation indique :",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce panneau : - signale",
        image: "../images/imgQuiz4/imgQRP8.jpg",
        options: ["A. un danger", "B. un service"],
        correctAnswer: "A. un danger",
        audioQuestion: "Ce panneau : - signale",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce panneau : - m'incite à ralentir",
        image: "../images/imgQuiz4/imgQRP8.jpg",
        options: ["A. OUI", "B. NON"],
        correctAnswer: "A. OUI",
        audioQuestion: "Ce panneau : - m'incite à ralentir",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce panneau : - signale :",
        image: "../images/imgQuiz4/imgQRP9.jpg",
        options: ["A. une intersection", "B. un danger",],
        correctAnswer: "B. un danger",
        audioQuestion: "Ce panneau : - signale",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce panneau : - est temporaire",
        image: "../images/imgQuiz4/imgQRP9.jpg",
        options: ["A. OUI", "B. NON",],
        correctAnswer: "A. OUI",
        audioQuestion: "Ce panneau : - est temporaire",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce panneau est :",
        image: "../images/imgQuiz4/imgQRP10.jpg",
        options: ["A. permanent", "B. temporaire",],
        correctAnswer: "B. temporaire",
        audioQuestion: "Ce panneau est :",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je dépasse :",
        image: "../images/imgQuiz4/imgQRP10.jpg",
        options: ["A. OUI", "B. NON",],
        correctAnswer: "B. NON",
        audioQuestion: "Je dépasse :",
        audioAnswer: "correct.mp3"
      },
      // Ajoutez d'autres questions ici...
    ];

    let currentQuestionIndex = 0;
    let score = 0;
    let time = 600; // Temps en secondes
    let soundEnabled = false;

    function loadQuestion() {
      const currentQuestion = quizData[currentQuestionIndex];

      document.getElementById("quiz-question").textContent = currentQuestion.question;


      const imageContainer = document.getElementById("quiz-image");
      imageContainer.innerHTML = `<img src="${currentQuestion.image}" alt="Quiz Image">`;

      const optionsContainer = document.getElementById("quiz-options");
      optionsContainer.innerHTML = "";

      currentQuestion.options.forEach((option) => {
        const button = document.createElement("button");
        button.textContent = option;
        button.classList.add("option");
        button.onclick = () => checkAnswer(option);
        optionsContainer.appendChild(button);
      });
      updateScore();
      speak(currentQuestion.audioQuestion); // Lire la question à voix haute
    }

    function checkAnswer(selectedAnswer) {
      const currentQuestion = quizData[currentQuestionIndex];
      const options = document.querySelectorAll('.option');

      options.forEach(option => {
        if(option.textContent === currentQuestion.correctAnswer){
          option.parentNode.style.backgroundColor = 'green'; //Réponse correct en vert
        }else if (option.textContent === selectedAnswer) {
          option.parentNode.style.backgroundColor = 'red'; //Réponse incorrect en rouge
        }
      });

      
        if (selectedAnswer === currentQuestion.correctAnswer) {
          score++;
          if (soundEnabled) {
            speak("Bravo !");
            playAudio(currentQuestion.audioAnswer);
          } 
        }else {
          speak("Attention ! La réponse correcte est " + currentQuestion.correctAnswer);
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

    function updateScore() {
      document.getElementById("score").textContent = `Score: ${score}`;
    }
    
    function endQuiz() {

      if (currentQuestionIndex <= quizData.length) {

          speak("Votre score final est: " + score + "sur" + quizData.length + 
                ". Vous pouver refaire le teste pour mieux comprendre"); 
        
      }
      document.getElementById("quiz-image").style.display = 'none';
      document.getElementById("quiz-question").style.display = 'none';
      document.getElementById("quiz-options").style.display = 'none';
      document.getElementById("timer").style.display = 'none';
      document.getElementById("son").style.display = 'none';
      document.getElementById("score").textContent = `Votre score final est: ${score} sur ${quizData.length}`;
      document.getElementById("restart-button").style.display = 'inline';
    }

    function restartQuiz() {
      // Réinitialiser les variables et afficher à nouveau les éléments nécessaires
      currentQuestionIndex = 0;
      score = 0;
      time = 600;
      loadQuestion();
      
      document.getElementById("quiz-options").style.display = 'flex';
      document.getElementById("quiz-image").style.display = 'flex';
      document.getElementById("quiz-question").style.display = 'flex';
      document.getElementById("son").style.display = 'block';
      document.getElementById("timer").style.display = 'block';
      document.getElementById("restart-button").style.display = 'none';
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
</body>
</html>