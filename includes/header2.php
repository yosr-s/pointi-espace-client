<?php 
include('includes/connect_db.php');
$req = $bdd->query("SELECT * FROM salarie");
?>
<header class="header other-page">
    <div class="navbar-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>
              <a class="navbar-brand logo" href="acceuil2.php">
                <img class="logo1" src="assets/images/logo/logo6.svg" alt="Logo" />
              </a>
              <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul id="nav" class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="active" href="acceuil2.php">Acceuil</a>
                    
                  </li>
                  <li class="nav-item">
                    <a href="about2.php">Qui sommes nous?</a>
                    
                  </li>
                  <li class="nav-item">
                    <a href="contacter-nous2.php">Nous contacter</a>
                   
                  </li>
                  <li class="nav-item">
                  <a href="profil.php?id=<?php echo $_SESSION['id']; ?>">Profil</a>
                   
                  </li>
                  <li class="nav-item">
                    <a href="emploi.php">Emploi</a>
                   
                  </li>
                  <li class="nav-item">
                    <a href="pointage.php?id=<?php echo $_SESSION['id']; ?>">Pointage</a>
                   
                  </li>
                 
                 
                 
                </ul>
              </div>
              <div class="button">
              <a href="includes/deconnecter.php">
                  <button type="button" class="btn btn-primary">Déconnecter</button>
                </a>
               
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>