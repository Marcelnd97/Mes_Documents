<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top  shadow p-2 mb-2" style="background-color: chocolate;">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" 
          aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">
              <img class="circular-square" src="./images/bdd.png" style="width: 40px; 
              height: 40px; border-radius: 50%;
              border-top-left-radius: 50% 50%; 
              border-top-right-radius: 50% 50%; 
              border-bottom-right-radius: 50% 50%; 
              border-bottom-left-radius: 50% 50%;
              margin:2px;">
              Driving Solution
            </a>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 modelmenu">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">
                    <i class="bi bi-house-door"></i>&nbsp;&nbsp;Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="apropos.php"><i class="bi bi-info-square"></i>&nbsp;&nbsp;Á propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="coderoute.php"><i class="bi bi-ev-front"></i>&nbsp;&nbsp;Code de la route</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="serie-globale.php"><i class="bi bi-card-checklist">&nbsp;&nbsp;</i>série globale</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.php"><i class="bi bi-envelope"></i>&nbsp;&nbsp;Contact</a>
              </li>
            </ul>
            <ul class="mx-auto mb-2 mb-lg-0 modelmenu">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Profil
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="profil.php?id=<?php echo $_SESSION['user_id']; ?>">Mes information</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="theme-des-leçons.php?logout=true">Se déconnecter</a></li>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
      </nav>      
    </header>