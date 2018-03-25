<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ventes de voyages de luxes</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=0.7">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />

    <script src="connexion.js"></script>

</head>

<body>
    
<header>
    <nav>

        <ul id="navigation">
            <li><img id="logo" src="images/logo.png" alt="" /></li>
            <div class="maliste">
                <li class="menu"><a href="#" data-hover="Home">Accueil</a></li>
                <li class="menu"><a href="#" data-hover="About Us">Voyages</a></li>
                <li class="menu"><a href="#" data-hover="Blog">Blog</a></li>
                <li class="menu"><a href="#" data-hover="Services">Services</a></li>
                <li class="menu"><a href="#" data-hover="Products">Produits</a></li>
                <li class="menu"><a href="#" data-hover="Contact">Contact</a></li>

                <!--    <li class="panierco"><a href="#" ><img id="connexion" src="images/connexion.png"/></a></li> -->
            </div>
            <li class="panierco"><a href="#"><img id="panier" src="images/panier.png"/></a></li>
            <li class="dynamique"><a href="#"><img id="cadenas" src="images/cadenas.png"/></a></li>

        </ul>
    </nav>

</header>

<h1 id="titre">
    VOYAGES PRIVES DE LUXES DES VOYAGES SUR MESURE
</h1>
<h2>
    Des voyages vous correspondant en tout point essayez vous ne serez pas déçu.
</h2>

<div id="dynamique">
    <ul>
        <div class="maliste" ><li id="connexion"> <div onclick="ShowHide('container');">CONNEXION</div></li>
            <li id="inscription"><div onclick="ShowHide('formulaire');">INSCRIPTION</li></div>

    </ul>
</div>



<div id="container">
    <div class="container">
        <section>
            <div id="container_demo" >
                <a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a>
                <div id="wrapper">
                    <div id="login" class="animate form">
                        <form  action="connexion.php" autocomplete="on" method="POST">
                            <h1>Log in</h1>
                            <p>
                                <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                            </p>
                            <p>
                                <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                            </p>
                            <p class="keeplogin">
                                <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                                <label for="loginkeeping">Keep me logged in</label>
                            </p>
                            <p class="login button">
                                <input type="submit" value="Login" />
                            </p>
                            <p class="change_link">
                                Not a member yet ?
                                <a href="#toregister" class="to_register">Join us</a>
                            </p>
                        </form>
                    </div>

                    <div id="register" class="animate form">
                        <form  action="connexion.php" autocomplete="on" method="POST">
                            <h1> Sign up </h1>
                            <p>
                                <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                            </p>
                            <p>
                                <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/>
                            </p>
                            <p>
                                <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                            </p>
                            <p>
                                <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                            </p>
                            <p class="signin button">
                                <input type="submit" value="Sign up"/>
                            </p>
                            <p class="change_link">
                                Already a member ?
                                <a href="#tologin" class="to_register"> Go and log in </a>
                            </p>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>

<!--
<div id="formulaire">


</div>

<div id="container">
    <!-- zone de connexion -->
<!--
    <form action="verif">
        <h1>Connexion</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrez le nom d'utilisateur" name="username" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrez le mot de passe" name="password" required>

        <input type="submit" id='submit' value='LOGIN' >
    <div class="dynamicBackgroundLink" onclick="background('container');"> </div>

    </form>
</div>
-->
</body>


</html>