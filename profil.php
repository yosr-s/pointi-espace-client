<?php
session_start();
if (empty($_SESSION['id'])) {
header('Location:acceuil.php');
}else{?>
<?php 
include('includes/connect_db.php');
$id = $_GET['id'];
/*echo $id;
exit;*/
$req = $bdd->query(" SELECT * FROM salarie WHERE id = $id ");
$donnees = $req->fetch();
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from avstechnolabs.com/Themeforest/Avs-Job-Portal/resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Mar 2022 20:11:25 GMT -->
<head>
  <!-- Title of The Page -->
  <title>Profil</title>
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
                 include "includes/header2.php";
                 ?>


  <div class="breadcrumbs overlay">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumbs-content">
            <h1 class="page-title">Profil</h1>
            <p>
              Consulter vos données!
            </p>
          </div>
          <ul class="breadcrumb-nav">
            <li><a href="acceuil2.php">Acceuil</a></li>
            <li>Profil</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="resume section">
    <div class="container">
      <div class="resume-inner">
        <div class="row">
        <?php 
                 include "includes/nav.php";
                 ?>

          <div class="col-lg-8 col-12">
            <div class="inner-content">
              <div class="personal-top-content">
                <div class="row">
                  <div class="col-lg-5 col-md-5 col-12">
                    <div class="name-head">
                      <a class="mb-2" href="#"><img class="circle-54" src="<?php echo 'http://localhost/pointi/uploads/'.$donnees['image'] ?>" width="70px"
                          alt="" /></a>
                      <h4><a class="name" href="#"><?php echo $donnees['nom'] ?> <?php echo $donnees['prenom'] ?></a></h4>
                      <p><a class="deg" href="#"><?php echo $donnees['service'] ?></a></p>
                    
                    </div>
                    <div class="col-lg-3">
                    <?php 
          require_once 'phpqrcode/qrlib.php';
          $path = 'phpqrcode/images/';
          $file = $path.uniqid().".png";
          $text=$donnees['cin'].'-';
          $text.=$donnees['id'].'-';
          $text.=$donnees['nom'].'-';
          $text.=$donnees['prenom'];
          
          QRcode::png($text,$file);
          echo "<center><img src='".$file."'><center>";
       ?>
       </div>
      </div>
                  </div>
                 
                </div>
              </div>
              <br>
              <br>

              <div class="tab">
                <div class="form-group">
                  <label for="name">Nom</label>
                  <input class="form-control" id="name" type="text" name="nom" required="required" value="<?php echo $donnees['nom'] ?>" readonly>
                </div>
                <br>
                <div class="form-group">
                  <label for="lname">Prenom</label>
                  <input class="form-control" id="lname" type="text" name="prenom" value="<?php echo $donnees['prenom'] ?>" readonly>
                </div>
                <br>
                <div class="form-group">
                  <label for="contact">Num carte d'indentite</label>
                  <input class="form-control digits" id="contact" type="text" name="cin" value="<?php echo $donnees['cin'] ?>" readonly>
                </div>
                <br>
                 <div class="form-group">
                  <label for="contact">Email</label>
                  <input class="form-control digits" id="contact" type="Email" name="email" value="<?php echo $donnees['email'] ?>" readonly>
                </div>
                <br>
                <div class="form-group">
                  <label for="contact">Service</label>
                  <input class="form-control digits" id="contact" type="text" name="Service" value="<?php echo $donnees['service'] ?>" readonly>
                </div>
                <br>
                <div class="form-group">
                  <label for="contact">Salaire</label>
                  <input class="form-control digits" id="contact" type="text" name="Salaire" value="<?php echo $donnees['salaire'] ?>"readonly>
                </div>
                
               
                
               
                
              </div>

            

            

             

            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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


<!-- Mirrored from avstechnolabs.com/Themeforest/Avs-Job-Portal/resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Mar 2022 20:11:27 GMT -->
</html>
<?php 
}
?>