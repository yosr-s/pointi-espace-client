
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from avstechnolabs.com/Themeforest/Avs-Job-Portal/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Mar 2022 20:11:32 GMT -->
<head>
   <!-- Title of The Page -->
   <title>contact</title>
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

                 <?php 
                 include "includes/header3.php";
                 ?>

  <div class="breadcrumbs overlay">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumbs-content">
            <h1 class="page-title">Contactez-nous</h1>
            <p>
              Business plan draws on a wide range of knowledge from different
              business<br />
              disciplines. Business draws on a wide range of different
              business .
            </p>
          </div>
          <ul class="breadcrumb-nav">
            <li><a href="acceuil.php">Acceuil</a></li>
            <li>Contactez-nous</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

                                   

  <section id="contact-us" class="contact-us section">
    <div class="container">
      <div class="contact-head wow fadeInUp" data-wow-delay=".4s">
        <div class="row">
          <div class="col-12">
            <div class="form-main">
            <?php 
                                            if (isset($_GET['resultat'])) {

                                            if ($_GET['resultat'] == 'oui') {
                                           ?>
                                        <div class="alert alert-success" role="alert">
                                          Contact envoyé avec succès!
                                        </div>
                                    <?php } } ?>
              <form class="form" action="controller/ajoutcontact.php" method="post">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <input  type="text" name="nom" placeholder="Nom et prénom" required="required" />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <input  type="email" name="email" placeholder="Email" required="required" />
                    </div>
                  </div>
                  <div class="form-group">
                      <input  type="text" name="sujet" placeholder="Sujet" required="required" />
                    </div>
                  </div>
                 
                 
                  <div class="col-12">
                    <div class="form-group message">
                      <textarea placeholder="Message" name="message"></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group button">
                      <button class="btn" type="submit">
                        Envoyer
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-12 m-auto">
            <div class="single-head m-auto">
              <div class="contant-inner-title">
                <h4>Contact Information</h4>
                <p>
                  Business consulting excepteur sint occaecat cupidatat
                  consulting non proident.
                </p>
              </div>
              <div class="single-info">
                <i class="lni lni-phone"></i>
                <ul>
                  <li>123-456-789</li>
                </ul>
              </div>
              <div class="single-info">
                <i class="lni lni-envelope"></i>
                <ul>
                  <li>
                    <a href="#"><span
                        class="__cf_email__"
                        >[email&#160;protected]</span></a>
                  </li>
                </ul>
              </div>
              <div class="single-info">
                <i class="lni lni-map"></i>
                <ul>
                  <li>
                    KA-62/1, Travel Agency, 45 Grand Central Terminal, New
                    York.
                  </li>
                </ul>
              </div>
             
            </div>
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
</body>


<!-- Mirrored from avstechnolabs.com/Themeforest/Avs-Job-Portal/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Mar 2022 20:11:32 GMT -->
</html>
