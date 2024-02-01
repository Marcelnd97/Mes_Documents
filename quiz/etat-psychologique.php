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
  <title>Quiz état psychologique</title>
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
        question: "Ce pictogramme : - m'indique ",
        image: "../images/quizconducteur/psychique1.jpg",
        options: [
          {text:"A. de lire la notice avant de conduire", isCorrect: false},
          {text:"B. de connaître l'avis d'un professionnel de santé avant de conduire", isCorrect: true}
          ],
        audioQuestion: "Ce pictogramme : - m'indique A. de lire la notice avant de conduire, B. de connaître l'avis d'un professionnel de santé avant de conduire",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Ce pictogramme : - se trouve sur les boîtes de médicaments vendus ",
        image: "../images/quizconducteur/psychique1.jpg",
        options: [
          {text: "A. avec ordonnance uniquement", isCorrect: false}, 
          {text: "B. avec ou sans ordonnance", isCorrect: true}
        ],
        audioQuestion: "Ce pictogramme : - se trouve sur les boîtes de médicaments vendus. A. avec ordonnance uniquement, B. avec ou sans ordonnance",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Après avoir pris un médicament de niveau 3 :",
        image: "../images/quizconducteur/psychique2.jpg",
        options: [
          {text: "A. je reste prudent en conduisant", isCorrect: false}, 
          {text: "B. je connaît l'avis de mon médecin avant de conduire", isCorrect: false},
          {text: "C. je ne conduit pas", isCorrect: true}
        ],
        audioQuestion: "Après avoir pris un médicament de niveau 3 :  A. je reste prudent en conduisant, B. je connaît l'avis de mon médecin avant de conduire, C. je ne conduit pas ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Les drogues consommées peuvent être détectées par : ",
        image: "../images/quizconducteur/psychique3.jpg",
        options: [ 
          {text: "A. un test salivaire", isCorrect: true},
          {text: "B. un éthilotest", isCorrect: false}
        ],
        audioQuestion: "Les drogues consommées peuvent être détectées par : A. un test salivaire, B. un éthilotest",
        audioAnswer: "correct.mp3"
      },
      {
        question: "En période probatoire, je suis en infraction si mon alcoolémie est de :",
        image: "../images/quizconducteur/psychique4.jpg",
        options: [
          {text: "A. 0,10 g/l de sang", isCorrect: false}, 
          {text: "B. 0,10 mg/l d'air expiré", isCorrect: true}
        ],
        audioQuestion: "En période probatoire, je suis en infraction si mon alcoolémie est de : A. 0,10 g/l de sang, B. 0,10 mg/l d'air expiré",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La quantité d'alcool pur est plus importante dans : ",
        image: "../images/quizconducteur/psychique5.jpg",
        options: [
          {text: "A. 25 cl de biére", isCorrect: false}, 
          {text: "B. 10 cl de vin rouge", isCorrect: false},
          {text: "C. 3 cl de whisky", isCorrect: false}, 
          {text: "D. il y a la même quantité d'alcool pur dans les 3 verres", isCorrect: true}
        ],
        audioQuestion: "La quantité d'alcool pur est plus importante dans : A. 25 cl de biére, B. 10 cl de vin rouge, C. 3 cl de whisky, D. il y a la même quantité d'alcool pur dans les 3 verres",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Avant de prendre le volant après une soirée et la consommation d’un verre d’alcool :",
        image: "../images/quizconducteur/psychique6.jpg",
        options: [
        {text: "A. j'attend au moins 2 heures", isCorrect: true}, 
        {text: "B. je bois un ou plusieurs cafés", isCorrect: false},
        {text: "C. je bois 5 fois le volume d'alcool en eau", isCorrect: false}
        ],
        audioQuestion: "Avant de prendre le volant après une soirée et la consommation d’un verre d’alcool : A. j'attend au moins 2 heures, B. je bois un ou plusieurs cafés, C. je bois 5 fois le volume d'alcool en eau",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je suis contrôlé avec une alcoolémie de 0,50 g/l de sang, j'encours :",
        image: "../images/quizconducteur/psychique7.jpg",
        options: [
        {text: "A. une perte de 3 points", isCorrect: false}, 
        {text: "B. une perte de 7 points", isCorrect: false},
        {text: "C. une amende", isCorrect: true}
        ],
        audioQuestion: "Je suis contrôlé avec une alcoolémie de 0,50 g/l de sang, j'encours : A. une perte de 3 points, B. une perte de 7 points, C. une amende",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Emprunter toujours le même trajet risque d'entraîner : - une impression de sécurité",
        image: "../images/quizconducteur/psychique8.jpg",
        options: [
        {text: "A. OUI", isCorrect: true}, 
        {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "Emprunter toujours le même trajet risque d'entraîner : - une impression de sécurité. A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Emprunter toujours le même trajet risque d'entraîner : - une baisse de la concentration",
        image: "../images/quizconducteur/psychique8.jpg",
        options: [
        {text: "A. OUI", isCorrect: true}, 
        {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "Emprunter toujours le même trajet risque d'entraîner : - une baisse de la concentration A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "J'ai des douleurs dans la nuque et dans le dos.",
        image: "../images/quizconducteur/psychique9.jpg",
        options: [ 
        {text: "A. j'accélère", isCorrect: false}, 
        {text: "B. je m'arrête à la prochaine aire de repos", isCorrect: true},
        {text: "C. j'allume les feux de détresse", isCorrect: false}
        ],
        audioQuestion: "J'ai des douleurs dans la nuque et dans le dos. A. j'accélère, B. je m'arrête à la prochaine aire de repos, C. j'allume les feux de détresse",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Une discussion animée avec mon passager :",
        image: "../images/quizconducteur/psychique10.jpg",
        options: [ 
        {text: "A. est sans influence sur ma conduite", isCorrect: false}, 
        {text: "B. risque de me déconcentrer de la tâche de conduite", isCorrect: true}
        ],
        audioQuestion: "Une discussion animée avec mon passager : A. est sans influence sur ma conduite, B. risque de me déconcentrer de la tâche de conduite",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Mon passager me dit : Tu peux y aller, tu as le temps de passer !",
        image: "../images/quizconducteur/psychique10.jpg",
        options: [ 
        {text: "C. je lui fais confiance et traverse l'intersection", isCorrect: false}, 
        {text: "D. je m'arrête", isCorrect: true}
        ],
        audioQuestion: "Mon passager me dit : Tu peux y aller, tu as le temps de passer ! C. je lui fais confiance et traverse l'intersection, D. je m'arrête",
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