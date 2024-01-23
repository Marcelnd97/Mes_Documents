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
  <title>Quiz Circulation</title>
  <link rel="shortcut icon" href="../images/logo/logo driving-car-solution.png" type="images/png">
  
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
        question: "J'anticipe en mettant le pied devant le frein immédiatement :",
        image: "../images/quizconducteur/stratege1.jpg",
        options: [
          {text:"A. OUI", isCorrect: true},
          {text:"B. NON", isCorrect: false}
          ],
        audioQuestion: "J'anticipe en mettant le pied devant le frein immédiatement : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je cèderai le passage :",
        image: "../images/quizconducteur/stratege1.jpg",
        options: [
          {text:"C. à gauche", isCorrect: true}, 
          {text:"C. à droite", isCorrect: false}
        ],
        audioQuestion: "Je cèderai le passage : D. à gauche, D. à droite",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Quelle est la situation la plus dangereuse ?  ",
        image: "../images/quizconducteur/stratege2.jpg",
        options: [
          {text: "A. La situation 1", isCorrect: false}, 
          {text: "B. La situation 2", isCorrect: true}
        ],
        audioQuestion: "Quelle est la situation la plus dangereuse ? A. La situation 1,  B. La situation 2",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Sur cette route, je contrôle les rétroviseurs : ",
        image: "../images/quizconducteur/stratege3.jpg",
        options: [
          {text: "A. OUI", isCorrect: true}, 
          {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "Sur cette route, je contrôle les rétroviseurs : A. OUI, B.  NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ma vitesse est adaptée  :",
        image: "../images/quizconducteur/stratege3.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: false}, 
          {text: "B. NON", isCorrect: true}
        ],
        audioQuestion: "Ma vitesse est adaptée  : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La taille des panneaux varie suivant le type de route sur laquelle je circule :",
        image: "../images/quizconducteur/stratege4.jpg",
        options: [
          {text: "A. OUI", isCorrect: true}, 
          {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "La taille des panneaux varie suivant le type de route sur laquelle je circule : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Sur ce type de route, avec une vue de 10/10°, je peux lire ces panneaux à partir de :",
        image: "../images/quizconducteur/stratege4.jpg",
        options: [
          {text: "A. 50 m", isCorrect: false}, 
          {text: "B. 150 m", isCorrect: true}
        ],
        audioQuestion: "Sur ce type de route, avec une vue de 10/10°, je peux lire ces panneaux à partir de : A. 50 m, B. 150 m",
        audioAnswer: "correct.mp3"
      },
      {
        question: "En conduite, je regarde :",
        image: "../images/quizconducteur/stratege5.jpg",
        options: [ 
        {text: "A. la tête baissé", isCorrect: false}, 
        {text: "B. sur les côtés", isCorrect: true},
        {text: "C. vers les siéges", isCorrect: false},
        {text: "D. le plus fixement possible", isCorrect: false}
        ],
        audioQuestion: "En conduite, je regarde : A. loin devant, B. sur les côtés, C. vers l'arrière, D. le plus fixement possible",
        audioAnswer: "correct.mp3"
      },
      {
        question: "",
        image: "../images/quizconducteur/stratege6.jpg",
        options: [
        {text: "A. J'accélère", isCorrect: false}, 
        {text: "B. ou je ralentis", isCorrect: true}
        ],
        audioQuestion: " : A. J'accélère, B. ou je ralentis",
        audioAnswer: "correct.mp3"
      },
      {
        question: "",
        image: "../images/quizconducteur/stratege7.jpg",
        options: [
        {text: "A. Je maintiens l'allure", isCorrect: false}, 
        {text: "B. Je me place sur la voie centrale", isCorrect: false},
        {text: "C. Je ralentis", isCorrect: true},
        {text: "D. J'allume les feux de détresse", isCorrect: false}
        ],
        audioQuestion: " A. Je maintiens l'allure, B. Je me place sur la voie centrale, C. Je ralentis, D. J'allume les feux de détresse",
        audioAnswer: "correct.mp3"
      },
      {
        question: "À 90 km/h, je parcours en une seconde environ :",
        image: "../images/quizconducteur/stratege8.jpg",
        options: [
        {text: "A. Je bénéficie de la priorité de passage", isCorrect: true}, 
        {text: "B. Je continue à la même allure", isCorrect: false},
        {text: "C. Je passe dans la voie de gauche", isCorrect: false}
        ],
        audioQuestion: "JÀ 90 km/h, je parcours en une seconde environ : A. Je bénéficie de la priorité de passage, B. Je continue à la même allure, C. Je passe dans la voie de gauche",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je maintiens mon allure :",
        image: "../images/quizconducteur/stratege9.jpg",
        options: [
        {text: "A. OUI", isCorrect: false}, 
        {text: "B. NON", isCorrect: true}
        ],
        audioQuestion: "Je maintiens mon allure : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "J’utilise mon avertisseur sonore :",
        image: "../images/quizconducteur/stratege9.jpg",
        options: [ 
        {text: "A. OUI", isCorrect: false}, 
        {text: "B. NON", isCorrect: true}
        ],
        audioQuestion: "J’utilise mon avertisseur sonore :  A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "L'adhérence risque d'être réduite :",
        image: "../images/quizconducteur/stratege10.jpg",
        options: [ 
        {text: "A. OUI", isCorrect: true}, 
        {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "L'adhérence risque d'être réduite :  A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je roule au maximum de la vitesse autorisée :",
        image: "../images/quizconducteur/stratege10.jpg",
        options: [ 
        {text: "A. OUI", isCorrect: false}, 
        {text: "B. NON", isCorrect: true}
        ],
        audioQuestion: "Je roule au maximum de la vitesse autorisée : A. OUI, B. NON",
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