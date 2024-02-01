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
  <title>Documents administrative</title>
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
        question: "Lors d'un contrôle routier, la non-présentation des documents du véhicule entraîne :",
        image: "../images/quiz_theme5/admin.jpg",
        options: [
          {text:"A. une amande", isCorrect: false},
          {text:"B. un retrait de points", isCorrect: true},
          {text:"C. une garde à vue", isCorrect: false}
          ],
        audioQuestion: "Lors d'un contrôle routier, la non-présentation des documents du véhicule entraîne : A. une amande, B. un retrait de points, C. une garde à vue",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Lors d'un accident responsable, mon assurance 'responsabilité civile', couvre :",
        image: "../images/quiz_theme5/admin1.jpg",
        options: [
          {text:"A. les dommages matériels et corporels causes à autrui", isCorrect: true},
          {text:"B. mes dommages corporels", isCorrect: false}
          ],
        audioQuestion: "Lors d'un accident responsable, mon assurance 'responsabilité civile', couvre : A. les dommages matériels et corporels causes à autrui, B. mes dommages corporels",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Un point perdu après une seule infraction est récupéré dans un délai de :",
        image: "../images/quiz_theme5/admin2.jpg",
        options: [
          {text:"A. 12 mois", isCorrect: false},
          {text:"B. 6 mois", isCorrect: true},
          {text:"C. 1 mois", isCorrect: false}
          ],
        audioQuestion: "Un point perdu après une seule infraction est récupéré dans un délai de : A. 12 mois, B. 6 mois, C. 1 mois",
        audioAnswer: "correct.mp3"
      },
      {
        question: "L'attestation d'assurance est un document : ",
        image: "../images/quiz_theme5/admin3.jpg",
        options: [
          {text:"A. obligation", isCorrect: true},
          {text:"B. facultatif", isCorrect: false},
          ],
        audioQuestion: "L'attestation d'assurance est un document :. A. obligation, B. facultatif",
        audioAnswer: "correct.mp3"
      },
      {
        question: "La 'Responsabilité civile' couvre les dégâts causés :",
        image: "../images/quiz_theme5/admin3.jpg",
        options: [
            {text:"C. à mon véhicule", isCorrect: false},
            {text:"D. aux victimes d'un accident que j'ai occasionné", isCorrect: true},
        ],
        audioQuestion: "La 'Responsabilité civile' couvre les dégâts causés : C. à mon véhicule, D. aux victimes d'un accident que j'ai occasionné",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je suis en conduite accompagnée. En cas de contrôle routier, je présente : - mon livret d'apprentissage",
        image: "../images/quiz_theme5/admin4.jpg",
        options: [
          {text: "C.OUI", isCorrect: true}, 
          {text: "D.NON", isCorrect: false},
        ],
        audioQuestion: "Je suis en conduite accompagnée. En cas de contrôle routier, je présente : - mon livret d'apprentissage  C.OUI, D.NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je suis en conduite accompagnée. En cas de contrôle routier, je présente : - le permis de conduire de mon accompagnateur",
        image: "../images/quiz_theme5/admin4.jpg",
        options: [
          {text: "C. OUI", isCorrect: true}, 
          {text: "D. NON", isCorrect: false},
        ],
        audioQuestion: "Je suis en conduite accompagnée. En cas de contrôle routier, je présente : - le permis de conduire de mon accompagnateur C. OUI, D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Pré-remplir le constat amiable est :",
        image: "../images/quiz_theme5/admin5.jpg",
        options: [ 
          {text: "A. conseillé", isCorrect: true}, 
          {text: "B. interdit", isCorrect: false}
        ],
        audioQuestion: "Pré-remplir le constat amiable est : A. conseillé, B. interdit",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Suite à un accident, j'envoie le constat signé dans un délai maximum :",
        image: "../images/quiz_theme5/admin5.jpg",
        options: [ 
          {text: "C. de 5 jours ouvrés", isCorrect: true},
          {text: "D. de 2 jours ouvrés", isCorrect: false}
        ],
        audioQuestion: "Suite à un accident, j'envoie le constat signé dans un délai maximum : C. de 5 jours ouvrés, D. de 2 jours ouvrés",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je suis impliqué dans un accident matériel. Je fais parvenir le constat amiable à mon assureur dans un délai maximal de :",
        image: "../images/quiz_theme5/admin6.jpg",
        options: [ 
          {text: "A. 3 jours ouvrés", isCorrect: false},
          {text: "B. 5 jours ouvrés", isCorrect: true},
          {text: "C. 7 jours ouvrés", isCorrect: false}
        ],
        audioQuestion: "Je suis impliqué dans un accident matériel. Je fais parvenir le constat amiable à mon assureur dans un délai maximal de. A. 3 jours ouvrés, B. 5 jours ouvrés, C. 7 jours ouvrés",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Une fois le constat signé par les deux conducteurs, je peux rajouter des éléments : - au recto",
        image: "../images/quiz_theme5/admin7.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: false},
          {text: "B. NON", isCorrect: true}
        ],
        audioQuestion: "Une fois le constat signé par les deux conducteurs, je peux rajouter des éléments : - au recto A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Une fois le constat signé par les deux conducteurs, je peux rajouter des éléments : - au verso",
        image: "../images/quiz_theme5/admin7.jpg",
        options: [ 
          {text: "C. OUI", isCorrect: true},
          {text: "D. NON", isCorrect: false}
        ],
        audioQuestion: "Une fois le constat signé par les deux conducteurs, je peux rajouter des éléments : - au verso C. OUI, D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "En cas d'accident, le constat amiable peut être : - au format papier",
        image: "../images/quiz_theme5/admin8.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: true},
          {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "En cas d'accident, le constat amiable peut être : - au format papier A. OUI, B. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "En cas d'accident, le constat amiable peut être : - dématérialisé",
        image: "../images/quiz_theme5/admin8.jpg",
        options: [ 
          {text: "C. OUI", isCorrect: true},
          {text: "D. NON", isCorrect: false}
        ],
        audioQuestion: "En cas d'accident, le constat amiable peut être : - dématérialisé C. OUI, D. NON",
        audioAnswer: "correct.mp3"
      },
      {
        question: "Je viens de me faire voler mon permis de conduire. Je fais une déclaration de vol sur internet :",
        image: "../images/quiz_theme5/admin6.jpg",
        options: [ 
          {text: "A. OUI", isCorrect: true},
          {text: "B. NON", isCorrect: false}
        ],
        audioQuestion: "Je viens de me faire voler mon permis de conduire. Je fais une déclaration de vol sur internet :. A. OUI, B. NON",
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