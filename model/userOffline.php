<?php
    require "db-connect.php";
    $bd = new Database();
    $db = $bd->connect();
    $userStateOnline = $db->query("Select username from users where user_state = 0");
    $userOffline = $userStateOnline->fetchAll();
    for ($i=0; $i < count($userOffline); $i++) {
        echo "<p>".$userOffline[$i]['username']."</p>";
    }
