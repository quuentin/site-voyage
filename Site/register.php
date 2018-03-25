<?php
if (!empty($_POST['username'])) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=voyages;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $password = $_POST['password'];
    $password2 = $_POST['password_confirm'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $stmt = $bdd->prepare("SELECT COUNT(id) FROM validation where emailsignup=:email");
    /* Préparation des valeurs */
    $stmt->bindParam(':email', $email);

    /* Exécution de la requête */
    $test = $stmt->execute();
    $data = $stmt->fetch();

    if ($data[0] == "0") {
        $bdd->exec("INSERT INTO validation(usernamesignup, passwordsignup, emailsignup) VALUES('$username','$password','$email')") or die(print_r($bdd->errorInfo()));
        echo "Vous êtes inscrit";
        header('Location: index.php');
        exit();
    } else {
    echo ("Un compte avec cet email existe déjà.");
    }
}

?>