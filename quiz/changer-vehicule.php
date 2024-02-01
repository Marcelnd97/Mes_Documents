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
  <title>Changer son véhicule</title>
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
        question: "Sur le véhicule, le chargement est limité :",
        image: "../images/quiz_theme5/changer1.jpg",
        options: [
          {text:"A. à l'avant, à l'arrière et en largeur", isCorrect: true},
          {text:"B. en hauteur", isCorrect: false}
          ],
        audioQuestion: "Sur le véhicule, le chargement est limité : A. à l'avant, à l'arrière et en largeur, B. en hauteur",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Lors du transport de vélos : - je peux circuler en ayant les feux arrière masqués",
        image: "../images/quiz_theme5/admin6.jpg",
        options: [
          {text:"A. OUI", isCorrect: false},
          {text:"B. NON", isCorrect: true}
          ],
        audioQuestion: "Lors du transport de vélos : - je peux circuler en ayant les feux arrière masqués. A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Lors du transport de vélos : - la plaque d'immatriculation doit être visible",
        image: "../images/quiz_theme5/admin6.jpg",
        options: [
          {text:"C. OUI", isCorrect: true},
          {text:"D. NON", isCorrect: false}
          ],
        audioQuestion: "Lors du transport de vélos : - la plaque d'immatriculation doit être visible C. OUI, D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le PTAC c'est ",
        image: "../images/quiz_theme5/changer3.jpg",
        options: [
          {text:"A. le point total autorisé à conduire", isCorrect: false},
          {text:"B. le poids total autorisé en charge", isCorrect: true},
          ],
        audioQuestion: "Le PTAC c'est. A. le point total autorisé à conduire, B. le poids total autorisé en charge",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Lorsque je tracte une caravane : - le comportement du véhicule tracteur est différent",
        image: "../images/quiz_theme5/changer4.jpg",
        options: [
            {text:"A. OUI", isCorrect: true},
            {text:"B. NON", isCorrect: false},
        ],
        audioQuestion: "Lorsque je tracte une caravane : - le comportement du véhicule tracteur est différent A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Lorsque je tracte une caravane : - j'adapte ma conduite",
        image: "../images/quiz_theme5/changer4.jpg",
        options: [
          {text: "C. OUI", isCorrect: true}, 
          {text: "D. NON", isCorrect: false},
        ],
        audioQuestion: "Lorsque je tracte une caravane : - j'adapte ma conduite  C.OUI, D.NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Tracter une remorque : - a une incidence sur la conduite",
        image: "../images/quiz_theme5/changer4.jpg",
        options: [
          {text: "A. OUI", isCorrect: true}, 
          {text: "B. NON", isCorrect: false},
        ],
        audioQuestion: "Tracter une remorque : - a une incidence sur la conduite A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Tracter une remorque : - peut dévier ma trajectoire",
        image: "../images/quiz_theme5/changer4.jpg",
        options: [
          {text: "C. OUI", isCorrect: true}, 
          {text: "D. NON", isCorrect: false},
        ],
        audioQuestion: "Tracter une remorque : - peut dévier ma trajectoire C. OUI, D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce conducteur doit rajouter : un éclairage arrière supplémentaire - une plaque d'immatriculation",
        image: "../images/quiz_theme5/changer5.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: true}, 
          {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "Ce conducteur doit rajouter : un éclairage arrière supplémentaire - une plaque d'immatriculation. A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce conducteur doit rajouter : un éclairage arrière supplémentaire - un éclairage arrière supplémentaire",
        image: "../images/quiz_theme5/changer5.jpg",
        options: [ 
          {text: "C. OUI", isCorrect: true},
          {text: "D. NON", isCorrect: false}
        ],
        audioQuestion: "Ce conducteur doit rajouter : un éclairage arrière supplémentaire - un éclairage arrière supplémentaire C. OUI, D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Avec un permis B, je peux transporter (sans me compter) :",
        image: "../images/quiz_theme5/admin6.jpg",
        options: [ 
          {text: "A. 4 passagers ou 8 passagers", isCorrect: true},
          {text: "B. 10 passagers", isCorrect: false}
        ],
        audioQuestion: "Avec un permis B, je peux transporter (sans me compter). A. 4 passagers ou 8 passagers B. 5 jours ouvrés",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je transporte mon chien de préférence :",
        image: "../images/quiz_theme5/changer8.jpg",
        options: [ 
          {text: "A. séparé de l'habitacle par un filet et dans une caisse de transport", isCorrect: true},
          {text: "B. en liberté à l'arrière", isCorrect: false}
        ],
        audioQuestion: "Je transporte mon chien de préférence : A. séparé de l'habitacle par un filet, B. en liberté à l'arrière",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Mon chien est très obéissant. Je peux conduire en le gardant ainsi :",
        image: "../images/quiz_theme5/changer9.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: false},
          {text: "B. NON", isCorrect: true}
        ],
        audioQuestion: "Mon chien est très obéissant. Je peux conduire en le gardant ainsi : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je transporte deux passagers sur la banquette arrière. Ils doivent se placer :",
        image: "../images/quiz_theme5/changer10.jpg",
        options: [ 
          {text: "A. aux deux extrémités de la banquette", isCorrect: true},
          {text: "B. l'un au milieu et l'autre à gauche ", isCorrect: false}
        ],
        audioQuestion: "Je transporte deux passagers sur la banquette arrière. Ils doivent se placer : A. aux deux extrémités de la banquette, B. l'un au milieu et l'autre à gauche ",
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