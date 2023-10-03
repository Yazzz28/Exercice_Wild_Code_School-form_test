<?php

echo 'Merci ' . $_POST['user_name'] . ' ' . $_POST['user_firstName']
 . ' de nous avoir contacté à propos de ' 
. $_POST['sujet'] . '. <br/> Un de nos conseillers vous contactera soit
 à l\'adresse : ' . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['user_phone'] . 
 ' dans les plus brefs délais pour traiter votre demande : <br/>' . $_POST['user_message'];
