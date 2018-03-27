<?php
if (!empty($_POST['username'])) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=voyages;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    if (isset($_POST['username'])) {

        $username = $_POST['username'];
        $passwordAttempt = $_POST['password'];

        //Retrieve the field values from our username form.
        // $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
        // $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

        //Retrieve the user account information for the given username.
        $stmt = $bdd->prepare("SELECT username, password FROM membres WHERE username=:username");
        //Bind value.
        $stmt->bindValue(':username', $username);

        //Execute.
        $stmt->execute();

        //Fetch row.
        $user = $stmt->fetch();

        //If $row is FALSE.
        if ($user === false) {
            //Could not find a user with that username!
            //PS: You might want to handle this error in a more user-friendly manner!
            echo("$username");
            echo("$passwordAttempt");
            echo("$user[username]");

            die('Incorrect username / password combination!');

        } else {
            //User account found. Check to see if the given password matches the
            //password hash that we stored in our users table.

            //Compare the passwords.
            $validPassword = password_verify($passwordAttempt, $user['password']);

            //If $validPassword is TRUE, the login has been successful.
            if ($validPassword) {

                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $username;
                echo "Vous êtes bien connecté";
                include "index.php";
                exit;

            } else {
                //$validPassword was FALSE. Passwords do not match.
                die('Incorrect username / password combination!');
            }
        }

    }
}
?>