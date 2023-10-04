<?php



if ($_POST){
echo 'Merci ' . $data['user_name'] . ' ' . $data['user_firstName']
 . ' de nous avoir contacté à propos de ' 
. $data['raison'] . '. <br/> Un de nos conseillers vous contactera soit
 à l\'adresse : ' . $data['user_email'] . ' ou par téléphone au ' . $data['user_phone'] . 
 ' dans les plus brefs délais pour traiter votre demande : <br/>' . $data['user_message'];
};
