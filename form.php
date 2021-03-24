<?php

 echo '<form  action="thanks.php"  method="post">

            <div>

            <label  for="nom">Nom :</label>

            <input  type="text"  id="nom"  name="user_name">

            </div>
            <div>

            <label for="prenom">Prénom :</label>

            <input type="text" id="prenom"  name="user_firstname">

            </div>

            <div>

            <label  for="courriel">Courriel :</label>

            <input  type="email"  id="courriel"  name="user_email">

            </div>

            <div>

            <label for="tel">Téléphone :</label>

            <input type="tel" id="tel" name="user_tel">

            </div>

            <div>

            <select name="list" size="1">
            <option>info
            <option>demande
            <option>réclamation
            </select>

            </div>

            <div>

            <label  for="message">Message :</label>

            <textarea  id="message"  name="user_message"></textarea>

            </div>

            <div  class="button">

            <button  type="submit">Envoyer votre message</button>

            </div>

        </form>';

      
        
      



?>