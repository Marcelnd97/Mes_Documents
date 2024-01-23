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
  <title>Quiz état physique</title>
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
        </div>
        
          <!-- <br>
          <p id="noteBien"><b>NB :</b><i> Vous êtes libre d'activer la son mais sachez que le lecteur peut vous faire perdre beaucoup de temps dans les séries. 
          Donc il est conseillé de ne pas l'activer et de vous concentrer.</i></p> -->
    </div>


  <script>
    const quizData = [
      {
        question: "Je me sens fiévreux et fatigué. Je peux conduire pour aller chez le médecin à 10 km :",
        image: "../images/quizconducteur/physique1.jpg",
        options: [
          {text:"A. OUI", isCorrect: false},
          {text:"B. NON", isCorrect: true}
          ],
        audioQuestion: "Je me sens fiévreux et fatigué. Je peux conduire pour aller chez le médecin à 10 km : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Les conducteurs qui se mettent le plus en danger sont :",
        image: "../images/quizconducteur/physique2.jpg",
        options: [
          {text: "A. des femmes", isCorrect: false}, 
          {text: "B. des hommes", isCorrect: true}
        ],
        audioQuestion: "Les conducteurs qui se mettent le plus en danger sont : A. des femmes,  B. des hommes",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La taille des panneaux tient compte des caractéristiques de la vision humaine : ",
        image: "../images/quizconducteur/physique3.jpg",
        options: [
          {text: "A. OUI", isCorrect: true}, 
          {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "La taille des panneaux tient compte des caractéristiques de la vision humaine :  A. OUI, B. NON ",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La taille et la forme des supports de feux tricolores varient en fonction de la limitation de vitesse : ",
        image: "../images/quizconducteur/physique3.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: true}, 
          {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "La taille et la forme des supports de feux tricolores varient en fonction de la limitation de vitesse : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La non-perception des couleurs interdit la conduite d'un véhicule :",
        image: "../images/quizconducteur/physique4.jpg",
        options: [
          {text: "A. OUI", isCorrect: false}, 
          {text: "B. NON", isCorrect: true}
        ],
        audioQuestion: "La non-perception des couleurs interdit la conduite d'un véhicule : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Avec une acuité visuelle de 10/10°, je peux lire le panneau d'entrée d'agglomération :",
        image: "../images/quizconducteur/physique5.jpg",
        options: [
          {text: "A. à 50 m", isCorrect: true}, 
          {text: "B. à 100 m", isCorrect: false},
          {text: "C. à 150 m", isCorrect: false}
        ],
        audioQuestion: "Avec une acuité visuelle de 10/10°, je peux lire le panneau d'entrée d'agglomération : A. à 50 m, B. à 100 m, C. à 150 m",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La vision centrale de mon champ de vision me permet de voir :",
        image: "../images/quizconducteur/physique6.jpg",
        options: [ 
        {text: "A. loin", isCorrect: true}, 
        {text: "B. ou large", isCorrect: false}
        ],
        audioQuestion: "La vision centrale de mon champ de vision me permet de voir : A. loin, B. ou large",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je suis ébloui.",
        image: "../images/quizconducteur/physique7.jpg",
        options: [
        {text: "A. Je change la position de mon siège", isCorrect: false}, 
        {text: "B. Be baisse le pare-soliel", isCorrect: true},
        {text: "C. je ne regarde pas devant moi", isCorrect: false}
        ],
        audioQuestion: "Je suis ébloui. A. Je change la position de mon siège, B. Be baisse le pare-soliel, C. je ne regarde pas devant moi",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Mon permis comporte le code '01' J'ai perdu une lentille. Je peux conduire : - avec une seule lentille",
        image: "../images/quizconducteur/physique8.jpg",
        options: [
        {text: "A. OUI", isCorrect: false}, 
        {text: "B. NON", isCorrect: true}
        ],
        audioQuestion: "Mon permis comporte le code '01' J'ai perdu une lentille. Je peux conduire : - avec une seule lentille A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Mon permis comporte le code '01' J'ai perdu une lentille. Je peux conduire : - en mettant des lunettes de vue:",
        image: "../images/quizconducteur/physique8.jpg",
        options: [
        {text: "A. OUI", isCorrect: true}, 
        {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "Mon permis comporte le code '01' J'ai perdu une lentille. Je peux conduire : - en mettant des lunettes de vue: A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Certaines catégories de lunettes de soleil sont interdites pour conduire :",
        image: "../images/quizconducteur/physique9.jpg",
        options: [
        {text: "A. OUI", isCorrect: true}, 
        {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "Certaines catégories de lunettes de soleil sont interdites pour conduire : A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je suis autorisé à conduire avec :",
        image: "../images/quizconducteur/physique10.jpg",
        options: [ 
        {text: "A. un kit mains libre", isCorrect: false}, 
        {text: "B. un casque audio", isCorrect: false},
        {text: "C. la radio", isCorrect: true}
        ],
        audioQuestion: "Je suis autorisé à conduire avec : A. un kit mains libre, B. un casque audio, C. la radio",
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