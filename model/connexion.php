<?php
    if (isset($_POST['sign'])) {
        require model."sign.php";
        $user = new UserSignUp($username, $email, $password, $confirm, $honeypot);
        $user->signUp();
    } elseif (isset($_POST['log'])) {
        require model."log.php";
        $user = new Connexion($emailLog, $passwordLog);
        $user->log();
    }
