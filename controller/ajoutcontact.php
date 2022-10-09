<?php
require_once('../Model/contact.class.php');

$contact = new Contact($_POST['nom'],$_POST['email'],$_POST['sujet'],$_POST['message']);
$contact->ajouter();

header("location:../contacter-nous.php?resultat=oui");
exit();
?>