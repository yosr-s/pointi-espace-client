<?php
session_start();
if (empty($_SESSION['id'])) {
header('Location:acceuil.php');
}else{?>
<?php 
include('includes/connect_db.php');
$req = $bdd->query("SELECT * FROM notif");
$donnees = $req->fetch();

$req1 = $bdd->query("SELECT * FROM notif");
//$donnees1 = $req1->fetch();

?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from avstechnolabs.com/Themeforest/Avs-Job-Portal/resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Mar 2022 20:11:25 GMT -->
<head>
  <!-- Title of The Page -->
  <title>notifications</title>
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
            <h1 class="page-title">Notifications</h1>
            <p>
              Consulter vos nouveautés!
            </p>
          </div>
          <ul class="breadcrumb-nav">
            <li><a href="acceuil2.html">Acceuil</a></li>
            <li>Notifications</li>

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
          
            <div class="job-items">
            
            <?php 

while ($donnees1 = $req1->fetch()) {

?>
          
                <div class="manage-content">
          

                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-2 col-md-2 col-12">
                            <div class="title-img">
                                <div class="can-img">
                                    <img src="assets/images/jobs/candidates.png" alt="#" width="50px">
                                </div>
                            </div>
                        </div>
     
                       

                        <div class="col-lg-7 col-md-7 ">
                            <p class="description"><?php echo $donnees1['titre'] ?></p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                           
                                <p><?php echo $donnees1['description'] ?></p>
                          
                        </div>

                      


                    </div>
                  </div>
                
                  <?php } ?>

               
            </div>
            

            <div class="pagination left pagination-md-center">
                <ul class="pagination-list">
                    <li><a href="#"><i class="lni lni-arrow-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="lni lni-arrow-right"></i></a></li>
                </ul>
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