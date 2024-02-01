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
  <title>Permis à points</title>
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
        question: "Je peux passer le permis à 17 ans si j'ai suivi la formation :",
        image: "../images/quiz_theme5/permis1.jpg",
        options: [
          {text:"A. AAC", isCorrect: true},
          {text:"B. traditionnelle", isCorrect: false},
          {text:"C. conduite supervisée", isCorrect: false}
          ],
        audioQuestion: "Je peux passer le permis à 17 ans si j'ai suivi la formation : A. AAC, B. traditionnelle, C. conduite supervisée",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Lors de la 1ere année d'obtention du permis de conduire de ma 1ere catégorie de permis, le capital maximum de points est de :",
        image: "../images/quiz_theme5/permis2.jpg",
        options: [
          {text:"A. 6 points", isCorrect: true},
          {text:"B. 9 points", isCorrect: false},
          {text:"C. 12 points", isCorrect: false}
          ],
        audioQuestion: "Lors de la 1ere année d'obtention du permis de conduire de ma 1ere catégorie de permis, le capital maximum de points est de :. A. 6 points, B. 9 points, C. 12 points",
        audioAnswer: "correct.mp3"
      },
      {
        question: "J'ai obtenu mon permis de conduire. La période probatoire : - suite à une formation traditionnelle est",
        image: "../images/quiz_theme5/permis3.jpg",
        options: [
          {text:"A. de 3 ans", isCorrect: true},
          {text:"B. de 4 ans", isCorrect: false}
          ],
        audioQuestion: "J'ai obtenu mon permis de conduire. La période probatoire : - suite à une formation traditionnelle est A. de 3 ans, B. de 4 ans",
        audioAnswer: "correct.mp3"
      },
      {
        question: "J'ai obtenu mon permis de conduire. La période probatoire : - suite à la conduite accompagnée est",
        image: "../images/quiz_theme5/permis3.jpg",
        options: [
          {text:"C. de 2 ans", isCorrect: true},
          {text:"D. de 3 ans", isCorrect: false}
          ],
        audioQuestion: "J'ai obtenu mon permis de conduire. La période probatoire : - suite à la conduite accompagnée est C. de 2 ans, D. de 3 ans",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Les conducteurs novices sont impliqués ",
        image: "../images/quiz_theme5/permis4.jpg",
        options: [
          {text:"A. dans 11% des accidents corporels de la circulation", isCorrect: false},
          {text:"B. dans 25% des accidents corporels de la circulation", isCorrect: true},
          ],
        audioQuestion: "Les conducteurs novices sont impliqués. A. dans 11% des accidents corporels de la circulation, B. dans 25% des accidents corporels de la circulation",
        audioAnswer: "correct.mp3"
      },
      {
        question: "J'ai mes 12 points et viens de commettre plusieurs infractions. Je peux perdre au maximum en une seule fois :",
        image: "../images/quiz_theme5/permis5.jpg",
        options: [
            {text:"A. 3 points", isCorrect: false},
            {text:"B. 4 points", isCorrect: false},
            {text:"C. 8 points", isCorrect: true},
        ],
        audioQuestion: "J'ai mes 12 points et viens de commettre plusieurs infractions. Je peux perdre au maximum en une seule fois : A. 3 points, B. 4 points, C. 8 points",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je viens de perdre un point pour excès de vitesse. Sans autre retrait de points, je le récupèrerai dans un délai de :",
        image: "../images/quiz_theme5/permis6.jpg",
        options: [
          {text: "A. 3 mois", isCorrect: false}, 
          {text: "B. 6 mois", isCorrect: true},
          {text: "C. 1 an", isCorrect: false},
          {text: "D. 2 ans", isCorrect: false},
        ],
        audioQuestion: "Je viens de perdre un point pour excès de vitesse. Sans autre retrait de points, je le récupèrerai dans un délai de : A. 3 mois, B. 6 mois, C. 1 an, D. 2 ans",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je viens de perdre plusieurs points sur mon permis. Je recevrai un courrier recommandé me proposant un stage :",
        image: "../images/quiz_theme5/permis7.jpg",
        options: [
          {text: "A. dans tous les cas", isCorrect: false}, 
          {text: "B. seulement si mon solde de points est inférieur à 6", isCorrect: true},
        ],
        audioQuestion: "Je viens de perdre plusieurs points sur mon permis. Je recevrai un courrier recommandé me proposant un stage :  A. dans tous les cas, D.seulement si mon solde de points est inférieur à 6",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je peux suivre un stage de sensibilisation à la sécurité routière :",
        image: "../images/quiz_theme5/permis7.jpg",
        options: [
          {text: "C. tous les 6 mois", isCorrect: false}, 
          {text: "D. tous les ans", isCorrect: true},
        ],
        audioQuestion: "Je peux suivre un stage de sensibilisation à la sécurité routière : C. tous les 6 mois, D. tous les ans",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Une moto de 125cm3 peut être conduite par :",
        image: "../images/quiz_theme5/admin6.jpg",
        options: [
          {text: "A. un conducteur de 15 ans", isCorrect: false}, 
          {text: "B. les titulaire du permis B ayant suivi une formation spécifique et les titulaires du permis moto", isCorrect: true},
        ],
        audioQuestion: "Une moto de 125cm3 peut être conduite par : A. un conducteur de 15 ans, B. les titulaire du permis B ayant suivi une formation spécifique et les titulaires du permis moto",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Le permis B permet de conduire des véhicules dont le PTAC est :",
        image: "../images/quiz_theme5/admin6.jpg",
        options: [ 
          {text: "A. inférieur à 2 t et de 3,5 t maximum", isCorrect: true},
          {text: "B. égal à 4,5 t", isCorrect: false}
        ],
        audioQuestion: "Le permis B permet de conduire des véhicules dont le PTAC est :. A. inférieur à 2 t et de 3,5 t maximum, B. égal à 4,5 t",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je viens de perdre mon dernier point. Mon permis va être invalidé :",
        image: "../images/quiz_theme5/permis10.jpg",
        options: [ 
          {text: "A. uniquement pour la conduite de ma voiture", isCorrect: false},
          {text: "B. pour toutes mes catégories de permis", isCorrect: true}
        ],
        audioQuestion: "Je viens de perdre mon dernier point. Mon permis va être invalidé : A. uniquement pour la conduite de ma voiture, B. pour toutes mes catégories de permis",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Une fois le permis invalidé, il est possible de suivre un stage de sensibilisation à la sécurité routière :",
        image: "../images/quiz_theme5/permis10.jpg",
        options: [ 
          {text: "C. OUI", isCorrect: false},
          {text: "D. NON", isCorrect: true}
        ],
        audioQuestion: "Une fois le permis invalidé, il est possible de suivre un stage de sensibilisation à la sécurité routière : A. uniquement pour la conduite de ma voiture, D. NON",
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