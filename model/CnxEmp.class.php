<?php
class CnxSalarie{
private $email;
private $password;

        
function __construct($email,$password){
$this->email = $email;
$this->password = $password;


}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM Salarie WHERE email = '$this->email' AND password = '$this->password'");
    $resultat = $req->fetch();

  if (!$resultat)
{
  header('location:../login.php?mess=error');
  
}
   else
{
       session_start();

       $_SESSION['id'] = $resultat['id'];
       $_SESSION['nom'] = $resultat['nom'];
       $_SESSION['prenom'] = $resultat['prenom'];
       $_SESSION['cin'] = $resultat['cin'];
       $_SESSION['email'] = $resultat['email'];
       $_SESSION['password'] = $resultat['password'];
       $_SESSION['service'] = $resultat['service'];
       $_SESSION['salaire'] = $resultat['salaire'];
       $_SESSION['image'] = $resultat['image'];
       $_SESSION['commentaire'] = $resultat['commentaire'];




       
       
	   
	header('location:../acceuil2.php');


} 

}
}


$Salarie = new CnxSalarie($_POST['email'],$_POST['password']);


?>