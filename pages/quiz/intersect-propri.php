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
  <title>Quiz intersection propriété</title>
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
        question: "Je suis prioritaire, je cède le passage :",
        image: "../images/imagQuiz2/imgQAIP1.jpg",
        options: ["A. Je suis prioritaire","B. Je cède le passage"],
        correctAnswer: "B. Je cède le passage",
        audioQuestion: "Je suis prioritaire, je cède le passage",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je m'insère : ",
        image: "../images/imagQuiz2/imgQAIP1.jpg",
        options: ["A. OUI", "B. NON"],
        correctAnswer: "A. OUI",
        audioQuestion: "Je m'insèr ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "À la prochaine intersection, je continue tout droit. Je céderai le passage : - à gauche ",
        image: "../images/imagQuiz2/imgQAIP2.jpg",
        options: ["A. OUI", "B. NON"],
        correctAnswer: "B. NON",
        audioQuestion: "À la prochaine intersection, je continue tout droit. Je céderai le passage : - à gauche ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "À la prochaine intersection, je continue tout droit. Je céderai le passage : - à droite ",
        image: "../images/imagQuiz2/imgQAIP2.jpg",
        options: ["A. OUI", "B. NON"],
        correctAnswer: "B. NON",
        audioQuestion: "À la prochaine intersection, je continue tout droit. Je céderai le passage : - à droite ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je continue tout droit. Je céderai le passage : ",
        image: "../images/imagQuiz2/imgQAIP3.jpg",
        options: ["A. à droite", "B. en face"],
        correctAnswer: "A. à droite",
        audioQuestion: "Je continue tout droit. Je céderai le passage : ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La signalisation signale : ",
        image: "../images/imagQuiz2/imgQAIP4.jpg",
        options: ["A. des feux tricolores", "B. un carrefour à sens giratoire"],
        correctAnswer: "B. un carrefour à sens giratoire",
        audioQuestion: "La signalisation signale :",
        audioAnswer: "correct.mp3"
      },
      {
        question: "J'ai la possibilité d'emprunter :",
        image: "../images/imagQuiz2/imgQAIP4.jpg",
        options: ["A. 3 directions", "B. 4 directions"],
        correctAnswer: "B. 4 directions",
        audioQuestion: "J'ai la possibilité d'emprunter : ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Cette intersection est :",
        image: "../images/imagQuiz2/imgQAIP5.jpg",
        options: ["A.un carrefour à sens giratoire", "B. un rond poin"],
        correctAnswer: "A.un carrefour à sens giratoire",
        audioQuestion: "Cette intersection est :",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Les usagers qui cèdent le passage sont les usagers :",
        image: "../images/imagQuiz2/imgQAIP5.jpg",
        options: ["A. entrants", "B. sortant"],
        correctAnswer: "A. entrants",
        audioQuestion: "Les usagers qui cèdent le passage sont les usagers :",
        audioAnswer: "correct.mp3"
      },
      {
        question: "À ce carrefour à sens giratoire, je suis bien placé pour :",
        image: "../images/imagQuiz2/imgQAIP6.jpg",
        options: ["A. Tourner à droite", "B. aller tout droit", "C. Tourner à gauche", "D. faire demi-tour"],
        correctAnswer: "C. Tourner à gauche",
        audioQuestion: "À ce carrefour à sens giratoire, je suis bien placé pour :",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le véhicule qui me précède devant moi est correctement positionné :",
        image: "../images/imagQuiz2/imgQAIP7.jpg",
        options: ["A. OUI", "B. NON",],
        correctAnswer: "B. NON",
        audioQuestion: "Le véhicule qui me précède devant moi est correctement positionné :",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Pour tourner à gauche : - je m'arrête au feu",
        image: "../images/imagQuiz2/imgQAIP9.jpg",
        options: ["A. OUI", "B. NON"],
        correctAnswer: "B. NON",
        audioQuestion: "Pour tourner à gauche : - je m'arrête au feu",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Pour tourner à gauche : - je cède le passage",
        image: "../images/imagQuiz2/imgQAIP9.jpg",
        options: ["A. à droite", "B.  en face"],
        correctAnswer: "B.  en face",
        audioQuestion: "Pour tourner à gauche : - je cède le passage",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je poursuis ma route, je m'arrête au niveau du feu, je m'arrête au niveau du marquage au sol",
        image: "../images/imagQuiz2/imgQAIP10.jpg",
        options: ["A. Je poursuis ma route", "B. je m'arrête au niveau du feu", "C. je m'arrête au niveau du marquage au sol"],
        correctAnswer: "C. je m'arrête au niveau du marquage au sol",
        audioQuestion: "Je poursuis ma route, je m'arrête au niveau du feu, je m'arrête au niveau du marquage au sol",
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