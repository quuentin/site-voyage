<?php

$message = '';
$login['login'] = "quentin";
$login['password'] = "quentin";

if (!empty($_POST['username'])) {
    if ($_POST['username'] == $login['login'] && $_POST['password'] == $login['password']) {
        $message = "<h2>Vous êtes bien connecté.";
        echo $message;
    } else {
        $message  .= "<h3>Mauvais identifiants ou mot de passe.";
        echo $message;
    }

}

// TU POURRAS USE ÇA POUR FAIRE LA CONNEXION 

// if (!empty($_POST['usernamesignup'])) {
//     try {
//         $bdd = new PDO('mysql:host=localhost;dbname=voyages;charset=utf8', 'root', 'root');
//     } catch (Exception $e) {
//         die('Erreur : ' . $e->getMessage());
//     }
// }

?>