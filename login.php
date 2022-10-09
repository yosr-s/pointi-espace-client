<?php
session_start();
if (empty($_SESSION['id'])) {
header('Location:acceuil.php');
}else{?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Mar 2022 18:21:19 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
          
               
                    <img class="logo-size" src="images/logo6.svg" alt="">
               
           
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Connectez-vous!</h3>
                        <p>Accédez à votre compte</p>
                        <div class="page-links">
                            <a href="#" class="active">Login</a>
                        </div>
                        <form method="post" action="controller/verifemp.php">
                            <input class="form-control" type="text" name="email" placeholder="adresse email" required>
                            <input class="form-control" type="password" name="password" placeholder="mot de passe" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Connexion</button> 
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Mar 2022 18:21:26 GMT -->
</html>
<?php 
}
?>