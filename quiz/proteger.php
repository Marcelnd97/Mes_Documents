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
  <title>Protéger alerter secourir</title>
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
        question: "Un accident vient de se produire. Je me gare pour éviter un suraccident :",
        image: "../images/quiz_theme6/proteger1.jpg",
        options: [
          {text:"A. OUI", isCorrect: true},
          {text:"B. NON", isCorrect: false}
          ],
        audioQuestion: "Un accident vient de se produire. Je me gare pour éviter un suraccident : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "J'enfile le gilet de haute visibilité :",
        image: "../images/quiz_theme6/proteger1.jpg",
        options: [
          {text:"C. de jour comme de nuit", isCorrect: true},
          {text:"D. la nuit uniquemennt", isCorrect: false}
          ],
        audioQuestion: "J'enfile le gilet de haute visibilité : C. de jour comme de nuit, D. la nuit uniquemennt",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Lorsque les secours sont déjà présents sur le lieu de l'accident : - je m'arrête",
        image: "../images/quiz_theme6/proteger2.jpg",
        options: [
          {text:"A. OUI", isCorrect: false},
          {text:"B. NON", isCorrect: true}
          ],
        audioQuestion: "Lorsque les secours sont déjà présents sur le lieu de l'accident : - je m'arrête. A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Lorsque les secours sont déjà présents sur le lieu de l'accident : - je ralentis",
        image: "../images/quiz_theme6/proteger2.jpg",
        options: [
          {text:"C. OUI", isCorrect: true},
          {text:"D. NON", isCorrect: false}
          ],
        audioQuestion: "Lorsque les secours sont déjà présents sur le lieu de l'accident : - je ralentis. C. OUI, D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Protéger les lieux d'un accident : - c'est installer le triangle de présignalisation à au moins",
        image: "../images/quiz_theme6/proteger3.jpg",
        options: [
          {text:"A. 20 mètres", isCorrect: false},
          {text:"B. 30 mètres", isCorrect: true}
          ],
        audioQuestion: "Protéger les lieux d'un accident : - c'est installer le triangle de présignalisation à au moins. A. 20 mètres, B. 30 mètres",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Protéger les lieux d'un accident : - c'est éviter un suraccident.",
        image: "../images/quiz_theme6/proteger3.jpg",
        options: [
          {text:"C. OUI", isCorrect: true},
          {text:"D. NON", isCorrect: false}
          ],
        audioQuestion: "Protéger les lieux d'un accident : - c'est éviter un suraccident. A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Premier arrivé sur les lieux d’un accident, je dois dans l'ordre :",
        image: "../images/quiz_theme6/proteger4.jpg",
        options: [
          {text:"A. protéger les lieux, contacter les secours, secourir la (les) victime(s)", isCorrect: true},
          {text:"B. Contacter les secours, protéger les lieux, secourir la (les) victime(s)", isCorrect: false},
          {text:"C. Secourir la (les) victime(s), contacter les secourir, protéger les lieux", isCorrect: false}
          ],
        audioQuestion: "Premier arrivé sur les lieux d’un accident, je dois dans l'ordre : A. protéger les lieux, contacter les secours, secourir la (les) victimes, B. Contacter les secours, protéger les lieux, secourir la (les) victime(s), C. Secourir la (les) victime(s), contacter les secourir, protéger les lieux",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je vérifie si une victime respire :",
        image: "../images/quiz_theme6/proteger5.jpg",
        options: [
          {text:"A. en vérifiant si son torse se soulève", isCorrect: true},
          {text:"B. en lui faisant du bouche-à-bouche", isCorrect: false},
          ],
        audioQuestion: "Je vérifie si une victime respire : A. en vérifiant si son torse se soulève, B. en lui faisant du bouche-à-bouche",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je suis témoin d'un accident. Depuis mon téléphone portable, je compose de préférence ",
        image: "../images/quiz_theme6/proteger6.jpg",
        options: [
          {text:"A. le 210", isCorrect: false},
          {text:"B. le 112", isCorrect: true},
          {text:"C. le 15", isCorrect: false},
          ],
        audioQuestion: "Je suis témoin d'un accident. Depuis mon téléphone portable, je compose de préférence. A. le 210, B. le 112, C. 15",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Suite à un accident ayant entraîné des dommages physiques : - j'appelle",
        image: "../images/quiz_theme6/proteger7.jpg",
        options: [
            {text:"A. le 17", isCorrect: false},
            {text:"B. le 112", isCorrect: true},
        ],
        audioQuestion: "Suite à un accident ayant entraîné des dommages physiques : - j'appelle. A. le 17, B. le 112",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Suite à un accident ayant entraîné des dommages physiques : - je donne de l'eau aux victimes",
        image: "../images/quiz_theme6/proteger7.jpg",
        options: [
          {text: "A. OUI", isCorrect: false}, 
          {text: "B. NON", isCorrect: true},
        ],
        audioQuestion: "Suite à un accident ayant entraîné des dommages physiques : - je donne de l'eau aux victimes A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Donner de l'eau à un blessé :",
        image: "../images/quiz_theme6/proteger8.jpg",
        options: [
            {text: "A. est dangereux et risque de l'étouffer", isCorrect: true},
            {text: "B. est autorisé", isCorrect: false},
        ],
        audioQuestion: "Donner de l'eau à un blessé : A. est dangereux et risque de l'étouffer, B. est autorisé",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Suite à un accident, un motard est blessé. Je peux :",
        image: "../images/quiz_theme6/proteger9.jpg",
        options: [
          {text: "A. retirer son casque", isCorrect: false}, 
          {text: "B. le déplacer", isCorrect: false},
          {text: "C. m'assurer qu'il respire ou le ccouvrir", isCorrect: true},
        ],
        audioQuestion: "Suite à un accident, un motard est blessé. Je peux :  A. retirer son casque, B. le déplacer, C. m'assurer qu'il respire ou le ccouvrir",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Face à une victime inconsciente et qui ne respire pas normalement : - je la place en position latérale de sécurité (PLS).",
        image: "../images/quiz_theme6/proteger5.jpg",
        options: [
            {text: "A. OUI", isCorrect: true}, 
            {text: "B. NON", isCorrect: false},
        ],
        audioQuestion: "Face à une victime inconsciente et qui ne respire pas normalement : - je la place en position latérale de sécurité (PLS). A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Face à une victime inconsciente et qui ne respire pas normalement : - je la déplace",
        image: "../images/quiz_theme6/proteger5.jpg",
        options: [
          {text: "A. OUI", isCorrect: false}, 
          {text: "B. NON", isCorrect: true},
        ],
        audioQuestion: "Face à une victime inconsciente et qui ne respire pas normalement : - je la déplace A. OUI, B. NON",
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