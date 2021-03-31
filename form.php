<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    foreach ($errors as $error) {
        echo "<p class='error'>" . $error . "</p>" . PHP_EOL;
    }
    ?>

        <form  action="thanks.php"  method="post">
            <label  for="name">Nom :</label>
            <input  type="text"  id="name"  name="name">
            <label for="prenom">Prénom :</label>
            <input type="text" id="firstname"  name="firstname">
            <label  for="mail">Email :</label>
            <input  type="email"  id="mail"  name="mail">
            <label for="tel">Téléphone :</label>
            <input type="tel" id="tel" name="tel">
            <select name="list" size="1">
            <option>info
            <option>demande
            <option>réclamation
            </select>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="message"></textarea>
            <button  type="submit">Envoyer votre message</button>

        </form>
    
</body>
</html>


      
        
      



