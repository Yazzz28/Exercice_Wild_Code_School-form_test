<?php
var_dump($_POST);
include 'thanks.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire de contact</title>
</head>
<body>
    <section>
    <h1>Formulaire de contact</h1>
    <form  action="thanks.php"  method="post">
        <div>
          <label  for="nom">Nom :</label>
          <input  type="text"  id="nom"  name="user_name">
        </div>
        <div>
          <label  for="prenom">Prenom :</label>
          <input  type="text"  id="prenom"  name="user_firstName">
        </div>
        <div>
          <label  for="phone">Telephone :</label>
          <input  type="number"  id="phone"  name="user_phone">
        </div>
        <div>
          <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
          <label for="sujet">Quels est le sujet du message ?</label>
          <select name="sujet" id="sujet">
            <option value="info">Info</option>
            <option value="Contact">Contact</option>
            <option value="Commentaires">Commentaires</option>
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
    </section>
</body>
</html>

