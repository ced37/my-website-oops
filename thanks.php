<?php


$nom = $_POST["name"];
$prenom = $_POST["firstname"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];
$list = $_POST["list"];
$message = $_POST["message"];

$errors = [];

if (
    filter_has_var(INPUT_POST, "name") &&
    filter_has_var(INPUT_POST, "firstname") &&
    filter_has_var(INPUT_POST, "mail") &&
    filter_has_var(INPUT_POST, "tel") &&
    filter_has_var(INPUT_POST, "list") &&
    filter_has_var(INPUT_POST, "message")
){ 
    $nameSize = strlen($_POST["name"]);
    if ($nameSize < 1){
        $errors[] = "name too short";
    }
    if ($nameSize > 255){
        $errors[] = "name too long";
    }
    $firstnameSize = strlen($_POST["firstname"]);
    if ($firstnameSize < 1){
        $errors[] = "firstname too short";
    }
    if ($firstnameSize > 100){
        $errors[] = "firstname too long";
    }
    if (strlen($_POST["message"]) < 1){
        $errors[] = "message too short";
    }
    if (empty($mail)){
        $errors[] = "email not valided";
    }
    
}



include 'form.php';


echo '<p>Merci '. $prenom . $nom . ' de nous avoir contacté à propos de ' . $list .

' Un de nos conseiller vous contactera soit à l’adresse ' . $mail . ' ou par téléphone au ' .$tel .' dans les plus brefs délais pour traiter votre demande : 

' . $message . '</p>';



?>