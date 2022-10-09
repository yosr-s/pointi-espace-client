<?php
session_start();
if (empty($_SESSION['id'])) {
header('Location:acceuil.php');
}else{?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from avstechnolabs.com/Themeforest/Avs-Job-Portal/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Mar 2022 20:11:20 GMT -->
<head>
  <!-- Title of The Page -->
  <title>acceuil2</title>
  <!-- Meta Informations -->
   <meta charset="utf-8">
   <meta name="description" content="Bootstrap Responsive  Avs - Job Portal HTML Template">
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

  <header class="header">
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

  <section class="hero-area style2">
    <div class="hero-inner">
      <div class="home-slider">
        <div class="single-slider">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 co-12">
                <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                  <img src="assets/images/hero/banner.png" alt="#" />
                </div>
              </div>
              <div class="col-lg-6 co-12">
                <div class="inner-content">
                  <div class="hero-text">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">
                      Cher employé! <br />Bienvenu à votre compte!
                    </h1>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="single-slider">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 co-12">
                <div class="inner-content">
                  <div class="hero-text">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">
                      Cher employé! <br />Bienvenu à votre compte!
                    </h1>
                   
                  </div>
                </div>
              </div>
              <div class="col-lg-6 co-12">
                <div class="hero-image wow fadeInRight" data-wow-delay=".ss">
                  <img src="assets/images/hero/banner2.png" alt="#" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="call-action style2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 col-md-8 col-12">
          <div class="text">
            <h2>Visitez votre profil!</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="button">
            <a href="profil.php?id=<?php echo $_SESSION['id']; ?>" class="btn">Mon profil</a>
          </div>
        </div>
      </div>
    </div>
  </section>

    <div class="container">
      <div class="row">
        
        <div class="col-lg-6 col-12">
          
          <div class="testimonial-inner-head wow fadeInLeft" data-wow-delay=".3s">
            <div class="testimonial-inner">
              <div class="testimonial-slider">
                
               
               
               

               

               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="client-logo-wrapper">
        <div class="
              client-logo-carousel
              d-flex
              align-items-center
              justify-content-between
            ">
           
         
            
           
           
           
           
          
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
    //========= testimonial
    tns({
      container: ".testimonial-slider",
      items: 1,
      slideBy: "page",
      autoplayButtonOutput: false,
      autoplay: true,
      mouseDrag: true,
      gutter: 0,
      nav: false,
      controls: true,
      controlsText: [
        '<i class="lni lni-arrow-left"></i>',
        '<i class="lni lni-arrow-right"></i>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        540: {
          items: 1,
        },
        768: {
          items: 1,
        },
        992: {
          items: 1,
        },
        1170: {
          items: 1,
        },
      },
    });

    //======== Home Slider
    var slider = new tns({
      container: ".home-slider",
      slideBy: "page",
      autoplay: true,
      autoplayButtonOutput: false,
      mouseDrag: true,
      gutter: 0,
      items: 1,
      nav: false,
      controls: true,
      controlsText: [
        '<i class="lni lni-arrow-left prev"></i>',
        '<i class="lni lni-arrow-right next"></i>',
      ],
      responsive: {
        1200: {
          items: 1,
        },
        992: {
          items: 1,
        },
        0: {
          items: 1,
        },
      },
    });
  </script>
</body>


<!-- Mirrored from avstechnolabs.com/Themeforest/Avs-Job-Portal/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Mar 2022 20:11:24 GMT -->
</html>
<?php 
}
?>