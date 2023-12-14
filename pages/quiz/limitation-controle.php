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
        question: "Je continue tout droit. Je ne dépasse pas :",
        image: "../images/imgQuiz5/imgQLC1.jpg",
        options: ["A. 90km/h", "B. 130km/h"],
        correctAnswer: "B. 130km/h",
        audioQuestion: "Je continue tout droit. Je ne dépasse pas :",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La présence de radar permet la diminution du nombre de tués sur les routes :",
        image: "../images/imgQuiz5/imgQLC2.jpg",
        options: ["A. OUI", "B. NON"],
        correctAnswer: "A. OUI",
        audioQuestion: "La présence de radar permet la diminution du nombre de tués sur les routes : ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Sur cette route : - la vitesse maximale autorisée pour un conducteur expérimenté est de  ",
        image: "../images/imgQuiz5/imgQLC3.jpg",
        options: ["A. 90km/h", "B. 110km/h",],
        correctAnswer: "B. 110km/h",
        audioQuestion: "Sur cette route : - la vitesse maximale autorisée pour un conducteur expérimenté est de  ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Sur cette route : - les conducteurs novices peuvent circuler à ",
        image: "../images/imgQuiz5/imgQLC3.jpg",
        options: ["A. 90km/h", "B. 100km/h"],
        correctAnswer: "A. 90km/h, B. 100km/h",
        audioQuestion: "Sur cette route : - les conducteurs novices peuvent circuler à ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La vitesse va être limitée à :",
        image: "../images/imgQuiz5/imgQLC4.jpg",
        options: ["A. 50km/h", "B. 70km/h", "C. 90km/h"],
        correctAnswer: "A. 50km/h",
        audioQuestion: "La vitesse va être limitée à :",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Après le panneau de sortie d'agglomération, je pourrai circuler à  : : ",
        image: "../images/imgQuiz5/imgQLC5.jpg",
        options: ["A. 60km/h", "B. 70km/h", "C. 80km/h", "D. 100km/h"],
        correctAnswer: "A. 60km/h, B. 70km/h, C. 80km/h",
        audioQuestion: "Après le panneau de sortie d'agglomération, je pourrai circuler à  : ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce radar : - fonctionne ",
        image: "../images/imgQuiz5/imgQLC6.jpg",
        options: ["A. OUI", "B. NON"],
        correctAnswer: "A. OUI",
        audioQuestion: "Ce radar : - fonctionne ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce radar : - indique que je suis en excès de vitesse",
        image: "../images/imgQuiz5/imgQLC6.jpg",
        options: ["A. OUI", "B. NON"],
        correctAnswer: "B. NON",
        audioQuestion: "Ce radar : - indique que je suis en excès de vitesse",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le contrôle de vitesse est effectué par : ",
        image: "../images/imgQuiz5/imgQLC7.jpg",
        options: ["A. un agent de controle de l'ordre", "B. un radar"],
        correctAnswer: "B. un radar",
        audioQuestion: "Le contrôle de vitesse est effectué par : ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Un ami commet un excès de vitesse avec mon véhicule. Ce système envoi le procès verbal :",
        image: "../images/imgQuiz5/imgQLC7.jpg",
        options: ["A. à mon ami", "B. chez moi"],
        correctAnswer: "B. chez moi",
        audioQuestion: "Un ami commet un excès de vitesse avec mon véhicule. Ce système envoi le procès verbal :",
        audioAnswer: "correct.mp3"
      },
      {
        question: "À 90 km/h, je parcours en une seconde environ :",
        image: "../images/imgQuiz5/imgQLC9.jpg",
        options: ["A. 15m", "B. 25m", "C. 35", "D. 45"],
        correctAnswer: "B. 25m",
        audioQuestion: "JÀ 90 km/h, je parcours en une seconde environ :",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La force centrifuge : - pousse vers l'extérieur du virage :",
        image: "../images/imgQuiz5/imgQLC10.jpg",
        options: ["A. OUI", "B. NON"],
        correctAnswer: "A. OUI",
        audioQuestion: "La force centrifuge : - pousse vers l'extérieur du virage",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La force centrifuge :  - varie avec la vitesse :",
        image: "../images/imgQuiz5/imgQLC10.jpg",
        options: ["A. OUI", "B. NON"],
        correctAnswer: "A. OUI",
        audioQuestion: "La force centrifuge : - varie avec la vitesse",
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