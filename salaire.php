<?php
session_start();
if (empty($_SESSION['id'])) {
header('Location:acceuil.php');
}else{?>
<?php 
include('includes/connect_db.php');
$id = $_GET['id'];

$req2 = $bdd->query(" SELECT * FROM pointage,emploi WHERE pointage.idd=$id and  month(pointage.date)=month(current_date)");


$req1 = $bdd->query(" SELECT * FROM pointage,emploi WHERE pointage.idd=$id and  month(pointage.date)=month(current_date)");
$abc = $req1->fetch();
?>

<?php $res2=0;
$total1=0; 
$nb_heures=0;
$nb_minutes=0;
$salaire=0;
$nbhsup=0;
$nbhab=0;
$nbhab1=0;
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from avstechnolabs.com/Themeforest/Avs-Job-Portal/resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Mar 2022 20:11:25 GMT -->
<head>
  <!-- Title of The Page -->
  <title>pointage et salaire du mois courant</title>
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
            <h1 class="page-title">Pointage</h1>
            <p>
              Consulter votre fiche de présence!
            </p>
          </div>
          <ul class="breadcrumb-nav">
            <li><a href="acceuil2.php">Acceuil</a></li>
            <li>Pointage</li>
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
              <h2>Votre pointage et salaire du mois courant</h2>

              <br>
              <br>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Arrivée</th>
                    <th scope="col">Sortie</th>
                    <th scope="col">arrivee2</th>
                    <th scope="col">Sortie2</th>
                    <th scope="col">nb heures</th>


                   

                   


                  </tr>
                </thead>
              
                <tbody>
                <?php 

while ($donnees = $req2->fetch()) {

?> 
             
               
                  <tr>
                    <th scope="row"><?php echo $donnees['date'] ?></th>
                    <td>  <div class="form-group">
                      <input class="form-control" id="name" type="text" name="arrivee" required="required" value="<?php echo $donnees['arrivee'] ?>" readonly>
                    </div></td>
                    <td>  <div class="form-group">
                      <input class="form-control" id="name" type="text" name="sortie" required="required" value="<?php echo $donnees['sortie'] ?>" readonly>
                    </div></td>
                    <td>  <div class="form-group">
                      <input class="form-control" id="name" type="text" name="sortie" required="required" value="<?php echo $donnees['arrive'] ?>" readonly>
                    </div></td>
                    <td>  <div class="form-group">
                      <input class="form-control" id="name" type="text" name="sortie" required="required" value="<?php echo $donnees['sort'] ?>" readonly>
                    </div></td>
                    <td>
                    
                      <?php $diff=strtotime($donnees['sortie'])-strtotime($donnees['arrivee'])+strtotime($donnees['sort'])-strtotime($donnees['arrive']);
                             $total = $diff/60;
                             $res1= sprintf("%02dh %02dm", floor($total/60), $total%60);
                             echo $res1;
                             $total1=$total1+$total;
                             $res2= sprintf("%02dh %02dm", floor($total1/60), $total1%60);
                             $nb_heures=floor($total1/60);
                             $nb_minutes=$total1%60;
                             $nbhsup=$nb_heures-$donnees['nbh'];
                             $nbhab=$donnees['nbh']-floor($total1/60);
                             $nbhab1=sprintf("%02dh %02dm", $nbhab, $nb_minutes);
                             if ($nbhab<0){
                               $ab=0;
                             }
                             else{
                               $ab=$nbhab1;
                             }
                             if ($nbhsup>0){
                               $salaire=$donnees['nbh']*$donnees['prix']+$donnees['prixhsup']*$nbhsup+$nb_minutes*$donnees['prixhsup']/60;
                             }
                             else{
                              $salaire=$nb_heures*$donnees['prix']+$nb_minutes*$donnees['prix']/60;
                             }
                             

                             
                             
                             
                              ?>
                     
                    
                    </td>
                  

                   
                  </tr>
                  <?php } ?>
                

                
                 
                 
                </tbody>
              </table>
              <br>
                      <label for="">nb heures total</label>
                     
                      <input type="text" value="<?php echo $res2 ?>" readonly>
                      

                      <label for="">Salaire</label>
                      <input type="text" value="<?php echo $salaire ?> dt" readonly>
                      <br>
                      <label for="">Absence</label>
                      <input type="text" value="<?php echo $ab ?>" readonly>
            

            

             

            
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