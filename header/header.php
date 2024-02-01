<header>
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top  shadow p-1 mb-3">
        <div class="container-fluid">
          <button class="navbar-toggler btnnavbar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" 
          aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div data-aos="fade-right" class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="../pages/accueil">
              <img src="../images/logo/logo driving-car-solution.png" 
              style="width: 70px; height: 60px; border-radius: 50%;">
              Driving Car Solution
            </a>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 modelmenu">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../pages/accueil">
                    <i class="bi bi-house-door"></i>&nbsp;&nbsp;Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../pages/theme-des-leçons"><i class="bi bi-ev-front"></i>&nbsp;&nbsp;Code de la route</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../pages/serie-globale"><i class="bi bi-card-checklist">&nbsp;&nbsp;</i>série globale</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../pages/contact"><i class="bi bi-envelope"></i>&nbsp;&nbsp;Contact</a>
              </li>
            </ul>
            <ul class="mx-auto mb-2 mb-lg-0 modelmenu">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Profil
                    </a>
                    <ul class="dropdown-menu">
                      <?php
                        if (isset($_SESSION['id'])) {
                          ?>
                            <li><a class="dropdown-item"><?= $_SESSION['username']; ?></a></li>
                            <li><a class="dropdown-item" href="../profile/profil?id=<?= $_SESSION['id']; ?>">Mon profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="deconnexion">Se déconnecter</a></li>

                          <?php
                        } else {?>
                            <li class="nav-item">
                              <a class="nav-link active" href="login">connetion</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" href="inscription">inscription</a>
                            </li>
                        <?php }
                      ?>                     
                    </ul>
                </li>
            </ul>
          </div>
        </div>
      </nav>      
    </header>