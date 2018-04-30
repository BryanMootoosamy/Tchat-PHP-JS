<?php
    require "db-connect.php";
    $bd = new Database();
    $db = $bd->connect();
    $db->exec("update users set user_state = 0 where username = '".$_SESSION['username']."'");
