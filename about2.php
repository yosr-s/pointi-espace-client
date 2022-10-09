<?php
session_start();
if (empty($_SESSION['id'])) {
header('Location:acceuil.php');
}else{?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from avstechnolabs.com/Themeforest/Avs-Job-Portal/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Mar 2022 20:11:24 GMT -->
<head>
  <!-- Title of The Page -->
  <title>about us 2</title>
  <!-- Meta Informations -->
  <meta charset="utf-8">
  <meta name="description" content="Bootstrap Responsive  Avs- Job Portal HTML Template">
  <meta name="keywords" content="Avs - Job Portal HTML Template,template,bootstrap 5,ui template kit,envato templates,Job Portal HTML templates,html,css">
  <meta name="author" content="Avs - Job Portal HTML Template">
  <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

  <link rel="stylesheet" href="assets/css/fonts.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/tiny-slider.css" />
  <link rel="stylesheet" href="assets/css/glightbox.min.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
  
  <div id="loading-area"></div>

                <?php 
                 include "includes/header2.php";
                 ?>

  <div class="breadcrumbs overlay">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumbs-content">
            <h1 class="page-title">About Us</h1>
            <p>
              Logiciel pour la gestion du temps de travail...
              <br>
              La meilleure application pour votre gestion RH...
            </p>
          </div>
          <ul class="breadcrumb-nav">
            <li><a href="acceuil2.php">Acceuil</a></li>
            <li>Qui sommes nous?</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <section class="about-us section">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 col-md-10 col-12">
          <div class="content-right wow fadeInRight" data-wow-delay=".5s">
            <h2>
              TOUT EST BIEN ORGANISE 
             
            </h2>

            <div class="single-list">
              <i class="lni lni-grid-alt"></i>

              <div class="list-bod">
                <h5>Suivi des horaires de travail de votre entreprise</h5>
                <p>
                  comparer les heures de travail prévues et les heures pratiquement travaillées.
                </p>
              </div>
            </div>

            <div class="single-list">
              <i class="lni lni-search"></i>
              <div class="list-bod">
                <h5>Suivi du temps sur la plate-forme web</h5>
                <p>
                  Permetter aux employés de consulter leurs heures d'arrivées et de sortie.
                </p>
              </div>

             
            </div>

            <div class="single-list">
              <i class="lni lni-stats-up"></i>

             
              <div class="list-bod">
                <h5>Augmenter la productivité</h5>
                <p>
                 Controler quotidiennement vos feuilles du temps, rémunérer facilement toute heure supplémentaire.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-10 col-12">
          <div class="content-left wow fadeInLeft" data-wow-delay=".3s">
            <div calss="row">
              <div calss="col-lg-6 col-12">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-6">
                    <img class="single-img" src="assets/images/about/small1.jpg" alt="#" />
                  </div>
                  <div class="col-lg-6 col-md-6 col-6">
                    <img class="single-img mt-50" src="assets/images/about/small2.jpg" alt="#" />
                  </div>
                </div>
              </div>
              <div calss="col-lg-6 col-12">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-6">
                    <img class="single-img minus-margin" src="assets/images/about/small3.jpg" alt="#" />
                  </div>
                  <div class="col-lg-6 col-md-6 col-6">
                    <div class="media-body">
                      <i class="lni lni-checkmark"></i>
                      <h6 class="">Job alert!</h6>
                      <p class="">104 new jobs are available in this week!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="apply-process section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-4 col-12">
          <div class="process-item">
            <i class="lni lni-user"></i>
            <h4>une meilleure communication</h4>
            <p>
              Notre application facilitera la communication employeur-employé... 
            </p>
          </div>
        </div>
       
        <div class="col-lg-6 col-md-4 col-12">
          <div class="process-item">
            <i class="lni lni-briefcase"></i>
            <h4>Plus de productivité</h4>
            <p>
              Notre application aide à bien respecter les horarires, donc à etre plus productif...
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>



 

  <div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
      <button type="button" class="
            circle-32
            btn-reset
            bg-white
            pos-abs-tr
            mt-md-n6
            mr-lg-n6
            focus-reset
            z-index-supper
          " data-dismiss="modal">
        <i class="lni lni-close"></i>
      </button>
      <div class="login-modal-main">
        <div class="row no-gutters">
          <div class="col-12">
            <div class="row">
              <div class="heading">
                <h3>Login From Here</h3>
                <p>
                  Log in to continue your account <br />
                  and explore new jobs.
                </p>
              </div>
              <div class="social-login">
                <ul>
                  <li>
                    <a class="linkedin" href="#"><i class="lni lni-linkedin-original"></i> Log in with
                      LinkedIn</a>
                  </li>
                  <li>
                    <a class="google" href="#"><i class="lni lni-google"></i> Log in with Google</a>
                  </li>
                  <li>
                    <a class="facebook" href="#"><i class="lni lni-facebook-original"></i> Log in with
                      Facebook</a>
                  </li>
                </ul>
              </div>
              <div class="or-devider">
                <span>Or</span>
              </div>
              <form >
                <div class="form-group">
                  <label for="email" class="label">E-mail</label>
                  <input type="email" class="form-control" placeholder="example@gmail.com" id="email" />
                </div>
                <div class="form-group">
                  <label for="password" class="label">Password</label>
                  <div class="position-relative">
                    <input type="password" class="form-control" id="password" placeholder="Enter password" />
                  </div>
                </div>
                <div class="form-group d-flex flex-wrap justify-content-between">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">Remember password</label>
                  </div>
                  <a href="#" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                </div>
                <div class="form-group mb-8 button">
                  <button class="btn">Log in</button>
                </div>
                <p class="text-center create-new-account">
                  Don’t have an account? <a href="#">Create a free account</a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade form-modal" id="signup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
      <button type="button" class="
            circle-32
            btn-reset
            bg-white
            pos-abs-tr
            mt-md-n6
            mr-lg-n6
            focus-reset
            z-index-supper
          " data-dismiss="modal">
        <i class="lni lni-close"></i>
      </button>
      <div class="login-modal-main">
        <div class="row no-gutters">
          <div class="col-12">
            <div class="row">
              <div class="heading">
                <h3>
                  Create a free Account <br />
                  Today
                </h3>
                <p>
                  Create your account to continue <br />
                  and explore new jobs.
                </p>
              </div>
              <div class="social-login">
                <ul>
                  <li>
                    <a class="linkedin" href="#"><i class="lni lni-linkedin-original"></i> Import from
                      LinkedIn</a>
                  </li>
                  <li>
                    <a class="google" href="#"><i class="lni lni-google"></i> Import from Google</a>
                  </li>
                  <li>
                    <a class="facebook" href="#"><i class="lni lni-facebook-original"></i> Import from
                      Facebook</a>
                  </li>
                </ul>
              </div>
              <div class="or-devider">
                <span>Or</span>
              </div>
              <form >
                <div class="form-group">
                  <label for="email" class="label">E-mail</label>
                  <input type="email" class="form-control" placeholder="example@gmail.com" />
                </div>
                <div class="form-group">
                  <label for="password" class="label">Password</label>
                  <div class="position-relative">
                    <input type="password" class="form-control" placeholder="Enter password" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="label">Confirm Password</label>
                  <div class="position-relative">
                    <input type="password" class="form-control" placeholder="Enter password" />
                  </div>
                </div>
                <div class="form-group d-flex flex-wrap justify-content-between">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" />
                    <label class="form-check-label" for="flexCheckDefault">Agree to the <a href="#">Terms &
                        Conditions</a></label>
                  </div>
                </div>
                <div class="form-group mb-8 button">
                  <button class="btn">Sign Up</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php 
                 include "includes/footer.php";
                 ?>

  <a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/tiny-slider.js"></script>
  <script src="assets/js/glightbox.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
    //====== Clients Logo Slider
    tns({
      container: ".client-logo-carousel",
      slideBy: "page",
      autoplay: true,
      autoplayButtonOutput: false,
      mouseDrag: true,
      gutter: 15,
      nav: false,
      controls: false,
      responsive: {
        0: {
          items: 1,
        },
        540: {
          items: 2,
        },
        768: {
          items: 3,
        },
        992: {
          items: 4,
        },
        1170: {
          items: 6,
        },
      },
    });
  </script>
</body>


<!-- Mirrored from avstechnolabs.com/Themeforest/Avs-Job-Portal/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Mar 2022 20:11:24 GMT -->
</html>
<?php 
}
?>