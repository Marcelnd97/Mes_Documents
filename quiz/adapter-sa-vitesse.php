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
        question: "Je continue tout droit. Je ne dépasse pas :",
        image: "../images/imgQuiz5/imgQLC1.jpg",
        options: [
          {text:"A. 90km/h", isCorrect: false},
          {text:"B. 130km/h", isCorrect: true}
          ],
        audioQuestion: "Je continue tout droit. Je ne dépasse pas : A. 90km/h, B. 130km/h",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La présence de radar permet la diminution du nombre de tués sur les routes :",
        image: "../images/imgQuiz5/imgQLC2.jpg",
        options: [
          {text:"A. OUI", isCorrect: true}, 
          {text:"B. NON", isCorrect: false}
        ],
        audioQuestion: "La présence de radar permet la diminution du nombre de tués sur les routes : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Sur cette route : - la vitesse maximale autorisée pour un conducteur expérimenté est de  ",
        image: "../images/imgQuiz5/imgQLC3.jpg",
        options: [
          {text: "A. 90km/h", isCorrect: false}, 
          {text: "B. 110km/h", isCorrect: true}
        ],
        audioQuestion: "Sur cette route : - la vitesse maximale autorisée pour un conducteur expérimenté est de : A. 90km/h,  B. 110km/h",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Sur cette route : - les conducteurs novices peuvent circuler à ",
        image: "../images/imgQuiz5/imgQLC3.jpg",
        options: [
          {text: "A. 90km/h", isCorrect: true}, 
          {text: "B. 100km/h", isCorrect: false}
        ],
        audioQuestion: "Sur cette route : - les conducteurs novices peuvent circuler à : A. 90km/h, B. 100km/h ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La vitesse va être limitée à :",
        image: "../images/imgQuiz5/imgQLC4.jpg",
        options: [ 
          {text: "A. 50km/h", isCorrect: true}, 
          {text: "B. 70km/h", isCorrect: false},
          {text: "C. 90km/h", isCorrect: false}
        ],
        audioQuestion: "La vitesse va être limitée à :A. 50km/h, B. 70km/h, C. 90km/h",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Après le panneau de sortie d'agglomération, je pourrai circuler à  :",
        image: "../images/imgQuiz5/imgQLC5.jpg",
        options: [
          {text: "A. 60km/h", isCorrect: true}, 
          {text: "B. 70km/h", isCorrect: false},
          {text: "C. 80km/h", isCorrect: false},
          {text: "D. 100km/h", isCorrect: false}
        ],
        audioQuestion: "Après le panneau de sortie d'agglomération, je pourrai circuler à : A. 60km/h, B. 70km/h, C. 80km/h, D. 100km/h ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce radar : - fonctionne ",
        image: "../images/imgQuiz5/imgQLC6.jpg",
        options: [
          {text: "A. OUI", isCorrect: true}, 
          {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "Ce radar : - fonctionne : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce radar : - indique que je suis en excès de vitesse",
        image: "../images/imgQuiz5/imgQLC6.jpg",
        options: [ 
        {text: "A. OUI", isCorrect: false}, 
        {text: "B. NON", isCorrect: true}
        ],
        audioQuestion: "Ce radar : - indique que je suis en excès de vitesse : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le contrôle de vitesse est effectué par : ",
        image: "../images/imgQuiz5/imgQLC7.jpg",
        options: [
        {text: "A. un agent de controle de l'ordre", isCorrect: false}, 
        {text: "B. un radar", isCorrect: true}
        ],
        audioQuestion: "Le contrôle de vitesse est effectué par : A. un agent de controle de l'ordre, B. un radar",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Un ami commet un excès de vitesse avec mon véhicule. Ce système envoi le procès verbal :",
        image: "../images/imgQuiz5/imgQLC7.jpg",
        options: [
        {text: "A. à mon ami", isCorrect: false}, 
        {text: "B. chez moi", isCorrect: true}
        ],
        audioQuestion: "Un ami commet un excès de vitesse avec mon véhicule. Ce système envoi le procès verbal : A. à mon ami, B. chez moi",
        audioAnswer: "correct.mp3"
      },
      {
        question: "À 90 km/h, je parcours en une seconde environ :",
        image: "../images/imgQuiz5/imgQLC9.jpg",
        options: [
        {text: "A. 15m", isCorrect: false}, 
        {text: "B. 25m", isCorrect: true},
        {text: "C. 35", isCorrect: false},
        {text: "D. 45", isCorrect: false}
        ],
        audioQuestion: "JÀ 90 km/h, je parcours en une seconde environ : A. 15m, B. 25m, C. 35, D. 45",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La force centrifuge : - pousse vers l'extérieur du virage :",
        image: "../images/imgQuiz5/imgQLC10.jpg",
        options: [
        {text: "A. OUI", isCorrect: true}, 
        {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "La force centrifuge : - pousse vers l'extérieur du virage: A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La force centrifuge :  - varie avec la vitesse :",
        image: "../images/imgQuiz5/imgQLC10.jpg",
        options: [ 
        {text: "A. OUI", isCorrect: true}, 
        {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "La force centrifuge : - varie avec la vitesse: A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      // Ajoutez d'autres questions ici...
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