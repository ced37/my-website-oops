<?php


$nom = $_POST["user_name"];
$prenom = $_POST["user_firstname"];
$email = $_POST["user_email"];
$tel = $_POST["user_tel"];
$list = $_POST["list"];
$message = $_POST["user_message"];



include 'form.php';




echo '<p>Merci '. $prenom . $nom . ' de nous avoir contacté à propos de ' . $list .

' Un de nos conseiller vous contactera soit à l’adresse ' . $email . ' ou par téléphone au ' .$tel .' dans les plus brefs délais pour traiter votre demande : 

' . $message . '</p>';





?>