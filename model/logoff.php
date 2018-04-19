<?php
    if (isset($_POST['logoff']) && isset($_SESSION['username'])) {
        $bd = new Database();
        $db = $bd->connect();
        $db->exec("update users set user_state = 0 where username = '".$_SESSION['username']."'");
        session_unset();
        session_destroy();
    }
