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
  <title>Quiz conduite de sécurité</title>
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
        question: "Je peux circuler à 80 km/h sans risque ::",
        image: "../images/quizconducteur/adopter1.jpg",
        options: [
          {text:"A. OUI", isCorrect: false},
          {text:"B. NON", isCorrect: true}
          ],
        audioQuestion: "Je peux circuler à 80 km/h sans risque :: A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je rencontre des zones de danger :  ",
        image: "../images/quizconducteur/adopter2.jpg",
        options: [
          {text: "A. OUI", isCorrect: true}, 
          {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "Je rencontre des zones de danger : A. OUI,  B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le feu est vert depuis un long moment. ",
        image: "../images/quizconducteur/adopter2.jpg",
        options: [
          {text: "A. Je maintiens mon allure", isCorrect: true}, 
          {text: "B. Je freine", isCorrect: false}
        ],
        audioQuestion: "Le feu est vert depuis un long moment.  A. Je maintiens mon allure, B. Je freine ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "L'oubli des clignotants pour indiquer un changement de direction peut être sanctionné par une amende et un retrait de points :",
        image: "../images/quizconducteur/adopter3.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: true}, 
          {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "L'oubli des clignotants pour indiquer un changement de direction peut être sanctionné par une amende et un retrait de points :A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Pour signaler mon intention d'emprunter l'emplacement à droite :",
        image: "../images/quizconducteur/adopter4.jpg",
        options: [
          {text: "A. je freine fort", isCorrect: false}, 
          {text: "B. j'active les clignotants", isCorrect: true}
        ],
        audioQuestion: "Pour signaler mon intention d'emprunter l'emplacement à droite : A. je freine fort, B. j'active les clignotants",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Pour signaler ma présence à cette intersection : - je klaxonne ",
        image: "../images/quizconducteur/adopter5.jpg",
        options: [
          {text: "A. le jour", isCorrect: false}, 
          {text: "B. la nuit", isCorrect: true}
        ],
        audioQuestion: "Pour signaler ma présence à cette intersection : - je klaxonne. A. le jour, B. la nuit",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Pour signaler ma présence à cette intersection : - je fais un appel lumineux",
        image: "../images/quizconducteur/adopter5.jpg",
        options: [ 
        {text: "A. le jour", isCorrect: false}, 
        {text: "B. la nuit", isCorrect: true}
        ],
        audioQuestion: "Pour signaler ma présence à cette intersection : - je fais un appel lumineux. A. le jour, B. la nuit",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La distance de sécurité avec la camionnette devant moi : ",
        image: "../images/quizconducteur/adopter6.jpg",
        options: [
        {text: "A. est suffisante", isCorrect: true}, 
        {text: "B. est insuffisante", isCorrect: false},
        {text: "C. Je ralentis", isCorrect: false}
        ],
        audioQuestion: "La distance de sécurité avec la camionnette devant moi : A. est suffisante, B. est insuffisante, C. Je ralentis",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je circule à 130 km/h.",
        image: "../images/quizconducteur/adopter7.jpg",
        options: [
        {text: "A. je maintiens l'allure", isCorrect: false}, 
        {text: "B. je ralentis", isCorrect: true}
        ],
        audioQuestion: "Je circule à 130 km/h. A. je maintiens l'allure, B. je ralentis",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La distance de sécurité est :",
        image: "../images/quizconducteur/adopter7.jpg",
        options: [
        {text: "A. suffisante", isCorrect: false}, 
        {text: "B. insuffisante", isCorrect: true}
        ],
        audioQuestion: "JLa distance de sécurité est : A. suffisante, B. insuffisante",
        audioAnswer: "correct.mp3"
      },
      {
        question: "L'insertion s'est faite en respectant les intervalles de sécurité :",
        image: "../images/quizconducteur/adopter8.jpg",
        options: [
        {text: "A. OUI", isCorrect: true}, 
        {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "L'insertion s'est faite en respectant les intervalles de sécurité : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Pendant le temps de réaction, le véhicule continue d'avancer à la même vitesse :",
        image: "../images/quizconducteur/adopter9.jpg",
        options: [ 
        {text: "A. OUI", isCorrect: true}, 
        {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "Pendant le temps de réaction, le véhicule continue d'avancer à la même vitesse : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La distance d'arrêt peut varier en fonction : - de la vitesse",
        image: "../images/quizconducteur/adopter10.jpg",
        options: [ 
        {text: "A. OUI", isCorrect: true}, 
        {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "La distance d'arrêt peut varier en fonction : - de la vitesse A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La distance d'arrêt peut varier en fonction : - de mon état psychologique.",
        image: "../images/quizconducteur/adopter9.jpg",
        options: [ 
        {text: "A. OUI", isCorrect: true}, 
        {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "La distance d'arrêt peut varier en fonction : - de mon état psychologique. A. OUI, B. NON",
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