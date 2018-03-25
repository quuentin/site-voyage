<?php

$message = '';
$login['login'] = "quentin";
$login['password'] = "quentin";
if (!empty($_POST['username'])) {
    if ($_POST['username'] == $login['login'] && $_POST['password'] == $login['password']) {
        $message = "<h2>Vous êtes bien connecté.";
        echo $message;
    } else {
        $message .= "<h3>Mauvais identifiants ou mot de passe.";
        echo $message;
    }

}

if (!empty($_POST['usernamesignup'])) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=voyages;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $password = $_POST['passwordsignup'];
    $password2 = $_POST['passwordsignup_confirm'];
    $username = $_POST['usernamesignup'];
    $email = $_POST['emailsignup'];

    $req = $bdd->query('SELECT emailsignup, COUNT (id)  FROM validation');
    $donnees = $req->fetch();

    if ($donnees == 0) {
        $bdd->exec("INSERT INTO validation(usernamesignup, passwordsignup, emailsignup) VALUES('$username','$password','$email')") or die(print_r($bdd->errorInfo()));
        echo "Vous êtes connecté";
        header('Location: index.php');
        exit();

    } else {
    echo ("toto");
    }
}

?>