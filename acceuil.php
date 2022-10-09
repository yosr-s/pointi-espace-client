
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from avstechnolabs.com/Themeforest/Avs-Job-Portal/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Mar 2022 20:10:52 GMT -->
<head>
   <!-- Title of The Page -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <title>home</title>
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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61bb14aec82c976b71c1bafa/1fn1chjh0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body>
  
  <div id="loading-area"></div>

  




                 <?php 
                 include "includes/header1.php";
                 ?>
                  
  <section class="hero-area">
    <div class="hero-inner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 co-12">
            <div class="hero-video-head wow fadeInRight" data-wow-delay=".5s">
              <div class="video-inner">
                <img src="assets/images/hero/hero-image.png" alt="#" />
               

           
              </div>
            </div>
          </div>
          <div class="col-lg-6 co-12">
            <div class="inner-content">
              <div class="hero-text">
                <center>
                <h1 class="wow fadeInUp" data-wow-delay=".3s">
                  Connectez à votre compte 
                </h1>
              </center>
               
              </div>

              <form  method="post" action="controller/verifemp1.php">
                <div class="form-group">
                  <label for="email" class="label">E-mail</label>
                  <input type="email" class="form-control" name="email" placeholder="example@gmail.com" id="email" />
                </div>
                <br>
                <div class="form-group">
                  <label for="password" class="label">Password</label>
                  <div class="position-relative">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" />
                  </div>
                  <br>
                </div>
                <div class="form-group d-flex flex-wrap justify-content-between">
                 
                </div>
                <center>
                <div class="form-group mb-8 button">
                <button class="btn" type="submit">Se connecter</button> 

                </div>
                </center>
                
              </form>
            
               
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
              <form>
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
    //========= testimonial
    tns({
      container: ".testimonial-slider",
      items: 1,
      slideBy: "page",
      autoplay: false,
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

    //========= glightbox
    GLightbox({
      href: "assets/images/video/video.mp4",
      type: "video",
      source: "youtube", //vimeo, youtube or local
      width: 900,
      autoplayVideos: true,
    });

  



  </script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>


<!-- Mirrored from avstechnolabs.com/Themeforest/Avs-Job-Portal/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Mar 2022 20:11:16 GMT -->
</html>
