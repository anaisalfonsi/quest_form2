<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>
<form  action="thanks.php"  method="post">
    <div>
        <label  for="firstname">Prénom :</label>
        <input  type="text"  id="firstname"  name="user_firstname">
    </div>
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
        <label for="number">numéro de téléphone:</label>
        <input type="tel" pattern="[0-9]{10}" id="number" name="number">
    </div>
    <div>
        <select name="themes" id="themes_select">
            <option value="">choisi ton thème</option>
            <option value="tomate">tomate</option>
            <option value="bulle">bulle</option>
            <option value="php">php</option>
            <option value="JS">JS</option>
            <option value="HTML">HTML</option>
            <option value="CSS">CSS</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>
</body>
</html></html>