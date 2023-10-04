<?php
  if($_POST){
    var_dump($_POST);
    $data = array_map('trim', $_POST);
    $errors = [];

    if ($data['user_name'] === ''){
      $errors['user_name'] = "Veuillez saisir votre nom !!";
    }
    if ($data['user_firstName'] === ''){
      $errors['user_firstName'] = "Veuillez saisir votre prenom !!";
    }
    if ($data['user_phone'] === ''){
      $errors['user_phone'] = "Veuillez saisir votre numero de telephone !!";
    }
    if ($data['user_email'] === ''){
      $errors['user_email'] = "Veuillez saisir votre numero de adresse mail !!";
    }
    if (filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)){
      $errors['invalidMail'] = "Veuillez saisir une adresse mail valide";
    }
    if ($data['raison'] === ''){
      $errors['raison'] = "Veuillez selectionner la raison de votre message !!";
    }
    if ($data['user_message'] === ''){
      $errors['user_message'] = "Veuillez saisir votre message !!";
    }
    if (!$errors){
      include('thanks.php');
    }
  }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
</head>
<body>
    <section>
    <h1>Formulaire de contact</h1>
    <form  action="form.php"  method="post">
        <div>
          <label  for="nom">Nom :</label>
          <input  type="text"  id="nom" placeholder="Nom"  name="user_name" require>
          <?php
          if (isset($errors['user_name'])) {
            echo "<p>" . $errors['user_name'] . "</p>";
          }
          ?>
        </div>
        <div>
          <label  for="prenom">Prenom :</label>
          <input  type="text"  id="prenom" placeholder="Prenom"  name="user_firstName" require>
          <?php
          if (isset($errors['user_firstName'])) {
            echo "<p>" . $errors['user_firstName'] . "</p>";
          }
          ?>
        </div>
        <div>
          <label  for="phone">Telephone :</label>
          <input  type="number"  id="phone" placeholder="0645654565"  name="user_phone" require>
          <?php
          if (isset($errors['user_phone'])) {
            echo "<p>" . $errors['user_phone'] . "</p>";
          }
          ?>
        </div>
        <div>
          <label  for="courriel">Courriel :</label>
            <input  type="mail"  id="courriel" placeholder="exemple@exemple.com"  name="user_email" require>
            <?php
          if (isset($errors['user_email'])) {
            echo "<p>" . $errors['user_email'] . "</p>";
          }
          if (isset($errors['invalidMail'])){
            echo "<p>" . $errors['invalidMail'] . "</p>"; 
          }
          ?>
        </div>

            <?php $select = ['Infos', 'Contact', 'Message'];?>

        <div>

            <select name="raison" require>
            <option $value="">Veuillez selectionner ...</option>
            <?php
                foreach ($select as $key => $value ){
                  echo "<option value =" . $key .">" . $value . "</option>";
                }
            ?>
            </select>
        </div>
        <div>
          <label  for="message">Message :</label>
          <textarea  id="message" placeholder="Message"  name="user_message" require></textarea>
          <?php
          if (isset($errors['user_message'])) {
            echo "<p>" . $errors['user_message'] . "</p>";
          }
          ?>
        </div>
        <div  class="button">
          <button  type="submit" value="Submit">Envoyer votre message</button>
        </div>
        </form>
    </section>
</body>
</html>
